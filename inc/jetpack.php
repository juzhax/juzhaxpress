<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package juzhaxpress
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function juzhaxpress_jetpackjuzhaxpressetup() {
	// Add theme support for Infinite Scroll.
	add_themejuzhaxpressupport( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'juzhaxpress_infinitejuzhaxpresscroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_themejuzhaxpressupport( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_themejuzhaxpressupport( 'jetpack-content-options', array(
		'post-details'    => array(
			'stylesheet' => 'juzhaxpress-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
			'comment'    => '.comments-link',
		),
		'featured-images' => array(
			'archive'    => true,
			'post'       => true,
			'page'       => true,
		),
	) );
}
add_action( 'afterjuzhaxpressetup_theme', 'juzhaxpress_jetpackjuzhaxpressetup' );

/**
 * Custom render function for Infinite Scroll.
 */
function juzhaxpress_infinitejuzhaxpresscroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( isjuzhaxpressearch() ) :
			get_template_part( 'template-parts/content', 'search' );
		else :
			get_template_part( 'template-parts/content', get_post_type() );
		endif;
	}
}
