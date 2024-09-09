<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package Ice Cream Parlor
 * @subpackage ice_cream_parlor
 */

function ice_cream_parlor_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'ice_cream_parlor_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'ice_cream_parlor_header_style',
		'default-image'          => get_parent_theme_file_uri( '/assets/images/header_img.png' ),
	) ) );

	register_default_headers( array(
		'default-image' => array(
			'url'           => '%s/assets/images/header_img.png',
			'thumbnail_url' => '%s/assets/images/header_img.png',
			'description'   => __( 'Default Header Image', 'ice-cream-parlor' ),
		),
	) );
}
add_action( 'after_setup_theme', 'ice_cream_parlor_custom_header_setup' );

if ( ! function_exists( 'ice_cream_parlor_header_style' ) ) :
add_action( 'wp_enqueue_scripts', 'ice_cream_parlor_header_style' );
function ice_cream_parlor_header_style() {
	if ( get_header_image() ) :
	$ice_cream_parlor_custom_css = "
        .header-img{
			background-image:url('".esc_url(get_header_image())."') !important;
			background-position: center top !important;
			height: 350px;
			background-size: cover !important;
			display: block;
		}
		.single-page-img{
			background-image:url('".esc_url(get_header_image())."') !important;
			background-position: center top !important;
			background-size: cover !important;
			height:350px;
			object-fit:cover;
		}";
	   	wp_add_inline_style( 'ice-cream-parlor-style', $ice_cream_parlor_custom_css );
	endif;
}
endif;