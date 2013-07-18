<?php
/**
 * The template for displaying Author Archive pages
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
	<?php if ( have_posts() ): the_post(); ?>
	<h2 class="heading-alt bot-mar-3">Author Archives: <?php echo get_the_author() ; ?></h2>
	<?php if ( get_the_author_meta( 'description' ) ) : ?>
	<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
	<h3>About <?php echo get_the_author() ; ?></h3>
	<?php the_author_meta( 'description' ); ?>
	<?php endif; ?>
	<?php rewind_posts(); while ( have_posts() ) : the_post(); ?>
			<article>
				<h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<div class="time-date">
					<em>By <?php the_author();?> on <?php the_time('l, F jS, Y'); ?></em>
				</div>
				<?php the_content(); ?>
			</article>
	<?php endwhile; ?>
	<div class="posts-nav">	
		<?php pagination(); ?>
	</div>
	<?php else: ?>
	<h2>No posts to display for <?php echo get_the_author() ; ?></h2>	
	<?php endif; ?>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-right', 'parts/shared/footer','parts/shared/html-footer') ); ?>