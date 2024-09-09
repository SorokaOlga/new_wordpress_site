<?php

if (! function_exists('lawyer_setup')) {
  function lawyer_setup (){
    //добавляем пользовательский лого
    add_theme_support( 'custom-logo', [
  'height'      => 40,
  'width'       => 210,
  'flex-width'  => false,
  'flex-height' => false,
  'header-text' => '',
  'unlink-homepage-logo' => false, // WP 5.5
] );
//добавляем динамический <title>
    add_theme_support('title_tag',);
  }
  add_action( 'after_setup_theme', 'lawyer_setup'  );
}



/*підключаємо стилі*/

add_action( 'wp_enqueue_scripts', 'immigration_lawyer_scripts' );

function immigration_lawyer_scripts() {
  wp_enqueue_style( 'main', get_stylesheet_uri() );

  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' , array('main'), null );
  wp_enqueue_style( 'immigration-lawyer', get_template_directory_uri() . '/css/style.css' , array('bootstrap'), null );

// перепідключаємо jquery 
wp_deregister_script( 'jquery' );
wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js');
wp_enqueue_script( 'jquery');

    //підключаємо скрипти
  wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js',  array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true );
   wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/js/jquery.slick.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), '1.0.0', true );
   
}

