<?php

$author_writer_tp_theme_css = '';

//theme-color
$author_writer_tp_color_option = get_theme_mod('author_writer_tp_color_option');

if($author_writer_tp_color_option != false){
$author_writer_tp_theme_css .='button[type="submit"],.top-header,.main-navigation .menu > ul > li.highlight,.more-btn a,.box:before,.box:after,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.page-numbers,.prev.page-numbers,.next.page-numbers,span.meta-nav,#theme-sidebar button[type="submit"],#footer button[type="submit"],#comments input[type="submit"],.site-info,.book-tkt-btn a.register-btn,#slider .carousel-control-prev-icon, #slider .carousel-control-next-icon , .woocommerce ul.products li.product .onsale, .woocommerce span.onsale, .cat-inner-box:hover , .error-404 [type="submit"],.wc-block-cart__submit-container a,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,#theme-sidebar .wp-block-search .wp-block-search__label:before,#theme-sidebar h3:before, #theme-sidebar h1.wp-block-heading:before, #theme-sidebar h2.wp-block-heading:before, #theme-sidebar h3.wp-block-heading:before,#theme-sidebar h4.wp-block-heading:before, #theme-sidebar h5.wp-block-heading:before, #theme-sidebar h6.wp-block-heading:before{';
$author_writer_tp_theme_css .='background: '.esc_attr($author_writer_tp_color_option).';';
$author_writer_tp_theme_css .='}';
}
if($author_writer_tp_color_option != false){
$author_writer_tp_theme_css .='a,#theme-sidebar .textwidget a,#footer .textwidget a,.comment-body a,.entry-content a,.entry-summary a,.page-template-front-page .media-links a:hover,.topbar-home i.fas.fa-phone-volume,#theme-sidebar h3, #theme-sidebar h3, #theme-sidebar h1.wp-block-heading, #theme-sidebar h2.wp-block-heading, #theme-sidebar h3.wp-block-heading, #theme-sidebar h4.wp-block-heading, #theme-sidebar h5.wp-block-heading, #theme-sidebar h6.wp-block-heading, #theme-sidebar h3,.wp-block-search .wp-block-search__label,.post_tag a:hover, #theme-sidebar .widget_tag_cloud a:hover,a.added_to_cart.wc-forward,.box-info i,.readmore-btn a,#footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover,#theme-sidebar .wp-block-search .wp-block-search__label  {';
$author_writer_tp_theme_css .='color: '.esc_attr($author_writer_tp_color_option).';';
$author_writer_tp_theme_css .='}';
}
if($author_writer_tp_color_option != false){
$author_writer_tp_theme_css .='@media screen and (max-width:1000px) {';
$author_writer_tp_theme_css .='.toggle-nav i {';
    $author_writer_tp_theme_css .='background: '.esc_attr($author_writer_tp_color_option).';';
$author_writer_tp_theme_css .='} }';
}
if($author_writer_tp_color_option != false){
$author_writer_tp_theme_css .='#footer .tagcloud a:hover,.post_tag a:hover, #theme-sidebar .widget_tag_cloud a:hover,.readmore-btn a,#footer p.wp-block-tag-cloud a:hover{';
	$author_writer_tp_theme_css .='border-color: '.esc_attr($author_writer_tp_color_option).';';
$author_writer_tp_theme_css .='}';
}
if($author_writer_tp_color_option != false){
$author_writer_tp_theme_css .='.page-box,#theme-sidebar section {';
    $author_writer_tp_theme_css .='border-left-color: '.esc_attr($author_writer_tp_color_option).';';
$author_writer_tp_theme_css .='}';
}
if($author_writer_tp_color_option != false){
$author_writer_tp_theme_css .='.page-box,#theme-sidebar section {';
    $author_writer_tp_theme_css .='border-bottom-color: '.esc_attr($author_writer_tp_color_option).';';
$author_writer_tp_theme_css .='}';
}

//hover color
$author_writer_tp_color_option_link = get_theme_mod('author_writer_tp_color_option_link');

if($author_writer_tp_color_option_link != false){
$author_writer_tp_theme_css .='.prev.page-numbers:focus, .prev.page-numbers:hover, .next.page-numbers:focus, .next.page-numbers:hover,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,span.meta-nav:hover, #comments input[type="submit"]:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #footer button[type="submit"]:hover, #theme-sidebar button[type="submit"]:hover,.book-tkt-btn a.register-btn:hover,.more-btn a:hover,.book-tkt-btn a.bar-btn i:hover, .woocommerce a.remove:hover,.wc-block-cart__submit-container a:hover  {';
	$author_writer_tp_theme_css .='background: '.esc_attr($author_writer_tp_color_option_link).';';
$author_writer_tp_theme_css .='}';
}
if($author_writer_tp_color_option_link != false){
$author_writer_tp_theme_css .='a:hover,#theme-sidebar a:hover,#footer a:hover,.media-links i:hover, .readmore-btn a:hover{';
	$author_writer_tp_theme_css .='color: '.esc_attr($author_writer_tp_color_option_link).';';
$author_writer_tp_theme_css .='}';
}
if($author_writer_tp_color_option_link != false){
$author_writer_tp_theme_css .='.readmore-btn a:hover{';
	$author_writer_tp_theme_css .='border-color: '.esc_attr($author_writer_tp_color_option_link).';';
$author_writer_tp_theme_css .='}';
}

//Font Weight
$author_writer_menu_font_weight = get_theme_mod( 'author_writer_menu_font_weight','600');
if($author_writer_menu_font_weight == '100'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 100;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '200'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 200;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '300'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 300;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '400'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 400;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '500'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 500;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '600'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 600;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '700'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 700;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '800'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 800;';
$author_writer_tp_theme_css .='}';
}else if($author_writer_menu_font_weight == '900'){
$author_writer_tp_theme_css .='.main-navigation a{';
    $author_writer_tp_theme_css .='font-weight: 900;';
$author_writer_tp_theme_css .='}';
}