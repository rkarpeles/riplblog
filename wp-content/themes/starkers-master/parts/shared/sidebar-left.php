<div class="sidebar">	
	<div class="sidebar-left">	
		<div class="toggle-nav">
			<div id="show-nav"><a href="#">Toggle Navigation</a></div>
			<div id="close-nav"><a href="#">X</a></div>
		</div>
		<ul>
			<?php 
				if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-left')) : ?>		
			<?php endif; ?>
		</ul>		
	</div>	
</div>