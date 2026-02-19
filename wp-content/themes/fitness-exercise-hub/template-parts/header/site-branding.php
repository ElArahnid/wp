<?php
/*
* Display Logo and nav
*/
?>

<?php
  $fitness_exercise_hub_sticky = get_theme_mod('fitness_exercise_hub_sticky');
  $data_sticky = "false";
  if ($fitness_exercise_hub_sticky) {
  $data_sticky = "true";
  }
  global $wp_customize;
?>

<div class="headerbox py-2 <?php if( is_user_logged_in() && !isset( $wp_customize ) ){ echo "login-user";} ?>" data-sticky="<?php echo esc_attr($data_sticky); ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-3 align-self-center col-9">
        <?php $fitness_exercise_hub_logo_settings = get_theme_mod( 'fitness_exercise_hub_logo_settings','Different Line');
        if($fitness_exercise_hub_logo_settings == 'Different Line'){ ?>
          <div class="logo mb-md-0">
            <?php if( has_custom_logo() ) fitness_exercise_hub_the_custom_logo(); ?>
            <?php if(get_theme_mod('fitness_exercise_hub_site_title',true) == 1){ ?>
              <?php if (is_front_page() && is_home()) : ?>
                <h1 class="text-capitalize">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </h1> 
              <?php else : ?>
                  <p class="text-capitalize site-title">
                      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                  </p>
              <?php endif; ?>
            <?php }?>
            <?php $fitness_exercise_hub_description = get_bloginfo( 'description', 'display' );
            if ( $fitness_exercise_hub_description || is_customize_preview() ) : ?>
              <?php if(get_theme_mod('Fitness_Exercise_Hub_tagline_text',false)){ ?>
                <p class="site-description mb-0"><?php echo esc_html($fitness_exercise_hub_description); ?></p>
              <?php }?>
            <?php endif; ?>
          </div>
        <?php }else if($fitness_exercise_hub_logo_settings == 'Same Line'){ ?>
          <div class="logo logo-same-line mb-md-0">
            <div class="row">
              <div class="col-lg-5 col-md-5 align-self-md-center">
                <?php if( has_custom_logo() ) fitness_exercise_hub_the_custom_logo(); ?>
              </div>
              <div class="col-lg-7 col-md-7 align-self-md-center">
                <?php if(get_theme_mod('fitness_exercise_hub_site_title',true) == 1){ ?>
                  <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php }?>
                <?php $fitness_exercise_hub_description = get_bloginfo( 'description', 'display' );
                if ( $fitness_exercise_hub_description || is_customize_preview() ) : ?>
                 <?php if(get_theme_mod('Fitness_Exercise_Hub_tagline_text',false)){ ?>
                    <p class="site-description mb-0"><?php echo esc_html($fitness_exercise_hub_description); ?></p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="col-lg-6 col-md-2 col-sm-2 col-3 align-self-center">
        <?php
          get_template_part( 'template-parts/navigation/site', 'nav' );
        ?>
      </div>
      <div class="search-box col-lg-2 col-md-4 col-sm-4 align-self-center text-center text-md-end">
        <?php if(get_theme_mod('fitness_exercise_hub_search_icon',true) != ''){ ?>
          <div class="search_inner my-3 my-md-0">
            <?php get_search_form(); ?>
          </div>
        <?php }?>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 align-self-center">
        <div class="media-links text-center text-md-end">
          <?php                 
            $fitness_exercise_hub_header_fb_new_tab = esc_attr(get_theme_mod('fitness_exercise_hub_header_fb_new_tab','true'));
            $fitness_exercise_hub_header_twt_new_tab = esc_attr(get_theme_mod('fitness_exercise_hub_header_twt_new_tab','true'));
            $fitness_exercise_hub_header_ins_new_tab = esc_attr(get_theme_mod('fitness_exercise_hub_header_ins_new_tab','true'));
            $fitness_exercise_hub_header_ut_new_tab = esc_attr(get_theme_mod('fitness_exercise_hub_header_ut_new_tab','true'));
            $fitness_exercise_hub_header_pint_new_tab = esc_attr(get_theme_mod('fitness_exercise_hub_header_pint_new_tab','true'));
            ?>
          <?php if( get_theme_mod( 'fitness_exercise_hub_facebook_url' ) != '' || get_theme_mod( 'fitness_exercise_hub_twitter_url' ) != '' || get_theme_mod( 'fitness_exercise_hub_instagram_url' ) != '' || get_theme_mod( 'fitness_exercise_hub_youtube_url' ) != '' || get_theme_mod( 'fitness_exercise_hub_pint_url' ) != '') { ?>
            <?php if( get_theme_mod( 'fitness_exercise_hub_facebook_url' ) != '') { ?>
              <a <?php if($fitness_exercise_hub_header_fb_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'fitness_exercise_hub_facebook_url','' ) ); ?>">
                <i class="<?php echo esc_attr(get_theme_mod('fitness_exercise_hub_facebook_icon','fab fa-facebook-f')); ?> me-2"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'fitness_exercise_hub_twitter_url' ) != '') { ?>
              <a <?php if($fitness_exercise_hub_header_twt_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'fitness_exercise_hub_twitter_url','' ) ); ?>">
                <i class="<?php echo esc_attr(get_theme_mod('fitness_exercise_hub_twitter_icon','fab fa-twitter')); ?> me-2"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'fitness_exercise_hub_instagram_url' ) != '') { ?>
              <a <?php if($fitness_exercise_hub_header_ins_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'fitness_exercise_hub_instagram_url','' ) ); ?>">
                <i class="<?php echo esc_attr(get_theme_mod('fitness_exercise_hub_instagram_icon','fab fa-instagram')); ?> me-2"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'fitness_exercise_hub_youtube_url' ) != '') { ?>
              <a <?php if($fitness_exercise_hub_header_ut_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'fitness_exercise_hub_youtube_url','' ) ); ?>">
                <i class="<?php echo esc_attr(get_theme_mod('fitness_exercise_hub_youtube_icon','fab fa-youtube')); ?> me-2"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'fitness_exercise_hub_pint_url' ) != '') { ?>
              <a <?php if($fitness_exercise_hub_header_pint_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'fitness_exercise_hub_pint_url','' ) ); ?>">
                <i class="<?php echo esc_attr(get_theme_mod('fitness_exercise_hub_pint_icon','fab fa-pinterest')); ?> me-2"></i></a>
            <?php } ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>