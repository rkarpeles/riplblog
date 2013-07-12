<?php
/**
 * The template used to display Tag Archive pages
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
	<h2>Tag Archive: <?php echo single_tag_title( '', false ); ?></h2>
	<?php while ( have_posts() ) : the_post(); ?>	
		<article>
			<h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="time-date">
				<em>By <?php the_author();?> on <?php the_time('l, F jS, Y'); ?></em>
			</div>
			<div class="excerpt-thumb">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('excerpt-thumb'); } ?>
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
	<h2>No posts to display in <?php echo single_tag_title( '', false ); ?></h2>
	<?php endif; ?>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-right', 'parts/shared/footer','parts/shared/html-footer') ); ?>