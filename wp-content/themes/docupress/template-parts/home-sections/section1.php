<?php
/**
 * Home Section 1 Template
 *
 * @package DocuPress
 */

// All section-specific code goes here...

$section_one = get_theme_mod( 'docupress_section1_enable' );
if ( 'Disable' == $section_one ) {
  return;
} ?>

<section id="section1" class="featured-posts">
  <div class="container">
    <div class="section-heading-main">
      <?php if(get_theme_mod('docupress_section1_title',true) != ''){?>
    <h3><?php echo esc_html(get_theme_mod('docupress_section1_title')); ?></h3>
    <?php }?>
    </div>
    <div class="row">
    
      <?php
        // Define the query to get the latest posts from the "Features" category
        $args = array(
          'category_name' =>  get_theme_mod('docupress_section1_category'),
          'posts_per_page' => get_theme_mod('docupress_section1_category_number_of_posts_setting'),
          'order' => 'DESC'
        );
        
        $query = new WP_Query( $args );
        
        // Loop through the posts
        while ( $query->have_posts() ) : $query->the_post();
      ?>
      
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="post main-post-box">
        
          <?php if ( has_post_thumbnail() ) : ?>
          <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
            </a>
          </div>
          <?php endif; ?>
          
          <h2 class="post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <div class="content-box">
            <?php the_content(); ?>
          </div>
          <div class="readmore-latest"><a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'docupress'); ?></a></div>
        </div>
      </div>
      
      <?php endwhile; wp_reset_postdata(); ?>
      
    </div>
</div>
</section>






