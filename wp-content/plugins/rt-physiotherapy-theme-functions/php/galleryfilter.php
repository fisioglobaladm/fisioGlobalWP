<?php
/**
 *  query for gallery Isotope filterable custom post type
 *
 */
 ?>	
<div class="isotopewrapper"> 
 
<div id="filters" class="row"> 
<div class="col-lg-12">  
  <button class="gallery-button is-checked hvr-shutter-out-horizontal" data-filter="*"><i class="fa fa-table"></i></button>
  <?php 
	  $terms = get_terms("rtgalleryfilter-categories"); 
	  $count = count($terms); 
	  if ( $count > 0 ){ 
	    foreach ( $terms as $term ) { 
	    $termname = strtolower($term->name);
      $termname = str_replace(' ','-', $termname);
	    echo "<button class=\"gallery-button hvr-shutter-out-horizontal\" data-filter='.".$termname."'>" . $term->name . "</button>\n";
	    } 
    }    
  ?>
</div>
</div>

<div id="isotopecontainer" class="row" >
 
<?php
$args = array( 'post_type' => 'rtgalleryfilter', 'posts_per_page' => $limit, 'order' => $order, 'columns' => $columns );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

$post = NULL;
$terms = get_the_terms( $post, 'rtgalleryfilter-categories' );						
  if ( $terms && ! is_wp_error( $terms ) ) : 
    $items = array();
      foreach ( $terms as $term ) {
        $items[] = $term->name;
      }
      $taxonomy_items = join( " ", str_replace(' ', '-', $items));          
      $taxonomy_items = strtolower($taxonomy_items);
      else :	
	    $taxonomy_items = NULL;					
      endif; 
?>

<?php //isotope item in loop ?>
<div class="element-isotope 
<?php 
if ($columns == 2) { 
echo 'col-md-6 ';
}
elseif ($columns == 3) { 
echo 'col-md-4 ';
}
elseif ($columns == 4) { 
echo 'col-md-3 ';
}
else { 
echo 'col-md-4 ';
}
echo esc_attr( strtolower($taxonomy_items) );?>">
  
<div class="carouselwrapper">
<div class="carouselimage">
<?php 
if ($columns == 2) { 
echo the_post_thumbnail('two_rows_img');
}
elseif ($columns == 3) { 
echo the_post_thumbnail('three_rows_img');
}
elseif ($columns == 4) { 
echo the_post_thumbnail('four_rows_img');
}
else { 
echo the_post_thumbnail('three_rows_img');
}
?> 
</div>             
<div class="view view-first">
<div class="maskhover">
<ul>
<li>
<?php 
$id = get_the_ID();
$page_data = get_page( $id );
$excerp = $page_data->post_excerpt;
  if ( !empty( $excerp ) ) 
    the_excerpt();
  else 
    echo '';
?>
</li>
<li>
  <?php 
    printf('<a class="delay hvr-shutter-out-horizontal" href="%1s">%2s</a>',
    get_permalink(),
    '<i class="fa fa-external-link"></i>'
    );
  ?>
</li>  
</ul>
</div>
</div>

</div> 

</div>
<?php //isotope item in loop end ?>
     
<?php endwhile; wp_reset_postdata(); ?>
</div>
</div>