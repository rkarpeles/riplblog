<div class="sidebar">	
	<div class="sidebar-left">	
		<div id="toggle-nav">Click to Toggle</div>
		<ul>
			<?php 
				if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-left')) : ?>		
			<?php endif; ?>
		</ul>		
	</div>	
</div>