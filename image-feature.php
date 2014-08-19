<?php 

if(get_field('custom_page_header'))
	
	{
		$image = wp_get_attachment_image_src(get_field('custom_page_header'), 'post-hero');  ?>
		
		<img class="image-feature img-responsive" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title() ?>" />


	<?php } elseif ( has_post_thumbnail() ) {
		
		the_post_thumbnail('post-hero', array('class' => 'image-feature img-responsive post-image')); 
	} 

?>
