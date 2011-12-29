


<style>
							.sub_menu_area_div ul.sub_menu_area li {
							    width: 90px;
							}

</style>


<div  class='sub_menu_area_div' >
	<ul  class='sub_menu_area' >
		<li class='line left_line '  ></li>
		<li submenu_item="plain" ><a href='<?php echo base_url()    ?>index.php/main/index/menu/template/<?php echo $website_data['menu_item']    ?>/plain'>Plain</a>&nbsp;</li>
		<li submenu_item="vertical" ><a href='<?php echo base_url()    ?>index.php/main/index/menu/template/<?php echo $website_data['menu_item']    ?>/vertical'>Vertical</a>&nbsp;</li>
		<li submenu_item="horizontal"  class='last_submenu_item ' ><a href='<?php echo base_url()    ?>index.php/main/index/menu/template/<?php echo $website_data['menu_item']    ?>/horizontal'>Horizontal</a>&nbsp;</li>
		<li class='line right_line '  ></li>
	</ul>	
</div>	

<div  >
	<?php
	 	$this->load->view('main/views/sections/middle_section/middle_section_left/menu/template/template_bottom/'.$website_data['menu_item'].'/'.$website_data['submenu_item'].'.php');  
	?>
</div>	