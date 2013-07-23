<?php
/**
 * Template Name: Restaurant front page template
 *
 * The template for displaying pages in full-width.
 * Add class .full-width to body_class in add_filter action in functions.php
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); 
// load images in php for template development.
?>
<?php remove_filter ('the_content', 'wpautop'); ?>
	<div class="flexslider">
	<ul class="slides">
		<?php
		global $wpdb;
		$select_post_type = "SELECT post_excerpt, guid FROM $wpdb->posts WHERE post_type = 'slider'";
		$sliders = $wpdb->get_results( $select_post_type, ARRAY_A);
		if( !empty( $sliders ) ):
			foreach( $sliders as $slider ) {
				printf( '<li>' );
				printf( '<img src="%s" />', $slider['guid'] );
				if( !empty( $slider['post_excerpt'] ) ) printf( '<h2 class="flex-caption">%s</h2>', $slider['post_excerpt'] );
				printf( '</li>' );
			}
		else: 
		?>			
		<li>
			<img alt="znslider" src="<?php echo get_stylesheet_directory_uri() . '/images/chinese-restaurant.jpg'; ?>" />
			<h2 class="flex-caption">Cantonese restaurant in Edinburgh.</h2>
		</li>
		<li>
			<img alt="znslider" src="<?php echo get_stylesheet_directory_uri() . '/images/indian-restaurant.jpg'; ?>" />
			<h2 class="flex-caption">Indian restaurant in Edinburgh's high street.</h2>
		</li>
		<?php
		endif;
		?>
	</ul>
	</div> <!-- fexslider -->

	<div id="primary" class="site-content front-page">
		<div id="content" role="main">
			<?php //while( have_posts() ) : the_post(); ?>
			<?php //get_template_part( 'content', 'page' ); ?>
			<?php //endwhile; ?>

		</div>
	</div><!-- #primary -->
<?php get_sidebar('front'); ?>
<?php get_footer(); ?>