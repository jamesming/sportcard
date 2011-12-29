<style>
#working_area_wrapper{
	padding:0px 0px 20px 0px;
}
</style>

<div  id='working_area_wrapper'>
	
		<div>
			<div  class='float_left label_header'  style='padding-right:7px;'>
			Template
			</div>
<?php     
						$this->load->view('main/views/sections/middle_section/middle_section_left/start/continue_button'); 
?>
		</div>
	

		<div  class='clearfix label_description add_more_margin_on_left' >
			Choose a standard template to start.  You will have the option to upgrade for more fancy website templates later.
					
		</div>
		
		
		
<?php

 	$this->load->view('main/views/sections/middle_section/middle_section_left/menu/template/draw_template_boxes.php');  

 	$this->load->view('main/views/sections/middle_section/middle_section_left/menu/template/preview_select_template_script.php');  


?>
		
		
</div>

<?php     
															$this->load->view('main/views/sections/middle_section/middle_section_left/start_next_page_script.php'); 
?>
