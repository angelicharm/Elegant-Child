<?php
if ( is_front_page() ) {
	$columns = get_theme_mod( 'blog_row', 'col-md-4' );
} else {
	$columns = 'col-md-4';
}
?>
<article class="article-content <?php echo $columns; ?> col-sm-6"> 
	<div <?php post_class( 'row' ); ?>>
		<div class="col-md-12">                             
			<?php if ( has_post_thumbnail() ) : ?>                               
				<a href="<?php the_permalink(); ?>"><div class="featured-thumbnail"><?php the_post_thumbnail( 'eleganto-home' ); ?></div></a>                                                           
			<?php endif; ?>
			<div class="home-header"> 
				<header>
					<h2 class="page-header">                                
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
							<?php the_title(); ?>
						</a>                            
					</h2> 
					<?php get_template_part( 'template-part', 'postmeta' ); ?>
				</header>
				<div class="sumary-content">                                                    
					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div><!-- .entry-summary -->                                                                                                                       
					<div class="clear"></div>                                  
					<p class="text-center">                                      
						<a class="btn btn-default btn-md" href="<?php the_permalink(); ?>">
							<?php _e( 'Read more', 'eleganto' ); ?> 
						</a>                                  
					</p>
				</div>                             
			</div>
		</div>                      
	</div>
	<div class="clear"></div>
</article>
