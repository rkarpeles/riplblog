<?php
/**
 * Search results page
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
	<h2>Search Results for '<?php echo get_search_query(); ?>'</h2>	
	<ol>
	<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<article>
				<h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<div class="time-date">
					<em>Posted by <?php the_author();?> on <?php the_time('l, F jS, Y'); ?></em>
				</div>
				
				<!--Comments are blocked out for now-->  
				<!--<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>-->
				<!------------------------------------>
				
				<div class="excerpt">
					<?php the_excerpt(); ?>
				</div>
			</article>
		</li>
	<?php endwhile; ?>
	</ol>
	<?php else: ?>
	<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
	<?php endif; ?>

</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-right', 'parts/shared/footer','parts/shared/html-footer') ); ?>