<?php
/**
 *  Empty content template
 *
 */
?>
<div class="row">
  <div class="col-lg-12">
    <h2><?php _e( 'Nothing Found', 'physio' ); ?></h2>
  </div>
</div>
<div class="row">
	<div class="col-lg-12">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
    <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'physio' ), esc_url( admin_url( 'post-new.php' ))); ?></p>
    <?php elseif ( is_search() ) : ?>
    <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'physio' ); ?></p>
		<?php get_search_form(); ?>
    <?php else : ?>
    <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'phyiso' ); ?></p>
		<?php get_search_form(); ?>
    <?php endif; ?>
  </div>
</div>
