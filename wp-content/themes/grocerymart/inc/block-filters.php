<?php
/**
 * Block Filters
 *
 * @package grocerymart
 * @since 1.0
 */

function grocerymart_block_wrapper( $grocerymart_block_content, $grocerymart_block ) {

	if ( 'core/button' === $grocerymart_block['blockName'] ) {
		
		if( isset( $grocerymart_block['attrs']['className'] ) && strpos( $grocerymart_block['attrs']['className'], 'has-arrow' ) ) {
			$grocerymart_block_content = str_replace( '</a>', grocerymart_get_svg( array( 'icon' => esc_attr( 'caret-circle-right' ) ) ) . '</a>', $grocerymart_block_content );
			return $grocerymart_block_content;
		}
	}

	if( ! is_single() ) {
	
		if ( 'core/post-terms'  === $grocerymart_block['blockName'] ) {
			if( 'post_tag' === $grocerymart_block['attrs']['term'] ) {
				$grocerymart_block_content = str_replace( '<div class="taxonomy-post_tag wp-block-post-terms">', '<div class="taxonomy-post_tag wp-block-post-terms flex">' . grocerymart_get_svg( array( 'icon' => esc_attr( 'tags' ) ) ), $grocerymart_block_content );
			}

			if( 'category' ===  $grocerymart_block['attrs']['term'] ) {
				$grocerymart_block_content = str_replace( '<div class="taxonomy-category wp-block-post-terms">', '<div class="taxonomy-category wp-block-post-terms flex">' . grocerymart_get_svg( array( 'icon' => esc_attr( 'category' ) ) ), $grocerymart_block_content );
			}
			return $grocerymart_block_content;
		}
		if ( 'core/post-date' === $grocerymart_block['blockName'] ) {
			$grocerymart_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . grocerymart_get_svg( array( 'icon' => esc_attr( 'calendar' ) ) ), $grocerymart_block_content );
			return $grocerymart_block_content;
		}
		if ( 'core/post-author' === $grocerymart_block['blockName'] ) {
			$grocerymart_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . grocerymart_get_svg( array( 'icon' => esc_attr( 'user' ) ) ), $grocerymart_block_content );
			return $grocerymart_block_content;
		}
	}
	if( is_single() ){

		// Add chevron icon to the navigations
		if ( 'core/post-navigation-link' === $grocerymart_block['blockName'] ) {
			if( isset( $grocerymart_block['attrs']['type'] ) && 'previous' === $grocerymart_block['attrs']['type'] ) {
				$grocerymart_block_content = str_replace( '<span class="post-navigation-link__label">', '<span class="post-navigation-link__label">' . grocerymart_get_svg( array( 'icon' => esc_attr( 'prev' ) ) ), $grocerymart_block_content );
			}
			else {
				$grocerymart_block_content = str_replace( '<span class="post-navigation-link__label">Next Post', '<span class="post-navigation-link__label">Next Post' . grocerymart_get_svg( array( 'icon' => esc_attr( 'next' ) ) ), $grocerymart_block_content );
			}
			return $grocerymart_block_content;
		}
		if ( 'core/post-date' === $grocerymart_block['blockName'] ) {
            $grocerymart_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . grocerymart_get_svg( array( 'icon' => 'calendar' ) ), $grocerymart_block_content );
            return $grocerymart_block_content;
        }
		if ( 'core/post-author' === $grocerymart_block['blockName'] ) {
            $grocerymart_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . grocerymart_get_svg( array( 'icon' => 'user' ) ), $grocerymart_block_content );
            return $grocerymart_block_content;
        }

	}
    return $grocerymart_block_content;
}
	
add_filter( 'render_block', 'grocerymart_block_wrapper', 10, 2 );
