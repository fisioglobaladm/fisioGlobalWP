<!-- navigation for multipage and inner pages header menu -->
<!-- menu -->
<div class="navbarwrapper sticker">
  <div class="navbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar">
            <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" type="button">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navbar-brand">
                <?php if ( get_theme_mod( 'logo' ) ) : ?>
                  <div class='site-logo'>
                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                  </div>
                <?php else : ?>
                <section>
                  <h2 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h2>
                  <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
                </section>
                <?php endif; ?>
              </div>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse"> 
              <div class="cl-effect-12">
                <?php wp_nav_menu( array( 
                'theme_location' => 'header-menu',
                'menu'           => 'top_menu',
                'menu_class'     => 'nav navbar-nav pull-right'
                ));
                ?>
              </div>
            </div>
          </nav>
	      </div>
      </div>
    </div>
  </div>
</div>
<!-- menu end -->