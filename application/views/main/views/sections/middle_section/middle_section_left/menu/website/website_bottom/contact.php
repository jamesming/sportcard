<div  class='working_area_wrapper'>
		<div  class='label_header' style='padding-right:8px;'  >
			My Contact Information
		</div>
</div>

<style>
							.sub_menu_area_div ul.sub_menu_area li {
							    width: 140px;
							}

</style>


<div  class='sub_menu_area_div' >
	<ul  class='sub_menu_area' >
		<li class='line left_line '  ></li>
		
		
		<li submenu_item="picture"   >
			<div  class='center_this '>
					<div  class=' float_left' >
						<input  class='tab_include_checkboxes ' field="contact_picture_checkbox" type="checkbox" value=""   style='border:0'  >
					</div>
					<div  class='float_left'   style='margin-left:4px'  >
						<a href='<?php echo base_url()    ?>index.php/main/index/menu/website/contact/picture' submenu_item='picture'>Picture</a>
					</div>
			</div>
		</li>
		
		
		<li submenu_item="description" ><a  submenu_item="description" href='<?php echo base_url()    ?>index.php/main/index/menu/website/contact/description'>Contact Information</a>&nbsp;</li>
		
		

		
		
		<li submenu_item="social" class='last_submenu_item '   ><a  submenu_item="social" href='<?php echo base_url()    ?>index.php/main/index/menu/website/contact/social'>Social Networks</a></li>
		<li class='line right_line '  ></li>
	</ul>	
</div>	


<script type="text/javascript" language="Javascript">
	
	$(document).ready(function() {

		$('.sub_menu_area_div ul.sub_menu_area li:not(li.line)').unbind('click').css({cursor:'default'})
	
	
	});
			<?php
			if( $website_data['users'][0]->contact_picture_checkbox == 1){
			?>
				$('input[field=contact_picture_checkbox]').attr('checked','checked');			
			<?php     
			}else{
			?>
				$('input[field=contact_picture_checkbox]').removeAttr('checked');			
			<?php     	
			};
			?>
	
</script>
<div  >
	<?php
	 	$this->load->view('main/views/sections/middle_section/middle_section_left/menu/website/website_bottom/'.$website_data['menu_item'].'/'.$website_data['submenu_item'].'.php');  
	?>
</div>																	