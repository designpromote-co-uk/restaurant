<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
    <?php //if ( ! is_404() ) : ?>
        <div id="footer-widgets" class="widget-area three">
            <?php for( $i=5; $i<8; $i++ ) :
							$sidebar = 'sidebar-' . $i;
							$footer_widget = 'Footer Widget ' . ( $i-4 );
							if (!dynamic_sidebar($sidebar)) : //show informative text if no widegt?>
								<div class="widget">
                <div class="widget-title"><h3><?php _e( $footer_widget, 'restaurant' ); ?></h3></div>
                <div class="textwidget"><?php _e( 'Footer Widget ' . ($i-4) . ' : to edit please go to Appearance > Widgets. Title is also manageable from widgets as well.', 'restaurant'); ?></div>
            
								</div><!-- end of .widget-wrapper -->
							<?php endif; //end of home-widget-1 ?>
						<?php endfor; ?>
        </div><!-- #footer-widgets -->	
	
		<div class="site-info">
			<a href="<?php echo esc_url( admin_url() ); ?>">Admin |</a> <a href="<?php echo esc_url( __( 'http://www.designpromote.co.uk/', 'restaurant' ) ); ?>" title="<?php esc_attr_e( 'designpromote', 'restaurant' ); ?>"><?php printf( __( 'Theme by %s', 'restaurant' ), 'Designpromote Edinburgh' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>