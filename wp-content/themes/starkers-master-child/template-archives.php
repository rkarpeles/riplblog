<?php
/*
Template Name: Archives
*/
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header', 'parts/shared/sidebar-left' ) ); ?>
	<div class="content">
		<h2 class="bot-mar-2">Archives by Month:</h2>
		<div class="archive-list">
			<strong><?php wp_get_archives('type=monthly'); ?></strong>
		</div>
	</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/sidebar-right', 'parts/shared/footer','parts/shared/html-footer') ); ?>