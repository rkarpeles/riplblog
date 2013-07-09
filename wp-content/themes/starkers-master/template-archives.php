<?php
/*
Template Name: Archives
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header', 'parts/shared/sidebar-left' ) ); ?>
	<div class="content">
		<h2>Archives by Month:</h2>
		<ul class="archive-list">
			<strong><?php wp_get_archives('type=monthly'); ?></strong>
		</ul>
	</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-right', 'parts/shared/footer','parts/shared/html-footer') ); ?>