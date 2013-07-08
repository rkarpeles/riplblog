<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 * Template Name: Homepage
 */

?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header', 'parts/shared/sidebar-left' ) ); ?>
	<div class="content">	
		<div class="slider">
			<?php echo do_shortcode("[metaslider id=107]"); ?>
		</div>		
		<?php 		
		$query = new WP_Query( 'post_type=post' );
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				get_template_part( 'blog-content');								
			}
		} else {
			// no posts found			
		}		
		/* Restore original Post Data */
		wp_reset_postdata(); ?>
	</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-right', 'parts/shared/footer','parts/shared/html-footer') ); ?>