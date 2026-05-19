<?php
 /**
  * Title: Main Header
  * Slug: grocerymart/main-header
  */
?>

<!-- wp:group {"className":"header-wrap","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"gradient":"header-overlay","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-wrap has-header-overlay-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:0px;padding-bottom:var(--wp--preset--spacing--30);padding-left:0px"><!-- wp:columns {"verticalAlignment":"center","className":"header-boxes","style":{"spacing":{"blockGap":{"top":"15px","left":"15px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center header-boxes"><!-- wp:column {"verticalAlignment":"center","width":"25%","className":"logo-box"} -->
<div class="wp-block-column is-vertically-aligned-center logo-box" style="flex-basis:25%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontFamily":"roboto"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"nav-box"} -->
<div class="wp-block-column is-vertically-aligned-center nav-box" style="flex-basis:50%"><!-- wp:navigation {"textColor":"white","overlayBackgroundColor":"background","overlayTextColor":"foreground","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"22px"}},"layout":{"type":"flex","justifyContent":"center"}} --><!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Buy Now","type":"","url":"https://www.cretathemes.com/products/grocery-wordpress-theme","kind":"custom","isTopLevelLink":true, "opensInNewTab":true} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"btn-box"} -->
<div class="wp-block-column is-vertically-aligned-center btn-box" style="flex-basis:25%"><!-- wp:group {"className":"header-right","style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group header-right"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"query":{"post_type":"product"},"isSearchFieldHidden":true,"className":"header-search","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"background","textColor":"primary","namespace":"woocommerce/product-search"} /-->

<!-- wp:buttons {"className":"header-wishlist","style":{"typography":{"fontSize":"14px"}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons has-custom-font-size header-wishlist" style="font-size:14px"><!-- wp:button {"backgroundColor":"background","style":{"spacing":{"padding":{"left":"10px","right":"10px","top":"10px","bottom":"10px"}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"35px","bottomRight":"35px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-background-color has-background has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:35px;border-bottom-right-radius:35px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;font-size:16px;font-style:normal;font-weight:600"><img class="wp-image-21" style="width: 50px;" src="<?php echo esc_url(get_parent_theme_file_uri( '/assets/images/heart1.png' )); ?>" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:woocommerce/cart-link {"cartIcon":"bag-alt","content":"","className":"header-cart","backgroundColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconClass":"wc-block-customer-account__account-icon","className":"header-account","backgroundColor":"background","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->