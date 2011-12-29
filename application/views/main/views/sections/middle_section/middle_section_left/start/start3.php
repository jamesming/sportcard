<?php     	$this->load->view('header/submenu_area_css.php');  ?>
<style>
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

#working_area_wrapper{
	padding:0px 0px 20px 0px;
}
</style>
<div  id='working_area_wrapper'>
	
					<div>
						<div  class='float_left label_header add_more_margin_on_left'  style='padding-right:5px;'>
						Media
						</div>
<?php     
						$this->load->view('main/views/sections/middle_section/middle_section_left/start/continue_button'); 
?>
					</div>

					<div  class='clearfix label_description add_more_margin_on_left' >
						Complete the forms in each of the following media tabs.
								
					</div>
			
			
			
			
			<div  class='sub_menu_area_div' >
				<ul  class='sub_menu_area' >
					<li class='line left_line '  ></li>
					<li submenu_item="gallery" ><a  submenu_item="gallery" href='<?php echo base_url()    ?>index.php/main/index/start/3/gallery'>Gallery</a>&nbsp;</li>
					<li submenu_item="video" class='last_submenu_item '   ><a  submenu_item="video" href='<?php echo base_url()    ?>index.php/main/index/start/3/video'>Video</a></li>
					<li class='line right_line '  ></li>
				</ul>	
			</div>	
			
			<div  >
			<?php
			
			
			
			
							switch (  $website_data['submenu_item'] ){
							
								case 'gallery':
					
										$this->load->view('main/views/sections/middle_section/middle_section_left/menu/website/website_bottom/photos_main_section_with_script.php'); 

					
								break;
								
								
								case 'video':
					
										$this->load->view('main/views/sections/middle_section/middle_section_left/menu/website/website_bottom/reels_main_section_with_script.php'); 
					
								break;								
										
								
								default:
								


							}
			
			     	
			?>
			</div>

</div>

<script type="text/javascript" language="Javascript">


	
$(document).ready(function() {
	


<?php if( $website_data['submenu_item'] == 'video' ){
	
			$next_start_page = $website_data['menu_selected'] + 1;
			?>
		
			$('#skip_or_continue').click(function(event) {
					document.location.href='<?php echo base_url()    ?>/index.php/main/index/start/<?php echo $next_start_page;    ?>';
			});	
	
	
<?php }else{?>
	
			$('#skip_or_continue').click(function(event) {
					document.location.href='<?php echo base_url()    ?>index.php/main/index/start/3/'+select_li_dom.next('li').attr('submenu_item');
			});	
	
	
<?php } ?>


})

</script>				