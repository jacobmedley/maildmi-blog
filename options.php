<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	
	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	$options = array();

$options[] = array(
		'name' => __('Call To Action Phone Number', 'options_check'),
		'type' => 'heading');
		
	// Headline for Footer # //
	$options[] = array(
		'name' => __('Headline Above Phone Number in Footer', 'options_check'),
		'desc' => __('Please add headline here', 'options_check'),
		'id' => 'phone_headline',
		'std' => 'Display Headline',
		'type' => 'text');

	// CTA Display # //
	$options[] = array(
		'name' => __('Call To Action Phone Number for Display', 'options_check'),
		'desc' => __('Please put your phone number here', 'options_check'),
		'id' => 'phone_number',
		'std' => 'Display Phone Number',
		'type' => 'text');
	// CTA Link # //
	$options[] = array(
		'name' => __('Call To Action Phone Number for Links', 'options_check'),
		'desc' => __('Same as above but use full number with "-" as seperators e.g. 1-888-888-8888', 'options_check'),
		'id' => 'link_phone_number',
		'std' => 'Link Phone Number',
		'type' => 'text');
	

$options[] = array(
		'name' => __('Mail DMI Company Logo', 'options_check'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Upload the Company Logo Here', 'options_check'),
		'desc' => __('Suggest a transparent PNG', 'options_check'),
		'id' => 'logo',
		'std' => 'Company Logo',
		'type' => 'upload');

$options[] = array(
		'name' => __('Footer Badge', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Upload Footer Badge Here', 'options_check'),
		'desc' => __('Suggest a transparent PNG', 'options_check'),
		'id' => 'badge',
		'std' => 'Footer Badge',
		'type' => 'upload');

$options[] = array(
		'name' => __('Company Name and Address', 'options_check'),
		'type' => 'heading');


	$options[] = array(
		'name' => __('Company Name', 'options_check'),
		'desc' => __('Please put your company name here', 'options_check'),
		'id' => 'company_name',
		'std' => 'Display Company Name',
		'type' => 'text');

	$options[] = array(
		'name' => __('Your Address Goes Here', 'options_check'),
		'desc' => __('Please put your address here', 'options_check'),
		'id' => 'address',
		'std' => 'Display Adress',
		'type' => 'text');

	$options[] = array(
		'name' => __('Social Media', 'options_check'),
		'type' => 'heading');


	$options[] = array(
		'name' => __('Facebook URL', 'options_check'),
		'desc' => __('Please put your URL here', 'options_check'),
		'id' => 'facebook_url',
		'std' => 'Facebook URL',
		'type' => 'text');

	$options[] = array(
		'name' => __('Facebook Icon', 'options_check'),
		'desc' => __('Please put your icon here', 'options_check'),
		'id' => 'facebook_icon',
		'std' => 'Facebook icon',
		'type' => 'text');

	$options[] = array(
		'name' => __('LinkedIn URL', 'options_check'),
		'desc' => __('Please put your URL here', 'options_check'),
		'id' => 'linkedin_url',
		'std' => 'LinkedIn URL',
		'type' => 'text');

	$options[] = array(
		'name' => __('LinkedIn Icon', 'options_check'),
		'desc' => __('Please put your icon here', 'options_check'),
		'id' => 'linkedin_icon',
		'std' => 'LinkedIn icon',
		'type' => 'text');

	$options[] = array(
		'name' => __('Twitter URL', 'options_check'),
		'desc' => __('Please put your URL here', 'options_check'),
		'id' => 'twitter_url',
		'std' => 'Twitter URL',
		'type' => 'text');

	$options[] = array(
		'name' => __('Twitter Icon', 'options_check'),
		'desc' => __('Please put your icon here', 'options_check'),
		'id' => 'twitter_icon',
		'std' => 'Twitter icon',
		'type' => 'text');
		

		return $options;
}