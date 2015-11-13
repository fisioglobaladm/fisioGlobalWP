<?php
/*Template name: A.Page Left Sidebar
*/
get_header(); ?>
<div id="wrapperpages">
  <?php while ( have_posts() ) : the_post();?>
  <div class="container">
    <div class="row">
      <div class="col-md-9 contentr">				
        <?php  the_content(); ?>
        <?php if ( comments_open() || get_comments_number() ) { comments_template();} endwhile; ?>
      </div>
      <div class="col-md-3 sidebarl"> 
        <?php get_sidebar(); ?>
      </div>	
    </div>
  </div>
</div>
<?php get_footer(); ?>

