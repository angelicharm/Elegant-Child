<?php $section_name = 'image'; ?>
<?php if ( get_theme_mod( $section_name . '_intro_enable', '1' ) != '0' ) : ?>
	<div class="intro">  
	    <?php 
		$bg = get_theme_mod( $section_name . '_intro_img_image', get_template_directory_uri() . '/img/demo/intro3bg.jpg' );
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
		<?php if ( get_theme_mod( $section_name . '_section_image', get_template_directory_uri() . '/img/demo/image-center.png' ) != '' ) : ?>
			<div class="row">
				<?php if ( get_theme_mod( $section_name . '_section_text_left', '<h3>Responsive Theme</h3><p>Eleganto is free responsive one page WordPress theme. Theme is perfect for corporate, business, personal, portfolio, photography sites. Is built on bootstrap with parallax support. Eleganto is responsive, clean, modern, flat and minimal business theme.</p>' ) != '' ) : ?>
					<div class="image-section-left col-md-3">
						<?php echo wp_kses_post( get_theme_mod( $section_name . '_section_text_left', '<h3>Responsive Theme</h3><p>Eleganto is free responsive one page WordPress theme. Theme is perfect for corporate, business, personal, portfolio, photography sites. Is built on bootstrap with parallax support. Eleganto is responsive, clean, modern, flat and minimal business theme.</p>' ) ); ?>
					</div>
				<?php endif; ?>
				<?php if ( get_theme_mod( $section_name . '_section_image', get_template_directory_uri() . '/img/demo/image-center.png' ) != '' ) : ?>
					<div class="image-section-center col-md-6">
						<img src="<?php echo esc_url( get_theme_mod( $section_name . '_section_image', get_template_directory_uri() . '/img/demo/image-center.png' ) ); ?>" alt="">
					</div>
				<?php endif; ?>
				<?php if ( get_theme_mod( $section_name . '_section_text_right', '<h3>Business WP Theme</h3><p>Eleganto is suitable for creative portfolio, business and corporate website projects, personal presentations and much more. With this theme you can create also a single one-page websites with ease</p>' ) != '' ) : ?>
					<div class="image-section-right col-md-3">
						<?php echo wp_kses_post( get_theme_mod( $section_name . '_section_text_right', '<h3>Business WP Theme</h3><p>Eleganto is suitable for creative portfolio, business and corporate website projects, personal presentations and much more. With this theme you can create also a single one-page websites with ease</p>' ) ); ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</div>  
<div class="border-bottom"></div>
