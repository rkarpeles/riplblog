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
			if(winwidth > 780){
				jQuery('#nav_menu-2').removeClass('showing').removeClass('hiding');    
			}
		});
	</script>
	</body>
</html>