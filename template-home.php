<?php
/**
 *
 * Template name: Homepage
 * The template for displaying homepage.
 *
 * @package eleganto
 */
get_header();
?>

<?php get_template_part( 'template-part', 'topnav' ); ?>

<?php get_template_part( 'template-part', 'head' ); ?>

<!-- start content container -->
<div class="row rsrc-content-home">
	<div class="rsrc-main">
		<?php if ( get_theme_mod( 'home_slider', 'flexslider' ) == 'flexslider' ) : ?>
			<?php get_template_part( 'templates/homepage', 'slider' ); ?>
		<?php elseif ( get_theme_mod( 'home_slider', 'crelly' ) == 'crelly' ) : ?>
			<?php get_template_part( 'templates/homepage', 'crelly-slider' ); ?>
		<?php endif; ?>
		<?php $sortable_value = maybe_unserialize( get_theme_mod( 'home_layout', array( 'carousel_section', 'image_section', 'testimonial_section', 'blog_section' ) ) ); ?>
		<?php if ( !empty( $sortable_value ) ) : ?>
			<?php $i = 0; ?>
			<?php foreach ( $sortable_value as $checked_value ) : ?>
				<section id="<?php echo $checked_value; ?>" class="homepage-section section<?php echo $i; ?> <?php if ( get_theme_mod( $checked_value . '_intro_set', 'image' ) == 'video' ) { echo 'video-bg'; } ?>" data-animation="bt_visible animated <?php echo get_theme_mod( $checked_value . '_animation', 'none' ); ?>" data-id="<?php echo $checked_value; ?>" data-video="<?php if ( get_theme_mod( $checked_value . '_intro_set', 'image' ) == 'video' ) { echo get_theme_mod( $checked_value . '_video_id', '' ); } ?>" >
					<?php get_template_part( 'templates/homepage', $checked_value ); ?>
				</section>
				<?php $i++; ?>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>
<!-- end content container -->

<?php get_template_part( 'template-part', 'footernav' ); ?>

<?php get_footer(); ?>
