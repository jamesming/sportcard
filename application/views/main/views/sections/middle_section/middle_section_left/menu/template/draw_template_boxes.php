<?php     


if( count( $website_data['templates'] )  == 0 ){
	
		$website_data['templates']= array(
			array(
				'name'=>'Coming Soon',
				'id'=>  '0',
			)
		);
};

$count=0;
$count_of_templates = 0 ;
?>
				<div  class='pic_row clearfix' >
				<?php     
				foreach( $website_data['templates']   as  $template){
					
					?>
					
					<style>
					#<?php echo  $template['name']   ?>{
					  background-image: url(<?php  echo base_url()   ?>images/templates/<?php  echo $template['name']   ?>.png);
					  background-position: -320px 0px;
						background-repeat: no-repeat;
					}	
					</style>
					
					<?php     
					
					
					$count++;
					$count_of_templates++;
					?>
					
						<div  class='float_left ' >
							
							<div  class=' preview_template' >
								
								<div  class='select_checkbox float_left'  title='Select this template' >
								</div>
								<div template_id='<?php echo $template['id']    ?>' class='options_button float_left'  href='#bubble_div'  title='Show Options' >
								</div>								
								<div  class='preview_button float_left' template_name='<?php echo $template['name']    ?>'  title='Preview in new window' >
								</div>
								
							</div>
							
							<div class='pic_box' active="1" id='<?php echo $template['name']    ?>' template_id=<?php echo $template['id']    ?> >
								
								<div  class=' transparent_class' >
									<?php  echo $template['name']   ?>
								</div>
								
								
							</div>
							
						</div>
						
						
						
					<?php     
					if( $count_of_templates == count( $website_data['templates']) && count( $website_data['templates']) % 2 == 1){//  is odd -->
						?> 
						
								<div  class='float_left ' >
									<div   style='height:28px'  >&nbsp;
									</div>
									<div  class='pic_box'   style='border:0px'  ></div>
								</div>
						
							</div> <!-- END pic_row  -->
						
					<?php
					}elseif(  $count_of_templates == count( $website_data['templates']) && count( $website_data['templates']) % 2  == 0 ){ //  is even -->
							?>
							
							</div> <!-- END pic_row  -->
							
							<?php						
					}elseif($count == 2){
							$count = 0;
							?>
							</div> <!-- END pic_row  -->
							<div  class='pic_row clearfix' >
							<?php						
						
					};
				}
				?>