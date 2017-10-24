<?php $section_name = 'blog'; ?>
<?php if ( get_theme_mod( $section_name . '_intro_enable', '1' ) != '0' ) : ?>
	<div class="intro">  
		<?php 
		$bg = get_theme_mod( $section_name . '_intro_img_image', get_template_directory_uri() . '/img/demo/intro1bg.jpg' );
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
		<div class="blog-home <?php echo get_theme_mod( $section_name . '_section_style', 'blog-basic' ); ?>">
			<?php
			$query_args	 = array(
				'post_type'		 => 'post',
				'posts_per_page' => absint( get_theme_mod( $section_name . '_section_number_posts', 3 ) ),
			);
			$the_query	 = new WP_Query( $query_args );
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
					?>
					<?php get_template_part( 'content', '' ); ?>
				<?php
				endwhile;
				wp_reset_postdata();
			else:
				?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'eleganto' ); ?></p>
			<?php endif; ?>
			<?php if ( get_theme_mod( 'blog_section_button', '0' ) != '0' && get_option( 'page_for_posts' ) && get_option( 'show_on_front' ) == 'page' ) : ?>
				<p class="home-blog-all col-md-12 text-center">                                      
					<a class="btn btn-default btn-md" href="<?php echo get_post_type_archive_link( 'post' ); ?>">
						<?php echo esc_html( get_theme_mod( 'blog_section_button_text', 'View all posts' ) ); ?>
					</a>                                  
				</p> 
			<?php endif; ?>	
		</div>
	</div>
</div>  
<div class="border-bottom"></div>
