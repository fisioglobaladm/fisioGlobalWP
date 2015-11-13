<?php
/**
 *  query for slider2 custom post type for slider with image only
 *
 */
 ?>
<div class="wrapper100percent">
<div class="gallery js-flickity" data-flickity-options='{ 
"contain": true, 
"pageDots": false,
"wrapAround": true,
"imagesLoaded": true
}'>
<?php
$args = array( 'post_type' => 'rtslider2', 'posts_per_page' => $limit, 'order' => $order );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
 ?>

<div class="hero-gallery__cell hero-gallery__cell2">

<div class="sliderimage">
<?php the_post_thumbnail('one_rows_img'); ?>
</div>
<div class="slidertext">
<div class="slidertextinner">
<?php the_content(); ?>
</div>
</div> 
                         
</div> 

<?php endwhile; wp_reset_postdata(); ?>

</div> 
</div> 
