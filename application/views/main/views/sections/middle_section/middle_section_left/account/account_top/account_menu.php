<?php     	$this->load->view('header/menu_area_css.php');  ?>
<style>
.menu_area_div ul#menu_area li{
width:120px;
}</style>

<div  class='menu_area_div ' >
		<ul  id='menu_area' >
			<li class='account_menu_li  menu_item' ><a  id='changepassword'  >My Password</a></li>
			<li class='account_menu_li  menu_item ' ><a  id='change_profile_url'   >Profile Link</a></li>
					<?php if( $website_data['premium'] == 0){ ?>
					
							<li class='account_menu_li  menu_item last_li' ><a  id='upgrade'  >Upgrade</a></li>
				
					<?php }else{?>
							
							<li class='account_menu_li  menu_item' ><a  id='level' ' >Account Level</a></li>
							<li class='account_menu_li  menu_item last_li' ><a  id='payment'   >My Payment</a></li>
							
					<?php } ?>
			
			
		</ul>	
</div>
