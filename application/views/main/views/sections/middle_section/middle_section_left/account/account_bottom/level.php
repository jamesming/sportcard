
<div  id='working_area_wrapper'    style='margin-top:10px'   >
		<div  class=' label_header add_more_margin_on_left'  style='padding-right:10px;'>
		Account Level

		</div>
		<div  class=' label_description add_more_margin_on_left' >
			You are currently a Premium member.<br /><br />To cancel membership, please click the button below<br /><br />Your access to the Premium collection, and use of a premium template will end at the end of your billing cycle on [billing_end].
		</div>

		
		<a  href='<?php echo base_url()    ?>index.php/main/index/message/downgraded'>
				<div   class='downgrade_button float_left transparent_button'  >
						<div  class='top_transparent_button ' >
							<div  class='bottom_transparent_button' >
					
							</div>
								<div  class='middle_transparent_button' >
									Downgrade
								</div>
						</div>					
				</div>
		</a>
</div>

<style>
	.downgrade_button.transparent_button{
	width:110px;
	}
	.downgrade_button div.top_transparent_button{
		background:#FE2E2E;
	}
</style>
<script type="text/javascript" language="Javascript">

	
$(document).ready(function() {
	
	$('.downgrade_button div.middle_transparent_button').css({'margin-left':($('.downgrade_button.transparent_button').width()-$('.downgrade_button div.middle_transparent_button').width())/2+'px'})

	
	
});	
</script>