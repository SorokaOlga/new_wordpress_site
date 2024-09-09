<?php

$ice_cream_parlor_tp_theme_css = '';

//preloader

$ice_cream_parlor_tp_preloader_color1_option = get_theme_mod('ice_cream_parlor_tp_preloader_color1_option');
$ice_cream_parlor_tp_preloader_color2_option = get_theme_mod('ice_cream_parlor_tp_preloader_color2_option');
$ice_cream_parlor_tp_preloader_bg_color_option = get_theme_mod('ice_cream_parlor_tp_preloader_bg_color_option');

if($ice_cream_parlor_tp_preloader_color1_option != false){
$ice_cream_parlor_tp_theme_css .='.center1{';
	$ice_cream_parlor_tp_theme_css .='border-color: '.esc_attr($ice_cream_parlor_tp_preloader_color1_option).' !important;';
$ice_cream_parlor_tp_theme_css .='}';
}
if($ice_cream_parlor_tp_preloader_color1_option != false){
$ice_cream_parlor_tp_theme_css .='.center1 .ring::before{';
	$ice_cream_parlor_tp_theme_css .='background: '.esc_attr($ice_cream_parlor_tp_preloader_color1_option).' !important;';
$ice_cream_parlor_tp_theme_css .='}';
}
if($ice_cream_parlor_tp_preloader_color2_option != false){
$ice_cream_parlor_tp_theme_css .='.center2{';
	$ice_cream_parlor_tp_theme_css .='border-color: '.esc_attr($ice_cream_parlor_tp_preloader_color2_option).' !important;';
$ice_cream_parlor_tp_theme_css .='}';
}
if($ice_cream_parlor_tp_preloader_color2_option != false){
$ice_cream_parlor_tp_theme_css .='.center2 .ring::before{';
	$ice_cream_parlor_tp_theme_css .='background: '.esc_attr($ice_cream_parlor_tp_preloader_color2_option).' !important;';
$ice_cream_parlor_tp_theme_css .='}';
}
if($ice_cream_parlor_tp_preloader_bg_color_option != false){
$ice_cream_parlor_tp_theme_css .='.loader{';
	$ice_cream_parlor_tp_theme_css .='background: '.esc_attr($ice_cream_parlor_tp_preloader_bg_color_option).';';
$ice_cream_parlor_tp_theme_css .='}';
}

// footer-bg-color
$ice_cream_parlor_tp_footer_bg_color_option = get_theme_mod('ice_cream_parlor_tp_footer_bg_color_option');

if($ice_cream_parlor_tp_footer_bg_color_option != false){
$ice_cream_parlor_tp_theme_css .='#footer{';
	$ice_cream_parlor_tp_theme_css .='background: '.esc_attr($ice_cream_parlor_tp_footer_bg_color_option).' !important;';
$ice_cream_parlor_tp_theme_css .='}';
}