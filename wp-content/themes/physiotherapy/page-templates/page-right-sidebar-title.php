<?php
/*Template name: B.Page Right Sidebar With Title
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