<style>
	

		#url_profile_link{
    width: 123px;
		}
		.input_profile_link{
    	width: 166px !important;
		}

		.plain_submit{
	    background-position: 0 0;
		}
		.hover_submit{
	    background-position: -85px 0;
		}		
		#post_update{
	    display: none;
	    color: gray;
	    font-size: 14px;	
		}
				#newly_created_profile_url_link{
				margin:10px 0px 20px 0px;	
				font-weight:bold;
				font-size:22px;
				color:blue;
				}
						#newly_created_profile_url_link div{
						font-weight:bold;
						text-decoration:underline;
						}
						
				#to_continue{
					margin:20px 0px 0px 0px;
					padding:20px 60px 0px 0px;	
				}
	.label_description, #post_update{
		padding:20px 0px 10px 0px;
	}	
		
</style>


		
		<div  id='profile_url_wrapper'>
			
				<div  >
					
							<div  class='float_left input_background input_300 ' >
								<div   id='url_profile_link' class=' float_left ' >
									http://scenecredit.com/
								</div>
								<input class='float_left input_profile_link ' name="profile_url" id="profile_url" type="" value="<?php echo $website_data['profile_url']    ?>">
							</div>
							

	
				<div   class='publish_button float_left transparent_button'  >
						<div  class='top_transparent_button ' >
							<div  class='bottom_transparent_button' >
					
							</div>
								<div  class='middle_transparent_button' >
									Publish
								</div>
						</div>					
				</div>
							
							
							
							
							
										
				</div>
				<div  class='error_message clearfix' >
				</div>	
						
		</div>


		<div  id='post_update'>
			<div>
				<b>Congratulations</b>, your new website is ready.  Click the link below to see how it looks like so far.
			</div>
			<div  id='newly_created_profile_url_link' >
				<div  class='float_left ' >
					http://www.scenecredit.com/
				</div>
				<div  id='newly_created_profile_url'  class='float_left ' >
				</div>
			</div>
			<div  id='to_continue'  class='clearfix ' >
				To continue updating your new website, click on the blinking "Main Menu" on the top right of this screen.
			</div>
		</div>

		
<style>
	.publish_button.transparent_button{
	width:80px;
	}
	.publish_button div.top_transparent_button{
		background:orange;
		height:27px;
	}
</style>			
						

<script type="text/javascript" language="Javascript">
	
$(document).ready(function() {
	
	$('.publish_button div.middle_transparent_button').css({'margin-left':($('.publish_button.transparent_button').width()-$('.publish_button div.middle_transparent_button').width())/2+'px'})

	
	$('#profile_url').focus().click(function(event) {
		$(this).select().css({background:'#FFFFFF'}).parent().parent().next().html('');
	});
	
	
	
	$('.publish_button').click(function(event) {
		
		
			if( $('#profile_url').val()  == '' ){
				
				$('#profile_url').css({background:'#F5A9A9'}).parent().parent().next().html('Must be greater than 3 characters.');
				
			}else{
				
				post_profile_url(ele_dom = $(this) );
				
			};

		});	

		
		$('#profile_url').keyup(function(event) {
				
						dom_ele = $(this);
						
						
						if( dom_ele.val().length < 4){
							dom_ele.css({background:'#F5A9A9'}).parent().parent().next().html('Must be greater than 3 characters.');
						}else{
							
								$.post("<?php echo base_url(). 'index.php/main/check_available_profile_link';    ?>",{
									profile_url:dom_ele.val() 
									},function(xml) {
										var status = $(xml).find('status').text();
										var message = $(xml).find('message').text();
										
										
										if( status == 'true'){
											dom_ele.css({background:'transparent'});
											
										}else{
											dom_ele.css({background:'#F5A9A9'});
										};
										
										dom_ele.parent().parent().next().html(message);
								 });							
							
						};


						 				  			
		});		


	
	
});	


function post_profile_url(ele_dom){
	
			ele_dom_inside_stuff = ele_dom.html();
	
			ele_dom.addClass("loading").children().remove();

			$.post("<?php echo base_url(). 'index.php/main/update_profile_link';    ?>",{
				profile_url:$('#profile_url').val() 
				},function(data) {

							setTimeout(function() { 	
							
								if( data == 'false'){
								
										error_message = 'This URL suddenly became unavailable';
										$('#profile_url').css({background:'#F5A9A9'});
								
								}else{
								
										$('.your_website_middle').html(data);
										error_message = '';
										
										
										<?php if( isset($website_data['which_menu']) 
										&& $website_data['which_menu'] == 'start' 
										&& isset($website_data['menu_selected']) 
										&& $website_data['menu_selected'] == 6 ){?>
										
											$('#profile_url_wrapper, .label_description').hide();
											$('#post_update').show();
											$('#newly_created_profile_url').text($('#profile_url').val());
											$('#newly_created_profile_url_link').css({cursor:'pointer'}).click(function(event) {
													open('<?php echo base_url()    ?>index.php/'+$('#profile_url').val(), '_blank' );
											});

											$('.blink').css({'font-weight':'bold'})
											setInterval(function() {
												$('.blink').animate({opacity:0},200,"linear",function(){
												  $(this).animate({opacity:1},200);
												});  
											}, 1000);

										<?php } ?>										
										
										
								
								};
																	
								ele_dom.removeClass('loading').append(ele_dom_inside_stuff);
								$('#profile_url_wrapper div.error_message').html(error_message);
								
								

								
								
								
							}, 700);	
						
						
			 });	
			 
}
</script>