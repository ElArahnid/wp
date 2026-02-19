<?php 
if (isset($_GET['import-demo']) && $_GET['import-demo'] == true) {


    function fitness_exercise_hub_import_demo_content() {
        
        // Display the preloader only for plugin installation
        echo '<div id="plugin-loader" style="display: flex; align-items: center; justify-content: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255, 255, 255, 0.8); z-index: 9999;">
                <img src="' . esc_url(get_template_directory_uri()) . '/assets/images/loader.png" alt="Loading..." width="60" height="60" />
              </div>';

        // Define the plugins you want to install and activate
        $plugins = array(
            array(
                'slug' => 'advanced-appointment-booking-scheduling',
                'file' => 'advanced-appointment-booking-scheduling/advanced-appointment-booking.php',
                'url'  => 'https://downloads.wordpress.org/plugin/advanced-appointment-booking-scheduling.zip'
            ),
        );

        // Include required files for plugin installation
        include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
        include_once(ABSPATH . 'wp-admin/includes/file.php');
        include_once(ABSPATH . 'wp-admin/includes/misc.php');
        include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

        // Loop through each plugin
        foreach ($plugins as $plugin) {
            $plugin_file = WP_PLUGIN_DIR . '/' . $plugin['file'];

            // Check if the plugin is installed
            if (!file_exists($plugin_file)) {
                // If the plugin is not installed, download and install it
                $upgrader = new Plugin_Upgrader();
                $result = $upgrader->install($plugin['url']);

                // Check for installation errors
                if (is_wp_error($result)) {
                    error_log('Plugin installation failed: ' . $plugin['slug'] . ' - ' . $result->get_error_message());
                    echo 'Error installing plugin: ' . esc_html($plugin['slug']) . ' - ' . esc_html($result->get_error_message());
                    continue;
                }
            }

            // If the plugin exists but is not active, activate it
            if (file_exists($plugin_file) && !is_plugin_active($plugin['file'])) {
                $result = activate_plugin($plugin['file']);

                // Check for activation errors
                if (is_wp_error($result)) {
                    error_log('Plugin activation failed: ' . $plugin['slug'] . ' - ' . $result->get_error_message());
                    echo 'Error activating plugin: ' . esc_html($plugin['slug']) . ' - ' . esc_html($result->get_error_message());
                }
            }
        }

        // Hide the preloader after the process is complete
        echo '<script type="text/javascript">
                document.getElementById("plugin-loader").style.display = "none";
              </script>';

    }

    // Call the import function
    fitness_exercise_hub_import_demo_content();

    // ------- Create Nav Menu --------
$fitness_exercise_hub_menuname = 'Main Menus';
$fitness_exercise_hub_bpmenulocation = 'primary-menu';
$fitness_exercise_hub_menu_exists = wp_get_nav_menu_object($fitness_exercise_hub_menuname);

if (!$fitness_exercise_hub_menu_exists) {
    $fitness_exercise_hub_menu_id = wp_create_nav_menu($fitness_exercise_hub_menuname);

    // Create Home Page
    $fitness_exercise_hub_home_title = 'Home';
    $fitness_exercise_hub_home = array(
        'post_type' => 'page',
        'post_title' => $fitness_exercise_hub_home_title,
        'post_content' => '',
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'home'
    );
    $fitness_exercise_hub_home_id = wp_insert_post($fitness_exercise_hub_home);

    // Assign Home Page Template
    add_post_meta($fitness_exercise_hub_home_id, '_wp_page_template', 'page-template/front-page.php');

    // Update options to set Home Page as the front page
    update_option('page_on_front', $fitness_exercise_hub_home_id);
    update_option('show_on_front', 'page');

    // Add Home Page to Menu
    wp_update_nav_menu_item($fitness_exercise_hub_menu_id, 0, array(
        'menu-item-title' => __('Home', 'fitness-exercise-hub'),
        'menu-item-classes' => 'home',
        'menu-item-url' => home_url('/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $fitness_exercise_hub_home_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create About Us Page with Dummy Content
    $fitness_exercise_hub_about_title = 'About Us';
    $fitness_exercise_hub_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $fitness_exercise_hub_about = array(
        'post_type' => 'page',
        'post_title' => $fitness_exercise_hub_about_title,
        'post_content' => $fitness_exercise_hub_about_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'about-us'
    );
    $fitness_exercise_hub_about_id = wp_insert_post($fitness_exercise_hub_about);

    // Add About Us Page to Menu
    wp_update_nav_menu_item($fitness_exercise_hub_menu_id, 0, array(
        'menu-item-title' => __('About Us', 'fitness-exercise-hub'),
        'menu-item-classes' => 'about-us',
        'menu-item-url' => home_url('/about-us/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $fitness_exercise_hub_about_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Services Page with Dummy Content
    $fitness_exercise_hub_services_title = 'Services';
    $fitness_exercise_hub_services_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $fitness_exercise_hub_services = array(
        'post_type' => 'page',
        'post_title' => $fitness_exercise_hub_services_title,
        'post_content' => $fitness_exercise_hub_services_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'services'
    );
    $fitness_exercise_hub_services_id = wp_insert_post($fitness_exercise_hub_services);

    // Add Services Page to Menu
    wp_update_nav_menu_item($fitness_exercise_hub_menu_id, 0, array(
        'menu-item-title' => __('Services', 'fitness-exercise-hub'),
        'menu-item-classes' => 'services',
        'menu-item-url' => home_url('/services/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $fitness_exercise_hub_services_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Pages Page with Dummy Content
    $fitness_exercise_hub_pages_title = 'Pages';
    $fitness_exercise_hub_pages_content = '<h2>Our Pages</h2>
    <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>';
    $fitness_exercise_hub_pages = array(
        'post_type' => 'page',
        'post_title' => $fitness_exercise_hub_pages_title,
        'post_content' => $fitness_exercise_hub_pages_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'pages'
    );
    $fitness_exercise_hub_pages_id = wp_insert_post($fitness_exercise_hub_pages);

    // Add Pages Page to Menu
    wp_update_nav_menu_item($fitness_exercise_hub_menu_id, 0, array(
        'menu-item-title' => __('Pages', 'fitness-exercise-hub'),
        'menu-item-classes' => 'pages',
        'menu-item-url' => home_url('/pages/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $fitness_exercise_hub_pages_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Contact Page with Dummy Content
    $fitness_exercise_hub_contact_title = 'Contact';
    $fitness_exercise_hub_contact_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $fitness_exercise_hub_contact = array(
        'post_type' => 'page',
        'post_title' => $fitness_exercise_hub_contact_title,
        'post_content' => $fitness_exercise_hub_contact_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'contact'
    );
    $fitness_exercise_hub_contact_id = wp_insert_post($fitness_exercise_hub_contact);

    // Add Contact Page to Menu
    wp_update_nav_menu_item($fitness_exercise_hub_menu_id, 0, array(
        'menu-item-title' => __('Contact', 'fitness-exercise-hub'),
        'menu-item-classes' => 'contact',
        'menu-item-url' => home_url('/contact/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $fitness_exercise_hub_contact_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Set the menu location if it's not already set
    if (!has_nav_menu($fitness_exercise_hub_bpmenulocation)) {
        $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
        if (empty($locations)) {
            $locations = array();
        }
        $locations[$fitness_exercise_hub_bpmenulocation] = $fitness_exercise_hub_menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

        //---Header--//

        set_theme_mod('fitness_exercise_hub_header_fb_new_tab', true);
        set_theme_mod('fitness_exercise_hub_facebook_url', '#');
        set_theme_mod('fitness_exercise_hub_facebook_icon', 'fab fa-facebook-f');

        set_theme_mod('fitness_exercise_hub_header_twt_new_tab', true);
        set_theme_mod('fitness_exercise_hub_twitter_url', '#');
        set_theme_mod('fitness_exercise_hub_twitter_icon', 'fab fa-twitter');

        set_theme_mod('fitness_exercise_hub_header_ins_new_tab', true);
        set_theme_mod('fitness_exercise_hub_instagram_url', '#');
        set_theme_mod('fitness_exercise_hub_instagram_icon', 'fab fa-instagram');

        set_theme_mod('fitness_exercise_hub_header_ut_new_tab', true);
        set_theme_mod('fitness_exercise_hub_youtube_url', '#');
        set_theme_mod('fitness_exercise_hub_youtube_icon', 'fab fa-youtube');

        set_theme_mod('fitness_exercise_hub_header_pint_new_tab', true);
        set_theme_mod('fitness_exercise_hub_pint_url', '#');
        set_theme_mod('fitness_exercise_hub_pint_icon', 'fab fa-pinterest');

        // Slider Section
        set_theme_mod('fitness_exercise_hub_slider_arrows', true);
        set_theme_mod('fitness_exercise_hub_slider_top', 'Grow Your Strength');

        for ($i = 1; $i <= 3; $i++) {
            $fitness_exercise_hub_title = 'You Only Fail When You Stop Trying';
            $fitness_exercise_hub_content = 'Ready to change your physique, but cant work out in the gym?';

            // Create post object
            $my_post = array(
                'post_title'    => wp_strip_all_tags($fitness_exercise_hub_title),
                'post_content'  => $fitness_exercise_hub_content,
                'post_status'   => 'publish',
                'post_type'     => 'page',
            );

            /// Insert the post into the database
            $post_id = wp_insert_post($my_post);

            if ($post_id) {
                // Set the theme mod for the slider page
                set_theme_mod('fitness_exercise_hub_slider_page' . $i, $post_id);

                $image_url = get_template_directory_uri() . '/assets/images/slider-img.png';
                $image_id = media_sideload_image($image_url, $post_id, null, 'id');

                if (!is_wp_error($image_id)) {
                    // Set the downloaded image as the post's featured image
                    set_post_thumbnail($post_id, $image_id);
                }
            }
        }

        // featur Section
        set_theme_mod('fitness_exercise_hub_schedule_icon1', 'fas fa-walking');
        set_theme_mod('fitness_exercise_hub_schedule_icon2', 'fas fa-calendar-alt');
        set_theme_mod('fitness_exercise_hub_schedule_icon3', 'fas fa-bicycle');

        set_theme_mod('fitness_exercise_hub_schedule_title1', 'Personal Trainer');
        set_theme_mod('fitness_exercise_hub_schedule_title2', 'Men Working Time');
        set_theme_mod('fitness_exercise_hub_schedule_title3', 'Cardio Program');

        set_theme_mod('fitness_exercise_hub_schedule_text1', 'Psum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.');
        set_theme_mod('fitness_exercise_hub_schedule_text2', 'Psum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.');
        set_theme_mod('fitness_exercise_hub_schedule_text3', 'Psum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.');


        // Set section mods
        set_theme_mod('fitness_exercise_hub_services_heading', 'Our Top Services');
        set_theme_mod('fitness_exercise_hub_services_heading_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod and the part tempor incididunt ut labore et dolore magna.');
        set_theme_mod('fitness_exercise_hub_services_section_category', 'postcategory1');

        // Define categories and titles
        $fitness_exercise_hub_category_names = array('postcategory1');
        $fitness_exercise_hub_title_array = array(
            'postcategory1' => array(
                "Festivals",
                "Private Parties",
                "Skipping Rope",
            ),
        );

        $fitness_exercise_hub_content = 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s';

        // Loop through each category
        foreach ($fitness_exercise_hub_category_names as $category_name) {
            // Create or get the category term
            $term = term_exists($category_name, 'category');
            if (!$term) {
                $term = wp_insert_term($category_name, 'category');
                if (is_wp_error($term)) {
                    error_log('Error creating category "' . $category_name . '": ' . $term->get_error_message());
                    continue;
                }
            }

            $term_id = is_array($term) ? $term['term_id'] : $term;

            // Create posts under this category
            if (!empty($fitness_exercise_hub_title_array[$category_name])) {
                foreach ($fitness_exercise_hub_title_array[$category_name] as $title) {
                    $post_id = wp_insert_post(array(
                        'post_title'   => wp_strip_all_tags($title),
                        'post_content' => $fitness_exercise_hub_content,
                        'post_status'  => 'publish',
                        'post_type'    => 'post',
                    ));

                    if (is_wp_error($post_id)) {
                        error_log('Error creating post "' . $title . '": ' . $post_id->get_error_message());
                        continue;
                    }

                    wp_set_post_categories($post_id, array((int)$term_id));
                }
            }
        }


    }
?>