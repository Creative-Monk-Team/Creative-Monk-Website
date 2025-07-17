<?php
/*
Template Name: Blogs Template
*/
get_header();
?>

<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="<?php echo get_template_directory_uri(); ?>/img/blog_hero_bg.jpeg">
  <div class="container">
    <div class="cs-page_heading_in">
      <h1 class="cs-page_title cs-font_50 cs-white_color">Our Blogs</h1>
      <ol class="breadcrumb text-uppercase">
        <li class="breadcrumb-item">
          <a href="<?php echo home_url(); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Blog</li>
      </ol>
    </div>
  </div>
</div>
<!-- End Hero -->
<div class="cs-height_150 cs-height_lg_80"></div>
<!-- Start Blogs -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'paged' => $paged,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
            $categories = get_the_category();
            $category = !empty($categories) ? esc_html($categories[0]->name) : 'Uncategorized';
            $category_link = !empty($categories) ? get_category_link($categories[0]->term_id) : '#';
        ?>
            <div class="cs-post cs-style2">
              <a href="<?php the_permalink(); ?>" class="cs-post_thumb cs-radius_15">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title_attribute(); ?>" class="w-100 cs-radius_15">
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/default_post.jpg" alt="<?php the_title_attribute(); ?>" class="w-100 cs-radius_15">
                <?php endif; ?>
              </a>
              <div class="cs-post_info">
                <div class="cs-post_meta cs-style1 cs-ternary_color cs-semi_bold cs-primary_font">
                  <span class="cs-posted_by"><?php echo get_the_date('d M Y'); ?></span>
                  <a href="<?php echo $category_link; ?>" class="cs-post_avatar"><?php echo $category; ?></a>
                </div>
                <h2 class="cs-post_title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="cs-post_sub_title"><?php echo wp_trim_words(get_the_excerpt(), 55, '...'); ?></div>
                <a href="<?php the_permalink(); ?>" class="cs-text_btn">
                  <span>See More</span>
                  <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z" fill="currentColor" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="cs-height_95 cs-height_lg_60"></div>
        <?php
          endwhile;
        ?>
            <div class="cs-height_60 cs-height_lg_40"></div>
            <ul class="cs-pagination_box cs-center cs-white_color cs-mp0 cs-semi_bold">
              <?php
              $total_pages = $query->max_num_pages;
              if ($total_pages > 1) :
                for ($i = 1; $i <= $total_pages; $i++) :
              ?>
                  <li>
                    <a class="cs-pagination_item cs-center <?php echo ($paged == $i) ? 'active' : ''; ?>" href="<?php echo esc_url(get_pagenum_link($i)); ?>"><?php echo $i; ?></a>
                  </li>
              <?php
                endfor;
              ?>
                  <li>
                    <a href="<?php echo esc_url(get_pagenum_link($paged + 1)); ?>" class="cs-pagination_item cs-center">
                      <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 1.272L4.55116 6L0 10.728L1.22442 12L7 6L1.22442 0L0 1.272Z" fill="currentColor" />
                      </svg>
                    </a>
                  </li>
              <?php
              endif;
              wp_reset_postdata();
              ?>
            </ul>
        <?php else : ?>
          <p><?php esc_html_e('No posts found.', 'textdomain'); ?></p>
        <?php endif; ?>
      </div>
      <div class="col-xl-3 col-lg-4 offset-xl-1">
        <div class="cs-height_0 cs-height_lg_80"></div>
        <div class="cs-sidebar cs-right_sidebar cs-accent_5_bg_2">
          <div class="cs-sidebar_item author_search text-center">
            <div class="cs-author_card">
              <?php
              $author_id = get_option('custom_author_id', 1); // Replace with your method to set author
              $author = get_userdata($author_id);
              $author_name = $author ? $author->display_name : 'Kuber Jontra';
              $author_bio = $author ? get_the_author_meta('description', $author_id) : 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.';
              $author_avatar = get_avatar_url($author_id, array('size' => 96)) ?: get_template_directory_uri() . '/img/avatar_1.png';
              ?>
              <img src="<?php echo esc_url($author_avatar); ?>" alt="Author">
              <h3><?php echo esc_html($author_name); ?></h3>
              <p><?php echo esc_html($author_bio); ?></p>
            </div>
          </div>
          <div class="cs-sidebar_item widget_search">
            <h4 class="cs-sidebar_widget_title">Search</h4>
            <form class="cs-sidebar_search" action="<?php echo esc_url(home_url('/')); ?>" method="get">
              <input type="text" name="s" placeholder="Search..." value="<?php echo get_search_query(); ?>">
              <button class="cs-sidebar_search_btn">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.4351 10.0629H10.7124L10.4563 9.81589C11.3528 8.77301 11.8925 7.4191 11.8925 5.94625C11.8925 2.66209 9.23042 0 5.94625 0C2.66209 0 0 2.66209 0 5.94625C0 9.23042 2.66209 11.8925 5.94625 11.8925C7.4191 11.8925 8.77301 11.3528 9.81589 10.4563L10.0629 10.7124V11.4351L14.6369 16L16 14.6369L11.4351 10.0629ZM5.94625 10.0629C3.66838 10.0629 1.82962 8.22413 1.82962 5.94625C1.82962 3.66838 3.66838 1.82962 5.94625 1.82962C8.22413 1.82962 10.0629 3.66838 10.0629 5.94625C10.0629 8.22413 8.22413 10.0629 5.94625 10.0629Z" fill="currentColor" />
                </svg>
              </button>
            </form>
          </div>
          <div class="cs-sidebar_item widget_categories">
            <h4 class="cs-sidebar_widget_title">Categories</h4>
            <ul>
              <?php
              $categories = get_categories(array('hide_empty' => false));
              foreach ($categories as $cat) :
              ?>
                <li class="cat-item">
                  <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo esc_html($cat->name); ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="cs-sidebar_item">
            <h4 class="cs-sidebar_widget_title">Recent Posts</h4>
            <ul class="cs-recent_posts">
              <?php
              $recent_posts = wp_get_recent_posts(array('numberposts' => 4, 'post_status' => 'publish'));
              foreach ($recent_posts as $post) :
                $thumbnail = get_the_post_thumbnail_url($post['ID'], 'thumbnail') ?: get_template_directory_uri() . '/img/recent_post_1.jpeg';
              ?>
                <li>
                  <div class="cs-recent_post">
                    <a href="<?php echo esc_url(get_permalink($post['ID'])); ?>" class="cs-recent_post_thumb">
                      <div class="cs-recent_post_thumb_in cs-bg" data-src="<?php echo esc_url($thumbnail); ?>"></div>
                    </a>
                    <div class="cs-recent_post_info">
                      <h3 class="cs-recent_post_title">
                        <a href="<?php echo esc_url(get_permalink($post['ID'])); ?>"><?php echo esc_html(wp_trim_words($post['post_title'], 5, '...')); ?></a>
                      </h3>
                      <div class="cs-recent_post_date cs-primary_40_color"><?php echo date_i18n('d M Y', strtotime($post['post_date'])); ?></div>
                    </div>
                  </div>
                </li>
              <?php endforeach; wp_reset_postdata(); ?>
            </ul>
          </div>
          <div class="cs-sidebar_item widget_archive">
            <h4 class="cs-sidebar_widget_title">Archives</h4>
            <ul>
              <?php
              wp_get_archives(array(
                'type' => 'monthly',
                'limit' => 5,
                'show_post_count' => false,
                'format' => 'custom',
                'before' => '<li><a href="#">',
                'after' => '</a></li>',
              ));
              ?>
            </ul>
          </div>
          <div class="cs-sidebar_item widget_tag_cloud">
            <h4 class="cs-sidebar_widget_title">Tags</h4>
            <div class="tagcloud">
              <?php
              wp_tag_cloud(array(
                'smallest' => 14,
                'largest' => 14,
                'unit' => 'px',
                'number' => 7,
                'format' => 'flat',
                'orderby' => 'name',
                'order' => 'ASC',
                'link' => 'view',
                'taxonomy' => 'post_tag',
                'echo' => true,
                'class' => 'tag-cloud-link',
              ));
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Blogs -->
<div class="cs-height_150 cs-height_lg_80"></div>
<!-- Start CTA -->
<section>
  <div class="container">
    <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1" data-src="<?php echo get_template_directory_uri(); ?>/img/cta_bg.jpeg">
      <div class="cs-shape_1"></div>
      <div class="cs-shape_1"></div>
      <div class="cs-shape_1"></div>
      <div class="cs-cta_in">
        <h2 class="cs-cta_title cs-semi_bold cs-m0">Let’s disscuse make <br>something <i>cool</i> together </h2>
        <div class="cs-height_70 cs-height_lg_30"></div>
        <a href="<?php echo esc_url(home_url('/index.php/contact')); ?>" class="cs-text_btn">
          <span>Apply For Meeting</span>
          <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z" fill="currentColor" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- End CTA -->

<?php
get_footer();
?>