<!-- side bar -->

<?php

get_search_form();
dynamic_sidebar( 'promos-sidebar' );
	//get_sidebar( 'ads' );

	echo "<ul class='sidebar'>";
if ( is_page()) { 

	dynamic_sidebar( 'page-sidebar' );


} elseif (is_single()) {

	dynamic_sidebar( 'blog-sidebar' );

} elseif (is_home()) {	

	dynamic_sidebar( 'home-sidebar' );

} elseif (is_front_page()) {

	dynamic_sidebar( 'home-sidebar' );

} else { 

	dynamic_sidebar( 'home-sidebar' );

} 
echo "</ul>";
?>

