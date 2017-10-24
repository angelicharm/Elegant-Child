<?php

/**
 * Kirki Advanced Customizer
 * @package eleganto
 */
// Early exit if Kirki is not installed
if ( !class_exists( 'Kirki' ) ) {
	return;
}
/* Register Kirki config */
Kirki::add_config( 'eleganto_settings', array(
	'capability'	 => 'edit_theme_options',
	'option_type'	 => 'theme_mod',
) );

/**
 * Add sections
 */
Kirki::add_panel( 'homepage', array(
	'priority'	 => 10,
	'title'		 => __( 'Homepage Settings', 'eleganto' ),
) );

Kirki::add_section( 'homepage_layout', array(
	'title'		 => __( 'Homepage Layout', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'slider_section', array(
	'title'		 => __( 'Slider Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'blog_section', array(
	'title'		 => __( 'Blog Section Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'carousel_section', array(
	'title'		 => __( 'Carousel Section Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'portfolio_section', array(
	'title'		 => __( 'Portfolio Section Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'testimonial_section', array(
	'title'		 => __( 'Testimonial Section Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'image_section', array(
	'title'		 => __( 'Image Section Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'my_team_section', array(
	'title'		 => __( 'My Team Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'custom_one_section', array(
	'title'		 => __( 'Custom Page #1 Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'custom_two_section', array(
	'title'		 => __( 'Custom Page #2 Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'custom_three_section', array(
	'title'		 => __( 'Custom Page #3 Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'newsletter_section', array(
	'title'		 => __( 'Newsletter Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'woocommerce_section', array(
	'title'		 => __( 'WooCommerce Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'contact_section', array(
	'title'		 => __( 'Contact Section Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'logo_section', array(
	'title'		 => __( 'Brand Logos Section Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
Kirki::add_section( 'bg_image_section', array(
	'title'		 => __( 'Background Image Section Settings', 'eleganto' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );

Kirki::add_section( 'sidebar_section', array(
	'title'			 => __( 'Sidebars', 'eleganto' ),
	'priority'		 => 10,
	'description'	 => __( 'Sidebar layouts.', 'eleganto' ),
) );

Kirki::add_section( 'layout_section', array(
	'title'			 => __( 'Main styling', 'eleganto' ),
	'priority'		 => 10,
	'description'	 => __( 'Define theme layout', 'eleganto' ),
) );

Kirki::add_section( 'social_icons_section', array(
	'title'		 => __( 'Social icons', 'eleganto' ),
	'priority'	 => 10,
) );

Kirki::add_section( 'post_section', array(
	'title'			 => __( 'Post settings', 'eleganto' ),
	'priority'		 => 10,
	'description'	 => __( 'Single post settings', 'eleganto' ),
) );
Kirki::add_section( 'site_bg_section', array(
	'title'		 => __( 'Site Background', 'eleganto' ),
	'priority'	 => 10,
) );
Kirki::add_section( 'colors_section', array(
	'title'		 => __( 'Colors', 'eleganto' ),
	'priority'	 => 10,
) );
if ( class_exists( 'WooCommerce' ) ) {
	Kirki::add_section( 'woo_section_global_colors', array(
		'title'			 => __( 'WooCommerce', 'eleganto' ),
		'priority'		 => 10,
	) );
}
Kirki::add_section( 'typography_section', array(
	'title'		 => __( 'Typography', 'eleganto' ),
	'priority'	 => 10,
) );
Kirki::add_section( 'code_section', array(
	'title'		 => __( 'Custom Codes', 'eleganto' ),
	'priority'	 => 10,
) );


/**
 * Homepage Layout
 */
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'radio-buttonset',
	'settings'		 => 'home_slider',
	'label'			 => __( 'Slider', 'eleganto' ),
	'description'	 => __( 'Select slider type displayed on homepage', 'eleganto' ),
	'section'		 => 'homepage_layout',
	'default'		 => 'flexslider',
	'priority'		 => 10,
	'choices'		 => array(
		'off'		 => esc_attr__( 'Off', 'eleganto' ),
		'flexslider' => esc_attr__( 'Flexslider', 'eleganto' ),
		'crelly'	 => esc_attr__( 'Crelly Slider', 'eleganto' ),
	),
) );
if ( !function_exists( 'crellySlider' ) ) {
	Kirki::add_field( 'eleganto_settings', array(
		'type'				 => 'custom',
		'settings'			 => 'crelly_slider',
		'section'			 => 'homepage_layout',
		'default'			 => 'The plugin <a target="_blank" href="https://wordpress.org/plugins/crelly-slider/" >Crelly Slider</a> is not installed and activated. You must install and activate this plugin!',
		'priority'			 => 10,
		'active_callback'	 => array(
			array(
				'setting'	 => 'home_slider',
				'operator'	 => '==',
				'value'		 => 'crelly',
			),
		)
	) );
}
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'sortable',
	'settings'	 => 'home_layout',
	'label'		 => esc_attr__( 'Homepage Blocks', 'eleganto' ),
	'section'	 => 'homepage_layout',
	'help'		 => esc_attr__( 'Drag and Drop and enable the homepage blocks.', 'eleganto' ),
	'default'	 => array( 'carousel_section', 'image_section', 'testimonial_section', 'blog_section' ),
	'priority'	 => 10,
	'choices'	 => array(
		'carousel_section'		 => esc_attr__( 'Carousel', 'eleganto' ),
		'blog_section'			 => esc_attr__( 'Blog', 'eleganto' ),
		'portfolio_section'		 => esc_attr__( 'Portfolio', 'eleganto' ),
		'testimonial_section'	 => esc_attr__( 'Testimonial', 'eleganto' ),
		'contact_section'		 => esc_attr__( 'Contact', 'eleganto' ),
		'image_section'			 => esc_attr__( 'Image', 'eleganto' ),
		'my_team_section'		 => esc_attr__( 'My Team', 'eleganto' ),
		'newsletter_section'	 => esc_attr__( 'Newsletter', 'eleganto' ),
		'woocommerce_section'	 => esc_attr__( 'WooCommerce', 'eleganto' ),
		'custom_one_section'	 => esc_attr__( 'Custom Page #1', 'eleganto' ),
		'custom_two_section'	 => esc_attr__( 'Custom Page #2', 'eleganto' ),
		'custom_three_section'	 => esc_attr__( 'Custom Page #3', 'eleganto' ),
		'logo_section'			 => esc_attr__( 'Brand Logos', 'eleganto' ),
		'bg_image_section'		 => esc_attr__( 'Background Image', 'eleganto' ),
	),
) );
if ( !function_exists( 'crellySlider' ) && get_theme_mod( 'home_slider', 'flexslider' ) == 'crelly' ) {
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'custom',
		'settings'	 => 'crelly_slider',
		'section'	 => 'slider_section',
		'default'	 => 'The plugin <a target="_blank" href="https://wordpress.org/plugins/crelly-slider/" >Crelly Slider</a> is not installed and activated. You must install and activate this plugin!',
		'priority'	 => 10,
	) );
} elseif ( function_exists( 'crellySlider' ) && get_theme_mod( 'home_slider', 'flexslider' ) == 'crelly' ) {
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'custom',
		'settings'	 => 'crelly_slider',
		'section'	 => 'slider_section',
		'default'	 => 'The plugin <a target="_blank" href="https://wordpress.org/plugins/crelly-slider/" >Crelly Slider</a> is activated. Go to WordPress dashboard -> Crelly Slider and setup the slider there! Paste the Alias from your slider below.',
		'priority'	 => 10,
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'			 => 'text',
		'settings'		 => 'crelly_slider_shortcode',
		'label'			 => __( 'Crelly Slider Alias', 'eleganto' ),
		'description'	 => __( 'Paste the Crelly Slider alias (e.g eleganto_pro_1)', 'eleganto' ),
		'default'		 => '',
		'section'		 => 'slider_section',
		'priority'		 => 10,
	) );
} else {
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'slider',
		'settings'	 => 'slider_height',
		'label'		 => esc_attr__( 'Slider height', 'eleganto' ),
		'section'	 => 'slider_section',
		'default'	 => 500,
		'priority'	 => 11,
		'choices'	 => array(
			'min'	 => '300',
			'max'	 => '1080',
			'step'	 => '10',
		),
		'output'	 => array(
			array(
				'element'	 => '.flexslider-container, .homepage-slider .slides, .homepage-slider .flex-viewport',
				'property'	 => 'height',
				'units'		 => 'px',
			),
		),
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'slider',
		'settings'	 => 'slider_interval',
		'label'		 => esc_attr__( 'Slider Interval', 'eleganto' ),
		'section'	 => 'slider_section',
		'priority'	 => 12,
		'default'	 => 7000,
		'choices'	 => array(
			'min'	 => '2000',
			'max'	 => '20000',
			'step'	 => '500',
		),
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'radio-buttonset',
		'settings'	 => 'slider_caption_style',
		'label'		 => __( 'Caption Style', 'eleganto' ),
		'section'	 => 'slider_section',
		'default'	 => 'caption-one',
		'priority'	 => 13,
		'choices'	 => array(
			'caption-one'	 => esc_attr__( 'Style #1', 'eleganto' ),
			'caption-two'	 => esc_attr__( 'Style #2', 'eleganto' ),
		),
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'radio-buttonset',
		'settings'	 => 'slider_animation',
		'label'		 => __( 'Slider Animation', 'eleganto' ),
		'section'	 => 'slider_section',
		'default'	 => 'slide',
		'priority'	 => 14,
		'choices'	 => array(
			'slide'	 => esc_attr__( 'Slide', 'eleganto' ),
			'fade'	 => esc_attr__( 'Fade', 'eleganto' ),
		),
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'radio-image',
		'settings'	 => 'slider_bg_overlay',
		'label'		 => __( 'Slider Images Overlay', 'eleganto' ),
		'section'	 => 'slider_section',
		'default'	 => '',
		'priority'	 => 15,
		'choices'	 => array(
			''														 => get_template_directory_uri() . '/img/pattern/none.png',
			get_template_directory_uri() . '/img/pattern/bg_1.png'	 => get_template_directory_uri() . '/img/pattern/bg_1.png',
			get_template_directory_uri() . '/img/pattern/bg_2.png'	 => get_template_directory_uri() . '/img/pattern/bg_2.png',
			get_template_directory_uri() . '/img/pattern/bg_3.png'	 => get_template_directory_uri() . '/img/pattern/bg_3.png',
			get_template_directory_uri() . '/img/pattern/bg_4.png'	 => get_template_directory_uri() . '/img/pattern/bg_4.png',
			get_template_directory_uri() . '/img/pattern/bg_5.png'	 => get_template_directory_uri() . '/img/pattern/bg_5.png',
			get_template_directory_uri() . '/img/pattern/bg_6.png'	 => get_template_directory_uri() . '/img/pattern/bg_6.png',
		),
		'output'	 => array(
			array(
				'element'	 => '.homepage-slider .slides > li:after',
				'property'	 => 'background-image',
			),
		),
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'				 => 'repeater',
		'label'				 => __( 'Slider', 'eleganto' ),
		'section'			 => 'slider_section',
		'priority'			 => 16,
		'settings'			 => 'repeater_slider',
		'sanitize_callback'	 => 'wp_kses_post',
		'default'			 => array(
			array(
				'slider_image'	 => get_template_directory_uri() . '/img/demo/slider-bg.jpg',
				'slider_title'	 => 'Eleganto Business Theme',
				'slider_desc'	 => 'Eleganto is a Free One Page WordPress Theme with unlimited colors, homepage layouts, parallax effects, awesome slider, more than 100 theme options, portfolio section, and much more. This free One Page WordPress Theme is perfect for any business site!',
				'slider_url'	 => '#',
			),
			array(
				'slider_image'	 => get_template_directory_uri() . '/img/demo/slider-bg2.jpg',
				'slider_title'	 => 'Unlimited colors and layout',
				'slider_desc'	 => 'Eleganto is an elegant theme for WordPress business / corporate sites. One Page design, portfolio, parallax effects, contact form and awesome animations make this free OnePage WordPress theme perfect for any kind of business, creative, corporate, photography, portfolio websites.',
				'slider_url'	 => '#',
			),
		),
		'fields'			 => array(
			'slider_image'	 => array(
				'type'		 => 'image',
				'label'		 => __( 'Image', 'eleganto' ),
				'default'	 => '',
			),
			'slider_title'	 => array(
				'type'		 => 'text',
				'label'		 => __( 'Title', 'eleganto' ),
				'default'	 => '',
			),
			'slider_desc'	 => array(
				'type'		 => 'text',
				'label'		 => __( 'Description', 'eleganto' ),
				'default'	 => '',
			),
			'slider_url'	 => array(
				'type'		 => 'text',
				'label'		 => __( 'URL', 'eleganto' ),
				'default'	 => '',
			),
		),
	) );
}
/**
 * Sections base settings
 */
$sections = array(
	'carousel'		 => array(
		'color'		 => '#f90031',
		'menu'		 => 'Carousel',
		'intro-img'	 => '',
		'intro-on'	 => 0,
	),
	'blog'			 => array(
		'color'		 => '#FF9100',
		'menu'		 => 'Blog',
		'intro-img'	 => get_template_directory_uri() . '/img/demo/intro1bg.jpg',
		'intro-on'	 => 1,
	),
	'portfolio'		 => array(
		'color'		 => '#00ff33',
		'menu'		 => 'Portfolio',
		'intro-img'	 => '',
		'intro-on'	 => 0,
	),
	'testimonial'	 => array(
		'color'		 => '#009BFF',
		'menu'		 => 'Testimonial',
		'intro-img'	 => get_template_directory_uri() . '/img/demo/intro2bg.jpg',
		'intro-on'	 => 1,
	),
	'contact'		 => array(
		'color'		 => '#353535',
		'menu'		 => 'Contact',
		'intro-img'	 => '',
		'intro-on'	 => 0,
	),
	'image'			 => array(
		'color'		 => '#ffd800',
		'menu'		 => 'Image',
		'intro-img'	 => get_template_directory_uri() . '/img/demo/intro3bg.jpg',
		'intro-on'	 => 1,
	),
	'my_team'		 => array(
		'color'		 => '#006793',
		'menu'		 => 'My Team',
		'intro-img'	 => '',
		'intro-on'	 => 0,
	),
	'custom_one'	 => array(
		'color'		 => '#00875a',
		'menu'		 => 'Custom 1',
		'intro-img'	 => '',
		'intro-on'	 => 0,
	),
	'custom_two'	 => array(
		'color'		 => '#FFC500',
		'menu'		 => 'Custom 2',
		'intro-img'	 => '',
		'intro-on'	 => 0,
	),
	'custom_three'	 => array(
		'color'		 => '#0a0a0a',
		'menu'		 => 'Custom 3',
		'intro-img'	 => '',
		'intro-on'	 => 0,
	),
	'newsletter'	 => array(
		'color'		 => '#00875a',
		'menu'		 => 'Newsletter',
		'intro-img'	 => '',
		'intro-on'	 => 0,
	),
	'woocommerce'	 => array(
		'color'		 => '#FF00A5',
		'menu'		 => 'WooCommerce',
		'intro-img'	 => '',
		'intro-on'	 => 0,
	),
	'logo'			 => array(
		'color'		 => '#D2D2D2',
		'menu'		 => 'Brands',
		'intro-img'	 => '',
		'intro-on'	 => 0,
	),
);

foreach ( $sections as $keys => $values ) {
	Kirki::add_field( 'eleganto_settings', array(
		'type'			 => 'toggle',
		'settings'		 => $keys . '_intro_enable',
		'label'			 => __( 'Section Intro', 'eleganto' ),
		'description'	 => __( 'Enable or disable section intro', 'eleganto' ),
		'section'		 => $keys . '_section',
		'default'		 => $values[ 'intro-on' ],
		'priority'		 => 1,
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'				 => 'text',
		'settings'			 => $keys . '_intro_title',
		'label'				 => __( 'Intro Title', 'eleganto' ),
		'sanitize_callback'	 => 'wp_kses_post',
		'default'			 => 'Intro Title',
		'section'			 => $keys . '_section',
		'priority'			 => 2,
		'active_callback'	 => array(
			array(
				'setting'	 => $keys . '_intro_enable',
				'operator'	 => '==',
				'value'		 => 1,
			),
		)
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'				 => 'text',
		'settings'			 => $keys . '_intro_desc',
		'label'				 => __( 'Intro Description', 'eleganto' ),
		'sanitize_callback'	 => 'wp_kses_post',
		'default'			 => 'Intro Description',
		'section'			 => $keys . '_section',
		'priority'			 => 3,
		'active_callback'	 => array(
			array(
				'setting'	 => $keys . '_intro_enable',
				'operator'	 => '==',
				'value'		 => 1,
			),
		)
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'				 => 'spacing',
		'settings'			 => $keys . '_intro_padding',
		'label'				 => __( 'Intro Padding', 'eleganto' ),
		'section'			 => $keys . '_section',
		'priority'			 => 4,
		'default'			 => array(
			'top'	 => '80px',
			'bottom' => '80px',
		),
		'output'			 => array(
			array(
				'element'	 => '#' . $keys . '_section .intro',
				'property'	 => 'padding',
			),
		),
		'active_callback'	 => array(
			array(
				'setting'	 => $keys . '_intro_enable',
				'operator'	 => '==',
				'value'		 => 1,
			),
		),
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'				 => 'radio-buttonset',
		'settings'			 => $keys . '_section_intro_set',
		'label'				 => __( 'Intro Background', 'eleganto' ),
		'section'			 => $keys . '_section',
		'default'			 => 'image',
		'priority'			 => 5,
		'choices'			 => array(
			'image'	 => esc_attr__( 'Image', 'eleganto' ),
			'video'	 => esc_attr__( 'Video', 'eleganto' ),
		),
		'active_callback'	 => array(
			array(
				'setting'	 => $keys . '_intro_enable',
				'operator'	 => '==',
				'value'		 => 1,
			),
		)
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'				 => 'color',
		'settings'			 => $keys . '_intro_img_color',
		'label'				 => __( 'Intro Background Color', 'eleganto' ),
		'section'			 => $keys . '_section',
		'default'			 => '#FFFFFF',
		'priority'			 => 7,
		'output'			 => array(
			array(
				'element'	 => '#' . $keys . '_section .intro',
				'property'	 => 'background-color',
			),
		),
		'active_callback'	 => array(
			array(
				'setting'	 => $keys . '_intro_enable',
				'operator'	 => '==',
				'value'		 => 1,
			),
			array(
				'setting'	 => $keys . '_section_intro_set',
				'operator'	 => '==',
				'value'		 => 'image',
			),
		),
		'transport'			 => 'auto',
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'				 => 'image',
		'settings'			 => $keys . '_intro_img_image',
		'label'				 => __( 'Intro Background Image', 'eleganto' ),
		'section'			 => $keys . '_section',
		'default'			 => $values[ 'intro-img' ],
		'priority'			 => 7,
		'active_callback'	 => array(
			array(
				'setting'	 => $keys . '_intro_enable',
				'operator'	 => '==',
				'value'		 => 1,
			),
			array(
				'setting'	 => $keys . '_section_intro_set',
				'operator'	 => '==',
				'value'		 => 'image',
			),
		),
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'				 => 'text',
		'settings'			 => $keys . '_section_video_id',
		'label'				 => __( 'Youtube Video ID', 'eleganto' ),
		'description'		 => __( 'Paste the Youtube video ID (e.g LSmgKRx5pBo)', 'eleganto' ),
		'default'			 => '',
		'section'			 => $keys . '_section',
		'priority'			 => 7,
		'active_callback'	 => array(
			array(
				'setting'	 => $keys . '_intro_enable',
				'operator'	 => '==',
				'value'		 => 1,
			),
			array(
				'setting'	 => $keys . '_section_intro_set',
				'operator'	 => '==',
				'value'		 => 'video',
			),
		)
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'color',
		'settings'	 => $keys . '_section_color',
		'label'		 => __( 'Section Background Color', 'eleganto' ),
		'section'	 => $keys . '_section',
		'default'	 => $values[ 'color' ],
		'priority'	 => 8,
		'output'	 => array(
			array(
				'element'	 => '#' . $keys . '_section .section, #main-navigation .nav a.nav-' . $keys . '_section:after, #' . $keys . '_section .sub-title span',
				'property'	 => 'background-color',
			),
			array(
				'element'	 => '#' . $keys . '_section .border-top, #' . $keys . '_section .border-bottom',
				'property'	 => 'border-color',
			),
		),
		'transport'	 => 'auto',
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'color',
		'settings'	 => $keys . '_section_font_color',
		'label'		 => __( 'Section Font Color', 'eleganto' ),
		'section'	 => $keys . '_section',
		'default'	 => '#ffffff',
		'priority'	 => 9,
		'output'	 => array(
			array(
				'element'	 => '#' . $keys . '_section .section, #' . $keys . '_section .section a, #main-navigation .nav a.nav-' . $keys . '_section:hover, #main-navigation .nav a.nav-' . $keys . '_section.active',
				'property'	 => 'color',
			),
			array(
				'element'	 => '#' . $keys . '_section .sub-title:before',
				'property'	 => 'background-color',
			),
		),
		'transport'	 => 'auto',
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'				 => 'text',
		'settings'			 => $keys . '_section_title',
		'label'				 => __( 'Section Title', 'eleganto' ),
		'sanitize_callback'	 => 'wp_kses_post',
		'default'			 => 'Section Title',
		'section'			 => $keys . '_section',
		'priority'			 => 10,
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'radio-buttonset',
		'settings'	 => $keys . '_section_title_style',
		'label'		 => __( 'Title Style', 'eleganto' ),
		'section'	 => $keys . '_section',
		'default'	 => 'title-style-one',
		'priority'	 => 10,
		'choices'	 => array(
			'title-style-one'			 => esc_attr__( 'Clear', 'eleganto' ),
			'title-style-bordered'		 => esc_attr__( 'Bordered', 'eleganto' ),
			'title-style-shadowed'		 => esc_attr__( 'Shadowed', 'eleganto' ),
			'title-style-boxed-shadow'	 => esc_attr__( 'Boxed', 'eleganto' ),
			'title-style-layered'		 => esc_attr__( 'Layered', 'eleganto' ),
		),
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'				 => 'text',
		'settings'			 => $keys . '_section_desc',
		'label'				 => __( 'Section Description', 'eleganto' ),
		'sanitize_callback'	 => 'wp_kses_post',
		'default'			 => 'Section Description',
		'section'			 => $keys . '_section',
		'priority'			 => 10,
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'text',
		'settings'	 => $keys . '_section_menu_title',
		'label'		 => __( 'Main Menu Title', 'eleganto' ),
		'default'	 => $values[ 'menu' ],
		'section'	 => $keys . '_section',
		'priority'	 => 10,
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'select',
		'settings'	 => $keys . '_section_animation',
		'label'		 => __( 'Section Animation', 'eleganto' ),
		'section'	 => $keys . '_section',
		'default'	 => 'none',
		'priority'	 => 10,
		'multiple'	 => 1,
		'choices'	 => eleganto_animation(),
	) );
}

/**
 * Blog Section
 */
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'slider',
	'settings'	 => 'blog_section_number_posts',
	'label'		 => __( 'Number of Posts', 'eleganto' ),
	'section'	 => 'blog_section',
	'default'	 => 3,
	'priority'	 => 11,
	'choices'	 => array(
		'min'	 => 1,
		'max'	 => 20,
		'step'	 => 1
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'blog_row',
	'label'		 => __( 'Visible items', 'eleganto' ),
	'section'	 => 'blog_section',
	'default'	 => 'col-md-4',
	'priority'	 => 14,
	'choices'	 => array(
		'col-md-6'	 => '2',
		'col-md-4'	 => '3',
		'col-md-3'	 => '4',
		'col-md-15'	 => '5',
		'col-md-2'	 => '6',
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'blog_section_style',
	'label'		 => __( 'Posts Layout', 'eleganto' ),
	'section'	 => 'blog_section',
	'default'	 => 'blog-basic',
	'priority'	 => 12,
	'choices'	 => array(
		'blog-basic' => __( 'Basic', 'eleganto' ),
		'blog-hover' => __( 'Hover', 'eleganto' ),
		'blog-image' => __( 'Image', 'eleganto' ),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'toggle',
	'settings'			 => 'blog_section_button',
	'label'				 => __( 'Button to archive', 'eleganto' ),
	'section'			 => 'blog_section',
	'default'			 => 0,
	'priority'			 => 13,
	'active_callback'	 => array(
		array(
			'setting'	 => 'show_on_front',
			'operator'	 => '==',
			'value'		 => 'page',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'text',
	'settings'			 => 'blog_section_button_text',
	'label'				 => __( 'Button Text', 'eleganto' ),
	'default'			 => 'View all posts',
	'section'			 => 'blog_section',
	'priority'			 => 14,
	'active_callback'	 => array(
		array(
			'setting'	 => 'show_on_front',
			'operator'	 => '==',
			'value'		 => 'page',
		),
		array(
			'setting'	 => 'blog_section_button',
			'operator'	 => '==',
			'value'		 => 1,
		),
	),
) );

/**
 * Carousel Section
 */
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'carousel_autostart',
	'label'		 => __( 'Animate Carousel Automatically', 'eleganto' ),
	'section'	 => 'carousel_section',
	'default'	 => 'true',
	'priority'	 => 11,
	'choices'	 => array(
		'true'	 => esc_attr__( 'Yes', 'eleganto' ),
		'false'	 => esc_attr__( 'No', 'eleganto' ),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'slider',
	'settings'			 => 'carousel_interval',
	'label'				 => esc_attr__( 'Carousel Interval', 'eleganto' ),
	'section'			 => 'carousel_section',
	'priority'			 => 12,
	'default'			 => 7000,
	'choices'			 => array(
		'min'	 => '2000',
		'max'	 => '20000',
		'step'	 => '500',
	),
	'active_callback'	 => array(
		array(
			'setting'	 => 'carousel_autostart',
			'operator'	 => '==',
			'value'		 => 'true',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'radio-buttonset',
	'settings'			 => 'carousel_loop',
	'label'				 => __( 'Animation Loop', 'eleganto' ),
	'section'			 => 'carousel_section',
	'default'			 => 'false',
	'priority'			 => 13,
	'choices'			 => array(
		'true'	 => esc_attr__( 'Yes', 'eleganto' ),
		'false'	 => esc_attr__( 'No', 'eleganto' ),
	),
	'active_callback'	 => array(
		array(
			'setting'	 => 'carousel_autostart',
			'operator'	 => '==',
			'value'		 => 'true',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'carousel_row',
	'label'		 => __( 'Visible items', 'eleganto' ),
	'section'	 => 'carousel_section',
	'default'	 => '4',
	'priority'	 => 14,
	'choices'	 => array(
		'3'	 => '3',
		'4'	 => '4',
		'5'	 => '5',
		'6'	 => '6',
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'repeater',
	'label'				 => __( 'Carousel Items', 'eleganto' ),
	'description'		 => __( 'Recommended images width 450px', 'eleganto' ),
	'section'			 => 'carousel_section',
	'priority'			 => 15,
	'settings'			 => 'repeater_carousel',
	'sanitize_callback'	 => 'wp_kses_post',
	'default'			 => array(
		array(
			'carousel_image' => get_template_directory_uri() . '/img/demo/carousel/carousel-img1.png',
			'carousel_title' => 'Parallax Effect',
			'carousel_desc'	 => 'Eleganto includes Parallax effect where the background image, is moved at a different speed than the foreground content while scrolling',
			'carousel_url'	 => '',
		),
		array(
			'carousel_image' => get_template_directory_uri() . '/img/demo/carousel/carousel-img3.png',
			'carousel_title' => 'Portfolio Section',
			'carousel_desc'	 => 'A portfolio is much more than a simple section, its personality is as important as the projects displayed on it, specially remarkable for young projects and agencies.',
			'carousel_url'	 => '',
		),
		array(
			'carousel_image' => get_template_directory_uri() . '/img/demo/carousel/carousel-img4.png',
			'carousel_title' => 'Homepage Styles',
			'carousel_desc'	 => 'You can styling your homepage via theme option panel. Enable or disable homepage sections, set the colors, headings, backgrounds and much more...',
			'carousel_url'	 => '',
		),
		array(
			'carousel_image' => get_template_directory_uri() . '/img/demo/carousel/carousel-img2.png',
			'carousel_title' => 'Options Panel',
			'carousel_desc'	 => 'Eleganto is easy to customize based on WordPress Customizer. More than 100 theme options. Try it for free, check the documentation.',
			'carousel_url'	 => '',
		),
		array(
			'carousel_image' => get_template_directory_uri() . '/img/demo/carousel/carousel-img.png',
			'carousel_title' => 'Free OnePage Theme',
			'carousel_desc'	 => 'Eleganto is a Free One Page WordPress Theme for any kind of business sites.',
			'carousel_url'	 => '',
		),
	),
	'fields'			 => array(
		'carousel_image' => array(
			'type'		 => 'image',
			'label'		 => __( 'Image', 'eleganto' ),
			'default'	 => '',
		),
		'carousel_title' => array(
			'type'		 => 'text',
			'label'		 => __( 'Title', 'eleganto' ),
			'default'	 => '',
		),
		'carousel_desc'	 => array(
			'type'		 => 'text',
			'label'		 => __( 'Description', 'eleganto' ),
			'default'	 => '',
		),
		'carousel_url'	 => array(
			'type'		 => 'text',
			'label'		 => __( 'URL', 'eleganto' ),
			'default'	 => '',
		),
	),
	'row_label'			 => array(
		'type'	 => 'text',
		'value'	 => __( 'Item', 'eleganto' ),
	),
) );

/**
 * Portfolio Section
 */
if ( class_exists( 'Portfolio_Post_Type' ) ) {
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'slider',
		'settings'	 => 'portfolio_section_number_posts',
		'label'		 => __( 'Number of Posts', 'eleganto' ),
		'section'	 => 'portfolio_section',
		'default'	 => 8,
		'priority'	 => 11,
		'choices'	 => array(
			'min'	 => 1,
			'max'	 => 40,
			'step'	 => 1
		),
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'radio-buttonset',
		'settings'	 => 'portfolio_section_size',
		'label'		 => __( 'Number of columns in row', 'eleganto' ),
		'section'	 => 'portfolio_section',
		'default'	 => '3',
		'priority'	 => 12,
		'choices'	 => array(
			'6'	 => '2',
			'4'	 => '3',
			'3'	 => '4',
		),
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'radio-buttonset',
		'settings'	 => 'portfolio_section_animation',
		'label'		 => __( 'Portfolio Animation', 'eleganto' ),
		'section'	 => 'portfolio_section',
		'default'	 => 'lily',
		'priority'	 => 13,
		'choices'	 => eleganto_portfolio_animation(),
	) );
} else {
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'custom',
		'settings'	 => 'portfolio_section_form_disable',
		'label'		 => __( 'Plugin Portfolio Post Type is not installed and activated. Activate it to enable Protfolio functions.', 'eleganto' ),
		'section'	 => 'portfolio_section',
		'priority'	 => 14,
	) );
}
/**
 * Testimonial Section
 */
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'testimonial_autostart',
	'label'		 => __( 'Animate Carousel Automatically', 'eleganto' ),
	'section'	 => 'testimonial_section',
	'default'	 => 'true',
	'priority'	 => 11,
	'choices'	 => array(
		'true'	 => esc_attr__( 'Yes', 'eleganto' ),
		'false'	 => esc_attr__( 'No', 'eleganto' ),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'slider',
	'settings'			 => 'testimonial_interval',
	'label'				 => esc_attr__( 'Carousel Interval', 'eleganto' ),
	'section'			 => 'testimonial_section',
	'priority'			 => 12,
	'default'			 => 5000,
	'choices'			 => array(
		'min'	 => '2000',
		'max'	 => '30000',
		'step'	 => '500',
	),
	'active_callback'	 => array(
		array(
			'setting'	 => 'testimonial_autostart',
			'operator'	 => '==',
			'value'		 => 'true',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'repeater',
	'label'				 => __( 'Testimonials', 'eleganto' ),
	'section'			 => 'testimonial_section',
	'priority'			 => 13,
	'settings'			 => 'repeater_testimonial',
	'sanitize_callback'	 => 'wp_kses_post',
	'default'			 => array(
		array(
			'testimonial_image'	 => get_template_directory_uri() . '/img/demo/testimonial/face1.jpg',
			'testimonial_name'	 => 'Themes4WP.com',
			'testimonial_desc'	 => 'Themes4WP is specialized in developing fast and SEO optimized Free and Premium WordPress Themes which are suitable for dynamic News Websites, Online Magazines and WooCommerce websites.',
			'testimonial_url'	 => '#',
		),
		array(
			'testimonial_image'	 => get_template_directory_uri() . '/img/demo/testimonial/face2.jpg',
			'testimonial_name'	 => 'WordPress.org',
			'testimonial_desc'	 => 'WordPress is web software you can use to create a beautiful website, blog, or app. We like to say that WordPress is both free and priceless at the same time.',
			'testimonial_url'	 => '#',
		),
	),
	'fields'			 => array(
		'testimonial_image'	 => array(
			'type'		 => 'image',
			'label'		 => __( 'Photo', 'eleganto' ),
			'default'	 => '',
		),
		'testimonial_name'	 => array(
			'type'		 => 'text',
			'label'		 => __( 'Name', 'eleganto' ),
			'default'	 => '',
		),
		'testimonial_desc'	 => array(
			'type'		 => 'textarea',
			'label'		 => __( 'Testimonial', 'eleganto' ),
			'default'	 => '',
		),
		'testimonial_url'	 => array(
			'type'		 => 'text',
			'label'		 => __( 'Link', 'eleganto' ),
			'default'	 => '',
		),
	),
	'row_label'			 => array(
		'type'	 => 'text',
		'value'	 => __( 'Testimonial', 'eleganto' ),
	),
) );

/**
 * My Team Section
 */
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'select',
	'settings'	 => 'my_team_layout',
	'label'		 => __( 'Section Layout', 'eleganto' ),
	'section'	 => 'my_team_section',
	'default'	 => 'team-basic',
	'priority'	 => 11,
	'choices'	 => array(
		'team-basic'	 => __( 'Basic', 'eleganto' ),
		'team-rounded'	 => __( 'Rounded', 'eleganto' ),
		'team-squared'	 => __( 'Squared', 'eleganto' ),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'repeater',
	'label'				 => __( 'My Team', 'eleganto' ),
	'section'			 => 'my_team_section',
	'priority'			 => 12,
	'settings'			 => 'repeater_my_team',
	'sanitize_callback'	 => 'wp_kses_post',
	'fields'			 => array(
		'my_team_image'		 => array(
			'type'		 => 'image',
			'label'		 => __( 'Photo', 'eleganto' ),
			'default'	 => '',
		),
		'my_team_name'		 => array(
			'type'		 => 'text',
			'label'		 => __( 'Name', 'eleganto' ),
			'default'	 => '',
		),
		'my_team_desc'		 => array(
			'type'		 => 'textarea',
			'label'		 => __( 'Description', 'eleganto' ),
			'default'	 => '',
		),
		'my_team_department' => array(
			'type'		 => 'text',
			'label'		 => __( 'Department', 'eleganto' ),
			'default'	 => '',
		),
		'my_team_fb'		 => array(
			'type'		 => 'text',
			'label'		 => __( 'Facebook Link', 'eleganto' ),
			'default'	 => '',
		),
		'my_team_gplus'		 => array(
			'type'		 => 'text',
			'label'		 => __( 'Google Link', 'eleganto' ),
			'default'	 => '',
		),
		'my_team_tw'		 => array(
			'type'		 => 'text',
			'label'		 => __( 'Twitter Link', 'eleganto' ),
			'default'	 => '',
		),
	),
	'row_label'			 => array(
		'type'	 => 'text',
		'value'	 => __( 'Member', 'eleganto' ),
	),
) );
/**
 * Newsletter Section
 */
if ( class_exists( 'WYSIJA' ) ) {
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'select',
		'settings'	 => 'newsletter_section_form',
		'label'		 => __( 'Select Newsletter Form', 'eleganto' ),
		'section'	 => 'newsletter_section',
		'default'	 => '',
		'priority'	 => 11,
		'choices'	 => eleganto_mailpoet_form(),
	) );
} else {
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'custom',
		'settings'	 => 'newsletter_section_form_disable',
		'label'		 => __( 'Plugin Mailpoet Newsletters is not installed and activated. Activate it to enable Newsletters functions.', 'eleganto' ),
		'section'	 => 'newsletter_section',
		'priority'	 => 11,
	) );
}
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'newsletter_section_layout',
	'label'		 => __( 'Layout', 'eleganto' ),
	'section'	 => 'newsletter_section',
	'default'	 => 'full-width-newsletter',
	'priority'	 => 12,
	'choices'	 => array(
		'full-width-newsletter'	 => esc_attr__( 'FullWidth', 'eleganto' ),
		'image-left'			 => esc_attr__( 'Image Left', 'eleganto' ),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'image',
	'settings'			 => 'newsletter_section_image',
	'label'				 => __( 'Image', 'eleganto' ),
	'section'			 => 'newsletter_section',
	'default'			 => '',
	'priority'			 => 13,
	'active_callback'	 => array(
		array(
			'setting'	 => 'newsletter_section_layout',
			'operator'	 => '==',
			'value'		 => 'image-left',
		),
	),
) );
/**
 * WooCommerce
 */
if ( class_exists( 'WooCommerce' ) ) {
	Kirki::add_field( 'giga_store_settings', array(
		'type'		 => 'select',
		'settings'	 => 'woo_products_settings',
		'label'		 => esc_attr__( 'Products', 'eleganto' ),
		'section'	 => 'woocommerce_section',
		'default'	 => 'recent_products',
		'priority'	 => 10,
		'choices'	 => array(
			'sale_products'			 => esc_attr__( 'Sale Products', 'eleganto' ),
			'featured_products'		 => esc_attr__( 'Featured Products', 'eleganto' ),
			'best_selling_products'	 => esc_attr__( 'Best Selling Products', 'eleganto' ),
			'top_rated_products'	 => esc_attr__( 'Top Rated Products', 'eleganto' ),
			'recent_products'		 => esc_attr__( 'Recent Products', 'eleganto' ),
		),
	) );
	Kirki::add_field( 'giga_store_settings', array(
		'type'				 => 'select',
		'settings'			 => 'woo_products_settings_order',
		'label'				 => esc_attr__( 'Order', 'eleganto' ),
		'section'			 => 'woocommerce_section',
		'default'			 => 'DESC',
		'priority'			 => 10,
		'choices'			 => array(
			'ASC'	 => esc_attr__( 'Ascending ', 'eleganto' ),
			'DESC'	 => esc_attr__( 'Descending ', 'eleganto' ),
		),
		'active_callback'	 => array(
			array(
				'setting'	 => 'woo_products_settings',
				'operator'	 => '!=',
				'value'		 => 'top_rated_products',
			),
			array(
				'setting'	 => 'woo_products_settings',
				'operator'	 => '!=',
				'value'		 => 'best_selling_products',
			),
		),
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'color',
		'settings'	 => 'woocommerce_product_bg',
		'label'		 => __( 'Product Background', 'eleganto' ),
		'section'	 => 'woocommerce_section',
		'default'	 => 'rgba(0, 0, 0, 0.05)',
		'alpha'		 => true,
		'priority'	 => 11,
		'output'	 => array(
			array(
				'element'	 => '#woocommerce_section .woocommerce ul.products li.product, #woocommerce_section .woocommerce-page ul.products li.product',
				'property'	 => 'background-color',
			),
		),
		'transport'	 => 'auto',
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'color',
		'settings'	 => 'woocommerce_product_title',
		'label'		 => __( 'Product Title Color', 'eleganto' ),
		'section'	 => 'woocommerce_section',
		'default'	 => '#ffffff',
		'priority'	 => 12,
		'output'	 => array(
			array(
				'element'	 => '#woocommerce_section .woocommerce ul.products li.product h3, #woocommerce_section .woocommerce ul.products li.product h2.woocommerce-loop-product__title, #woocommerce_section .woocommerce ul.products li.product a.button:hover',
				'property'	 => 'color',
			),
		),
		'transport'	 => 'auto',
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'color',
		'settings'	 => 'woocommerce_product_price',
		'label'		 => __( 'Product Price Color', 'eleganto' ),
		'section'	 => 'woocommerce_section',
		'default'	 => '#77a464',
		'priority'	 => 13,
		'output'	 => array(
			array(
				'element'	 => '#woocommerce_section .woocommerce ul.products li.product .price',
				'property'	 => 'color',
			),
		),
		'transport'	 => 'auto',
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'color',
		'settings'	 => 'woocommerce_product_button',
		'label'		 => __( 'Product button color', 'eleganto' ),
		'section'	 => 'woocommerce_section',
		'default'	 => '#009BFF',
		'priority'	 => 14,
		'output'	 => array(
			array(
				'element'	 => '#woocommerce_section .woocommerce ul.products li.product a.button',
				'property'	 => 'color',
			),
			array(
				'element'	 => '#woocommerce_section .woocommerce ul.products li.product a.button',
				'property'	 => 'border-color',
			),
			array(
				'element'	 => '#woocommerce_section .woocommerce ul.products li.product a.button:hover',
				'property'	 => 'background-color',
			),
		),
		'transport'	 => 'auto',
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'slider',
		'settings'	 => 'woocommerce_per_page',
		'label'		 => __( 'Products on page', 'eleganto' ),
		'section'	 => 'woocommerce_section',
		'default'	 => '4',
		'priority'	 => 15,
		'choices'	 => array(
			'min'	 => 1,
			'max'	 => 32,
			'step'	 => 1
		),
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'			 => 'switch',
		'settings'		 => 'woocommerce_section_button',
		'label'			 => __( 'Shop button', 'eleganto' ),
		'description'	 => __( 'Enable button to shop archive', 'eleganto' ),
		'section'		 => 'woocommerce_section',
		'default'		 => 1,
		'priority'		 => 16,
	) );
} else {
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'custom',
		'settings'	 => 'woocommerce_disable',
		'label'		 => __( 'Plugin WooCommerce is not installed and activated. Activate it to enable Shop functions.', 'eleganto' ),
		'section'	 => 'woocommerce_section',
		'priority'	 => 11,
	) );
}
/**
 * Custom Page #1 Section
 */
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'select',
	'settings'	 => 'custom_one_page',
	'label'		 => __( 'Select Page Content', 'eleganto' ),
	'section'	 => 'custom_one_section',
	'default'	 => '',
	'priority'	 => 11,
	'choices'	 => eleganto_pages_list(),
) );
/**
 * Custom Page #2 Section
 */
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'select',
	'settings'	 => 'custom_two_page',
	'label'		 => __( 'Select Page Content', 'eleganto' ),
	'section'	 => 'custom_two_section',
	'default'	 => '',
	'priority'	 => 11,
	'choices'	 => eleganto_pages_list(),
) );
/**
 * Custom Page #3 Section
 */
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'select',
	'settings'	 => 'custom_three_page',
	'label'		 => __( 'Select Page Content', 'eleganto' ),
	'section'	 => 'custom_three_section',
	'default'	 => '',
	'priority'	 => 11,
	'choices'	 => eleganto_pages_list(),
) );

/**
 * Contact Section
 */
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'google-map-enable',
	'label'			 => __( 'Google Map', 'eleganto' ),
	'description'	 => __( 'Enable google map', 'eleganto' ),
	'section'		 => 'contact_section',
	'default'		 => 1,
	'priority'		 => 11,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'text',
	'settings'			 => 'google-map-api',
	'label'				 => __( 'Google map API key', 'eleganto' ),
	'description'		 => sprintf( __( 'Paste your API key. Get the API key %s.', 'eleganto' ), '<a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank">here</a>' ),
	'section'			 => 'contact_section',
	'default'			 => '',
	'priority'			 => 12,
	'active_callback'	 => array(
		array(
			'setting'	 => 'google-map-enable',
			'operator'	 => '==',
			'value'		 => 1,
		),
	),
) );
if ( class_exists( 'WPCF7' ) ) {
	Kirki::add_field( 'eleganto_settings', array(
		'type'			 => 'select',
		'settings'		 => 'conatact_form',
		'label'			 => __( 'Contact Form', 'eleganto' ),
		'description'	 => __( 'Select form from Contact Form 7 plugin', 'eleganto' ),
		'section'		 => 'contact_section',
		'default'		 => '',
		'priority'		 => 13,
		'choices'		 => eleganto_cf7_array_for_scg(),
	) );
} else {
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'custom',
		'settings'	 => 'contact_section_form_disable',
		'label'		 => __( 'Plugin Contact Form 7 is not installed and activated. Activate it to enable Contact form functions.', 'eleganto' ),
		'section'	 => 'contact_section',
		'priority'	 => 14,
	) );
}
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'slider',
	'settings'	 => 'contact_layout',
	'label'		 => __( 'Contact Form Width', 'eleganto' ),
	'section'	 => 'contact_section',
	'default'	 => 8,
	'priority'	 => 15,
	'choices'	 => array(
		'min'	 => '1',
		'max'	 => '12',
		'step'	 => '1',
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'textarea',
	'settings'	 => 'conatact_company_text',
	'label'		 => __( 'About Us', 'eleganto' ),
	'section'	 => 'contact_section',
	'default'	 => '',
	'priority'	 => 16,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'text',
	'settings'		 => 'conatact_company_name',
	'label'			 => __( 'Company Name', 'eleganto' ),
	'description'	 => __( 'Add a company name', 'eleganto' ),
	'section'		 => 'contact_section',
	'default'		 => 'Themes4WP',
	'priority'		 => 17,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'text',
	'settings'			 => 'conatact_company_address',
	'label'				 => __( 'Address', 'eleganto' ),
	'description'		 => __( 'Add your company address. This will be used in google map. Use &lt;br&gt; code to brake line.', 'eleganto' ),
	'section'			 => 'contact_section',
	'default'			 => 'Badenerstrasse 21<br>8004 Zurich<br>Swiss',
	'priority'			 => 18,
	'sanitize_callback'	 => 'wp_kses_post',
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'text',
	'settings'		 => 'conatact_company_telephone',
	'label'			 => __( 'Tel', 'eleganto' ),
	'description'	 => __( 'Add your contact telephone.', 'eleganto' ),
	'section'		 => 'contact_section',
	'default'		 => '+41 43 143 84 17',
	'priority'		 => 19,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'text',
	'settings'		 => 'conatact_company_email',
	'label'			 => __( 'Email', 'eleganto' ),
	'description'	 => __( 'Add your contact email.', 'eleganto' ),
	'section'		 => 'contact_section',
	'default'		 => 'info@contact.com',
	'priority'		 => 20,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'text',
	'settings'		 => 'conatact_company_email_subject',
	'label'			 => __( 'Email subject', 'eleganto' ),
	'description'	 => __( 'Adds default email subject into the email form.', 'eleganto' ),
	'section'		 => 'contact_section',
	'default'		 => '',
	'priority'		 => 21,
) );

/**
 * Image Settings
 */
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'image',
	'settings'		 => 'image_section_image',
	'label'			 => __( 'Image', 'eleganto' ),
	'description'	 => __( 'Upload center image', 'eleganto' ),
	'section'		 => 'image_section',
	'default'		 => get_template_directory_uri() . '/img/demo/image-center.png',
	'priority'		 => 11,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'textarea',
	'settings'			 => 'image_section_text_left',
	'label'				 => __( 'Text Left', 'eleganto' ),
	'section'			 => 'image_section',
	'sanitize_callback'	 => 'wp_kses_post',
	'default'			 => '<h3>Responsive Theme</h3><p>Eleganto is free responsive one page WordPress theme. Theme is perfect for corporate, business, personal, portfolio, photography sites. Is built on bootstrap with parallax support. Eleganto is responsive, clean, modern, flat and minimal business theme.</p>',
	'priority'			 => 12,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'textarea',
	'settings'			 => 'image_section_text_right',
	'label'				 => __( 'Text Right', 'eleganto' ),
	'section'			 => 'image_section',
	'sanitize_callback'	 => 'wp_kses_post',
	'default'			 => '<h3>Business WP Theme</h3><p>Eleganto is suitable for creative portfolio, business and corporate website projects, personal presentations and much more. With this theme you can create also a single one-page websites with ease</p>',
	'priority'			 => 13,
) );
/**
 * Brand Logos Section
 */
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'logo_autostart',
	'label'		 => __( 'Animate Carousel Automatically', 'eleganto' ),
	'section'	 => 'logo_section',
	'default'	 => 'true',
	'priority'	 => 11,
	'choices'	 => array(
		'true'	 => esc_attr__( 'Yes', 'eleganto' ),
		'false'	 => esc_attr__( 'No', 'eleganto' ),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'slider',
	'settings'			 => 'logo_interval',
	'label'				 => esc_attr__( 'Carousel Interval', 'eleganto' ),
	'section'			 => 'logo_section',
	'priority'			 => 12,
	'default'			 => 7000,
	'choices'			 => array(
		'min'	 => '2000',
		'max'	 => '20000',
		'step'	 => '500',
	),
	'active_callback'	 => array(
		array(
			'setting'	 => 'carousel_autostart',
			'operator'	 => '==',
			'value'		 => 'true',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'radio-buttonset',
	'settings'			 => 'logo_loop',
	'label'				 => __( 'Animation Loop', 'eleganto' ),
	'section'			 => 'logo_section',
	'default'			 => 'false',
	'priority'			 => 13,
	'choices'			 => array(
		'true'	 => esc_attr__( 'Yes', 'eleganto' ),
		'false'	 => esc_attr__( 'No', 'eleganto' ),
	),
	'active_callback'	 => array(
		array(
			'setting'	 => 'carousel_autostart',
			'operator'	 => '==',
			'value'		 => 'true',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'logo_row',
	'label'		 => __( 'Visible items', 'eleganto' ),
	'section'	 => 'logo_section',
	'default'	 => '5',
	'priority'	 => 14,
	'choices'	 => array(
		'3'	 => '3',
		'4'	 => '4',
		'5'	 => '5',
		'6'	 => '6',
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'repeater',
	'label'			 => __( 'Brand Logos Images', 'eleganto' ),
	'description'	 => __( 'Recommended images width 250px', 'eleganto' ),
	'section'		 => 'logo_section',
	'default'		 => array(
		array(
			'logo_url'	 => '',
			'logo_image' => get_template_directory_uri() . '/img/demo/brands/1.png',
		),
		array(
			'logo_url'	 => '',
			'logo_image' => get_template_directory_uri() . '/img/demo/brands/2.png',
		),
		array(
			'logo_url'	 => '',
			'logo_image' => get_template_directory_uri() . '/img/demo/brands/3.png',
		),
		array(
			'logo_url'	 => '',
			'logo_image' => get_template_directory_uri() . '/img/demo/brands/4.png',
		),
		array(
			'logo_url'	 => '',
			'logo_image' => get_template_directory_uri() . '/img/demo/brands/5.png',
		),
		array(
			'logo_url'	 => '',
			'logo_image' => get_template_directory_uri() . '/img/demo/brands/6.png',
		),
	),
	'priority'		 => 15,
	'settings'		 => 'repeater_logo',
	'fields'		 => array(
		'logo_image' => array(
			'type'		 => 'image',
			'label'		 => __( 'Image', 'eleganto' ),
			'default'	 => '',
		),
		'logo_url'	 => array(
			'type'		 => 'text',
			'label'		 => __( 'URL', 'eleganto' ),
			'default'	 => '',
		),
	),
	'row_label'		 => array(
		'type'	 => 'text',
		'value'	 => __( 'Logo', 'eleganto' ),
	),
) );
/**
 * Background image Section
 */
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'bg_image_section_intro_set',
	'label'		 => __( 'Background Type', 'eleganto' ),
	'section'	 => 'bg_image_section',
	'default'	 => 'image',
	'priority'	 => 11,
	'choices'	 => array(
		'image'	 => esc_attr__( 'Image', 'eleganto' ),
		'video'	 => esc_attr__( 'Video', 'eleganto' ),
	),
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'color',
	'settings'			 => 'bg_section_img_color',
	'label'				 => __( 'Background Color', 'eleganto' ),
	'section'			 => 'bg_image_section',
	'default'			 => '#FFFFFF',
	'priority'			 => 12,
	'output'			 => array(
		array(
			'element'	 => '#bg_image_section',
			'property'	 => 'background-color',
		),
	),
	'active_callback'	 => array(
		array(
			'setting'	 => 'bg_image_section_intro_set',
			'operator'	 => '==',
			'value'		 => 'image',
		),
	),
	'transport'			 => 'auto',
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'image',
	'settings'			 => 'bg_section_img_image',
	'label'				 => __( 'Background Image', 'eleganto' ),
	'section'			 => 'bg_image_section',
	'default'			 => '',
	'priority'			 => 13,
	'output'			 => array(
		array(
			'element'	 => '#bg_image_section',
			'property'	 => 'background-image',
		),
	),
	'active_callback'	 => array(
		array(
			'setting'	 => 'bg_image_section_intro_set',
			'operator'	 => '==',
			'value'		 => 'image',
		),
	)
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'text',
	'settings'			 => 'bg_image_section_video_id',
	'label'				 => __( 'Youtube Video ID', 'eleganto' ),
	'description'		 => __( 'Paste the Youtube video ID (e.g LSmgKRx5pBo)', 'eleganto' ),
	'default'			 => '',
	'section'			 => 'bg_image_section',
	'priority'			 => 14,
	'active_callback'	 => array(
		array(
			'setting'	 => 'bg_image_section_intro_set',
			'operator'	 => '==',
			'value'		 => 'video',
		),
	)
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'color',
	'settings'	 => 'bg_section_main_color',
	'label'		 => __( 'Section text color', 'eleganto' ),
	'section'	 => 'bg_image_section',
	'default'	 => '#FFFFFF',
	'priority'	 => 15,
	'output'	 => array(
		array(
			'element'	 => '.bg-section-title, .bg-section-desc',
			'property'	 => 'color',
		),
	),
	'transport'	 => 'auto',
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'text',
	'settings'	 => 'bg_section_title',
	'label'		 => __( 'Title', 'eleganto' ),
	'section'	 => 'bg_image_section',
	'default'	 => '',
	'priority'	 => 16,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'textarea',
	'settings'	 => 'bg_section_desc',
	'label'		 => __( 'Description', 'eleganto' ),
	'section'	 => 'bg_image_section',
	'default'	 => '',
	'priority'	 => 17,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'text',
	'settings'	 => 'bg_section_button',
	'label'		 => __( 'Button Text', 'eleganto' ),
	'section'	 => 'bg_image_section',
	'default'	 => '',
	'priority'	 => 18,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'text',
	'settings'	 => 'bg_section_button_url',
	'label'		 => __( 'Button URL', 'eleganto' ),
	'section'	 => 'bg_image_section',
	'default'	 => '',
	'priority'	 => 19,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'multicolor',
	'settings'	 => 'bg_image_section_btn_color',
	'label'		 => esc_attr__( 'Button Color', 'eleganto' ),
	'section'	 => 'bg_image_section',
	'priority'	 => 20,
	'choices'	 => array(
		'link'	 => esc_attr__( 'Color', 'eleganto' ),
		'hover'	 => esc_attr__( 'Hover', 'eleganto' ),
	),
	'default'	 => array(
		'link'	 => '#FFFFFF',
		'hover'	 => '#666666',
	),
	'output'	 => array(
		array(
			'choice'	 => 'link',
			'element'	 => '.bg-section-button a',
			'property'	 => 'color',
		),
		array(
			'choice'	 => 'hover',
			'element'	 => '.bg-section-button a:hover',
			'property'	 => 'color',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'bg_image_section_position',
	'label'		 => __( 'Content position', 'eleganto' ),
	'section'	 => 'bg_image_section',
	'default'	 => 'left',
	'priority'	 => 21,
	'choices'	 => array(
		'left'	 => esc_attr__( 'Left', 'eleganto' ),
		'right'	 => esc_attr__( 'Right', 'eleganto' ),
	),
	'output'	 => array(
		array(
			'element'	 => '.bg-image-section',
			'property'	 => 'float',
		),
		array(
			'element'	 => '.bg-image-section',
			'property'	 => 'text-align',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'text',
	'settings'	 => 'bg_image_section_menu_title',
	'label'		 => __( 'Main Menu Title', 'eleganto' ),
	'default'	 => 'bg_image',
	'section'	 => 'bg_image_section',
	'priority'	 => 22,
) );
/**
 * Siedebar Settings
 */
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'rigth-sidebar-check',
	'label'			 => __( 'Right Sidebar', 'eleganto' ),
	'description'	 => __( 'Enable the Right Sidebar', 'eleganto' ),
	'section'		 => 'sidebar_section',
	'default'		 => 1,
	'priority'		 => 10,
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'radio-buttonset',
	'settings'			 => 'right-sidebar-size',
	'label'				 => __( 'Right Sidebar Size', 'eleganto' ),
	'section'			 => 'sidebar_section',
	'default'			 => '3',
	'priority'			 => 10,
	'choices'			 => array(
		'1'	 => '1',
		'2'	 => '2',
		'3'	 => '3',
		'4'	 => '4',
		'5'	 => '5'
	),
	'active_callback'	 => array(
		array(
			'setting'	 => 'rigth-sidebar-check',
			'operator'	 => '==',
			'value'		 => 1,
		),
	)
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'left-sidebar-check',
	'label'			 => __( 'Left Sidebar', 'eleganto' ),
	'description'	 => __( 'Enable the Left Sidebar', 'eleganto' ),
	'section'		 => 'sidebar_section',
	'default'		 => 0,
	'priority'		 => 10,
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'radio-buttonset',
	'settings'			 => 'left-sidebar-size',
	'label'				 => __( 'Left Sidebar Size', 'eleganto' ),
	'section'			 => 'sidebar_section',
	'default'			 => '2',
	'priority'			 => 10,
	'choices'			 => array(
		'1'	 => '1',
		'2'	 => '2',
		'3'	 => '3',
		'4'	 => '4',
		'5'	 => '5'
	),
	'active_callback'	 => array(
		array(
			'setting'	 => 'left-sidebar-check',
			'operator'	 => '==',
			'value'		 => 1,
		),
	)
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'sticky-sidebar',
	'label'			 => __( 'Sticky sidebar', 'eleganto' ),
	'description'	 => __( 'Enable or disable smart sidebar floating.', 'eleganto' ),
	'help'			 => __( 'Sticky sidebar provides an easy way to attach elements in sidebar to the page when the user scrolls such that the element is always visible. ', 'eleganto' ),
	'section'		 => 'sidebar_section',
	'default'		 => 0,
	'priority'		 => 10,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'footer-sidebar-check',
	'label'			 => __( 'Homepage footer widget area', 'eleganto' ),
	'description'	 => __( 'Enable or disable footer widget area on homepage', 'eleganto' ),
	'section'		 => 'sidebar_section',
	'default'		 => 1,
	'priority'		 => 10,
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'theme_border_layout',
	'label'		 => __( 'Sections Style', 'eleganto' ),
	'section'	 => 'layout_section',
	'default'	 => 'skew',
	'priority'	 => 10,
	'choices'	 => array(
		'skew'		 => esc_attr__( 'Skew', 'eleganto' ),
		'straight'	 => esc_attr__( 'Straight', 'eleganto' ),
	),
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'toggle',
	'settings'		 => 'parallax_intro',
	'label'			 => __( 'Intro Parallax', 'eleganto' ),
	'description'	 => __( 'Enable or Disable intro sections parallax effect.', 'eleganto' ),
	'section'		 => 'layout_section',
	'default'		 => 1,
	'priority'		 => 10,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'radio-buttonset',
	'settings'			 => 'parallax_mobile',
	'label'				 => __( 'Parallax On Mobile Devices', 'eleganto' ),
	'section'			 => 'layout_section',
	'default'			 => 'parallax-mobile-on',
	'priority'			 => 10,
	'choices'			 => array(
		'parallax-mobile-on'	 => esc_attr__( 'Enabled', 'eleganto' ),
		'parallax-mobile-off'	 => esc_attr__( 'Disabled', 'eleganto' ),
	),
	'active_callback'	 => array(
		array(
			'setting'	 => 'parallax_intro',
			'operator'	 => '==',
			'value'		 => 1,
		),
	)
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'smooth_scroll',
	'label'		 => __( 'Website Smooth Scroll', 'eleganto' ),
	'section'	 => 'layout_section',
	'default'	 => 'smooth-scroll-on',
	'priority'	 => 10,
	'choices'	 => array(
		'smooth-scroll-on'	 => esc_attr__( 'Enabled', 'eleganto' ),
		'smooth-scroll-off'	 => esc_attr__( 'Disabled', 'eleganto' ),
	),
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'radio-image',
	'settings'	 => 'images_bg_overlay',
	'label'		 => __( 'Intro Images Overlay', 'eleganto' ),
	'section'	 => 'layout_section',
	'default'	 => '',
	'priority'	 => 10,
	'choices'	 => array(
		''														 => get_template_directory_uri() . '/img/pattern/none.png',
		get_template_directory_uri() . '/img/pattern/bg_1.png'	 => get_template_directory_uri() . '/img/pattern/bg_1.png',
		get_template_directory_uri() . '/img/pattern/bg_2.png'	 => get_template_directory_uri() . '/img/pattern/bg_2.png',
		get_template_directory_uri() . '/img/pattern/bg_3.png'	 => get_template_directory_uri() . '/img/pattern/bg_3.png',
		get_template_directory_uri() . '/img/pattern/bg_4.png'	 => get_template_directory_uri() . '/img/pattern/bg_4.png',
		get_template_directory_uri() . '/img/pattern/bg_5.png'	 => get_template_directory_uri() . '/img/pattern/bg_5.png',
		get_template_directory_uri() . '/img/pattern/bg_6.png'	 => get_template_directory_uri() . '/img/pattern/bg_6.png',
	),
	'output'	 => array(
		array(
			'element'	 => '.prlx:after',
			'property'	 => 'background-image',
		),
	),
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'radio-buttonset',
	'settings'		 => 'header_layout',
	'label'			 => __( 'Header Layout', 'eleganto' ),
	'description'	 => __( 'Define top menu and main menu layout', 'eleganto' ),
	'section'		 => 'layout_section',
	'default'		 => 'container',
	'priority'		 => 10,
	'choices'		 => array(
		'container'			 => esc_attr__( 'Boxed', 'eleganto' ),
		'container-fluid'	 => esc_attr__( 'FullWidth', 'eleganto' ),
	),
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'image',
	'settings'		 => 'header-logo',
	'label'			 => __( 'Logo', 'eleganto' ),
	'description'	 => __( 'Upload your logo', 'eleganto' ),
	'section'		 => 'layout_section',
	'default'		 => '',
	'priority'		 => 10,
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'textarea',
	'settings'			 => 'footer-credits',
	'label'				 => __( 'Footer credits', 'eleganto' ),
	'help'				 => __( 'You can add custom text or HTML code.', 'eleganto' ),
	'section'			 => 'layout_section',
	'sanitize_callback'	 => 'wp_kses_post',
	'default'			 => '',
	'priority'			 => 10,
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'float-banner-enable',
	'label'			 => __( 'Floating Ad banner', 'eleganto' ),
	'description'	 => __( 'Enable or disable floating banner in single post', 'eleganto' ),
	'section'		 => 'post_section',
	'default'		 => 0,
	'priority'		 => 10,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'code',
	'settings'			 => 'float-banner-single',
	'label'				 => __( 'Floating Ad', 'eleganto' ),
	'description'		 => __( 'Paste your Ad code', 'eleganto' ),
	'help'				 => __( 'You can add banner or any advertisement code.', 'eleganto' ),
	'section'			 => 'post_section',
	'choices'			 => array(
		'language'	 => 'html',
		'theme'		 => 'monokai',
		'height'	 => 200,
	),
	'default'			 => '',
	'priority'			 => 10,
	'active_callback'	 => array(
		array(
			'setting'	 => 'float-banner-enable',
			'operator'	 => '==',
			'value'		 => 1,
		),
	)
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'content-slider-enable',
	'label'			 => __( 'Content slider', 'eleganto' ),
	'description'	 => __( 'Enable or disable content slider with recomended post.', 'eleganto' ),
	'section'		 => 'post_section',
	'default'		 => 0,
	'priority'		 => 10,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'code',
	'settings'		 => 'banner-single-before',
	'label'			 => __( 'Ad before post content.', 'eleganto' ),
	'description'	 => __( 'Paste your Adsense, BSA or other ad code here to show ads before content in single post.', 'eleganto' ),
	'help'			 => __( 'You can add banner or any advertisement code.', 'eleganto' ),
	'section'		 => 'post_section',
	'choices'		 => array(
		'language'	 => 'html',
		'theme'		 => 'monokai',
		'height'	 => 200,
	),
	'default'		 => '',
	'priority'		 => 10,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'code',
	'settings'		 => 'banner-single-after',
	'label'			 => __( 'Ad after post content.', 'eleganto' ),
	'description'	 => __( 'Paste your Adsense, BSA or other ad code here to show ads after content in single post.', 'eleganto' ),
	'help'			 => __( 'You can add banner or any advertisement code.', 'eleganto' ),
	'section'		 => 'post_section',
	'choices'		 => array(
		'language'	 => 'html',
		'theme'		 => 'monokai',
		'height'	 => 200,
	),
	'default'		 => '',
	'priority'		 => 10,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'related-posts-check',
	'label'			 => __( 'Related posts', 'eleganto' ),
	'description'	 => __( 'Enable or disable related posts', 'eleganto' ),
	'section'		 => 'post_section',
	'default'		 => 1,
	'priority'		 => 10,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'author-check',
	'label'			 => __( 'Author box', 'eleganto' ),
	'description'	 => __( 'Enable or disable author box', 'eleganto' ),
	'section'		 => 'post_section',
	'default'		 => 1,
	'priority'		 => 10,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'post-nav-check',
	'label'			 => __( 'Post navigation', 'eleganto' ),
	'description'	 => __( 'Enable or disable navigation below post content', 'eleganto' ),
	'section'		 => 'post_section',
	'default'		 => 1,
	'priority'		 => 10,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'switch',
	'settings'		 => 'breadcrumbs-check',
	'label'			 => __( 'Breadcrumbs', 'eleganto' ),
	'description'	 => __( 'Enable or disable Breadcrumbs', 'eleganto' ),
	'section'		 => 'post_section',
	'default'		 => 1,
	'priority'		 => 10,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'breadcrumbs-align',
	'label'		 => __( 'Breadcrumbs align', 'eleganto' ),
	'section'	 => 'post_section',
	'default'	 => 'text-left',
	'priority'	 => 10,
	'choices'	 => array(
		'text-left'		 => __( 'Left', 'eleganto' ),
		'text-right'	 => __( 'Right', 'eleganto' ),
		'text-center'	 => __( 'Center', 'eleganto' ),
	),
	'required'	 => array(
		array(
			'setting'	 => 'breadcrumbs-check',
			'operator'	 => '==',
			'value'		 => 1,
		),
	)
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'			 => 'toggle',
	'settings'		 => 'eleganto_socials',
	'label'			 => __( 'Social Icons', 'eleganto' ),
	'description'	 => __( 'Enable or Disable the social icons', 'eleganto' ),
	'section'		 => 'social_icons_section',
	'default'		 => 0,
	'priority'		 => 10,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'				 => 'toggle',
	'settings'			 => 'eleganto_socials_footer',
	'label'				 => __( 'Footer Social Icons', 'eleganto' ),
	'description'		 => __( 'Enable or Disable the social icons on footer', 'eleganto' ),
	'section'			 => 'social_icons_section',
	'default'			 => 1,
	'priority'			 => 10,
	'active_callback'	 => array(
		array(
			'setting'	 => 'eleganto_socials',
			'operator'	 => '==',
			'value'		 => 1,
		),
	)
) );
$s_social_links = array(
	'twp_social_facebook'	 => __( 'Facebook', 'eleganto' ),
	'twp_social_twitter'	 => __( 'Twitter', 'eleganto' ),
	'twp_social_google'		 => __( 'Google-Plus', 'eleganto' ),
	'twp_social_instagram'	 => __( 'Instagram', 'eleganto' ),
	'twp_social_pin'		 => __( 'Pinterest', 'eleganto' ),
	'twp_social_youtube'	 => __( 'YouTube', 'eleganto' ),
	'twp_social_reddit'		 => __( 'Reddit', 'eleganto' ),
	'twp_social_linkedin'	 => __( 'LinkedIn', 'eleganto' ),
	'twp_social_skype'		 => __( 'Skype', 'eleganto' ),
	'twp_social_vimeo'		 => __( 'Vimeo', 'eleganto' ),
	'twp_social_flickr'		 => __( 'Flickr', 'eleganto' ),
	'twp_social_dribble'	 => __( 'Dribbble', 'eleganto' ),
	'twp_social_envelope-o'	 => __( 'Email', 'eleganto' ),
	'twp_social_rss'		 => __( 'Rss', 'eleganto' ),
);

foreach ( $s_social_links as $keys => $values ) {
	Kirki::add_field( 'eleganto_settings', array(
		'type'				 => 'text',
		'settings'			 => $keys,
		'label'				 => $values,
		'description'		 => sprintf( __( 'Insert your custom link to show the %s icon.', 'eleganto' ), $values ),
		'help'				 => __( 'Leave blank to hide icon.', 'eleganto' ),
		'section'			 => 'social_icons_section',
		'default'			 => '',
		'priority'			 => 10,
		'active_callback'	 => array(
			array(
				'setting'	 => 'eleganto_socials',
				'operator'	 => '==',
				'value'		 => 1,
			),
		)
	) );
}

Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'color',
	'settings'	 => 'body_color',
	'label'		 => __( 'Content background color', 'eleganto' ),
	'help'		 => __( 'Background color for pages and posts.', 'eleganto' ),
	'section'	 => 'colors_section',
	'default'	 => '#222',
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => '.rsrc-content, #slidebox, .footer-widgets, #breadcrumbs',
			'property'	 => 'background-color',
		),
	),
	'transport'	 => 'auto',
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'color',
	'settings'	 => 'top_bar_bg',
	'label'		 => __( 'Top bar background color', 'eleganto' ),
	'section'	 => 'colors_section',
	'default'	 => '#222',
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => '.rsrc-top-menu, #site-navigation, #site-navigation .dropdown-menu',
			'property'	 => 'background-color',
		),
	),
	'transport'	 => 'auto',
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'color',
	'settings'	 => 'top_bar_icons',
	'label'		 => __( 'Top bar social icons color', 'eleganto' ),
	'section'	 => 'colors_section',
	'default'	 => '#ffffff',
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => '.social-links i.fa',
			'property'	 => 'color',
		),
	),
	'transport'	 => 'auto',
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'color',
	'settings'	 => 'buttons_section_main_color',
	'label'		 => __( 'Buttons color', 'eleganto' ),
	'section'	 => 'colors_section',
	'default'	 => '#F4C700',
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => '.btn-default, input[type="submit"], button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button',
			'property'	 => 'color',
		),
		array(
			'element'	 => '.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #back-top span, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn, .btn-default:active, .btn-default.active, input[type="submit"]:hover, button:hover',
			'property'	 => 'background-color',
		),
		array(
			'element'	 => '#quote-carousel .carousel-indicators .active, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .btn-default, input[type="submit"], button, .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn, .btn-default:active, .btn-default.active, input[type="submit"]:hover, button:hover',
			'property'	 => 'border-color',
		),
	),
	'transport'	 => 'auto',
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'color',
	'settings'	 => 'links_color',
	'label'		 => __( 'Links color', 'eleganto' ),
	'section'	 => 'colors_section',
	'default'	 => '#ddd',
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => 'a, .pagination > li > a, .pagination > li > span, .woocommerce .star-rating span',
			'property'	 => 'color',
		),
		array(
			'element'	 => '.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus',
			'property'	 => 'border-color',
		),
		array(
			'element'	 => '.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus',
			'property'	 => 'background-color',
		),
	),
	'transport'	 => 'auto',
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'color',
	'settings'	 => 'links_hover_color',
	'label'		 => __( 'Links hover color', 'eleganto' ),
	'section'	 => 'colors_section',
	'default'	 => '#f4c700',
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => 'a:hover',
			'property'	 => 'color',
		),
	),
	'transport'	 => 'auto',
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'typography',
	'settings'	 => 'site_top_menu_typography_font',
	'label'		 => __( 'Top bar font', 'eleganto' ),
	'section'	 => 'typography_section',
	'default'	 => array(
		'font-family'	 => 'Oswald',
		'variant'		 => '300',
		'color'			 => '#ffffff',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => '#site-navigation .navbar-nav > li > a, #site-navigation .navbar-nav > li > .dropdown-menu a',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'typography',
	'settings'	 => 'site_main_menu_typography_font',
	'label'		 => __( 'Main menu font', 'eleganto' ),
	'section'	 => 'typography_section',
	'default'	 => array(
		'font-family'	 => 'Oswald',
		'variant'		 => '300',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => '#main-navigation .navbar-nav > li > a',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'typography',
	'settings'	 => 'site_title_typography_font',
	'label'		 => __( 'Site title font', 'eleganto' ),
	'section'	 => 'typography_section',
	'default'	 => array(
		'font-family'	 => 'Oswald',
		'font-size'		 => '36px',
		'variant'		 => '700',
		'line-height'	 => '1.1',
		'letter-spacing' => '0px',
		'color'			 => '#ffffff',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => 'h2.site-title a, h1.site-title a',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'typography',
	'settings'	 => 'content_typography_font',
	'label'		 => __( 'Site content font', 'eleganto' ),
	'section'	 => 'typography_section',
	'default'	 => array(
		'font-family'	 => 'Oswald',
		'font-size'		 => '14px',
		'variant'		 => '300',
		'line-height'	 => '1.8',
		'letter-spacing' => '0px',
		'color'			 => '#ffffff',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => 'body, .fa.menu-item a, .home-header .page-header a',
		),
	),
) );

/**
 * WooCommerce Global
 */
if ( class_exists( 'WooCommerce' ) ) {
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'custom',
		'settings'	 => 'woo_global_archive',
		'label'		 => __( 'Shop/Archive colors', 'eleganto' ),
		'section'	 => 'woo_section_global_colors',
		'priority'	 => 10,
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'color',
		'settings'	 => 'woo_global_bg',
		'label'		 => __( 'Product background color', 'eleganto' ),
		'section'	 => 'woo_section_global_colors',
		'default'	 => 'rgba(0, 0, 0, 0.16)',
		'alpha'		 => true,
		'priority'	 => 10,
		'output'	 => array(
			array(
				'element'	 => '.woocommerce ul.products li.product, .woocommerce-page ul.products li.product',
				'property'	 => 'background-color',
			),
		),
		'transport'	 => 'auto',
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'color',
		'settings'	 => 'woo_global_title',
		'label'		 => __( 'Product title color', 'eleganto' ),
		'section'	 => 'woo_section_global_colors',
		'default'	 => '#ffffff',
		'priority'	 => 10,
		'output'	 => array(
			array(
				'element'	 => '.woocommerce ul.products li.product h3, .woocommerce ul.products li.product h2.woocommerce-loop-product__title, .woocommerce ul.products li.product h2.woocommerce-loop-category__title, .woocommerce ul.products li.product a.button:hover',
				'property'	 => 'color',
			),
		),
		'transport'	 => 'auto',
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'color',
		'settings'	 => 'woo_global_price',
		'label'		 => __( 'Product price color', 'eleganto' ),
		'section'	 => 'woo_section_global_colors',
		'default'	 => '#77a464',
		'priority'	 => 10,
		'output'	 => array(
			array(
				'element'	 => '.woocommerce ul.products li.product .price',
				'property'	 => 'color',
			),
		),
		'transport'	 => 'auto',
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'color',
		'settings'	 => 'woo_global_button',
		'label'		 => __( 'Product button color', 'eleganto' ),
		'section'	 => 'woo_section_global_colors',
		'default'	 => '#009BFF',
		'priority'	 => 10,
		'output'	 => array(
			array(
				'element'	 => '.woocommerce ul.products li.product a.button',
				'property'	 => 'color',
			),
			array(
				'element'	 => '.woocommerce ul.products li.product a.button',
				'property'	 => 'border-color',
			),
			array(
				'element'	 => '.woocommerce ul.products li.product a.button:hover',
				'property'	 => 'background-color',
			),
		),
		'transport'	 => 'auto',
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'custom',
		'settings'	 => 'woo_global_single',
		'label'		 => __( 'Single product settings', 'eleganto' ),
		'section'	 => 'woo_section_global_colors',
		'priority'	 => 10,
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'color',
		'settings'	 => 'woo_global_single_title',
		'label'		 => __( 'Title color', 'eleganto' ),
		'section'	 => 'woo_section_global_colors',
		'default'	 => '#ffffff',
		'priority'	 => 10,
		'output'	 => array(
			array(
				'element'	 => '.woocommerce div.product .product_title',
				'property'	 => 'color',
			),
		),
		'transport'	 => 'auto',
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'color',
		'settings'	 => 'woo_global_single_price',
		'label'		 => __( 'Price color', 'eleganto' ),
		'section'	 => 'woo_section_global_colors',
		'default'	 => '#77a464',
		'priority'	 => 10,
		'output'	 => array(
			array(
				'element'	 => '.woocommerce div.product p.price, .woocommerce div.product span.price',
				'property'	 => 'color',
			),
		),
		'transport'	 => 'auto',
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'toggle',
		'settings'	 => 'woo_gallery_zoom',
		'label'		 => esc_attr__( 'Gallery zoom', 'eleganto' ),
		'section'	 => 'woo_section_global_colors',
		'default'	 => 0,
		'priority'	 => 10,
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'toggle',
		'settings'	 => 'woo_gallery_lightbox',
		'label'		 => esc_attr__( 'Gallery lightbox', 'eleganto' ),
		'section'	 => 'woo_section_global_colors',
		'default'	 => 1,
		'priority'	 => 10,
	) );
	Kirki::add_field( 'eleganto_settings', array(
		'type'		 => 'toggle',
		'settings'	 => 'woo_gallery_slider',
		'label'		 => esc_attr__( 'Gallery slider', 'eleganto' ),
		'section'	 => 'woo_section_global_colors',
		'default'	 => 0,
		'priority'	 => 10,
	) );
}

Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'color',
	'settings'	 => 'background_site_color',
	'label'		 => __( 'Background Color', 'eleganto' ),
	'section'	 => 'site_bg_section',
	'default'	 => '#FFFFFF',
	'transport'	 => 'auto',
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => 'body',
			'property'	 => 'background-color',
		),
	),
) );

Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'image',
	'settings'	 => 'background_site_image',
	'label'		 => __( 'Background Image', 'eleganto' ),
	'section'	 => 'site_bg_section',
	'default'	 => '',
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => 'body',
			'property'	 => 'background-image',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'select',
	'settings'	 => 'background_site_repeat',
	'label'		 => __( 'Background Repeat', 'eleganto' ),
	'section'	 => 'site_bg_section',
	'default'	 => 'no-repeat',
	'priority'	 => 10,
	'choices'	 => array(
		'no-repeat'	 => __( 'No Repeat', 'eleganto' ),
		'repeat'	 => __( 'Repeat All', 'eleganto' ),
		'repeat-x'	 => __( 'Repeat Horizontally', 'eleganto' ),
		'repeat-y'	 => __( 'Repeat Vertically', 'eleganto' ),
		'inherit'	 => __( 'Inherit', 'eleganto' ),
	),
	'output'	 => array(
		array(
			'element'	 => 'body',
			'property'	 => 'background-repeat',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'select',
	'settings'	 => 'background_site_size',
	'label'		 => __( 'Background Size', 'eleganto' ),
	'section'	 => 'site_bg_section',
	'default'	 => 'cover',
	'priority'	 => 10,
	'choices'	 => array(
		'inherit'	 => __( 'Inherit', 'eleganto' ),
		'cover'		 => __( 'Cover', 'eleganto' ),
		'contain'	 => __( 'Contain', 'eleganto' ),
	),
	'output'	 => array(
		array(
			'element'	 => 'body',
			'property'	 => 'background-size',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'select',
	'settings'	 => 'background_site_attach',
	'label'		 => __( 'Background Attachement', 'eleganto' ),
	'section'	 => 'site_bg_section',
	'default'	 => 'fixed',
	'priority'	 => 10,
	'choices'	 => array(
		'inherit'	 => __( 'Inherit', 'eleganto' ),
		'fixed'		 => __( 'Fixed', 'eleganto' ),
		'scroll'	 => __( 'Scroll', 'eleganto' ),
	),
	'output'	 => array(
		array(
			'element'	 => 'body',
			'property'	 => 'background-attachment',
		),
	),
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'select',
	'settings'	 => 'background_site_position',
	'label'		 => __( 'Background Position', 'eleganto' ),
	'section'	 => 'site_bg_section',
	'default'	 => 'center-top',
	'priority'	 => 10,
	'choices'	 => array(
		'left-top'		 => __( 'Left Top', 'eleganto' ),
		'left-center'	 => __( 'Left Center', 'eleganto' ),
		'left-bottom'	 => __( 'Left Bottom', 'eleganto' ),
		'right-top'		 => __( 'Right Top', 'eleganto' ),
		'right-center'	 => __( 'Right Center', 'eleganto' ),
		'right-bottom'	 => __( 'Right Bottom', 'eleganto' ),
		'center-top'	 => __( 'Center Top', 'eleganto' ),
		'center-center'	 => __( 'Center Center', 'eleganto' ),
		'center-bottom'	 => __( 'Center Bottom', 'eleganto' ),
	),
	'output'	 => array(
		array(
			'element'	 => 'body',
			'property'	 => 'background-position',
		),
	),
) );


Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'code',
	'settings'	 => 'google-analytics',
	'label'		 => __( 'Tracking Code', 'eleganto' ),
	'help'		 => __( 'Paste your Google Analytics (or other) tracking code here.', 'eleganto' ),
	'section'	 => 'code_section',
	'choices'	 => array(
		'language'	 => 'html',
		'theme'		 => 'monokai',
		'height'	 => 200,
	),
	'default'	 => '',
	'priority'	 => 10,
) );
Kirki::add_field( 'eleganto_settings', array(
	'type'		 => 'code',
	'settings'	 => 'custom-css',
	'label'		 => __( 'Custom CSS', 'eleganto' ),
	'help'		 => __( 'Write your custom css.', 'eleganto' ),
	'section'	 => 'code_section',
	'default'	 => '',
	'priority'	 => 10,
	'choices'	 => array(
		'language'	 => 'css',
		'theme'		 => 'monokai',
		'height'	 => 250,
	),
) );

/**
 * Configuration sample for the eleganto Customizer.
 */
function eleganto_configuration_sample() {

	$config[ 'color_back' ]		 = '#192429';
	$config[ 'color_accent' ]	 = '#008ec2';
	$config[ 'width' ]			 = '25%';

	return $config;
}

add_filter( 'kirki/config', 'eleganto_configuration_sample' );

function eleganto_cf7_array_for_scg() {
	$args		 = array(
		'post_type'		 => 'wpcf7_contact_form',
		'posts_per_page' => -1
	);
	$forms		 = get_posts( $args );
	$output		 = array();
	$output[ 0 ] = '';
	if ( $forms && !is_wp_error( $forms ) ) {
		foreach ( $forms as $form ) {
			$output[ $form->ID ] = $form->post_title;
		}
	}
	return $output;
}

function eleganto_pages_list() {
	$pages		 = get_pages();
	$output		 = array();
	$output[ 0 ] = '';
	if ( $pages && !is_wp_error( $pages ) ) {
		foreach ( $pages as $page ) {
			$output[ $page->ID ] = $page->post_title;
		}
	}
	return $output;
}

function eleganto_mailpoet_form() {
	if ( class_exists( 'WYSIJA' ) ) {
		global $wpdb;
		$lists = $wpdb->get_results( 'SELECT form_id, name FROM ' . $wpdb->prefix . 'wysija_form' );
		if ( $lists && !is_wp_error( $lists ) ) {
			$values		 = array();
			$values[ 0 ] = '';
			foreach ( $lists as $key ) {
				$values[ $key->form_id ] = $key->name;
			}
			return $values;
		}
	}
}

/**
 * Add custom CSS styles
 */
function eleganto_enqueue_header_css() {

	$layout = get_theme_mod( 'theme_border_layout', 'skew' );

	if ( $layout == 'straight' ) {
		$css = '.border-bottom, .border-top {
                display: none;
            }
            @media (min-width: 768px) {
              section:first-child, .homepage-crelly-slider .crellyslider {
                  margin-bottom: -70px;
            }}
            .flex-control-nav {
                bottom: 20px;
            }';
	} else {
		$css = '';
	}
	$custom_css = "
		{$css}
	";
	wp_add_inline_style( 'kirki-styles-eleganto_settings', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'eleganto_enqueue_header_css', 99999 );

function eleganto_animation() {
	$eleganto_animation = array(
		'none'				 => 'None',
		'bounce'			 => 'bounce',
		'flash'				 => 'flash',
		'pulse'				 => 'pulse',
		'rubberBand'		 => 'rubberBand',
		'shake'				 => 'shake',
		'headShake'			 => 'headShake',
		'swing'				 => 'swing',
		'tada'				 => 'tada',
		'wobble'			 => 'wobble',
		'jello'				 => 'jello',
		'bounceIn'			 => 'bounceIn',
		'bounceInDown'		 => 'bounceInDown',
		'bounceInLeft'		 => 'bounceInLeft',
		'bounceInRight'		 => 'bounceInRight',
		'bounceInUp'		 => 'bounceInUp',
		'fadeIn'			 => 'fadeIn',
		'fadeInDown'		 => 'fadeInDown',
		'fadeInDownBig'		 => 'fadeInDownBig',
		'fadeInLeft'		 => 'fadeInLeft',
		'fadeInLeftBig'		 => 'fadeInLeftBig',
		'fadeInRight'		 => 'fadeInRight',
		'fadeInRightBig'	 => 'fadeInRightBig',
		'fadeInUp'			 => 'fadeInUp',
		'fadeInUpBig'		 => 'fadeInUpBig',
		'flipInX'			 => 'flipInX',
		'flipInY'			 => 'flipInY',
		'lightSpeedIn'		 => 'lightSpeedIn',
		'rotateIn'			 => 'rotateIn',
		'rotateInDownLeft'	 => 'rotateInDownLeft',
		'rotateInDownRight'	 => 'rotateInDownRight',
		'rotateInUpLeft'	 => 'rotateInUpLeft',
		'rotateInUpRight'	 => 'rotateInUpRight',
		'hinge'				 => 'hinge',
		'rollIn'			 => 'rollIn',
		'zoomIn'			 => 'zoomIn',
		'zoomInDown'		 => 'zoomInDown',
		'zoomInLeft'		 => 'zoomInLeft',
		'zoomInRight'		 => 'zoomInRight',
		'zoomInUp'			 => 'zoomInUp',
		'slideInDown'		 => 'slideInDown',
		'slideInLeft'		 => 'slideInLeft',
		'slideInRight'		 => 'slideInRight',
		'slideInUp'			 => 'slideInUp',
	);
	return $eleganto_animation;
}
