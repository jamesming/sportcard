
	<style>

		.preview_template{
		  background-image: url(<?php  echo base_url()   ?>images/select_preview.png);
			<?php if( $website_data['premium'] == 0  && $website_data['menu_item'] == 'premium_menu'){?>
					background-position: 0px -68px;
			<?php }else{?>
					background-position: 0px -34px;
			<?php } ?>
			background-repeat: no-repeat;
			width:285px;
			height:30px;
			margin:0px 0px 3px 0px;
			text-align:center;
			margin-left: 3px;
		}
		.preview_template_selected{
  			background-position: 0px -0px;
		}	
		.preview_template_disabled{
  			background-position: 0px -34px;
		}		
		
		
						.preview_template div{
						      height: 28px;
    							width: 89px;
						}		
		
		div.pic_row {
		  margin-top: 13px;
		}
				div.pic_row div.pic_box {
				    border: 3px solid lightgray;
				    height: 150px;
				    margin-right: 20px;
				    width: 335px;
				    text-align:center;
				    padding:80px 0px 0px 0px;
				}
				
						div.pic_row div.pic_box div{
								font-weight:bold;
								font-size:30px;
								color:lightgray;
								display:inline;
								padding:8px 21px;
						}
#bubble_div{
	width:400px;
	height:160px;
	display:none;
}
		#iframe_src_for_speech_bubble{
			width:400px;
		}	
	</style>	

																
<script type="text/javascript" language="Javascript">
$(document).ready(function() {
	
	<?php if( count( $website_data['templates'] )  != 0 ){?>
		
		
						$('div.select_checkbox')
						
								<?php if( $website_data['premium'] 	 == 1  
											 || $website_data['menu_item'] == 'basic_menu' 
								){?>
						
										.css({cursor:'pointer'})
										
								<?php } ?>
						
								.click(function(event) {
									$(this).parent().next().click();
								});	
										
										
						$('div.options_button').css({cursor:'pointer'}).fancyZoom().click(function(event) {
							$("#iframe_src_for_speech_bubble").attr('src','<?php echo base_url();    ?>index.php/main/speech_bubbble_form/'+$(this).attr('template_id'));
						});		
		
						$('.pic_box[active="1"]')
						
								<?php if( $website_data['premium'] 	 == 1  
											 || $website_data['menu_item'] == 'basic_menu'
											 || $website_data['which_menu'] == 'start' 
								){?>
									
												.css({cursor:'pointer'})
												.click(function(e) {   
													
													ele = $(this);
													
													$('.pic_box').prev().css({
													'background-position':'0px -34px'
													})
													
													ele.prev().css({
													'background-position':'0px 0px'
													})
													
													uri_location = $(this).attr('id'); 
													
							
													$.post("<?php echo base_url(). 'index.php/main/update_template';    ?>",{
														template_id: $(this).attr('template_id')
														},function(data) {
															
															 $('div[active="1"]').css({border:'3px solid lightgray'});
															 
															 ele.css({border:'3px solid <?php  echo $website_data['blue']   ?>'});	
															 
															 
																$('.your_website_middle').html(data);
															 
															 						
													 });						 
													 
												})								
								
								<?php } ?>
						

								
								
						
						$('div.preview_button').css({cursor:'pointer'})
								.click(function(e) {
									
									window_num = 1;
									window[window_num] = open('<?php echo  base_url();   ?>index.php/themes/'  + $(this).attr('template_name') , window_num ,"");
									
								})
						
						$('.pic_box[template_id="<?php echo $website_data['template_id']    ?>"]').css({border:'3px solid <?php echo $website_data['blue']    ?>'})
						.prev().css({
							
							
								<?php if( $website_data['premium'] == 0  && $website_data['menu_item'] == 'premium_menu'){?>
										'background-position': '0px -68px'
								<?php }else{?>
										'background-position':'0px 0px'
								<?php } ?>
							
							
							})
		
	<?php }else{ ?>
	
			$('.preview_template').css({
				'background-position': '0px -102px'
				})
	
	
	<?php }?>	
	
	

})
</script>

<div id="bubble_div">
				

		<iframe id="iframe_src_for_speech_bubble" 
			frameborder="0" scrolling=no src=""   >
			
		    <p>Your browser does not support iframes.</p>
		    
		</iframe>				

</div>	

<?php  $this->load->view('footer/fancy_zoom.php');   ?>
	