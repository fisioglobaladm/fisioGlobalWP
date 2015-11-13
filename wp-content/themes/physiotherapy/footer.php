<?php
/**
 * footer template
 *
 * 
 */
?>     
<footer class="bottom">
  <div class="widgets-style2">
    <div class="container">
	    <div class="row">
        <div class="col-sm-12">   
          <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-2' ); ?>	
          <?php endif; ?>
        </div>
      </div>
	    <div class="row">
        <div class="col-sm-3">   
          <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-3' ); ?>	
          <?php endif; ?>
        </div>
		    <div class="col-sm-3">   
          <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-4' ); ?>	
          <?php endif; ?>
        </div>
		    <div class="col-sm-3">   
          <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-5' ); ?>	
          <?php endif; ?>
        </div>
        <div class="col-sm-3">   
          <?php if ( is_active_sidebar( 'sidebar-5a' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-5a' ); ?>	
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>  
</footer>
<div class="copyrightwrapper">
  <div class="container">  
    <div class="col-lg-8">   
      <p>
	    <?php echo get_theme_mod('copyright_detailstext'); ?>
      <a href="<?php echo get_theme_mod('copyright_detailsurl'); ?> ">
	    <?php echo get_theme_mod('copyright_detailsinput'); ?>
	    </a>
	    </p>
    </div>
    <div class="col-lg-4 scrollbutton">   
      <a href="javascript:scrollToTop()"><i class="fa fa-chevron-up"></i></a>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>