<?php $section_name = 'woocommerce'; ?>
<?php if ( get_theme_mod( $section_name . '_intro_enable', '0' ) != '0' ) : ?>
	<div class="intro">  
		<?php
		$bg					 = get_theme_mod( $section_name . '_intro_img_image', '' );
		$img				 = get_theme_mod( $section_name . '_section_intro_set', 'image' );
		$parallax			 = get_theme_mod( 'parallax_intro', 1 );
		$image_id			 = attachment_url_to_postid( $bg );
		$image_attributes	 = wp_get_attachment_image_src( $image_id, 'full' );
		?>
		<div class="prlx <?php
		if ( $bg != '' && $img == 'image' && $parallax == 1 ) {
			echo 'img-holder';
		}
		?>" style="background-image: url(<?php if ( $parallax != 1 ) echo esc_url( $bg ) ?>); height:<?php if ( $parallax != 1 ) echo absint( $image_attributes[ 2 ] ) . 'px' ?>" data-image="<?php echo esc_url( $bg ); ?>" data-width="<?php echo $image_attributes[ 1 ]; ?>" data-height="<?php echo $image_attributes[ 2 ]; ?>"></div>
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
				<?php if ( class_exists( 'WooCommerce' ) ) : ?>
			<div class="woocommerce text-center" data-columns="columns-3">
				<div class="columns-3" >
					<?php
					global $woocommerce_loop;
					$product_type = get_theme_mod( 'woo_products_settings', 'recent_products' );
					if ( $product_type == 'recent_products' ) {
						$params = array(
							'posts_per_page'		 => absint( get_theme_mod( $section_name . '_per_page', '4' ) ),
							'ignore_sticky_posts'	 => 1,
							'post_status'			 => 'publish',
							'post_type'				 => 'product',
							'order'					 => get_theme_mod( 'woo_products_settings_order', 'DESC' ),
							'orderby'				 => 'date',
						);
					} elseif ( $product_type == 'sale_products' ) {
						$params = array(
							'posts_per_page'		 => absint( get_theme_mod( $section_name . '_per_page', '4' ) ),
							'ignore_sticky_posts'	 => 1,
							'post_status'			 => 'publish',
							'post_type'				 => 'product',
							'order'					 => get_theme_mod( 'woo_products_settings_order', 'DESC' ),
							'orderby'				 => 'date',
							'meta_query'			 => WC()->query->get_meta_query(),
							'post__in'				 => array_merge( array( 0 ), wc_get_product_ids_on_sale() )
						);
					} elseif ( $product_type == 'featured_products' ) {
						$params = array(
							'posts_per_page'		 => absint( get_theme_mod( $section_name . '_per_page', '4' ) ),
							'ignore_sticky_posts'	 => 1,
							'post_status'			 => 'publish',
							'post_type'				 => 'product',
							'order'					 => get_theme_mod( 'woo_products_settings_order', 'DESC' ),
							'orderby'				 => 'date',
							'meta_key'				 => '_featured',
							'meta_value'			 => 'yes',
						);
					} elseif ( $product_type == 'best_selling_products' ) {
						$params = array(
							'posts_per_page'		 => absint( get_theme_mod( $section_name . '_per_page', '4' ) ),
							'ignore_sticky_posts'	 => 1,
							'post_status'			 => 'publish',
							'post_type'				 => 'product',
							'meta_key'				 => 'total_sales',
							'orderby'				 => 'meta_value_num',
						);
					} elseif ( $product_type == 'top_rated_products' ) {
						$meta_query	 = WC()->query->get_meta_query();
						$params		 = array(
							'posts_per_page'		 => absint( get_theme_mod( $section_name . '_per_page', '4' ) ),
							'ignore_sticky_posts'	 => 1,
							'post_status'			 => 'publish',
							'post_type'				 => 'product',
							'orderby'				 => 'meta_value_num',
							'meta_key'				 => '_wc_average_rating'
						);
					}
					$products = new WP_Query( $params );
					if ( $products->have_posts() ) :
						?>

						<?php woocommerce_product_loop_start(); ?>

						<?php while ( $products->have_posts() ) : $products->the_post(); ?>

							<?php woocommerce_get_template_part( 'content', 'product' ); ?>

						<?php endwhile; // end of the loop. ?>

						<?php woocommerce_product_loop_end(); ?>

						<?php
					endif;
					wp_reset_postdata();
					?>
				</div>                                      
				<?php if ( get_theme_mod( $section_name . '_section_button', 1 ) == 1 ) : ?>  
					<a class="shop-products btn btn-default btn-md" href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>">
						<i class="fa fa-shopping-cart"></i><?php esc_html_e( 'Go to shop', 'eleganto' ); ?> 
					</a>
				<?php endif; ?>                                  
			</div>
		<?php endif; ?>
	</div>
</div>  
<div class="border-bottom"></div>

