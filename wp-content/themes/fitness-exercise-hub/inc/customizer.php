<?php
/**
 * Fitness Exercise Hub: Customizer
 *
 * @package Fitness Exercise Hub
 * @subpackage fitness_exercise_hub
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fitness_exercise_hub_customize_register( $wp_customize ) {

	// Pro Version
    class fitness_exercise_hub_Customize_Pro_Version extends WP_Customize_Control {
        public $type = 'pro_options';

        public function render_content() {
            echo '<span>Unlock Premium <strong>'. esc_html( $this->label ) .'</strong>? </span>';
            echo '<a href="'. esc_url($this->description) .'" target="_blank">';
                echo '<span class="dashicons dashicons-info"></span>';
                echo '<strong> '. esc_html( FITNESS_EXERCISE_HUB_BUY_TEXT,'fitness-exercise-hub' ) .'<strong></a>';
            echo '</a>';
        }
    }

    // Custom Controls
    function fitness_exercise_hub_sanitize_custom_control( $input ) {
        return $input;
    }


	require get_parent_theme_file_path('/inc/controls/icon-changer.php');

	require get_parent_theme_file_path('/inc/controls/range-slider-control.php');

	// Register the custom control type.
	$wp_customize->register_control_type( 'Fitness_Exercise_Hub_Toggle_Control' );

	//Register the sortable control type.
	$wp_customize->register_control_type( 'Fitness_Exercise_Hub_Control_Sortable' );	

	//add home page setting pannel
	$wp_customize->add_panel( 'fitness_exercise_hub_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Custom Home page', 'fitness-exercise-hub' ),
	    'description' => __( 'Description of what this panel does.', 'fitness-exercise-hub' ),
	) );
	//TP Genral Position
	$wp_customize->add_section('fitness_exercise_hub_tp_general_settings',array(
        'title' => __('TP General Option', 'fitness-exercise-hub'),
        'priority' => 1,
        'panel' => 'fitness_exercise_hub_panel_id'
    ) );
 	$wp_customize->add_setting('fitness_exercise_hub_tp_body_layout_settings',array(
		'default' => 'Full',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
 	$wp_customize->add_control('fitness_exercise_hub_tp_body_layout_settings',array(
		'type' => 'radio',
		'label'     => __('Body Layout Setting', 'fitness-exercise-hub'),
		'description'   => __('This option work for complete body, if you want to set the complete website in container.', 'fitness-exercise-hub'),
		'section' => 'fitness_exercise_hub_tp_general_settings',
		'choices' => array(
		'Full' => __('Full','fitness-exercise-hub'),
		'Container' => __('Container','fitness-exercise-hub'),
		'Container Fluid' => __('Container Fluid','fitness-exercise-hub')
		),
	) );

    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('fitness_exercise_hub_sidebar_post_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
	$wp_customize->add_control('fitness_exercise_hub_sidebar_post_layout',array(
     'type' => 'radio',
     'label'     => __('Post Sidebar Position', 'fitness-exercise-hub'),
     'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'fitness-exercise-hub'),
     'section' => 'fitness_exercise_hub_tp_general_settings',
     'choices' => array(
         'full' => __('Full','fitness-exercise-hub'),
         'left' => __('Left','fitness-exercise-hub'),
         'right' => __('Right','fitness-exercise-hub'),
         'three-column' => __('Three Columns','fitness-exercise-hub'),
         'four-column' => __('Four Columns','fitness-exercise-hub'),
         'grid' => __('Grid Layout','fitness-exercise-hub')
     ),
	) );
	$wp_customize->add_setting('fitness_exercise_hub_sidebar_single_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
	$wp_customize->add_control('fitness_exercise_hub_sidebar_single_post_layout',array(
        'type' => 'radio',
        'label'     => __('Single Post Sidebar Position', 'fitness-exercise-hub'),
        'description'   => __('This option work for single blog page', 'fitness-exercise-hub'),
        'section' => 'fitness_exercise_hub_tp_general_settings',
        'choices' => array(
            'full' => __('Full','fitness-exercise-hub'),
            'left' => __('Left','fitness-exercise-hub'),
            'right' => __('Right','fitness-exercise-hub'),
        ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('fitness_exercise_hub_sidebar_page_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
	$wp_customize->add_control('fitness_exercise_hub_sidebar_page_layout',array(
     'type' => 'radio',
     'label'     => __('Page Sidebar Position', 'fitness-exercise-hub'),
     'description'   => __('This option work for pages.', 'fitness-exercise-hub'),
     'section' => 'fitness_exercise_hub_tp_general_settings',
     'choices' => array(
         'full' => __('Full','fitness-exercise-hub'),
         'left' => __('Left','fitness-exercise-hub'),
         'right' => __('Right','fitness-exercise-hub')
     ),
	) );
	$wp_customize->add_setting( 'fitness_exercise_hub_sticky', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_sticky', array(
		'label'       => esc_html__( 'Show / Hide Sticky Header', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_tp_general_settings',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_sticky',
	) ) );
	$wp_customize->add_setting( 'fitness_exercise_hub_search_icon', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_search_icon', array(
		'label'       => esc_html__( 'Show / Hide Search Option', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_tp_general_settings',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_search_icon',
	) ) );

	//tp typography option
	$fitness_exercise_hub_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One',
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower',
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit',
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two',
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda',
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli',
		'Marck Script'           => 'Marck Script',
		'Noto Serif'             => 'Noto Serif',
		'Open Sans'              => 'Open Sans',
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen',
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display',
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik',
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo',
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn',
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	$wp_customize->add_section('fitness_exercise_hub_typography_option',array(
		'title'         => __('TP Typography Option', 'fitness-exercise-hub'),
		'priority' => 1,
		'panel' => 'fitness_exercise_hub_panel_id'
   	));

   	$wp_customize->add_setting('fitness_exercise_hub_heading_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices',
	));
	$wp_customize->add_control(	'fitness_exercise_hub_heading_font_family', array(
		'section' => 'fitness_exercise_hub_typography_option',
		'label'   => __('heading Fonts', 'fitness-exercise-hub'),
		'type'    => 'select',
		'choices' => $fitness_exercise_hub_font_array,
	));

	$wp_customize->add_setting('fitness_exercise_hub_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices',
	));
	$wp_customize->add_control(	'fitness_exercise_hub_body_font_family', array(
		'section' => 'fitness_exercise_hub_typography_option',
		'label'   => __('Body Fonts', 'fitness-exercise-hub'),
		'type'    => 'select',
		'choices' => $fitness_exercise_hub_font_array,
	));

	//TP Preloader Option
	$wp_customize->add_section('fitness_exercise_hub_prelaoder_option',array(
		'title'         => __('TP Preloader Option', 'fitness-exercise-hub'),
		'priority' => 1,
		'panel' => 'fitness_exercise_hub_panel_id'
	) );
	$wp_customize->add_setting( 'fitness_exercise_hub_preloader_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_preloader_show_hide', array(
		'label'       => esc_html__( 'Show / Hide Preloader Option', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_prelaoder_option',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_preloader_show_hide',
	) ) );
	$wp_customize->add_setting( 'fitness_exercise_hub_tp_preloader_color1_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_exercise_hub_tp_preloader_color1_option', array(
			'label'     => __('Preloader First Ring Color', 'fitness-exercise-hub'),
	    'description' => __('It will change the complete theme preloader ring 1 color in one click.', 'fitness-exercise-hub'),
	    'section' => 'fitness_exercise_hub_prelaoder_option',
	    'settings' => 'fitness_exercise_hub_tp_preloader_color1_option',
  	)));
  	$wp_customize->add_setting( 'fitness_exercise_hub_tp_preloader_color2_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_exercise_hub_tp_preloader_color2_option', array(
			'label'     => __('Preloader Second Ring Color', 'fitness-exercise-hub'),
	    'description' => __('It will change the complete theme preloader ring 2 color in one click.', 'fitness-exercise-hub'),
	    'section' => 'fitness_exercise_hub_prelaoder_option',
	    'settings' => 'fitness_exercise_hub_tp_preloader_color2_option',
  	)));
  	$wp_customize->add_setting( 'fitness_exercise_hub_tp_preloader_bg_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_exercise_hub_tp_preloader_bg_color_option', array(
			'label'     => __('Preloader Background Color', 'fitness-exercise-hub'),
	    'description' => __('It will change the complete theme preloader bg color in one click.', 'fitness-exercise-hub'),
	    'section' => 'fitness_exercise_hub_prelaoder_option',
	    'settings' => 'fitness_exercise_hub_tp_preloader_bg_color_option',
  	)));

  	// Pro Version
    $wp_customize->add_setting( 'fitness_exercise_hub_preloader_pro_version_logo', array(
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_custom_control'
    ));
    $wp_customize->add_control( new fitness_exercise_hub_Customize_Pro_Version ( $wp_customize,'fitness_exercise_hub_preloader_pro_version_logo', array(
        'section'     => 'fitness_exercise_hub_prelaoder_option',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'fitness-exercise-hub' ),
        'description' => esc_url( FITNESS_EXERCISE_HUB_PRO_THEME_URL ),
        'priority'    => 100
    )));

    //TP Color Option
	$wp_customize->add_section('fitness_exercise_hub_color_option',array(
     'title'         => __('TP Color Option', 'fitness-exercise-hub'),
     'priority' => 1,
     'panel' => 'fitness_exercise_hub_panel_id'
    ) );
	$wp_customize->add_setting( 'fitness_exercise_hub_tp_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_exercise_hub_tp_color_option', array(
  		'label'     => __('Theme First Color', 'fitness-exercise-hub'),
	    'description' => __('It will change the complete theme color in one click.', 'fitness-exercise-hub'),
	    'section' => 'fitness_exercise_hub_color_option',
	    'settings' => 'fitness_exercise_hub_tp_color_option',
  	)));

	//TP Blog Option
	$wp_customize->add_section('fitness_exercise_hub_blog_option',array(
		'title' => __('TP Blog Option', 'fitness-exercise-hub'),
		'priority' => 1,
		'panel' => 'fitness_exercise_hub_panel_id'
	) );

	$wp_customize->add_setting('fitness_exercise_hub_edit_blog_page_title',array(
		'default'=> 'Home',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_exercise_hub_edit_blog_page_title',array(
		'label'	=> __('Change Blog Page Title','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting('fitness_exercise_hub_edit_blog_page_description',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_exercise_hub_edit_blog_page_description',array(
		'label'	=> __('Add Blog Page Description','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting('blog_meta_order', array(
        'default' => array('date', 'author', 'comment', 'category', 'time'),
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_sortable',
    ));
    $wp_customize->add_control(new Fitness_Exercise_Hub_Control_Sortable($wp_customize, 'blog_meta_order', array(
    	'label' => esc_html__('Meta Order', 'fitness-exercise-hub'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'fitness-exercise-hub') ,
        'section' => 'fitness_exercise_hub_blog_option',
        'choices' => array(
            'date' => __('date', 'fitness-exercise-hub') ,
            'author' => __('author', 'fitness-exercise-hub') ,
            'comment' => __('comment', 'fitness-exercise-hub') ,
            'category' => __('category', 'fitness-exercise-hub') ,
            'time' => __('time', 'fitness-exercise-hub') ,
        ) ,
    )));
    $wp_customize->add_setting( 'fitness_exercise_hub_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'fitness_exercise_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'fitness_exercise_hub_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );
	$wp_customize->add_setting('fitness_exercise_hub_read_more_text',array(
		'default'=> __('Read More','fitness-exercise-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_exercise_hub_read_more_text',array(
		'label'	=> __('Edit Button Text','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting('fitness_exercise_hub_post_image_round', array(
	  'default' => '0',
      'sanitize_callback' => 'fitness_exercise_hub_sanitize_number_range',
	));
	$wp_customize->add_control(new fitness_exercise_hub_Range_Slider($wp_customize, 'fitness_exercise_hub_post_image_round', array(
       'section' => 'fitness_exercise_hub_blog_option',
      'label' => esc_html__('Edit Post Image Border Radius', 'fitness-exercise-hub'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 180,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('fitness_exercise_hub_post_image_width', array(
	  'default' => '',
      'sanitize_callback' => 'fitness_exercise_hub_sanitize_number_range',
	));
	$wp_customize->add_control(new fitness_exercise_hub_Range_Slider($wp_customize, 'fitness_exercise_hub_post_image_width', array(
       'section' => 'fitness_exercise_hub_blog_option',
      'label' => esc_html__('Edit Post Image Width', 'fitness-exercise-hub'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 367,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('fitness_exercise_hub_post_image_length', array(
	  'default' => '',
      'sanitize_callback' => 'fitness_exercise_hub_sanitize_number_range',
	));
	$wp_customize->add_control(new fitness_exercise_hub_Range_Slider($wp_customize, 'fitness_exercise_hub_post_image_length', array(
       'section' => 'fitness_exercise_hub_blog_option',
      'label' => esc_html__('Edit Post Image height', 'fitness-exercise-hub'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 900,
        'step' => 1
    )
	)));
	
	$wp_customize->add_setting( 'fitness_exercise_hub_remove_read_button', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_remove_read_button', array(
		'label'       => esc_html__( 'Show / Hide Read More Button', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_blog_option',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_remove_read_button',
	) ) );
	$wp_customize->add_setting( 'fitness_exercise_hub_remove_tags', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_remove_tags', array(
		'label'       => esc_html__( 'Show / Hide Tags Option', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_blog_option',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_remove_tags',
	) ) );
	$wp_customize->add_setting( 'fitness_exercise_hub_remove_category', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_remove_category', array(
		'label'       => esc_html__( 'Show / Hide Category Option', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_blog_option',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_remove_category',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'fitness_exercise_hub_remove_category', array(
		'selector' => '.box-content a[rel="category"]',
		'render_callback' => 'fitness_exercise_hub_customize_partial_fitness_exercise_hub_remove_category',
	));
	$wp_customize->add_setting( 'fitness_exercise_hub_remove_comment', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_remove_comment', array(
	 'label'       => esc_html__( 'Show / Hide Comment Form', 'fitness-exercise-hub' ),
	 'section'     => 'fitness_exercise_hub_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'fitness_exercise_hub_remove_comment',
	) ) );

	$wp_customize->add_setting( 'fitness_exercise_hub_remove_related_post', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_remove_related_post', array(
	 'label'       => esc_html__( 'Show / Hide Related Post', 'fitness-exercise-hub' ),
	 'section'     => 'fitness_exercise_hub_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'fitness_exercise_hub_remove_related_post',
	) ) );
	$wp_customize->add_setting('fitness_exercise_hub_related_post_heading',array(
		'default'=> __('Related Posts','fitness-exercise-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_exercise_hub_related_post_heading',array(
		'label'	=> __('Edit Section Title','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_blog_option',
		'type'=> 'text'
	));
	$wp_customize->add_setting( 'fitness_exercise_hub_related_post_per_page', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'fitness_exercise_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'fitness_exercise_hub_related_post_per_page', array(
		'label'       => esc_html__( 'Related Post Per Page','fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 3,
			'max'              => 9,
		),
	) );
	$wp_customize->add_setting( 'fitness_exercise_hub_related_post_per_columns', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'fitness_exercise_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'fitness_exercise_hub_related_post_per_columns', array(
		'label'       => esc_html__( 'Related Post Per Row','fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	) );
	$wp_customize->add_setting('fitness_exercise_hub_post_layout',array(
        'default' => 'image-content',
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
	$wp_customize->add_control('fitness_exercise_hub_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Layout', 'fitness-exercise-hub'),
        'section' => 'fitness_exercise_hub_blog_option',
        'choices' => array(
            'image-content' => __('Media-Content','fitness-exercise-hub'),
            'content-image' => __('Content-Media','fitness-exercise-hub'),
        ),
	) );

			//TP Single Blog Option
	$wp_customize->add_section('fitness_exercise_hub_single_blog_option',array(
        'title' => __('Single Post Option', 'fitness-exercise-hub'),
        'priority' => 1,
        'panel' => 'fitness_exercise_hub_panel_id'
    ) );

    /** Meta Order */
    $wp_customize->add_setting('fitness_exercise_hub_single_blog_meta_order', array(
        'default' => array('date', 'author', 'comment','category', 'time'),
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_sortable',
    ));
    $wp_customize->add_control(new fitness_exercise_hub_Control_Sortable($wp_customize, 'fitness_exercise_hub_single_blog_meta_order', array(
    	'label' => esc_html__('Meta Order', 'fitness-exercise-hub'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'fitness-exercise-hub') ,
        'section' => 'fitness_exercise_hub_single_blog_option',
        'choices' => array(
            'date' => __('date', 'fitness-exercise-hub') ,
            'author' => __('author', 'fitness-exercise-hub') ,
            'comment' => __('comment', 'fitness-exercise-hub') ,
            'category' => __('category', 'fitness-exercise-hub') ,
            'time' => __('time', 'fitness-exercise-hub') ,
        ) ,
    )));

    $wp_customize->add_setting('fitness_exercise_hub_single_post_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Fitness_Exercise_Hub_Icon_Changer(
       $wp_customize,'fitness_exercise_hub_single_post_date_icon',array(
		'label'	=> __('Change Date Icon','fitness-exercise-hub'),
		'transport' => 'refresh',
		'section'	=> 'fitness_exercise_hub_single_blog_option',
		'type'		=> 'fitness-exercise-hub-icon'
	)));

	$wp_customize->add_setting('fitness_exercise_hub_single_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Fitness_Exercise_Hub_Icon_Changer(
       $wp_customize,'fitness_exercise_hub_single_post_author_icon',array(
		'label'	=> __('Change Author Icon','fitness-exercise-hub'),
		'transport' => 'refresh',
		'section'	=> 'fitness_exercise_hub_single_blog_option',
		'type'		=> 'fitness-exercise-hub-icon'
	)));

	$wp_customize->add_setting('fitness_exercise_hub_single_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Fitness_Exercise_Hub_Icon_Changer(
       $wp_customize,'fitness_exercise_hub_single_post_comment_icon',array(
		'label'	=> __('Change Comment Icon','fitness-exercise-hub'),
		'transport' => 'refresh',
		'section'	=> 'fitness_exercise_hub_single_blog_option',
		'type'		=> 'fitness-exercise-hub-icon'
	)));

	$wp_customize->add_setting('fitness_exercise_hub_single_post_category_icon',array(
		'default'	=> 'fas fa-list',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Fitness_Exercise_Hub_Icon_Changer(
       $wp_customize,'fitness_exercise_hub_single_post_category_icon',array(
		'label'	=> __('Change Category Icon','fitness-exercise-hub'),
		'transport' => 'refresh',
		'section'	=> 'fitness_exercise_hub_single_blog_option',
		'type'		=> 'fitness-exercise-hub-icon'
	)));

	$wp_customize->add_setting('fitness_exercise_hub_single_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Fitness_Exercise_Hub_Icon_Changer(
       $wp_customize,'fitness_exercise_hub_single_post_time_icon',array(
		'label'	=> __('Change Time Icon','fitness-exercise-hub'),
		'transport' => 'refresh',
		'section'	=> 'fitness_exercise_hub_single_blog_option',
		'type'		=> 'fitness-exercise-hub-icon'
	)));

	//MENU TYPOGRAPHY
	$wp_customize->add_section( 'fitness_exercise_hub_menu_typography', array(
    	'title'      => __( 'Menu Typography', 'fitness-exercise-hub' ),
    	'priority' => 2,
		'panel' => 'fitness_exercise_hub_panel_id'
	) );

	$wp_customize->add_setting('fitness_exercise_hub_menu_font_weight',array(
        'default' => '400',
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
	$wp_customize->add_control('fitness_exercise_hub_menu_font_weight',array(
     'type' => 'radio',
     'label'     => __('Font Weight', 'fitness-exercise-hub'),
     'section' => 'fitness_exercise_hub_menu_typography',
     'type' => 'select',
     'choices' => array(
         '100' => __('100','fitness-exercise-hub'),
         '200' => __('200','fitness-exercise-hub'),
         '300' => __('300','fitness-exercise-hub'),
         '400' => __('400','fitness-exercise-hub'),
         '500' => __('500','fitness-exercise-hub'),
         '600' => __('600','fitness-exercise-hub'),
         '700' => __('700','fitness-exercise-hub'),
         '800' => __('800','fitness-exercise-hub'),
         '900' => __('900','fitness-exercise-hub')
     ),
	) );
	
	$wp_customize->add_setting('fitness_exercise_hub_menu_text_tranform',array(
		'default' => 'Capitalize',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
 	));
 	$wp_customize->add_control('fitness_exercise_hub_menu_text_tranform',array(
		'type' => 'select',
		'label' => __('Menu Text Transform','fitness-exercise-hub'),
		'section' => 'fitness_exercise_hub_menu_typography',
		'choices' => array(
		   'Uppercase' => __('Uppercase','fitness-exercise-hub'),
		   'Lowercase' => __('Lowercase','fitness-exercise-hub'),
		   'Capitalize' => __('Capitalize','fitness-exercise-hub'),
		),
	) );

	$wp_customize->add_setting('fitness_exercise_hub_menu_font_size', array(
	'default' => 14,
    'sanitize_callback' => 'fitness_exercise_hub_sanitize_number_range',
	));
	$wp_customize->add_control(new Fitness_Exercise_Hub_Range_Slider($wp_customize, 'fitness_exercise_hub_menu_font_size', array(
        'section' => 'fitness_exercise_hub_menu_typography',
        'label' => esc_html__('Font Size', 'fitness-exercise-hub'),
        'input_attrs' => array(
         'min' => 0,
         'max' => 20,
         'step' => 1
    )
	)));

	$wp_customize->add_setting( 'fitness_exercise_hub_menu_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_exercise_hub_menu_color', array(
			'label'     => __('Change Menu Color', 'fitness-exercise-hub'),
	    'section' => 'fitness_exercise_hub_menu_typography',
	    'settings' => 'fitness_exercise_hub_menu_color',
  	)));

  	// Pro Version
    $wp_customize->add_setting( 'fitness_exercise_hub_menu_pro_version_logo', array(
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_custom_control'
    ));
    $wp_customize->add_control( new fitness_exercise_hub_Customize_Pro_Version ( $wp_customize,'fitness_exercise_hub_menu_pro_version_logo', array(
        'section'     => 'fitness_exercise_hub_menu_typography',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'fitness-exercise-hub' ),
        'description' => esc_url( FITNESS_EXERCISE_HUB_PRO_THEME_URL ),
        'priority'    => 100
    )));

	// Social Media
	$wp_customize->add_section( 'fitness_exercise_hub_social_media', array(
    	'title'      => __( 'Social Media Links', 'fitness-exercise-hub' ),
    	'priority' => 3,
    	'description' => __( 'Add your Social Links', 'fitness-exercise-hub' ),
		'panel' => 'fitness_exercise_hub_panel_id'
	) );
	$wp_customize->add_setting( 'fitness_exercise_hub_header_fb_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_header_fb_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_header_fb_new_tab',
	) ) );
	$wp_customize->add_setting('fitness_exercise_hub_facebook_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('fitness_exercise_hub_facebook_url',array(
		'label'	=> __('Facebook Link','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_social_media',
		'type'=> 'url'
	));
	$wp_customize->selective_refresh->add_partial( 'fitness_exercise_hub_facebook_url', array(
		'selector' => '.media-links a',
		'render_callback' => 'fitness_exercise_hub_customize_partial_facebook_exercise_hub_facebook_url',
	) );
	$wp_customize->add_setting('fitness_exercise_hub_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Fitness_Exercise_Hub_Icon_Changer(
        $wp_customize,'fitness_exercise_hub_facebook_icon',array(
		'label'	=> __('Facebook Icon','fitness-exercise-hub'),
		'transport' => 'refresh',
		'section'	=> 'fitness_exercise_hub_social_media',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting( 'fitness_exercise_hub_header_twt_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_header_twt_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_header_twt_new_tab',
	) ) );
	$wp_customize->add_setting('fitness_exercise_hub_twitter_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('fitness_exercise_hub_twitter_url',array(
		'label'	=> __('Twitter Link','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_social_media',
		'type'=> 'url'
	));
	$wp_customize->add_setting('fitness_exercise_hub_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Fitness_Exercise_Hub_Icon_Changer(
        $wp_customize,'fitness_exercise_hub_twitter_icon',array(
		'label'	=> __('Twitter Icon','fitness-exercise-hub'),
		'transport' => 'refresh',
		'section'	=> 'fitness_exercise_hub_social_media',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting( 'fitness_exercise_hub_header_ins_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_header_ins_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_header_ins_new_tab',
	) ) );
	$wp_customize->add_setting('fitness_exercise_hub_instagram_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('fitness_exercise_hub_instagram_url',array(
		'label'	=> __('Instagram Link','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_social_media',
		'type'=> 'url'
	));
	$wp_customize->add_setting('fitness_exercise_hub_instagram_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Fitness_Exercise_Hub_Icon_Changer(
        $wp_customize,'fitness_exercise_hub_instagram_icon',array(
		'label'	=> __('Instagram Icon','fitness-exercise-hub'),
		'transport' => 'refresh',
		'section'	=> 'fitness_exercise_hub_social_media',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting( 'fitness_exercise_hub_header_ut_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_header_ut_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_header_ut_new_tab',
	) ) );
	$wp_customize->add_setting('fitness_exercise_hub_youtube_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('fitness_exercise_hub_youtube_url',array(
		'label'	=> __('YouTube Link','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_social_media',
		'type'=> 'url'
	));
	$wp_customize->add_setting('fitness_exercise_hub_youtube_icon',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Fitness_Exercise_Hub_Icon_Changer(
        $wp_customize,'fitness_exercise_hub_youtube_icon',array(
		'label'	=> __('Youtube Icon','fitness-exercise-hub'),
		'transport' => 'refresh',
		'section'	=> 'fitness_exercise_hub_social_media',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting( 'fitness_exercise_hub_header_pint_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_header_pint_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_social_media',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_header_pint_new_tab',
	) ) );
	$wp_customize->add_setting('fitness_exercise_hub_pint_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('fitness_exercise_hub_pint_url',array(
		'label'	=> __('Pinterest Link','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_social_media',
		'type'=> 'url'
	));
	$wp_customize->add_setting('fitness_exercise_hub_pint_icon',array(
		'default'	=> 'fab fa-pinterest',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Fitness_Exercise_Hub_Icon_Changer(
        $wp_customize,'fitness_exercise_hub_pint_icon',array(
		'label'	=> __('Pinterest Icon','fitness-exercise-hub'),
		'transport' => 'refresh',
		'section'	=> 'fitness_exercise_hub_social_media',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('fitness_exercise_hub_social_icon_fontsize',array(
	  'default'=> '14',
	  'sanitize_callback'	=> 'fitness_exercise_hub_sanitize_number_absint'
    ));
    $wp_customize->add_control('fitness_exercise_hub_social_icon_fontsize',array(
	    'label'	=> __('Social Icons Font Size in PX','fitness-exercise-hub'),
	    'type'=> 'number',
	    'section'=> 'fitness_exercise_hub_social_media',
	    'input_attrs' => array(
	 	 'step' => 1,
		 'min'  => 0,
		 'max'  => 30,
			),
    ));

    // Pro Version
    $wp_customize->add_setting( 'fitness_exercise_hub_social_media_pro_version_logo', array(
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_custom_control'
    ));
    $wp_customize->add_control( new fitness_exercise_hub_Customize_Pro_Version ( $wp_customize,'fitness_exercise_hub_social_media_pro_version_logo', array(
        'section'     => 'fitness_exercise_hub_social_media',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'fitness-exercise-hub' ),
        'description' => esc_url( FITNESS_EXERCISE_HUB_PRO_THEME_URL ),
        'priority'    => 100
    )));
	
	//home page slider
	$wp_customize->add_section( 'fitness_exercise_hub_slider_section' , array(
    	'title'      => __( 'Slider Section', 'fitness-exercise-hub' ),
    	'priority' => 3,
		'panel' => 'fitness_exercise_hub_panel_id'
	) );

	$wp_customize->add_setting( 'fitness_exercise_hub_slider_arrows', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_slider_arrows', array(
		'label'       => esc_html__( 'Show / Hide slider', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_slider_section',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_slider_arrows',
	) ) );

	$wp_customize->add_setting( 'fitness_exercise_hub_show_slider_title', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new fitness_exercise_hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_show_slider_title', array(
		'label'       => esc_html__( 'Show / Hide Slider Heading', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_slider_section',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_show_slider_title',
	) ) );

	$wp_customize->add_setting( 'fitness_exercise_hub_show_slider_content', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new fitness_exercise_hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_show_slider_content', array(
		'label'       => esc_html__( 'Show / Hide Slider Content', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_slider_section',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_show_slider_content',
	) ) );

	for ( $count = 1; $count <= 3; $count++ ) {

		$wp_customize->add_setting( 'fitness_exercise_hub_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'fitness_exercise_hub_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'fitness_exercise_hub_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'fitness-exercise-hub' ),
			'description' => __('Image Size ( 1835 x 700 ) px','fitness-exercise-hub'),
			'section'  => 'fitness_exercise_hub_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}
	
	$wp_customize->add_setting('fitness_exercise_hub_slider_top',array(
	    'default'=> '',
	    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_exercise_hub_slider_top',array(
	    'label' => __('Add Slider Top Text','fitness-exercise-hub'),
	    'section'=> 'fitness_exercise_hub_slider_section',
	    'type'=> 'text'
	));

	$wp_customize->add_setting( 'fitness_exercise_hub_slider_button', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_slider_button', array(
		'label'       => esc_html__( 'Show / Hide Slider Button', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_slider_section',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_slider_button',
	) ) );

	//Slider height
    $wp_customize->add_setting('fitness_exercise_hub_slider_img_height',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('fitness_exercise_hub_slider_img_height',array(
        'label' => __('Slider Height','fitness-exercise-hub'),
        'description'   => __('Add slider height in px(eg. 700px).','fitness-exercise-hub'),
        'section'=> 'fitness_exercise_hub_slider_section',
        'type'=> 'text'
    ));
    
	$wp_customize->add_setting('fitness_exercise_hub_slider_content_layout',array(
        'default' => 'LEFT-ALIGN',
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
	$wp_customize->add_control('fitness_exercise_hub_slider_content_layout',array(
        'type' => 'radio',
        'label'     => __('Slider Content Layout', 'fitness-exercise-hub'),
        'section' => 'fitness_exercise_hub_slider_section',
        'choices' => array(
            'LEFT-ALIGN' => __('LEFT-ALIGN','fitness-exercise-hub'),
            'CENTER-ALIGN' => __('CENTER-ALIGN','fitness-exercise-hub'),
            'RIGHT-ALIGN' => __('RIGHT-ALIGN','fitness-exercise-hub'),
        ),
	) );

	// Pro Version
    $wp_customize->add_setting( 'fitness_exercise_hub_slider_pro_version_logo', array(
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_custom_control'
    ));
    $wp_customize->add_control( new fitness_exercise_hub_Customize_Pro_Version ( $wp_customize,'fitness_exercise_hub_slider_pro_version_logo', array(
        'section'     => 'fitness_exercise_hub_slider_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'fitness-exercise-hub' ),
        'description' => esc_url( FITNESS_EXERCISE_HUB_PRO_THEME_URL ),
        'priority'    => 100
    )));

	// Schedule Section
	$wp_customize->add_section( 'fitness_exercise_hub_timing', array(
    	'title'      => __( 'Timing Section', 'fitness-exercise-hub' ),
    	'priority' => 3,
		'panel' => 'fitness_exercise_hub_panel_id'
	) );
    $wp_customize->add_setting( 'fitness_exercise_hub_timing_on_off', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_timing_on_off', array(
		'label'       => esc_html__( 'show hide timing section', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_timing',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_timing_on_off',
	) ) );
	for ( $i = 1; $i <= 3; $i++ ) {

		$wp_customize->add_setting('fitness_exercise_hub_schedule_icon'.$i,array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('fitness_exercise_hub_schedule_icon'.$i,array(
			'label'	=> __('Add icon ','fitness-exercise-hub').$i,
			'section'=> 'fitness_exercise_hub_timing',
			'type'=> 'text'
		));

		$wp_customize->add_setting('fitness_exercise_hub_schedule_title'.$i,array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('fitness_exercise_hub_schedule_title'.$i,array(
			'label'	=> __('Add Title ','fitness-exercise-hub').$i,
			'section'=> 'fitness_exercise_hub_timing',
			'type'=> 'text'
		));

		$wp_customize->add_setting('fitness_exercise_hub_schedule_text'.$i,array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('fitness_exercise_hub_schedule_text'.$i,array(
			'label'	=> __('Add Text ','fitness-exercise-hub').$i,
			'section'=> 'fitness_exercise_hub_timing',
			'type'=> 'text'
		));

	}

	// Pro Version
    $wp_customize->add_setting( 'fitness_exercise_hub_feature_pro_version_logo', array(
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_custom_control'
    ));
    $wp_customize->add_control( new fitness_exercise_hub_Customize_Pro_Version ( $wp_customize,'fitness_exercise_hub_feature_pro_version_logo', array(
        'section'     => 'fitness_exercise_hub_timing',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'fitness-exercise-hub' ),
        'description' => esc_url( FITNESS_EXERCISE_HUB_PRO_THEME_URL ),
        'priority'    => 100
    )));

	//home page services
	$wp_customize->add_section( 'fitness_exercise_hub_services_section' , array(
    	'title'      => __( 'Services Section', 'fitness-exercise-hub' ),
    	'priority' => 3,
		'panel' => 'fitness_exercise_hub_panel_id'
	) );

    $wp_customize->add_setting( 'fitness_exercise_hub_services_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_services_new_tab', array(
		'label'       => esc_html__( 'show hide services option', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_services_section',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_services_new_tab',
	) ) );

	$wp_customize->add_setting('fitness_exercise_hub_services_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_exercise_hub_services_heading',array(
		'label'	=> __('Add Heading','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_services_section',
		'type'=> 'text'
	));
	$wp_customize->add_setting('fitness_exercise_hub_services_heading_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_exercise_hub_services_heading_text',array(
		'label'	=> __('Add Text','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_services_section',
		'type'=> 'text'
	));

	$fitness_exercise_hub_categories = get_categories();
	$cats = array();
	$i = 0;
	$fitness_exercise_hub_offer_cat[]= 'select';
	foreach($fitness_exercise_hub_categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$fitness_exercise_hub_offer_cat[$category->slug] = $category->name;
	}
	$wp_customize->add_setting('fitness_exercise_hub_services_section_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices',
	));
	$wp_customize->add_control('fitness_exercise_hub_services_section_category',array(
		'type'    => 'select',
		'choices' => $fitness_exercise_hub_offer_cat,
		'label' => __('Select Category','fitness-exercise-hub'),
		'section' => 'fitness_exercise_hub_services_section',
	));

	// Pro Version
    $wp_customize->add_setting( 'fitness_exercise_hub_about_pro_version_logo', array(
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_custom_control'
    ));
    $wp_customize->add_control( new fitness_exercise_hub_Customize_Pro_Version ( $wp_customize,'fitness_exercise_hub_about_pro_version_logo', array(
        'section'     => 'fitness_exercise_hub_services_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'fitness-exercise-hub' ),
        'description' => esc_url( FITNESS_EXERCISE_HUB_PRO_THEME_URL ),
        'priority'    => 100
    )));

	//footer
	$wp_customize->add_section('fitness_exercise_hub_footer_section',array(
		'title'	=> __('Footer Widget Settings','fitness-exercise-hub'),
		'panel' => 'fitness_exercise_hub_panel_id',
		'priority' =>4,
	));

    // footer columns
	$wp_customize->add_setting('fitness_exercise_hub_footer_columns',array(
		'default'	=> 4,
		'sanitize_callback'	=> 'fitness_exercise_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('fitness_exercise_hub_footer_columns',array(
		'label'	=> __('Footer Widget Columns','fitness-exercise-hub'),
		'section'	=> 'fitness_exercise_hub_footer_section',
		'setting'	=> 'fitness_exercise_hub_footer_columns',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	));

	$wp_customize->add_setting( 'fitness_exercise_hub_tp_footer_bg_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_exercise_hub_tp_footer_bg_color_option', array(
	    'section' => 'fitness_exercise_hub_footer_section',
	    'label' => __('Footer Widget Background Color','fitness-exercise-hub'),
	    'settings' => 'fitness_exercise_hub_tp_footer_bg_color_option',
  	)));

	$wp_customize->add_setting('fitness_exercise_hub_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'fitness_exercise_hub_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','fitness-exercise-hub'),
        'section' => 'fitness_exercise_hub_footer_section'
	)));

	//footer widget title font size
	$wp_customize->add_setting('fitness_exercise_hub_footer_widget_title_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'fitness_exercise_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('fitness_exercise_hub_footer_widget_title_font_size',array(
		'label'	=> __('Change Footer Widget Title Font Size in PX','fitness-exercise-hub'),
		'section'	=> 'fitness_exercise_hub_footer_section',
	    'setting'	=> 'fitness_exercise_hub_footer_widget_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'fitness_exercise_hub_footer_widget_title_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_exercise_hub_footer_widget_title_color', array(
			'label'     => __('Change Footer Widget Title Color', 'fitness-exercise-hub'),
	    'section' => 'fitness_exercise_hub_footer_section',
	    'settings' => 'fitness_exercise_hub_footer_widget_title_color',
  	)));

  	$wp_customize->add_setting('fitness_exercise_hub_footer_widget_title_font_weight',array(
        'default' => '',
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
	$wp_customize->add_control('fitness_exercise_hub_footer_widget_title_font_weight',array(
     'type' => 'radio',
     'label'     => __('Change Footer Widget Title Font Weight', 'fitness-exercise-hub'),
     'section' => 'fitness_exercise_hub_footer_section',
     'type' => 'select',
     'choices' => array(
         '100' => __('100','fitness-exercise-hub'),
         '200' => __('200','fitness-exercise-hub'),
         '300' => __('300','fitness-exercise-hub'),
         '400' => __('400','fitness-exercise-hub'),
         '500' => __('500','fitness-exercise-hub'),
         '600' => __('600','fitness-exercise-hub'),
         '700' => __('700','fitness-exercise-hub'),
         '800' => __('800','fitness-exercise-hub'),
         '900' => __('900','fitness-exercise-hub')
     ),
	) );

	$wp_customize->add_setting('fitness_exercise_hub_footer_widget_title_text_tranform',array(
		'default' => '',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
 	));
 	$wp_customize->add_control('fitness_exercise_hub_footer_widget_title_text_tranform',array(
		'type' => 'select',
		'label' => __('Change Footer Widget Title Letter Case','fitness-exercise-hub'),
		'section' => 'fitness_exercise_hub_footer_section',
		'choices' => array(
		   'Uppercase' => __('Uppercase','fitness-exercise-hub'),
		   'Lowercase' => __('Lowercase','fitness-exercise-hub'),
		   'Capitalize' => __('Capitalize','fitness-exercise-hub'),
		),
	) );

	// Add Settings and Controls for position
	$wp_customize->add_setting('fitness_exercise_hub_footer_widget_title_position',array(
        'default' => '',
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
	$wp_customize->add_control('fitness_exercise_hub_footer_widget_title_position',array(
        'type' => 'radio',
        'label'     => __('Change Footer Widget Position', 'fitness-exercise-hub'),
        'description'   => __('This option work for Footer Widget', 'fitness-exercise-hub'),
        'section' => 'fitness_exercise_hub_footer_section',
        'choices' => array(
            'Right' => __('Right','fitness-exercise-hub'),
            'Left' => __('Left','fitness-exercise-hub'),
            'Center' => __('Center','fitness-exercise-hub')
        ),
	) );

	$wp_customize->add_setting( 'fitness_exercise_hub_return_to_header', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_return_to_header', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_footer_section',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_return_to_header',
	) ) );
	
	$wp_customize->add_setting('fitness_exercise_hub_return_icon',array(
		'default'	=> 'fas fa-arrow-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Fitness_Exercise_Hub_Icon_Changer(
        $wp_customize,'fitness_exercise_hub_return_icon',array(
		'label'	=> __('Srcroll Top Icon','fitness-exercise-hub'),
		'transport' => 'refresh',
		'section'	=> 'fitness_exercise_hub_footer_section',
		'type'		=> 'icon'
	)));

    // Add Settings and Controls for Scroll top
	$wp_customize->add_setting('fitness_exercise_hub_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
	$wp_customize->add_control('fitness_exercise_hub_scroll_top_position',array(
     'type' => 'radio',
     'label'     => __('Scroll to top Position', 'fitness-exercise-hub'),
     'description'   => __('This option work for scroll to top', 'fitness-exercise-hub'),
     'section' => 'fitness_exercise_hub_footer_section',
     'choices' => array(
         'Right' => __('Right','fitness-exercise-hub'),
         'Left' => __('Left','fitness-exercise-hub'),
         'Center' => __('Center','fitness-exercise-hub')
     ),
	) );

	// Pro Version
    $wp_customize->add_setting( 'fitness_exercise_hub_footer_widget_pro_version_logo', array(
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_custom_control'
    ));
    $wp_customize->add_control( new fitness_exercise_hub_Customize_Pro_Version ( $wp_customize,'fitness_exercise_hub_footer_widget_pro_version_logo', array(
        'section'     => 'fitness_exercise_hub_footer_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'fitness-exercise-hub' ),
        'description' => esc_url( FITNESS_EXERCISE_HUB_PRO_THEME_URL ),
        'priority'    => 100
    )));

	//footer
	$wp_customize->add_section('fitness_exercise_hub_footer_copyright_section',array(
		'title'	=> __('Footer Copyright Settings','fitness-exercise-hub'),
		'description'	=> __('Add copyright text.','fitness-exercise-hub'),
		'panel' => 'fitness_exercise_hub_panel_id',
		'priority' =>4,
	));

	$wp_customize->add_setting('fitness_exercise_hub_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_exercise_hub_footer_text',array(
		'label'	=> __('Copyright Text','fitness-exercise-hub'),
		'section'	=> 'fitness_exercise_hub_footer_copyright_section',
		'type'		=> 'text'
	));

	//footer widget title font size
	$wp_customize->add_setting('fitness_exercise_hub_footer_copyright_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'fitness_exercise_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('fitness_exercise_hub_footer_copyright_font_size',array(
		'label'	=> __('Change Footer Copyright Font Size in PX','fitness-exercise-hub'),
		'section'	=> 'fitness_exercise_hub_footer_copyright_section',
	    'setting'	=> 'fitness_exercise_hub_footer_copyright_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting('fitness_exercise_hub_footer_copyright_title_font_weight',array(
        'default' => '',
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
	$wp_customize->add_control('fitness_exercise_hub_footer_copyright_title_font_weight',array(
     'type' => 'radio',
     'label'     => __('Change Footer Copyright Text Font Weight', 'fitness-exercise-hub'),
     'section' => 'fitness_exercise_hub_footer_copyright_section',
     'type' => 'select',
     'choices' => array(
         '100' => __('100','fitness-exercise-hub'),
         '200' => __('200','fitness-exercise-hub'),
         '300' => __('300','fitness-exercise-hub'),
         '400' => __('400','fitness-exercise-hub'),
         '500' => __('500','fitness-exercise-hub'),
         '600' => __('600','fitness-exercise-hub'),
         '700' => __('700','fitness-exercise-hub'),
         '800' => __('800','fitness-exercise-hub'),
         '900' => __('900','fitness-exercise-hub')
     ),
	) );

	$wp_customize->add_setting( 'fitness_exercise_hub_footer_copyright_text_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_exercise_hub_footer_copyright_text_color', array(
			'label'     => __('Change Footer Copyright Text Color', 'fitness-exercise-hub'),
	    'section' => 'fitness_exercise_hub_footer_copyright_section',
	    'settings' => 'fitness_exercise_hub_footer_copyright_text_color',
  	)));

  	$wp_customize->add_setting('fitness_exercise_hub_footer_copyright_top_bottom_padding',array(
		'default'	=> '',
		'sanitize_callback'	=> 'fitness_exercise_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('fitness_exercise_hub_footer_copyright_top_bottom_padding',array(
		'label'	=> __('Change Footer Copyright Padding in PX','fitness-exercise-hub'),
		'section'	=> 'fitness_exercise_hub_footer_copyright_section',
	    'setting'	=> 'fitness_exercise_hub_footer_copyright_top_bottom_padding',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	// Add Settings and Controls for copyright
	$wp_customize->add_setting('fitness_exercise_hub_copyright_text_position',array(
        'default' => 'Center',
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
	$wp_customize->add_control('fitness_exercise_hub_copyright_text_position',array(
        'type' => 'radio',
        'label'     => __('Copyright Text Position', 'fitness-exercise-hub'),
        'description'   => __('This option work for Copyright', 'fitness-exercise-hub'),
        'section' => 'fitness_exercise_hub_footer_copyright_section',
        'choices' => array(
            'Right' => __('Right','fitness-exercise-hub'),
            'Left' => __('Left','fitness-exercise-hub'),
            'Center' => __('Center','fitness-exercise-hub')
        ),
	) );

	// Pro Version
    $wp_customize->add_setting( 'fitness_exercise_hub_copyright_pro_version_logo', array(
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_custom_control'
    ));
    $wp_customize->add_control( new fitness_exercise_hub_Customize_Pro_Version ( $wp_customize,'fitness_exercise_hub_copyright_pro_version_logo', array(
        'section'     => 'fitness_exercise_hub_footer_copyright_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'fitness-exercise-hub' ),
        'description' => esc_url( FITNESS_EXERCISE_HUB_PRO_THEME_URL ),
        'priority'    => 100
    )));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'fitness_exercise_hub_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'fitness_exercise_hub_customize_partial_blogdescription',
	) );

    //Mobile resposnsive
	$wp_customize->add_section('fitness_exercise_hub_mobile_media_option',array(
		'title'         => __('Mobile Responsive media', 'fitness-exercise-hub'),
		'description' => __('Control will no function if the toggle in the main settings is off.', 'fitness-exercise-hub'),
		'priority' => 12,
		'panel' => 'fitness_exercise_hub_panel_id'
	) );

	$wp_customize->add_setting( 'fitness_exercise_hub_mobile_blog_description', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new fitness_exercise_hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_mobile_blog_description', array(
		'label'       => esc_html__( 'Show / Hide Blog Page Description', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_mobile_blog_description',
	) ) );

	$wp_customize->add_setting( 'fitness_exercise_hub_return_to_header_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_return_to_header_mob', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_return_to_header_mob',
	) ) );
	$wp_customize->add_setting( 'fitness_exercise_hub_slider_button_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_slider_button_mob', array(
		'label'       => esc_html__( 'Show / Hide Slider Button', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_slider_button_mob',
	) ) );
	$wp_customize->add_setting( 'fitness_exercise_hub_related_post_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_related_post_mob', array(
		'label'       => esc_html__( 'Show / Hide Related Post', 'fitness-exercise-hub' ),
		'section'     => 'fitness_exercise_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_related_post_mob',
	) ) );

	//Slider height
    $wp_customize->add_setting('fitness_exercise_hub_slider_img_height_responsive',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('fitness_exercise_hub_slider_img_height_responsive',array(
        'label' => __('Slider Height','fitness-exercise-hub'),
        'description'   => __('Add slider height in px(eg. 700px).','fitness-exercise-hub'),
        'section'=> 'fitness_exercise_hub_mobile_media_option',
        'type'=> 'text'
    ));

	// Pro Version
    $wp_customize->add_setting( 'fitness_exercise_hub_responsive_pro_version_logo', array(
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_custom_control'
    ));
    $wp_customize->add_control( new fitness_exercise_hub_Customize_Pro_Version ( $wp_customize,'fitness_exercise_hub_responsive_pro_version_logo', array(
        'section'     => 'fitness_exercise_hub_mobile_media_option',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Features ', 'fitness-exercise-hub' ),
        'description' => esc_url( FITNESS_EXERCISE_HUB_PRO_THEME_URL ),
        'priority'    => 100
    )));

	//Site Identity
    $wp_customize->add_setting( 'fitness_exercise_hub_site_title', array(
		 'default'           => true,
		 'transport'         => 'refresh',
		 'sanitize_callback' => 'Fitness_Exercise_Hub_sanitize_checkbox',
    ) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize,'fitness_exercise_hub_site_title', array(
		'label'       => esc_html__( 'Show / Hide Site Title', 'fitness-exercise-hub' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_site_title',
	) ) );
	$wp_customize->add_setting('Fitness_Exercise_Hub_site_title_font_size',array(
		'default'	=> 25,
		'sanitize_callback'	=> 'Fitness_Exercise_Hub_sanitize_number_absint'
	));
	$wp_customize->add_control('Fitness_Exercise_Hub_site_title_font_size',array(
		'label'	=> __('Site Title Font Size in PX','fitness-exercise-hub'),
		'section'	=> 'title_tagline',
		'setting'	=> 'Fitness_Exercise_Hub_site_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 80,
		),
	));

	$wp_customize->add_setting( 'fitness_exercise_hub_site_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_exercise_hub_site_tagline_color', array(
			'label'     => __('Change Site Title Color', 'fitness-exercise-hub'),
	    'section' => 'title_tagline',
	    'settings' => 'fitness_exercise_hub_site_tagline_color',
  	)));

	$wp_customize->add_setting( 'Fitness_Exercise_Hub_tagline_text', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'Fitness_Exercise_Hub_sanitize_checkbox',
    ) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize,'Fitness_Exercise_Hub_tagline_text', array(
		'label'       => esc_html__( 'Show / Hide Site Tagline', 'fitness-exercise-hub' ),
		'section'     => 'title_tagline',
	    'type'        => 'toggle',
		'settings'    => 'Fitness_Exercise_Hub_tagline_text',
	) ) );

	// logo site tagline size
	$wp_customize->add_setting('Fitness_Exercise_Hub_site_tagline_font_size',array(
		'default'	=> 15,
		'sanitize_callback'	=> 'Fitness_Exercise_Hub_sanitize_number_absint'
	));
	$wp_customize->add_control('Fitness_Exercise_Hub_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size in PX','fitness-exercise-hub'),
		'section'	=> 'title_tagline',
		'setting'	=> 'Fitness_Exercise_Hub_site_tagline_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));

	$wp_customize->add_setting( 'fitness_exercise_hub_logo_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_exercise_hub_logo_tagline_color', array(
			'label'     => __('Change Site Tagline Color', 'fitness-exercise-hub'),
	    'section' => 'title_tagline',
	    'settings' => 'fitness_exercise_hub_logo_tagline_color',
  	)));
  	
    $wp_customize->add_setting('fitness_exercise_hub_logo_width',array(
		'default' => 150,
		'sanitize_callback'	=> 'fitness_exercise_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('fitness_exercise_hub_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','fitness-exercise-hub'),
		'section'	=> 'title_tagline',
		'type'		=> 'number'
	));
	$wp_customize->add_setting('fitness_exercise_hub_logo_settings',array(
		'default' => 'Different Line',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
    $wp_customize->add_control('fitness_exercise_hub_logo_settings',array(
        'type' => 'radio',
        'label'     => __('Logo Layout Settings', 'fitness-exercise-hub'),
        'description'   => __('Here you have two options 1. Logo and Site tite in differnt line. 2. Logo and Site title in same line.', 'fitness-exercise-hub'),
        'section' => 'title_tagline',
        'choices' => array(
            'Different Line' => __('Different Line','fitness-exercise-hub'),
            'Same Line' => __('Same Line','fitness-exercise-hub')
        ),
	) );

	//Woo Commerce
	$wp_customize->add_setting('fitness_exercise_hub_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'fitness_exercise_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('fitness_exercise_hub_per_columns',array(
		'label'	=> __('Product Per Row','fitness-exercise-hub'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));
	$wp_customize->add_setting('fitness_exercise_hub_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'fitness_exercise_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('fitness_exercise_hub_product_per_page',array(
		'label'	=> __('Product Per Page','fitness-exercise-hub'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));
	$wp_customize->add_setting( 'fitness_exercise_hub_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Shop page sidebar', 'fitness-exercise-hub' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_product_sidebar',
	) ) );
	$wp_customize->add_setting('fitness_exercise_hub_sale_tag_position',array(
        'default' => 'right',
        'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
	$wp_customize->add_control('fitness_exercise_hub_sale_tag_position',array(
        'type' => 'radio',
        'label'     => __('Sale Badge Position', 'fitness-exercise-hub'),
        'description'   => __('This option work for Archieve Products', 'fitness-exercise-hub'),
        'section' => 'woocommerce_product_catalog',
        'choices' => array(
            'left' => __('Left','fitness-exercise-hub'),
            'right' => __('Right','fitness-exercise-hub'),
        ),
	) );
	$wp_customize->add_setting( 'fitness_exercise_hub_single_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_single_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Product page sidebar', 'fitness-exercise-hub' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_single_product_sidebar',
	) ) );
    $wp_customize->add_setting( 'fitness_exercise_hub_related_product', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Fitness_Exercise_Hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_related_product', array(
		'label'       => esc_html__( 'Show / Hide related products', 'fitness-exercise-hub' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'fitness_exercise_hub_related_product',
	) ) );
	
	//Page template settings
	$wp_customize->add_panel( 'fitness_exercise_hub_page_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Page Template Settings', 'fitness-exercise-hub' ),
	    'description' => __( 'Description of what this panel does.', 'fitness-exercise-hub' ),
	) );

	// 404 PAGE
	$wp_customize->add_section('fitness_exercise_hub_404_page_section',array(
		'title'         => __('404 Page', 'fitness-exercise-hub'),
		'description'   => 'Here you can customize 404 Page content.',
		'panel' => 'fitness_exercise_hub_page_panel_id'
	) );

	$wp_customize->add_setting('fitness_exercise_hub_edit_404_title',array(
		'default'=> __('Oops! That page cant be found.','fitness-exercise-hub'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('fitness_exercise_hub_edit_404_title',array(
		'label'	=> __('Edit Title','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_404_page_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('fitness_exercise_hub_edit_404_text',array(
		'default'=> __('It looks like nothing was found at this location. Maybe try a search?','fitness-exercise-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_exercise_hub_edit_404_text',array(
		'label'	=> __('Edit Text','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_404_page_section',
		'type'=> 'text'
	));

	// Search Results
	$wp_customize->add_section('fitness_exercise_hub_no_result_section',array(
		'title'         => __('Search Results', 'fitness-exercise-hub'),
		'description'   => 'Here you can customize Search Result content.',
		'panel' => 'fitness_exercise_hub_page_panel_id'
	) );

	$wp_customize->add_setting('fitness_exercise_hub_edit_no_result_title',array(
		'default'=> __('Nothing Found','fitness-exercise-hub'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('fitness_exercise_hub_edit_no_result_title',array(
		'label'	=> __('Edit Title','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_no_result_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('fitness_exercise_hub_edit_no_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','fitness-exercise-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('fitness_exercise_hub_edit_no_result_text',array(
		'label'	=> __('Edit Text','fitness-exercise-hub'),
		'section'=> 'fitness_exercise_hub_no_result_section',
		'type'=> 'text'
	));

	// Header Image Height
    $wp_customize->add_setting(
        'fitness_exercise_hub_header_image_height',
        array(
            'default'           => 350,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'fitness_exercise_hub_header_image_height',
        array(
            'label'       => esc_html__( 'Header Image Height', 'fitness-exercise-hub' ),
            'section'     => 'header_image',
            'type'        => 'number',
            'description' => esc_html__( 'Control the height of the header image. Default is 350px.', 'fitness-exercise-hub' ),
            'input_attrs' => array(
                'min'  => 220,
                'max'  => 1000,
                'step' => 1,
            ),
        )
    );

    // Header Background Position
    $wp_customize->add_setting(
        'fitness_exercise_hub_header_background_position',
        array(
            'default'           => 'center',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'fitness_exercise_hub_header_background_position',
        array(
            'label'       => esc_html__( 'Header Background Position', 'fitness-exercise-hub' ),
            'section'     => 'header_image',
            'type'        => 'select',
            'choices'     => array(
                'top'    => esc_html__( 'Top', 'fitness-exercise-hub' ),
                'center' => esc_html__( 'Center', 'fitness-exercise-hub' ),
                'bottom' => esc_html__( 'Bottom', 'fitness-exercise-hub' ),
            ),
            'description' => esc_html__( 'Choose how you want to position the header image.', 'fitness-exercise-hub' ),
        )
    );

    // Header Image Parallax Effect
    $wp_customize->add_setting(
        'fitness_exercise_hub_header_background_attachment',
        array(
            'default'           => 1,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'fitness_exercise_hub_header_background_attachment',
        array(
            'label'       => esc_html__( 'Header Image Parallax', 'fitness-exercise-hub' ),
            'section'     => 'header_image',
            'type'        => 'checkbox',
            'description' => esc_html__( 'Add a parallax effect on page scroll.', 'fitness-exercise-hub' ),
        )
    );

        //Opacity
	$wp_customize->add_setting('fitness_exercise_hub_header_banner_opacity_color',array(
       'default'              => '0.5',
       'sanitize_callback' => 'fitness_exercise_hub_sanitize_choices'
	));
    $wp_customize->add_control( 'fitness_exercise_hub_header_banner_opacity_color', array(
		'label'       => esc_html__( 'Header Image Opacity','fitness-exercise-hub' ),
		'section'     => 'header_image',
		'type'        => 'select',
		'settings'    => 'fitness_exercise_hub_header_banner_opacity_color',
		'choices' => array(
           '0' =>  esc_attr(__('0','fitness-exercise-hub')),
           '0.1' =>  esc_attr(__('0.1','fitness-exercise-hub')),
           '0.2' =>  esc_attr(__('0.2','fitness-exercise-hub')),
           '0.3' =>  esc_attr(__('0.3','fitness-exercise-hub')),
           '0.4' =>  esc_attr(__('0.4','fitness-exercise-hub')),
           '0.5' =>  esc_attr(__('0.5','fitness-exercise-hub')),
           '0.6' =>  esc_attr(__('0.6','fitness-exercise-hub')),
           '0.7' =>  esc_attr(__('0.7','fitness-exercise-hub')),
           '0.8' =>  esc_attr(__('0.8','fitness-exercise-hub')),
           '0.9' =>  esc_attr(__('0.9','fitness-exercise-hub'))
		), 
	) );

   $wp_customize->add_setting( 'fitness_exercise_hub_header_banner_image_overlay', array(
	    'default'   => true,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'fitness_exercise_hub_sanitize_checkbox',
	));
	$wp_customize->add_control( new fitness_exercise_hub_Toggle_Control( $wp_customize, 'fitness_exercise_hub_header_banner_image_overlay', array(
	    'label'   => esc_html__( 'Show / Hide Header Image Overlay', 'fitness-exercise-hub' ),
	    'section' => 'header_image',
	)));

    $wp_customize->add_setting('fitness_exercise_hub_header_banner_image_ooverlay_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fitness_exercise_hub_header_banner_image_ooverlay_color', array(
		'label'    => __('Header Image Overlay Color', 'fitness-exercise-hub'),
		'section'  => 'header_image',
	)));

    $wp_customize->add_setting(
        'fitness_exercise_hub_header_image_title_font_size',
        array(
            'default'           => 32,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'fitness_exercise_hub_header_image_title_font_size',
        array(
            'label'       => esc_html__( 'Change Header Image Title Font Size', 'fitness-exercise-hub' ),
            'section'     => 'header_image',
            'type'        => 'number',
            'description' => esc_html__( 'Control the font Size of the header image title. Default is 32px.', 'fitness-exercise-hub' ),
            'input_attrs' => array(
                'min'  => 10,
                'max'  => 200,
                'step' => 1,
            ),
        )
    );

	$wp_customize->add_setting( 'fitness_exercise_hub_header_image_title_text_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fitness_exercise_hub_header_image_title_text_color', array(
			'label'     => __('Change Header Image Title Color', 'fitness-exercise-hub'),
	    'section' => 'header_image',
	    'settings' => 'fitness_exercise_hub_header_image_title_text_color',
  	)));
}
add_action( 'customize_register', 'fitness_exercise_hub_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Fitness Exercise Hub 1.0
 * @see fitness_exercise_hub_customize_register()
 *
 * @return void
 */
function fitness_exercise_hub_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Fitness Exercise Hub 1.0
 * @see fitness_exercise_hub_customize_register()
 *
 * @return void
 */
function fitness_exercise_hub_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'FITNESS_EXERCISE_HUB_PRO_THEME_NAME' ) ) {
	define( 'FITNESS_EXERCISE_HUB_PRO_THEME_NAME', esc_html__( 'Fitness Exercise Hub Pro', 'fitness-exercise-hub' ));
}
if ( ! defined( 'FITNESS_EXERCISE_HUB_PRO_THEME_URL' ) ) {
	define( 'FITNESS_EXERCISE_HUB_PRO_THEME_URL', esc_url('https://www.themespride.com/products/exercise-wordpress-theme'));
}
if ( ! defined( 'FITNESS_EXERCISE_HUB_DOCS_URL' ) ) {
	define( 'FITNESS_EXERCISE_HUB_DOCS_URL', esc_url('https://page.themespride.com/demo/docs/fitness-exercise/'));
}


if ( ! defined( 'FITNESS_EXERCISE_HUB_TEXT' ) ) {
    define( 'FITNESS_EXERCISE_HUB_TEXT', __( 'Fitness Exercise Hub Pro','fitness-exercise-hub' ));
}
if ( ! defined( 'FITNESS_EXERCISE_HUB_BUY_TEXT' ) ) {
    define( 'FITNESS_EXERCISE_HUB_BUY_TEXT', __( 'Upgrade Pro','fitness-exercise-hub' ));
}


add_action( 'customize_register', function( $manager ) {

// Load custom sections.
load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

    $manager->register_section_type( Fitness_Exercise_Hub_Button::class );

    $manager->add_section(
        new Fitness_Exercise_Hub_Button( $manager, 'fitness_exercise_hub_pro', [
            'title'       => esc_html( FITNESS_EXERCISE_HUB_TEXT,'fitness-exercise-hub' ),
            'priority'    => 0,
            'button_text' => __( 'GET PREMIUM', 'fitness-exercise-hub' ),
            'button_url'  => esc_url( FITNESS_EXERCISE_HUB_PRO_THEME_URL )
        ] )
    );

} );
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Fitness_Exercise_Hub_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Fitness_Exercise_Hub_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Fitness_Exercise_Hub_Customize_Section_Pro(
				$manager,
				'fitness_exercise_hub_section_pro',
				array(
					'priority'   => 9,
					'title'    => FITNESS_EXERCISE_HUB_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'fitness-exercise-hub' ),
					'pro_url'  => esc_url( FITNESS_EXERCISE_HUB_PRO_THEME_URL, 'fitness-exercise-hub' ),
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new Fitness_Exercise_Hub_Customize_Section_Pro(
				$manager,
				'fitness_exercise_hub_documentation',
				array(
					'priority'   => 500,
					'title'    => esc_html__( 'Theme Documentation', 'fitness-exercise-hub' ),
					'pro_text' => esc_html__( 'Click Here', 'fitness-exercise-hub' ),
					'pro_url'  => esc_url( FITNESS_EXERCISE_HUB_DOCS_URL, 'fitness-exercise-hub'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'fitness-exercise-hub-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'fitness-exercise-hub-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Fitness_Exercise_Hub_Customize::get_instance();