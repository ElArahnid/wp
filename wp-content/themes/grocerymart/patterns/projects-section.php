<?php
 /**
  * Title: Projects Section
  * Slug: grocerymart/projects-section
  */
?>

<!-- wp:group {"className":"project-section  wp-block-section alignfull","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group project-section wp-block-section alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:0px;padding-left:0px"><!-- wp:group {"className":"projects-slider","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group projects-slider" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"projects-heading","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"},"padding":{"left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group projects-heading" style="margin-bottom:var(--wp--preset--spacing--70);padding-right:0;padding-left:0"><!-- wp:columns {"className":"projects-heading-cols"} -->
<div class="wp-block-columns projects-heading-cols"><!-- wp:column {"width":"80%","className":"projects-head-left wow fadeInDown"} -->
<div class="wp-block-column projects-head-left wow fadeInDown" style="flex-basis:80%"><!-- wp:heading {"textAlign":"left","className":"sec-main-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"30px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontFamily":"roboto"} -->
<h2 class="wp-block-heading has-text-align-left sec-main-heading has-foreground-color has-text-color has-link-color has-roboto-font-family" style="margin-top:0;margin-bottom:0;font-size:30px;font-style:normal;font-weight:700"><?php esc_html_e('Our Project','grocerymart'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontFamily":"roboto"} -->
<p class="has-text-align-left has-foreground-color has-text-color has-link-color has-roboto-font-family" style="margin-top:0;margin-bottom:0;font-size:17px;font-style:normal;font-weight:400"><?php esc_html_e('Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry.','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%","className":"projects-head-right"} -->
<div class="wp-block-column projects-head-right" style="flex-basis:20%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"owl-carousel","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group owl-carousel" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"project-card","layout":{"type":"default"}} -->
<div class="wp-block-group project-card"><!-- wp:cover {"url":"<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/projects-3.png' )); ?>","id":32,"dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.58,"y":0.06},"minHeight":500,"gradient":"projects-overlay","isDark":false,"sizeSlug":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0px","bottom":"0px"}},"border":{"radius":"7px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light" style="border-radius:7px;margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:0px;min-height:500px"><img class="wp-block-cover__image-background wp-image-32 size-full" alt="" src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/projects-3.png' )); ?>" style="object-position:58% 6%" data-object-fit="cover" data-object-position="58% 6%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-projects-overlay-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"project-content-box","layout":{"type":"default"}} -->
<div class="wp-block-group project-content-box"><!-- wp:image {"lightbox":{"enabled":false},"id":8,"sizeSlug":"full","linkDestination":"custom","className":"arrow-img-projects"} -->
<figure class="wp-block-image size-full arrow-img-projects"><a href="#"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/project-arrow.png' )); ?>" alt="" class="wp-image-8"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"project-content-box-inner","layout":{"type":"default"}} -->
<div class="wp-block-group project-content-box-inner"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"background","fontFamily":"roboto"} -->
<h3 class="wp-block-heading has-background-color has-text-color has-link-color has-roboto-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-style:normal;font-weight:700"><?php esc_html_e('It is a long established fact that a reader will be distracted by the readable content of a page when looking layout.','grocerymart'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"background","fontFamily":"roboto"} -->
<p class="has-background-color has-text-color has-link-color has-roboto-font-family" style="margin-top:0;margin-bottom:0;font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e('Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"project-card","layout":{"type":"default"}} -->
<div class="wp-block-group project-card"><!-- wp:cover {"url":"<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/projects-2.png' )); ?>","id":30,"dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.32},"minHeight":500,"gradient":"projects-overlay","sizeSlug":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0px","bottom":"0px"}},"border":{"radius":"7px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:7px;margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:0px;min-height:500px"><img class="wp-block-cover__image-background wp-image-30 size-full" alt="" src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/projects-2.png' )); ?>" style="object-position:50% 32%" data-object-fit="cover" data-object-position="50% 32%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-projects-overlay-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"project-content-box","layout":{"type":"default"}} -->
<div class="wp-block-group project-content-box"><!-- wp:image {"lightbox":{"enabled":false},"id":8,"sizeSlug":"full","linkDestination":"custom","className":"arrow-img-projects"} -->
<figure class="wp-block-image size-full arrow-img-projects"><a href="#"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/project-arrow.png' )); ?>" alt="" class="wp-image-8"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"project-content-box-inner","layout":{"type":"default"}} -->
<div class="wp-block-group project-content-box-inner"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"background","fontFamily":"roboto"} -->
<h3 class="wp-block-heading has-background-color has-text-color has-link-color has-roboto-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-style:normal;font-weight:700"><?php esc_html_e('Lorem Ipsum is simply dummy text of the industry.','grocerymart'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"background","fontFamily":"roboto"} -->
<p class="has-background-color has-text-color has-link-color has-roboto-font-family" style="margin-top:0;margin-bottom:0;font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e('Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"project-card","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group project-card" style="margin-top:0"><!-- wp:cover {"url":"<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/projects-4.png' )); ?>","id":34,"dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.11,"y":0.41},"minHeight":500,"gradient":"projects-overlay","sizeSlug":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0px","bottom":"0px"}},"border":{"radius":"7px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:7px;margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:0px;min-height:500px"><img class="wp-block-cover__image-background wp-image-34 size-full" alt="" src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/projects-4.png' )); ?>" style="object-position:11% 41%" data-object-fit="cover" data-object-position="11% 41%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-projects-overlay-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"project-content-box","layout":{"type":"default"}} -->
<div class="wp-block-group project-content-box"><!-- wp:image {"lightbox":{"enabled":false},"id":8,"sizeSlug":"full","linkDestination":"custom","className":"arrow-img-projects"} -->
<figure class="wp-block-image size-full arrow-img-projects"><a href="#"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/project-arrow.png' )); ?>" alt="" class="wp-image-8"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"project-content-box-inner","layout":{"type":"default"}} -->
<div class="wp-block-group project-content-box-inner"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"background","fontFamily":"roboto"} -->
<h3 class="wp-block-heading has-background-color has-text-color has-link-color has-roboto-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-style:normal;font-weight:700"><?php esc_html_e('Dolor sit amet, consec adipiscing elit, sed.','grocerymart'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"background","fontFamily":"roboto"} -->
<p class="has-background-color has-text-color has-link-color has-roboto-font-family" style="margin-top:0;margin-bottom:0;font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e('Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"project-card","layout":{"type":"default"}} -->
<div class="wp-block-group project-card"><!-- wp:cover {"url":"<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/projects-1.png' )); ?>","id":29,"dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.24},"minHeight":500,"gradient":"projects-overlay","isDark":false,"sizeSlug":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0px","bottom":"0px"}},"border":{"radius":"7px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light" style="border-radius:7px;margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:0px;min-height:500px"><img class="wp-block-cover__image-background wp-image-29 size-full" alt="" src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/projects-1.png' )); ?>" style="object-position:50% 24%" data-object-fit="cover" data-object-position="50% 24%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim has-background-gradient has-projects-overlay-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"project-content-box","layout":{"type":"default"}} -->
<div class="wp-block-group project-content-box"><!-- wp:image {"lightbox":{"enabled":false},"id":8,"sizeSlug":"full","linkDestination":"custom","className":"arrow-img-projects"} -->
<figure class="wp-block-image size-full arrow-img-projects"><a href="#"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/project-arrow.png' )); ?>" alt="" class="wp-image-8"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"project-content-box-inner","layout":{"type":"default"}} -->
<div class="wp-block-group project-content-box-inner"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"background","fontFamily":"roboto"} -->
<h3 class="wp-block-heading has-background-color has-text-color has-link-color has-roboto-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-style:normal;font-weight:700"><?php esc_html_e('Lorem Ipsum is simply dummy text of the industry.','grocerymart'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"background","fontFamily":"roboto"} -->
<p class="has-background-color has-text-color has-link-color has-roboto-font-family" style="margin-top:0;margin-bottom:0;font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e('Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->