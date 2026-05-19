<?php
 /**
  * Title: Product Section
  * Slug: grocerymart/product-section
  */

$grocerymart_pluginsList = get_option( 'active_plugins' );
$grocerymart_plugin = 'woocommerce/woocommerce.php';
$grocerymart_results = in_array( $grocerymart_plugin , $grocerymart_pluginsList);
if ( $grocerymart_results )  {
?>

<!-- wp:group {"className":"product-section","style":{"spacing":{"padding":{"top":"0px","right":"0px","left":"0px"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group product-section" style="padding-top:0px;padding-right:0px;padding-left:0px"><!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"product-head-box wow zoomIn","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-head-box wow zoomIn" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","className":"product-sec-title","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"30px","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontFamily":"roboto"} -->
<h2 class="wp-block-heading has-text-align-center product-sec-title has-heading-color has-text-color has-link-color has-roboto-font-family" style="margin-top:0;margin-bottom:0;font-size:30px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('our fresh product','grocerymart'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"product-sec-para","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400","textTransform":"lowercase"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"#5e5e5e"}}},"color":{"text":"#5e5e5e"}}} -->
<p class="has-text-align-center product-sec-para has-text-color has-link-color" style="color:#5e5e5e;margin-top:0;margin-bottom:0;font-size:15px;font-style:normal;font-weight:400;text-transform:lowercase"><?php esc_html_e('Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry.','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"timeFrame":{"operator":"in","value":"-7 days"},"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/new-arrivals","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"forcePageReload":true,"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"product-main-sec"} -->
<div class="wp-block-woocommerce-product-collection product-main-sec"><!-- wp:woocommerce/product-template {"className":"product-boxes"} -->
<!-- wp:group {"className":"product-box wow zoomIn","style":{"border":{"color":"#aaa4a4","width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group product-box wow zoomIn has-border-color" style="border-color:#aaa4a4;border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"className":"product-img-box","style":{"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}},"spacing":{"padding":{"top":"25px","bottom":"25px","left":"10px","right":"10px"},"margin":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"product-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-product-bg-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;margin-bottom:var(--wp--preset--spacing--40);padding-top:25px;padding-right:10px;padding-bottom:25px;padding-left:10px"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"160px","scale":"contain","className":"product-img"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"className":"product-rating","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"10px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"left","isLink":true,"className":"product-title","style":{"spacing":{"margin":{"bottom":"0rem","top":"0","right":"0"}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","className":"product-price","textColor":"heading","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"5px"}}}} /-->

<!-- wp:woocommerce/product-specifications {"showWeight":false,"showDimensions":false,"className":"product-variation","style":{"typography":{"fontSize":"14px","lineHeight":"1.1"}}} /-->

<!-- wp:group {"className":"add-cart-btn","layout":{"type":"default"}} -->
<div class="wp-block-group add-cart-btn"><!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"className":"product-btn","textColor":"heading","style":{"color":{"background":"#00000000"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"15px","bottomRight":"15px"}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"12px","right":"12px"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->

<!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<?php } else { ?>

<!-- wp:group {"className":"product-section","style":{"spacing":{"padding":{"top":"0px","right":"0px","left":"0px"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group product-section" style="padding-top:0px;padding-right:0px;padding-left:0px"><!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"product-head-box wow zoomIn","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-head-box wow zoomIn" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","className":"product-sec-title","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"30px","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontFamily":"roboto"} -->
<h2 class="wp-block-heading has-text-align-center product-sec-title has-heading-color has-text-color has-link-color has-roboto-font-family" style="margin-top:0;margin-bottom:0;font-size:30px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('our fresh product','grocerymart'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"product-sec-para","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400","textTransform":"lowercase"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"#5e5e5e"}}},"color":{"text":"#5e5e5e"}}} -->
<p class="has-text-align-center product-sec-para has-text-color has-link-color" style="color:#5e5e5e;margin-top:0;margin-bottom:0;font-size:15px;font-style:normal;font-weight:400;text-transform:lowercase"><?php esc_html_e('Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry.','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:columns {"className":"product-boxes"} -->
<div class="wp-block-columns product-boxes"><!-- wp:column {"className":"product-box wow zoomIn","style":{"border":{"color":"#aaa4a4","width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}}} -->
<div class="wp-block-column product-box wow zoomIn has-border-color" style="border-color:#aaa4a4;border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"backgroundColor":"product-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-product-bg-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;padding-top:25px;padding-right:10px;padding-bottom:25px;padding-left:10px"><!-- wp:image {"id":71,"width":"auto","height":"160px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-img","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-img" style="margin-top:0px;margin-bottom:0px"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/product1.png' )); ?>" alt="" class="wp-image-71" style="width:auto;height:160px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","className":"product-rating","style":{"color":{"background":"#fcaa07"},"border":{"radius":{"topLeft":"13px","topRight":"13px","bottomLeft":"13px","bottomRight":"13px"}},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"12px","right":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"14px"}},"textColor":"background"} -->
<p class="has-text-align-center product-rating has-background-color has-text-color has-background has-link-color" style="border-top-left-radius:13px;border-top-right-radius:13px;border-bottom-left-radius:13px;border-bottom-right-radius:13px;background-color:#fcaa07;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px;font-size:14px"><i class="fa-solid fa-star"></i><?php esc_html_e('4.9','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:16px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"textTransform":"capitalize","fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"8px"}}},"textColor":"heading"} -->
<h3 class="wp-block-heading has-heading-color has-text-color has-link-color" style="margin-bottom:8px;font-size:20px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e('organic whole milk','grocerymart'); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"8px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:8px"><!-- wp:paragraph {"style":{"color":{"text":"#2e2e2e"},"elements":{"link":{"color":{"text":"#2e2e2e"}}},"typography":{"fontSize":"16px"}}} -->
<p class="has-text-color has-link-color" style="color:#2e2e2e;font-size:16px"><?php esc_html_e('$14.99','grocerymart'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#2e2e2e"},"elements":{"link":{"color":{"text":"#2e2e2e"}}},"typography":{"fontSize":"12px","textDecoration":"line-through"}}} -->
<p class="has-text-color has-link-color" style="color:#2e2e2e;font-size:12px;text-decoration:line-through"><?php esc_html_e('$16.99','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-variation","style":{"spacing":{"blockGap":"8px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group product-variation" style="margin-top:12px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"15px"}},"textColor":"heading"} -->
<p class="has-heading-color has-text-color has-link-color" style="font-size:15px"><?php esc_html_e('Weight','grocerymart'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","lineHeight":"1.1"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"width":"1px","color":"#2E2E2E","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"color":{"background":"#f1f1f1"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"15px","right":"15px"}}},"textColor":"heading"} -->
<p class="has-border-color has-heading-color has-text-color has-background has-link-color" style="border-color:#2E2E2E;border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;background-color:#f1f1f1;padding-top:6px;padding-right:15px;padding-bottom:6px;padding-left:15px;font-size:13px;line-height:1.1"><?php esc_html_e('200gm, 300gm, 400gm','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","className":"product-btn-box","style":{"spacing":{"blockGap":{"top":"8px","left":"8px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center product-btn-box"><!-- wp:column {"verticalAlignment":"center","width":"80%","className":"product-btn-leftbox"} -->
<div class="wp-block-column is-vertically-aligned-center product-btn-leftbox" style="flex-basis:80%"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"color":{"background":"#00000000"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"15px","bottomRight":"15px"},"width":"1px"},"spacing":{"padding":{"left":"12px","right":"12px","top":"5px","bottom":"5px"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"borderColor":"heading"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-color has-text-color has-background has-link-color has-border-color has-heading-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;background-color:#00000000;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px;font-size:14px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e('select options','grocerymart'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"product-btn-rightbox"} -->
<div class="wp-block-column is-vertically-aligned-center product-btn-rightbox" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#ff2b2b"},"spacing":{"padding":{"left":"10px","right":"10px","top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" href="#" style="background-color:#ff2b2b;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><img class="wp-image-145" style="width: 60px;" src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/heart.png' )); ?>" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-box wow zoomIn","style":{"border":{"color":"#aaa4a4","width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}}} -->
<div class="wp-block-column product-box wow zoomIn has-border-color" style="border-color:#aaa4a4;border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"backgroundColor":"product-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-product-bg-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;padding-top:25px;padding-right:10px;padding-bottom:25px;padding-left:10px"><!-- wp:image {"id":169,"width":"auto","height":"160px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-img","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-img" style="margin-top:0px;margin-bottom:0px"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/product2.png' )); ?>" alt="" class="wp-image-169" style="width:auto;height:160px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","className":"product-rating","style":{"color":{"background":"#fcaa07"},"border":{"radius":{"topLeft":"13px","topRight":"13px","bottomLeft":"13px","bottomRight":"13px"}},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"12px","right":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"14px"}},"textColor":"background"} -->
<p class="has-text-align-center product-rating has-background-color has-text-color has-background has-link-color" style="border-top-left-radius:13px;border-top-right-radius:13px;border-bottom-left-radius:13px;border-bottom-right-radius:13px;background-color:#fcaa07;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px;font-size:14px"><i class="fa-solid fa-star"></i><?php esc_html_e('4.9','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:16px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"textTransform":"capitalize","fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"8px"}}},"textColor":"heading"} -->
<h3 class="wp-block-heading has-heading-color has-text-color has-link-color" style="margin-bottom:8px;font-size:20px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e('organic whole milk','grocerymart'); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"8px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:8px"><!-- wp:paragraph {"style":{"color":{"text":"#2e2e2e"},"elements":{"link":{"color":{"text":"#2e2e2e"}}},"typography":{"fontSize":"16px"}}} -->
<p class="has-text-color has-link-color" style="color:#2e2e2e;font-size:16px"><?php esc_html_e('$14.99','grocerymart'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#2e2e2e"},"elements":{"link":{"color":{"text":"#2e2e2e"}}},"typography":{"fontSize":"12px","textDecoration":"line-through"}}} -->
<p class="has-text-color has-link-color" style="color:#2e2e2e;font-size:12px;text-decoration:line-through"><?php esc_html_e('$16.99','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-variation","style":{"spacing":{"blockGap":"8px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group product-variation" style="margin-top:12px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"15px"}},"textColor":"heading"} -->
<p class="has-heading-color has-text-color has-link-color" style="font-size:15px"><?php esc_html_e('Weight','grocerymart'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","lineHeight":"1.1"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"width":"1px","color":"#2E2E2E","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"color":{"background":"#f1f1f1"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"15px","right":"15px"}}},"textColor":"heading"} -->
<p class="has-border-color has-heading-color has-text-color has-background has-link-color" style="border-color:#2E2E2E;border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;background-color:#f1f1f1;padding-top:6px;padding-right:15px;padding-bottom:6px;padding-left:15px;font-size:13px;line-height:1.1"><?php esc_html_e('200gm, 300gm, 400gm','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","className":"product-btn-box","style":{"spacing":{"blockGap":{"top":"8px","left":"8px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center product-btn-box"><!-- wp:column {"verticalAlignment":"center","width":"80%","className":"product-btn-leftbox"} -->
<div class="wp-block-column is-vertically-aligned-center product-btn-leftbox" style="flex-basis:80%"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"color":{"background":"#00000000"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"15px","bottomRight":"15px"},"width":"1px"},"spacing":{"padding":{"left":"12px","right":"12px","top":"5px","bottom":"5px"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"borderColor":"heading"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-color has-text-color has-background has-link-color has-border-color has-heading-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;background-color:#00000000;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px;font-size:14px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e('select options','grocerymart'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"product-btn-rightbox"} -->
<div class="wp-block-column is-vertically-aligned-center product-btn-rightbox" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#ff2b2b"},"spacing":{"padding":{"left":"10px","right":"10px","top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" href="#" style="background-color:#ff2b2b;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><img class="wp-image-145" style="width: 60px;" src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/heart.png' )); ?>" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-box wow zoomIn","style":{"border":{"color":"#aaa4a4","width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}}} -->
<div class="wp-block-column product-box wow zoomIn has-border-color" style="border-color:#aaa4a4;border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"backgroundColor":"product-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-product-bg-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;padding-top:25px;padding-right:10px;padding-bottom:25px;padding-left:10px"><!-- wp:image {"id":170,"width":"auto","height":"160px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-img","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-img" style="margin-top:0px;margin-bottom:0px"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/product3.png' )); ?>" alt="" class="wp-image-170" style="width:auto;height:160px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","className":"product-rating","style":{"color":{"background":"#fcaa07"},"border":{"radius":{"topLeft":"13px","topRight":"13px","bottomLeft":"13px","bottomRight":"13px"}},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"12px","right":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"14px"}},"textColor":"background"} -->
<p class="has-text-align-center product-rating has-background-color has-text-color has-background has-link-color" style="border-top-left-radius:13px;border-top-right-radius:13px;border-bottom-left-radius:13px;border-bottom-right-radius:13px;background-color:#fcaa07;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px;font-size:14px"><i class="fa-solid fa-star"></i><?php esc_html_e('4.9','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:16px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"textTransform":"capitalize","fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"8px"}}},"textColor":"heading"} -->
<h3 class="wp-block-heading has-heading-color has-text-color has-link-color" style="margin-bottom:8px;font-size:20px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e('organic whole milk','grocerymart'); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"8px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:8px"><!-- wp:paragraph {"style":{"color":{"text":"#2e2e2e"},"elements":{"link":{"color":{"text":"#2e2e2e"}}},"typography":{"fontSize":"16px"}}} -->
<p class="has-text-color has-link-color" style="color:#2e2e2e;font-size:16px"><?php esc_html_e('$14.99','grocerymart'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#2e2e2e"},"elements":{"link":{"color":{"text":"#2e2e2e"}}},"typography":{"fontSize":"12px","textDecoration":"line-through"}}} -->
<p class="has-text-color has-link-color" style="color:#2e2e2e;font-size:12px;text-decoration:line-through"><?php esc_html_e('$16.99','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-variation","style":{"spacing":{"blockGap":"8px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group product-variation" style="margin-top:12px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"15px"}},"textColor":"heading"} -->
<p class="has-heading-color has-text-color has-link-color" style="font-size:15px"><?php esc_html_e('Weight','grocerymart'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","lineHeight":"1.1"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"width":"1px","color":"#2E2E2E","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"color":{"background":"#f1f1f1"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"15px","right":"15px"}}},"textColor":"heading"} -->
<p class="has-border-color has-heading-color has-text-color has-background has-link-color" style="border-color:#2E2E2E;border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;background-color:#f1f1f1;padding-top:6px;padding-right:15px;padding-bottom:6px;padding-left:15px;font-size:13px;line-height:1.1"><?php esc_html_e('200gm, 300gm, 400gm','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","className":"product-btn-box","style":{"spacing":{"blockGap":{"top":"8px","left":"8px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center product-btn-box"><!-- wp:column {"verticalAlignment":"center","width":"80%","className":"product-btn-leftbox"} -->
<div class="wp-block-column is-vertically-aligned-center product-btn-leftbox" style="flex-basis:80%"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"color":{"background":"#00000000"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"15px","bottomRight":"15px"},"width":"1px"},"spacing":{"padding":{"left":"12px","right":"12px","top":"5px","bottom":"5px"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"borderColor":"heading"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-color has-text-color has-background has-link-color has-border-color has-heading-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;background-color:#00000000;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px;font-size:14px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e('select options','grocerymart'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"product-btn-rightbox"} -->
<div class="wp-block-column is-vertically-aligned-center product-btn-rightbox" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#ff2b2b"},"spacing":{"padding":{"left":"10px","right":"10px","top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" href="#" style="background-color:#ff2b2b;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><img class="wp-image-145" style="width: 60px;" src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/heart.png' )); ?>" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-box wow zoomIn","style":{"border":{"color":"#aaa4a4","width":"1px","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}}} -->
<div class="wp-block-column product-box wow zoomIn has-border-color" style="border-color:#aaa4a4;border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}}},"backgroundColor":"product-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-product-bg-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;padding-top:25px;padding-right:10px;padding-bottom:25px;padding-left:10px"><!-- wp:image {"id":171,"width":"auto","height":"160px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-img","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-img" style="margin-top:0px;margin-bottom:0px"><img src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/product4.png' )); ?>" alt="" class="wp-image-171" style="width:auto;height:160px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","className":"product-rating","style":{"color":{"background":"#fcaa07"},"border":{"radius":{"topLeft":"13px","topRight":"13px","bottomLeft":"13px","bottomRight":"13px"}},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"12px","right":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"14px"}},"textColor":"background"} -->
<p class="has-text-align-center product-rating has-background-color has-text-color has-background has-link-color" style="border-top-left-radius:13px;border-top-right-radius:13px;border-bottom-left-radius:13px;border-bottom-right-radius:13px;background-color:#fcaa07;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px;font-size:14px"><i class="fa-solid fa-star"></i><?php esc_html_e('4.9','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:16px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"textTransform":"capitalize","fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"8px"}}},"textColor":"heading"} -->
<h3 class="wp-block-heading has-heading-color has-text-color has-link-color" style="margin-bottom:8px;font-size:20px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e('organic whole milk','grocerymart'); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"8px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:8px"><!-- wp:paragraph {"style":{"color":{"text":"#2e2e2e"},"elements":{"link":{"color":{"text":"#2e2e2e"}}},"typography":{"fontSize":"16px"}}} -->
<p class="has-text-color has-link-color" style="color:#2e2e2e;font-size:16px"><?php esc_html_e('$14.99','grocerymart'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#2e2e2e"},"elements":{"link":{"color":{"text":"#2e2e2e"}}},"typography":{"fontSize":"12px","textDecoration":"line-through"}}} -->
<p class="has-text-color has-link-color" style="color:#2e2e2e;font-size:12px;text-decoration:line-through"><?php esc_html_e('$16.99','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-variation","style":{"spacing":{"blockGap":"8px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group product-variation" style="margin-top:12px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"15px"}},"textColor":"heading"} -->
<p class="has-heading-color has-text-color has-link-color" style="font-size:15px"><?php esc_html_e('Weight','grocerymart'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","lineHeight":"1.1"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"width":"1px","color":"#2E2E2E","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"color":{"background":"#f1f1f1"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"15px","right":"15px"}}},"textColor":"heading"} -->
<p class="has-border-color has-heading-color has-text-color has-background has-link-color" style="border-color:#2E2E2E;border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;background-color:#f1f1f1;padding-top:6px;padding-right:15px;padding-bottom:6px;padding-left:15px;font-size:13px;line-height:1.1"><?php esc_html_e('200gm, 300gm, 400gm','grocerymart'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","className":"product-btn-box","style":{"spacing":{"blockGap":{"top":"8px","left":"8px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center product-btn-box"><!-- wp:column {"verticalAlignment":"center","width":"80%","className":"product-btn-leftbox"} -->
<div class="wp-block-column is-vertically-aligned-center product-btn-leftbox" style="flex-basis:80%"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"color":{"background":"#00000000"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"15px","bottomRight":"15px"},"width":"1px"},"spacing":{"padding":{"left":"12px","right":"12px","top":"5px","bottom":"5px"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"borderColor":"heading"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-color has-text-color has-background has-link-color has-border-color has-heading-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;background-color:#00000000;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px;font-size:14px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e('select options','grocerymart'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"product-btn-rightbox"} -->
<div class="wp-block-column is-vertically-aligned-center product-btn-rightbox" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#ff2b2b"},"spacing":{"padding":{"left":"10px","right":"10px","top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" href="#" style="background-color:#ff2b2b;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><img class="wp-image-145" style="width: 60px;" src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/heart.png' )); ?>" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<?php } ?>