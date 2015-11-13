<?php
/**
 *  query for main row box columns 2 (list) custom post type
 *
 */
 ?>
<div class="wrapper100percent">
<div class="homeblog-list startAnimation animated" data-animate="fadeInUp">
<?php 
$args = array( 'post_type' => 'post', 'posts_per_page' => $limit, 'order' => $order );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); 
?>
<div class="onelistblog">
<div class="postthumb">
<?php 
the_post_thumbnail('six_rows_img');
?>
</div>
<div class="posttext">
<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
  <ul class="meta">
    <li class="metatime"> <i class="fa fa-calendar"></i> 
    <a href="<?php the_permalink();?>"><?php echo get_the_date(get_option('date_format'))?></a>
    </li>
    <li><i class="fa fa-comments"></i> 
    <a href="<?php the_permalink();?>"><?php comments_number('No Comments', '1 Comment', '% Comments' );?></a>
    </li>
  </ul>
<p>
<?php 
$text = get_the_content();
$trimmed_content = wp_trim_words( $text, 22 );
echo esc_attr( $trimmed_content );
?>
</p>
</div>
</div>
<?php endwhile; wp_reset_postdata(); ?>
</div> 
</div> 
