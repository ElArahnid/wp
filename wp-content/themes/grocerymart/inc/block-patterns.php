<?php
/**
 * Block Patterns
 *
 * @package grocerymart
 * @since 1.0
 */

function grocerymart_register_block_patterns() {
	$grocerymart_block_pattern_categories = array(
		'grocerymart' => array( 'label' => esc_html__( 'Grocerymart', 'grocerymart' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'grocerymart' ) ),
	);

	$grocerymart_block_pattern_categories = apply_filters( 'grocerymart_grocerymart_block_pattern_categories', $grocerymart_block_pattern_categories );

	foreach ( $grocerymart_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'grocerymart_register_block_patterns', 9 );