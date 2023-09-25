<?php
 /**
  * Title: Sample Services Page
  * Slug: flat-blocks/page-services
  * Categories: flatblocks, page
  * Block Types: core/post-content
  * Description: A sample services page with cover image, title and text, what we do, 4-column features, 4-column pricing table, and call-to-action button
  */
?>

<?php include_once get_template_directory() . '/inc/pattern-functions.php'; ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'cover-desk-meeting' ); ?>

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'text-title-and-text' ); ?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"placeholder":"What We Do"} -->
<h2 class="wp-block-heading" id="what-we-do">What We Do</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'columns-features-4-columns' ); ?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"placeholder":"Our Pricing"} -->
<h2 class="wp-block-heading" id="our-pricing">Our Pricing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'columns-pricing-table-3-columns' ); ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'text-faq' ); ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'buttons-call-to-action' ); ?>
