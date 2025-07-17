<?php
$services = get_field('services');
$website = get_field('company_website');

if ($website) {
    echo "<a href='{$website}' target='_blank' class='btn btn-primary'>Visit Website</a>";
}

if ($services) {
    foreach ($services as $service) {
        $name = $service['service_name'];
        $category = $service['service_category']->name ?? '';
        $images = $service['service_images'];

        echo "<h3>{$name} – {$category}</h3><div class='service-gallery'>";
        foreach ($images as $img_url) {
            echo "<img src='{$img_url}' alt='' class='portfolio-image' />";
        }
        echo "</div>";
    }
}
?>
