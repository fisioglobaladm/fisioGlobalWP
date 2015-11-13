<?php
/**
 * Autor template
 *
 */
get_header(); ?>
<div id="wrapperpages">
  <header class="mainheadlinewrapperpage wrapper100percent">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
           <h1><?php printf( __( 'Posts by: %s', 'physio' ), get_the_author_meta('display_name')); ?></h1>
        </div>
       </div>
      </div>
  </header>
  <div class="wrapper100percent"> 
    <div class="container">
      <div class="row">
      <div class="col-md-9"> 
        <?php if(have_posts()): while(have_posts()): the_post();?>
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
            <div <?php post_class(); ?>>
              <h2>
              <a href="<?php the_permalink();?>"><?php the_title();?></a>							
              </h2>
            <div class="wrapper100percent">
              <p>
             <?php 
              $content = get_the_content();
              $trimmed_content = wp_trim_words( $content, 35 );
              echo esc_attr( $trimmed_content );
              ?>
              </p>
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
            <div class="button2 button-small">
            <?php
            printf('<a class="hvr-shutter-out-horizontal" href="%1s">%2s</a>',
            get_permalink(),
            __('read more &#8594;   ', 'physio')
            );
            ?>
            </div>
            </div>
            </div>
          </article>	
        <?php endwhile; else: get_template_part('content-none'); endif; ?>
        <div class="row">
          <div class="col-lg-12 text-center pagination">
          <?php
          global $wp_query;
          $big = 999999999;
          echo paginate_links( array( 
          'base'         => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
          'format'       => '?paged=%#%',
          'prev_text'    => __('&#10094;', 'physio'),
	        'next_text'    => __('&#10095;', 'physio'),
          'current'      => max( 1, get_query_var( 'paged' ) ),
          'total'        => $wp_query->max_num_pages) );
          ?>
          </div>
        </div>		
      </div>
      <div class="col-md-3"> 
        <?php get_sidebar(); ?>
      </div>	
      </div>
    </div>
  </div>			
</div>	
<?php get_footer(); ?>