<?php

function stationary_bookstore_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_section( 'author_writer_slider_section' );
    
    $wp_customize->remove_setting( 'author_writer_secondary_color_option' );
    $wp_customize->remove_control( 'author_writer_secondary_color_option' );

    $wp_customize->remove_setting( 'author_writer_slide_btn_2' );
    $wp_customize->remove_control( 'author_writer_slide_btn_2' );

    $wp_customize->remove_setting( 'author_writer_slider_top' );
    $wp_customize->remove_control( 'author_writer_slider_top' );
}

add_action( 'customize_register', 'stationary_bookstore_remove_customize_register', 11 );

function stationary_bookstore_customize_register( $wp_customize ) {
// Register the custom control type.
	$wp_customize->register_control_type( 'Stationary_Bookstore_Toggle_Control' );

	$wp_customize->add_section( 'stationary_bookstore_slide_box_section' , array(
    	'title'      => __( 'Slider Settings', 'stationary-bookstore' ),
		'panel' => 'author_writer_panel_id',
		'priority' => 3,
	) );
    $wp_customize->add_setting( 'stationary_bookstore_Slider_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'author_writer_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Stationary_Bookstore_Toggle_Control( $wp_customize, 'stationary_bookstore_Slider_show_hide', array(
		'label'       => esc_html__( 'Show / Hide section', 'stationary-bookstore' ),
		'section'     => 'stationary_bookstore_slide_box_section',
		'type'        => 'toggle',
		'settings'    => 'stationary_bookstore_Slider_show_hide',
	) ) );
	$categories = get_categories();
	$cats = array();
	$i = 0;
	$offer_cat[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$offer_cat[$category->slug] = $category->name;
	}
	$wp_customize->add_setting('stationary_bookstore_slider_section_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'author_writer_sanitize_choices',
	));
	$wp_customize->add_control('stationary_bookstore_slider_section_category',array(
		'type'    => 'select',
		'choices' => $offer_cat,
		'label' => __('Select Category','stationary-bookstore'),
		'section' => 'stationary_bookstore_slide_box_section',
	));
}
add_action( 'customize_register', 'stationary_bookstore_customize_register' );
