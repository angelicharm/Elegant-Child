<?php
    if (get_theme_mod( 'sticky-sidebar', 0 ) != 0 ) {
      $sticky = 'rsrc-left-sticky td-sticky';
    } else {
      $sticky = 'rsrc-left';
    }
    if (get_theme_mod( 'left-sidebar-check', 0 ) != 0 ) : ?>
    <aside id="sidebar-secondary" class="col-md-<?php echo absint(get_theme_mod( 'left-sidebar-size', 3 )); ?> <?php echo $sticky; ?>" role="complementary">
        <?php dynamic_sidebar( 'left-sidebar' ); ?>
    </aside>
<?php endif; ?>