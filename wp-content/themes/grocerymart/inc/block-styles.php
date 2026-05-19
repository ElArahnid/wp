<?php
/**
 * Block Styles
 *
 * @package grocerymart
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function grocerymart_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'grocerymart-padding-0',
				'label' => esc_html__( 'No Padding', 'grocerymart' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'grocerymart-post-author-card',
				'label' => esc_html__( 'Theme Style', 'grocerymart' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'grocerymart-button',
				'label'        => esc_html__( 'Plain', 'grocerymart' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'grocerymart-post-comments',
				'label'        => esc_html__( 'Theme Style', 'grocerymart' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'grocerymart-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'grocerymart' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'grocerymart-wp-table',
				'label'        => esc_html__( 'Theme Style', 'grocerymart' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'grocerymart-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'grocerymart' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'grocerymart-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'grocerymart' ),
			)
		);
	}
	add_action( 'init', 'grocerymart_register_block_styles' );
}
