				<div   id='full_name_wrapper'>
							<div  class='input_label_header' >
								Full Name
							</div>
							<div  class='input_background input_200 ' >
								<input name="full_name" id="full_name" type="" value="<?php echo $website_data['full_name'] ?>">
							</div>
							
							<div  class='error_message' >
							</div>	
										
				</div>
				
				<div>

					
				<style>
					#submit_button.transparent_button{
					width:80px;
					margin:10px 0px 0px 0px;
					}
					#submit_button div.top_transparent_button{
						background:orange;
					}
				</style>
				<div   id='submit_button'   class='transparent_button'  >
						<div  class='top_transparent_button ' >
							<div  class='bottom_transparent_button' >
					
							</div>
								<div  class='middle_transparent_button' >
									Submit
								</div>
						</div>					
				</div>
				
	
				</div>
				
				
<script type="text/javascript" language="Javascript">
$(document).ready(function() {
	
	$('#submit_button div.middle_transparent_button').css({'margin-left':($('#submit_button.transparent_button').width()-$('#submit_button div.middle_transparent_button').width())/2+'px'})
	
	$('#submit_button').click(function(event) {
	
			ele_dom = $(this);
			
			ele_dom_inside_stuff = $(this).html();
    	
			ele_dom.addClass("loading").children().remove();

			$.post("<?php echo base_url(). 'index.php/main/update_aboutme';    ?>",{
				full_name:$('#full_name').val() 
				},function(data) {

							setTimeout(function() { 	
							

								error_message = data;

								ele_dom.removeClass('loading').append(ele_dom_inside_stuff);
								$('#full_name_wrapper div.error_message')
								// .html(error_message);
								
							}, 700);	
						
						
			 });	
			
		});
});
</script>