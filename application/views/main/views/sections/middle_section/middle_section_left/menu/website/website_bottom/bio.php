
<div  class='working_area_wrapper'>
		<div  class='label_header'  style='padding-right:9px;'>
			Biography
		</div>
</div>
<div  class='sub_menu_area_div' >
	<ul  class='sub_menu_area' >
		<li class='line left_line '  ></li>
		
		
		<li submenu_item="picture"  class='last_submenu_item ' >
			<div  class='center_this '>

					<div  class=' float_left' >
						<input  class='tab_include_checkboxes ' field="bio_picture_checkbox" type="checkbox" value=""   style='border:0'  >
					</div>
					<div  class='float_left'   style='margin-left:4px'  >
						<a href='<?php echo base_url()    ?>index.php/main/index/menu/website/bio/picture' submenu_item='picture'>Picture</a>
					</div>
			</div>
		</li>
		
		<li  class='last_submenu_item ' submenu_item="description" ><a href='<?php echo base_url()    ?>index.php/main/index/menu/website/bio/description' submenu_item='description'>Description</a>&nbsp;</li>


		<li class='line right_line '  ></li>
	</ul>	
</div>	

<script type="text/javascript" language="Javascript">
	
	$(document).ready(function() {

		$('.sub_menu_area_div ul.sub_menu_area li:not(li.line)').unbind('click').css({cursor:'default'})
	
	
			<?php
			if( $website_data['users'][0]->bio_picture_checkbox == 1){
			?>
				$('input[field=bio_picture_checkbox]').attr('checked','checked');			
			<?php     
			}else{
			?>
				$('input[field=bio_picture_checkbox]').removeAttr('checked');			
			<?php     	
			};
			?>
	})
	
</script>
<div   class=' clearfix' >
	<?php
	 	$this->load->view('main/views/sections/middle_section/middle_section_left/menu/website/website_bottom/'.$website_data['menu_item'].'/'.$website_data['submenu_item'].'.php');  
	?>
</div>

