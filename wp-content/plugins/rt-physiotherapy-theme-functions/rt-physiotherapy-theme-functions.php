<?php
/*
Plugin Name: Rt Physiotherapy Theme Functions
Plugin URI: http://themeforest.net/user/rayoflightt
Description: Shortcodes and custom post types for Physiotherapy - Physical Therapy WordPress Theme
Version: 1.0.0
Author: rayoflightthemes.com
Author URL: http://themeforest.net/user/rayoflightt
License: http://themeforest.net/licenses
*/
/********************************************************
* CUSTOM POST TYPES
*********************************************************/

/* Testimonials custom post type */
add_action('init', 'rt_physiotheme_rttestimonials');

function rt_physiotheme_rttestimonials()  {
  $labels = array(
    'name' => __('Testimonials', 'physio'),
    'singular_name' => __('Testimonials', 'physio'),
    'add_new' => __('Add New Testimonial', 'physio'),
    'add_new_item' => __('Add New Testimonial', 'physio'),
    'edit_item' => __('Edit Testimonial', 'physio'),
    'new_item' => __('New Testimonial', 'physio'),
    'view_item' => __('View Testimonials', 'physio'),
    'search_items' => __('Search Testimonials', 'physio'),
    'not_found' =>  __('No Testimonials found', 'physio'),
    'not_found_in_trash' => __('No Testimonials found in Trash', 'physio'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => false,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'testimonials','with_front' => false),
    'capability_type' => 'post',
    'show_in_nav_menus' => true,
    'hierarchical' => false,
    'exclude_from_search' => true,
    'menu_position' => 4,
    'supports' => array( 'title', 'editor', 'thumbnail')
  );
  register_post_type('rttestimonials',$args);
}
/* Testimonials custom post type end */



/* Slider custom post type */
add_action('init', 'rt_physiotheme_slider_cpt');

function rt_physiotheme_slider_cpt()  {
  $labels = array(
    'name' => __('Slider', 'physio'),
    'singular_name' => __('Slider', 'physio'),
    'add_new' => __('Add New slider', 'physio'),
    'add_new_item' => __('Add New slider', 'physio'),
    'edit_item' => __('Edit slider', 'physio'),
    'new_item' => __('New slider', 'physio'),
    'view_item' => __('View slider', 'physio'),
    'search_items' => __('Search sliders', 'physio'),
    'not_found' =>  __('No sliders found', 'physio'),
    'not_found_in_trash' => __('No sliders found in Trash', 'physio'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => false,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'slider','with_front' => false),
    'capability_type' => 'post',
    'show_in_nav_menus' => true,
    'hierarchical' => false,
    'exclude_from_search' => true,
    'menu_position' => 5,
    'supports' => array( 'title', 'editor', 'thumbnail')
  );
  register_post_type('rtslider',$args);
}
/* Slider custom post type end */


/* Slider2 custom post type */
add_action('init', 'rt_physiotheme_slider2_cpt');

function rt_physiotheme_slider2_cpt()  {
  $labels = array(
    'name' => __('Slider2', 'physio'),
    'singular_name' => __('Slider2', 'physio'),
    'add_new' => __('Add New slider2', 'physio'),
    'add_new_item' => __('Add New slider2', 'physio'),
    'edit_item' => __('Edit slider2', 'physio'),
    'new_item' => __('New slider2', 'physio'),
    'view_item' => __('View slider2', 'physio'),
    'search_items' => __('Search sliders2', 'physio'),
    'not_found' =>  __('No sliders2 found', 'physio'),
    'not_found_in_trash' => __('No sliders2 found in Trash', 'physio'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => false,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'slider2','with_front' => false),
    'capability_type' => 'post',
    'show_in_nav_menus' => true,
    'hierarchical' => false,
    'exclude_from_search' => true,
    'menu_position' => 6,
    'supports' => array( 'title', 'editor', 'thumbnail')
  );
  register_post_type('rtslider2',$args);
}
/* Slider2 custom post type end */


/* Carousel custom post type */
add_action('init', 'rt_physiotheme_carousel_cpt');

function rt_physiotheme_carousel_cpt()  {
  $labels = array(
    'name' => __('Carousel', 'physio'),
    'singular_name' => __('carousel', 'physio'),
    'add_new' => __('Add New carousel', 'physio'),
    'add_new_item' => __('Add New carousel', 'physio'),
    'edit_item' => __('Edit carousel', 'physio'),
    'new_item' => __('New carousel', 'physio'),
    'view_item' => __('View carousel', 'physio'),
    'search_items' => __('Search carousel', 'physio'),
    'not_found' =>  __('No carousel found', 'physio'),
    'not_found_in_trash' => __('No carousel found in Trash', 'physio'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'carousel_image','with_front' => false),
    'capability_type' => 'post',
    'show_in_nav_menus' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'menu_position' => 7,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
  );
  register_post_type('rtcarousel',$args);
}
/* Carousel custom post type end */


/* Carousel2 custom post type */
add_action('init', 'rt_physiotheme_carousel2_cpt');

function rt_physiotheme_carousel2_cpt()  {
  $labels = array(
    'name' => __('Carousel2', 'physio'),
    'singular_name' => __('carousel2', 'physio'),
    'add_new' => __('Add New carousel2', 'physio'),
    'add_new_item' => __('Add New carousel2', 'physio'),
    'edit_item' => __('Edit carousel2', 'physio'),
    'new_item' => __('New carousel2', 'physio'),
    'view_item' => __('View carousel2', 'physio'),
    'search_items' => __('Search carousel2', 'physio'),
    'not_found' =>  __('No carousel found', 'physio'),
    'not_found_in_trash' => __('No carousel2 found in Trash', 'physio'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'carousel2_image','with_front' => false),
    'capability_type' => 'post',
    'show_in_nav_menus' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'menu_position' => 8,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
  );
  register_post_type('rtcarousel2',$args);
}
/* carousel2 custom post type end */


/* Team custom post type */
add_action( 'init', 'rt_physiotheme_register_cpt_team' );

function rt_physiotheme_register_cpt_team() {
    $labels = array(
    'name' => __( 'team', 'physio' ),
    'singular_name' => __( 'team', 'physio' ),
    'add_new' => __( 'Add New', 'physio' ),
    'add_new_item' => __( 'Add New team', 'physio' ),
    'edit_item' => __( 'Edit team', 'physio' ),
    'new_item' => __( 'New team', 'physio' ),
    'view_item' => __( 'View team', 'physio' ),
    'search_items' => __( 'Search team', 'physio' ),
    'not_found' => __( 'No team found', 'physio' ),
    'not_found_in_trash' => __( 'No team found in Trash', 'physio' ),
    'parent_item_colon' => __( 'Parent team:', 'physio' ),
    'menu_name' => __( 'Team', 'physio' ),
    );
    $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'editor', 'thumbnail', 'title', 'excerpt' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => false,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => array('slug' => 'team','with_front' => false),
	  'menu_position' => 9,
    'capability_type' => 'post'
    );
    register_post_type( 'rtteam', $args );
}
/* Team custom post type end */


/* Box columns custom post type */
add_action( 'init', 'rt_physiotheme_register_cpt_boxcolumns' );

function rt_physiotheme_register_cpt_boxcolumns() {
    $labels = array(
    'name' => __( 'box columns', 'physio' ),
    'singular_name' => __( 'boxcolumns', 'physio' ),
    'add_new' => __( 'Add New', 'physio' ),
    'add_new_item' => __( 'Add New boxcolumn', 'physio' ),
    'edit_item' => __( 'Edit boxcolumns', 'physio' ),
    'new_item' => __( 'New boxcolumns', 'physio' ),
    'view_item' => __( 'View boxcolumns', 'physio' ),
    'search_items' => __( 'Search boxcolumns', 'physio' ),
    'not_found' => __( 'No boxcolumns found', 'physio' ),
    'not_found_in_trash' => __( 'No boxcolumns found in Trash', 'physio' ),
    'parent_item_colon' => __( 'Parent boxcolumns:', 'physio' ),
    'menu_name' => __( 'Box columns', 'physio' ),
    );
    $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'editor', 'title', 'excerpt' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => false,
    'publicly_queryable' => false,
    'exclude_from_search' => true,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => array('slug' => 'box','with_front' => false),
	  'menu_position' => 10,
    'capability_type' => 'post'
    );
    register_post_type( 'rtboxcolumns', $args );
}
/* Box columns custom post type end */


/* Services custom post type */
add_action( 'init', 'rt_physiotheme_register_cpt_services' );

function rt_physiotheme_register_cpt_services() {
    $labels = array(
    'name' => __( 'services', 'physio' ),
    'singular_name' => __( 'services', 'physio' ),
    'add_new' => __( 'Add New', 'physio' ),
    'add_new_item' => __( 'Add New services', 'physio' ),
    'edit_item' => __( 'Edit services', 'physio' ),
    'new_item' => __( 'New services', 'physio' ),
    'view_item' => __( 'View services', 'physio' ),
    'search_items' => __( 'Search services', 'physio' ),
    'not_found' => __( 'No services found', 'physio' ),
    'not_found_in_trash' => __( 'No services found in Trash', 'physio' ),
    'parent_item_colon' => __( 'Parent services:', 'physio' ),
    'menu_name' => __( 'Services', 'physio' ),
    );
    $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'editor', 'title', 'excerpt', 'thumbnail' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => false,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => array('slug' => 'services','with_front' => false),
	  'menu_position' => 11,
    'capability_type' => 'post'
    );
    register_post_type( 'rtservices', $args );
}
/* Services custom post type end */


/* Gallery filter custom post type */
add_action('init', 'rt_physiotheme_galleryfilter_cpt');

function rt_physiotheme_galleryfilter_cpt()  {
{
  $labels = array(
    'name' => __('Gallery filter', 'physio'),
    'singular_name' => __('gallery filter', 'physio'),
    'add_new' => __('Add New gallery filter', 'physio'),
    'add_new_item' => __('Add New gallery filter image', 'physio'),
    'edit_item' => __('Edit gallery filter', 'physio'),
    'new_item' => __('New gallery filter', 'physio'),
    'view_item' => __('View gallery filter', 'physio'),
    'search_items' => __('Search gallery filter', 'physio'),
    'not_found' =>  __('No fallery filter found', 'physio'),
    'not_found_in_trash' => __('No gallery filter found in Trash', 'physio'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'gallery','with_front' => false),
    'capability_type' => 'post',
    'show_in_nav_menus' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'menu_position' => 7,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
  );
  register_post_type('rtgalleryfilter',$args);
}

register_taxonomy( 'rtgalleryfilter-categories',
	array( 	'rtgalleryfilter' ),
	array( 	'hierarchical' => true,
		'labels' => array('name'=>"Category",'add_new_item'=>"Add New Category"),
		'singular_label' => __( "Cagetory" ),
		'rewrite' => array( 'slug' => 'category',
		'with_front' => false)
	)
);

}
/* gallery filter custom post type end */

register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'rtphysio_functions_flush_rewrites' );
function rtphysio_functions_flush_rewrites() {
  register_post_type('rttestimonials',$args);
  register_post_type('rtslider',$args);
  register_post_type('rtslider2',$args);
  register_post_type('rtcarousel',$args);
  register_post_type('rtcarousel2',$args);
  register_post_type( 'rtteam', $args );
  register_post_type( 'rtboxcolumns', $args );
  register_post_type( 'rtservices', $args );
  register_post_type('rtgalleryfilter',$args);
  register_taxonomy( 'rtgalleryfilter-categories',
	array( 	'rtgalleryfilter' ),
	array( 	'hierarchical' => true,
		'labels' => array('name'=>"Category",'add_new_item'=>"Add New Category"),
		'singular_label' => __( "Cagetory" ),
		'rewrite' => array( 'slug' => 'category',
		'with_front' => false)
	)
);

flush_rewrite_rules();
}


/**********************************************************
 * SHORTCODES
 *
 ***********************************************************/

/******************
 * Testimonials query [rt_testimonials  limit="" order=""]
 *
 ******************/
function rt_physiotheme_testimonials( $atts, $content = null ) {

	$atts = extract(shortcode_atts(array(
	'limit' => -1,
	'order' => 'DESC'
   ),$atts));

	ob_start();
	include('php/testimonials.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rt_testimonials','rt_physiotheme_testimonials');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC1' );
function rt_physio_integrateWithVC1() {
   vc_map( array(
      "name" => __( "Rt testimonials", "physio" ),
      "base" => "rt_testimonials",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "Limit", "physio" ),
            "param_name" => "limit",
            "value" => __( "-1", "physio" ),
            "description" => __( "Limit how many posts to show. -1 will show all posts. All positive numbers allowed.", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Order", "physio"),
            "param_name" => "order",
            "value" => array("From newest to oldest (DESC)" => "DESC", "From oldest to newest (ASC)" => "ASC"),
            "description" => __( "Show post by order from newest (DESC) or oldest (ASC)", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/



 /******************
 * Slider query for slider with image and text [rt_slider  limit="" order=""]
 *
 ******************/
function rt_physiotheme_slider( $atts, $content = null ) {

	$atts = extract(shortcode_atts(array(
	'limit' => -1,
	'order' => 'ASC'
   ),$atts));

	ob_start();
	include('php/slider.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rt_slider','rt_physiotheme_slider');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC2' );
function rt_physio_integrateWithVC2() {
   vc_map( array(
      "name" => __( "Rt slider for slider with image", "physio" ),
      "base" => "rt_slider",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "Limit", "physio" ),
            "param_name" => "limit",
            "value" => __( "-1", "physio" ),
            "description" => __( "Limit how many posts to show. -1 will show all posts. All positive numbers allowed.", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Order", "physio"),
            "param_name" => "order",
            "value" => array("From oldest to newest (ASC)" => "ASC", "From newest to oldest (DESC)" => "DESC"),
            "description" => __( "Show post by order from newest (DESC) or oldest (ASC)", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/



/******************
 * Slider2 query for slider with text only [rt_slider2  limit="" order=""]
 *
 ******************/
function rt_physiotheme_slider2( $atts, $content = null ) {

	$atts = extract(shortcode_atts(array(
	'limit' => -1,
	'order' => 'ASC'
   ),$atts));

	ob_start();
	include('php/slider2.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rt_slider2','rt_physiotheme_slider2');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC3' );
function rt_physio_integrateWithVC3() {
   vc_map( array(
      "name" => __( "Rt slider2 for slider with text only", "physio" ),
      "base" => "rt_slider2",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "Limit", "physio" ),
            "param_name" => "limit",
            "value" => __( "-1", "physio" ),
            "description" => __( "Limit how many posts to show. -1 will show all posts. All positive numbers allowed.", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Order", "physio"),
            "param_name" => "order",
            "value" => array("From oldest to newest (ASC)" => "ASC", "From newest to oldest (DESC)" => "DESC"),
            "description" => __( "Show post by order from newest (DESC) or oldest (ASC)", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/


  /******************
 * Carousel query [rt_carousel  limit="" order="" columns=""]
 *
 ******************/
function rt_physiotheme_carousel( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'limit' => -1,
	'order' => 'ASC',
	'columns' => '4',
   ),$atts));

	ob_start();
	include('php/carousel.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rt_carousel','rt_physiotheme_carousel');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC4' );
function rt_physio_integrateWithVC4() {
   vc_map( array(
      "name" => __( "Rt carousel", "physio" ),
      "base" => "rt_carousel",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "Limit", "physio" ),
            "param_name" => "limit",
            "value" => __( "-1", "physio" ),
            "description" => __( "Limit how many posts to show. -1 will show all posts. All positive numbers allowed.", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Order", "physio"),
            "param_name" => "order",
            "value" => array("From oldest to newest (ASC)" => "ASC", "From newest to oldest (DESC)" => "DESC"),
            "description" => __( "Show post by order from newest (DESC) or oldest (ASC)", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Number of columns", "physio"),
            "param_name" => "columns",
            "value" => array("4" => "4", "1" => "1", "2" => "2", "3" => "3", "5" => "5", "6" => "6", ),
            "description" => __( "Number of columns. Values: 1,2,3,4,5,6 ", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/



/******************
 * Carousel2 query [rt_carousel2  limit="" order="" columns=""]
 *
 ******************/
function rt_physiotheme_carousel2( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'limit' => -1,
	'order' => 'ASC',
	'columns' => '4',
   ),$atts));

	ob_start();
	include('php/carousel2.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rt_carousel2','rt_physiotheme_carousel2');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC5' );
function rt_physio_integrateWithVC5() {
   vc_map( array(
      "name" => __( "Rt carousel2", "physio" ),
      "base" => "rt_carousel2",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "Limit", "physio" ),
            "param_name" => "limit",
            "value" => __( "-1", "physio" ),
            "description" => __( "Limit how many posts to show. -1 will show all posts. All positive numbers allowed.", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Order", "physio"),
            "param_name" => "order",
            "value" => array("From oldest to newest (ASC)" => "ASC", "From newest to oldest (DESC)" => "DESC"),
            "description" => __( "Show post by order from newest (DESC) or oldest (ASC)", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Number of columns", "physio"),
            "param_name" => "columns",
            "value" => array("4" => "4", "1" => "1", "2" => "2", "3" => "3", "5" => "5", "6" => "6", ),
            "description" => __( "Number of columns. Values: 1,2,3,4,5,6 ", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/


/******************
 * Team query  [rt_team limit="" order="" columns=""]
 *
 ******************/

function rt_physiotheme_team( $atts, $content = null ) {

	$atts = extract(shortcode_atts(array(
	'limit' => 4,
	'order' => 'ASC',
	'columns' => '4',
   ),$atts));

	ob_start();
	include('php/team.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rt_team','rt_physiotheme_team');

/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC6' );
function rt_physio_integrateWithVC6() {
   vc_map( array(
      "name" => __( "Rt team", "physio" ),
      "base" => "rt_team",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "Limit", "physio" ),
            "param_name" => "limit",
            "value" => __( "-1", "physio" ),
            "description" => __( "Limit how many posts to show. -1 will show all posts. All positive numbers allowed.", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Order", "physio"),
            "param_name" => "order",
            "value" => array("From oldest to newest (ASC)" => "ASC", "From newest to oldest (DESC)" => "DESC"),
            "description" => __( "Show post by order from newest (DESC) or oldest (ASC)", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Number of columns", "physio"),
            "param_name" => "columns",
            "value" => array("4" => "4", "1" => "1", "2" => "2", "3" => "3", "5" => "5", "6" => "6", ),
            "description" => __( "Number of columns. Values: 1,2,3,4,5,6 ", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/


/******************
 * Homeblog query [rt_homeblog limit="" order="" columns=""]
 *
 ******************/

function rt_physiotheme_homeblog( $atts, $content = null ){

	$atts = extract(shortcode_atts(array(
	'limit' => -1,
	'order' => 'DESC',
  'columns'  => 4

   ),$atts));

	ob_start();
	include('php/homeblog.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rt_homeblog','rt_physiotheme_homeblog');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC7' );
function rt_physio_integrateWithVC7() {
   vc_map( array(
      "name" => __( "Rt homeblog", "physio" ),
      "base" => "rt_homeblog",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "Limit", "physio" ),
            "param_name" => "limit",
            "value" => __( "-1", "physio" ),
            "description" => __( "Limit how many posts to show. -1 will show all posts. All positive numbers allowed.", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Order", "physio"),
            "param_name" => "order",
            "value" => array("From newest to oldest (DESC)" => "DESC", "From oldest to newest (ASC)" => "ASC"),
            "description" => __( "Show post by order from newest (DESC) or oldest (ASC)", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Number of columns", "physio"),
            "param_name" => "columns",
            "value" => array("4" => "4", "1" => "1", "2" => "2", "3" => "3", "5" => "5", "6" => "6", ),
            "description" => __( "Number of columns. Values: 1,2,3,4,5,6 ", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/


/******************
 * Homeblog list query [rt_homeblog_list limit="2" order="DESC"]
 *
 ******************/

function rt_physiotheme_homeblog2( $atts, $content = null ){

	$atts = extract(shortcode_atts(array(
	'limit' => 2,
	'order' => 'DESC'

   ),$atts));

	ob_start();
	include('php/homeblog2.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rt_homeblog_list','rt_physiotheme_homeblog2');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC8' );
function rt_physio_integrateWithVC8() {
   vc_map( array(
      "name" => __( "Rt homeblog list", "physio" ),
      "base" => "rt_homeblog_list",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "Limit", "physio" ),
            "param_name" => "limit",
            "value" => __( "2", "physio" ),
            "description" => __( "Limit how many posts to show. -1 will show all posts. All positive numbers allowed.", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Order", "physio"),
            "param_name" => "order",
            "value" => array("From newest to oldest (DESC)" => "DESC", "From oldest to newest (ASC)" => "ASC"),
            "description" => __( "Show post by order from newest (DESC) or oldest (ASC)", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/


 /******************
 * Box columns query [rt_boxcolumns  limit="" order="" columns="" boxed=""]
 ******************/
function rt_physiotheme_boxcolumns( $atts, $content = null ) {

	$atts = extract(shortcode_atts(array(
	'limit' => 3,
	'order' => 'ASC',
	'columns' => '3',
 	'boxed' => 'boxed'
   ),$atts));

	ob_start();
	include('php/boxcolumns.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rt_boxcolumns','rt_physiotheme_boxcolumns');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC9' );
function rt_physio_integrateWithVC9() {
   vc_map( array(
      "name" => __( "Rt boxcolumns", "physio" ),
      "base" => "rt_boxcolumns",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "Limit", "physio" ),
            "param_name" => "limit",
            "value" => __( "3", "physio" ),
            "description" => __( "Limit how many posts to show. -1 will show all posts. All positive numbers allowed.", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Order", "physio"),
            "param_name" => "order",
            "value" => array("From oldest to newest (ASC)" => "ASC", "From newest to oldest (DESC)" => "DESC"),
            "description" => __( "Show post by order from newest (DESC) or oldest (ASC)", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Number of columns", "physio"),
            "param_name" => "columns",
            "value" => array("3" => "3", "2" => "2", "4" => "4", "5" => "5" ),
            "description" => __( "Number of columns. Values: 2,3,4,5 ", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("boxed or full width", "physio"),
            "param_name" => "boxed",
            "value" => array("boxed width" => "boxed", "full width" => " " ),
            "description" => __( "boxed or full width", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/


 /******************
 * Services query [rt_services  limit="" order="" columns=""]
 ******************/
function rt_physiotheme_services( $atts, $content = null ) {

	$atts = extract(shortcode_atts(array(
	'limit' => -1,
	'order' => 'ASC',
	'columns' => '3',
   ),$atts));

	ob_start();
	include('php/services.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rt_services','rt_physiotheme_services');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC10' );
function rt_physio_integrateWithVC10() {
   vc_map( array(
      "name" => __( "Rt services", "physio" ),
      "base" => "rt_services",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "Limit", "physio" ),
            "param_name" => "limit",
            "value" => __( "-1", "physio" ),
            "description" => __( "Limit how many posts to show. -1 will show all posts. All positive numbers allowed.", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Order", "physio"),
            "param_name" => "order",
            "value" => array("From oldest to newest (ASC)" => "ASC", "From newest to oldest (DESC)" => "DESC"),
            "description" => __( "Show post by order from newest (DESC) or oldest (ASC)", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Number of columns", "physio"),
            "param_name" => "columns",
            "value" => array("3" => "3", "1" => "1", "2" => "2", "4" => "4", "5" => "5", "6" => "6" ),
            "description" => __( "Number of columns. Values: 1,2,3,4,5,6 ", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/


/******************
 * Gallery filter query [rt_gallery_filter  limit="" order="" columns=""]
 *
 ******************/
function rt_physiotheme_galleryfilter( $atts, $content = null ) {

	$atts = extract(shortcode_atts(array(
	'limit' => -1,
	'order' => 'ASC',
 	'columns' => '3'
   ),$atts));

	ob_start();
	include('php/galleryfilter.php');
	$content = ob_get_clean();
    return $content;
}
add_shortcode('rt_gallery_filter','rt_physiotheme_galleryfilter');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC11' );
function rt_physio_integrateWithVC11() {
   vc_map( array(
      "name" => __( "Rt gallery filter (isotope)", "physio" ),
      "base" => "rt_gallery_filter",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "Limit", "physio" ),
            "param_name" => "limit",
            "value" => __( "-1", "physio" ),
            "description" => __( "Limit how many posts to show. -1 will show all posts. All positive numbers allowed.", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Order", "physio"),
            "param_name" => "order",
            "value" => array("From oldest to newest (ASC)" => "ASC", "From newest to oldest (DESC)" => "DESC"),
            "description" => __( "Show post by order from newest (DESC) or oldest (ASC)", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Number of columns", "physio"),
            "param_name" => "columns",
            "value" => array("3" => "3", "2" => "2", "4" => "4"),
            "description" => __( "Number of columns. Values: 2,3,4 ", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/



/***************
 one_counter [rt_one_counter headline="" number=""]
****************/

function rt_psytheme_one_counter( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'headline' => 'one counter',
	'number' => '50',
 	'timerwrappercolor' => 'timerwrappercolor1',
	),$atts));

	return "
<div class=\"timerwrapper $timerwrappercolor startAnimation animated\" data-animate=\"fadeInUp\">
<div class=\"onecounter\">
<p><span class=\"timer\" data-to=\"$number\" data-speed=\"100\" data-refresh-interval=\"1\">1</span></p>
</div>
<h6>$headline</h6>
</div>";
}
add_shortcode('rt_one_counter','rt_psytheme_one_counter');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC12' );
function rt_physio_integrateWithVC12() {
   vc_map( array(
      "name" => __( "Rt one counter", "physio" ),
      "base" => "rt_one_counter",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "Counter headline", "physio" ),
            "param_name" => "headline",
            "value" => __( "this is headline", "physio" ),
            "description" => __( "Add counter headline", "physio" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "Counter number", "physio" ),
            "param_name" => "number",
            "value" => __( "89", "physio" ),
            "description" => __( "Add counter number value", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Color", "physio"),
            "param_name" => "timerwrappercolor",
            "value" => array("white color" => "timerwrappercolor1", "dark color" => "timerwrappercolor2"),
            "description" => __( "Color", "physio" )
         ),

      ),
   ));
}
 /*** Visual Composer version end ***/


/************
* banner call to action [rt_banner text="" buttontext="" buttonurl="" target=""]

*************/
function rt_physiotheme_rtbanner( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'text' => 'call to action text',
	'buttontext' => 'see more',
  'buttonurl' => '',
  'target' => '_blank'
	),$atts));

	return "
<div class=\"onecolumnwrapper2 column1 hvr-curl-top-right\">
<div class=\"onecolumn wrapper100percent\">
<h2>".$text."</h2>
<div class=\"button1 button-medium text-center\">
<a class=\"hvr-shutter-out-horizontal\" href=\"$buttonurl\" target=\"$target\">".$buttontext."</a>
</div>
</div>
</div>";
}
add_shortcode('rt_banner','rt_physiotheme_rtbanner');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC13' );
function rt_physio_integrateWithVC13() {
   vc_map( array(
      "name" => __( "Rt banner", "physio" ),
      "base" => "rt_banner",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "call to action text", "physio" ),
            "param_name" => "text",
            "value" => __( "call to action text", "physio" ),
            "description" => __( "call to action text", "physio" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "button text", "physio" ),
            "param_name" => "buttontext",
            "value" => __( "see more", "physio" ),
            "description" => __( "button text", "physio" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "button URL", "physio" ),
            "param_name" => "buttonurl",
            "value" => __( "http://...", "physio" ),
            "description" => __( "add URL for button", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Target", "physio"),
            "param_name" => "target",
            "value" => array("open in new tab" => "_blank", "open in same tab" => "_self"),
            "description" => __( "open in new or same tab", "physio" )
         ),

      ),
   ));
}
 /*** Visual Composer version end ***/

/************
* slider caption text [rt_slider_caption_text align="" headlinesmall="" headline="" subheadline="" textcolor=""]
*************/
function rt_physiotheme_slider_caption_text( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'align' => 'text-left',
	'subheadline' => 'this is subheadline',
  'headlinesmall' => 'small headline',
  'headline' => 'headline',
  'textcolor' => ''
	),$atts));

	return "
<div class=\"$textcolor slidershortcode $align startAnimation animated\" data-animate=\"fadeInUp\">
<h3>".$headlinesmall."</h3>
<h2>".$headline."</h2>
<h4>".$subheadline."</h4>
</div>";
}
add_shortcode('rt_slider_caption_text','rt_physiotheme_slider_caption_text');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC14' );
function rt_physio_integrateWithVC14() {
   vc_map( array(
      "name" => __( "Rt slider caption text", "physio" ),
      "base" => "rt_slider_caption_text",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "small headline", "physio" ),
            "param_name" => "headlinesmall",
            "value" => __( "welcome", "physio" ),
            "description" => __( "small headline", "physio" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "headline", "physio" ),
            "param_name" => "headline",
            "value" => __( "physiotherapy", "physio" ),
            "description" => __( "headline", "physio" )
         ),
        array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "text", "physio" ),
            "param_name" => "subheadline",
            "value" => __( "text", "physio" ),
            "description" => __( "text", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("text align", "physio"),
            "param_name" => "align",
            "value" => array("left" => "text-left", "center" => "text-center", "right" => "text-right"),
            "description" => __( "text left, center or right", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("text color", "physio"),
            "param_name" => "textcolor",
            "value" => array("default text color" => " ", "white text color" => "textcolor"),
            "description" => __( "for white text color", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/


/************
* slider caption with button [rt_slider_caption_button align="" headlinesmall="" headline="" subheadline="" size="" buttonurl="" buttontext="" textcolor=""]

*************/
function rt_physiotheme_slider_caption_button( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'align' => 'text-left',
	'size' => 'button-medium',
	'buttontext' => '',
	'buttonurl' => '',
	'subheadline' => '',
  'headline' => '',
  'headlinesmall' => '',
  'target' => '_blank',
  'textcolor' => ''
	),$atts));

	return "
<div class=\"$textcolor slidershortcode $align startAnimation animated\" data-animate=\"fadeInUp\">
<h3>".$headlinesmall."</h3>
<h2>".$headline."</h2>
<h4>".$subheadline."</h4>
<div class=\"button1 $size\">
<a target=\"$target\" class=\"hvr-shutter-out-horizontal\" href=\"$buttonurl\">".$buttontext."</a>
</div>
</div>";
}
add_shortcode('rt_slider_caption_button','rt_physiotheme_slider_caption_button');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC15' );
function rt_physio_integrateWithVC15() {
   vc_map( array(
      "name" => __( "Rt slider caption button", "physio" ),
      "base" => "rt_slider_caption_button",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "small headline", "physio" ),
            "param_name" => "headlinesmall",
            "value" => __( "welcome", "physio" ),
            "description" => __( "small headline", "physio" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "headline", "physio" ),
            "param_name" => "headline",
            "value" => __( "physiotherapy", "physio" ),
            "description" => __( "headline", "physio" )
         ),
        array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "text", "physio" ),
            "param_name" => "subheadline",
            "value" => __( "text", "physio" ),
            "description" => __( "text", "physio" )
         ),
        array(
            "type" => "dropdown",
            "heading" => __("text color", "physio"),
            "param_name" => "textcolor",
            "value" => array("default text color" => "", "white text color" => "textcolor"),
            "description" => __( "for white text color", "physio" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "button text", "physio" ),
            "param_name" => "buttontext",
            "value" => __( "see more", "physio" ),
            "description" => __( "button text", "physio" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "button URL", "physio" ),
            "param_name" => "buttonurl",
            "value" => __( "http://...", "physio" ),
            "description" => __( "add URL for button", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("target", "physio"),
            "param_name" => "target",
            "value" => array("open in new tab" => "_blank", "open in same tab" => "_self"),
            "description" => __( "open in new or same tab", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Text align", "physio"),
            "param_name" => "align",
            "value" => array("left" => "text-left", "center" => "text-center", "right" => "text-right"),
            "description" => __( "text left, center or right", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Button size", "physio"),
            "param_name" => "size",
            "value" => array("large" => "button-large", "medium" => "button-medium", "small" => "button-small"),
            "description" => __( "large, medium, small", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/


/************
* main headline [rt_main_headline headline="" subheadline="" align=""]

*************/
function rt_physiotheme_main_headline( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'subheadline' => 'subheadline',
  'headline' => 'headline',
  'align' => 'text-center'
	),$atts));

	return "
<div class=\"row\">
<div class=\"mainheadlinewrapper\">
<div class=\"mainheadline $align\">
<h2>".$headline."</h2>
<!--div class=\"headlineline\"><i class=\"fa fa-plus-square\"></i></div-->
<h4>".$subheadline."</h4>
</div>
</div>
</div>";
}
add_shortcode('rt_main_headline','rt_physiotheme_main_headline');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC16' );
function rt_physio_integrateWithVC16() {
   vc_map( array(
      "name" => __( "Rt main headline", "physio" ),
      "base" => "rt_main_headline",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "headline", "physio" ),
            "param_name" => "headline",
            "value" => __( "physiotherapy", "physio" ),
            "description" => __( "headline", "physio" )
         ),
        array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "text", "physio" ),
            "param_name" => "subheadline",
            "value" => __( "text", "physio" ),
            "description" => __( "text", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Text align", "physio"),
            "param_name" => "align",
            "value" => array("center" => "text-center", "left" => "text-left", "right" => "text-right"),
            "description" => __( "text left, center or right", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/



/************
* main headline small [rt_main_headline_small headline="" align=""]

*************/
function rt_physiotheme_main_headlinesmall( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'headline' => 'headline',
  'align' => 'text-left'
	),$atts));

	return "
<div class=\"row\">
<div class=\"mainheadlinewrappersmall\">
<div class=\"mainheadlinesmall $align\">
<h3>".$headline."</h3>
<div class=\"headlineline\"></div>
</div>
</div>
</div>";
}
add_shortcode('rt_main_headline_small','rt_physiotheme_main_headlinesmall');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC17' );
function rt_physio_integrateWithVC17() {
   vc_map( array(
      "name" => __( "Rt main headline small", "physio" ),
      "base" => "rt_main_headline_small",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "headline", "physio" ),
            "param_name" => "headline",
            "value" => __( "physiotherapy", "physio" ),
            "description" => __( "headline", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Text align", "physio"),
            "param_name" => "align",
            "value" => array("left" => "text-left", "center" => "text-center", "right" => "text-right"),
            "description" => __( "text left, center or right", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/



/*****************
* button1 [rt_button1 url="" text="" align="" target=""]
******************/

function rt_physiotheme_button1( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'url' => '#',
	'align' => 'text-left',
	'size' => 'button-small',
  'text' => 'text',
	'target' => '_blank',

	),$atts));

	return "
<div class=\"button1 $size $align\">
<a class=\"hvr-shutter-out-horizontal\" href=\"".$url."\" target=\"".$target."\">".$text."</a>
</div>";
}
add_shortcode('rt_button1','rt_physiotheme_button1');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC18' );
function rt_physio_integrateWithVC18() {
   vc_map( array(
      "name" => __( "Rt button1", "physio" ),
      "base" => "rt_button1",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "text", "physio" ),
            "param_name" => "text",
            "value" => __( "see more", "physio" ),
            "description" => __( "button text", "physio" )
         ),
        array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "URL", "physio" ),
            "param_name" => "url",
            "value" => __( "http://...", "physio" ),
            "description" => __( "button URL", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Target", "physio"),
            "param_name" => "target",
            "value" => array("open in new tab" => "_blank", "open in same tab" => "_self"),
            "description" => __( "open in new or same tab", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Text align", "physio"),
            "param_name" => "align",
            "value" => array("left" => "text-left", "center" => "text-center", "right" => "text-right"),
            "description" => __( "text left, center or right", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Button size", "physio"),
            "param_name" => "size",
            "value" => array("small" => "button-small", "medium" => "button-medium", "large" => "button-large"),
            "description" => __( "large, medium, small", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/

/*****************
* button2 [rt_button2 url="" text="" align="" target="" size=""]
******************/

function rt_physiotheme_button2( $atts, $text = null ) {
	$atts = extract(shortcode_atts(array(
	'url' => '#',
	'align' => 'text-left',
	'size' => 'button-small',
  'text' => 'see more',
	'target' => '_blank',

	),$atts));

	return "
<div class=\"button2 wrapper100percent $size $align\">
<a class=\"hvr-shutter-out-horizontal\" href=\"".$url."\" target=\"".$target."\">".$text."</a>
</div>";
}
add_shortcode('rt_button2','rt_physiotheme_button2');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC19' );
function rt_physio_integrateWithVC19() {
   vc_map( array(
      "name" => __( "Rt button2", "physio" ),
      "base" => "rt_button2",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "text", "physio" ),
            "param_name" => "text",
            "value" => __( "see more", "physio" ),
            "description" => __( "button text", "physio" )
         ),
        array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "URL", "physio" ),
            "param_name" => "url",
            "value" => __( "http://...", "physio" ),
            "description" => __( "button URL", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Target", "physio"),
            "param_name" => "target",
            "value" => array("open in new tab" => "_blank", "open in same tab" => "_self"),
            "description" => __( "open in new or same tab", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Text align", "physio"),
            "param_name" => "align",
            "value" => array("left" => "text-left", "center" => "text-center", "right" => "text-right"),
            "description" => __( "text left, center or right", "physio" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __("Button size", "physio"),
            "param_name" => "size",
            "value" => array("small" => "button-small", "medium" => "button-medium", "large" => "button-large"),
            "description" => __( "large, medium, small", "physio" )
         ),
      ),
   ));
}
 /*** Visual Composer version end ***/


/************
* working time [rt_working_time textleft="" textright=""]
*************/
function rt_physiotheme_workingtime( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
  'textleft' => 'Monday - Friday',
  'textright' => '08am - 17pm'
	),$atts));

	return "<div class=\"workingtime\">
<h6 class=\"text-left\">".$textleft."</h6>
<h6 class=\"text-right\">".$textright."</h6>
</div>
";
}
add_shortcode('rt_working_time','rt_physiotheme_workingtime');


/*** Visual Composer version ***/

add_action( 'vc_before_init', 'rt_physio_integrateWithVC21' );
function rt_physio_integrateWithVC21() {
   vc_map( array(
      "name" => __( "Rt working time", "physio" ),
      "base" => "rt_working_time",
      "icon" => get_template_directory_uri() . "/assets/images/custom_shortcodes.png",
      "category" => __( "Content", "physio"),
      "params" => array(
        array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "text left", "physio" ),
            "param_name" => "textleft",
            "value" => __( "Monday - Friday", "physio" ),
            "description" => __( "for main row columns above top slider, working time", "physio" )
         ),
        array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => __( "text right", "physio" ),
            "param_name" => "textright",
            "value" => __( "08am - 17pm", "physio" ),
            "description" => __( "for main row columns above top slider, working time", "physio" )
         )
      ),
   ));
}
/*** Visual Composer version end ***/


/******************
 * Social icons shortcode (works as code snippet with ul tags, see documentation)  [rt_social_icon url="" icon="" target=""]
 *
 ******************/

function rt_psytheme_socialicon( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'url' => '',
  'icon' => '',
	'target' => '_blank',
	),$atts));
	return "<li>
<a href=\"$url\" target=\"$target\"><i class=\"$icon\"></i></a>
</li>";
}
add_shortcode('rt_social_icon','rt_psytheme_socialicon');

/******************
 * Address and phone don't work as shortcode, only as code snippet in widgets in ul tag (see documentation) [rt_address_phone text="" icon=""]
 *
 ******************/

function rt_psytheme_address( $atts, $content = null ) {
	$atts = extract(shortcode_atts(array(
	'text' => '',
  'icon' => 'phone'
	),$atts));

	return "<li>
<i class=\"fa fa-".$icon."\"></i><h6>$text</h6>
</li>";
}
add_shortcode('rt_address_phone','rt_psytheme_address');



/******* DEPRECIATED **********/
/******** Shortcodes for Bootstrap columns *******/
/************************************************************************
*  text container //[container]content[/container]
*************************************************************************/

function rt_physiotheme_container( $atts, $content = null ) {

	return "<div class=\"container\"><div class=\"row\">".do_shortcode($content)."</div></div>";

}
add_shortcode('container','rt_physiotheme_container');


/************************************************************************
*  one //
[container][one]content[/one][/container]
*************************************************************************/

function rt_physiotheme_one( $atts, $content = null ) {

	return "<div class=\"col-lg-12\">".do_shortcode($content)."</div>";

}
add_shortcode('one','rt_physiotheme_one');



/************************************************************************
*  one third //
[container][one_third]content[/one_third][one_third]content[/one_third][one_third]content[/one_third][/container]
*************************************************************************/

function rt_physiotheme_one_third( $atts, $content = null ) {

	return "<div class=\"col-lg-4\">".do_shortcode($content)."</div>";

}
add_shortcode('one_third','rt_physiotheme_one_third');



/************************************************************************
*  one forth //
[container][one_forth]content[/one_forth][one_forth]content[/one_forth][one_forth]content[/one_forth][/container]
*************************************************************************/

function rt_physiotheme_one_forth( $atts, $content = null ) {

	return "<div class=\"col-lg-3\">".do_shortcode($content)."</div>";

}
add_shortcode('one_forth','rt_physiotheme_one_forth');


/************************************************************************
*  one half //
[container][one_half]content[/one_half][one_half]content[/one_half][one_half]content[/one_half][/container]
*************************************************************************/

function rt_physiotheme_one_half( $atts, $content = null ) {

	return "<div class=\"col-lg-6\">".do_shortcode($content)."</div>";

}
add_shortcode('one_half','rt_physiotheme_one_half');
