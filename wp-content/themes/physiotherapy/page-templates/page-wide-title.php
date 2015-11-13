<?php
/*Template name: B.Wide Page With Title
*/
get_header(); ?>
<div id="wrapperpages">
  <?php while ( have_posts() ) : the_post();?>	
  <header class="mainheadlinewrapperpage wrapper100percent">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
           <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </header>
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