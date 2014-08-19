<?php

// thumbnails and images sizes

if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 234, 234, true );

// additional image sizes
add_image_size( 'ad-image', 790, 790, true  ); 
add_image_size( 'post-hero', 1200, 376, true  ); 

}

// show post thumbnails
// Setup Admin Thumbnail Size
if ( function_exists( 'add_theme_support' ) ) {
  add_image_size( 'admin-thumb', 150, 100 ); // 100 pixels wide (and unlimited height)
	}

// Thumbnails to Admin Post View
add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);

function posts_columns($defaults){
    $defaults['my_post_thumbs'] = __('Thumbs');
    return $defaults;
}

function posts_custom_columns($column_name, $id){
	if($column_name === 'my_post_thumbs'){
        echo the_post_thumbnail( 'admin-thumb' );
    }
}


?>