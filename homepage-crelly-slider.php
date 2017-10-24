<?php if ( function_exists( 'crellySlider' ) && get_theme_mod( 'crelly_slider_shortcode', '' ) != '' ) { ?>
	<div class="homepage-crelly-slider">
		<?php crellySlider( get_theme_mod( 'crelly_slider_shortcode', '' ) ); ?>
	</div>	
<?php
}
