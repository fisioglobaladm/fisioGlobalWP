<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.4.2
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
function my_theme_register_required_plugins() {
    $plugins = array(
		// This is an example of how to include a plugin pre-packaged with a theme
		array(
			'name'     				=> 'Rt Physiotherapy Theme Functions', // The plugin name
			'slug'     				=> 'rt-physiotherapy-theme-functions', // The plugin slug (typically the folder name)
			'source'   				=> get_stylesheet_directory() . '/plugins/rt-physiotherapy-theme-functions.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),
		array(
			'name'     				=> 'WPBakery Visual Composer Page Builder', // The plugin name
			'slug'     				=> 'js_composer', // The plugin slug (typically the folder name)
			'source'   				=> get_stylesheet_directory() . '/plugins/js_composer.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),
    array(
			'name'     				=> 'Timetable', // The plugin name
			'slug'     				=> 'timetable', // The plugin slug (typically the folder name)
			'source'   				=> get_stylesheet_directory() . '/plugins/timetable.zip', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),
		// This is an example of how to include a plugin from the WordPress Plugin Repository
    array(
			'name' 		=> 'contact-form-7',
			'slug' 		=> 'contact-form-7',
			'required' 	=> true,
		),
    array(
			'name' 		=> 'post-types-order',
			'slug' 		=> 'post-types-order',
			'required' 	=> false,
		),
    array(
			'name' 		=> 'wp-video-lightbox',
			'slug' 		=> 'wp-video-lightbox',
			'required' 	=> false,
		),                 
            
	);
	// Change this to your theme text domain, used for internationalising strings
	$physio = 'tgmpa';
$config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
            'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
            'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}


/*************************
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 ***************************/
add_action( 'vc_before_init', 'physio_vcSetAsTheme' );
function physio_vcSetAsTheme() {
    vc_set_as_theme();
}


/**********************************************************
* language support
***********************************************************/
load_theme_textdomain( 'physio', TEMPLATEPATH.'/languages' ); 
$locale = get_locale();
$locale_file = TEMPLATEPATH."/languages/$locale.php";
if ( is_readable($locale_file) )
require_once($locale_file);


/**********************************************************
* include meta boxes 
***********************************************************/
include 'metabox/registered-meta-boxes.php';
require_once 'metabox/meta-box/meta-box.php';


/**********************************************************
* google fonts support
***********************************************************/
function rt_physio_fonts() {
$protocol = is_ssl() ? 'https' : 'http';
wp_enqueue_style( 'rt_roboto', "$protocol://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" );
wp_enqueue_style( 'rt_open_sans', "$protocol://fonts.googleapis.com/css?family=Open+Sans:400,700,800" );
}
add_action( 'wp_enqueue_scripts', 'rt_physio_fonts' );


/************************************************************************
* enable shortcodes in widgets
*************************************************************************/
add_filter('widget_text', 'do_shortcode');


/**********************************************************
* title function
***********************************************************/
function rt_physio_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() )
		return $title;
	$title .= get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'physio' ), max( $paged, $page ) );
	return $title;
}
add_filter( 'wp_title', 'rt_physio_wp_title', 10, 2 );


/**********************************************************
* menu
***********************************************************/
//for inner pages and multipage
register_nav_menu( 'header-menu', __( 'Header Menu - for multipage and inner pages', 'physio' ) );
//for single page one page
register_nav_menu( 'primary-menu', __( 'Primary Menu - for single page site', 'physio' ) );


/**********************************************************
* support for shortcodes in excerpt 
***********************************************************/
add_action( 'init', 'rt_physio_add_shortcode_excerpt' );
function rt_physio_add_shortcode_excerpt()
{
add_filter('the_excerpt', 'do_shortcode');
}


/**********************************************************
* post width
***********************************************************/
if ( ! isset( $content_width ) ) $content_width = 900;


/******************************************************
* rss
*******************************************************/
add_theme_support( 'automatic-feed-links' );


/******************************************************
* enable image support
*******************************************************/
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails', array( 'post', 'page', 'services', 'rttestimonials', 'rtgalleryfilter', 'rtslider', 'rtslider2', 'rtcarousel', 'rtcarousel2', 'rtteam' ) );      
}
//cropped image sizes for columns
if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'one_row_img', 1200, 700, array( 'center', 'center' ) );
add_image_size( 'two_rows_img', 600, 500, array( 'center', 'center' ) );
add_image_size( 'three_rows_img', 400, 350, array( 'center', 'center', true ) ); 
add_image_size( 'four_rows_img', 300, 250, array( 'center', 'center' ) ); 
add_image_size( 'five_rows_img', 240, 200, array( 'center', 'center' ) );
add_image_size( 'six_rows_img', 200, 200, array( 'center', 'center' ) ); 
}


/************************************************************************
* Front end scripts and styles 
*************************************************************************/
/***function for jqery scripts***/
function physio_scripts() {
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'styleless', get_stylesheet_directory_uri(). '/style.less' );
wp_enqueue_script( 'jquery');
if ( is_singular() ) wp_enqueue_script( "comment-reply" );
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/sticky.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'retina', get_template_directory_uri() . '/assets/js/retina.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'countto', get_template_directory_uri() . '/assets/js/countto.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'flickity', get_template_directory_uri() . '/assets/js/flickity.js', array('jquery'), '1.0.0', true );
wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery', 'jquery-ui-datepicker', 'masonry' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'physio_scripts' );


/************************************************************************
* customize theme
*************************************************************************/
function rt_physio_customize_register( $wp_customize ) {
  
//COPYRIGHT DETAILS

//url
$wp_customize->add_setting( 'copyright_detailsurl', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'transport'         => '',
	'sanitize_callback' => 'example_sanitize_text',
) );
$wp_customize->add_control( 'copyright_detailsurl', array(
    'type'        => 'url',
    'priority'    => 10,
    'section'     => 'physio_copyrighturl',
    'settings'    => 'copyright_detailsurl',
    'label'       => __( 'Copyright URL Field', 'physio' ),
    'description' => '',
) );

//anchor text
$wp_customize->add_setting( 'copyright_detailsinput' , array(
    'default'           => 'URL anchor text',
    'transport'         => 'refresh',
    'sanitize_callback' => 'example_sanitize_text',
) );
$wp_customize->add_control( 'copyright_detailsurlinput', array(
  'type'       => 'textarea',
	'label'      => __( 'Copyright URL anchor text', 'physio' ),
	'section'    => 'physio_copyrighturl',
	'settings'   => 'copyright_detailsinput',
 ));
 
//copyright text
 $wp_customize->add_setting( 'copyright_detailstext' , array(
    'default'           => 'Copyright text',
    'transport'         => 'refresh',
    'sanitize_callback' => 'example_sanitize_text',
) );
$wp_customize->add_control( 'copyright_detailstext', array(
  'type'     => 'textarea',
	'label'    => __( 'Copyright text', 'physio' ),
	'section'  => 'physio_copyrighturl',
	'settings' => 'copyright_detailstext',
 ));
$wp_customize->add_section( 'physio_copyrighturl' , array(
    'title'      => __( 'Copyright Details', 'physio' ),  
) );

//CUSTOMIZE LOGO
$wp_customize->add_setting( 'logo', array(
    'transport'         => 'refresh',
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_section( 'physio_logo_section' , array(
    'title'       => __( 'Logo', 'physio' ),
    'priority'    => 30,
    'description' => __('Upload a logo to replace the default site name and description in the header', 'physio' ),
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
    'label'    => __( 'Logo', 'physio' ),
    'section'  => 'physio_logo_section',
    'settings' => 'logo',
) ) );
}
add_action( 'customize_register', 'rt_physio_customize_register' );
function example_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}


/****************************************************************
* Sidebars and widget areas
*****************************************************************/
function physio_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Blog Sidebar', 'physio' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in posts and pages', 'physio' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title"><span>',
		'after_title'   => '</span></h4>',
	) );

	register_sidebar( array(
		'name'            => __( 'Footer 1 icons', 'physio' ),
		'id'              => 'sidebar-2',
		'description'     => __( 'Appears in footer. For icons.', 'physio' ),
		'before_widget'   => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'    => '</aside>',
		'before_title'    => '<h4 class="widget-title">',
		'after_title'     => '</h4>',
	) );
	register_sidebar( array(
		'name'            => __( 'Footer 2', 'physio' ),
		'id'              => 'sidebar-3',
		'description'     => __( 'Appears in footer', 'physio' ),
		'before_widget'   => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'    => '</aside>',
		'before_title'    => '<h4 class="widget-title">',
		'after_title'     => '</h4>',
	) );
	register_sidebar( array(
		'name'            => __( 'Footer 3', 'physio' ),
		'id'              => 'sidebar-4',
		'description'     => __( 'Appears in footer', 'physio' ),
		'before_widget'   => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'    => '</aside>',
		'before_title'    => '<h4 class="widget-title">',
		'after_title'     => '</h4>',
	) );
	register_sidebar( array(
		'name'            => __( 'Footer 4', 'physio' ),
		'id'              => 'sidebar-5',
		'description'     => __( 'Appears in footer', 'physio' ),
		'before_widget'   => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'    => '</aside>',
		'before_title'    => '<h4 class="widget-title">',
		'after_title'     => '</h4>',
	) );
  	register_sidebar( array(
		'name'            => __( 'Footer 5', 'physio' ),
		'id'              => 'sidebar-5a',
		'description'     => __( 'Appears in footer', 'physio' ),
		'before_widget'   => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'    => '</aside>',
		'before_title'    => '<h4 class="widget-title">',
		'after_title'     => '</h4>',
	) );
		register_sidebar( array(
		'name'            => __( 'Header 1 icons', 'physio' ),
		'id'              => 'sidebar-6',
		'description'     => __( 'Appears in header', 'physio' ),
		'before_widget'   => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'    => '</aside>',
		'before_title'    => '<h4 class="widget-title">',
		'after_title'     => '</h4>',
	) );
	register_sidebar( array(
		'name'            => __( 'Header 2', 'physio' ),
		'id'              => 'sidebar-7',
		'description'     => __( 'Appears in header', 'physio' ),
		'before_widget'   => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'    => '</aside>',
		'before_title'    => '<h4 class="widget-title">',
		'after_title'     => '</h4>',
	) );
  register_sidebar( array(
		'name'            => __( 'Header 3', 'physio' ),
		'id'              => 'sidebar-8',
		'description'     => __( 'Appears in header', 'physio' ),
		'before_widget'   => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'    => '</aside>',
		'before_title'    => '<h4 class="widget-title">',
		'after_title'     => '</h4>',
	) );
	register_sidebar( array(
		'name'            => __( 'Header 4 search', 'physio' ),
		'id'              => 'sidebar-9',
		'description'     => __( 'Appears in header', 'physio' ),
		'before_widget'   => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'    => '</aside>',
		'before_title'    => '<h4 class="widget-title">',
		'after_title'     => '</h4>',
	) );	
}
add_action( 'widgets_init', 'physio_widgets_init' );


/************************************************************************
* page/post navigation
*************************************************************************/
add_filter( 'wp_nav_menu_objects', 'nav_links' );
function nav_links( $abcs ) {
foreach  ($abcs as $abc ) {
if('custom' == $abc->type && !is_page()){
if( 1 == preg_match('/^#([^\/]+)$/', $abc->url )){
$abc->url = home_url( '/' ).$abc->url;
}
}	
}
return $abcs;   
}