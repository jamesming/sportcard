
<?php     	$this->load->view('header/submenu_area_css.php');  ?>
<style>
.sub_menu_area_div {
    margin-top: 15px;
}
</style>

<div  class='aboutme_top'  >
	<?php
		$this->load->view('main/views/sections/middle_section/middle_section_left/menu/aboutme/aboutme_top/aboutme_menu.php');  		
	?>	
</div>	
<div  class='aboutme_bottom ' >
	<?php
	 	$this->load->view('main/views/sections/middle_section/middle_section_left/menu/aboutme/aboutme_bottom/'.$website_data['menu_item'].'.php');  
	?>
</div>			
