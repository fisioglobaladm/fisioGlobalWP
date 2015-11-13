<?php
/**
 *  query for services custom post type
 *
 */
 ?>
<div id="masonrycontainer1" class="services row startAnimation animated" data-animate="fadeInUp">
<?php
$args = array( 'post_type' => 'rtservices', 'posts_per_page' => $limit, 'order' => $order, 'columns' => $columns );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
 ?> 
 <div  class="masonryselector1
  <?php 
 if($columns == '1') echo 'col-md-12';
 elseif($columns == '2') echo 'col-md-6';
 elseif($columns == '3') echo 'col-md-4';
 elseif($columns == '4') echo 'col-md-3';
 elseif($columns == '5') echo 'col-five-columns'; 
 elseif($columns == '6') echo 'col-md-2';
 else echo 'col-md-4'; 
 ?> ">
<div class="serviceone"> 
 
<div class="servicesicon"> 
<?php 
$icon = rwmb_meta('physio_icon'); 
if ($icon) {
  echo '<i class="';
  echo esc_attr( $icon );
  echo '"></i>';
}
?>
</div> 
<h4><?php the_title(); ?></h4>
<p>
<?php 
$text = get_the_content();
$trimmed_content = wp_trim_words( $text, 20 );
echo esc_attr( $trimmed_content );
?>
</p>
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

<?php endwhile; wp_reset_postdata(); ?>
</div> 