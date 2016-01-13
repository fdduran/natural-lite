<?php
/**
* The footer for our theme.
* This template is used to generate the footer for the theme.
*
* @package Natural Lite
* @since Natural Lite 3.0
*
*/
?>

<div class="clear"></div>

<!-- BEGIN .footer -->
<div class="footer radius-top shadow">

	<?php if ( is_active_sidebar('footer') ) { ?>
	
	<!-- BEGIN .row -->
	<div class="row">
	
		<!-- BEGIN .footer-widgets -->
		<div class="footer-widgets">
	
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) : ?>
			<?php endif; ?>
		
		<!-- END .footer-widgets -->
		</div>
	
	<!-- END .row -->
	</div>
	
	<?php } ?>
	
	<!-- BEGIN .row -->
	<div class="row">
		
		<!-- BEGIN .footer-information -->
		<div class="footer-information">
		
			<!-- BEGIN .footer-content -->
			<div class="footer-content">
		
				<div class="align-left">
					<p><?php esc_html_e("Copyright", 'natural-lite'); ?> &copy; <?php echo date( esc_html__("Y", 'natural-lite')); ?> &middot; <?php esc_html_e("All Rights Reserved", 'natural-lite'); ?> &middot; <?php bloginfo('name'); ?></p>
					<p><a href="http://www.organicthemes.com/themes/" target="_blank"><?php esc_html_e("Natural Lite", 'natural-lite'); ?></a> <?php esc_html_e("by", 'natural-lite'); ?> <a href="http://www.organicthemes.com" target="_blank"><?php esc_html_e("Organic Themes", 'natural-lite'); ?></a> &middot; <a href="http://kahunahost.com" target="_blank" title="WordPress Hosting"><?php esc_html_e("WordPress Hosting", 'natural-lite'); ?></a> &middot; <a href="<?php bloginfo('rss2_url'); ?>"><?php esc_html_e("RSS Feed", 'natural-lite'); ?></a> &middot; <?php wp_loginout(); ?></p>
				</div>
				
				<?php if ( has_nav_menu( 'social-menu' ) ) { ?>
				
				<div class="align-right">
						
					<?php wp_nav_menu( array(
						'theme_location' => 'social-menu',
						'title_li' => '',
						'depth' => 1,
						'container_class' => 'social-menu',
						'menu_class'      => 'social-icons',
						'link_before'     => '<span>',
						'link_after'      => '</span>',
						)
					); ?>
					
				</div>
				
				<?php } ?>
		
			<!-- END .footer-content -->
			</div>
		
		<!-- END .footer-information -->
		</div>
	
	<!-- END .row -->
	</div>

<!-- END .footer -->
</div>

<!-- END .container -->
</div>

<!-- END #wrap -->
</div>

<?php wp_footer(); ?>

</body>
</html>