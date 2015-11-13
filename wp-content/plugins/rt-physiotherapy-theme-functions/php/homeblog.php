<?php
/**
 *  query for homeblog custom post type
 *
 */
 ?>
<div class="wrapper100percent">
<div class="gallery js-flickity" data-flickity-options='{ 
"contain": true
}'>
<?php
$args = array( 'post_type' => 'post', 'posts_per_page' => $limit, 'order' => $order, 'columns' => $columns );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
 ?>
<div class="homeblog
<?php 
if ($columns == 1) { 
echo 'col-md-12';
}
elseif ($columns == 2) { 
echo 'col-md-6';
}
elseif ($columns == 3) { 
echo 'col-md-4';
}
elseif ($columns == 4) { 
echo 'col-md-3';
}
elseif ($columns == 5) { 
echo 'col-five-columns';
}
elseif ($columns == 6) { 
echo 'col-md-2';
}
else { 
echo 'col-md-3';
}?> startAnimation animated" data-animate="fadeInUp">

<div>

<div class="meta">
<ul>
  <li class="metatime"> <i class="fa fa-calendar"></i> 
  <?php echo get_the_date(get_option('date_format'))?></li>
</ul>
</div>

<?php 
if (has_post_thumbnail()) { 

if ($columns == 1) { 
echo the_post_thumbnail('one_rows_img');
}
elseif ($columns == 2) { 
echo the_post_thumbnail('two_rows_img');
}
elseif ($columns == 3) { 
echo the_post_thumbnail('three_rows_img');
}
elseif ($columns == 4) { 
echo the_post_thumbnail('four_rows_img');
}
elseif ($columns == 5) { 
echo the_post_thumbnail('five_rows_img');
}
elseif ($columns == 6) { 
echo the_post_thumbnail('six_rows_img');
}
else { 
echo the_post_thumbnail('four_rows_img');
}
}
else {
 echo '<img src="' . (get_template_directory_uri() . '/assets/images/imgplaceholder.png' ). '" alt="">';
}

?>
</div>

<div class="homeblogtext">

<h4>
<?php the_title() ?>
</h4>
<p>
<?php 
$text = get_the_content();
$trimmed_content = wp_trim_words( $text, 30 );
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
</div>
