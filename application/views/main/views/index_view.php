<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	$this->load->view('header/blueprint_css.php');  ?>
<?php     	$this->load->view('header/common_css.php');  ?>


<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
<?php     	$this->load->view('footer/transparent_button_css_and_script');  ?>


<style>
body{
	 background:#E2E2E2;
}
.middle_section{
padding:2px 0px 0px 0px;	
}

		.middle_section_left {
		}
		
				.middle_section_left div#main_area{
					
				}
				
						.middle_section_left div.middle_section_box{
							min-height:800px;
						}
		
		.middle_section_right{
		    margin-left: 6px;
		}
				.middle_section_right div.middle_section_right_box{
				height:200px;
				background:white;	
				}

</style>

</head>

<html>

<body>

<?php
     	$this->load->view('main/views/sections/top_section.php');
?>

<div  class='container middle_section'  >
	
										<div class='middle_section_left float_left' >
											
												<div  id='main_menu_bar' class=' three_quarters_column'  >

													<?php
													
													if( $website_data['which_menu'] == 'start'){
														$this->load->view('main/views/sections/middle_section/middle_section_left/start.php'); 
													}elseif( $website_data['which_menu'] == 'menu'){
													 	$this->load->view('main/views/sections/middle_section/middle_section_left/menu.php');  
													}elseif( $website_data['which_menu'] == 'account'){
														
													}elseif( $website_data['which_menu'] == 'help'){
														
													};
													
													
													
													?>
													
												</div>
												
												<div  id='main_area' class=' three_quarters_column'  >
													
													<div  class=' rounded_bg' >
														<div class="top">
															<div class="sub_top">&nbsp;</div>
														</div>
													  <div class="middle middle_section_box">

																	<?php
																	     	
																			if( $website_data['which_menu'] == 'start' ){																     	
																				$this->load->view('main/views/sections/middle_section/middle_section_left/start/start'.$website_data['menu_selected'].'.php');  
																			}elseif( $website_data['which_menu'] == 'menu' ){
																				$this->load->view('main/views/sections/middle_section/middle_section_left/menu/'.$website_data['menu_selected'].'.php');  
																			}elseif( $website_data['which_menu'] == 'account'){
																				$this->load->view('main/views/sections/middle_section/middle_section_left/account.php');  
																			}elseif( $website_data['which_menu'] == 'help'){
																				$this->load->view('main/views/sections/middle_section/middle_section_left/help.php');  	
																			}elseif( $website_data['which_menu'] == 'message'){
																				$this->load->view('main/views/sections/middle_section/middle_section_left/message.php');  	
																			};
  	
																	?>
															
														</div>
														<div class="bottom"><div class="sub_bottom">&nbsp;</div></div>
													</div>							
													
												</div>
												
										</div>

										<div  class='middle_section_right float_left' >
											
												<?php
												     $this->load->view('header/right_box_css.php');
												     $this->load->view('main/views/sections/middle_section/middle_section_right/your_website_link.php');
												     
												     if( $website_data['premium'] == 0){
																	$this->load->view('main/views/sections/middle_section/middle_section_right/upgrade_ad.php');
												     };
												     
												     //$this->load->view('main/views/sections/middle_section/middle_section_right/facebook_share.php');
												?>											
									
										</div>
										
										
											
	
</div>

</body>
</html>


<script type="text/javascript" language="Javascript">
$(document).ready(function() {
	
				$('#logo').click(function(event) {				
						document.location.href='<?php echo  base_url();   ?>index.php/home';
				});	
				
				
				$('#logout').click(function(event) {				
						document.location.href='<?php echo  base_url();   ?>index.php/home/logout';
				});
				
					
				$('.center_this').each(function(event) {
					
								var width_of_this = 0;
					
								$(this).children().each(function(event) {
										width_of_this = width_of_this +	$(this).width();
								});	
			
								$(this).css({
									'margin-left':($(this).parent().width() - width_of_this)/2+'px'
								})				
				});	
				

				
				
				
});		


</script>

