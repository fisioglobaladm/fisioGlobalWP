<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<meta charset=<?php bloginfo( 'charset' ); ?> />
<meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php wp_title('|', true, 'right'); ?></title>
<link rel=profile href=http://gmpg.org/xfn/11 />
<link rel=pingback href=<?php bloginfo( 'pingback_url' ); ?> /> 
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll">
<header class="headerwrapper widgets-style2"> 
  <div class="headerfirst">    
    <div class="container"> 
      <div class="row">    
        <div class="col-md-6">   
          <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-6' ); ?>	
          <?php endif; ?>			
        </div>
        <div class="col-md-6">  
	  <?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-7' ); ?>	
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container">  
    <div class="row"> 
      <div class="col-md-4">   
        <?php if ( is_active_sidebar( 'sidebar-9' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-9' ); ?>	
        <?php endif; ?>			
      </div>
      <div class="col-md-8">   
        <?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-8' ); ?>	
        <?php endif; ?>			
      </div>
    </div>
  </div>
</header>
<?php 
if ( is_page_template( 'page-templates/page-front-page.php' ) ) {
	 get_template_part( 'nav', 'single'); 
} else {
	 get_template_part( 'nav' ); 
}
?>
  