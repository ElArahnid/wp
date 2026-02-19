<?php
/**
 * The template for displaying the footer
 *
 * @package Fitness Exercise Hub
 * @subpackage fitness_exercise_hub
 */

?>
<footer id="footer" class="site-footer" role="contentinfo">
	<?php
		get_template_part( 'template-parts/footer/footer', 'widgets' );

		get_template_part( 'template-parts/footer/site', 'info' );
	?>
		<div class="return-to-header">
			<a href="javascript:" id="return-to-top">
			<i class="<?php echo esc_attr(get_theme_mod('fitness_exercise_hub_return_icon','fas fa-arrow-up')); ?> me-2"></i></a>
		</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
