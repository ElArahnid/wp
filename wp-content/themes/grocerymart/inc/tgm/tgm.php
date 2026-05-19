<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function grocerymart_register_recommended_plugins() {
	$plugins = array(
		array(
		'name'             => __( 'Creta Testimonial Showcase', 'grocerymart' ),
		'slug'             => 'creta-testimonial-showcase',
		'source'           => '',
		'required'         => false,
		'force_activation' => false,
		),
		array(
			'name'             => __( 'WooCommerce', 'grocerymart' ),
			'slug'             => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'YITH WooCommerce Wishlist', 'grocerymart' ),
			'slug'             => 'yith-woocommerce-wishlist',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'grocerymart_register_recommended_plugins' );

//Creta Testimonial Showcase plugin activation
add_action('wp_ajax_install_and_activate_required_plugins', 'install_and_activate_required_plugins');

function install_and_activate_required_plugins() {

    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'install_activate_nonce')) {
        wp_send_json_error(['message' => 'Nonce verification failed.']);
    }

    if (!current_user_can('install_plugins')) {
        wp_send_json_error(['message' => 'Permission denied.']);
    }

    include_once ABSPATH . 'wp-admin/includes/plugin.php';
    include_once ABSPATH . 'wp-admin/includes/file.php';
    include_once ABSPATH . 'wp-admin/includes/misc.php';
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

    $upgrader = new Plugin_Upgrader(new Automatic_Upgrader_Skin());

    $plugins = [
        [
            'slug' => 'creta-testimonial-showcase',
            'file' => 'creta-testimonial-showcase/creta-testimonial-showcase.php',
            'url'  => 'https://downloads.wordpress.org/plugin/creta-testimonial-showcase.latest-stable.zip',
        ],
        [
            'slug' => 'woocommerce',
            'file' => 'woocommerce/woocommerce.php',
            'url'  => 'https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip',
        ],
        [
            'slug' => 'yith-woocommerce-wishlist',
            'file' => 'yith-woocommerce-wishlist/init.php',
            'url'  => 'https://downloads.wordpress.org/plugin/yith-woocommerce-wishlist.latest-stable.zip',
        ]
    ];

    $installed_plugins = get_plugins();

    foreach ($plugins as $plugin) {

        // Install if not installed
        if (!isset($installed_plugins[$plugin['file']])) {

            $install_result = $upgrader->install($plugin['url']);

            if (is_wp_error($install_result)) {
                wp_send_json_error(['message' => "Failed to install {$plugin['slug']}"]);
            }
        }

        // Activate if not active
        if (!is_plugin_active($plugin['file'])) {

            $activate_result = activate_plugin($plugin['file']);

            if (is_wp_error($activate_result)) {
                wp_send_json_error([
                    'message' => "Failed to activate {$plugin['slug']}",
                    'error'   => $activate_result->get_error_message(),
                ]);
            }
        }
    }

    wp_send_json_success(['message' => 'All plugins installed and activated successfully.']);
}