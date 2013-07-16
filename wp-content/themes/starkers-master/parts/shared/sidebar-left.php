<div class="sidebar">	
	<div class="sidebar-left">	
		<div id="toggle-nav" class="btn">Menu</div>		
			<?php 
				if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-left')) : ?>		
			<?php endif; ?>
			
			<div class="search-wrap">				
				<?php include ('searchform.php'); ?>	
			</div>
				
			<div class="current-issue-wrap">				
				<?php include ('current-issue.php'); ?>	
			</div>		
	</div>	
</div>