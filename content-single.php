<?php if ( has_post_thumbnail() ) : ?>                                
	<div class="single-thumbnail row"><?php echo get_the_post_thumbnail( $post->ID, 'eleganto-single' ); ?></div>                                     
	<div class="clear"></div>                            
<?php endif; ?>     
<!-- start content container -->
<div class="row container rsrc-content">    
	<?php //left sidebar ?>    
	<?php get_sidebar( 'left' ); ?>    
	<article class="col-md-<?php eleganto_main_content_width(); ?> rsrc-main">        
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                                       
				<div <?php post_class( 'rsrc-post-content' ); ?>>                            
					<header>                              
						<h1 class="entry-title page-header">
							<?php the_title(); ?>
						</h1>                              
						<?php get_template_part( 'template-part', 'postmeta' ); ?>                            
					</header>                                                                                    
					<div class="ad-before">  
						<?php
						if ( get_theme_mod( 'banner-single-before', '' ) != '' ) {
							echo get_theme_mod( 'banner-single-before' );
						}
						?> 
					</div>  
					<?php if ( get_theme_mod( 'float-banner-enable', 0 ) != 0 && get_theme_mod( 'float-banner-single', '' ) != '' ) : ?>
						<div class="entry-content row">  
							<div class="col-md-9 col-xs-12"><?php the_content(); ?></div>
							<div class="col-md-3 sticky-ad hidden-xs td-sticky"><?php echo get_theme_mod( 'float-banner-single' ); ?></div>
						</div> 
					<?php else: ?>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>   
					<?php endif; ?> 
					<div class="ad-after">
						<?php
						if ( get_theme_mod( 'banner-single-after', '' ) != '' ) {
							echo get_theme_mod( 'banner-single-after' );
						}
						?> 
					</div>
					<div id="custom-box"></div>                         
					<?php wp_link_pages(); ?>                                                        
					<?php get_template_part( 'template-part', 'posttags' ); ?>
					<?php if ( get_theme_mod( 'post-nav-check', 1 ) == 1 ) : ?>                            
						<div class="post-navigation row">
							<div class="post-previous col-md-6"><?php previous_post_link( '%link', '<span class="meta-nav">' . __( 'Previous:', 'eleganto' ) . '</span> %title' ); ?></div>
							<div class="post-next col-md-6"><?php next_post_link( '%link', '<span class="meta-nav">' . __( 'Next:', 'eleganto' ) . '</span> %title' ); ?></div>
						</div>                         
					<?php endif; ?>                            
					<?php if ( get_theme_mod( 'related-posts-check', 1 ) == 1 ) : ?>
						<?php get_template_part( 'template-part', 'related' ); ?>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'author-check', 1 ) == 1 ) : ?>                               
						<?php get_template_part( 'template-part', 'postauthor' ); ?> 
					<?php endif; ?>                            
					<?php comments_template(); ?>                         
				</div>        
			<?php endwhile; ?>        
		<?php else: ?>            
			<?php get_template_part( 'content', 'none' ); ?>        
		<?php endif; ?>    
	</article> 
	<?php if ( get_theme_mod( 'content-slider-enable', 0 ) != 0 ) : ?>
		<div id="slidebox">
			<?php $category = get_the_category( $post->ID ); ?>
			<?php if ( $category ) : ?>
				<a class="close-me"></a>
				<div class="slidebox-header"><?php _e( 'More', 'eleganto' ); ?> <?php echo $category[ 0 ]->category_count; ?> <?php _e( 'posts in', 'eleganto' ); ?> <?php if ( $category ) echo '<a href="' . get_category_link( $category[ 0 ]->term_id ) . '">' . $category[ 0 ]->cat_name . '</a>'; ?> <?php _e( 'category', 'eleganto' ); ?></div>
				<div class="slidebox-recomended"><?php _e( 'Recommended for you', 'eleganto' ); ?></div>
				<?php
				$related_cat = get_posts( array( 'category__in' => $category[ 0 ]->term_id, 'numberposts' => '1', 'post__not_in' => array( $post->ID ) ) );
				if ( $related_cat )
					foreach ( $related_cat as $post ) {
						setup_postdata( $post );
						?>
						<div class="slidebox-thumb">
							<?php the_post_thumbnail(); ?>
						</div>  
						<a class="slidebox-title" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						<p><?php the_excerpt(); ?></p>
					<?php } wp_reset_postdata(); ?>
			<?php endif; ?>    
		</div> <!-- End Content Slider -->
	<?php endif; ?>     
	<?php //get the right sidebar   ?>    
	<?php get_sidebar( 'right' ); ?>
</div>
<!-- end content container -->
