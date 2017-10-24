<?php if ( is_active_sidebar( 'footer_area' ) ) { ?>
	<?php if ( ! is_front_page() || ( get_theme_mod( 'footer-sidebar-check', 1 ) == 1 && is_front_page() ) ) { ?>
		<div class="footer-widgets"> 
			<div class="container">		
				<div id="content-footer-section" class="row clearfix">
					<?php dynamic_sidebar( 'footer_area' ) ?>
				</div>
			</div>
		</div>
	<?php } ?>
<?php } ?>
<footer id="colophon" class="rsrc-footer" role="contentinfo">
	<div class="container">  
		<?php if ( get_theme_mod( 'footer-credits', '' ) != '' ) : ?>
			<div class="row rsrc-author-credits">
				<?php if ( get_theme_mod( 'eleganto_socials', 0 ) == 1 ) : ?>
					<div class="footer-socials text-center">
						<?php
						if ( get_theme_mod( 'eleganto_socials', 0 ) == 1 ) {
							eleganto_social_links();
						}
						?>                 
					</div>
				<?php endif; ?> 
				<p class="text-center"><?php echo get_theme_mod( 'footer-credits' ); ?> </p>
			</div>
		<?php else : ?>
			<div class="row rsrc-author-credits">
				<?php if ( get_theme_mod( 'eleganto_socials', 0 ) == 1 && get_theme_mod( 'eleganto_socials_footer', 1 ) == 1 ) : ?>
					<div class="footer-socials text-center">
						<?php eleganto_social_links(); ?>                 
					</div>
				<?php endif; ?>
				<p class="text-center">
					<?php printf( __( 'Proudly powered by %s', 'eleganto' ), '<a href="https://wordpress.org/">WordPress</a>' ); ?>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s', 'eleganto' ), '<a href="http://themes4wp.com/product/eleganto-pro/" title="One Page WordPress Theme">Eleganto</a>', 'Themes4WP' ); ?>
				</p> 
			</div>
		<?php endif; ?> 
	</div>       
</footer> 
<p id="back-top">
	<a href="#top"><span></span></a>
</p>
<!-- end main container -->
</div>
<?php wp_footer(); ?>
</body>
</html>
