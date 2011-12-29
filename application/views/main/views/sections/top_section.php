<?php     	$this->load->view('header/top_section_css.php');  ?>

<div class='container top_area' >
	<div class='float_left'  id='logo_wrapper'>	
		<a href='<?php echo base_url()    ?>index.php/main/index/menu/aboutme'><img src='<?php echo base_url()    ?>images/scenecredit2.png' /></a>
	</div>
	<div class='float_right top_right_area' >
																<ul  class='menu_top_right top_right_area_menu' >
																	<li>Member: <?php echo $website_data['email']    ?></li>
																	
																	<li  id='start'><a href='<?php echo base_url()    ?>index.php/main/index/start/1'>Welcome</a></li>
																	<li  id='menu'  class='blink' ><a  href='<?php echo base_url()    ?>index.php/main/index/menu/website'>Main Menu</a></li>
																	<li  id='account' ><a href='<?php echo base_url()    ?>index.php/main/index/account'>Account Settings</a></li>
																	<li  id='advice'>
																		
																		
																		<div  class='float_left '  
																			
																			
																			<?php if( !$this->tools->browserIschrome() ){?>
																			
																			 	style='margin:1px 3px 0px 0px;' 
																			
																			<?php }else{?>
																		
																		 		style='margin:0px 3px 0px 0px;' 
																		
																			<?php } ?>
																			
																			
																			 >
																			<input id="advice_checkbox" type="checkbox" value=""     style='border:0'  >
																		</div>
																		<div class='float_left ' >
																			Advice
																		</div>
																		
																		
																		
																		
																		
																		<!--<a href='<?php echo base_url()    ?>index.php/main/index/help'>Help</a>  -->
																		
																		
																		
																		</li>
																	<li  id='logout' style='border:0px;padding-right:0px' ><a >Log Out</a></li>
																</ul>
	</div>

</div>

<script type="text/javascript" language="Javascript">
$(document).ready(function() {

	$('#<?php echo $website_data['which_menu']    ?>').css({'color':'<?php   echo $website_data['blue']   ?> '})


	$('#advice_checkbox').click(function(event) {
			update_advice($(this));
			
		})

	<?php if( $website_data['users'][0]->advice_checkbox == 1){
	?>
		$('#advice_checkbox').attr('checked','checked');			
	<?php     
	}else{
	?>
		$('#advice_checkbox').removeAttr('checked');			
	<?php     	
	};?>
	
			
	$('.disable').css({
		cursor:'pointer',
		color:'blue',
		'text-decoration':'underline'
		}).click(function(event) {
			
							$('#advice_checkbox').removeAttr('checked');
							
							update_advice(  $('#advice_checkbox') );
							
							$('#advice_is_here').fadeIn('slow')
							
							window.setTimeout(function(){
								$('#advice_is_here').fadeOut('slow', function() {
							  });
							},3000);
				
	});
	
	$('#advice_is_here').css({
		'margin-left':get_margin_left_for( $('#advice_is_here'), -253 )
		})

});

half_width_of_browser_window = $(window).width() /2 ;

function get_margin_left_for( dom_obj, moveLeftFromCenter ){
	
		half_width_of_profile_picture_outer_container =  dom_obj.width()/2;
		
		margin_left_for_centering_dom_obj = half_width_of_browser_window - half_width_of_profile_picture_outer_container;
		
		return margin_left_for_centering_dom_obj - moveLeftFromCenter;
	
}
	
function update_advice(domObj){
	
			if( domObj.is(':checked') ){
				isChecked = 1;
				if( $('.help_message_wrapper').length > 0){
					show_advice();
				};
				
			}else{
				isChecked = 0;
				$('.close').click();
			};
			
			$.post('<?php echo base_url(). 'index.php/main/update_database';    ?>',{
				method:'update_checkbox',
				table:'users',
				field:'advice_checkbox',
				checked:isChecked
				},function(data) {
					
			 });	
	
}	
</script>

<style>
#advice_is_here{
	background-image: url(<?php echo base_url()    ?>images/bubble_pointing_up.png);
	background-position: 0 0;
	background-repeat: no-repeat;
	color: black;
	height: 100px;
	padding: 28px 1px 2px 20px;
	position: absolute;
	width: 184px;
	display:none;
}
</style>
<div  id='advice_is_here'>To re-enable advice tips, check this box.
</div>