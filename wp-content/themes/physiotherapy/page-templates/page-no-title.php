<?php
/*Template name: A.Page (and homepage) without title
*/
get_header(); ?>
<div id="wrapperpages">
  <?php while ( have_posts() ) : the_post();?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">				
        <?php  the_content(); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">		
        <?php if ( comments_open() || get_comments_number() ) { comments_template();} endwhile; ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>

