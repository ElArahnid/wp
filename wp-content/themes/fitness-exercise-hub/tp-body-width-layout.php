<?php

	$fitness_exercise_hub_tp_theme_css = "";

$fitness_exercise_hub_theme_lay = get_theme_mod( 'fitness_exercise_hub_tp_body_layout_settings','Full');
if($fitness_exercise_hub_theme_lay == 'Container'){
$fitness_exercise_hub_tp_theme_css .='body{';
	$fitness_exercise_hub_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
$fitness_exercise_hub_tp_theme_css .='}';
$fitness_exercise_hub_tp_theme_css .='@media screen and (max-width:575px){';
		$fitness_exercise_hub_tp_theme_css .='body{';
			$fitness_exercise_hub_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
		$fitness_exercise_hub_tp_theme_css .='} }';
$fitness_exercise_hub_tp_theme_css .='.page-template-front-page .menubar{';
	$fitness_exercise_hub_tp_theme_css .='position: static;';
$fitness_exercise_hub_tp_theme_css .='}';
$fitness_exercise_hub_tp_theme_css .='.scrolled{';
	$fitness_exercise_hub_tp_theme_css .='width: auto; left:0; right:0;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_theme_lay == 'Container Fluid'){
$fitness_exercise_hub_tp_theme_css .='body{';
	$fitness_exercise_hub_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$fitness_exercise_hub_tp_theme_css .='}';
$fitness_exercise_hub_tp_theme_css .='@media screen and (max-width:575px){';
		$fitness_exercise_hub_tp_theme_css .='body{';
			$fitness_exercise_hub_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
		$fitness_exercise_hub_tp_theme_css .='} }';
$fitness_exercise_hub_tp_theme_css .='.page-template-front-page .menubar{';
	$fitness_exercise_hub_tp_theme_css .='width: 99%';
$fitness_exercise_hub_tp_theme_css .='}';
$fitness_exercise_hub_tp_theme_css .='.scrolled{';
	$fitness_exercise_hub_tp_theme_css .='width: auto; left:0; right:0;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_theme_lay == 'Full'){
$fitness_exercise_hub_tp_theme_css .='body{';
	$fitness_exercise_hub_tp_theme_css .='max-width: 100%;';
$fitness_exercise_hub_tp_theme_css .='}';
}

$fitness_exercise_hub_scroll_position = get_theme_mod( 'fitness_exercise_hub_scroll_top_position','Right');
if($fitness_exercise_hub_scroll_position == 'Right'){
    $fitness_exercise_hub_tp_theme_css .='#return-to-top{';
        $fitness_exercise_hub_tp_theme_css .='right: 20px;';
    $fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_scroll_position == 'Left'){
    $fitness_exercise_hub_tp_theme_css .='#return-to-top{';
        $fitness_exercise_hub_tp_theme_css .='left: 20px;';
    $fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_scroll_position == 'Center'){
    $fitness_exercise_hub_tp_theme_css .='#return-to-top{';
        $fitness_exercise_hub_tp_theme_css .='right: 50%;left: 50%;';
    $fitness_exercise_hub_tp_theme_css .='}';
}

// related post
$fitness_exercise_hub_related_post_mob = get_theme_mod('fitness_exercise_hub_related_post_mob', true);
$fitness_exercise_hub_related_post = get_theme_mod('fitness_exercise_hub_remove_related_post', true);
$fitness_exercise_hub_tp_theme_css .= '.related-post-block {';
if ($fitness_exercise_hub_related_post == false) {
    $fitness_exercise_hub_tp_theme_css .= 'display: none;';
}
$fitness_exercise_hub_tp_theme_css .= '}';
$fitness_exercise_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($fitness_exercise_hub_related_post == false || $fitness_exercise_hub_related_post_mob == false) {
    $fitness_exercise_hub_tp_theme_css .= '.related-post-block { display: none; }';
}
$fitness_exercise_hub_tp_theme_css .= '}';

// slider btn
$fitness_exercise_hub_slider_button_mob = get_theme_mod('fitness_exercise_hub_slider_button_mob', true);
$fitness_exercise_hub_slider_button = get_theme_mod('fitness_exercise_hub_slider_button', true);
$fitness_exercise_hub_tp_theme_css .= '#slider .more-btn {';
if ($fitness_exercise_hub_slider_button == false) {
    $fitness_exercise_hub_tp_theme_css .= 'display: none;';
}
$fitness_exercise_hub_tp_theme_css .= '}';
$fitness_exercise_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($fitness_exercise_hub_slider_button == false || $fitness_exercise_hub_slider_button_mob == false) {
    $fitness_exercise_hub_tp_theme_css .= '#slider .more-btn { display: none; }';
}
$fitness_exercise_hub_tp_theme_css .= '}';

//return to header mobile				
$fitness_exercise_hub_return_to_header_mob = get_theme_mod('fitness_exercise_hub_return_to_header_mob', true);
$fitness_exercise_hub_return_to_header = get_theme_mod('fitness_exercise_hub_return_to_header', true);
$fitness_exercise_hub_tp_theme_css .= '.return-to-header{';
if ($fitness_exercise_hub_return_to_header == false) {
    $fitness_exercise_hub_tp_theme_css .= 'display: none;';
}
$fitness_exercise_hub_tp_theme_css .= '}';
$fitness_exercise_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($fitness_exercise_hub_return_to_header == false || $fitness_exercise_hub_return_to_header_mob == false) {
    $fitness_exercise_hub_tp_theme_css .= '.return-to-header{ display: none; }';
}
$fitness_exercise_hub_tp_theme_css .= '}';

$fitness_exercise_hub_related_product = get_theme_mod('fitness_exercise_hub_related_product',true);
if($fitness_exercise_hub_related_product == false){
$fitness_exercise_hub_tp_theme_css .='.related.products{';
	$fitness_exercise_hub_tp_theme_css .='display: none;';
$fitness_exercise_hub_tp_theme_css .='}';
}

//blog description              
$fitness_exercise_hub_mobile_blog_description = get_theme_mod('fitness_exercise_hub_mobile_blog_description', true);
$fitness_exercise_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($fitness_exercise_hub_mobile_blog_description == false) {
    $fitness_exercise_hub_tp_theme_css .= '.blog-description{ display: none; }';
}
$fitness_exercise_hub_tp_theme_css .= '}';

// menu text tranform
$fitness_exercise_hub_menu_text_tranform = get_theme_mod( 'fitness_exercise_hub_menu_text_tranform','Uppercase');
if($fitness_exercise_hub_menu_text_tranform == 'Uppercase'){
$fitness_exercise_hub_tp_theme_css .='.main-navigation a {';
	$fitness_exercise_hub_tp_theme_css .='text-transform: uppercase;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_menu_text_tranform == 'Lowercase'){
$fitness_exercise_hub_tp_theme_css .='.main-navigation a {';
	$fitness_exercise_hub_tp_theme_css .='text-transform: lowercase;';
$fitness_exercise_hub_tp_theme_css .='}';
}
else if($fitness_exercise_hub_menu_text_tranform == 'Capitalize'){
$fitness_exercise_hub_tp_theme_css .='.main-navigation a {';
	$fitness_exercise_hub_tp_theme_css .='text-transform: capitalize;';
$fitness_exercise_hub_tp_theme_css .='}';
}

//menu font size
$fitness_exercise_hub_menu_font_size = get_theme_mod('fitness_exercise_hub_menu_font_size', 14);{
$fitness_exercise_hub_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after,.main-navigation li.menu-item-has-children:after{';
	$fitness_exercise_hub_tp_theme_css .='font-size: '.esc_attr($fitness_exercise_hub_menu_font_size).'px;';
$fitness_exercise_hub_tp_theme_css .='}';
}

//footer image
$fitness_exercise_hub_footer_widget_image = get_theme_mod('fitness_exercise_hub_footer_widget_image');
if($fitness_exercise_hub_footer_widget_image != false){
$fitness_exercise_hub_tp_theme_css .='#footer{';
$fitness_exercise_hub_tp_theme_css .='background: url('.esc_attr($fitness_exercise_hub_footer_widget_image).');';
$fitness_exercise_hub_tp_theme_css .='}';
}

$fitness_exercise_hub_social_icon_fontsize = get_theme_mod('fitness_exercise_hub_social_icon_fontsize');{
$fitness_exercise_hub_tp_theme_css .='.media-links a i{';
	$fitness_exercise_hub_tp_theme_css .='font-size: '.esc_attr($fitness_exercise_hub_social_icon_fontsize).'px;';
$fitness_exercise_hub_tp_theme_css .='}';
}

// site title font size option
$fitness_exercise_hub_site_title_font_size = get_theme_mod('fitness_exercise_hub_site_title_font_size', 25);{
$fitness_exercise_hub_tp_theme_css .='.logo h1 , .logo p a{';
$fitness_exercise_hub_tp_theme_css .='font-size: '.esc_attr($fitness_exercise_hub_site_title_font_size).'px;';
$fitness_exercise_hub_tp_theme_css .='}';
}

//site tagline font size option
$fitness_exercise_hub_site_tagline_font_size = get_theme_mod('fitness_exercise_hub_site_tagline_font_size', 15);{
$fitness_exercise_hub_tp_theme_css .='.logo p{';
$fitness_exercise_hub_tp_theme_css .='font-size: '.esc_attr($fitness_exercise_hub_site_tagline_font_size).'px;';
$fitness_exercise_hub_tp_theme_css .='}';
}
//======================= slider Content layout ===================== //

$fitness_exercise_hub_slider_content_layout = get_theme_mod('fitness_exercise_hub_slider_content_layout', 'LEFT-ALIGN'); 
$fitness_exercise_hub_tp_theme_css .= '#slider .carousel-caption{';
switch ($fitness_exercise_hub_slider_content_layout) {
    case 'LEFT-ALIGN':
        $fitness_exercise_hub_tp_theme_css .= 'text-align:left; right: 15%; left: 50%';
        break;
    case 'CENTER-ALIGN':
        $fitness_exercise_hub_tp_theme_css .= 'text-align:center; right: 15%; left: 50%';
        break;
    case 'RIGHT-ALIGN':
        $fitness_exercise_hub_tp_theme_css .= 'text-align:right; right: 15%; left: 50%';
        break;
    default:
        $fitness_exercise_hub_tp_theme_css .= 'text-align:left; right: 15%; left: 50%';
        break;
}
$fitness_exercise_hub_tp_theme_css .= '}';

//sale position
$fitness_exercise_hub_scroll_position = get_theme_mod( 'fitness_exercise_hub_sale_tag_position','right');
if($fitness_exercise_hub_scroll_position == 'right'){
$fitness_exercise_hub_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $fitness_exercise_hub_tp_theme_css .='right: 25px !important;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_scroll_position == 'left'){
$fitness_exercise_hub_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $fitness_exercise_hub_tp_theme_css .='left: 25px !important;';
$fitness_exercise_hub_tp_theme_css .='}';
}

//Font Weight
$fitness_exercise_hub_menu_font_weight = get_theme_mod( 'fitness_exercise_hub_menu_font_weight','400');
if($fitness_exercise_hub_menu_font_weight == '100'){
$fitness_exercise_hub_tp_theme_css .='.main-navigation a{';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 100;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_menu_font_weight == '200'){
$fitness_exercise_hub_tp_theme_css .='.main-navigation a{';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 200;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_menu_font_weight == '300'){
$fitness_exercise_hub_tp_theme_css .='.main-navigation a{';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 300;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_menu_font_weight == '400'){
$fitness_exercise_hub_tp_theme_css .='.main-navigation a{';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 400;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_menu_font_weight == '500'){
$fitness_exercise_hub_tp_theme_css .='.main-navigation a{';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 500;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_menu_font_weight == '600'){
$fitness_exercise_hub_tp_theme_css .='.main-navigation a{';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 600;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_menu_font_weight == '700'){
$fitness_exercise_hub_tp_theme_css .='.main-navigation a{';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 700;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_menu_font_weight == '800'){
$fitness_exercise_hub_tp_theme_css .='.main-navigation a{';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 800;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_menu_font_weight == '900'){
$fitness_exercise_hub_tp_theme_css .='.main-navigation a{';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 900;';
$fitness_exercise_hub_tp_theme_css .='}';
}

/*------------- Blog Page------------------*/
$fitness_exercise_hub_post_image_round = get_theme_mod('fitness_exercise_hub_post_image_round', 0);
if($fitness_exercise_hub_post_image_round != false){
    $fitness_exercise_hub_tp_theme_css .='.blog .box-image img{';
        $fitness_exercise_hub_tp_theme_css .='border-radius: '.esc_attr($fitness_exercise_hub_post_image_round).'px;';
    $fitness_exercise_hub_tp_theme_css .='}';
}

$fitness_exercise_hub_post_image_width = get_theme_mod('fitness_exercise_hub_post_image_width', '');
if($fitness_exercise_hub_post_image_width != false){
    $fitness_exercise_hub_tp_theme_css .='.blog .box-image img{';
        $fitness_exercise_hub_tp_theme_css .='Width: '.esc_attr($fitness_exercise_hub_post_image_width).'px;';
    $fitness_exercise_hub_tp_theme_css .='}';
}

$fitness_exercise_hub_post_image_length = get_theme_mod('fitness_exercise_hub_post_image_length', '');
if($fitness_exercise_hub_post_image_length != false){
    $fitness_exercise_hub_tp_theme_css .='.blog .box-image img{';
        $fitness_exercise_hub_tp_theme_css .='height: '.esc_attr($fitness_exercise_hub_post_image_length).'px;';
    $fitness_exercise_hub_tp_theme_css .='}';
}

// footer widget title font size
    $fitness_exercise_hub_footer_widget_title_font_size = get_theme_mod('fitness_exercise_hub_footer_widget_title_font_size', '');{
    $fitness_exercise_hub_tp_theme_css .='#footer h3{';
        $fitness_exercise_hub_tp_theme_css .='font-size: '.esc_attr($fitness_exercise_hub_footer_widget_title_font_size).'px;';
    $fitness_exercise_hub_tp_theme_css .='}';
    }

    // Copyright text font size
    $fitness_exercise_hub_footer_copyright_font_size = get_theme_mod('fitness_exercise_hub_footer_copyright_font_size', '');{
    $fitness_exercise_hub_tp_theme_css .='#footer .site-info p{';
        $fitness_exercise_hub_tp_theme_css .='font-size: '.esc_attr($fitness_exercise_hub_footer_copyright_font_size).'px;';
    $fitness_exercise_hub_tp_theme_css .='}';
    }

    // copyright padding
    $fitness_exercise_hub_footer_copyright_top_bottom_padding = get_theme_mod('fitness_exercise_hub_footer_copyright_top_bottom_padding', '');
    if ($fitness_exercise_hub_footer_copyright_top_bottom_padding !== '') { 
        $fitness_exercise_hub_tp_theme_css .= '.site-info {';
        $fitness_exercise_hub_tp_theme_css .= 'padding-top: ' . esc_attr($fitness_exercise_hub_footer_copyright_top_bottom_padding) . 'px;';
        $fitness_exercise_hub_tp_theme_css .= 'padding-bottom: ' . esc_attr($fitness_exercise_hub_footer_copyright_top_bottom_padding) . 'px;';
        $fitness_exercise_hub_tp_theme_css .= '}';
    }

    // copyright position
    $fitness_exercise_hub_copyright_text_position = get_theme_mod( 'fitness_exercise_hub_copyright_text_position','Center');
    if($fitness_exercise_hub_copyright_text_position == 'Center'){
    $fitness_exercise_hub_tp_theme_css .='#footer .site-info p{';
    $fitness_exercise_hub_tp_theme_css .='text-align:center;';
    $fitness_exercise_hub_tp_theme_css .='}';
    }else if($fitness_exercise_hub_copyright_text_position == 'Left'){
    $fitness_exercise_hub_tp_theme_css .='#footer .site-info p{';
    $fitness_exercise_hub_tp_theme_css .='text-align:left;';
    $fitness_exercise_hub_tp_theme_css .='}';
    }else if($fitness_exercise_hub_copyright_text_position == 'Right'){
    $fitness_exercise_hub_tp_theme_css .='#footer .site-info p{';
    $fitness_exercise_hub_tp_theme_css .='text-align:right;';
    $fitness_exercise_hub_tp_theme_css .='}';
}

// Header Image title font size
$fitness_exercise_hub_header_image_title_font_size = get_theme_mod('fitness_exercise_hub_header_image_title_font_size', '32');{
$fitness_exercise_hub_tp_theme_css .='.box-text h2{';
    $fitness_exercise_hub_tp_theme_css .='font-size: '.esc_attr($fitness_exercise_hub_header_image_title_font_size).'px;';
$fitness_exercise_hub_tp_theme_css .='}';
}


/*--------------------------- banner image Opacity -------------------*/
    $fitness_exercise_hub_theme_lay = get_theme_mod( 'fitness_exercise_hub_header_banner_opacity_color','0.5');
        if($fitness_exercise_hub_theme_lay == '0'){
            $fitness_exercise_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $fitness_exercise_hub_tp_theme_css .='opacity:0';
            $fitness_exercise_hub_tp_theme_css .='}';
        }else if($fitness_exercise_hub_theme_lay == '0.1'){
            $fitness_exercise_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $fitness_exercise_hub_tp_theme_css .='opacity:0.1';
            $fitness_exercise_hub_tp_theme_css .='}';
        }else if($fitness_exercise_hub_theme_lay == '0.2'){
            $fitness_exercise_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $fitness_exercise_hub_tp_theme_css .='opacity:0.2';
            $fitness_exercise_hub_tp_theme_css .='}';
        }else if($fitness_exercise_hub_theme_lay == '0.3'){
            $fitness_exercise_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $fitness_exercise_hub_tp_theme_css .='opacity:0.3';
            $fitness_exercise_hub_tp_theme_css .='}';
        }else if($fitness_exercise_hub_theme_lay == '0.4'){
            $fitness_exercise_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $fitness_exercise_hub_tp_theme_css .='opacity:0.4';
            $fitness_exercise_hub_tp_theme_css .='}';
        }else if($fitness_exercise_hub_theme_lay == '0.5'){
            $fitness_exercise_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $fitness_exercise_hub_tp_theme_css .='opacity:0.5';
            $fitness_exercise_hub_tp_theme_css .='}';
        }else if($fitness_exercise_hub_theme_lay == '0.6'){
            $fitness_exercise_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $fitness_exercise_hub_tp_theme_css .='opacity:0.6';
            $fitness_exercise_hub_tp_theme_css .='}';
        }else if($fitness_exercise_hub_theme_lay == '0.7'){
            $fitness_exercise_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $fitness_exercise_hub_tp_theme_css .='opacity:0.7';
            $fitness_exercise_hub_tp_theme_css .='}';
        }else if($fitness_exercise_hub_theme_lay == '0.8'){
            $fitness_exercise_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $fitness_exercise_hub_tp_theme_css .='opacity:0.8';
            $fitness_exercise_hub_tp_theme_css .='}';
        }else if($fitness_exercise_hub_theme_lay == '0.9'){
            $fitness_exercise_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $fitness_exercise_hub_tp_theme_css .='opacity:0.9';
            $fitness_exercise_hub_tp_theme_css .='}';
        }else if($fitness_exercise_hub_theme_lay == '1'){
            $fitness_exercise_hub_tp_theme_css .='.single-page-img, .featured-image{';
                $fitness_exercise_hub_tp_theme_css .='opacity:1';
            $fitness_exercise_hub_tp_theme_css .='}';
        }

    $fitness_exercise_hub_header_banner_image_overlay = get_theme_mod('fitness_exercise_hub_header_banner_image_overlay', true);
    if($fitness_exercise_hub_header_banner_image_overlay == false){
        $fitness_exercise_hub_tp_theme_css .='.single-page-img, .featured-image{';
            $fitness_exercise_hub_tp_theme_css .='opacity:1;';
        $fitness_exercise_hub_tp_theme_css .='}';
    }

    $fitness_exercise_hub_header_banner_image_ooverlay_color = get_theme_mod('fitness_exercise_hub_header_banner_image_ooverlay_color', true);
    if($fitness_exercise_hub_header_banner_image_ooverlay_color != false){
        $fitness_exercise_hub_tp_theme_css .='.box-image-page{';
            $fitness_exercise_hub_tp_theme_css .='background-color: '.esc_attr($fitness_exercise_hub_header_banner_image_ooverlay_color).';';
        $fitness_exercise_hub_tp_theme_css .='}';
    }

    // Slider Height
    $fitness_exercise_hub_slider_img_height      = get_theme_mod('fitness_exercise_hub_slider_img_height');
    $fitness_exercise_hub_slider_img_height_resp = get_theme_mod('fitness_exercise_hub_slider_img_height_responsive');

    // Desktop height
    $fitness_exercise_hub_tp_theme_css .= '@media screen and (min-width: 768px) {';
    $fitness_exercise_hub_tp_theme_css .= '#slider img {';
    if ( $fitness_exercise_hub_slider_img_height ) {
        $fitness_exercise_hub_tp_theme_css .= 'height: ' . esc_attr( $fitness_exercise_hub_slider_img_height ) . ';';
    }
    $fitness_exercise_hub_tp_theme_css .= 'width: 100%;';
    $fitness_exercise_hub_tp_theme_css .= '}';
    $fitness_exercise_hub_tp_theme_css .= '}';

    // Mobile height
    $fitness_exercise_hub_tp_theme_css .= '@media screen and (max-width: 767px) {';
    $fitness_exercise_hub_tp_theme_css .= '#slider img {';
    if ( $fitness_exercise_hub_slider_img_height_resp ) {
        $fitness_exercise_hub_tp_theme_css .= 'height: ' . esc_attr( $fitness_exercise_hub_slider_img_height_resp ) . ' !important;';
    }
    $fitness_exercise_hub_tp_theme_css .= 'width: 100%;';
    $fitness_exercise_hub_tp_theme_css .= '}';
    $fitness_exercise_hub_tp_theme_css .= '}';

    
// footer widget letter case
$fitness_exercise_hub_footer_widget_title_text_tranform = get_theme_mod( 'fitness_exercise_hub_footer_widget_title_text_tranform','');
if($fitness_exercise_hub_footer_widget_title_text_tranform == 'Uppercase'){
$fitness_exercise_hub_tp_theme_css .='#footer h2, #footer h3, #footer h1.wp-block-heading, #footer h2.wp-block-heading, #footer h3.wp-block-heading, #footer h4.wp-block-heading, #footer h5.wp-block-heading, #footer h6.wp-block-heading {';
    $fitness_exercise_hub_tp_theme_css .='text-transform: uppercase;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_widget_title_text_tranform == 'Lowercase'){
$fitness_exercise_hub_tp_theme_css .='#footer h2, #footer h3, #footer h1.wp-block-heading, #footer h2.wp-block-heading, #footer h3.wp-block-heading, #footer h4.wp-block-heading, #footer h5.wp-block-heading, #footer h6.wp-block-heading {';
    $fitness_exercise_hub_tp_theme_css .='text-transform: lowercase;';
$fitness_exercise_hub_tp_theme_css .='}';
}
else if($fitness_exercise_hub_footer_widget_title_text_tranform == 'Capitalize'){
$fitness_exercise_hub_tp_theme_css .='#footer h2, #footer h3, #footer h1.wp-block-heading, #footer h2.wp-block-heading, #footer h3.wp-block-heading, #footer h4.wp-block-heading, #footer h5.wp-block-heading, #footer h6.wp-block-heading {';
    $fitness_exercise_hub_tp_theme_css .='text-transform: capitalize;';
$fitness_exercise_hub_tp_theme_css .='}';
}

//Footer Font Weight
$fitness_exercise_hub_footer_widget_title_font_weight = get_theme_mod( 'fitness_exercise_hub_footer_widget_title_font_weight','');
if($fitness_exercise_hub_footer_widget_title_font_weight == '100'){
$fitness_exercise_hub_tp_theme_css .='#footer h2, #footer h3, #footer h1.wp-block-heading, #footer h2.wp-block-heading, #footer h3.wp-block-heading, #footer h4.wp-block-heading, #footer h5.wp-block-heading, #footer h6.wp-block-heading {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 100;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_widget_title_font_weight == '200'){
$fitness_exercise_hub_tp_theme_css .='#footer h2, #footer h3, #footer h1.wp-block-heading, #footer h2.wp-block-heading, #footer h3.wp-block-heading, #footer h4.wp-block-heading, #footer h5.wp-block-heading, #footer h6.wp-block-heading {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 200;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_widget_title_font_weight == '300'){
$fitness_exercise_hub_tp_theme_css .='#footer h2, #footer h3, #footer h1.wp-block-heading, #footer h2.wp-block-heading, #footer h3.wp-block-heading, #footer h4.wp-block-heading, #footer h5.wp-block-heading, #footer h6.wp-block-heading {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 300;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_widget_title_font_weight == '400'){
$fitness_exercise_hub_tp_theme_css .='#footer h2, #footer h3, #footer h1.wp-block-heading, #footer h2.wp-block-heading, #footer h3.wp-block-heading, #footer h4.wp-block-heading, #footer h5.wp-block-heading, #footer h6.wp-block-heading {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 400;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_widget_title_font_weight == '500'){
$fitness_exercise_hub_tp_theme_css .='#footer h2, #footer h3, #footer h1.wp-block-heading, #footer h2.wp-block-heading, #footer h3.wp-block-heading, #footer h4.wp-block-heading, #footer h5.wp-block-heading, #footer h6.wp-block-heading {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 500;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_widget_title_font_weight == '600'){
$fitness_exercise_hub_tp_theme_css .='#footer h2, #footer h3, #footer h1.wp-block-heading, #footer h2.wp-block-heading, #footer h3.wp-block-heading, #footer h4.wp-block-heading, #footer h5.wp-block-heading, #footer h6.wp-block-heading {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 600;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_widget_title_font_weight == '700'){
$fitness_exercise_hub_tp_theme_css .='#footer h2, #footer h3, #footer h1.wp-block-heading, #footer h2.wp-block-heading, #footer h3.wp-block-heading, #footer h4.wp-block-heading, #footer h5.wp-block-heading, #footer h6.wp-block-heading {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 700;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_widget_title_font_weight == '800'){
$fitness_exercise_hub_tp_theme_css .='#footer h2, #footer h3, #footer h1.wp-block-heading, #footer h2.wp-block-heading, #footer h3.wp-block-heading, #footer h4.wp-block-heading, #footer h5.wp-block-heading, #footer h6.wp-block-heading {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 800;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_widget_title_font_weight == '900'){
$fitness_exercise_hub_tp_theme_css .='#footer h2, #footer h3, #footer h1.wp-block-heading, #footer h2.wp-block-heading, #footer h3.wp-block-heading, #footer h4.wp-block-heading, #footer h5.wp-block-heading, #footer h6.wp-block-heading {';
    $fitness_exercise_hub_tp_theme_css .='font-weight: 900;';
$fitness_exercise_hub_tp_theme_css .='}';
}

// footer widget position
$fitness_exercise_hub_footer_widget_title_position = get_theme_mod( 'fitness_exercise_hub_footer_widget_title_position','');
if($fitness_exercise_hub_footer_widget_title_position == 'Right'){
$fitness_exercise_hub_tp_theme_css .='#footer aside.widget-area{';
$fitness_exercise_hub_tp_theme_css .='text-align: right;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_widget_title_position == 'Left'){
$fitness_exercise_hub_tp_theme_css .='#footer aside.widget-area{';
$fitness_exercise_hub_tp_theme_css .='text-align: left;';
$fitness_exercise_hub_tp_theme_css .='}';
}else if($fitness_exercise_hub_footer_widget_title_position == 'Center'){
$fitness_exercise_hub_tp_theme_css .='#footer aside.widget-area{';
$fitness_exercise_hub_tp_theme_css .='text-align: center;';
$fitness_exercise_hub_tp_theme_css .='}';
}