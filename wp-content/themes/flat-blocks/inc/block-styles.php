<?php
/**
 * File:	block-styles.php
 * Theme:	Flat Blocks
 * 
 * Adds all of our custom styles for selection in the Block Editor
 * 
 * Note the corresponding CSS is in /assets/css/custom-styles.css and 
 * /assets/styles/custom-fixedheader.css
 * 
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 * 
 * @package flat-blocks
 * @since	1.0
 */

if ( ! function_exists( 'flatblocks_register_block_styles' ) ) :

	function flatblocks_register_block_styles() {

		/* 
		 * Define custom styles and what blocks they apply to. Note that the prefix 
		 * 'is-style-' will automatically be added to the names.
		 */
		$custom_styles = array(
			'fixed-menu' 		=> array( esc_html__('Fixed Menu', 'flat-blocks'), 
				array('navigation' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'fixed-header' 		=> array( esc_html__('Fixed Header', 'flat-blocks'), 
				array('group' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'cover-border' 		=> array( esc_html__('Borders', 'flat-blocks'), 
				array('cover' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'cover-rounded-corners' => array( esc_html__('Rounded Corners', 'flat-blocks'), 
				array('cover' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'media-text-border' => array( esc_html__('Border', 'flat-blocks'), 
				array('media-text' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'image-border' 		=> array( esc_html__('Border', 'flat-blocks'), 
				array('image' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'image-round-border' => array( esc_html__('Round Border', 'flat-blocks'), 
				array('image' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'image-computer-screen' => array( esc_html__('Computer Screen', 'flat-blocks'), 
				array('image' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'image-tablet-phone-screen' => array( esc_html__('Phone/Tablet Screen', 'flat-blocks'), 
				array('image' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'image-no-border'	=> array( esc_html__('No Border', 'flat-blocks'), 
				array('post-featured-image' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'thick' 			=> array( esc_html__('Thick', 'flat-blocks'), 
				array('separator' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'thick-wide' 		=> array( esc_html__('Thick Wide', 'flat-blocks'), 
				array('separator' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'bullets' 			=> array( esc_html__('Bullets', 'flat-blocks'), 
				array('latest-posts', 'latest-comments' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'no-padding' 		=> array( esc_html__('No Padding', 'flat-blocks'), 
				array('group', 'column' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'rounded-border' 	=> array( esc_html__('Border', 'flat-blocks'), 
				array('group', 'column', 'post-comments' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'thick-rounded-border' => array( esc_html__('Thick Border', 'flat-blocks'), 
				array('group' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'no-gap' 			=> array( esc_html__('No Gap', 'flat-blocks'), 
				array('columns' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'thick-gap' 		=> array( esc_html__('Thick Gap', 'flat-blocks'), 
				array('columns' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'center-on-mobile' 	=> array( esc_html__('Center on Mobile', 'flat-blocks'), 
				array('columns' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'no-read-more' 		=> array( esc_html__('No Read More', 'flat-blocks'), 
				array('post-excerpt' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'list-checkmarks' 	=> array( esc_html__('Checkmarks', 'flat-blocks'), 
				array('list', 'page-list' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'list-plain' 		=> array( esc_html__('Plain', 'flat-blocks'), 
				array('list', 'page-list', 'categories' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'list-plain-centered' => array( esc_html__('Plain Centered', 'flat-blocks'), 
				array('list', 'page-list', 'categories' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'no-icon' 			=> array( esc_html__('No Icon', 'flat-blocks'), 
				array('post-author', 'post-date', 'post-terms' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'alignwide' 		=> array( esc_html__('Align Wide', 'flat-blocks'), 
				array('paragraph' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'link-underline' 	=> array( esc_html__('Underline Link', 'flat-blocks'), 
				array('paragraph' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'link-no-underline' => array( esc_html__('No Underline Link', 'flat-blocks'), 
				array('paragraph' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'arrow-icon' 		=> array( esc_html__('Arrow Icon', 'flat-blocks'), 
				array('paragraph' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			),
			'arrow-icon-no-text' => array( esc_html__('Arrow No Text', 'flat-blocks'), 
				array('paragraph' ),
				'style_handle' 	=> 'flatblocks-custom-styles'				
			)
		);
		
		/* Apply filter to the custom styles list so child themes can override */
		$custom_styles = apply_filters( 'flatblocks_custom_block_styles', $custom_styles );
		
		/* 
		 * Loop through each style and create the custom style for each of its blocks.
		 */
		//foreach ( $custom_styles as $custom_style => [$label, $blocks, $style_handle_or_inline] ) {
		foreach ( $custom_styles as $custom_style => $properties ) {
			$label = $properties[0] ?? '';
			$blocks = ( isset($properties[1]) and is_array($properties[1]) ) ? $properties[1] : array();

			// Loop through each block and register the custom style
			foreach ( $blocks as $block ) {
							
				// If no slug, then use core/
				if ( stripos( $block, '/' ) === false ) $block = 'core/' . $block;
				
				register_block_style(
					$block,
					array(
						'name'  => $custom_style,
						'label' => $label,
						'inline_style' => $properties['inline_style'] ?? '',
						'style_handle' => $properties['style_handle'] ?? 'flatblocks-custom-styles'
					)
				);
			} //end foreach $custom_styles
		} //end foreach $blocks
		
	}
endif;
add_action( 'init', 'flatblocks_register_block_styles' );
