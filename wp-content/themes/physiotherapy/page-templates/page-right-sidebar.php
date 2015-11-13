<?php
/*Template name: A.Page Right Sidebar
*/
get_header(); ?>
<div id="wrapperpages">
  <?php while ( have_posts() ) : the_post();?>
  <div class="container">
    <div class="row">
      <div class="col-md-9">				
        <?php  the_content(); ?>
        <?php if ( comments_open() || get_comments_number() ) { comments_template();} endwhile; ?>
      </div>
      <div class="col-md-3"> 
        <?php get_sidebar(); ?>
      </div>	
    </div>
  </div>
</div>
<?php get_footer(); ?>
