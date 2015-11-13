<?php
/**
 *  query for main row box columns custom post type
 *
 */
 ?>
<div class="wrapper100percent">
<div id="masonrycontainer" class="onecolumnwrapper 
  <?php
 if
   ($boxed == 'boxed')
 echo 'boxed ';
 else ''; 
  ?>">
<?php 
$count = 0;
$args = array( 'post_type' => 'rtboxcolumns', 'posts_per_page' => $limit, 'order' => $order, 'columns' => $columns, 'boxed' => $boxed );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); 
$count++;
 ?> 
 <div  class="masonryselector hvr-curl-top-right  
 <?php
 if(
   ($columns == '2' and $limit == '2' and $count == 2) or
   ($columns == '3' and $limit == '3' and $count == 3) or
   ($columns == '4' and $limit == '4' and $count == 4) or
   ($columns == '5' and $limit == '5' and $count == 5)
	)
 echo 'hvr-curl-top-right-active';
 else ''; 
 ?>
  <?php 
 if($columns == '1') echo 'column1';
 elseif($columns == '2') echo 'column2';
 elseif($columns == '3') echo 'column3';
 elseif($columns == '4') echo 'column4';
 elseif($columns == '5') echo 'column5';
 else echo 'column3'; 
 ?> ">
 <div class="onecolumn">

<div class="imgwrapper">
<?php 
$icon = rwmb_meta('physio_icon'); 
if ($icon) {
  echo '<i class="';
  echo esc_attr( $icon );
  echo '"></i>';
}
?>
</div> 

<h3><?php the_title(); ?></h3>
<?php the_content(); ?>

</div> 
</div>

<?php endwhile; wp_reset_postdata(); ?>
</div> 
</div> 
