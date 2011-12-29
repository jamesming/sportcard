<?php

if( isset($website_data['submenu_item']) ){
	
		$this->load->view('header/submenu_area_css.php');  
	
};
     	
     	
 ?>
<style>
.sub_menu_area_div {
    margin-top: 15px;
    
}
</style>


		<style>
		.help_message_wrapper {
		    display: none;
		    height: 113px;
		    padding: 10px 15px 15px;
		    width: auto;
		    color:gray;
		    font-size:14px;
		}
		.help_message_wrapper div.message_gray_block {
		    background: none repeat scroll 0 0 #E5E5E5;
		    height: 70px;
		    margin-left: 5px;
		    padding: 22px;
		    width: auto;
		}
		.help_message_wrapper div.message_gray_block div.message {
		    width: 615px;
		    margin-left: 11px;
		}
		</style>
		<div  class='help_message_wrapper help_1' >
			
			<div class='float_right close_wrapper' >
					<small  class=' close' >[x]</small>&nbsp;&nbsp;
			</div>
			<div  class='message_gray_block ' >
				
				<div>
					<img  class='float_left ' src='<?php echo base_url()    ?>images/advice.png'/>
					<div  class='float_left message'>
								<b>Your Website</b><br />
								Show only relevant content.&nbsp;&nbsp;Check the box next to the tab for it to become a part of your website. Click the tab to add content.
					</div>			
				</div>
				<div  class='clearfix' >
					<div>
						<div class='float_right ' >
							<small  class='disable ' >Disable all advice</small>
						</div>
					</div>
				</div>
							
			</div>
		
		</div>




		<div  class='website_top clearfix'  >
			<?php
				$this->load->view('main/views/sections/middle_section/middle_section_left/menu/website/website_top/website_menu.php');  		
			?>	
		</div>	
																
																
																
<?php if( $website_data['menu_item'] == 'home'){?>
														
		<div  class='help_message_wrapper help_2' >
			
			<div class='float_right close_wrapper' >
				<small  class=' close' >[x]</small>&nbsp;&nbsp;
			</div>
			
			<div  class='message_gray_block ' >
				
				<div>
					<img  class='float_left ' src='<?php echo base_url()    ?>images/advice.png'/>
					<div  class='float_left message'>
								<b>Your Home Page</b><br />
								Choose how images are presented on your home page.  Click the radio button next to the tab of your desired format.&nbsp;&nbsp; You can only choose one format.
					</div>			
				</div>
				<div  class='clearfix' >
					<div>
						<div class='float_right' >
							<small class='disable '>Disable all advice</small>
						</div>
					</div>
				</div>
							
			</div>
		
		</div>									
																
<?php } ?>
																
																
																
																
		<div  class='website_bottom ' >
			<?php
			 	$this->load->view('main/views/sections/middle_section/middle_section_left/menu/website/website_bottom/'.$website_data['menu_item'].'.php');  
			?>
		</div>	
		
		
		
		
<script type="text/javascript" language="Javascript">						
		$(document).ready(function() {
			
			
			<?php
			 
			 if( $website_data['users'][0]->advice_checkbox == 1){?>
			 	
						 	window.setTimeout(function(){
							
								show_advice();
					
						
							},1000);
							
			<?php } ?>
			
					
			$('.close').css({cursor:'pointer'})
					.each(function(event) {
								$(this).click(function(event) {	
										$(this).parent().parent()
												.slideUp('slow', function() {
													
												});
								});							
					 });	
			

		});
		
		
		function show_advice(){

				$('.help_message_wrapper.help_1')
						.slideDown('slow', function() {
							
							
							
							<?php if( $website_data['menu_item'] == 'home'){?>																
							
														
														window.setTimeout(function(){
																$('.help_message_wrapper.help_2')
																		.slideDown('slow', function() {
																			
																		});		
														},3000);
														
							<?php } ?>							
							
							
							
							
						});		
			
		}
		

		
</script>		
