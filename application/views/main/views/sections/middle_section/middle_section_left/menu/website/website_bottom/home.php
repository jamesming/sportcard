<div  class='working_area_wrapper ' >
		<div  class=' label_header'  style='padding-right:5px;'>
		Home Page
		</div>	
	
</div>




<style>
.sub_menu_area_div ul.sub_menu_area li {
    width: 130px;
}	
.sub_menu_area li div{
	margin:0px 0px 0px 6px;
}
</style>

<div  class='sub_menu_area_div' >
	<ul  class='sub_menu_area' >
		<li class='line left_line '  ></li>
		<li submenu_item="picture"  class=' ' >
			
				<div  class=''>
					<div  class=' float_left' >
						<input home_page_format=1 class='radio_box '  checked name="format"  type="radio" value="1"   >
					</div>
					<div  class='float_left' >
						<a href='<?php echo base_url()    ?>index.php/main/index/menu/website/home/picture' submenu_item='picture'>Picture</a>
					</div>
				</div>
			
			
			
		</li>
		<li submenu_item="slideshow" >
			
				<div  class=''>
					<div  class=' float_left' >
						<input home_page_format=2 class='radio_box '  name="format" type="radio" value="2"   >
					</div>
					<div  class='float_left' >
						<a href='<?php echo base_url()    ?>index.php/main/index/menu/website/home/slideshow' submenu_item='slideshow'>Slide Show</a>
					</div>
				</div>
			
			
			
		</li>
		
		<li submenu_item="background" class='last_submenu_item '   >
			
				<div  class=''>
					<div  class=' float_left' >
						<input home_page_format=3 class='radio_box '  name="format" type="radio" value="3"   >
					</div>
					<div  class='float_left' >
						<a href='<?php echo base_url()    ?>index.php/main/index/menu/website/home/background' submenu_item='background'>Background</a>
					</div>
				</div>
			
			
			
		</li>		
		
		
		
		<li class='line right_line '  ></li>
	</ul>	
</div>	


<div   class=' clearfix' >
	<?php
	 	$this->load->view('main/views/sections/middle_section/middle_section_left/menu/website/website_bottom/'.$website_data['menu_item'].'/'.$website_data['submenu_item'].'.php');  
	?>
</div>


<script type="text/javascript" language="Javascript">
$(document).ready(function() {
	
	$('.sub_menu_area_div ul.sub_menu_area li:not(li.line)').unbind('click').css({cursor:'default'})
	
	
	$('.radio_box').click(function(event) {
				
			$.post("<?php echo base_url(). 'index.php/main/update_database';    ?>",{
				method:'update_radio',
				table:'users',
				field:'home_page_format',
				value:$(this).val()
				},function(data) {
			 });

				
	});
	
	$('input.radio_box[home_page_format=<?php echo $website_data['users'][0]->home_page_format    ?>]').attr('checked','checked');		
			
	
})



</script>
