<!-- start content container -->
<div class="row container rsrc-content">
	<?php get_sidebar( 'left' ); ?>
	<article class="col-md-<?php eleganto_main_content_width(); ?> rsrc-main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="single-thumbnail"><?php the_post_thumbnail( 'eleganto-single' ); ?></div>
					<div class="clear">
					</div>
				<?php endif; ?>
				<div <?php post_class( 'rsrc-post-content' ); ?>>
					<header>
						<h1 class="entry-title page-header">
							<?php the_title(); ?>
						</h1>
						<time class="posted-on published" datetime="<?php the_time( 'Y-m-d' ); ?>"></time>
					</header>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
					<?php wp_link_pages(); ?>
					<?php if ( get_theme_mod( 'post-nav-check', 1 ) == 1 ) : ?>
						<div class="post-navigation row">
							<div class="post-previous col-md-6"><?php previous_post_link( '%link', '<span class="meta-nav">' . __( 'Previous:', 'eleganto' ) . '</span> %title' ); ?></div>
							<div class="post-next col-md-6"><?php next_post_link( '%link', '<span class="meta-nav">' . __( 'Next:', 'eleganto' ) . '</span> %title' ); ?></div>
						</div>
					<?php endif; ?>
					<?php comments_template(); ?>
				</div>
			<?php endwhile; ?>
		<?php else: ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</article> 
	<?php get_sidebar( 'right' ); ?>
</div>
<!-- end content container -->