<div class="sidebar">	
	<div class="sidebar-left">	
		<div id="toggle-nav" class="btn">Menu</div>
		<ul>
			<?php 
				if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-left')) : ?>		
			<?php endif; ?>
		</ul>		
	</div>	
</div>