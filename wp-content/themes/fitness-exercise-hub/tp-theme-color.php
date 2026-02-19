<?php

$fitness_exercise_hub_tp_theme_css = '';

//theme color
$fitness_exercise_hub_tp_color_option = get_theme_mod('fitness_exercise_hub_tp_color_option');

// 1st color
$fitness_exercise_hub_tp_color_option = get_theme_mod('fitness_exercise_hub_tp_color_option', '#fb5b21');
if ($fitness_exercise_hub_tp_color_option) {
	$fitness_exercise_hub_tp_theme_css .= ':root {';
	$fitness_exercise_hub_tp_theme_css .= '--color-primary1: ' . esc_attr($fitness_exercise_hub_tp_color_option) . ';';
	$fitness_exercise_hub_tp_theme_css .= '}';
}

//preloader

$fitness_exercise_hub_tp_preloader_color1_option = get_theme_mod('fitness_exercise_hub_tp_preloader_color1_option');
$fitness_exercise_hub_tp_preloader_color2_option = get_theme_mod('fitness_exercise_hub_tp_preloader_color2_option');
$fitness_exercise_hub_tp_preloader_bg_color_option = get_theme_mod('fitness_exercise_hub_tp_preloader_bg_color_option');

if($fitness_exercise_hub_tp_preloader_color1_option != false){
$fitness_exercise_hub_tp_theme_css .='.center1{';
	$fitness_exercise_hub_tp_theme_css .='border-color: '.esc_attr($fitness_exercise_hub_tp_preloader_color1_option).' !important;';
$fitness_exercise_hub_tp_theme_css .='}';
}
if($fitness_exercise_hub_tp_preloader_color1_option != false){
$fitness_exercise_hub_tp_theme_css .='.center1 .ring::before{';
	$fitness_exercise_hub_tp_theme_css .='background: '.esc_attr($fitness_exercise_hub_tp_preloader_color1_option).' !important;';
$fitness_exercise_hub_tp_theme_css .='}';
}
if($fitness_exercise_hub_tp_preloader_color2_option != false){
$fitness_exercise_hub_tp_theme_css .='.center2{';
	$fitness_exercise_hub_tp_theme_css .='border-color: '.esc_attr($fitness_exercise_hub_tp_preloader_color2_option).' !important;';
$fitness_exercise_hub_tp_theme_css .='}';
}
if($fitness_exercise_hub_tp_preloader_color2_option != false){
$fitness_exercise_hub_tp_theme_css .='.center2 .ring::before{';
	$fitness_exercise_hub_tp_theme_css .='background: '.esc_attr($fitness_exercise_hub_tp_preloader_color2_option).' !important;';
$fitness_exercise_hub_tp_theme_css .='}';
}
if($fitness_exercise_hub_tp_preloader_bg_color_option != false){
$fitness_exercise_hub_tp_theme_css .='.loader{';
	$fitness_exercise_hub_tp_theme_css .='background: '.esc_attr($fitness_exercise_hub_tp_preloader_bg_color_option).';';
$fitness_exercise_hub_tp_theme_css .='}';
}

// footer-bg-color
$fitness_exercise_hub_tp_footer_bg_color_option = get_theme_mod('fitness_exercise_hub_tp_footer_bg_color_option');

if($fitness_exercise_hub_tp_footer_bg_color_option != false){
$fitness_exercise_hub_tp_theme_css .='#footer{';
	$fitness_exercise_hub_tp_theme_css .='background: '.esc_attr($fitness_exercise_hub_tp_footer_bg_color_option).' !important;';
$fitness_exercise_hub_tp_theme_css .='}';
}

// logo tagline color
$fitness_exercise_hub_site_tagline_color = get_theme_mod('fitness_exercise_hub_site_tagline_color');

if($fitness_exercise_hub_site_tagline_color != false){
$fitness_exercise_hub_tp_theme_css .='.logo h1 a, .logo p, .logo p.site-title a{';
$fitness_exercise_hub_tp_theme_css .='color: '.esc_attr($fitness_exercise_hub_site_tagline_color).';';
$fitness_exercise_hub_tp_theme_css .='}';
}

// footer widget title color
$fitness_exercise_hub_footer_widget_title_color = get_theme_mod('fitness_exercise_hub_footer_widget_title_color');
if($fitness_exercise_hub_footer_widget_title_color != false){
$fitness_exercise_hub_tp_theme_css .='#footer h3{';
$fitness_exercise_hub_tp_theme_css .='color: '.esc_attr($fitness_exercise_hub_footer_widget_title_color).';';
$fitness_exercise_hub_tp_theme_css .='}';
}

// copyright text color
$fitness_exercise_hub_footer_copyright_text_color = get_theme_mod('fitness_exercise_hub_footer_copyright_text_color');
if($fitness_exercise_hub_footer_copyright_text_color != false){
$fitness_exercise_hub_tp_theme_css .='#footer .site-info p, #footer .site-info a {';
$fitness_exercise_hub_tp_theme_css .='color: '.esc_attr($fitness_exercise_hub_footer_copyright_text_color).';';
$fitness_exercise_hub_tp_theme_css .='}';
}

// header image title color
$fitness_exercise_hub_header_image_title_text_color = get_theme_mod('fitness_exercise_hub_header_image_title_text_color');
if($fitness_exercise_hub_header_image_title_text_color != false){
$fitness_exercise_hub_tp_theme_css .='.box-text h2{';
$fitness_exercise_hub_tp_theme_css .='color: '.esc_attr($fitness_exercise_hub_header_image_title_text_color).';';
$fitness_exercise_hub_tp_theme_css .='}';
}

// menu color
$fitness_exercise_hub_menu_color = get_theme_mod('fitness_exercise_hub_menu_color');
if($fitness_exercise_hub_menu_color != false){
$fitness_exercise_hub_tp_theme_css .='.main-navigation a{';
$fitness_exercise_hub_tp_theme_css .='color: '.esc_attr($fitness_exercise_hub_menu_color).';';
$fitness_exercise_hub_tp_theme_css .='}';
}

//Footer Font Weight
$fitness_exercise_hub_footer_copyright_title_font_weight = get_theme_mod( 'fitness_exercise_hub_footer_copyright_title_font_weight','');
if($fitness_exercise_hub_footer_copyright_title_font_weight == '100'){
$fitness_exercise_hub_tp_theme_css .='#footer .site-info p {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 100;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_copyright_title_font_weight == '200'){
$fitness_exercise_hub_tp_theme_css .='#footer .site-info p {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 200;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_copyright_title_font_weight == '300'){
$fitness_exercise_hub_tp_theme_css .='#footer .site-info p {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 300;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_copyright_title_font_weight == '400'){
$fitness_exercise_hub_tp_theme_css .='#footer .site-info p {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 400;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_copyright_title_font_weight == '500'){
$fitness_exercise_hub_tp_theme_css .='#footer .site-info p {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 500;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_copyright_title_font_weight == '600'){
$fitness_exercise_hub_tp_theme_css .='#footer .site-info p {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 600;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_copyright_title_font_weight == '700'){
$fitness_exercise_hub_tp_theme_css .='#footer .site-info p {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 700;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_copyright_title_font_weight == '800'){
$fitness_exercise_hub_tp_theme_css .='#footer .site-info p {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 800;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_copyright_title_font_weight == '900'){
$fitness_exercise_hub_tp_theme_css .='#footer .site-info p {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 900;';
$fitness_exercise_hub_tp_theme_css .='}';
}