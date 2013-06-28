<?php
/**
 * The Template for displaying all single posts
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

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article>

			<h1><?php the_title(); ?></h1>
			<div class="time-date post-time-date">
				<em>By <?php the_author();?> on <?php the_time('l, F jS, Y'); ?></em>
			</div>
			
			<!--Comments are blocked out for now-->  
			<!--<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>-->
			<!------------------------------------>
			
			<span class="content-thumb">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('content-thumb'); } ?>
			</span>	
			
			<?php the_content(); ?>				

			<?php if ( get_the_author_meta( 'description' ) ) : ?>
			<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
			<h3>About <?php echo get_the_author() ; ?></h3>
			<?php the_author_meta( 'description' ); ?>
			<?php endif; ?>

			<div class="comments-section">
				<?php comments_template( '', true ); ?>
			</div>	
			
			<div class="posts-nav-single">
				<?php previous_post('%','&laquo; Previous Post','no'); ?> | <?php next_post('%','Next Post &raquo','no'); ?>
			</div>

		</article>
		<?php endwhile; ?>

	</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-right', 'parts/shared/footer','parts/shared/html-footer') ); ?>