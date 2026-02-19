<?php
/**
 * Template part for displaying schedule section
 *
 * @package Fitness Exercise Hub
 * @subpackage fitness_exercise_hub
 */

?>
<?php if(get_theme_mod('fitness_exercise_hub_timing_on_off', true) != ''){ ?>
<?php if( get_theme_mod( 'fitness_exercise_hub_schedule_icon1' ) != '' || get_theme_mod( 'fitness_exercise_hub_schedule_title1' ) != '' || get_theme_mod( 'fitness_exercise_hub_schedule_text1' ) != ''|| get_theme_mod( 'color2' ) != '' || get_theme_mod( 'fitness_exercise_hub_schedule_icon1' ) != '' || get_theme_mod( 'fitness_exercise_hub_schedule_title2' ) != '' || get_theme_mod( 'fitness_exercise_hub_schedule_text2' ) != '' || get_theme_mod( 'fitness_exercise_hub_schedule_icon3' ) != '' || get_theme_mod( 'fitness_exercise_hub_schedule_title3' ) != '' || get_theme_mod( 'fitness_exercise_hub_schedule_text3' ) != '') { ?>

<div id="schedule" class="text-center">
  <div class="row m-0">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 color1">
          <?php if( get_theme_mod( 'fitness_exercise_hub_schedule_icon1' ) != '' ) { ?>
            <i class="<?php echo esc_attr( get_theme_mod( 'fitness_exercise_hub_schedule_icon1','' ) ); ?>"></i>
          <?php } ?>
          <?php if( get_theme_mod( 'fitness_exercise_hub_schedule_title1' ) != '' ) { ?>
            <h5><?php echo esc_html( get_theme_mod( 'fitness_exercise_hub_schedule_title1','' ) ); ?></h5>
          <?php } ?>
          <?php if( get_theme_mod( 'fitness_exercise_hub_schedule_text1' ) != '' ) { ?>
            <p><?php echo esc_html( get_theme_mod( 'fitness_exercise_hub_schedule_text1','' ) ); ?></p>
          <?php } ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 color1 color2">
          <?php if( get_theme_mod( 'fitness_exercise_hub_schedule_icon2' ) != '' ) { ?>
            <i class="<?php echo esc_attr( get_theme_mod( 'fitness_exercise_hub_schedule_icon2','' ) ); ?>"></i>
          <?php } ?>
          <?php if( get_theme_mod( 'fitness_exercise_hub_schedule_title2' ) != '' ) { ?>
            <h5><?php echo esc_html( get_theme_mod( 'fitness_exercise_hub_schedule_title2','' ) ); ?></h5>
          <?php } ?>
          <?php if( get_theme_mod( 'fitness_exercise_hub_schedule_text2' ) != '' ) { ?>
            <p><?php echo esc_html( get_theme_mod( 'fitness_exercise_hub_schedule_text2','' ) ); ?></p>
          <?php } ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 color1">
          <?php if( get_theme_mod( 'fitness_exercise_hub_schedule_icon3' ) != '' ) { ?>
            <i class="<?php echo esc_attr( get_theme_mod( 'fitness_exercise_hub_schedule_icon3','' ) ); ?>"></i>
          <?php } ?>
          <?php if( get_theme_mod( 'fitness_exercise_hub_schedule_title3' ) != '' ) { ?>
            <h5><?php echo esc_html( get_theme_mod( 'fitness_exercise_hub_schedule_title3','' ) ); ?></h5>
          <?php } ?>
          <?php if( get_theme_mod( 'fitness_exercise_hub_schedule_text3' ) != '' ) { ?>
            <p><?php echo esc_html( get_theme_mod( 'fitness_exercise_hub_schedule_text3','' ) ); ?></p>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php } ?>
<?php } ?>