<?php
/**
 * meta tags template
 *
 */
?>  
<ul>
  <li class="metatime"><i class="fa fa-calendar"></i>   
  <?php echo get_the_date(get_option('date_format'));?> 
  </li>
  <li><i class="fa fa-user"></i> <?php the_author_posts_link() ?></li>
  <li><i class="fa fa-file-text"></i> <?php the_category(', ') ?> </li>
  <li><i class="fa fa-comments"></i> 
  <a href="<?php the_permalink();?>#comments"><?php comments_number('No Comments', '1 Comment', '% Comments' );?></a></li>
</ul>


    
