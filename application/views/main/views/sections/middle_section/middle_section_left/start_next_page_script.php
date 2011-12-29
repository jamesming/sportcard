<script type="text/javascript" language="Javascript">								
	$(document).ready(function() {
		
			<?php
			$next_start_page = $website_data['menu_selected'] + 1;
			?>
		
			$('#skip_or_continue').click(function(event) {
					document.location.href='<?php echo base_url()    ?>/index.php/main/index/start/<?php echo $next_start_page;    ?>';
			});	
				
			
	})	
</script>