<?php
/*
Template Name: Contact Template
*/
get_header();

// Initialize variables for form feedback
$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form_nonce']) && wp_verify_nonce($_POST['contact_form_nonce'], 'contact_form_action')) {
    // Sanitize form inputs
    $name = sanitize_text_field($_POST['full-name'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $project = sanitize_text_field($_POST['project'] ?? '');
    $number = sanitize_text_field($_POST['number'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    // Validate inputs
    $errors = [];
    if (empty($name)) {
        $errors[] = 'Full Name is required.';
    }
    if (empty($email) || !is_email($email)) {
        $errors[] = 'A valid email is required.';
    }
    if (empty($project)) {
        $errors[] = 'Project Type is required.';
    }
    if (empty($number)) {
        $errors[] = 'Mobile number is required.';
    }
    if (empty($message)) {
        $errors[] = 'Message is required.';
    }

    if (empty($errors)) {
        // Save the submission as a custom post type
        $submission_id = wp_insert_post([
            'post_title'   => 'Contact Submission from ' . $name,
            'post_content' => $message,
            'post_type'    => 'contact_submission',
            'post_status'  => 'publish',
            'meta_input'   => [
                'contact_name'    => $name,
                'contact_email'   => $email,
                'contact_project' => $project,
                'contact_number'  => $number,
            ],
        ]);

        if (!is_wp_error($submission_id)) {
            $success_message = 'Thank you for your message! We will get back to you soon.';
            // Send email notification to admin
            $admin_email = get_option('admin_email');
            $subject = 'New Contact Form Submission';
            $body = "Name: $name\nEmail: $email\nProject Type: $project\nMobile: $number\nMessage:\n$message";
            wp_mail($admin_email, $subject, $body);
        } else {
            $error_message = 'There was an error saving your submission. Please try again.';
        }
    } else {
        $error_message = implode('<br>', $errors);
    }
}
?>

<style>
    .cs-alert {
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
    }
    .cs-alert.cs-success {
        background-color: #d4edda;
        color: #155724;
    }
    .cs-alert.cs-error {
        background-color: #f8d7da;
        color: #721c24;
    }
    .cs-form_field {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .cs-btn.cs-style1 {
        padding: 10px 20px;
        background-color: #FF4A17;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }
    .cs-btn.cs-style1:hover {
        background-color: #e43e14;
    }
    .cs-contact_info.cs-style1 li {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }
    .cs-contact_info.cs-style1 svg {
        flex-shrink: 0;
    }
    .cs-primary_color {
        color: #FF4A17;
    }
</style>

<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="<?php echo esc_url(get_template_directory_uri() . '/img/contact_hero_bg.jpeg'); ?>">
    <div class="container">
        <div class="cs-page_heading_in">
            <h1 class="cs-page_title cs-font_50 cs-white_color">Contact Us</h1>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
        </div>
    </div>
</div>
<!-- End Hero -->
<div class="cs-height_150 cs-height_lg_80"></div>

<!-- Start Contact Section -->
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="cs-section_heading cs-style1">
                <h3 class="cs-section_subtitle">Getting Touch</h3>
                <h2 class="cs-section_title">Do you have a project <br>in your mind?</h2>
            </div>
            <div class="cs-height_55 cs-height_lg_30"></div>
            <ul class="cs-contact_info cs-style1 cs-mp0">
                <li>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 12.5C15.75 12.5 14.55 12.3 13.43 11.93C13.08 11.82 12.69 11.9 12.41 12.17L10.21 14.37C7.38 12.93 5.06 10.62 3.62 7.79L5.82 5.58C6.1 5.31 6.18 4.92 6.07 4.57C5.7 3.45 5.5 2.25 5.5 1C5.5 0.45 5.05 0 4.5 0H1C0.45 0 0 0.45 0 1C0 10.39 7.61 18 17 18C17.55 18 18 17.55 18 17V13.5C18 12.95 17.55 12.5 17 12.5ZM9 0V10L12 7H18V0H9Z" fill="#FF4A17"></path>
                    </svg>
                    <span>+44 454 7800 112</span>
                </li>
                <li>
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 6.98V16C20 17.1 19.1 18 18 18H2C0.9 18 0 17.1 0 16V4C0 2.9 0.9 2 2 2H12.1C12.04 2.32 12 2.66 12 3C12 4.48 12.65 5.79 13.67 6.71L10 9L2 4V6L10 11L15.3 7.68C15.84 7.88 16.4 8 17 8C18.13 8 19.16 7.61 20 6.98ZM14 3C14 4.66 15.34 6 17 6C18.66 6 20 4.66 20 3C20 1.34 18.66 0 17 0C15.34 0 14 1.34 14 3Z" fill="#FF4A17"></path>
                    </svg>              
                    <span>infotech@arino.com</span>
                </li>
                <li>
                    <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 0C3.13 0 0 3.13 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 3.13 10.87 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z" fill="#FF4A17"></path>
                    </svg>              
                    <span>50 Wall Street Suite, 44150 <br>Ohio, United States</span>
                </li>
            </ul>
            <div class="cs-height_0 cs-height_lg_50"></div>
        </div>
        <div class="col-lg-6">
            <?php if ($success_message): ?>
                <div class="cs-alert cs-success"><?php echo esc_html($success_message); ?></div>
            <?php elseif ($error_message): ?>
                <div class="cs-alert cs-error"><?php echo wp_kses_post($error_message); ?></div>
            <?php endif; ?>
            <form id="cs-form" method="post" class="row">
                <?php wp_nonce_field('contact_form_action', 'contact_form_nonce'); ?>
                <div class="col-sm-6">
                    <label class="cs-primary_color">Full Name*</label>
                    <input type="text" class="cs-form_field" name="full-name" value="<?php echo isset($_POST['full-name']) ? esc_attr($_POST['full-name']) : ''; ?>" required>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                </div>
                <div class="col-sm-6">
                    <label class="cs-primary_color">Email*</label>
                    <input type="email" class="cs-form_field" name="email" value="<?php echo isset($_POST['email']) ? esc_attr($_POST['email']) : ''; ?>" required>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                </div>
                <div class="col-sm-6">
                    <label class="cs-primary_color">Project Type*</label>
                    <input type="text" class="cs-form_field" name="project" value="<?php echo isset($_POST['project']) ? esc_attr($_POST['project']) : ''; ?>" required>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                </div>
                <div class="col-sm-6">
                    <label class="cs-primary_color">Mobile*</label>
                    <input type="text" class="cs-form_field" name="number" value="<?php echo isset($_POST['number']) ? esc_attr($_POST['number']) : ''; ?>" required>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                </div>
                <div class="col-lg-12">
                    <label class="cs-primary_color">Write Project Details*</label>
                    <textarea cols="30" rows="7" class="cs-form_field" name="message" required><?php echo isset($_POST['message']) ? esc_textarea($_POST['message']) : ''; ?></textarea>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-12">
                    <button class="cs-btn cs-style1" type="submit">
                        <span>Send Message</span>
                        <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"/>
                        </svg>                
                    </button>
                    <div id="cs-result"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Contact Section -->
<div class="cs-height_150 cs-height_lg_80"></div>
<div class="cs-google_map cs-bg" data-src="<?php echo esc_url(get_template_directory_uri() . '/img/map_img.jpeg'); ?>">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3432.8440673860664!2d76.82233301143275!3d30.638351874524165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feba910b360a9%3A0x9c20876708ff2202!2sCreative%20Monk%20-%20Digital%20marketing%20agency%20Zirakpur-Chandigarh!5e0!3m2!1sen!2sin!4v1748325992821!5m2!1sen!2sin" allowfullscreen></iframe>
</div>
<div class="cs-height_50 cs-height_lg_40"></div>

<?php get_footer(); ?>