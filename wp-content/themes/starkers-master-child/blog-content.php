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
	

	
	