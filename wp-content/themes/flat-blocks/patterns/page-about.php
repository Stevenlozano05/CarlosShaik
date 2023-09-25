<?php
 /**
  * Title: Sample About Page
  * Slug: flat-blocks/page-about
  * Categories: flatblocks, page
  * Block Types: core/post-content
  * Description: A sample about page with cover image, about us, 3-column features, 4-person team, and call-to-action button
  */
?>

<?php include_once get_template_directory() . '/inc/pattern-functions.php'; ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'cover-desk-light' ); ?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"placeholder":"About Us"} -->
<h2 class="wp-block-heading" id="about-us">About Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'columns-features-3-columns' ); ?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"placeholder":"Meet our Team"} -->
<h2 class="wp-block-heading" id="stay-connected">Meet our Team</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'columns-team-4-people' ); ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'buttons-call-to-action' ); ?>


