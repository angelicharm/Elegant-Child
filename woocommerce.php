<?php get_header(); ?>

<?php get_template_part( 'template-part', 'topnav' ); ?>

<?php get_template_part( 'template-part', 'head' ); ?>

<!-- start content container -->
<div class="row container rsrc-content">

	<?php get_sidebar( 'left' ); ?>


    <div class="col-md-<?php eleganto_main_content_width(); ?> rsrc-main">
        <div class="woocommerce">
			<?php woocommerce_content(); ?>
        </div>
    </div>     

	<?php get_sidebar( 'right' ); ?>

</div>
<!-- end content container -->

<?php get_template_part( 'template-part', 'footernav' ); ?>

<?php get_footer(); ?>
