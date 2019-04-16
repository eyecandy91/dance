<?php
/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if ( ! function_exists( '_s_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function _s_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on _s, use a find and replace
		 * to change '_s' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( '_s', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', '_s' ),
			'menu-2' => esc_html__( 'Secondary', '_s' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', '_s' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', '_s' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
	// wp_enqueue_style( '_s-style', get_stylesheet_uri() );

	
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1', true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js', array(), '1', true );
	wp_enqueue_script('jquery', 'http://code.jquery.com/jquery-2.2.4.min.js', array(), null, true);

	// wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( '_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }

/**
 * Load WooCommerce compatibility file.
 */
// if ( class_exists( 'WooCommerce' ) ) {
// 	require get_template_directory() . '/inc/woocommerce.php';
// }

/**
 * Remove all the BS trash
 */
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
      
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
      
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // Remove shortlink
/*
* Remove JSON API links in header html
*/
// function remove_json_api () {
//     // Remove the REST API lines from the HTML Header
//     remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
//     remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
//     // Remove the REST API endpoint.
//     remove_action( 'rest_api_init', 'wp_oembed_register_route' );
//     // Turn off oEmbed auto discovery.
//     add_filter( 'embed_oembed_discover', '__return_false' );
//     // Don't filter oEmbed results.
//     remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
//     // Remove oEmbed discovery links.
//     remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
//     // Remove oEmbed-specific JavaScript from the front-end and back-end.
//     remove_action( 'wp_head', 'wp_oembed_add_host_js' );
//    // Remove all embeds rewrite rules.
//    add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
// }
// add_action( 'after_setup_theme', 'remove_json_api' );
/*
	Snippet completely disable the REST API and shows {"code":"rest_disabled","message":"The REST API is disabled on this site."} 
	when visiting http://yoursite.com/wp-json/
*/
// function disable_json_api () {
//   // Filters for WP-API version 1.x
//   add_filter('json_enabled', '__return_false');
//   add_filter('json_jsonp_enabled', '__return_false');
//   // Filters for WP-API version 2.x
//   add_filter('rest_enabled', '__return_false');
//   add_filter('rest_jsonp_enabled', '__return_false');
// }
// add_action( 'after_setup_theme', 'disable_json_api' );

// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/acf/';
    
    // return
    return $path;
    
}
 

// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/acf/';
    
    // return
    return $dir;
    
}
 

// 3. Hide ACF field group menu item
add_filter('acf/settings/show_admin', '__return_true');


// 4. Include ACF
include_once( get_stylesheet_directory() . '/acf/acf.php' );
function myplugin_register_settings() {
	add_option( 'myplugin_option_name', 'This is my option value.');
	register_setting( 'myplugin_options_group', 'myplugin_option_name', 'myplugin_callback' );
 }
 add_action( 'admin_init', 'myplugin_register_settings' );

////
function custom_post_type() {

	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'FAQs', 'Post Type General Name', 'twentythirteen' ),
			'singular_name'       => _x( 'FAQ', 'Post Type Singular Name', 'twentythirteen' ),
			'menu_name'           => __( 'FAQs', 'twentythirteen' ),
			'parent_item_colon'   => __( 'Parent FAQ', 'twentythirteen' ),
			'all_items'           => __( 'All FAQs', 'twentythirteen' ),
			'view_item'           => __( 'View FAQ', 'twentythirteen' ),
			'add_new_item'        => __( 'Add New FAQ', 'twentythirteen' ),
			'add_new'             => __( 'Add New FAQ', 'twentythirteen' ),
			'edit_item'           => __( 'Edit FAQ', 'twentythirteen' ),
			'update_item'         => __( 'Update FAQ', 'twentythirteen' ),
			'search_items'        => __( 'Search FAQ', 'twentythirteen' ),
			'not_found'           => __( 'Not Found', 'twentythirteen' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
		);
	
	// Set other options for Custom Post Type
	
		$args = array(
			'label'               => __( 'Rooms', 'twentythirteen' ),
			'description'         => __( 'FAQs', 'twentythirteen' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'taxonomies'          => array( 'FAQs' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'taxonomies'            => array( 'category', 'post_tag' ),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 10,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
	
		// Registering your Custom Post Type
		register_post_type( 'FAQs', $args );
	
	}
	
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not
	* unnecessarily executed.
	*/
	
	add_action( 'init', 'custom_post_type', 0 );

/////
function custom_post_type_classes() {

	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Classes', 'Post Type General Name', 'twentythirteen' ),
			'singular_name'       => _x( 'Classes', 'Post Type Singular Name', 'twentythirteen' ),
			'menu_name'           => __( 'Classes', 'twentythirteen' ),
			'parent_item_colon'   => __( 'Parent Classes', 'twentythirteen' ),
			'all_items'           => __( 'All Classes', 'twentythirteen' ),
			'view_item'           => __( 'View Class', 'twentythirteen' ),
			'add_new_item'        => __( 'Add New Class', 'twentythirteen' ),
			'add_new'             => __( 'Add New Class', 'twentythirteen' ),
			'edit_item'           => __( 'Edit Class', 'twentythirteen' ),
			'update_item'         => __( 'Update Class', 'twentythirteen' ),
			'search_items'        => __( 'Search Class', 'twentythirteen' ),
			'not_found'           => __( 'Not Found', 'twentythirteen' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
		);
	
	// Set other options for Custom Post Type
	
		$args = array(
			'label'               => __( 'Class information', 'twentythirteen' ),
			'description'         => __( 'Classes', 'twentythirteen' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'taxonomies'          => array( 'Classes' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'taxonomies'            => array( 'category', 'post_tag' ),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'menu_icon'           => 'dashicons-groups',
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
	
		// Registering your Custom Post Type
		register_post_type( 'Classes', $args );
	
	}
	
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not
	* unnecessarily executed.
	*/
	
	add_action( 'init', 'custom_post_type_classes', 0 );
	
/////
function custom_post_type_testimonials() {

	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Testimonials', 'Post Type General Name', 'twentythirteen' ),
			'singular_name'       => _x( 'Testimonials', 'Post Type Singular Name', 'twentythirteen' ),
			'menu_name'           => __( 'Testimonials', 'twentythirteen' ),
			'parent_item_colon'   => __( 'Parent Testimonials', 'twentythirteen' ),
			'all_items'           => __( 'All Testimonials', 'twentythirteen' ),
			'view_item'           => __( 'View testimonial', 'twentythirteen' ),
			'add_new_item'        => __( 'Add New testimonial', 'twentythirteen' ),
			'add_new'             => __( 'Add New testimonial', 'twentythirteen' ),
			'edit_item'           => __( 'Edit testimonial', 'twentythirteen' ),
			'update_item'         => __( 'Update testimonial', 'twentythirteen' ),
			'search_items'        => __( 'Search testimonial', 'twentythirteen' ),
			'not_found'           => __( 'Not Found', 'twentythirteen' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
		);
	
	// Set other options for Custom Post Type
	
		$args = array(
			'label'               => __( 'Testimonials', 'twentythirteen' ),
			'description'         => __( 'Testimonials', 'twentythirteen' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'taxonomies'          => array( 'Testimonials' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'taxonomies'            => array( 'category', 'post_tag' ),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'menu_icon'           => 'dashicons-format-status',
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
	
		// Registering your Custom Post Type
		register_post_type( 'Testimonials', $args );
	
	}
	
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not
	* unnecessarily executed.
	*/
	
	add_action( 'init', 'custom_post_type_testimonials', 0 );

add_action( 'wp_footer', 'redirect_cf7' );

function redirect_cf7() {
	if(is_page('contact')) {
		?>
		<script type="text/javascript">
		document.addEventListener( 'wpcf7mailsent', function( event ) {
		       location = '<?php the_field('redirect', 96); ?>';
		}, false );
		</script>
		<?php
	}
}


function custom_contact_script_conditional_loading(){
   //  Edit page IDs here
   if(! is_page('contact') )
   {
      wp_dequeue_script('contact-form-7'); // Dequeue JS Script file.
      wp_dequeue_style('contact-form-7');  // Dequeue CSS file.
      wp_dequeue_style('cf7cf-style');  // Dequeue CSS file.
   }
}

add_action( 'wp_enqueue_scripts', 'custom_contact_script_conditional_loading' );


// Remove Query String from Static Resources
function remove_css_js_ver( $src ) {
if( strpos( $src, '?ver=' ) )
$src = remove_query_arg( 'ver', $src );
return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_css_js_ver', 10, 2 );