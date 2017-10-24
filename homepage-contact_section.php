<?php $section_name = 'contact'; ?>
<?php if ( get_theme_mod( $section_name . '_intro_enable', '0' ) != '0' ) : ?>
	<div class="intro">  
		<?php 
		$bg = get_theme_mod( $section_name . '_intro_img_image', '' ); 
		$img = get_theme_mod( $section_name . '_section_intro_set', 'image' );
		$parallax = get_theme_mod( 'parallax_intro', 1 );
		$image_id = attachment_url_to_postid( $bg );
		$image_attributes = wp_get_attachment_image_src( $image_id, 'full' );
		?>
		<div class="prlx <?php if ( $bg != '' && $img == 'image' && $parallax == 1 ) { echo 'img-holder'; } ?>" style="background-image: url(<?php if ( $parallax != 1 ) echo esc_url( $bg ) ?>); height:<?php if ( $parallax != 1 ) echo absint( $image_attributes[2] ) . 'px' ?>" data-image="<?php echo esc_url( $bg ); ?>" data-width="<?php echo $image_attributes[1]; ?>" data-height="<?php echo $image_attributes[2]; ?>"></div>
		<?php if ( get_theme_mod( $section_name . '_intro_title', 'Intro Title' ) != '' ) : ?>
			<h2 class="text-center"><?php echo esc_html( get_theme_mod( $section_name . '_intro_title', 'Intro Title' ) ); ?></h2>
		<?php endif; ?>
		<?php if ( get_theme_mod( $section_name . '_intro_desc', 'Intro Description' ) != '' ) : ?>
			<h3 class="text-center"><?php echo esc_html( get_theme_mod( $section_name . '_intro_desc', 'Intro Description' ) ); ?></h3> 
		<?php endif; ?>
	</div>     
<?php endif; ?>
<div class="border-top"></div>
<div class="section">  
	<div class="container">
		<div class="container-heading text-center <?php echo esc_attr( get_theme_mod( $section_name . '_section_title_style', 'title-style-one' ) ); ?>">
			<?php if ( get_theme_mod( $section_name . '_section_title', 'Section Title' ) != '' ) : ?>
				<div class="section-title">
					<h4><?php echo esc_html( get_theme_mod( $section_name . '_section_title', 'Section Title' ) ); ?></h4>
				</div>
			<?php endif; ?>
			<?php if ( get_theme_mod( $section_name . '_section_desc', 'Section Description' ) != '' ) : ?>
				<div class="sub-title"><span><?php echo esc_html( get_theme_mod( $section_name . '_section_desc', 'Section Description' ) ); ?></span></div>
			<?php endif; ?>
		</div>
	</div>

	<?php if ( get_theme_mod( 'google-map-api', '' ) != '' && get_theme_mod( 'google-map-enable', 1 ) == 1 ) : ?>
		<div id="map-canvas"></div>
	<?php endif; ?>
		
	<?php
	$columns = absint( get_theme_mod( 'contact_layout', '8' ) );
	$columns_count = 12 - $columns;
	?>

	<div class="container">
		<div class="row">
			<div class="col-sm-<?php echo $columns_count; ?> col-sm-push-<?php echo $columns; ?>">
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
				<?php if ( get_theme_mod( 'conatact_company_email', 'info@contact.com' ) != '' ) : ?>
					<address>
						<i class="fa fa-envelope"></i><strong><?php esc_html_e( ' Email Us', 'eleganto' ); ?></strong><br>
						<?php $mail = sanitize_email( get_theme_mod( 'conatact_company_email', 'info@contact.com' ) ); ?>
						<a href="mailto:<?php echo antispambot( $mail ) . '?subject=' . rawurlencode( get_theme_mod( 'conatact_company_email_subject', '' ) ); ?>"><?php echo antispambot( $mail ); ?></a>
					</address>
				<?php endif; ?> 
			</div>
			<div class="col-sm-<?php echo $columns; ?> col-sm-pull-<?php echo $columns_count; ?>">
				<?php if ( get_theme_mod( 'conatact_form', '' ) != '' ) : ?>
					<?php echo do_shortcode( '[contact-form-7 id="' . get_theme_mod( 'conatact_form' ) . '"]' ); ?>
				<?php endif; ?>
			</div>
		</div>
		<!--/row-->
	</div>
</div>  
<div class="border-bottom"></div>

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
