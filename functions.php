<?php
////////////////////////////////////////////////////////////////////
// Settig Theme-options
//////////////////////////////////////////////////////////////////// 
include_once( trailingslashit( get_template_directory() ) . 'lib/plugin-activation.php' );
include_once( trailingslashit( get_template_directory() ) . 'lib/theme-config.php' );
include_once( trailingslashit( get_template_directory() ) . 'lib/shortcodes.php' );
include_once( trailingslashit( get_template_directory() ) . 'lib/include-kirki.php' );
include_once( trailingslashit( get_template_directory() ) . 'lib/update-notifier.php' );

add_action( 'after_setup_theme', 'eleganto_setup' );

if ( !function_exists( 'eleganto_setup' ) ) :

	function eleganto_setup() {

		// Theme lang
		load_theme_textdomain( 'eleganto', get_template_directory() . '/languages' );

		// Add Title Tag Support
		add_theme_support( 'title-tag' );

		// Register Menus
		register_nav_menus(
			array(
				'top_menu'		 => __( 'Top Menu', 'eleganto' ),
				'footer_menu'	 => __( 'Footer Menu', 'eleganto' ),
			)
		);

		// Add support for a featured image and the size
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 300, 300, true );
		add_image_size( 'eleganto-home', 400, 300, true );
		add_image_size( 'eleganto-square', 400, 400, true );
		add_image_size( 'eleganto-single', 1600, 400, true );


		// Adds RSS feed links to for posts and comments.
		add_theme_support( 'automatic-feed-links' );

		// WooCommerce support
		add_theme_support( 'woocommerce' );
		if ( get_theme_mod( 'woo_gallery_zoom', 0 ) == 1 ) {
			add_theme_support( 'wc-product-gallery-zoom' );
		}
		if ( get_theme_mod( 'woo_gallery_lightbox', 1 ) == 1 ) {
			add_theme_support( 'wc-product-gallery-lightbox' );
		}
		if ( get_theme_mod( 'woo_gallery_slider', 0 ) == 1 ) {
			add_theme_support( 'wc-product-gallery-slider' );
		}
	}

endif;

function eleganto_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'eleganto_content_width', 800 );
}
add_action( 'after_setup_theme', 'eleganto_content_width', 0 );

////////////////////////////////////////////////////////////////////
// Enqueue Styles (normal style.css and bootstrap.css)
////////////////////////////////////////////////////////////////////
function eleganto_theme_stylesheets() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.6', 'all' );
	wp_enqueue_style( 'eleganto-stylesheet', get_stylesheet_uri(), array(), '1.5.1', 'all' );
	// load Font Awesome css
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0' );
	wp_enqueue_style( 'elegant-flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '2.6.3' );
	wp_enqueue_style( 'eleganto-portfolio-css', get_template_directory_uri() . '/css/portfolio.css', array(), '1.4.3' );
	// load animation css
	wp_enqueue_style( 'eleganto-animation', get_template_directory_uri() . '/css/animate.min.css', array(), '3.5.1' );
}

add_action( 'wp_enqueue_scripts', 'eleganto_theme_stylesheets' );

////////////////////////////////////////////////////////////////////
// Register Bootstrap JS with jquery
////////////////////////////////////////////////////////////////////
function eleganto_theme_js() {
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'eleganto-theme-js', get_template_directory_uri() . '/js/customscript.js', array( 'jquery' ), '1.5.1', true );
	if ( get_theme_mod( 'sticky-sidebar', 0 ) != 0 || get_theme_mod( 'float-banner-enable', 0 ) != 0 ) {
		wp_enqueue_script( 'sticky-sidebar', get_template_directory_uri() . '/js/jquery.hc-sticky.min.js', array( 'jquery' ), '1.2.43', true );
	}
	wp_enqueue_script( 'eleganto-menu-sticky', get_template_directory_uri() . '/js/sticky-menu.js', array( 'jquery' ), '1.3.1', true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array( 'jquery' ), '2.6.3', true );
	if ( post_type_exists( 'portfolio' ) ) {
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array( 'jquery' ), '3.0.1', true );
		wp_enqueue_script( 'imagesLoaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '4.4.1', true );
	}
	wp_enqueue_script( 'viewport-check', get_template_directory_uri() . '/js/jquery.viewportchecker.min.js', array( 'jquery' ), '1.8.7', true );
	wp_enqueue_script( 'youtube-bg-player', get_template_directory_uri() . '/js/jquery.youtubebackground.js', array( 'jquery' ), '1.0.5', true );
	wp_enqueue_script( 'smooothscroll', get_template_directory_uri() . '/js/jquery.imageScroll.min.js', array( 'jquery' ), '0.2.3', true );
}

add_action( 'wp_enqueue_scripts', 'eleganto_theme_js' );


////////////////////////////////////////////////////////////////////
// Register Custom Navigation Walker include custom menu widget to use walkerclass
////////////////////////////////////////////////////////////////////

require_once(trailingslashit( get_template_directory() ) . 'lib/wp_bootstrap_navwalker.php');

////////////////////////////////////////////////////////////////////
// Theme Info page
////////////////////////////////////////////////////////////////////

if ( is_admin() ) {
	require_once(trailingslashit( get_template_directory() ) . 'lib/theme-info.php');
}

////////////////////////////////////////////////////////////////////
// Register the Sidebar(s)
////////////////////////////////////////////////////////////////////
add_action( 'widgets_init', 'eleganto_widgets_init' );

function eleganto_widgets_init() {
	register_sidebar(
	array(
		'name'			 => __( 'Right Sidebar', 'eleganto' ),
		'id'			 => 'right-sidebar',
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h3 class="widget-title">',
		'after_title'	 => '</h3>',
	) );

	register_sidebar(
	array(
		'name'			 => __( 'Left Sidebar', 'eleganto' ),
		'id'			 => 'left-sidebar',
		'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h3 class="widget-title">',
		'after_title'	 => '</h3>',
	) );

	register_sidebar(
	array(
		'name'			 => __( 'Footer Section', 'eleganto' ),
		'id'			 => 'footer_area',
		'description'	 => __( 'Content Footer Section', 'eleganto' ),
		'before_widget'	 => '<div id="%1$s" class="widget %2$s col-md-3">',
		'after_widget'	 => '</div>',
		'before_title'	 => '<h3 class="widget-title">',
		'after_title'	 => '</h3>',
	) );
}

////////////////////////////////////////////////////////////////////
// Register hook and action to set Main content area col-md- width based on sidebar declarations
////////////////////////////////////////////////////////////////////

add_action( 'eleganto_main_content_width_hook', 'eleganto_main_content_width_columns' );

function eleganto_main_content_width_columns() {

	$columns = '12';

	if ( get_theme_mod( 'rigth-sidebar-check', 1 ) != 0 ) {
		$columns = $columns - absint( get_theme_mod( 'right-sidebar-size', 3 ) );
	}

	if ( get_theme_mod( 'left-sidebar-check', 0 ) != 0 ) {
		$columns = $columns - absint( get_theme_mod( 'left-sidebar-size', 3 ) );
	}

	echo $columns;
}

function eleganto_main_content_width() {
	do_action( 'eleganto_main_content_width_hook' );
}


if ( !function_exists( 'eleganto_breadcrumb' ) ) :
	////////////////////////////////////////////////////////////////////
	// Breadcrumbs
	////////////////////////////////////////////////////////////////////
	function eleganto_breadcrumb() {
		global $post, $wp_query;
		// schema link
		$home		 = esc_html__( 'Home', 'eleganto' );
		$delimiter	 = ' &raquo; ';
		$homeLink	 = home_url();
		if ( is_home() || is_front_page() ) {
			// no need for breadcrumbs in homepage
		} else {
			echo '<div id="breadcrumbs" >';
			echo '<div class="breadcrumbs-inner container ' . esc_attr( get_theme_mod( 'breadcrumbs-align', 'text-left' ) ) . '">';
			// main breadcrumbs lead to homepage

			echo '<span><a href="' . esc_url( $homeLink ) . '">' . '<i class="fa fa-home"></i><span>' . $home . '</span>' . '</a></span>' . $delimiter . ' ';

			// if blog page exists

			if ( 'page' == get_option( 'show_on_front' ) && get_option( 'page_for_posts' ) ) {
				echo '<span><a href="' . esc_url( get_permalink( get_option( 'page_for_posts' ) ) ) . '">' . '<span>' . esc_html__( 'Blog', 'eleganto' ) . '</span></a></span>' . $delimiter . ' ';
			}

			if ( is_category() ) {
				$thisCat = get_category( get_query_var( 'cat' ), false );
				if ( $thisCat->parent != 0 ) {
					$category_link = get_category_link( $thisCat->parent );
					echo '<span><a href="' . esc_url( $category_link ) . '">' . '<span>' . get_cat_name( $thisCat->parent ) . '</span>' . '</a></span>' . $delimiter . ' ';
				}

				$category_id	 = get_cat_ID( single_cat_title( '', false ) );
				$category_link	 = get_category_link( $category_id );
				echo '<span><a href="' . esc_url( $category_link ) . '">' . '<span>' . single_cat_title( '', false ) . '</span>' . '</a></span>';
			} elseif ( is_single() && !is_attachment() ) {
				if ( get_post_type() != 'post' ) {
					$post_type	 = get_post_type_object( get_post_type() );
					$link		 = get_post_type_archive_link( get_post_type() );
					if ( $link ) {
						printf( '<span><a href="%s">%s</a></span>', esc_url( $link ), $post_type->labels->name );
						echo ' ' . $delimiter . ' ';
					}
					echo get_the_title();
				} else {
					$category = get_the_category();
					if ( $category ) {
						foreach ( $category as $cat ) {
							echo '<span><a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">' . '<span>' . $cat->name . '</span>' . '</a></span>' . $delimiter . ' ';
						}
					}

					echo get_the_title();
				}
			} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() && !is_search() ) {
				$post_type = get_post_type_object( get_post_type() );
				echo $post_type->labels->singular_name;
			} elseif ( is_attachment() ) {
				$parent = get_post( $post->post_parent );
				echo '<span><a href="' . esc_url( get_permalink( $parent ) ) . '">' . '<span>' . $parent->post_title . '</span>' . '</a></span>';
				echo ' ' . $delimiter . ' ' . get_the_title();
			} elseif ( is_page() && !$post->post_parent ) {
				echo '<span><a href="' . esc_url( get_permalink() ) . '">' . '<span>' . get_the_title() . '</span>' . '</a></span>';
			} elseif ( is_page() && $post->post_parent ) {
				$parent_id	 = $post->post_parent;
				$breadcrumbs = array();
				while ( $parent_id ) {
					$page			 = get_post( $parent_id );
					$breadcrumbs[]	 = '<span><a href="' . esc_url( get_permalink( $page->ID ) ) . '">' . '<span>' . get_the_title( $page->ID ) . '</span>' . '</a></span>';
					$parent_id		 = $page->post_parent;
				}

				$breadcrumbs = array_reverse( $breadcrumbs );
				for ( $i = 0; $i < count( $breadcrumbs ); $i++ ) {
					echo $breadcrumbs[ $i ];
					if ( $i != count( $breadcrumbs ) - 1 )
						echo ' ' . $delimiter . ' ';
				}

				echo $delimiter . '<span><a href="' . esc_url( get_permalink() ) . '">' . '<span>' . the_title_attribute( 'echo=0' ) . '</span>' . '</a></span>';
			}
			elseif ( is_tag() ) {
				$tag_id = get_term_by( 'name', single_cat_title( '', false ), 'post_tag' );
				if ( $tag_id ) {
					$tag_link = get_tag_link( $tag_id->term_id );
				}

				echo '<span><a href="' . esc_url( $tag_link ) . '">' . '<span>' . single_cat_title( '', false ) . '</span>' . '</a></span>';
			} elseif ( is_author() ) {
				global $author;
				$userdata = get_userdata( $author );
				echo '<span><a href="' . esc_url( get_author_posts_url( $userdata->ID ) ) . '">' . '<span>' . $userdata->display_name . '</span>' . '</a></span>';
			} elseif ( is_404() ) {
				echo esc_html__( 'Error 404', 'eleganto' );
			} elseif ( is_search() ) {
				echo esc_html__( 'Search results for', 'eleganto' ) . ' ' . get_search_query();
			} elseif ( is_day() ) {
				echo '<span><a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '">' . '<span>' . get_the_time( 'Y' ) . '</span>' . '</a></span>' . $delimiter . ' ';
				echo '<span><a href="' . esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ) . '">' . '<span>' . get_the_time( 'F' ) . '</span>' . '</a></span>' . $delimiter . ' ';
				echo '<span><a href="' . esc_url( get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ) ) . '">' . '<span>' . get_the_time( 'd' ) . '</span>' . '</a></span>';
			} elseif ( is_month() ) {
				echo '<span><a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '">' . '<span>' . get_the_time( 'Y' ) . '</span>' . '</a></span>' . $delimiter . ' ';
				echo '<span><a href="' . esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ) . '">' . '<span>' . get_the_time( 'F' ) . '</span>' . '</a></span>';
			} elseif ( is_year() ) {
				echo '<span><a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '">' . '<span>' . get_the_time( 'Y' ) . '</span>' . '</a></span>';
			}

			if ( get_query_var( 'paged' ) ) {
				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
					echo ' (';
				echo esc_html__( 'Page', 'eleganto' ) . ' ' . get_query_var( 'paged' );
				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
					echo ')';
			}

			echo '</div></div>';
		}
	}

endif;

////////////////////////////////////////////////////////////////////
// Social links
////////////////////////////////////////////////////////////////////
if ( !function_exists( 'eleganto_social_links' ) ) :

	function eleganto_social_links() {
		$twp_social_links	 = array( 
			'twp_social_facebook'	 => 'facebook',
			'twp_social_twitter'	 => 'twitter', 
			'twp_social_google'		 => 'google-plus',
			'twp_social_instagram'	 => 'instagram',
			'twp_social_pin'		 => 'pinterest',
			'twp_social_youtube'	 => 'youtube',
			'twp_social_reddit'		 => 'reddit',
			'twp_social_linkedin'	 => 'linkedin',
			'twp_social_skype'		 => 'skype',
			'twp_social_vimeo'		 => 'vimeo',
			'twp_social_flickr'		 => 'flickr',
			'twp_social_dribble'	 => 'dribbble',
			'twp_social_envelope-o'	 => 'envelope-o',
			'twp_social_rss'		 => 'rss',
		);
		?>
		<div class="social-links">
			<ul>
				<?php
				$i					 = 0;
				$twp_links_output	 = '';
				foreach ( $twp_social_links as $key => $value ) {
					$link = get_theme_mod( $key, '' );
					if ( !empty( $link ) ) {

						$twp_links_output .=
						'<li><a href="' . esc_url( $link ) . '" target="_blank"><i class="fa fa-' . strtolower( $value ) . '"></i></a></li>';
					}
					$i++;
				}
				echo $twp_links_output;
				?>
			</ul>
		</div><!-- .social-links -->
		<?php
	}

endif;

////////////////////////////////////////////////////////////////////
// Excerpt functions
////////////////////////////////////////////////////////////////////
function eleganto_excerpt_length( $length ) {
	return 20;
}

add_filter( 'excerpt_length', 'eleganto_excerpt_length', 999 );

function eleganto_excerpt_more( $more ) {
	return '&hellip;';
}

add_filter( 'excerpt_more', 'eleganto_excerpt_more' );

////////////////////////////////////////////////////////////////////
// Portfolio Title
////////////////////////////////////////////////////////////////////
function eleganto_portfolio_title() {

	$myString	 = get_the_title();
	$strArray	 = explode( ' ', esc_attr( $myString ) );
	if ( !empty( $strArray[ 1 ] ) ) {
		$post_slug = str_replace( '' . $strArray[ 1 ] . '', '<span>' . $strArray[ 1 ] . '</span>', $myString );
	} else {
		$post_slug = get_the_title();
	}
	echo $post_slug;
}

////////////////////////////////////////////////////////////////////
// Portfolio hover animations
////////////////////////////////////////////////////////////////////
function eleganto_portfolio_animation() {

	$portfolio_animations = array(
		'lily'	 => 'Lily',
		'sadie'	 => 'Sadie',
		'roxy'	 => 'Roxy',
		'bubba'	 => 'Bubba',
		'romeo'	 => 'Romeo',
	);

	return $portfolio_animations;
}

////////////////////////////////////////////////////////////////////
// Google Analytics Tracking Code
////////////////////////////////////////////////////////////////////
if ( !function_exists( 'eleganto_google' ) ) {

	function eleganto_google() {

		if ( get_theme_mod( 'google-analytics', '' ) == '' ) {
			return false;
		}

		echo stripslashes( get_theme_mod( 'google-analytics' ) );
	}

}

add_action( 'wp_footer', 'eleganto_google' );

////////////////////////////////////////////////////////////////////
// Custom CSS
////////////////////////////////////////////////////////////////////
function eleganto_custom_css() {

	$eleganto_custom_css = get_theme_mod( 'custom-css', '' );
	if ( !empty( $eleganto_custom_css ) ) {
		echo '<!-- ' . get_bloginfo( 'name' ) . ' Custom Styles -->';
		?><style type="text/css"><?php echo $eleganto_custom_css; ?></style><?php
	}
}

add_action( 'wp_head', 'eleganto_custom_css' );

////////////////////////////////////////////////////////////////////
// 1 click demo import
////////////////////////////////////////////////////////////////////
function eleganto_import_files() {
	return array(
		array(
			'import_file_name'           => 'Gym',
			'import_file_url'            => 'http://preview.themes4wp.com/demos/eleganto-pro/gym/eleganto-gym.xml',
			'import_widget_file_url'     => 'http://preview.themes4wp.com/demos/eleganto-pro/gym/eleganto-gym.wie',
			'import_customizer_file_url' => 'http://preview.themes4wp.com/demos/eleganto-pro/gym/eleganto-gym.dat',
			'import_preview_image_url'   => 'http://preview.themes4wp.com/demos/eleganto-pro/gym/eleganto-gym.jpg',
			'import_notice'              => sprintf( __( 'Activate these plugins before the import: %1s, %2s, %3s', 'eleganto' ), 'Kirki Toolkit', 'MailPoet Newsletters', 'Portfolio Post Type' ),
		),
		array(
		  'import_file_name'           => 'Fashion',
		  'import_file_url'            => 'http://preview.themes4wp.com/demos/eleganto-pro/fashion/eleganto-fashion.xml',
		  'import_widget_file_url'     => 'http://preview.themes4wp.com/demos/eleganto-pro/fashion/eleganto-fashion.wie',
		  'import_customizer_file_url' => 'http://preview.themes4wp.com/demos/eleganto-pro/fashion/eleganto-fashion.dat',
		  'import_preview_image_url'   => 'http://preview.themes4wp.com/demos/eleganto-pro/fashion/eleganto-fashion.jpg',
		  'import_notice'              => sprintf( __( 'Activate these plugins before the import: %1s, %2s, %3s', 'eleganto' ), 'Kirki Toolkit', 'WooCommerce', 'Contact Form 7' ),
		),
		array(
		  'import_file_name'           => 'Business',
		  'import_file_url'            => 'http://preview.themes4wp.com/demos/eleganto-pro/business/eleganto-business.xml',
		  'import_widget_file_url'     => 'http://preview.themes4wp.com/demos/eleganto-pro/business/eleganto-business.wie',
		  'import_customizer_file_url' => 'http://preview.themes4wp.com/demos/eleganto-pro/business/eleganto-business.dat',
		  'import_preview_image_url'   => 'http://preview.themes4wp.com/demos/eleganto-pro/business/eleganto-business.jpg',
		  'import_notice'              => sprintf( __( 'Activate these plugins before the import: %1s, %2s, %3s', 'eleganto' ), 'Kirki Toolkit', 'Contact Form 7', 'Portfolio Post Type' ),
		),
		array(
		  'import_file_name'           => 'Creative',
		  'import_file_url'            => 'http://preview.themes4wp.com/demos/eleganto-pro/creative/eleganto-creative.xml',
		  'import_widget_file_url'     => 'http://preview.themes4wp.com/demos/eleganto-pro/creative/eleganto-creative.wie',
		  'import_customizer_file_url' => 'http://preview.themes4wp.com/demos/eleganto-pro/creative/eleganto-creative.dat',
		  'import_preview_image_url'   => 'http://preview.themes4wp.com/demos/eleganto-pro/creative/eleganto-creative.jpg',
		  'import_notice'              => sprintf( __( 'Activate these plugins before the import: %1s, %2s, %3s', 'eleganto' ), 'Kirki Toolkit', 'MailPoet Newsletters', 'Portfolio Post Type' ),
		),
		array(
		  'import_file_name'           => 'Store',
		  'import_file_url'            => 'http://preview.themes4wp.com/demos/eleganto-pro/store/eleganto-store.xml',
		  'import_widget_file_url'     => 'http://preview.themes4wp.com/demos/eleganto-pro/store/eleganto-store.wie',
		  'import_customizer_file_url' => 'http://preview.themes4wp.com/demos/eleganto-pro/store/eleganto-store.dat',
		  'import_preview_image_url'   => 'http://preview.themes4wp.com/demos/eleganto-pro/store/eleganto-store.jpg',
		  'import_notice'              => sprintf( __( 'Activate these plugins before the import: %1s, %2s, %3s', 'eleganto' ), 'Kirki Toolkit', 'Contact Form 7', 'WooCommerce' ),
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'eleganto_import_files' );	



function eleganto_after_import_setup( $selected_import ) {
	
	if ( 'Creative' !== $selected_import['import_file_name'] ) {
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'top menu', 'nav_menu' );
		$footer = get_term_by( 'name', 'footer', 'nav_menu' );

		set_theme_mod( 'nav_menu_locations', array(
				'top_menu' => $main_menu->term_id,
				'footer_menu' => $footer->term_id,
			)
		);
	}

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Homepage' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'eleganto_after_import_setup' );
