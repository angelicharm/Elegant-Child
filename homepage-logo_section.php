<?php $section_name = 'logo'; ?>
<?php if ( get_theme_mod( $section_name . '_intro_enable', '0' ) != '0' ) : ?>
	<div class="intro">  
		<?php 
		$bg = get_theme_mod( $section_name . '_intro_img_image', '' ); 
		$img = get_theme_mod( $section_name . '_section_intro_set', 'image' );
		$parallax = get_theme_mod( 'parallax_intro', 1 );
		$image_id = attachment_url_to_postid( $bg );
		$image_attributes = wp_get_attachment_image_src( $image_id, 'full' );
		?>
		<div class="prlx <?php if ( $bg != '' && $img == 'image' && $parallax == 1 ) { echo 'img-holder'; } ?>" style="background-image: url(<?php if ( $parallax != 1 ) echo esc_url( $bg ) ?>); height:<?php if ( $parallax != 1 ) echo absint( $image_attributes[2] ) . 'px' ?>" data-image="<?php echo esc_url( $bg ); ?>" data-width="<?php echo $image_attributes[1]; ?>" data-height="<?php echo $image_attributes[2]; ?>" ></div>
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
		<div class="container-heading text-center <?php echo esc_attr( get_theme_mod( $section_name . '_section_title_style', 'title-style-one' )); ?>">
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
		$repeater_value = get_theme_mod( 'repeater_logo', array(
			array(
				$section_name . '_url'	 => '',
				$section_name . '_image' => get_template_directory_uri() . '/img/demo/brands/1.png',
			),
			array(
				$section_name . '_url'	 => '',
				$section_name . '_image' => get_template_directory_uri() . '/img/demo/brands/2.png',
			),
			array(
				$section_name . '_url'	 => '',
				$section_name . '_image' => get_template_directory_uri() . '/img/demo/brands/3.png',
			),
			array(
				$section_name . '_url'	 => '',
				$section_name . '_image' => get_template_directory_uri() . '/img/demo/brands/4.png',
			),
			array(
				$section_name . '_url'	 => '',
				$section_name . '_image' => get_template_directory_uri() . '/img/demo/brands/5.png',
			),
			array(
				$section_name . '_url'	 => '',
				$section_name . '_image' => get_template_directory_uri() . '/img/demo/brands/6.png',
			),
		) );
		?>
		<?php if ( $repeater_value ) : ?>
			<div id="logo-home" class="flexslider carousel-loading" data-columns="<?php echo absint( get_theme_mod( 'logo_row', '5' ) ) ?>" data-interval="<?php echo get_theme_mod( 'logo_interval', 7000 ) ?>" data-start="<?php echo get_theme_mod( 'logo_autostart', 'true' ) ?>" data-loop="<?php echo get_theme_mod( 'logo_loop', 'false' ) ?>">										   
				<ul class="slides">
					<?php foreach ( $repeater_value as $row ) : ?>
						<?php
						// $image_id = attachment_url_to_postid($row[$section_name . '_image']);
							$image_thumb = wp_get_attachment_image( $row[ $section_name . '_image' ], 'eleganto-home' );
						?>  
						<li class="logo-item text-center">
							<?php if ( isset( $row[ $section_name . '_url' ] ) && !empty( $row[ $section_name . '_url' ] ) ) : ?>
								<a href="<?php echo esc_url( $row[ $section_name . '_url' ] ); ?>">
							<?php endif; ?>
							<?php if ( isset( $row[ $section_name . '_image' ] ) && !empty( $row[ $section_name . '_image' ] ) ) : ?>
								<?php if ( $image_thumb ) {
									echo $image_thumb;
								} else {
									echo '<img src="' . esc_url( $row[ $section_name . '_image' ] ) . '" alt="">';
								} ?>
							<?php endif; ?>
							<?php if ( isset( $row[ $section_name . '_url' ] ) && !empty( $row[ $section_name . '_url' ] ) ) : ?>
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
