	<?php wp_footer(); ?>
	<script>
		 jQuery('#toggle-nav').click(function () {
			 var nav = jQuery('#nav_menu-2');
			 if(nav.hasClass('showing')){
				 nav.removeClass('showing').addClass('hiding');
			 }else{
				 nav.removeClass('hiding').addClass('showing');
			 }
		 });
		jQuery(window).resize(function(){
			var winwidth = jQuery(window).innerWidth();
			if(winwidth > 760){
				jQuery('#nav_menu-2').removeClass('showing').removeClass('hiding');    
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