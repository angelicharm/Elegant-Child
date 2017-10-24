<?php $section_name = 'testimonial'; ?>
<?php if ( get_theme_mod( $section_name . '_intro_enable', '1' ) != '0' ) : ?>
	<div class="intro">  
		<?php
		$bg  = get_theme_mod( $section_name . '_intro_img_image', get_template_directory_uri() . '/img/demo/intro2bg.jpg' );
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
		$repeater_value = get_theme_mod( 'repeater_testimonial', array(
			array(
				$section_name . '_image'	 => get_template_directory_uri() . '/img/demo/testimonial/face1.jpg',
				$section_name . '_name'	 => 'Themes4WP.com',
				$section_name . '_desc'	 => 'Themes4WP is specialized in developing fast and SEO optimized Free and Premium WordPress Themes which are suitable for dynamic News Websites, Online Magazines and WooCommerce websites.',
				$section_name . '_url'	 => '#',
			),
			array(
				$section_name . '_image'	 => get_template_directory_uri() . '/img/demo/testimonial/face2.jpg',
				$section_name . '_name'	 => 'WordPress.org',
				$section_name . '_desc'	 => 'WordPress is web software you can use to create a beautiful website, blog, or app. We like to say that WordPress is both free and priceless at the same time.',
				$section_name . '_url'	 => '#',
			),
		) );
		?>
		<?php if ( $repeater_value ) : ?>
			<?php 
			$autostart = get_theme_mod( 'testimonial_autostart', 'true' );
			if ( $autostart == 'true' ) {
				$interval = get_theme_mod( 'testimonial_interval', '5000' );
			} else {
				$interval = 'false';
			}
			?>
			<div class="row">
				<div class="col-md-12" data-wow-delay="0.2s">                        
					<div class="carousel slide" data-ride="carousel" id="quote-carousel" data-interval="<?php echo $interval; ?>">                            
						<!-- Bottom Carousel Indicators -->                            
						<ol class="carousel-indicators">                                
							<?php
							$i = 0;
							foreach ( $repeater_value as $row ) :
								?>                                                                    
								<li data-target="#quote-carousel" data-slide-to="<?php echo $i; ?>" class="<?php if ( $i == 0 ) echo 'active '; ?>">                                     
									<?php if ( isset( $row[ $section_name . '_image' ] ) && !empty( $row[ $section_name . '_image' ] ) ) : ?>
										<?php $image_thumb = wp_get_attachment_image( $row[ $section_name . '_image' ], 'thumbnail', false, array( 'class' => 'img-responsive' ) ); ?>                                       
										<?php
										if ( $image_thumb ) {
											echo $image_thumb;
										} else {
											echo '<img class="img-responsive" src="' . esc_url( $row[ $section_name . '_image' ] ) . '" alt="">';
										}
										?>                                   
									<?php endif; ?>
								</li>                                  
								<?php $i++; ?>                                
							<?php endforeach; ?>                            
						</ol>                            
						<!-- Carousel Slides / Quotes -->                            
						<div class="carousel-inner text-center">                                
							<?php
							$j = 0;
							foreach ( $repeater_value as $row ) :
								?>                                  
								<div class="item <?php if ( $j == 0 ) echo 'active '; ?>">                                    
									<blockquote>                                        
										<div class="row">                                            
											<div class="col-sm-8 col-sm-offset-2">                                                
												<?php if ( isset( $row[ $section_name . '_desc' ] ) && !empty( $row[ $section_name . '_desc' ] ) ) : ?>                                                  
													<p>
														<?php echo esc_html( $row[ $section_name . '_desc' ] ); ?>
													</p>                                                
												<?php endif; ?>                                                
												<small>                                                  
													<?php if ( isset( $row[ $section_name . '_name' ] ) && !empty( $row[ $section_name . '_name' ] ) ) : ?>                                                    
														<?php echo esc_html( $row[ $section_name . '_name' ] ); ?>                                                  
													<?php endif; ?>                                                  
													<?php if ( isset( $row[ $section_name . '_url' ] ) && !empty( $row[ $section_name . '_url' ] ) ) : ?>                                                    
														<?php echo ' | '; ?>
														<a href="<?php echo esc_url( $row[ $section_name . '_url' ] ); ?>">
															<?php echo esc_url( $row[ $section_name . '_url' ] ); ?>
														</a>                                                  
													<?php endif; ?>                                                
												</small>                                            
											</div>                                        
										</div>                                    
									</blockquote>                                  
								</div>                                  
								<?php $j++; ?>                                
							<?php endforeach; ?>                            
						</div>                            
						<!-- Carousel Buttons Next/Prev -->                            
						<a data-slide="prev" href="#quote-carousel" class="left carousel-control">
							<i class="fa fa-chevron-left"></i>
						</a>                            
						<a data-slide="next" href="#quote-carousel" class="right carousel-control">
							<i class="fa fa-chevron-right"></i>
						</a>                        
					</div>                    
				</div>                
			</div>
		<?php endif; ?>
	</div>
</div>  
<div class="border-bottom"></div>
