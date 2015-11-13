<?php
/*Template Name: Front Page (for one page website)
*/
get_header(); ?>
<div id="wrapperpages">
  <?php while ( have_posts() ) : the_post();?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">				
        <?php  the_content(); endwhile; ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>