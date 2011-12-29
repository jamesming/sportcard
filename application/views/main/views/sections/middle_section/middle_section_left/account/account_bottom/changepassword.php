
<div  id='working_area_wrapper'    style='margin-top:10px'   >
		<div  class=' label_header add_more_margin_on_left' >
		Change Password

		</div>
		<div  class=' label_description add_more_margin_on_left' >
			
		</div>
		
		<div   id='password_wrapper'  class=' input_wrapper'   style='margin:0px 0px;'  >

			<div>
					<div  class=' float_left' >
						
							<div  class='input_background input_250 ' >
								<input name="password" id="password" type="password" value=""  >
							</div>
						
							
					</div>	
					

					
				<div   class='update_button float_left transparent_button'  >
						<div  class='top_transparent_button ' >
							<div  class='bottom_transparent_button' >
					
							</div>
								<div  class='middle_transparent_button' >
									Update
								</div>
						</div>					
				</div>
					
							
			</div>

			<div  class='error_message clearfix' >

			</div>				
				

			
	
	
								
		</div>
		
	
		
		
		
</div>

<style>
	.update_button.transparent_button{
	width:80px;
	}
	.update_button div.top_transparent_button{
		background:orange;
		height:27px;
	}
</style>

<script type="text/javascript" language="Javascript">

	
$(document).ready(function() {
	
	$('.update_button div.middle_transparent_button').css({'margin-left':($('.update_button.transparent_button').width()-$('.update_button div.middle_transparent_button').width())/2+'px'})

	
	$('#password').focus().click(function(event) {
			$('.error_message').text('');
		});		
	
	
	
	$('.update_button').click(function(event) {
		
			if( $('#password').val() == ''){
				$('#password_wrapper div.error_message').html('Password must not be blank');
			}else{
				
						ele_dom =$(this);
						
						ele_dom_inside_stuff = ele_dom.html();
				
						ele_dom.addClass("loading").children().remove();
			
						$.post("<?php echo base_url(). 'index.php/main/update_password';    ?>",{
							thepassword:$('#password').val() 
							},function(data) {
							
										setTimeout(function() { 	
										
											ele_dom.removeClass('loading').append(ele_dom_inside_stuff);
											//$('#password_wrapper div.error_message').html(data);
											
										}, 700);	
									
									
						 });				
				
			};
	
	
			
		});	



	
	
});	
</script>