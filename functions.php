<?php 
require_once('includes/clean-up.php');
require_once('includes/excerpt-titles.php');
require_once('includes/thumb-nails.php');
require_once('includes/menus.php');
require_once('includes/options-options.php');
require_once('includes/paging.php');
require_once('includes/wp_bootstrap_navwalker.php');

// Enable thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(200, 200, true); // Normal post thumbnails


// Enable widgetable sidebar
register_sidebar(array(
	'name' => __( 'Home Sidebar' ),
	'id' => 'home-sidebar',
	'class' => 'sidebar',
	'description' => __( 'Home Widgets in this area will be shown on the right-hand side.' ),
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));
register_sidebar(array(
	'name' => __( 'Blog Sidebar' ),
	'id' => 'blog-sidebar',
	'class' => 'sidebar',
	'description' => __( 'Blog Widgets in this area will be shown on the right-hand side.' ),
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));
register_sidebar(array(
	'name' => __( 'Page Sidebar' ),
	'id' => 'page-sidebar',
	'class' => 'sidebar',
	'description' => __( 'Page Widgets in this area will be shown on the right-hand side.' ),
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));
register_sidebar(array(
	'name' => __( 'Promos Sidebar' ),
	'id' => 'promos-sidebar',
	'class' => 'sidebar',
	'description' => __( 'Promo Ads Go Here' ),
	'before_widget' => '<li id="%1$s" class="widget %2$s promos">',
	'after_widget'  => '</li>',
	'before_title' => '<span class="hidden">',
	'after_title' => '</span>'
));
register_sidebar(array(
	'name' => __( 'Post Footer Banner' ),
	'id' => 'post-footer-banner',
	'class' => 'sidebar',
	'description' => __( 'Insert Your Banners for Posts Here' ),
	'before_widget' => '<span id="%1$s" class="widget %2$s banner">',
	'after_widget'  => '</span>',
	'before_title' => '<span class="hidden">',
	'after_title' => '</span>'
));


// Add default posts and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );


// Put post thumbnails into rss feed
function wpfme_feed_post_thumbnail($content) {
	global $post;
	if(has_post_thumbnail($post->ID)) {
		$content = '' . $content;
	}
	return $content;
}
add_filter('the_excerpt_rss', 'wpfme_feed_post_thumbnail');
add_filter('the_content_feed', 'wpfme_feed_post_thumbnail');

// pagination
function custom_pagination() {
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    $pages = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'prev_next' => false,
            'type'  => 'array',
            'prev_next'   => TRUE,
			'prev_text'    => __('«'),
			'next_text'    => __('»'),
        ) );
        if( is_array( $pages ) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            echo '<ul class="pagination">';
            foreach ( $pages as $page ) {
                    echo "<li>$page</li>";
            }
           echo '</ul>';
        }
}


//[phone]
function phone_func( $atts ){
	return of_get_option('phone_number', 'Not Set' );
}
add_shortcode( 'phone', 'phone_func' );


function amgenna_change_grunion_success_message( $msg ) {
global $contact_form_message;
return '<p><strong>' . 'THANK YOU FOR SIGNING UP!' . '</strong></p>' . wp_kses($contact_form_message, array('br' => array(), 'blockquote' => array()));;
}
add_filter( 'grunion_contact_form_success_message', 'amgenna_change_grunion_success_message' );


?>