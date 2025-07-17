<?php

/**
 * Template Name: Single Case Study
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_header();
?>

<div class="flex flex-col gap-20">

    <!-- Hero Section -->
    <?php if (has_post_thumbnail()) : ?>
        <section class="relative h-[80vh] md:h-screen overflow-hidden">
            <?php the_post_thumbnail('full', ['class' => 'object-cover w-full h-full']); ?>
            <div class="absolute inset-0 bg-black/60"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center px-4 md:px-10 lg:px-20">

                <!-- Client Logo -->
                <?php if ($client_logo = get_field('client_logo')) : ?>
                    <div class="">
                        <img src="<?= esc_url($client_logo['url']); ?>" alt="<?= esc_attr($client_logo['alt']); ?>" class="h-20" />
                    </div>
                <?php endif; ?>
                <h1 class="text-white text-3xl md:text-5xl font-bold text-center drop-shadow-lg">
                    <?php the_title(); ?>
                </h1>
            </div>
        </section>
    <?php endif; ?>

    <!-- Content Section -->
    <section class="container mx-auto px-4 md:px-10 flex flex-col gap-16">

        <div class="flex items-start justify-center w-full h-full gap-12">
            <!-- Post Content -->
            <div class="prose max-w-none text-justify lg:w-7/12 ">
                <?php the_content(); ?>
            </div>

            <!-- Sticky Sidebar Image -->
            <?php if ($brief_image = get_field('brief_image')) : ?>
                <div class="cm-sticky lg:w-5/12">
                    <img src="<?= esc_url($brief_image['url']); ?>" alt="<?= esc_attr($brief_image['alt']); ?>"
                        class="w-full h-auto rounded-lg shadow-md" />

                </div>
            <?php endif; ?>
        </div>

        <div class="flex items-start justify-center w-full h-full gap-12">
            <?php if ($challenges_image = get_field('brief_image_copy')) : ?>
                <div class="lg:w-5/12 mt-24">
                    <img src="<?= esc_url($challenges_image['url']); ?>" alt="<?= esc_attr($challenges_image['alt']); ?>" class="w-full h-auto rounded-lg shadow-md" />
                </div>
            <?php endif; ?>
            <!-- Challenges -->
            <?php if (get_field('challenges')) : ?>
                <div class="flex flex-col gap-4 lg:w-7/12">
                    <h2 class="text-2xl font-semibold">Challenges</h2>
                    <div class="prose max-w-none text-justify">
                        <?php the_field('challenges'); ?>
                    </div>
                </div>
            <?php endif; ?>


        </div>

        <div class="flex items-start justify-center w-full h-full gap-12">

            <!-- Solutions -->
            <?php if (get_field('solutions')) : ?>
                <div class="flex flex-col gap-4 lg:w-7/12">
                    <h2 class="text-2xl font-semibold">Solutions</h2>
                    <div class="prose max-w-none text-justify">
                        <?php the_field('solutions'); ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($solutions_image = get_field('brief_image_copy2')) : ?>
                <div class="lg:w-5/12 mt-24">
                    <img src="<?= esc_url($solutions_image['url']); ?>" alt="<?= esc_attr($solutions_image['alt']); ?>" class="w-full h-auto rounded-lg shadow-md" />
                </div>
            <?php endif; ?>
        </div>

        <div class="flex items-start justify-center w-full h-full gap-12">

            <?php if ($impact_image = get_field('brief_image_copy3')) : ?>
                <div class="lg:w-5/12 mt-24">
                    <img src="<?= esc_url($impact_image['url']); ?>" alt="<?= esc_attr($impact_image['alt']); ?>" class="w-full h-auto rounded-lg shadow-md" />
                </div>
            <?php endif; ?>
            <!-- Impact -->
            <?php if (get_field('impact')) : ?>
                <div class="flex flex-col gap-4 lg:w-7/12">
                    <h2 class="text-2xl font-semibold">Impact</h2>
                    <div class="prose max-w-none text-justify">
                        <?php the_field('impact'); ?>
                    </div>
                </div>
            <?php endif; ?>


        </div>


    </section>
</div>

<?php get_footer(); ?>