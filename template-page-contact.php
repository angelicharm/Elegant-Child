<?php
/**
 *
 * Template name: Contact Page
 * The template for displaying FullWidth Page.
 *
 * @package eleganto
 */
get_header();
?>

<?php get_template_part( 'template-part', 'topnav' ); ?>

<?php get_template_part( 'template-part', 'head' ); ?>

<?php
if ( get_theme_mod( 'breadcrumbs-check', 1 ) != 0 ) {
	eleganto_breadcrumb();
}
?>
<?php if ( get_theme_mod( 'google-map-api', '' ) != '' && get_theme_mod( 'google-map-enable', 1 ) == 1 ) : ?>
	<div id="map-canvas"></div>
<?php endif; ?>
<!-- start content container -->
<div class="row container rsrc-content">    
	<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="contact-content entry-content col-md-12">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
		<div class="col-sm-8">
			<?php if ( get_theme_mod( 'conatact_form', '' ) != '' ) : ?>
				<?php echo do_shortcode( '[contact-form-7 id="' . get_theme_mod( 'conatact_form' ) . '"]' ); ?>
			<?php endif; ?>
		</div>
		<div class="col-sm-4">
			<?php if ( get_theme_mod( 'conatact_company_text', '' ) != '' ) : ?>
				<p class="about-us">
					<i class="fa fa-pencil-square"></i><strong><?php esc_html_e( ' About Us', 'eleganto' ); ?></strong><br>
					<?php echo wp_kses_post( get_theme_mod( 'conatact_company_text', '' ) ); ?>
				</p> 
			<?php endif; ?>
			<?php if ( get_theme_mod( 'conatact_company_name', 'Themes4WP' ) != '' || get_theme_mod( 'conatact_company_address', 'Badenerstrasse 21<br>8004 Zurich<br>Swiss' ) != '' ) : ?> 
				<address>
					<i class="fa fa-map-marker"></i><strong><?php esc_html_e( ' Our Address', 'eleganto' ); ?></strong><br>
					<strong><?php echo esc_html( get_theme_mod( 'conatact_company_name', 'Themes4WP' ) ); ?></strong><br>
					<span id="map-input">
						<?php echo wp_kses_post( get_theme_mod( 'conatact_company_address', 'Badenerstrasse 21<br>8004 Zurich<br>Swiss' ) ); ?>
					</span>
				</address>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'conatact_company_telephone', '+41 43 143 84 17' ) != '' ) : ?>
				<address>
					<i class="fa fa-phone-square"></i><strong><?php esc_html_e( ' Phone', 'eleganto' ); ?></strong><br>
					<?php echo wp_kses_post( get_theme_mod( 'conatact_company_telephone', '+41 43 143 84 17' ) ); ?>
				</address> 
			<?php endif; ?>
			<?php if ( get_theme_mod( 'conatact_company_email', '' ) != '' ) : ?>
				<address>
					<i class="fa fa-envelope"></i><strong><?php esc_html_e( ' Email Us', 'eleganto' ); ?></strong><br>
						<?php $mail = sanitize_email( get_theme_mod( 'conatact_company_email' ) ); ?>
					<a href="mailto:#"><?php echo antispambot( $mail ); ?></a>
				</address>
			<?php endif; ?> 
		</div>
	</div>
	<!--/row-->
</div>
<!-- end content container -->

<?php get_template_part( 'template-part', 'footernav' ); ?>

<?php get_footer(); ?>
<?php if ( get_theme_mod( 'google-map-api', '' ) != '' && get_theme_mod( 'google-map-enable', 1 ) == 1 ) : ?>
	<script src="https://maps.google.com/maps/api/js?key=<?php echo get_theme_mod( 'google-map-api', '' ); ?>" type="text/javascript"></script>
	<script type="text/javascript">
		/* google maps */
		jQuery( function ( $ ) {
			google.maps.visualRefresh = true;

			var map;
			function initialize() {
				var geocoder = new google.maps.Geocoder();
				var address = $( '#map-input' ).text(); /* change the map-input to your address */
				var mapOptions = {
					scrollwheel: false,
					zoom: 15,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map( document.getElementById( 'map-canvas' ), mapOptions );

				if ( geocoder ) {
					geocoder.geocode( { 'address': address }, function ( results, status ) {
						if ( status == google.maps.GeocoderStatus.OK ) {
							if ( status != google.maps.GeocoderStatus.ZERO_RESULTS ) {
								map.setCenter( results[0].geometry.location );

								var infowindow = new google.maps.InfoWindow(
									{
										content: address,
										map: map,
										position: results[0].geometry.location,
									} );

								var marker = new google.maps.Marker( {
									position: results[0].geometry.location,
									map: map,
									title: address
								} );

							} else {
								alert( "No results found" );
							}
						}
					} );
				}
			}
			google.maps.event.addDomListener( window, 'load', initialize );
		} );
		/* end google maps */
	</script>
<?php endif; ?> 
