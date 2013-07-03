<div class="sidebar">	
	<div class="sidebar-left">	
		<div id="toggle-nav" class="btn">Menu</div>
		<ul>
			<?php 
				if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-left')) : ?>		
			<?php endif; ?>
		</ul>
		<ul>
			<div class="search-wrap">				
				<?php include ('/../../searchform.php'); ?>	
			</div>
		</ul>
		<ul>
			<div class="current-issue-wrap">				
				<?php include ('/../../current-issue.php'); ?>	
			</div>
		</ul>
	</div>	
</div>