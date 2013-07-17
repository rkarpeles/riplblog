<?php

/**
 * STARKERS CHILD THEME functions and definitions
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
   
/* =======================================================
   Comments	
   ======================================================= */

/**
 * Custom callback for outputting comments 
 *
 * @return void
 * @author Keir Whitaker
 */
 
function new_starkers_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; 
	?>
	<?php if ( $comment->comment_approved == '1' ): ?>	
	<li>
		<article id="comment-<?php comment_ID() ?>">
			<?php echo get_avatar( $comment ); ?>
			<h4 class="comment-name"><?php comment_author_link() ?></h4>
			<div class="comments-time"><time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></div>
			<?php comment_text() ?>
		</article>
	<?php endif;
}

/**
 * Remove "Website" field in comment form 
 */
add_filter('comment_form_default_fields', 'url_filtered');
function url_filtered( $fields ) {
	if(isset( $fields['url']) )
	unset( $fields['url'] );
	return $fields;
}

/* =======================================================
   Limit number of Archive months displayed
   ======================================================= */
function my_limit_archives( $args ) {
    $args['limit'] = 3;
    return $args;
}
add_filter( 'widget_archives_args', 'my_limit_archives' );
add_filter( 'widget_archives_dropdown_args', 'my_limit_archives' );
	
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

/* =======================================================
   Excerpt
   ======================================================= */

function excerpt_read_more_link($output) {
	global $post;
	return $output . '<a class="excerpt-link" href="'. get_permalink($post->ID) . '"> Continue Reading...</a>';
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

/* =======================================================
   Pagination
   ======================================================= */

if ( ! function_exists( 'pagination' ) ) :
	function pagination() {
		global $wp_query;

		$big = 999999999; // need an unlikely integer
		
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
	}
endif;

?>