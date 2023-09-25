<?php
/**
 * The main template file.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package docupress
 */

get_header();
?>
  <main id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="singlepost-category">
            <?php
              $categories = get_the_category();
              if ( ! empty( $categories ) ) {
                  foreach( $categories as $category ) {
                      echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
                  }
              }
            ?>
          </div>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
          <?php endwhile; ?>
             <div class="post-navigation">
                    <div class="nav-previous"><?php previous_posts_link( '%link', '%title' ); ?></div>
                    <div class="nav-next"><?php next_posts_link( '%link', '%title' ); ?></div>
                  </div>
          <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
          <?php endif; ?>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
    <!-- tags -->
    <?php if (has_tag()) { ?>
      <div class="post-tags">
          <span><?php esc_html_e('Tags:', 'docupress'); ?></span>
          <?php the_tags('', ' '); ?>
      </div>
    <?php } ?>
  <?php
      // If comments are open or there is at least one comment, show the comment template.
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      }

    ?>

</div>
</main>

<?php
get_footer(); ?>
