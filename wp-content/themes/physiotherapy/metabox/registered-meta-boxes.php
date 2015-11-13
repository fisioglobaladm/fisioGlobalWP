<?php
/**REGISTERED META BOXES
* 
*
* All the definitions of meta boxes are listed below with comments.
* Please read them CAREFULLY.
*
* You also should read the changelog to know what has been changed before updating.
*
* For more information, please visit:
* @link http://metabox.io/docs/registering-meta-boxes/
*/


add_filter( 'rwmb_meta_boxes', 'physio_register_meta_boxes' );
/**
* Register meta boxes
*
* Remember to change "physio" to actual prefix in your project
*
* @param array $meta_boxes List of meta boxes
*
* @return array
*/

function physio_register_meta_boxes( $meta_boxes )
{
/**
* prefix of meta keys (optional)
* Use underscore (_) at the beginning to make keys hidden
* Alt.: You also can make prefix empty to disable it
*/
// Better has an underscore as last sign
$prefix = 'physio_';



// 1st meta box

$meta_boxes[] = array(
// Meta box id, UNIQUE per meta box. Optional since 4.1.5
'id' => 'sidebars',
// Meta box title - Will appear at the drag and drop handle bar. Required.
'title' => __( 'Sidebar', 'physio' ),
// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
'post_types' => array( 'post', 'rtteam', 'rtcarousel', 'rtservices', 'rtcarousel2', 'rtgalleryfilter' ),
// Where the meta box appear: normal (default), advanced, side. Optional.
'context' => 'normal',
// Order of meta box: high (default), low. Optional.
'priority' => 'high',
// Auto save: true, false (default). Optional.
'autosave' => true,
// List of meta fields
'fields' => array(

  // radio button
  array(
  'name' => __( 'Sidebar in post', 'physio' ),
  'id' => "{$prefix}sideb",
  'type' => 'radio',
  // Array of 'value' => 'Label' pairs for select box
  'options' => array(
  'col-md-9' => __( 'add sidebar in post', 'physio' ),
  'col-md-12' => __( 'remove sidebar from post', 'physio' ),
  ),
  // Select multiple values, optional. Default is false.
  'multiple' => false,
  'std' => 'col-md-9'
  ),

)
);
//1st metabox end


// 2nd meta box

$meta_boxes[] = array(
'id' => "{$prefix}icon",
'title' => __( 'Icon', 'physio' ),
'post_types' => array( 'rtboxcolumns', 'rtservices' ),
'context' => 'normal',
'priority' => 'high',
'autosave' => true,
'fields' => array(

  // Text
  array(
  // Field name - Will be used as label
  'name' => __( 'Icon', 'physio' ),
  // Field ID, i.e. the meta key
  'id' => "{$prefix}icon",
  // Field description (optional)
  'desc' => __( 'use icon name from this list (e.g fa fa-list-alt): http://fortawesome.github.io/Font-Awesome/icons/', 'physio' ),
  'type' => 'text',
  // Default value (optional)
   'std' => __( 'fa fa-user-md', 'physio' ),
  // CLONES: Add to make the field cloneable (i.e. have multiple value)
  'clone' => false
  ),

)
);
//2nd metabox end



// 3rd meta box

$meta_boxes[] = array(
'id' => "{$prefix}teamjob",
'title' => __( 'Team member job/position', 'physio' ),
'post_types' => array( 'rtteam' ),
'context' => 'normal',
'priority' => 'high',
'autosave' => true,
'fields' => array(

  // Text
  array(
  // Field name - Will be used as label
  'name' => __( 'Team member job/position', 'physio' ),
  // Field ID, i.e. the meta key
  'id' => "{$prefix}teamjob",
  // Field description (optional)
  'desc' => __( 'Team member job/position', 'physio' ),
  'type' => 'text',
  // Default value (optional)
  'std' => __( 'e.g. therapist', 'physio' ),
  // CLONES: Add to make the field cloneable (i.e. have multiple value)
  'clone' => false,
),

)
);
//3rd metabox end

return $meta_boxes;
}