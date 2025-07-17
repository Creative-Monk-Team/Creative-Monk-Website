<?php get_header(); ?>


<div class="cs-height_150 cs-height_lg_80"></div>

<!-- Start Blogs -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="cs-post cs-style2">
          <?php if (has_post_thumbnail()) : ?>
            <div class="cs-post_thumb cs-radius_15">
              <?php the_post_thumbnail('full', ['class' => 'w-100 cs-radius_15']); ?>
            </div>
          <?php endif; ?>

          <div class="cs-post_info">
            <div class="cs-post_meta cs-style1 cs-ternary_color cs-semi_bold cs-primary_font">
              <span class="cs-posted_by"><?php echo get_the_date('d M Y'); ?></span>
              <?php
              $categories = get_the_category();
              if ($categories) :
              ?>
                <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="cs-post_avatar">
                  <?php echo esc_html($categories[0]->name); ?>
                </a>
              <?php endif; ?>
            </div>

            <h2 class="cs-post_title"><?php the_title(); ?></h2>

            <?php the_content(); ?>
          </div>
        </div>

        <div class="cs-height_30 cs-height_lg_30"></div>
       
      </div>

      <!-- Sidebar -->
      <div class="col-xl-3 col-lg-4 offset-xl-1">
        <div class="cs-height_0 cs-height_lg_80"></div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>
<!-- End Blogs -->

<div class="cs-height_150 cs-height_lg_80"></div>

<!-- CTA -->
<section>
  <div class="container">
    <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1" data-src="<?php echo get_template_directory_uri(); ?>/img/cta_bg.jpeg">
      <div class="cs-cta_in">
        <h2 class="cs-cta_title cs-semi_bold cs-m0">Let’s discuss & make <br>something <i>cool</i> together </h2>
        <div class="cs-height_70 cs-height_lg_30"></div>
        <a href="<?php echo home_url('/contact'); ?>" class="cs-text_btn">
          <span>Apply For Meeting</span>
          <!-- SVG here -->
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
