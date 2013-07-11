<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts() 
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header', 'parts/shared/sidebar-left' ) ); ?>
<div class="content">
	<?php if ( have_posts() ): ?>
	<?php if ( is_day() ) : ?>
	<h2>Archive: <?php echo  get_the_date( 'D F Y' ); ?></h2>							
	<?php elseif ( is_month() ) : ?>
	<h2>Archive: <?php echo  get_the_date( 'F Y' ); ?></h2>	
	<?php elseif ( is_year() ) : ?>
	<h2>Archive: <?php echo  get_the_date( 'Y' ); ?></h2>								
	<?php else : ?>
	<h2>Archive</h2>	
	<?php endif; ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article>
			<h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="time-date">
				<em>Posted by <?php the_author();?> on <?php the_time('l, F jS, Y'); ?></em>
			</div>
			
			<div class="excerpt">
				<?php the_excerpt(); ?>
			</div>
		</article>
	<?php endwhile; ?>
	<div class="posts-nav">	
		<?php pagination(); ?>
	</div>
	<?php else: ?>
	<h2>No posts to display</h2>	
	<?php endif; ?>	
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-right', 'parts/shared/footer','parts/shared/html-footer') ); ?>