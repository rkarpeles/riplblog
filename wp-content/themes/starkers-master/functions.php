<?php

/**
 * Starkers functions and definitions
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */

/* =======================================================	
   Required external files	
   ======================================================= */

require_once( 'external/starkers-utilities.php' );

/* =======================================================	
   Theme specific settings
   ======================================================= */

add_theme_support('post-thumbnails');

/* =======================================================	
   Actions and Filters	
   ======================================================= */

add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

/* =========================================================================	
   Custom Post Types - include custom post types and taxonimies here e.g.
   e.g. require_once( 'custom-post-types/your-custom-post-type.php' );	
   ======================================================= */
   

/* =======================================================	
   Scripts	
   ======================================================= */

/**
 * Add scripts via wp_head()
 *
 * @return void
 * @author Keir Whitaker
 */

function starkers_script_enqueuer() {
	wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
	wp_enqueue_script( 'site' );

	wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
	wp_enqueue_style( 'screen' );
}	

/* =======================================================
   Comments	
   ======================================================= */

/**
 * Custom callback for outputting comments 
 *
 * @return void
 * @author Keir Whitaker
 */
 
function starkers_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; 
	?>
	<?php if ( $comment->comment_approved == '1' ): ?>	
	<li>
		<article id="comment-<?php comment_ID() ?>">
			<?php echo get_avatar( $comment ); ?>
			<h4><?php comment_author_link() ?></h4>
			<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
			<?php comment_text() ?>
		</article>
	<?php endif;
}	

/* =======================================================
   Sidebars
   ======================================================= */

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the 'left' sidebar. */
	register_sidebar(
		array(
			'id' => 'sidebar-left',
			'name' => __( 'Left Sidebar' ),
			'description' => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	);

	/* Register the 'right' sidebar. */
	register_sidebar(
		array(
			'id' => 'sidebar-right',
			'name' => __( 'Right Sidebar' ),
			'description' => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	);
}

/* =======================================================
   Menus
   ======================================================= */
   
add_theme_support('menus' );

function register_my_menus() {
  register_nav_menus(
    array(
      'left_sidebar_menu' => __( 'Left Sidebar Menu' ),
      'footer_menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/* =======================================================
   Thumbnails
   ======================================================= */

if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'excerpt-thumb', 80, 70, true );
    add_image_size( 'content-thumb', 100, 80, true );
    // define excerpt-thumb size here
    // in the example: 100px wide, height adjusts automatically, no cropping
}

// Goes into functions.php file
// Adds $img content after first paragraph in a post (!.e. after first `</p>` tag)
/*add_filter('the_content', function($content)
{
   $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
   $img = '<img src="'.$url.'" alt="" title=""/>';
   $div_open = '<div class="content-thumb">';
   $div_close = '</div>';
   $content = $div_open . preg_replace('#(<p>)#','$1'.$img, $content, 1) . $div_close;
   return $content;
}); */

/* =======================================================
   Excerpt
   ======================================================= */

function excerpt_read_more_link($output) {
	global $post;
	return $output . '<a href="'. get_permalink($post->ID) . '"> Continue Reading...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');   
   

/* =======================================================
   Add additional buttons to the WYSIWYG Editor
   ======================================================= */

function enable_more_buttons($buttons) {
  $buttons[] = 'hr';
  $buttons[] = 'par';
  $buttons[] = 'del';
  $buttons[] = 'sub';
  $buttons[] = 'sup';
  $buttons[] = 'anchor';
  $buttons[] = 'small';
  $buttons[] = 'fontsizeselect';
  
  return $buttons;
}
add_filter("mce_buttons_3", "enable_more_buttons"); 


// Add custom text sizes in the font size drop down list of the rich text editor (TinyMCE) in WordPress
// $initArray is a variable of type array that contains all default TinyMCE parameters.
// Value 'theme_advanced_font_sizes' needs to be added, if an overwrite to the default font sizes in the list, is needed.

function customize_text_sizes($initArray){
   $initArray['theme_advanced_font_sizes'] = "11px,12px,13px,14px,15px,16px,18px";
   return $initArray;
}

// Assigns customize_text_sizes() to "tiny_mce_before_init" filter
add_filter('tiny_mce_before_init', 'customize_text_sizes');


/* =======================================================
   Add custom guest author fields 
   ======================================================= */
   
add_filter( 'the_author', 'guest_author_name' );
add_filter( 'get_the_author_display_name', 'guest_author_name' );

function guest_author_name( $name ) {
	global $post;

	$author = get_post_meta( $post->ID, 'guest-author', true );

	if ( $author )
	$name = $author;

	return $name;
} 


?>

