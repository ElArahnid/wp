<?php
/**
 * Template part for displaying services section
 *
 * @package Fitness Exercise Hub
 * @subpackage fitness_exercise_hub
 */

?>

<?php if(get_theme_mod('fitness_exercise_hub_services_new_tab', true) != ''){ ?>
<div id="services" class="py-5 text-center">
  <div class="container">
    <?php if( get_theme_mod( 'fitness_exercise_hub_services_heading' ) != '' ) { ?>
      <h3><?php echo esc_html( get_theme_mod( 'fitness_exercise_hub_services_heading','' ) ); ?></h3>
    <?php } ?>
    <?php if( get_theme_mod( 'fitness_exercise_hub_services_heading_text' ) != '' ) { ?>
      <p><?php echo esc_html( get_theme_mod( 'fitness_exercise_hub_services_heading_text','' ) ); ?></p>
    <?php } ?>
    <div class="row mt-5">
      <?php 
        $fitness_exercise_hub_post_category = get_theme_mod('fitness_exercise_hub_services_section_category');
        if($fitness_exercise_hub_post_category){
          $fitness_exercise_hub_page_query = new WP_Query(array( 'category_name' => esc_html( $fitness_exercise_hub_post_category ,'fitness-exercise-hub')));?>
          <?php while( $fitness_exercise_hub_page_query->have_posts() ) : $fitness_exercise_hub_page_query->the_post(); ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="services-box mb-4">
                <h5><?php the_title(); ?></h5>
                <hr>
                <p class="mb-0"><?php echo wp_trim_words( get_the_content(),15 );?></p>
                <div class="box-btn mt-4">
                  <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','fitness-exercise-hub'); ?></a>
                </div>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        }
      ?>
    </div>
  </div>
</div>
<?php } ?>