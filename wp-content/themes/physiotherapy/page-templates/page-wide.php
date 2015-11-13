<?php
/*Template name: A.Wide Page
*/
get_header(); ?>
<div id="wrapperpages">
  <?php while ( have_posts() ) : the_post();?>	
  <div class="wrapper100percent">		
    <?php  the_content(); ?>
  </div>
  <div class="wrapper100percent">		
    <div class="containter">	
      <div class="row">	
        <div class="col-lg-12">	
          <?php if ( comments_open() || get_comments_number() ) { comments_template();} ?>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>