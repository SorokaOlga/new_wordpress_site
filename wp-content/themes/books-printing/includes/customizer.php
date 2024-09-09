<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
        'type'        => 'slider',
        'settings'    => 'books_printing_logo_resizer',
        'label'       => __( 'Logo Size', 'books-printing' ),
        'section'     => 'title_tagline',
        'default'     => 150,
        'choices'     => [
            'min'   => 50,
            'max'   => 300,
            'step'  => 1,
        ],
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_enable_logo_text',
		'section'     => 'title_tagline',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'books-printing' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'books_printing_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'books-printing' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'books-printing' ),
			'off' => esc_html__( 'Disable', 'books-printing' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'books_printing_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'books-printing' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'books-printing' ),
			'off' => esc_html__( 'Disable', 'books-printing' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'books_printing_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_site_tittle_transform_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Text Transform', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'books_printing_site_tittle_transform',
		'section'     => 'title_tagline',
		'default'     => 'capitalize',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'books-printing' ),
			'uppercase' => esc_html__( 'Uppercase', 'books-printing' ),
			'lowercase' => esc_html__( 'Lowercase', 'books-printing' ),
			'capitalize' => esc_html__( 'Capitalize', 'books-printing' ),
		],
		'output' => array(
			array(
				'element'  => array( '.logo a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'books_printing_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'books_printing_logo_settings_premium_features',
		'section'     => 'title_tagline',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Unlock More Features in the Premium Version!', 'books-printing' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customizable Text Logo', 'books-printing' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Enhanced Typography Options', 'books-printing' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Priority Support', 'books-printing' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'books-printing' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/printing-wordpress-theme', 'books-printing' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'books-printing' ) .'</a></div>',
	) );

	// TYPOGRAPHY SETTINGS

	Kirki::add_panel( 'books_printing_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'books-printing' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'books_printing_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'books-printing' ),
		'panel'    => 'books_printing_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_h1_typography_heading',
		'section'     => 'books_printing_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'books_printing_h1_typography_font',
		'section'   =>  'books_printing_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Inter',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h1',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 2 Section

	Kirki::add_section( 'books_printing_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'books-printing' ),
		'panel'    => 'books_printing_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_h2_typography_heading',
		'section'     => 'books_printing_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'books_printing_h2_typography_font',
		'section'   =>  'books_printing_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Inter',
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'books_printing_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'books-printing' ),
		'panel'    => 'books_printing_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_h3_typography_heading',
		'section'     => 'books_printing_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'books_printing_h3_typography_font',
		'section'   =>  'books_printing_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Inter',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'books_printing_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'books-printing' ),
		'panel'    => 'books_printing_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_h4_typography_heading',
		'section'     => 'books_printing_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'books_printing_h4_typography_font',
		'section'   =>  'books_printing_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Inter',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'books_printing_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'books-printing' ),
		'panel'    => 'books_printing_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_h5_typography_heading',
		'section'     => 'books_printing_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'books_printing_h5_typography_font',
		'section'   =>  'books_printing_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Inter',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'books_printing_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'books-printing' ),
		'panel'    => 'books_printing_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_h6_typography_heading',
		'section'     => 'books_printing_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'books_printing_h6_typography_font',
		'section'   =>  'books_printing_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Inter',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'books_printing_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'books-printing' ),
		'panel'    => 'books_printing_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_body_typography_heading',
		'section'     => 'books_printing_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'books_printing_body_typography_font',
		'section'   =>  'books_printing_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Inter',
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );

	// Theme Options Panel
	Kirki::add_panel( 'books_printing_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'books-printing' ),
	) );

	// HEADER SECTION

	Kirki::add_section( 'books_printing_section_header',array(
		'title' => esc_html__( 'Header Settings', 'books-printing' ),
		'description'    => esc_html__( 'Here you can add header information.', 'books-printing' ),
		'panel' => 'books_printing_theme_options_panel',
		'tabs'  => [
			'header' => [
				'label' => esc_html__( 'Header', 'books-printing' ),
			],
			'menu'  => [
				'label' => esc_html__( 'Menu', 'books-printing' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'books_printing_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'books-printing' ),
		'section'     => 'books_printing_section_header',
		'default'     => 'on',
		'tab'      => 'header',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'books-printing' ),
			'off' => esc_html__( 'Disable', 'books-printing' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'books_printing_advertisement_text_heading',
		'section'     => 'books_printing_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Advertisement Text', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'settings' => 'books_printing_header_advertisement_text',
		'section'  => 'books_printing_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'books_printing_enable_button_heading',
		'section'     => 'books_printing_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Button', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'label'    => esc_html__( 'Button Text', 'books-printing' ),
		'settings' => 'books_printing_header_button_text',
		'section'  => 'books_printing_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'tab'      => 'header',
		'label'    =>  esc_html__( 'Button Link', 'books-printing' ),
		'settings' => 'books_printing_header_button_url',
		'section'  => 'books_printing_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'books_printing_header_phone_number_heading',
		'section'     => 'books_printing_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'settings' => 'books_printing_header_phone_number',
		'section'  => 'books_printing_section_header',
		'default'  => '',
		'sanitize_callback' => 'books_printing_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'books_printing_header_email_heading',
		'section'     => 'books_printing_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'tab'      => 'header',
		'settings' => 'books_printing_header_email',
		'section'  => 'books_printing_section_header',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'tab'      => 'header',
		'settings'    => 'books_printing_search_enable',
		'label'       => esc_html__( 'Enable/Disable Search', 'books-printing' ),
		'section'     => 'books_printing_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'books-printing' ),
			'off' => esc_html__( 'Disable', 'books-printing' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'tab'      => 'header',
		'settings'    => 'books_printing_cart_box_enable',
		'label'       => esc_html__( 'Enable/Disable Shopping Cart', 'books-printing' ),
		'section'     => 'books_printing_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'books-printing' ),
			'off' => esc_html__( 'Disable', 'books-printing' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'books_printing_menu_size_heading',
		'section'     => 'books_printing_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'books_printing_menu_size',
		'tab'      => 'menu',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'books-printing' ),
		'type'        => 'text',
		'section'     => 'books_printing_section_header',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'menu',
		'settings'    => 'books_printing_menu_text_transform_heading',
		'section'     => 'books_printing_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'menu',
		'settings'    => 'books_printing_menu_text_transform',
		'section'     => 'books_printing_section_header',
		'default'     => 'Capitalize',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'books-printing' ),
			'uppercase' => esc_html__( 'Uppercase', 'books-printing' ),
			'lowercase' => esc_html__( 'Lowercase', 'books-printing' ),
			'capitalize' => esc_html__( 'Capitalize', 'books-printing' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	 ) );
	
	 Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'tab'      => 'header',
		'settings'    => 'books_printing_logo_settings_premium_features_header',
		'section'     => 'books_printing_section_header',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Enhance your header design now!', 'books-printing' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Customize your header background color', 'books-printing' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Adjust icon and text font sizes', 'books-printing' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Explore enhanced typography options', 'books-printing' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'books-printing' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/printing-wordpress-theme', 'books-printing' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'books-printing' ) .'</a></div>',
	) );

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'books_printing_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'books-printing' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'books-printing' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'books_printing_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'books-printing' ),
		'section'     => 'books_printing_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'books-printing' ),
		'settings'    => 'books_printing_shop_page_layout',
		'section'     => 'books_printing_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'books-printing' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'books-printing' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'books_printing_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'books-printing' ),
		'settings'    => 'books_printing_products_per_row',
		'section'     => 'books_printing_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'books-printing' ),
		'settings'    => 'books_printing_products_per_page',
		'section'     => 'books_printing_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'books_printing_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'books-printing' ),
		'section'     => 'books_printing_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'books-printing' ),
		'settings'    => 'books_printing_single_product_sidebar_layout',
		'section'     => 'books_printing_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'books-printing' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'books-printing' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'books_printing_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );
	
	//ADDITIONAL SETTINGS

	Kirki::add_section( 'books_printing_additional_setting',array(
		'title' => esc_html__( 'Additional Settings', 'books-printing' ),
		'panel' => 'books_printing_theme_options_panel',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'books-printing' ),
			],
			'header-image'  => [
				'label' => esc_html__( 'Header Image', 'books-printing' ),
			],
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'books_printing_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'books-printing' ),
		'section'     => 'books_printing_additional_setting',
		'default'     => '0',
		'tab'      => 'general',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'general',
		'settings'    => 'books_printing_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'books-printing' ),
		'section'     => 'books_printing_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'general',
		'settings'    => 'books_printing_single_page_layout_heading',
		'section'     => 'books_printing_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'general',
		'settings'    => 'books_printing_single_page_layout',
		'section'     => 'books_printing_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'books-printing' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'books-printing' ),
			'One Column' => esc_html__( 'One Column', 'books-printing' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'books_printing_header_background_attachment_heading',
		'section'     => 'books_printing_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'header-image',
		'settings'    => 'books_printing_header_background_attachment',
		'section'     => 'books_printing_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'books-printing' ),
			'fixed' => esc_html__( 'Fixed', 'books-printing' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'books_printing_header_image_height_heading',
		'section'     => 'books_printing_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image height', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'books_printing_header_image_height',
		'tab'      => 'header-image',
		'label'       => __( 'Image Height', 'books-printing' ),
		'description'    => esc_html__( 'Enter a value in pixels. Example:500px', 'books-printing' ),
		'type'        => 'text',
		'default'    => [
			'desktop' => '550px',
			'tablet'  => '350px',
			'mobile'  => '200px',
		],
		'responsive' => true,
		'section'     => 'books_printing_additional_setting',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.header-image-box'),
				'property' => 'height',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'header-image',
		'settings'    => 'books_printing_header_overlay_heading',
		'section'     => 'books_printing_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'books_printing_header_overlay_setting',
		'label'       => __( 'Overlay Color', 'books-printing' ),
		'type'        => 'color',
		'tab'      => 'header-image',
		'section'     => 'books_printing_additional_setting',
		'transport' => 'auto',
		'default'     => '#00000066',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'books_printing_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'books-printing' ),
		'section'     => 'books_printing_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'header-image',
		'settings'    => 'books_printing_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'books-printing' ),
		'section'     => 'books_printing_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'books_printing_blog_post',array(
		'title' => esc_html__( 'Post Settings', 'books-printing' ),
		'description'    => esc_html__( 'Here you can add post information.', 'books-printing' ),
		'panel' => 'books_printing_theme_options_panel',
		'tabs'  => [
			'blog-post' => [
				'label' => esc_html__( 'Blog Post', 'books-printing' ),
			],
			'single-post'  => [
				'label' => esc_html__( 'Single Post', 'books-printing' ),
			],
		],
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'books_printing_post_layout_heading',
		'section'     => 'books_printing_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'tab'      => 'blog-post',
		'settings'    => 'books_printing_post_layout',
		'section'     => 'books_printing_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'books-printing' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'books-printing' ),
			'One Column' => esc_html__( 'One Column', 'books-printing' ),
			'Three Columns' => esc_html__( 'Three Columns', 'books-printing' ),
			'Four Columns' => esc_html__( 'Four Columns', 'books-printing' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'books_printing_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'books-printing' ),
		'section'     => 'books_printing_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'books_printing_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'books-printing' ),
		'section'     => 'books_printing_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'books_printing_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'books-printing' ),
		'section'     => 'books_printing_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'blog-post',
		'settings'    => 'books_printing_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'books-printing' ),
		'section'     => 'books_printing_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'blog-post',
		'settings'    => 'books_printing_length_setting_heading',
		'section'     => 'books_printing_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'tab'      => 'blog-post',
		'settings'    => 'books_printing_length_setting',
		'section'     => 'books_printing_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
		 			'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'books_printing_single_post_date_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Date', 'books-printing' ),
		'section'     => 'books_printing_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'books_printing_single_post_author_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Author', 'books-printing' ),
		'section'     => 'books_printing_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'books_printing_single_post_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Single Post Comment', 'books-printing' ),
		'section'     => 'books_printing_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'books-printing' ),
		'settings'    => 'books_printing_single_post_tag',
		'section'     => 'books_printing_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'books-printing' ),
		'settings'    => 'books_printing_single_post_category',
		'section'     => 'books_printing_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'books_printing_post_comment_show_hide',
		'label'       => esc_html__( 'Show / Hide Comment Box', 'books-printing' ),
		'section'     => 'books_printing_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'tab'      => 'single-post',
		'settings'    => 'books_printing_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'books-printing' ),
		'section'     => 'books_printing_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'tab'      => 'single-post',
		'settings'    => 'books_printing_single_post_radius',
		'section'     => 'books_printing_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'books_printing_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'books-printing' ),
		'type'        => 'text',
		'tab'      => 'single-post',
		'section'     => 'books_printing_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

	// No Results Page Settings

	Kirki::add_section( 'books_printing_no_result_section', array(
		'title'          => esc_html__( '404 & No Results Page Settings', 'books-printing' ),
		'panel'    => 'books_printing_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_page_not_found_title_heading',
		'section'     => 'books_printing_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Title', 'books-printing' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'books_printing_page_not_found_title',
		'section'  => 'books_printing_no_result_section',
		'default'  => esc_html__('404 Error!', 'books-printing'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_page_not_found_text_heading',
		'section'     => 'books_printing_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Text', 'books-printing' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'books_printing_page_not_found_text',
		'section'  => 'books_printing_no_result_section',
		'default'  => esc_html__('The page you are looking for may have been moved, deleted, or possibly never existed.', 'books-printing'),
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'     => 'custom',
		'settings' => 'books_printing_page_not_found_line_break',
		'section'  => 'books_printing_no_result_section',
		'default'  => '<hr>',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_no_results_title_heading',
		'section'     => 'books_printing_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Title', 'books-printing' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'books_printing_no_results_title',
		'section'  => 'books_printing_no_result_section',
		'default'  => esc_html__('Nothing Found', 'books-printing'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_no_results_content_heading',
		'section'     => 'books_printing_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Content', 'books-printing' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'books_printing_no_results_content',
		'section'  => 'books_printing_no_result_section',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'books-printing'),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'books_printing_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'books-printing' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'books-printing' ),
        'panel'    => 'books_printing_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_footer_text_heading',
		'section'     => 'books_printing_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'books-printing' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'books_printing_footer_text',
		'section'  => 'books_printing_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_footer_enable_heading',
		'section'     => 'books_printing_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'books-printing' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'books_printing_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'books-printing' ),
		'section'     => 'books_printing_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'books-printing' ),
			'off' => esc_html__( 'Disable', 'books-printing' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_footer_background_widget_heading',
		'section'     => 'books_printing_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'books-printing' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'books_printing_footer_background_widget',
		'type'        => 'background',
		'section'     => 'books_printing_footer_section',
		'default'     => [
			'background-color'      => 'rgba(18,18,18,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_footer__widget_alignment_heading',
		'section'     => 'books_printing_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Alignment', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'books_printing_footer__widget_alignment',
		'section'     => 'books_printing_footer_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'books-printing' ),
			'right' => esc_html__( 'right', 'books-printing' ),
			'left' => esc_html__( 'left', 'books-printing' ),
		],
		'output' => array(
			array(
				'element'  => '.footer-area',
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_footer_copright_color_heading',
		'section'     => 'books_printing_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Background Color', 'books-printing' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'books_printing_footer_copright_color',
		'type'        => 'color',
		'label'       => __( 'Background Color', 'books-printing' ),
		'section'     => 'books_printing_footer_section',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.footer-copyright',
				'property' => 'background',
			),
		),
	) );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_footer_copright_text_color_heading',
		'section'     => 'books_printing_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Text Color', 'books-printing' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'books_printing_footer_copright_text_color',
		'type'        => 'color',
		'label'       => __( 'Text Color', 'books-printing' ),
		'section'     => 'books_printing_footer_section',
		'transport' => 'auto',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '.footer-copyright a', '.footer-copyright p'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'custom',
		'settings'    => 'books_printing_logo_settings_premium_features_footer',
		'section'     => 'books_printing_footer_section',
		'priority'    => 50,
		'default'     => '<h3 style="color: #2271b1; padding:5px 20px 5px 20px; background:#fff; margin:0;  box-shadow: 0 2px 4px rgba(0,0,0, .2); ">' . esc_html__( 'Elevate your footer with premium features:', 'books-printing' ) . '</h3><ul style="color: #121212; padding: 5px 20px 20px 30px; background:#fff; margin:0;" ><li style="list-style-type: square;" >' . esc_html__( 'Tailor your footer layout', 'books-printing' ) . '</li><li style="list-style-type: square;" >'.esc_html__( 'Integrate an email subscription form', 'books-printing' ) .'</li><li style="list-style-type: square;" >'.esc_html__( 'Personalize social media icons', 'books-printing' ) .'</li><li style="list-style-type: square;" >'.esc_html__( '....and Much More', 'books-printing' ) . '</li></ul><div style="background: #fff; padding: 0px 10px 10px 20px;"><a href="' . esc_url( __( 'https://www.wpelemento.com/products/printing-wordpress-theme', 'books-printing' ) ) . '" class="button button-primary" target="_blank">'. esc_html__( 'Upgrade for more', 'books-printing' ) .'</a></div>',
	) );

	// Footer Social Icons Section

	Kirki::add_section( 'books_printing_footer_social_media_section', array(
		'title'          => esc_html__( 'Footer Social Icons', 'books-printing' ),
		'panel'    => 'books_printing_theme_options_panel',
		'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_footer_social_icon_hide_heading',
		'section'     => 'books_printing_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable or Disable your Footer Social Icon', 'books-printing' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'books_printing_footer_social_icon_hide',
		'label'       => esc_html__( 'Enable or Disable Social Icon.', 'books-printing' ),
		'section'     => 'books_printing_footer_social_media_section',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'books_printing_enable_footer_socail_link_align_heading',
		'section'     => 'books_printing_footer_social_media_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Text Align', 'books-printing' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'books_printing_enable_footer_socail_link_align',
		'type'        => 'select',
		'priority'    => 10,
		'label'       => __( 'Text Align', 'books-printing' ),
		'section'     => 'books_printing_footer_social_media_section',
		'default'     => 'left',
		'choices'     => [
			'center' => esc_html__( 'center', 'books-printing' ),
			'right' => esc_html__( 'right', 'books-printing' ),
			'left' => esc_html__( 'left', 'books-printing' ),
		],
		'output' => array(
			array(
				'element'  => array( '.footer-links'),
				'property' => 'text-align',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'priority'    => 10,
		'settings'    => 'books_printing_enable_footer_socail_link',
		'section'     => 'books_printing_footer_social_media_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Social Media Link', 'books-printing' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'priority'    => 10,
		'section'     => 'books_printing_footer_social_media_section',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Footer Social Icons', 'books-printing' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'books-printing' ),
		'settings'     => 'books_printing_social_links_settings_footer',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'books-printing' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'books-printing' ). ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'books-printing' ) . ' </strong></a>',
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'books-printing' ),
				'description' => esc_html__( 'Add the social icon url here.', 'books-printing' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );
}