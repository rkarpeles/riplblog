	<?php wp_footer(); ?>		
	<script>
		jQuery('#show-nav').click(function () {
			jQuery('#nav_menu-2').toggle('slow');
			jQuery('#close-nav').show();
			jQuery('#show-nav').hide();
		});
		jQuery('#close-nav').click(function () {
			jQuery('#nav_menu-2').toggle('slow');
			jQuery('#close-nav').hide();
			jQuery('#show-nav').fadeIn('slow');
		});
	</script>
	</body>
</html>