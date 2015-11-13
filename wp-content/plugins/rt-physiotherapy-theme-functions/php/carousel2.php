<?php
/**
 *  query for carousel2 custom post type
 *
 */
 ?>
<div class="wrapper100percent">
<div class="gallery js-flickity" data-flickity-options='{ 
"contain": true, 
"imagesLoaded": true, 
"wrapAround": true
}'>
<?php
$args = array( 'post_type' => 'rtcarousel2', 'posts_per_page' => $limit, 'order' => $order, 'columns' => $columns );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
 ?>
<div class="
<?php 
if ($columns == 1) { 
echo 'col-sm-12';
}
elseif ($columns == 2) { 
echo 'col-sm-6';
}
elseif ($columns == 3) { 
echo 'col-sm-4';
}
elseif ($columns == 4) { 
echo 'col-sm-3';
}
elseif ($columns == 5) { 
echo 'col-five-columns';
}
elseif ($columns == 6) { 
echo 'col-sm-2';
}
else { 
echo 'col-md-3';
}?> carouselwidth startAnimation animated" data-animate="fadeInUp">

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
<div class="view view-first">
<div class="maskhover">
<ul>
<li>
<?php the_excerpt(); ?>
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
<?php endwhile; wp_reset_postdata(); ?>
</div>
</div>