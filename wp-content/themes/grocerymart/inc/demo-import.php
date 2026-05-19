<?php
add_action( 'wp_ajax_grocerymart_run_demo_import', 'grocerymart_run_demo_import' );

if ( ! function_exists( 'grocerymart_run_demo_import' ) ) {

function grocerymart_run_demo_import() {

    check_ajax_referer( 'grocerymart_demo_nonce', 'nonce' );

    if ( ! current_user_can( 'manage_options' ) ) {
        wp_send_json_error( 'Permission denied' );
    }

    if ( get_option( 'grocerymart_demo_import_completed' ) ) {
        wp_send_json_success( 'Demo already imported' );
    }

    // WooCommerce check
    if ( ! class_exists( 'WooCommerce' ) ) {
        wp_send_json_error( 'WooCommerce is not active' );
    }

    // Custom function prefix check
    if ( function_exists( 'grocerymart_set_woocommerce_uncropped_images' ) ) {
        grocerymart_set_woocommerce_uncropped_images();
    }

    // Plugin activation
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

    if ( ! is_plugin_active( 'yith-woocommerce-wishlist/init.php' ) ) {
        activate_plugin( 'yith-woocommerce-wishlist/init.php' );
    }

    // Create Wishlist Page
    $wishlist_page = get_page_by_path( 'wishlist' );

    if ( ! $wishlist_page ) {

        $grocerymart_page_id = wp_insert_post( array(
            'post_title'   => 'Wishlist',
            'post_name'    => 'wishlist',
            'post_content' => '[yith_wcwl_wishlist]',
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ) );

        update_option( 'yith_wcwl_wishlist_page_id', $grocerymart_page_id );
    }

    // Disable share icons
    update_option( 'yith_wcwl_share_fb', 'no' );
    update_option( 'yith_wcwl_share_twitter', 'no' );
    update_option( 'yith_wcwl_share_pinterest', 'no' );
    update_option( 'yith_wcwl_share_email', 'no' );
    update_option( 'yith_wcwl_share_whatsapp', 'no' );

    // Products Data
    $grocerymart_products = array(
        array(
            'title' => 'Fresh Red Apples',
            'regular_price' => '14.99',
            'sale_price'    => '16.99',
            'image' => get_stylesheet_directory() . '/assets/images/product1.png',
            'short_description' => 'Pure aloe vera gel for natural skin hydration.',
            'description' => 'Enjoy the natural sweetness of freshly picked red apples, rich in fiber and essential nutrients.'
        ),
        array(
            'title' => 'Organic Cauliflower',
            'regular_price' => '14.99',
            'sale_price'    => '16.99',
            'image' => get_stylesheet_directory() . '/assets/images/product2.png',
            'short_description' => 'Nourishing oil for stronger hair.',
            'description' => 'Naturally grown organic cauliflower, packed with vitamins and minerals.'
        ),
        array(
            'title' => 'Farm Fresh Eggs',
            'regular_price' => '14.99',
            'sale_price'    => '16.99',
            'image' => get_stylesheet_directory() . '/assets/images/product3.png',
            'short_description' => 'Premium organic turmeric.',
            'description' => 'Protein-rich farm fresh eggs sourced from healthy hens.'
        ),
        array(
            'title' => 'Organic Whole Milk',
            'regular_price' => '14.99',
            'sale_price'    => '16.99',
            'image' => get_stylesheet_directory() . '/assets/images/product4.png',
            'short_description' => 'Natural face pack for glowing skin.',
            'description' => 'Fresh organic whole milk with rich taste and essential nutrients.'
        )
    );

    foreach ( $grocerymart_products as $grocerymart_product ) {

        if ( get_page_by_title( $grocerymart_product['title'], OBJECT, 'product' ) ) {
            continue;
        }

        $grocerymart_product_id = wp_insert_post( array(
            'post_title'   => $grocerymart_product['title'],
            'post_content' => $grocerymart_product['description'],
            'post_excerpt' => $grocerymart_product['short_description'],
            'post_status'  => 'publish',
            'post_type'    => 'product',
        ) );

        if ( is_wp_error( $grocerymart_product_id ) ) {
            continue;
        }

        wp_set_object_terms( $grocerymart_product_id, 'variable', 'product_type' );

        update_post_meta( $grocerymart_product_id, '_regular_price', $grocerymart_product['regular_price'] );
        update_post_meta( $grocerymart_product_id, '_sale_price', $grocerymart_product['sale_price'] );
        update_post_meta( $grocerymart_product_id, '_price', $grocerymart_product['sale_price'] );

        $grocerymart_product_obj = new WC_Product_Variable( $grocerymart_product_id );

        // Attribute
        $grocerymart_attribute = new WC_Product_Attribute();
        $grocerymart_attribute->set_name( 'Weight' );
        $grocerymart_attribute->set_options( array( '200gm', '300gm', '400gm' ) );
        $grocerymart_attribute->set_visible( false );
        $grocerymart_attribute->set_variation( true );

        $grocerymart_product_obj->set_attributes( array( $grocerymart_attribute ) );
        $grocerymart_product_obj->save();

        // Variations
        $grocerymart_variations = array(
            array( '200gm', '14.99' ),
            array( '300gm', '18.99' ),
            array( '400gm', '22.99' ),
        );

        foreach ( $grocerymart_variations as $grocerymart_var ) {

            $grocerymart_variation = new WC_Product_Variation();
            $grocerymart_variation->set_parent_id( $grocerymart_product_id );

            $grocerymart_variation->set_attributes( array(
                'weight' => $grocerymart_var[0]
            ) );

            $grocerymart_variation->set_regular_price( $grocerymart_var[1] );
            $grocerymart_variation->set_price( $grocerymart_var[1] );
            $grocerymart_variation->save();
        }

        // Featured Image
        if ( ! empty( $grocerymart_product['image'] ) && file_exists( $grocerymart_product['image'] ) ) {

            require_once ABSPATH . 'wp-admin/includes/file.php';
            require_once ABSPATH . 'wp-admin/includes/media.php';
            require_once ABSPATH . 'wp-admin/includes/image.php';

            $grocerymart_tmp = wp_tempnam( $grocerymart_product['image'] );

            if ( $grocerymart_tmp ) {

                copy( $grocerymart_product['image'], $grocerymart_tmp );

                $grocerymart_file_array = array(
                    'name'     => basename( $grocerymart_product['image'] ),
                    'tmp_name' => $grocerymart_tmp,
                );

                $grocerymart_attachment_id = media_handle_sideload( $grocerymart_file_array, $grocerymart_product_id );

                if ( ! is_wp_error( $grocerymart_attachment_id ) ) {
                    set_post_thumbnail( $grocerymart_product_id, $grocerymart_attachment_id );
                } else {
                    @unlink( $grocerymart_tmp );
                }
            }
        }
    }

    update_option( 'grocerymart_demo_import_completed', true );

    wp_send_json_success( 'Demo imported successfully' );
}
}