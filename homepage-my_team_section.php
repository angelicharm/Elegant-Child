<?php $section_name = 'my_team'; ?>
<?php if ( get_theme_mod( $section_name . '_intro_enable', '0' ) != '0' ) : ?>
	<?php 
		$bg = get_theme_mod( $section_name . '_intro_img_image', '' ); 
		$img = get_theme_mod( $section_name . '_section_intro_set', 'image' );
		$parallax = get_theme_mod( 'parallax_intro', 1 );
		$image_id = attachment_url_to_postid( $bg );
		$image_attributes = wp_get_attachment_image_src( $image_id, 'full' );
	?>
	<div class="intro" <?php if ( $bg != '' && $img == 'image' && $parallax == 1 ) { echo 'data-stellar-background-ratio="0.7"'; } ?>>  
		<div class="prlx <?php if ( $bg != '' && $img == 'image' && $parallax == 1 ) { echo 'img-holder'; } ?>" data-stellar-background-ratio="0.5"  data-image="<?php echo esc_url( $bg ); ?>" data-width="<?php echo $image_attributes[1]; ?>" data-height="<?php echo $image_attributes[2]; ?>"></div>
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
		<?php $repeater_value = get_theme_mod( 'repeater_my_team' ); ?>
		<?php if ( $repeater_value ) : ?>
			<div class="row text-center my-team-inner">                                                     
				<?php foreach ( $repeater_value as $row ) : ?>                                                                             
					<?php $image_thumb = wp_get_attachment_image( $row[ $section_name . '_image' ], 'eleganto-square', false, array( 'class' => 'img-responsive' ) ); ?>                                                                                                          
					<div class="my-team-item col-sm-6 col-md-3 <?php echo get_theme_mod( $section_name . '_layout', 'team-basic' ); ?>">                                                
						<?php if ( isset( $row[ $section_name . '_image' ] ) && !empty( $row[ $section_name . '_image' ] ) ) : ?>                                       
							<div class="my-team-img">
								<?php echo $image_thumb; ?>
							</div>                                     
						<?php endif; ?> 
						<div class="my-team-desc">
							<?php if ( isset( $row[ $section_name . '_name' ] ) && !empty( $row[ $section_name . '_name' ] ) ) : ?>                                                    
								<div class="my-team-title">
									<?php echo esc_html( $row[ $section_name . '_name' ] ); ?>                                                  
								</div> 
							<?php endif; ?>
							<?php if ( isset( $row[ $section_name . '_department' ] ) && !empty( $row[ $section_name . '_department' ] ) ) : ?>                                                    
								<div class="my-team-department">
									<?php echo esc_html( $row[ $section_name . '_department' ] ); ?>
								</div>                                                
							<?php endif; ?>  
							<?php if ( isset( $row[ $section_name . '_desc' ] ) && !empty( $row[ $section_name . '_desc' ] ) ) : ?>                                                  
								<p class="my-team-desc">
									<?php echo wp_kses_post( $row[ $section_name . '_desc' ] ); ?>
								</p>                                                
							<?php endif; ?>
							<div class="my-team-socials"> 
								<?php if ( isset( $row[ $section_name . '_fb' ] ) && !empty( $row[ $section_name . '_fb' ] ) ) : ?>                                                    
									<div class="my-team-fb" data-toggle="tooltip" data-placement="top" title="<?php esc_attr_e( 'Facebook', 'eleganto' ); ?>">
										<a href="<?php echo esc_url( $row[ $section_name . '_fb' ] ); ?>" target="_blank">
											<i class="fa fa-facebook-square"></i>  
										</a>
									</div>                                                
								<?php endif; ?>
								<?php if ( isset( $row[ $section_name . '_gplus' ] ) && !empty( $row[ $section_name . '_gplus' ] ) ) : ?>                                                    
									<div class="my-team-gplus" data-toggle="tooltip" data-placement="top" title="<?php esc_attr_e( 'Google Plus', 'eleganto' ); ?>">
										<a href="<?php echo esc_url( $row[ $section_name . '_gplus' ] ); ?>" target="_blank">
											<i class="fa fa-google-plus-square"></i>  
										</a>
									</div>                                                
								<?php endif; ?> 
								<?php if ( isset( $row[ $section_name . '_tw' ] ) && !empty( $row[ $section_name . '_tw' ] ) ) : ?>                                                    
									<div class="my-team-tw" data-toggle="tooltip" data-placement="top" title="<?php esc_attr_e( 'Twitter', 'eleganto' ); ?>">
										<a href="<?php echo esc_url( $row[ $section_name . '_tw' ] ); ?>" target="_blank">
											<i class="fa fa-twitter-square"></i>
										</a>
									</div>                                                
								<?php endif; ?>
							</div>  
						</div>                                                                                                                                                                                                                                          
					</div>                                                                                                                                      
				<?php endforeach; ?>                                                            
			</div>
		<?php endif; ?>
	</div>
</div>  
<div class="border-bottom"></div>
