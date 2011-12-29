<?php     	$this->load->view('header/submenu_area_css.php');  ?>
<style>
.sub_menu_area_div {
    margin-top: 15px;
}</style>

																<div  class='dashboard_top'  >
																	<?php
																		$this->load->view('main/views/sections/middle_section/middle_section_left/menu/dashboard/dashboard_top/dashboard_menu.php');  		
																	?>	
																</div>	
																<div  class='dashboard_bottom ' >
																	<?php
																	 	$this->load->view('main/views/sections/middle_section/middle_section_left/menu/dashboard/dashboard_bottom/'.$website_data['menu_item'].'.php');  
																	?>
																</div>			
																
<script type="text/javascript" language="Javascript">

	
$(document).ready(function() {
	$('.sub_menu_area_div ul.sub_menu_area li[dashboard_submenu_item="<?php echo $website_data['dashboard_submenu_item']    ?>"]').css({background:'#C0C0C0',color:'white'});
	$('.sub_menu_area_div ul.sub_menu_area li[dashboard_submenu_item="<?php echo $website_data['dashboard_submenu_item']    ?>"] a').css({color:'white'});
})

</script>						




