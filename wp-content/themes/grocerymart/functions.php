<?php
/**
 * Grocerymart functions and definitions
 *
 * @package grocerymart
 * @since 1.0
 */

if ( ! function_exists( 'grocerymart_support' ) ) :
	function grocerymart_support() {

		load_theme_textdomain( 'grocerymart', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support('woocommerce');

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

		/* Theme Credit link */
		define('GROCERYMART_BUY_NOW',__('https://www.cretathemes.com/products/grocery-wordpress-theme','grocerymart'));
		define('GROCERYMART_PRO_DEMO',__('https://pattern.cretathemes.com/grocerymart-pro/','grocerymart'));
		define('GROCERYMART_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/grocerymart/','grocerymart'));
		define('GROCERYMART_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/grocerymart-pro/','grocerymart'));
		define('GROCERYMART_SUPPORT',__('https://wordpress.org/support/theme/grocerymart/','grocerymart'));
		define('GROCERYMART_REVIEW',__('https://wordpress.org/support/theme/grocerymart/reviews/#new-post','grocerymart'));
		define('GROCERYMART_PRO_THEME_BUNDLE',__('https://www.cretathemes.com/products/wordpress-theme-bundle','grocerymart'));
		define('GROCERYMART_PRO_ALL_THEMES',__('https://www.cretathemes.com/collections/wordpress-block-themes','grocerymart'));

	}

endif;

add_action( 'after_setup_theme', 'grocerymart_support' );

/* Keep WooCommerce catalog thumbnails uncropped so full product images are visible.*/
function grocerymart_set_woocommerce_uncropped_images() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	update_option( 'woocommerce_thumbnail_cropping', 'uncropped' );
}
add_action( 'after_switch_theme', 'grocerymart_set_woocommerce_uncropped_images' );

add_filter(
	'woocommerce_get_image_size_thumbnail',
	function( $size ) {
		$size['crop'] = 0;
		return $size;
	}
);


if ( ! function_exists( 'grocerymart_styles' ) ) :
	function grocerymart_styles() {
		// Register theme stylesheet.
		$grocerymart_theme_version = wp_get_theme()->get( 'Version' );

		$grocerymart_version_string = is_string( $grocerymart_theme_version ) ? $grocerymart_theme_version : false;
		wp_enqueue_style(
			'grocerymart-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$grocerymart_version_string
		);

		wp_enqueue_style( 'dashicons' );

		wp_enqueue_style( 'animate-css', esc_url(get_template_directory_uri()).'/assets/css/animate.css' );

		wp_enqueue_script( 'jquery-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', array('jquery') );

		wp_style_add_data( 'grocerymart-style', 'rtl', 'replace' );

		//font-awesome
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/inc/fontawesome/css/all.css'
			, array(), '7.0.0' );

		wp_enqueue_style(
			'owl-style',
			get_template_directory_uri() . '/assets/css/owl.carousel.css',
			array(),
			'2.2.1'
		);

		wp_enqueue_script(
			'owl-script',
			get_template_directory_uri() . '/assets/js/owl.carousel.js',
			array('jquery'),
			'2.3.0',
			true
		);

		// Enqueue Custom Script
		wp_enqueue_script(
		    'grocerymart-custom-script',
		    get_template_directory_uri() . '/assets/js/custom-script.js',
		    array('jquery'),
		    $grocerymart_version_string,
		    true
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'grocerymart_styles' );

/* Enqueue admin-notice-script js */
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'appearance_page_grocerymart') return;

    wp_enqueue_script('admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', ['jquery'], null, true);
    wp_localize_script('admin-notice-script', 'pluginInstallerData', [
        'ajaxurl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('install_cretatestimonial_nonce'), // Match this with PHP nonce check
        'redirectUrl' => admin_url('themes.php?page=grocerymart-guide-page'),
    ]);
});

add_action('wp_ajax_check_creta_testimonial_activation', function () {
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
    $grocerymart_plugin_file = 'creta-testimonial-showcase/creta-testimonial-showcase.php';

    if (is_plugin_active($grocerymart_plugin_file)) {
        wp_send_json_success(['active' => true]);
    } else {
        wp_send_json_success(['active' => false]);
    }
});


// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// TGM
require_once get_template_directory() . '/inc/tgm/tgm.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// Demo import
require get_template_directory() . '/inc/demo-import.php';

// Force YITH Wishlist icon to show on WooCommerce product blocks
add_filter( 'render_block', function( $grocerymart_content, $grocerymart_block ) {
  if ( isset( $grocerymart_block['blockName'] ) && $grocerymart_block['blockName'] === 'woocommerce/product-button' ) {
    if ( function_exists( 'YITH_WCWL' ) ) {
      $grocerymart_wishlist_button = do_shortcode('[yith_wcwl_add_to_wishlist]');
      $grocerymart_content .= '<div class="yith-wishlist-block-overlay">' . $grocerymart_wishlist_button . '</div>';
    }
  }
  return $grocerymart_content;
}, 10, 2 );


// Add Getstart admin notice
function grocerymart_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'grocerymart_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_grocerymart-guide-page' && $current_screen->base != 'toplevel_page_cretats-theme-showcase' ) { ?>

	    <div class="notice notice-success dash-notice">
	        <h1><?php esc_html_e('Hey, Thank you for installing Grocerymart Theme!', 'grocerymart'); ?></h1>
	        <p> <a href="javascript:void(0);" id="install-activate-button" class="button admin-button info-button get-start-btn">
				   <?php echo __('Navigate Getstart', 'grocerymart'); ?>
				</a>

			<script type="text/javascript">
				document.getElementById('install-activate-button').addEventListener('click', function () {

				const grocerymart_button = this;
				const grocerymart_redirectUrl = '<?php echo esc_url(admin_url("themes.php?page=grocerymart-guide-page")); ?>';

				grocerymart_button.textContent = 'Install & Activating...';

				// Step 1: Install & Activate Plugins
				jQuery.post(ajaxurl, {
					action: 'install_and_activate_required_plugins',
					nonce: '<?php echo wp_create_nonce("install_activate_nonce"); ?>'
				}, function (pluginResponse) {

					if (pluginResponse.success) {

				// Step 2: Run Demo Import
				jQuery.post(ajaxurl, {
					action: 'grocerymart_run_demo_import',
					nonce: '<?php echo wp_create_nonce("grocerymart_demo_nonce"); ?>'
				}, function (demoResponse) {

					if (demoResponse.success) {

						grocerymart_button.textContent = 'Demo Importing...';
						window.location.href = grocerymart_redirectUrl;

					} else {
						alert('Demo Import Failed');
						grocerymart_button.textContent = 'Try Again';
					}

				});

				} else {
					alert('Plugin Installation Failed');
					grocerymart_button.textContent = 'Try Again';
				}

				});

			});
			</script>

				<a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'grocerymart'); ?></a> 
				<a class="button button-primary buy-now-btn" href="<?php echo esc_url( GROCERYMART_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'grocerymart'); ?></a>
				<a class="button button-primary bundle-btn" href="<?php echo esc_url( GROCERYMART_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Bundle', 'grocerymart'); ?></a>
	        </p>
	        <p class="dismiss-link"><strong><a href="?grocerymart_admin_notice=1"><?php esc_html_e( 'Dismiss', 'grocerymart' ); ?></a></strong></p>
	    </div>
	    <?php

	}?>
	    <?php

	}
}

add_action( 'admin_notices', 'grocerymart_admin_notice' );


add_action('admin_bar_menu', 'your_plugin_adminbar_link', 100);
function your_plugin_adminbar_link($wp_admin_bar) {
    $wp_admin_bar->add_node([
        'id'    => 'yourplugin_upgrade',
        'title' => ' Upgrade to Pro',
        'href'  => 'https://www.cretathemes.com/products/grocery-wordpress-theme',
        'meta'  => array(
            'target' => '_blank',
        )
    ]);
}

if( ! function_exists( 'grocerymart_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function grocerymart_update_admin_notice(){
    if ( isset( $_GET['grocerymart_admin_notice'] ) && $_GET['grocerymart_admin_notice'] = '1' ) {
        update_option( 'grocerymart_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'grocerymart_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'grocerymart_getstart_setup_options');
function grocerymart_getstart_setup_options () {
    update_option('grocerymart_admin_notice', FALSE );
}

add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );