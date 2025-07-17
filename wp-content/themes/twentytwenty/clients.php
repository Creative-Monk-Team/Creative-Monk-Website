<div class="py-10">
    <h2 class="py-5 text-center">Our Clients</h2>
    <div class="client-carousel owl-carousel container mx-auto flex text-4xl font-bold">
        <?php
        global $wpdb;
        $table_name = $wpdb->prefix . 'clients';
        $results = $wpdb->get_results("SELECT * FROM $table_name");
        foreach ($results as $row) : ?>
            <div class="bg-white/90 p-2 rounded-lg">
                <img class="object-contain" style="height: 10rem" src="<?php echo esc_url($row->image); ?>" alt="<?php echo esc_attr($row->name); ?>">
            </div>
        <?php endforeach; ?>
    </div>
</div>