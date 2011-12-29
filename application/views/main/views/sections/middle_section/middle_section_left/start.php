											
<style>
	#start_panel_wrapper{
		margin:0px 0px 5px 0px;
	}
	.start_panel{
				margin:0px 0px 0px 5px;
		    background-image: url(<?php  echo base_url()   ?>images/start<?php echo $website_data['menu_selected']   ?>.png);
		    background-position: 0px 0px;
		    background-repeat: no-repeat;
		    height: 45px;
	}
	
				.start_panel div.start_panel_menu_item{
				    height: 35px;
				    width: 117px;
				}
#skip_or_continue{
margin:10px 20px 0px 0px;
cursor:pointer;	
}
</style>
													
													<div class=' rounded_bg'  id='start_panel_wrapper'  >
														<div class="top">
															<div class="sub_top">&nbsp;</div>
														</div>
													  <div class="middle  panel "   style='height:38px'  >
			
																<div  class='start_panel'>
																	
																	<div  startpage='1' class='float_left start_panel_menu_item' >
																		&nbsp;
																	</div>
																	<div  startpage='2' class='float_left start_panel_menu_item' >
																		&nbsp;
																	</div>
																	<div  startpage='3' class='float_left start_panel_menu_item' >
																		&nbsp;
																	</div>
																	<div  startpage='4' class='float_left start_panel_menu_item' >
																		&nbsp;
																	</div>
																	<div  startpage='5' class='float_left start_panel_menu_item' >
																		&nbsp;
																	</div>																	
																	<div  startpage='6' class='float_left start_panel_menu_item' >
																		&nbsp;
																	</div>		
																</div>
															
														</div>
														<div class="bottom"><div class="sub_bottom">&nbsp;</div></div>
													</div>	
													
<script type="text/javascript" language="Javascript">								
	$(document).ready(function() {
		
			$('.start_panel div').click(function(event) {
					document.location.href='<?php echo  base_url();   ?>index.php/main/index/start/' + $(this).attr('startpage');
			});	
			
	})	
</script>
					