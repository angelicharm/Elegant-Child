<div class="prlx"></div>
<div class="section">
	<div class="container">
		<div class="row">
			<div class="bg-image-section col-md-6">
				<div class="bg-section-title col-md-12">
					<?php echo esc_html( get_theme_mod( 'bg_section_title', '' ) ); ?>
				</div>
				<div class="bg-section-desc col-md-12">
					<?php echo esc_html( get_theme_mod( 'bg_section_desc', '' ) ); ?>
				</div>
				<?php if ( get_theme_mod( 'bg_section_button_url', '' ) != '' && get_theme_mod( 'bg_section_button', '' ) != '' ) : ?>   
					<div class="bg-section-button">
						<a href="<?php echo esc_url( get_theme_mod( 'bg_section_button_url', '' ) ); ?>" >
							<?php echo esc_html( get_theme_mod( 'bg_section_button', '' ) ); ?>
						</a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
