<?php     	$this->load->view('header/submenu_area_css.php');  ?>
<style>
#working_area_wrapper{
	padding:0px 0px 20px 0px;
}
.sub_menu_area_div{
  margin-bottom:20px;	
}
.sub_menu_area_div ul.sub_menu_area {
  margin-left: 0px;
  margin-top:10px;
}
.sub_menu_area_div ul.sub_menu_area li {
	width: 110px;
}
.sub_menu_area_div ul.sub_menu_area li a {
    width: 110px;
}

</style>

<div  id='working_area_wrapper'>
					<div>
						<div  class='float_left label_header add_more_margin_on_left'  style='padding-right:5px;'>
						About Me
						</div>
<?php     
						$this->load->view('main/views/sections/middle_section/middle_section_left/start/continue_button'); 
?>
					</div>

					<div  class='clearfix label_description add_more_margin_on_left' >
						Complete the forms in each of the following tabs.
								
					</div>
			
			
			
			
			<div  class='sub_menu_area_div' >
				<ul  class='sub_menu_area' >
					<li class='line left_line '  ></li>
					<li submenu_item="aboutme" ><a  submenu_item="aboutme" href='<?php echo base_url()    ?>index.php/main/index/start/2/aboutme'>About Me</a>&nbsp;</li>
					<li submenu_item="description" ><a  submenu_item="description" href='<?php echo base_url()    ?>index.php/main/index/start/2/description'>Description</a>&nbsp;</li>
					<li submenu_item="picture" ><a  submenu_item="picture" href='<?php echo base_url()    ?>index.php/main/index/start/2/picture'>My Picture</a>&nbsp;</li>
					<li submenu_item="contact" ><a  submenu_item="contact" href='<?php echo base_url()    ?>index.php/main/index/start/2/contact'>Contact info</a>&nbsp;</li>
					<li submenu_item="social" class='last_submenu_item '   ><a  submenu_item="social" href='<?php echo base_url()    ?>index.php/main/index/start/2/social'>Social Networks</a></li>
					<li class='line right_line '  ></li>
				</ul>	
			</div>	
			
			<div  >
			<?php
			
			
			
			
							switch (  $website_data['submenu_item'] ){
							
								case 'aboutme':
					
													     	$this->load->view('main/views/sections/middle_section/middle_section_left/menu/aboutme_main_section_with_script.php'); 
					
								break;
								
								
								
								case 'description':
					
														    
										$this->load->view('javascript/wysiwyg_with_script.php'); 

	
					
								break;		
								
								
								case 'picture':
					
   
    
									$this->load->view('footer/picture_main_section_with_script.php'); 


					
								break;								
								
								case 'contact':
					
															$this->load->view('javascript/wysiwyg_with_script.php'); 

					
								break;		
								
								case 'social':
											   
															$this->load->view('main/views/sections/middle_section/middle_section_left/menu/website/website_bottom/contact/social_main_section_with_script.php'); 
					
								break;										
															
								
								default:
								


							}
			
			     	
			?>
			</div>

</div>

<script type="text/javascript" language="Javascript">


	
$(document).ready(function() {
	



<?php if( $website_data['submenu_item'] == 'social' ){
	
			$next_start_page = $website_data['menu_selected'] + 1;
			?>
		
			$('#skip_or_continue').click(function(event) {
					document.location.href='<?php echo base_url()    ?>/index.php/main/index/start/<?php echo $next_start_page;    ?>';
			});	
	
	
<?php }else{?>
	
			$('#skip_or_continue').click(function(event) {
					document.location.href='<?php echo base_url()    ?>index.php/main/index/start/2/'+select_li_dom.next('li').attr('submenu_item');
			});	
	
	
<?php } ?>


})

</script>		
