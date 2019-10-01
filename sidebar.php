<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package juzhaxpress
 */

if ( ! is_activejuzhaxpressidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamicjuzhaxpressidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
