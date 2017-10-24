<?php
/***
 * Theme Info
 *
 * Adds a simple Theme Info page to the Appearance section of the WordPress Dashboard. 
 *
 */


// Add Theme Info page to admin menu
add_action('admin_menu', 'eleganto_add_theme_info_page');
function eleganto_add_theme_info_page() {
	
	// Get Theme Details from style.css
	$theme = wp_get_theme(); 
	
	add_theme_page( 
		sprintf( esc_html__( 'Welcome to %1$s %2$s', 'eleganto' ), $theme->get( 'Name' ), $theme->get( 'Version' ) ), 
		esc_html__( 'Theme Info', 'eleganto' ), 
		'edit_theme_options', 
		'eleganto', 
		'eleganto_display_theme_info_page'
	);
	
}


// Display Theme Info page
function eleganto_display_theme_info_page() { 
	
	// Get Theme Details from style.css
	$theme = wp_get_theme(); 
	
?>
			
	<div class="wrap theme-info-wrap">

		<h1><?php printf( esc_html__( 'Welcome to %1$s %2$s', 'eleganto' ), $theme->get( 'Name' ), $theme->get( 'Version' ) ); ?></h1>

		<div class="theme-description"><?php echo $theme->get( 'Description' ); ?></div>
		
		<hr>
		<div class="important-links clearfix">
			<p><strong><?php esc_html_e( 'Theme Links', 'eleganto' ); ?>:</strong>
				<a href="<?php echo esc_url( 'http://themes4wp.com/product/eleganto-pro/' ); ?>" target="_blank"><?php esc_html_e( 'Theme Page', 'eleganto' ); ?></a>
				<a href="<?php echo esc_url( 'http://demo.themes4wp.com/eleganto-pro/' ); ?>" target="_blank"><?php esc_html_e( 'Theme Demo', 'eleganto' ); ?></a>
				<a href="<?php echo esc_url( 'http://demo.themes4wp.com/documentation/category/eleganto-pro/' ); ?>" target="_blank"><?php esc_html_e( 'Theme Documentation', 'eleganto' ); ?></a>
				<a href="<?php echo esc_url( 'https://wordpress.org/plugins/kirki/' ); ?>" target="_blank"><?php esc_html_e( 'Kirki (Theme options toolkit)', 'eleganto' ); ?></a>
			</p>
		</div>
		<hr>
				
		<div id="getting-started">
		
			<h3><?php printf( esc_html__( 'Getting Started with %s', 'eleganto' ), $theme->get( 'Name' ) ); ?></h3>
			
			<div class="columns-wrapper clearfix">

				<div class="column column-half clearfix">
						
					<div class="section">
						<h4><?php esc_html_e( 'Theme Documentation', 'eleganto' ); ?></h4>
						
						<p class="about">
							<?php esc_html_e( 'You need help to setup and configure this theme? We got you covered with an extensive theme documentation on our website.', 'eleganto' ); ?>
						</p>
						<p>
							<a href="<?php echo esc_url( 'http://demo.themes4wp.com/documentation/category/eleganto-pro/' ); ?>" target="_blank" class="button button-secondary">
								<?php printf( esc_html__( 'View %s Documentation', 'eleganto' ), 'Eleganto PRO' ); ?>
							</a>
						</p>
					</div>
					
					<div class="section">
						<h4><?php esc_html_e( 'Theme Options', 'eleganto' ); ?></h4>
						
						<p class="about">
							<?php printf( esc_html__( '%s makes use of the Customizer for all theme settings. First install Kirki Toolkit and than click on "Customize Theme" to open the Customizer now.', 'eleganto' ), $theme->get( 'Name' ) ); ?>
						</p>
						<p>
							<a href="<?php echo wp_customize_url(); ?>" class="button button-primary">
								<?php esc_html_e( 'Customize Theme', 'eleganto' ); ?>
							</a>
						</p>
					</div>

				</div>
				
				<div class="column column-half clearfix">
					
					<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" />
					
				</div>
				
			</div>
			
		</div>
		
		<hr>
		
		<div id="theme-author">
			
			<p><?php printf( esc_html__( '%1$s is proudly brought to you by %2$s.', 'eleganto' ), 
				$theme->get( 'Name' ),
				'<a target="_blank" href="http://themes4wp.com/" title="Themes4WP">Themes4WP</a>'); ?>
			</p>
		
		</div>
	
	</div>

<?php
}


// Add CSS for Theme Info Panel
add_action('admin_enqueue_scripts', 'eleganto_theme_info_page_css');
function eleganto_theme_info_page_css( $hook ) { 

	// Load styles and scripts only on theme info page
	if ( 'appearance_page_eleganto' != $hook ) {
		return;
	}
	
	// Embed theme info css style
	wp_enqueue_style('eleganto-theme-info-css', get_template_directory_uri() .'/css/theme-info.css');

}