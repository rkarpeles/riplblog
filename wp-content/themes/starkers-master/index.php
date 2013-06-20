<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
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
	
		<div class="slider">
			<?php echo do_shortcode("[metaslider id=107]"); ?>
		</div>

		<?php if ( have_posts() ): ?>		
		<ol>
		<?php while ( have_posts() ) : the_post(); ?>
			<li>
				<article>
					<h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<div class="time-date">
						<em>By <?php the_author();?> on <?php the_time('l, F jS, Y'); ?></em>
					</div>
					
					<!--Comments are blocked out for now-->  
					<!--<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>-->
					<!------------------------------------>
					
					<div class="excerpt-thumb">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail('excerpt-thumb'); } ?>
					</div>
					
					<div class="excerpt">
						<?php the_excerpt(); ?>
					</div>
				</article>
			</li>
		<?php endwhile; ?>
		</ol>
		<?php else: ?>
		<h2>No posts to display</h2>
		<?php endif; ?>

	</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-right', 'parts/shared/footer','parts/shared/html-footer') ); ?>