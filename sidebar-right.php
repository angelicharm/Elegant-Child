<?php
    if (get_theme_mod( 'sticky-sidebar', 0 ) != 0 ) {
      $sticky = 'rsrc-right-sticky td-sticky';
    } else {
      $sticky = 'rsrc-right';
    }
    if (get_theme_mod( 'rigth-sidebar-check', 1 ) != 0 ) : ?>
    <aside id="sidebar" class="col-md-<?php echo absint(get_theme_mod( 'right-sidebar-size', 3 )); ?> <?php echo $sticky; ?>" role="complementary">
        <?php //get the right sidebar
        dynamic_sidebar( 'right-sidebar' ); ?>
    </aside>
<?php endif; ?>
