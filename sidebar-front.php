<?php
/**
 * The sidebar containing the front page widget areas.
 *
 * If no active widgets in either sidebar, they will be hidden completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
//if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) )
	//return;

// If we get this far, we have widgets. Let do this.
?>
<div id="secondary" class="home-widget" role="complementary">
	<?php if( !dynamic_sidebar( 'sidebar-2' ) ) : //show informative text if no widget ?>
		<div class="widget">
		<h3 class="widget-title"><?php _e( 'About restaurant', 'restaurant' ); ?></h3>
		<div class="textwidget">
		<a href="#"><img alt="about us" src="<?php _e( get_stylesheet_directory_uri() . '/images/about-us.jpg' ); ?>" /></a>
		<?php _e('Front Widget 1 : to edit please go to Appearance > Widgets and choose Front Widget 1. Title is also manageable from widgets as well.', 'restaurant'); ?></div>
		</div><!-- .widget -->
	<?php endif; ?>

	<?php if( !dynamic_sidebar( 'sidebar-3' ) ) : ?>
		<div class="widget">
		<h3 class="widget-title"><?php _e( 'Explore our food menu', 'restaurant' ); ?></h3>
		<div class="textwidget">
		<a href="#"><img alt="food menu" src="<?php _e( get_stylesheet_directory_uri() . '/images/food-menu.jpg' ); ?>" /></a>
		<?php _e('Front Widget 2 : to edit please go to Appearance > Widgets and choose Front Widget 2. Title is also manageable from widgets as well.', 'restaurant'); ?></div>
		</div><!-- .widget -->
	<?php endif; ?>

	<?php if( !dynamic_sidebar( 'sidebar-4' ) ) : ?>
		<div class="widget">
		<h3 class="widget-title"><?php _e( 'Book online', 'restaurant' ); ?></h3>
		<div class="textwidget">
		<a href="#"><img alt="booking online" src="<?php _e( get_stylesheet_directory_uri() . '/images/booking.jpg' ); ?>" /></a>
		<?php _e('Front Widget 3 : to edit please go to Appearance > Widgets and choose Front Widget 3. Title is also manageable from widgets as well.', 'restaurant'); ?></div>
		</div><!-- .widget -->
	<?php endif; ?>
</div><!-- #secondary -->