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

<?php if ( have_posts() ): ?>
<h2>Tag Archive: <?php echo single_tag_title( '', false ); ?></h2>
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<article>
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="time-date">
				<em>Posted by <?php the_author();?> on <?php the_time('l, F jS, Y'); ?></em>
			</div>
			
			<!--Comments are blocked out for now-->  
			<!--<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>-->
			<!------------------------------------>
			
			<?php the_content(); ?>
		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display in <?php echo single_tag_title( '', false ); ?></h2>
<?php endif; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-right', 'parts/shared/footer','parts/shared/html-footer') ); ?>