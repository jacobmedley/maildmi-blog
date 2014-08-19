  <div id="ad-carousel" class="carousel slide">
    <div class="carousel-inner">
      <?php 
   $the_query = new WP_Query(array(
    'category_name' => 'promos', 
    'posts_per_page' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
      <div class="item active"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><span class="img-over">
        <?php $image = wp_get_attachment_image_src(get_field('promo_image'), 'ad-image');  ?>
<img class="img-responsive" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('promo_image')) ?>" />
        </span></a> </div>
      <!-- item active -->
      <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
      <?php 
   $the_query = new WP_Query(array(
    'category_name' => 'promos', 
    'posts_per_page' => 5, 
    'offset' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
      <div class="item"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><span class="img-over">
        <?php $image = wp_get_attachment_image_src(get_field('promo_image'), 'ad-image');  ?>
<img class="img-responsive" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('promo_image')) ?>" />
        </span></a> </div>
      <!-- item -->
      <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
    </div>
  </div>

<!-- side bar -->