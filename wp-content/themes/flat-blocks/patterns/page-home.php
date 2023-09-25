<?php
 /**
  * Title: Sample Home Page
  * Slug: flat-blocks/page-home
  * Categories: flatblocks, page
  * Block Types: core/post-content
  * Description: A sample home page with cover image, image gallery, 3-column features, call-to-action button, recent posts, 3-column colored social media icons, a map and address
  */
?>

<?php include_once get_template_directory() . '/inc/pattern-functions.php'; ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'cover-scroll-home-header' ); ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'text-title-and-text' ); ?>

<!-- wp:paragraph {"textAlign":"center","className":"is-style-default"} -->
<p class="has-text-align-center is-style-default">Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus.</p>
<!-- /wp:paragraph -->

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'columns-features-3-columns' ); ?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div id="our-portfolio" class="wp-block-group">
<!-- wp:heading {"placeholder":"Our Portfolio"} -->
<h2 class="wp-block-heading" id="our-portfolio">Our Portfolio</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"verticalAlignment":"top","className":"is-style-default"} -->
<div class="wp-block-column is-vertically-aligned-top is-style-default">
<!-- wp:paragraph {"placeholder":"Our recent works..."} -->
<p>Our recent works...</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"align":"right","placeholder":"See All Works"} -->
<p class="has-text-align-right"><a href="$#">&gt; See All Works</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'image-gallery' ); ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'buttons-call-to-action' ); ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'columns-recent-posts-3-columns' ); ?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"placeholder":"Stay Connected"} -->
<h2 class="wp-block-heading" id="stay-connected">Stay Connected</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'columns-social-media-3-columns' ); ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'columns-map-static' ); ?>
