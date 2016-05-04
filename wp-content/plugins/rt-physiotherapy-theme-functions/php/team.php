<?php
/**
 *  query for team custom post type
 *
 */
 ?>
<div class="row">

<?php query_posts( array ( 'post_type' => 'rtteam', 'posts_per_page' => $limit, 'columns' => $columns, 'order' => $order ) ); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="<?php 
  if ($columns == "6") echo 'col-md-2'; 
  elseif ($columns == "1") echo 'col-md-12'; 
  elseif ($columns == "4") echo 'col-md-3'; 
  elseif ($columns == "5") echo 'col-five-columns';
  elseif ($columns == "3") echo 'col-md-4';
  elseif ($columns == "2") echo 'col-md-6';
  else echo 'col-md-3';?> teamcolumn startAnimation animated" data-animate="fadeInUp" >

<div class="teamimagecontainer">

<?php 
  if ($columns == "1") echo the_post_thumbnail('one_rows_img');
  elseif ($columns == "2") echo the_post_thumbnail('two_rows_img'); 
  elseif ($columns == "3") echo the_post_thumbnail('three_rows_img');
  elseif ($columns == "5") echo the_post_thumbnail('five_rows_img');
  elseif ($columns == "4") echo the_post_thumbnail('four_rows_img');
  elseif ($columns == "6") echo the_post_thumbnail('six_rows_img');
  else echo the_post_thumbnail('four_rows_img'); 
?>

<div class="view view-first">
  <div class="maskhover">
  <?php 
  $id = get_the_ID();
  $page_data = get_page( $id );
  $excerp = $page_data->post_excerpt;
  if ( !empty( $excerp ) ) 
    the_excerpt();
  else 
    echo '';
?>
  </div>
</div>

</div>

<div class="teamtextcontainer">

<h4><?php the_title(); ?></h4>
<?php
$teamjob = rwmb_meta('physio_teamjob'); 
if ($teamjob) {
  echo '<p class="teamjob">';
  echo esc_attr( $teamjob );
  echo '</p>';
}
?>
<div class="button2 button-small">
<?php 
  printf('<a class="hvr-shutter-out-horizontal" href="%1s">%2s</a>',
  get_permalink(),
 __('Leer más &#8594;   ', 'physio')
    );
  ?>
</div>
</div>

</div>
<?php endwhile; endif; wp_reset_query(); ?>
</div>