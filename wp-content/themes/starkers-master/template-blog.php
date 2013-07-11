<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 * Template Name: Blog
 */

?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header', 'parts/shared/sidebar-left' ) ); ?>
	<div class="content">
		<h1 class="page-heading"><?php the_title(); ?></h1>
		<?php $args = array( 'posts_per_page' => get_option( 'posts_per_page' ), 'paged' => max( 1, get_query_var( 'paged' ) ) ); ?>			
		<?php global $wp_query, $wp_the_query; ?>
		<?php $wp_query = new WP_Query( $args ); ?>
		<?php if( $wp_query->have_posts() ) : ?>				
			<?php while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				<?php get_template_part( 'blog-content', get_post_format() ); ?>
			<?php endwhile; ?>				
		<div class="posts-nav">	
			<?php pagination(); ?>
		</div>
		<?php else : ?>
			<?php echo ('<h2>Sorry, no posts to display!</h2>'); ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		<?php $wp_query = $wp_the_query; ?>
	</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-right', 'parts/shared/footer','parts/shared/html-footer') ); ?>