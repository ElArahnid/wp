<?php
/**
 * Template part for displaying slider section
 *
 * @package Fitness Exercise Hub
 * @subpackage fitness_exercise_hub
 */

?>
<?php $fitness_exercise_hub_static_image= get_stylesheet_directory_uri() . '/assets/images/slider-img.png'; ?>
<?php if( get_theme_mod( 'fitness_exercise_hub_slider_arrows', true) != '') { ?>

<section id="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <?php $fitness_exercise_hub_slide_pages = array();
      for ( $fitness_exercise_hub_count = 1; $fitness_exercise_hub_count <= 3; $fitness_exercise_hub_count++ ) {
        $fitness_exercise_hub_mod = intval( get_theme_mod( 'fitness_exercise_hub_slider_page' . $fitness_exercise_hub_count ));
        if ( 'page-none-selected' != $fitness_exercise_hub_mod ) {
          $fitness_exercise_hub_slide_pages[] = $fitness_exercise_hub_mod;
        }
      }
      if( !empty($fitness_exercise_hub_slide_pages) ) :
        $fitness_exercise_hub_args = array(
          'post_type' => 'page',
          'post__in' => $fitness_exercise_hub_slide_pages,
          'orderby' => 'post__in'
        );
        $fitness_exercise_hub_query = new WP_Query( $fitness_exercise_hub_args );
        if ( $fitness_exercise_hub_query->have_posts() ) :
          $fitness_exercise_hub_i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php  while ( $fitness_exercise_hub_query->have_posts() ) : $fitness_exercise_hub_query->the_post(); ?>
        <div <?php if($fitness_exercise_hub_i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php if(has_post_thumbnail()){ ?>
             <img src="<?php the_post_thumbnail_url('full'); ?>"/>
             <?php }else {echo ('<img src="'.$fitness_exercise_hub_static_image.'">'); } ?>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <?php if( get_theme_mod( 'fitness_exercise_hub_slider_top') != '') { ?>
                <p class="slider-top"><?php echo esc_html( get_theme_mod('fitness_exercise_hub_slider_top','')); ?></p>
              <?php } ?>
              <?php if (get_theme_mod('fitness_exercise_hub_show_slider_title', true)) : ?>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <?php endif; ?>
              <?php if (get_theme_mod('fitness_exercise_hub_show_slider_content', true)) : ?>
                <p><?php echo wp_trim_words( get_the_content(),15 );?></p>
              <?php endif; ?>
                <div class="more-btn">
                  <a href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','fitness-exercise-hub'); ?></a>
                </div>
            </div>
          </div>
        </div>
      <?php $fitness_exercise_hub_i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
    </a>
  </div>
  <div class="clearfix"></div>
</section>

<?php } ?>
