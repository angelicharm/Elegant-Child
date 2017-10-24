<?php get_header(); ?>

<?php get_template_part( 'template-part', 'topnav' ); ?>

<?php get_template_part( 'template-part', 'head' ); ?>

<?php
if ( get_theme_mod( 'breadcrumbs-check', 1 ) != 0 ) {
	eleganto_breadcrumb();
}
?>

<!-- start content container -->
<div class="row container rsrc-content">

	<?php get_sidebar( 'left' ); ?>


    <div class="col-md-<?php eleganto_main_content_width(); ?> rsrc-main">
		<?php
		$total_results = $wp_query->found_posts;
		echo "<h2 class='page-header text-center'>" . sprintf( __( '%s Search Results for "%s"', 'eleganto' ), $total_results, get_search_query() ) . "</h2>";
		if ( $total_results == 0 ) :
			echo "<div class='rsrc-post-content'>";
			get_search_form( true );
			echo "</div>";
		endif;
		?>

		<?php
		// theloop
		if ( have_posts() ) : while ( have_posts() ) : the_post();
				?>


				<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>
			<div class="footer-pagination"><?php the_posts_pagination(); ?></div>
		<?php else: ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</div>

	<?php get_sidebar( 'right' ); ?>

</div>
<!-- end content container -->

<?php get_template_part( 'template-part', 'footernav' ); ?>

<?php get_footer(); ?>
