<?php
/**
 * sidebar template
 *
 *
 */
?>
<div class="sidebar widgets-style1">
  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
  <?php endif; ?>
</div>