	<?php wp_footer(); ?>
	<script>
		 jQuery('#toggle-nav').click(function () {
			 var nav = jQuery('.widget_nav_menu');
			 if(nav.hasClass('showing')){
				 nav.removeClass('showing').addClass('hiding');
			 }else{
				 nav.removeClass('hiding').addClass('showing');
			 }
		 });
		jQuery(window).resize(function(){
			var winwidth = jQuery(window).innerWidth();
			if(winwidth > 760){
				jQuery('.widget_nav_menu').removeClass('showing').removeClass('hiding');    
			}
		});
	</script>
	<!-- Adds the 'User Agent' to the <html> element to target certain browsers for styling purposes -->
	<script>
		var doc = document.documentElement;
		doc.setAttribute('data-useragent', navigator.userAgent);
	</script>
	<!-- Google Analytics Tracking -->
	<?php include_once('analyticstracking.php'); ?>
	</body>
</html>