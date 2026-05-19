<?php
add_action( 'admin_menu', 'grocerymart_getting_started' );
function grocerymart_getting_started() {
	add_theme_page( esc_html__('Get Started', 'grocerymart'), esc_html__('Get Started', 'grocerymart'), 'edit_theme_options', 'grocerymart-guide-page', 'grocerymart_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function grocerymart_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'grocerymart_admin_theme_style');

//guidline for about theme
function grocerymart_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'grocerymart' );
?>
	<div class="wrapper-outer">
		<div class="left-main-box">
			<div class="intro"><h3><?php echo esc_html( $theme->Name ); ?></h3></div>
			<div class="left-inner">
				<div class="about-wrapper">
					<div class="col-left">
						<p><?php echo esc_html( $theme->get( 'Description' ) ); ?></p>
					</div>
					<div class="col-right">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
					</div>
				</div>
				<div class="link-wrapper">
					<h4><?php esc_html_e('Important Links', 'grocerymart'); ?></h4>
					<div class="link-buttons">
						<a class="visit-btn" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Site', 'grocerymart'); ?></a>
						<a href="<?php echo esc_url( GROCERYMART_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Free Setup Guide', 'grocerymart'); ?></a>
						<a href="<?php echo esc_url( GROCERYMART_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'grocerymart'); ?></a>
						<a href="<?php echo esc_url( GROCERYMART_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'grocerymart'); ?></a>
						<a href="<?php echo esc_url( GROCERYMART_PRO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Setup Guide', 'grocerymart'); ?></a>
					</div>
				</div>
				<div class="support-wrapper">
					<div class="editor-box">
						<i class="dashicons dashicons-admin-appearance"></i>
						<h4><?php esc_html_e('Theme Customization', 'grocerymart'); ?></h4>
						<p><?php esc_html_e('Effortlessly modify & maintain your site using editor.', 'grocerymart'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_blank"><?php esc_html_e('Site Editor', 'grocerymart'); ?></a>
						</div>
					</div>
					<div class="support-box">
						<i class="dashicons dashicons-microphone"></i>
						<h4><?php esc_html_e('Need Support?', 'grocerymart'); ?></h4>
						<p><?php esc_html_e('Go to our support forum to help you in case of queries.', 'grocerymart'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( GROCERYMART_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Get Support', 'grocerymart'); ?></a>
						</div>
					</div>
					<div class="review-box">
						<i class="dashicons dashicons-star-filled"></i>
						<h4><?php esc_html_e('Leave Us A Review', 'grocerymart'); ?></h4>
						<p><?php esc_html_e('Are you enjoying Our Theme? We would Love to hear your Feedback.', 'grocerymart'); ?></p>
						<div class="support-button">
							<a class="button button-primary" href="<?php echo esc_url( GROCERYMART_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate Us', 'grocerymart'); ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="go-premium-box">
				<h4><?php esc_html_e('Why Go For Premium?', 'grocerymart'); ?></h4>
				<ul class="pro-list">
					<li><?php esc_html_e('Advanced Customization Options', 'grocerymart');?></li>
					<li><?php esc_html_e('One-Click Demo Import', 'grocerymart');?></li>
					<li><?php esc_html_e('WooCommerce Integration & Enhanced Features', 'grocerymart');?></li>
					<li><?php esc_html_e('Performance Optimization & SEO-Ready', 'grocerymart');?></li>
					<li><?php esc_html_e('Premium Support & Regular Updates', 'grocerymart');?></li>
				</ul>
			</div>
		</div>
		<div class="right-main-box">
			<div class="right-inner">
				<div class="pro-boxes">
					<h4><?php esc_html_e('Get Theme Bundle', 'grocerymart'); ?></h4>
					<p><?php esc_html_e('60+ Premium WordPress Themes', 'grocerymart'); ?></p>
					<p class="main-bundle-price" ><strong class="cancel-bundle-price"><?php esc_html_e('$2340', 'grocerymart'); ?></strong><span class="bundle-price"><?php esc_html_e('$86', 'grocerymart'); ?></span></p>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/bundle.png" alt="bundle image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'grocerymart'); ?><strong><?php esc_html_e('Extra 20%', 'grocerymart'); ?></strong><?php esc_html_e(' OFF on WordPress Theme Bundle Use Code: ', 'grocerymart'); ?><strong><?php esc_html_e('“HEAT20”', 'grocerymart'); ?></strong></p>
					<a href="<?php echo esc_url( GROCERYMART_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Theme Bundle For ', 'grocerymart'); ?><span><?php esc_html_e('$86', 'grocerymart'); ?></a>
				</div>
				<div class="pro-boxes pro-theme-container">
					<h4><?php esc_html_e('Grocerymart Pro', 'grocerymart'); ?></h4>
					<p class="pro-theme-price" ><?php esc_html_e('$39', 'grocerymart'); ?></p>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/premium.png" alt="premium image" />
					<p><?php esc_html_e('SUMMER SALE: ', 'grocerymart'); ?><strong><?php esc_html_e('Extra 25%', 'grocerymart'); ?></strong><?php esc_html_e(' OFF on WordPress Block Themes! Use Code: ', 'grocerymart'); ?><strong><?php esc_html_e('“SUMMER25”', 'grocerymart'); ?></strong></p>
					<a href="<?php echo esc_url( GROCERYMART_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade To Pro At Just at $29.25', 'grocerymart'); ?></a>
				</div>
				<div class="pro-boxes last-pro-box">
					<h4><?php esc_html_e('View All Our Themes', 'grocerymart'); ?></h4>
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/all-themes.png" alt="all themes image" />
					<a href="<?php echo esc_url( GROCERYMART_PRO_ALL_THEMES ); ?>" target="_blank"><?php esc_html_e('View All Our Premium Themes', 'grocerymart'); ?></a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>