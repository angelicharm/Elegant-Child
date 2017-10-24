<?php
$repeater_value = get_theme_mod( 'repeater_slider', array(
	array(
		'slider_image'	 => get_template_directory_uri() . '/img/demo/slider-bg.jpg',
		'slider_title'	 => 'Eleganto Business Theme',
		'slider_desc'	 => 'Eleganto is a Free One Page WordPress Theme with unlimited colors, homepage layouts, parallax effects, awesome slider, more than 100 theme options, portfolio section, and much more. This free One Page WordPress Theme is perfect for any business site!',
		'slider_url'	 => '#',
	),
	array(
		'slider_image'	 => get_template_directory_uri() . '/img/demo/slider-bg2.jpg',
		'slider_title'	 => 'Unlimited colors and layout',
		'slider_desc'	 => 'Eleganto is an elegant theme for WordPress business / corporate sites. One Page design, portfolio, parallax effects, contact form and awesome animations make this free OnePage WordPress theme perfect for any kind of business, creative, corporate, photography, portfolio websites.',
		'slider_url'	 => '#',
	),
) );
?>
<?php if ( $repeater_value ) : ?>
	<section id="slider" class="content">
	    <div class="flexslider-container">
			<div class="homepage-slider flexslider" data-animation="<?php echo get_theme_mod( 'slider_animation', 'slide' ) ?>" data-interval="<?php echo get_theme_mod( 'slider_interval', 7000 ) ?>">
				<ul class="slides">
					<?php foreach ( $repeater_value as $row ) : ?>
						<?php if ( isset( $row[ 'slider_image' ] ) && !empty( $row[ 'slider_image' ] ) ) : ?>
							<?php $image_id = wp_get_attachment_url( $row[ 'slider_image' ] ); ?>                                                  
							<li style="background-image: url(<?php
							if ( $image_id ) {
								echo esc_url( $image_id );
							} else {
								echo esc_url( $row[ 'slider_image' ] );
							}
							?>);" >
								<div class="flexslider-inner <?php echo get_theme_mod( 'slider_caption_style', 'caption-one' ); ?>">
									<?php if ( isset( $row[ 'slider_title' ] ) && !empty( $row[ 'slider_title' ] ) ) : ?>
										<h2 class="flexslider-title">
											<?php echo esc_html( $row[ 'slider_title' ] ); ?>
										</h2>
									<?php endif; ?>
									<?php if ( isset( $row[ 'slider_desc' ] ) && !empty( $row[ 'slider_desc' ] ) ) : ?>
										<p class="flexslider-desc hidden-xs">
											<?php echo esc_html( $row[ 'slider_desc' ] ); ?>
										</p>
									<?php endif; ?>
									<?php if ( isset( $row[ 'slider_url' ] ) && !empty( $row[ 'slider_url' ] ) ) : ?>
										<a class="btn btn-default btn-sm" href="<?php echo esc_url_raw( $row[ 'slider_url' ] ); ?>">
											<?php esc_html_e( 'Read More', 'eleganto' ); ?>  
										</a>
									<?php endif; ?>
								</div>
							</li>
						<?php endif; ?> 
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</section>
<?php endif; ?>