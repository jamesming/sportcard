<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href="<?php  echo base_url()   ?>bootstrap/css/bootstrap.css" rel="stylesheet">
<?php 
	if( $data['live_only'] == 1 ){
		$this->load->view('header/live_mode_css.php');
	}else{
		$this->load->view('header/edit_mode_css.php');
	};  
?> 

<?php 
		$this->load->view('header/javascript_includes.php');
?> 

</head>

<html>
	
	

<body>
          <div id="navbar-example" class="navbar  navbar-fixed-top">

            <div class="navbar-inner">

              <div class="container" >

                <a class="brand" href="#">SPORTCARD</a>

                <ul class="nav  pull-right ">
									<li class=" ">
									
										<a  id='test'  href='#fancyZoom_div' >Test</a>
									
									</li>

									<li class=" ">
									
										<a  id='edit_mode'>Preview</a>
									
									</li>

			            <li class="dropdown">
			
			              <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Sportcard<b class="caret"></b></a>
			
			              <ul id="menu1" class="dropdown-menu">
			
			                <li><a id='edit_profile_menu_item'>Edit Profile</a></li>
			
			                <li><a id='settings_menu_item'>Settings</a></li>
	
			                <li class="divider"></li>			                
			
			                <li><a id='logout'>Log Out</a></li>
			
			              </ul>
			
			            </li>                  
                  
                </ul>

                

              </div>

            </div>

          </div>
	
	

	
	<div  id='main-box' class='container '>
	
				<div  id='head-line-box' class=" transparent rounded draggable box " >
					<div class='window-controls-container top-left-rounded top-right-rounded'>
						<div class="handle icon-boxes top-right-rounded">
						<i class="icon-move"></i>	
						</div>
					</div>

					<div  id='full_name_readonly'>
					</div>
				</div>
	
<?php 
	if( $data['live_only'] == 0 ){
		$this->load->view('main/edit_mode/settings_dom.php');
	};  
?> 
				
				<div  id='profile_box' class="draggable box rounded shadowed" >
					
					
					
					<div  class='window-controls-container rounded'   style='margin-bottom:-40px;padding-top: 8px;'  >
						<div class="handle icon-boxes top-right-rounded">
							<i class="icon-move"></i>
						</div>
						<div  class='close-window icon-boxes' >
							<i class="icon-minus"></i>
						</div>					
					</div>
					
					
					<div  id='panel-tabs_container' class="tabbable"   style='padding:10px'  >
						
						
					  <ul class="nav nav-tabs"   style='margin-top:10px;'  >
					    <li  id='panel-tab-1' class="active"><a href="#1" data-toggle="tab">Background</a></li>
					    <li  id='panel-tab-2' ><a href="#2" data-toggle="tab">Bio</a></li>
					    <li  id='panel-tab-3' ><a href="#3" data-toggle="tab">Styles</a></li>
					    <li  id='panel-tab-4' ><a href="#4" data-toggle="tab">Photos</a></li>
					    <li  id='panel-tab-5' ><a href="#5" data-toggle="tab">Videos</a></li>
					  </ul>
					  
					  
					  <div class="tab-content">
					    <div class="tab-pane active" id="1">
					      

															<div  class='clearfix'   >
																
																<table style='width:100%'  >
																	
																	
																	<tr>
																		<td align='left' class='profile-label ' >Backgrounds
																		</td>
																		<td >

																			<div id="upload_button_backgrounds"  class='btn float_right'   >		
																			</div>															
																		</td>
																	</tr>
																</table>
																

															</div>
	
	
															<div  id='backgrounds-div' class='clearfix jcarousel-skin-tango'>
																<ul class='thumbs-ul'   >
																	
																<?php if( isset($data['users']['backgrounds']['images']) ){?>
																	
																	<?php foreach( $data['users']['backgrounds']['images']  as $image_id){?>
	
																		<li   style='background:url(<?php echo base_url()     ?>uploads/<?php echo $data['user_id']    ?>/<?php echo $image_id    ?>/image_thumb.jpg)'  class='hovering ' image_id='<?php  echo $image_id   ?>'  image_type_id='0'  >
																			<div  class='small_icons_panel transparent'   style='height:51px !important'  >
																				<div  class='delete float_right' ><i class="icon-trash icon-white"></i>
																				</div><!-- 
																				<div  class='hide update-image backgrounds_update_button' >[<?php echo $image_id     ?>]
																				</div> -->
																				<div  class='swap float_right ' ><i class="icon-refresh icon-white"></i>
																				</div>																																							
																			</div>
																			<div  class='inside_li images_preview' >
																			</div>
																		</li>
																	
																	<?php } ?>
	
															
																<?php } ?>
																	
																	
																</ul>															
															</div>

							
					    </div>
					    <div class="tab-pane " id="2">
								<div>
										<legend >Edit you Bio</legend>
								</div>
								<div>
								    <div class="span4">
								
								      <form class="form-horizontal">
								
								        <fieldset>

       
								         <?php foreach( $data['input_bio_array']['inputs']  as  $inputs){ 
								         
								         
								         				if( $inputs['type'] == 'text'){?>
								         					
														          <div class="control-group">
														
														            <label class="control-label" for="<?php echo $inputs['input_name']    ?>"><?php echo $inputs['label']    ?></label>
														
														            <div class="controls">
														
														              <input type="text" class="<?php echo $data['input_bio_array']['size-class']    ?> bio_inputs '  id='<?php echo $inputs['input_name']    ?>' name="<?php echo $inputs['input_name']    ?>" type="" value="<?php  echo $data['users'][0][$inputs['input_name']]   ?>">
														
														            </div>
														
														          </div>										         				
								         				
								         				<?php
								         				}elseif( $inputs['type'] == 'select'){
								         				?>	
								         					
														          <div class="control-group">
														
														            <label class="control-label" for="<?php echo $inputs['input_name']    ?>"><?php echo $inputs['label']    ?></label>
														
														            <div class="controls">
														
														              <select  class="<?php echo $data['input_bio_array']['size-class']    ?> bio_inputs " id='<?php echo $inputs['input_name']    ?>' name='<?php echo $inputs['input_name']    ?>'>
														              	
														              						<?php foreach( $inputs['options']  as  $option){ ?>	
														              							
																																	<option value="<?php echo $option['value']    ?>"><?php echo $option['text']    ?></option>
																																	
																											<?php } ?>	
														              </select>
														
														            </div>
														
														          </div>
								         					
								         				<?php
								         				};
								         			 
								         } ?>

								        </fieldset>
								
								      </form>
								
								    </div>
								 		<div class="span4"     >

																	<style>
																	#wysiwyg_div{
																	margin:0px 0px 0px 40px;
																	padding:0px 0px 0px 0px;
																	}
																	
																	</style>
																	

																	
																		<div id='wysiwyg_div' class='clearfix '    >
																				<textarea name='bio' class='bio_inputs clearfix' id='wysiwyg_text_area'><?php echo ( isset( $data['users'][0]['bio'] ) ? $data['users'][0]['bio']:'' )    ?></textarea>
																		</div>								 			
										</div>									
									
								</div>
			          <div class='clearfix'  style='padding:26px'  >
			
			            <button  id='save_bio_button' type="submit" class="float_right btn btn-primary">Save changes</button>
			
			          </div>

							</div>
	
							<style>
							.profile-label{
								font-size: 19.5px;
								line-height: 36px;	
							}
							</style>
	
					    <div class="tab-pane " id="3">
					    	
								<div>
										<legend >Edit you Styles</legend>
								</div>	
					    	
								      <form class="form-horizontal">
								
													<div  class=' span5e' >
														
											         <?php foreach( $data['input_style_array']['inputs']  as  $inputs){ 
											         
											         
											         				if( $inputs['type'] == 'text'){?>
											         					
																	          <div class="control-group">
																	
																	            <label class="control-label" for="<?php echo $inputs['input_name']    ?>"><?php echo $inputs['label']    ?></label>
																	
																	            <div class="controls">
																	
																	              <input   id='<?php echo $inputs['input_name']    ?>' name='<?php echo $inputs['input_name']    ?>' class="<?php echo $data['input_bio_array']['size-class']    ?> style_inputs ' type="text" value="<?php  echo $data['users'][0][$inputs['input_name']]   ?>">
																	
																	            </div>
																	
																	          </div>										         				
											         				
											         				<?php
											         				}elseif( $inputs['type'] == 'select'){
											         				?>	
											         					
																	          <div class="control-group">
																	
																	            <label class="control-label" for="<?php echo $inputs['input_name']    ?>"><?php echo $inputs['label']    ?></label>
																	
																	            <div class="controls">
																	
																	              <select  class="<?php echo $data['input_bio_array']['size-class']    ?> style_inputs " id='<?php echo $inputs['input_name']    ?>' name='<?php echo $inputs['input_name']    ?>'>
																	              	
																	              						<?php foreach( $inputs['options']  as  $option){ ?>	
																	              							
																																				<option value="<?php echo $option['value']    ?>"><?php echo $option['text']    ?></option>
																																				
																														<?php } ?>	
																	              </select>
																	
																	            </div>
																	
																	          </div>
											         					
											         				<?php
											         				};
											         			 
											         } ?>														
													</div>
       										<div  class=' span5'>
			
										          <div class="control-group">
										
										            <label class="control-label" for="">Fonts</label>
										
										            <div class="controls">
																	<style>
																		ul#fonts_ul {
																		    border: 1px solid #CCCCCC;
																		    height: 220px;
																		    overflow-y: scroll;
																				border-top-left-radius: 3px;
																				border-top-right-radius: 3px;
																				-moz-border-radius-topleft: 3px;
																				-moz-border-radius-topright: 3px;
																				-webkit-border-top-right-radius: 3px;
																				-webkit-border-top-left-radius: 3px;
																				border-bottom-left-radius: 3px;
																				border-bottom-right-radius: 3px;
																				-moz-border-radius-bottomleft: 3px;
																				-moz-border-radius-bottomright: 3px;
																				-webkit-border-bottom-right-radius: 3px;
																				-webkit-border-bottom-left-radius: 3px;																		    
																		}
																		ul#fonts_ul li {
																		  	border-bottom: 1px solid #CCCCCC;
																		 }
																	</style>
																	<ul  id='fonts_ul'  class=" unstyled">
																		<?php foreach($data['fonts'] as $font ){?>
																			
																			<li  class='fonts_li ' font_name='<?php echo $font->name    ?>' '  style='font-size:24px'  '><?php  echo $font->name   ?></li>
																		
																		<?php }?>
																	</ul>
																	
																	
										            </div>
										
										         	</div>
       											
       											
       										</div>




								
								      </form>
					    	
					    	





					    </div>
					    <div class="tab-pane " id="4">

								<div  class='clearfix'   >
									
									<table style='width:100%'  >
										
										
										<tr>
											<td align='left' class='profile-label ' >Photo Gallery
											</td>
											<td >
												<!-- STYLE ICON IN BUTTON USING js/fileuploader.js line 511  -->
												<div id="upload_button_pictures"   class='btn float_right'    />		</div>													
											</td>
										</tr>
									</table>
									

								</div>									
	
								<div  class='clearfix ' >  
															<div  id='pictures-div' class='mycarousel jcarousel-skin-tango'  >

																<ul class='thumbs-ul'   >
	
																						
																						<?php if(  isset($data['users']['pictures']['images'])  ){?>
																						
																																						<?php foreach( $data['users']['pictures']['images']  as $image_id){?>
																						
																																							<li   style='background:url(<?php echo base_url()     ?>uploads/<?php echo $data['users']['pictures']['user_id']    ?>/<?php echo $image_id    ?>/image_thumb.jpg)'  class='hovering ' image_id='<?php  echo $image_id   ?>'  image_type_id='1'  >
																																								<div  class='small_icons_panel transparent'   >
																																									<div  class='delete ' ><i class="icon-trash icon-white"></i>
																																									</div>
																																									<div  class='hide update-image  pictures_update_button' >[E]
																																									</div>																																				
																																								</div>
																																								<div  class='inside_li images_preview' >
																																								</div>																		
																																							</li>
																																						
																																						<?php } ?>
																						
																						<?php } ?>
	
																	
																	
																</ul>															
															</div>
									    	
								</div>

					    </div>		
					    			    
					    <div class="tab-pane " id="5">
					  

																		
															<div  class='clearfix'   >
																
																<table style='width:100%'  >
																	
																	
																	<tr>
																		<td align='left' class='profile-label ' >Video Gallery
																		</td>
																		<td >
																		<form 
																			id='form_video' 
																			target='iframe_dom' 
																			enctype='multipart/form-data' 	
																			method='POST'  
																			action='<?php echo base_url();    ?>index.php/main/update_video'
																			>
																			<a id="video_submit" class='btn float_right'   style='margin-left:10px'   ><i class="icon-facetime-video"></i> submit</a>	
																			<input  class='float_right ' name="video_url" id="video_url" type="text" value="">
																			
																			<input name="image_id"  type="hidden" value="0">
																			<input name="li_index"  type="hidden" value="-1">
																			
																		</form>																					
																		</td>
																	</tr>
																</table>
																

															</div>

															<div  id='videos-div' class='mycarousel jcarousel-skin-tango clearfix'>
																<ul class='thumbs-ul'   >
																	
																		<?php if( isset($data['users']['videos']['images']) ){?>
																		
																																		<?php foreach( $data['users']['videos']['images']  as $image_id){?>
																			
																																				<li style='background:url(<?php echo base_url()     ?>uploads/<?php echo $data['users']['videos']['user_id']    ?>/<?php echo $image_id    ?>/image_thumb.jpg)'  class='hovering ' image_id='<?php  echo $image_id   ?>'  image_type_id='2'  >
																																					<div  class='small_icons_panel transparent' >
																																						<div  class='delete ' ><i class="icon-trash icon-white"></i>
																																						</div>
																																						<div  class='hide update-video_url '  >[E]
																																						</div>																																					
																																					</div>
																																					<div  class='inside_li videos_preview' >
																																					</div>																			
																																				</li>
																																				
																																		<?php };?>
																		
																		<?php } ?>
																	
																	
																</ul>															
															</div>

					    </div>						    
					  </div>
					</div>
					
					<div  id='preview_box'>
						<div  id='preview_box_inside'>
						</div>
					</div>

				</div>
				
	</div> 
	
	<iframe  
		id="iframe_dom"   
		name="iframe_dom"
		style='background:white;border:0px solid gray;width:0px;height:0px'  
		border="1" 
		frameborder="1" 
		scrolling="auto" 
		align="center" 
		hspace="0" 
		vspace="">
	</iframe>		


	<div  id='fancyZoom_div'   style='z-index:999999999'  >
		<iframe  
			id="iframe_fancyZoom"   
			name="iframe_fancyZoom"
			style='background:white;border:0px solid gray;width:0px;height:0px'  
			border="1" 
			frameborder="1" 
			scrolling="auto" 
			align="center" 
			hspace="0" 
			vspace="">
		</iframe>		
	</div>	

</body>
</html>

<?php 
		$this->load->view('footer/document_ready.php');
?> 




