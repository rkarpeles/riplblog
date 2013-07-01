<div class="sidebar">	
	<div class="sidebar-left">	
		<div class="toggle-nav">
			<a href="#"><div id="show-nav">Menu</div></a>
			<a href="#"><div id="close-nav">Close (X)</div></a>
		</div>
		<ul>
			<?php 
				if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-left')) : ?>		
			<?php endif; ?>
		</ul>		
	</div>	
</div>