<?php
/**
 *
 * Template name: Sitemap Page
 * The template for displaying Sitemap Page.
 *
 * @package eleganto
 */
get_header();
?>

<?php get_template_part( 'template-part', 'topnav' ); ?>

<?php get_template_part( 'template-part', 'head' ); ?>
<?php
if ( get_theme_mod( 'breadcrumbs-check', 1 ) != 0 ) {
	eleganto_breadcrumb();
}
?>
<!-- start content container -->
<div class="row container rsrc-content">      
	<article class="col-md-12 rsrc-main" itemscope itemtype="http://schema.org/BlogPosting">        
		<div id="row">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					?>
					<header>                              
						<h1 class="entry-title page-header" itemprop="headline">
							<?php the_title(); ?>
						</h1>                                                        
					</header>                            
					<div class="entry-content" itemprop="articleBody">                              
						<?php the_content(); ?>                            
					</div>

				<?php } ?>
			<?php } ?>

			<?php wp_reset_postdata(); ?> 
			<div class="col-md-3">
				<h2><?php esc_html_e( 'Latest Posts', 'eleganto' ); ?></h2>
					<ul>
					<?php query_posts( 'post_type="post"&post_status="publish"&showposts=10' ); ?>
					<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							?>
							<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
						<?php } ?>
					<?php } ?>
					<?php wp_reset_postdata(); ?> 
                </ul>
			</div>
			<div class="col-md-3">
                <h2><?php esc_html_e( 'Pages', 'eleganto' ); ?></h2>
                <ul>
					<?php wp_list_pages( 'title_li=' ); ?>
                </ul>
            </div>
            <div class="col-md-3">        
                <h2><?php esc_html_e( 'Categories', 'eleganto' ); ?></h2>
                <ul>
					<?php wp_list_categories( 'title_li=&show_count=1' ); ?>
                </ul>
            </div>
            <div class="col-md-3">    
                <h2><?php esc_html_e( 'Archives', 'eleganto' ); ?></h2>
                <ul>
					<?php wp_get_archives( 'show_post_count=true' ); ?>
                </ul>
            </div>
            <div class="clear"></div>
            <hr />
            <div class="col-md-6"> 
                <h2><?php esc_html_e( 'Posts by Category', 'eleganto' ); ?></h2>
				<?php $categories = get_categories(); ?>
				<?php foreach ( $categories as $cat ) { ?>
					<h3><a href="<?php echo get_category_link( $cat->term_id ); ?>"><?php echo $cat->name; ?></a></h3>
					<ul>
						<?php query_posts( 'post_type="post"&post_status="publish"&cat=' . $cat->term_id ); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?> 
					</ul>
				<?php } ?>
            </div>
			<?php if ( class_exists( 'WooCommerce' ) ) { ?>
				<div class="col-md-6"> 
					<h2><?php esc_html_e( 'Products by Category', 'eleganto' ); ?></h2>
					<?php
					$args		 = array(
						'taxonomy' => 'product_cat',
					);
					$categories	 = get_categories( $args );
					?>
					<?php foreach ( $categories as $cat ) { ?>
						<h3><a href="<?php echo get_category_link( $cat->term_id ); ?>"><?php echo $cat->name; ?></a></h3>
						<ul>
							<?php
							$args		 = array(
								'posts_per_page' => -1,
								'tax_query'		 => array(
									array(
										'taxonomy'	 => 'product_cat',
										'field'		 => 'ID',
										'terms'		 => $cat->term_id
									),
								),
								'post_type'		 => 'product',
								'orderby'		 => 'title',
							);
							$the_query	 = new WP_Query( $args );
							?>
							<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
								<?php endwhile; ?>
							<?php endif; ?>
							<?php wp_reset_postdata(); ?> 
						</ul>
					<?php } ?>
				</div>
			<?php } ?>            
		</div><!-- entry -->					
	</article>    
</div>
<!-- end content container -->

<?php 

get_template_part( 'template-part', 'footernav' );

get_footer();
