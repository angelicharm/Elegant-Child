<?php
/*
  |----------------------------------------------------------
  | Portfolio
  |----------------------------------------------------------
 */
add_shortcode( 'portfolio', 'eleganto_portfolio_shortcode' );

function eleganto_portfolio_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'filter'	 => 'yes',
		'per_page'	 => '6',
		'columns'	 => '4',
		'animation'	 => 'lily',
	), $atts, 'portfolio' ) );
	$columns = (12 / $columns);
	ob_start();
	// setup query
	?>
	<?php if ( post_type_exists( 'portfolio' ) ) : ?>
		<?php if ( $filter == 'yes' ) : ?> 
			<ul id="filter" class="list-inline text-center">
				<?php
				$terms	 = get_terms( 'portfolio_category' );
				$count	 = count( $terms );
				echo '<li><a class="btn btn-default" href="javascript:void(0)" title="" data-filter=".all" class="active">' . esc_html__( 'All', 'eleganto' ) . '</a></li>';
				if ( $count > 0 ) {
					foreach ( $terms as $term ) {
						$termname	 = strtolower( $term->name );
						$termname	 = str_replace( ' ', '-', $termname );
						echo '<li><a class="btn btn-default" href="javascript:void(0)" title="" data-filter=".' . esc_attr( $termname ) . '">' . esc_html( $term->name ) . '</a></li>';
					}
				}
				?>
			</ul>
		<?php endif; ?> 
		<ul id="portfolio" class="grid">
			<?php
			global $post;
			$args	 = array(
				'post_type'		 => 'portfolio',
				'posts_per_page' => $per_page
			);
			$loop	 = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				$terms = get_the_terms( $post->ID, 'portfolio_category' );
				if ( $terms && !is_wp_error( $terms ) ) :
					$links = array();
					foreach ( $terms as $term ) {
						$links[] = $term->name;
					}
					$tax_links	 = join( " ", str_replace( ' ', '-', $links ) );
					$tax		 = strtolower( $tax_links );
				else :
					$tax = '';
				endif;
				?>     					 					     					 							                                                    
				<li class="all portfolio-item col-md-<?php echo $columns; ?> col-sm-6 <?php echo esc_attr( $tax ); ?>">                          
					<figure class="effect-<?php echo $animation; ?>">                              
						<?php if ( has_post_thumbnail() ) { ?>            												                                                                       
							<?php the_post_thumbnail( 'eleganto-home', array( 'itemprop' => 'image' ) ); ?>          											                                                                 
						<?php } else { ?>                                                                                                       
							<img src="<?php echo get_template_directory_uri(); ?>/img/noprew-index.png" alt="<?php the_title_attribute(); ?>">       									                                                                       
						<?php } ?> 																			 									                                                                               
						<figcaption>     									                                                                
							<h2 class="portfolio-title">                                                                                                                                  
								<?php esc_html( eleganto_portfolio_title() ); ?>                                                              
							</h2>              
							<p>
								<?php echo wp_trim_words( strip_shortcodes( get_the_content() ), '7', $more = '...' ); ?>  
							</p>			         
							<a href="<?php the_permalink(); ?>">
								<?php esc_html_e( 'Read more', 'eleganto' ) ?>
							</a>								 							                                                          
						</figcaption>                           
					</figure> 	                          
				</li>	 					                                                        		 					                                                    
			<?php endwhile; ?>    					   			    				                                      
		</ul>   	 


		<?php
	endif;

	return '<div class="custom-portfolio">' . ob_get_clean() . '</div>';
	wp_reset_postdata();
}

/*
  |----------------------------------------------------------
  | My Team
  |----------------------------------------------------------
 */
add_shortcode( 'my-team', 'eleganto_my_team_shortcode' );

function eleganto_my_team_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'layout' => 'team-basic',
		'columns' => '4',
	), $atts, 'my-team' ) );
	if ( $columns >= 6 ) { $columns = 6; };
	$team_columns = round( 12 / $columns );
	ob_start();
	?>
	<?php $repeater_value = get_theme_mod( 'repeater_my_team' ); ?>
	<?php if ( $repeater_value ) : ?>
		<div class="row text-center my-team-inner">                                                     
			<?php foreach ( $repeater_value as $row ) : ?>                                                                             
				<?php $image_thumb = wp_get_attachment_image( $row[ 'my_team_image' ], 'eleganto-square', false, array( 'class' => 'img-responsive' ) ); ?>                                                                                                          
				<div class="my-team-item col-sm-6 col-md-<?php echo absint( $team_columns ); ?> <?php echo esc_attr( $layout ); ?>">                                                
					<?php if ( isset( $row[ 'my_team_image' ] ) && !empty( $row[ 'my_team_image' ] ) ) : ?>                                       
						<div class="my-team-img">
							<?php echo $image_thumb; ?>
						</div>                                     
					<?php endif; ?> 
					<div class="my-team-desc">
						<?php if ( isset( $row[ 'my_team_name' ] ) && !empty( $row[ 'my_team_name' ] ) ) : ?>                                                    
							<div class="my-team-title">
								<?php echo esc_html( $row[ 'my_team_name' ] ); ?>                                                  
							</div> 
						<?php endif; ?>
						<?php if ( isset( $row[ 'my_team_department' ] ) && !empty( $row[ 'my_team_department' ] ) ) : ?>                                                    
							<div class="my-team-department">
								<?php echo esc_html( $row[ 'my_team_department' ] ); ?>
							</div>                                                
						<?php endif; ?>  
						<?php if ( isset( $row[ 'my_team_desc' ] ) && !empty( $row[ 'my_team_desc' ] ) ) : ?>                                                  
							<p class="my-team-desc">
								<?php echo esc_html( $row[ 'my_team_desc' ] ); ?>
							</p>                                                
						<?php endif; ?>
						<div class="my-team-socials"> 
							<?php if ( isset( $row[ 'my_team_fb' ] ) && !empty( $row[ 'my_team_fb' ] ) ) : ?>                                                    
								<div class="my-team-fb" data-toggle="tooltip" data-placement="top" title="<?php esc_attr_e( 'Facebook', 'eleganto' ); ?>">
									<a href="<?php echo esc_url( $row[ 'my_team_fb' ] ); ?>" target="_blank">
										<i class="fa fa-facebook-square"></i>  
									</a>
								</div>                                                
							<?php endif; ?>
							<?php if ( isset( $row[ 'my_team_gplus' ] ) && !empty( $row[ 'my_team_gplus' ] ) ) : ?>                                                    
								<div class="my-team-gplus" data-toggle="tooltip" data-placement="top" title="<?php esc_attr_e( 'Google Plus', 'eleganto' ); ?>">
									<a href="<?php echo esc_url( $row[ 'my_team_gplus' ] ); ?>" target="_blank">
										<i class="fa fa-google-plus-square"></i>  
									</a>
								</div>                                                
							<?php endif; ?> 
							<?php if ( isset( $row[ 'my_team_tw' ] ) && !empty( $row[ 'my_team_tw' ] ) ) : ?>                                                    
								<div class="my-team-tw" data-toggle="tooltip" data-placement="top" title="<?php esc_attr_e( 'Twitter', 'eleganto' ); ?>">
									<a href="<?php echo esc_url( $row[ 'my_team_tw' ] ); ?>" target="_blank">
										<i class="fa fa-twitter-square"></i>
									</a>
								</div>                                                
							<?php endif; ?>
						</div>  
					</div>                                                                                                                                                                                                                                          
				</div>                                                                                                                                      
			<?php endforeach; ?>                                                            
		</div>

		<?php
	endif;

	return '<div class="custom-my-team">' . ob_get_clean() . '</div><div class="clear"></div>';
}
