<?php
// Add menu item to admin dashboard
add_action('admin_menu', 'clients_admin_menu');

function clients_admin_menu() {
    add_menu_page(
        'Clients Management',
        'Clients',
        'manage_options',
        'clients-management',
        'clients_admin_page',
        'dashicons-groups',
        30
    );
}

// Admin page content
function clients_admin_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'clients';
    
    // Ensure table exists
    check_and_create_clients_table();
    
    // Initialize error/success messages
    $message = '';
    
    // Handle form submissions
    if (isset($_POST['client_action'])) {
        $nonce = $_POST['_wpnonce'];
        if (!wp_verify_nonce($nonce, 'client_nonce')) {
            $message = '<div class="error"><p>Security check failed. Please try again.</p></div>';
        } else {
            if ($_POST['client_action'] === 'add' || $_POST['client_action'] === 'edit') {
                $client_name = sanitize_text_field($_POST['client_name']);
                $client_url = sanitize_text_field($_POST['client_url']);
                
                // Handle image upload
                $image_url = '';
                if (!empty($_FILES['client_image']['name'])) {
                    $upload = wp_upload_bits(
                        $_FILES['client_image']['name'],
                        null,
                        file_get_contents($_FILES['client_image']['tmp_name'])
                    );
                    if ($upload['error']) {
                        $message = '<div class="error"><p>Image upload failed: ' . esc_html($upload['error']) . '</p></div>';
                    } else {
                        $image_url = $upload['url'];
                    }
                } elseif ($_POST['client_action'] === 'edit' && !empty($_POST['existing_image'])) {
                    $image_url = esc_url_raw($_POST['existing_image']);
                }

                $data = array(
                    'name' => $client_name,
                    'url' => $client_url,
                    'image' => $image_url
                );

                if ($_POST['client_action'] === 'add') {
                    $result = $wpdb->insert($table_name, $data);
                    if ($result === false) {
                        $message = '<div class="error"><p>Failed to add client: ' . esc_html($wpdb->last_error) . '</p></div>';
                    } else {
                        $message = '<div class="updated"><p>Client added successfully!</p></div>';
                    }
                } else {
                    $result = $wpdb->update(
                        $table_name,
                        $data,
                        array('id' => intval($_POST['client_id']))
                    );
                    if ($result === false) {
                        $message = '<div class="error"><p>Failed to update client: ' . esc_html($wpdb->last_error) . '</p></div>';
                    } else {
                        $message = '<div class="updated"><p>Client updated successfully!</p></div>';
                    }
                }
            } elseif ($_POST['client_action'] === 'delete' && isset($_POST['client_id'])) {
                $result = $wpdb->delete($table_name, array('id' => intval($_POST['client_id'])));
                if ($result === false) {
                    $message = '<div class="error"><p>Failed to delete client: ' . esc_html($wpdb->last_error) . '</p></div>';
                } else {
                    $message = '<div class="updated"><p>Client deleted successfully!</p></div>';
                }
            }
        }
    }

    // Get all clients
    $clients = $wpdb->get_results("SELECT * FROM $table_name");
    if ($wpdb->last_error) {
        $message .= '<div class="error"><p>Database error: ' . esc_html($wpdb->last_error) . '</p></div>';
    }
    ?>
    <div class="wrap">
        <h1>Clients Management</h1>
        <?php echo $message; ?>
        
        <!-- Add/Edit Client Form -->
        <div class="card">
            <h2>Add New Client</h2>
            <form method="post" enctype="multipart/form-data">
                <?php wp_nonce_field('client_nonce'); ?>
                <input type="hidden" name="client_action" value="add">
                <table class="form-table">
                    <tr>
                        <th><label for="client_name">Client Name</label></th>
                        <td><input type="text" name="client_name" id="client_name" class="regular-text" required></td>
                    </tr>
                    <tr>
                        <th><label for="client_url">Client URL</label></th>
                        <td><input type="url" name="client_url" id="client_url" class="regular-text"></td>
                    </tr>
                    <tr>
                        <th><label for="client_image">Client Image</label></th>
                        <td><input type="file" name="client_image" id="client_image" accept="image/*" required></td>
                    </tr>
                </table>
                <?php submit_button('Add Client'); ?>
            </form>
        </div>

        <!-- Clients List -->
        <div class="card">
            <h2>Existing Clients</h2>
            <?php if (empty($clients)): ?>
                <p>No clients found.</p>
            <?php else: ?>
                <table class="wp-list-table widefat fixed striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>URL</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($clients as $client): ?>
                        <tr>
                            <td>
                                <?php if ($client->image): ?>
                                    <img src="<?php echo esc_url($client->image); ?>" style="max-width: 100px;">
                                <?php else: ?>
                                    No image
                                <?php endif; ?>
                            </td>
                            <td><?php echo esc_html($client->name); ?></td>
                            <td><?php echo esc_url($client->url); ?></td>
                            <td>
                                <button class="button edit-client" data-client='<?php echo json_encode($client); ?>'>Edit</button>
                                <form method="post" style="display:inline;">
                                    <?php wp_nonce_field('client_nonce'); ?>
                                    <input type="hidden" name="client_action" value="delete">
                                    <input type="hidden" name="client_id" value="<?php echo $client->id; ?>">
                                    <input type="submit" class="button button-link-delete" value="Delete" onclick="return confirm('Are you sure?');">
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>

    <!-- Edit Client Modal -->
    <div id="edit-client-modal" style="display:none;">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data">
                <?php wp_nonce_field('client_nonce'); ?>
                <input type="hidden" name="client_action" value="edit">
                <input type="hidden" name="client_id" id="edit_client_id">
                <input type="hidden" name="existing_image" id="edit_existing_image">
                <table class="form-table">
                    <tr>
                        <th><label for="edit_client_name">Client Name</label></th>
                        <td><input type="text" name="client_name" id="edit_client_name" class="regular-text" required></td>
                    </tr>
                    <tr>
                        <th><label for="edit_client_url">Client URL</label></th>
                        <td><input type="url" name="client_url" id="edit_client_url" class="regular-text"></td>
                    </tr>
                    <tr>
                        <th><label for="edit_client_image">Client Image</label></th>
                        <td>
                            <img id="edit_image_preview" style="max-width: 100px; display: none;">
                            <input type="file" name="client_image" id="edit_client_image" accept="image/*">
                        </td>
                    </tr>
                </table>
                <p>
                    <input type="submit" class="button button-primary" value="Update Client">
                    <button type="button" class="button close-modal">Cancel</button>
                </p>
            </form>
        </div>
    </div>

    <style>
        .modal-content {
            background: white;
            padding: 20px;
            max-width: 500px;
            margin: 50px auto;
            border-radius: 5px;
        }
        #edit-client-modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            z-index: 9999;
        }
    </style>

    <script>
        jQuery(document).ready(function($) {
            $('.edit-client').click(function() {
                const client = $(this).data('client');
                
                $('#edit_client_id').val(client.id);
                $('#edit_client_name').val(client.name);
                $('#edit_client_url').val(client.url);
                $('#edit_existing_image').val(client.image);
                
                if (client.image) {
                    $('#edit_image_preview').attr('src', client.image).show();
                } else {
                    $('#edit_image_preview').hide();
                }
                
                $('#edit-client-modal').show();
            });

            $('.close-modal').click(function() {
                $('#edit-client-modal').hide();
            });
        });
    </script>
    <?php
}

// Function to check and create clients table
function check_and_create_clients_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'clients';
    $charset_collate = $wpdb->get_charset_collate();

    // Check if table exists
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            name varchar(255) NOT NULL,
            url varchar(255) DEFAULT '',
            image varchar(255) DEFAULT '',
            PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

        // Log any errors
        if ($wpdb->last_error) {
            error_log('Clients table creation failed: ' . $wpdb->last_error);
        } else {
            error_log('Clients table created successfully');
        }
    }
}

// Create table on theme activation
add_action('after_switch_theme', 'check_and_create_clients_table');

// Check table on admin init
add_action('admin_init', 'check_and_create_clients_table');

// Enqueue jQuery
add_action('admin_enqueue_scripts', 'enqueue_clients_admin_scripts');

function enqueue_clients_admin_scripts($hook) {
    if ($hook !== 'toplevel_page_clients-management') {
        return;
    }
    wp_enqueue_script('jquery');
}

?>
