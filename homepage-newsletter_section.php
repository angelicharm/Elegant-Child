<?php $section_name = 'newsletter'; ?>
<?php if ( get_theme_mod( $section_name . '_intro_enable', '0' ) != '0' ) : ?>
	<div class="intro">  
		<?php
		$bg	 = get_theme_mod( $section_name . '_intro_img_image', '' );
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
		<?php if ( get_theme_mod( $section_name . '_section_form', '' ) != '' && class_exists( 'WYSIJA' ) ) : ?>
			<?php if ( get_theme_mod( $section_name . '_section_layout', 'full-width-newsletter' ) == 'full-width-newsletter' ) { ?>
				<div class="newsletter-form-section text-center">
					<?php
					$widgetNL = new WYSIJA_NL_Widget( true );
					echo $widgetNL->widget( array( 'form' => get_theme_mod( $section_name . '_section_form' ), 'form_type' => 'php' ) );
					?>
				</div>
			<?php } elseif ( get_theme_mod( $section_name . '_section_layout', 'full-width-newsletter' ) == 'image-left' ) { ?>
				<?php if ( get_theme_mod( $section_name . '_section_image', '' ) != '' ) { ?>
					<div class="newsletter-image-section text-center col-md-6">
						<?php echo '<img src="' . esc_url( get_theme_mod( $section_name . '_section_image', '' ) ) . '" alt="">'; ?>
					</div>
				<?php } ?>
				<div class="newsletter-form-section text-center col-md-6">
					<?php
					$widgetNL = new WYSIJA_NL_Widget( true );
					echo $widgetNL->widget( array( 'form' => get_theme_mod( $section_name . '_section_form' ), 'form_type' => 'php' ) );
					?>
				</div>
			<?php } ?>
		<?php endif; ?>
	</div>
</div>  
<div class="border-bottom"></div>
