<?php
/**
 *  query for carousel custom post type
 *
 */
 ?>
<div class="row js-flickity" data-flickity-options='{ 
"contain": true
}'>
<?php
$args = array( 'post_type' => 'rttestimonials', 'posts_per_page' => $limit, 'order' => $order );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
 ?>
<div class="col-md-4 testimonials">
<div class="testimonialsinner">
<?php 
the_content();
?> 
</div> 
<?php 
the_post_thumbnail('six_rows_img');
?>         
</div> 

<?php endwhile; wp_reset_postdata(); ?>

</div> 