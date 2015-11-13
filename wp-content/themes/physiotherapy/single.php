<?php
/**
 * single post template
 *
 */
get_header(); ?>
<div id="wrapperpages">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <header class="mainheadlinewrapperpage wrapper100percent">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
           <h1 class="entry-title"><?php the_title(); ?></h1>
        </div>
       </div>
   </div>
 </header> 
<div class="wrapper100percent contentwrapper">
  <div class="container">
    <div class="row"> 
    <!-- sidebar metabox --> 
    <?php
    $sideb = rwmb_meta('physio_sideb'); 
    ?>
    <div class="<?php if (isset($sideb)&& strlen($sideb)) echo esc_attr( $sideb ); else echo "col-md-9"; ?>"> 
    <!-- sidebar metabox end --> 
    <!-- post -->
    <article class="wrapper100percent one-post">
    <!-- date meta -->
    <?php if ( 'post' == get_post_type() ){
      echo "<div class=\"meta metainner\">";
      echo "<ul class=\"metatimeul\">";  
      echo "<li class=\"metatime\"><i class=\"fa fa-calendar\"></i> ";   
      echo get_the_date(get_option('date_format'));   
      echo "</li>";
      echo "</ul>"; 
      echo "</div>";     
      }
      else "";
    ?>
    <!-- date meta end -->   
    <div class="postimage">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="wrapper100percent">
      <?php  the_content(); ?>
    </div> 
    <!-- meta -->
    <?php if ( 'post' == get_post_type() ){
      echo "<div class=\"meta metainner\">";
      include('meta.php'); 
      echo "</div>";
      }
      else "";
    ?>
    <!-- meta end -->
    <?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'physio' ), 'after' => '</div>' ) ); ?>
    <?php if ( 'post' == get_post_type() ){
      echo "<div class=\"postnavigation\">";
      echo "<div>";
      previous_post_link( '&larr; %link' );     
      echo "</div>";
      echo "<div>";
      next_post_link( '&rarr; %link' );     
      echo "</div>";
      echo "</div>";      
      }
      else "";
    ?>
    </article>
    <!-- post end-->
    <!-- tags -->
    <?php if(has_tag()): ?>
      <div class="tags">
        <?php the_tags(); ?>
      </div>
    <?php endif; ?>
    <!-- comments -->
    <?php if ( comments_open() || '0' != get_comments_number() ){
      comments_template( '', true );
    }?>
    <!-- comments end -->
    <?php endwhile; endif; ?>		
    </div>	
    <!-- sidebar metabox --> 
    <?php $sideb = rwmb_meta('physio_sideb'); ?>
    <div class="<?php if($sideb == "col-md-12") echo "hide " ?>col-md-3"> 
      <!-- sidebar metabox end --> 
      <?php get_sidebar(); ?>
    </div>	
    </div>	
  </div>
</div> 
</div> 
<?php get_footer(); ?>