<style>
#reels_container_wrapper{
	margin:0px 0px 0px 10px;
	padding:10px 0px 0px 0px;
	clear:both;
}
.add_more_margin_on_left{
	margin-left:10px;
}
</style>

<div  id='reels_container_wrapper'>
		<div  class=' label_header add_more_margin_on_left' >
		Video Gallery
		</div>
		<div  class=' label_description add_more_margin_on_left' >
			<?php  echo $website_data['header_description']   ?>
		</div>
	
		<?php     
		$this->load->view('main/views/sections/middle_section/middle_section_left/menu/website/website_bottom/reels_main_section_with_script.php');
		?>
																		
</div>																		
																		
