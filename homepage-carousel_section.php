<?php $section_name = 'carousel'; ?>
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
		<?php
		$repeater_value = get_theme_mod( 'repeater_carousel', array(
			array(
				$section_name . '_image' => get_template_directory_uri() . '/img/demo/carousel/carousel-img1.png',
				$section_name . '_title' => 'Parallax Effect',
				$section_name . '_desc'	 => 'Eleganto includes Parallax effect where the background image, is moved at a different speed than the foreground content while scrolling',
				$section_name . '_url'	 => '',
			),
			array(
				$section_name . '_image' => get_template_directory_uri() . '/img/demo/carousel/carousel-img3.png',
				$section_name . '_title' => 'Portfolio Section',
				$section_name . '_desc'	 => 'A portfolio is much more than a simple section, its personality is as important as the projects displayed on it, specially remarkable for young projects and agencies.',
				$section_name . '_url'	 => '',
			),
			array(
				$section_name . '_image' => get_template_directory_uri() . '/img/demo/carousel/carousel-img4.png',
				$section_name . '_title' => 'Homepage Styles',
				$section_name . '_desc'	 => 'You can styling your homepage via theme option panel. Enable or disable homepage sections, set the colors, headings, backgrounds and much more...',
				$section_name . '_url'	 => '',
			),
			array(
				$section_name . '_image' => get_template_directory_uri() . '/img/demo/carousel/carousel-img2.png',
				$section_name . '_title' => 'Options Panel',
				$section_name . '_desc'	 => 'Eleganto is easy to customize based on WordPress Customizer. More than 100 theme options. Try it for free, check the documentation.',
				$section_name . '_url'	 => '',
			),
			array(
				$section_name . '_image' => get_template_directory_uri() . '/img/demo/carousel/carousel-img.png',
				$section_name . '_title' => 'OnePage Theme',
				$section_name . '_desc'	 => 'Eleganto is a One Page WordPress Theme for any kind of business sites.',
				$section_name . '_url'	 => '',
			),
		) );
		?>
		<?php if ( $repeater_value ) : ?>
			<div id="carousel-home" class="flexslider carousel-loading" data-columns="<?php echo absint( get_theme_mod( 'carousel_row', '4' ) ) ?>" data-interval="<?php echo get_theme_mod( 'carousel_interval', 7000 ) ?>" data-start="<?php echo get_theme_mod( 'carousel_autostart', 'true' ) ?>" data-loop="<?php echo get_theme_mod( 'carousel_loop', 'false' ) ?>">
				<ul class="slides">
					<?php foreach ( $repeater_value as $row ) : ?>
						<?php $image_thumb = wp_get_attachment_image( $row[ $section_name . '_image' ], 'eleganto-square' ); ?> 
						<li class="carousel-item text-center">
							<?php if ( isset( $row[ $section_name . '_image' ] ) && !empty( $row[ $section_name . '_image' ] ) ) : ?>
								<?php
								if ( $image_thumb ) {
									echo $image_thumb;
								} else {
									echo '<img src="' . esc_url( $row[ $section_name . '_image' ] ) . '" alt="">';
								}
								?>
							<?php endif; ?>
							<?php if ( isset( $row[ $section_name . '_title' ] ) && !empty( $row[ $section_name . '_title' ] ) ) : ?>
								<h2 class="flexslider-title">
									<?php echo esc_html( $row[ $section_name . '_title' ] ); ?>
								</h2>
							<?php endif; ?>
							<?php if ( isset( $row[ $section_name . '_desc' ] ) && !empty( $row[ $section_name . '_desc' ] ) ) : ?>
								<p class="flexslider-desc">
									<?php echo esc_html( $row[ $section_name . '_desc' ] ); ?>
								</p>
							<?php endif; ?>
							<?php if ( isset( $row[ $section_name . '_url' ] ) && !empty( $row[ $section_name . '_url' ] ) ) : ?>
								<a class="btn btn-default btn-sm" href="<?php echo esc_url( $row[ $section_name . '_url' ] ); ?>">
									<?php esc_html_e( 'Read More', 'eleganto' ); ?>  
								</a>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>					 
			</div>
		<?php endif; ?>
	</div>
</div>  
<div class="border-bottom"></div>

