<?php
/**
 * kangarooeducation functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kangarooeducation
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

 //include all the files under the inc folder
 require __DIR__ .'/inc/init.php';
 
function kangarooeducation_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on kangarooeducation, use a find and replace
		* to change 'kangarooeducation' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'kangarooeducation', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'kangarooeducation' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'kangarooeducation_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	
	  //customizing the logo
        // $argslogo=array(
        //     'height'=>63,
        //     'width'=>189,
        //     'flex-height'=>true,
        //     'flex-width'=>true,
        // );
        // add_theme_support('custom-logo',$argslogo);

}
add_action( 'after_setup_theme', 'kangarooeducation_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kangarooeducation_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kangarooeducation_content_width', 640 );
}
add_action( 'after_setup_theme', 'kangarooeducation_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kangarooeducation_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Kangaroo', 'kangarooeducation' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kangarooeducation' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kangarooeducation_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kangarooeducation_scripts() {
	wp_enqueue_style( 'kangarooeducation-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'kangarooeducation-style', 'rtl', 'replace' );

	wp_enqueue_script( 'kangarooeducation-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// wp_register_script('js-main',get_template_directory_uri().'/assets/dist/main.js',['jQuery'],false,true);
   

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kangarooeducation_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
// add_filter( 'wp_mail_smtp_core_wp_mail_function_incorrect_location_notice', '__return_false' );

// .....................................filter portion funtion  start 1--------------------------
add_action( 'wp_ajax_kangaro_filter_destination', 'kangaro_filter_destination' );
add_action( 'wp_ajax_nopriv_kangaro_filter_destination', 'kangaro_filter_destination' );
function kangaro_filter_destination() {
    $id = $_POST['ID'];
    // make buffer for json
    ob_start();


    // 
	if($id==-1){
 $taxonomy = array(
    'post_type'         => 'institution',
    'posts_per_page'    => -1,
    'post_status'       => 'publish',
    'orderby'           => 'name',
    'order'             => 'ASC',
    // 'paged'             => 2,
    
);
	}else{
		 $taxonomy = array(
    'post_type'         => 'institution',
    'posts_per_page'    => -1,
    'post_status'       => 'publish',
    'orderby'           => 'name',
    'order'             => 'ASC',
    // 'paged'             => 2,
    'tax_query' => array(
        array(
            'taxonomy'  => 'country',
            'field'     => 'id',
            'terms'     => $id,
        ),
    ),
);
	}
   
$parentTaxonomy = new WP_Query( $taxonomy);
if ( $parentTaxonomy->have_posts() ) :
    while ( $parentTaxonomy->have_posts() ) :
        $parentTaxonomy->the_post();?>
<div class="col-md-3 australia">
    <a href="<?php echo the_permalink();?>">
        <div class="brands_item d-flex flex-column
                                justify-content-center"><img src="<?php the_post_thumbnail_url();?>" alt="">
            <p class="text-center"><?php the_title();?></p>
        </div>
    </a>
</div>
<?php endwhile;
    wp_reset_postdata();
    endif;

    // send json to ajax
    wp_send_json_success(ob_get_clean());
    wp_die();
}

//.......................................... filter portion end 1............................


// -----------------------------------------search portion start 2----------------------------------
// function custom_search_result($query){
// 	if($query->is_main_query() && !is_admin() && $query ->is_search()){
// 		$query->set('post_type',array('post','institution'));
// 		$query->set('posts_per_page',-1);
// 	}

// }
// add_action('pre_get_posts','custom_search_result');


// -----------------------------------------search portion end 2----------------------------------