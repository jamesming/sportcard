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


                  
			            <li class="dropdown">
			
			              <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Sportcard<b class="caret"></b></a>
			
			              <ul id="menu1" class="dropdown-menu">
			
			                <li><a id='edit_profile_menu_item'>Edit Profile</a></li>
			
			                <li><a id='settings_menu_item'>Settings</a></li>
			
			                <li><a id='logout'>Log Out</a></li>
			
			                <li class="divider"></li>
			
			                <li><a href="#">Separated link</a></li>
			
			              </ul>
			
			            </li>                  
                  
                </ul>

                

              </div>

            </div>

          </div>
	
	

	
	<div  id='main-box' class='container '>
	
				<div  id='head-line-box' class=" transparent rounded draggable box " >
					<div class='window-controls-container top-left-rounded top-right-rounded'>
						<div class="handle icon-boxes top-right-rounded"></div>
					</div>
					<div  class='insides' >
					</div>
					<div  id='full_name_readonly'>
					</div>
				</div>
	
<?php 
	if( $data['live_only'] == 0 ){
		$this->load->view('main/edit_mode/settings_dom.php');
	};  
?> 
				
				<div  id='profile_box' class="draggable box rounded"  >
					<div  class='window-controls-container rounded'>
						<div class="handle icon-boxes top-right-rounded">
						</div>
						<div  class='close-window icon-boxes' >
						</div>					
					</div>
					
					
					<div class="tabbable"   style='padding:10px'  >
						
						
					  <ul class="nav nav-tabs"   style='margin-top:10px;'  >
					    <li class="active"><a href="#1" data-toggle="tab">Background</a></li>
					    <li><a href="#2" data-toggle="tab">Bio</a></li>
					    <li><a href="#3" data-toggle="tab">Color and Fonts</a></li>
					    <li><a href="#4" data-toggle="tab">Photos</a></li>
					    <li><a href="#5" data-toggle="tab">Videos</a></li>
					  </ul>
					  
					  
					  <div class="tab-content">
					    <div class="tab-pane active" id="1">
					      <p>	
					      	<table>
													<tr>
	
														<td ><!--
															<div  id='add-to' image_id='0' image_type_id='0' li_index='-1' class='upload_button'>upload
															</div>-->
														<a href="#"  class='btn ' ><i class="icon-upload"></i> Upload</a>
															
														<div id="upload_button_backgrounds"  >		
															<noscript>			
																<p>Please enable JavaScript to use file uploader.</p>
																<!-- or put a simple form for upload here -->
															</noscript>         
														</div>
															
															
														</td>													
													</tr>
	
													<tr>
														<td>
	
	
															<div  id='backgrounds-div' class=' jcarousel-skin-tango'>
																<ul class='thumbs-ul'   >
																	
																<?php if( isset($data['users']['backgrounds']['images']) ){?>
																	
																	<?php foreach( $data['users']['backgrounds']['images']  as $image_id){?>
	
																		<li   style='background:url(<?php echo base_url()     ?>uploads/<?php echo $data['user_id']    ?>/<?php echo $image_id    ?>/image_thumb.jpg)'  class='hovering ' image_id='<?php  echo $image_id   ?>'  image_type_id='0'  >
																			<div  class='small_icons_panel transparent' >
																				<div  class='delete ' >[X]
																				</div>
																				<div  class='hide update-image backgrounds_update_button' >[<?php echo $image_id     ?>]
																				</div>
																				<div  class='swap ' >[C]
																				</div>																																							
																			</div>
																			<div  class='inside_li images_preview' >
																			</div>
																		</li>
																	
																	<?php } ?>
	
															
																<?php } ?>
																	
																	
																</ul>															
															</div>
	
														</td>
													</tr>												
												</table>
								</p>
					    </div>
					    <div class="tab-pane " id="2">
					      <p>
													<div  class='large_header ' >Edit you Bio
													</div>
	
													
													<div  class='middle ' >
														<div   class='halves '  >
													
															<table>
																<tr>
																	<td colspan=2>
																		General Info
																	</td>
																</tr>		
																<tr>
																	<td>
																		<div  class='input-label ' >First Name
																		</div>
																		<div>
																			<input  class='bio_inputs '  id='first_name' name="first_name" type="" value="">
																		</div>
																	</td>
																	<td>
																		<div  class='input-label ' >Last Name
																		</div>
																		<div>
																			<input   class='bio_inputs '  id='last_name' name="last_name"  type="" value="">
																		</div>																				
																	</td>
																</tr>
																<tr>
																	<td>
																		<div  class='input-label ' >Position or Title
																		</div>
																		<div>
																			<input   class='bio_inputs '  id='position' name="position" type="" value="">
																		</div>
																	</td>
																	<td>
																		<div  class='input-label ' >School, Team, or Organization
																		</div>
																		<div>
																			<input   class='bio_inputs '  id='organization' name="organization" type="" value="">
																		</div>																				
																	</td>
																</tr>
																<tr>
																	<td>
																		<div  class='input-label ' >Hometown or Location
																		</div>
																		<div>
																			<input   class='bio_inputs '  id='location' name="location" type="" value="">
																		</div>																		
																	</td>
																	<td>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div  class='input-label ' >sports
																		</div>	
																		<select   class='bio_inputs '  id='sports' name='sports'>
																			<option>Football</option>
																			<option>Baseball</option>
																			<option>Soccer</option>
																		</select>																																	
																	</td>
																	<td>
	
																	</td>
																</tr>
																<tr>
																	<td>
																	</td>
																	<td>
																	</td>
																</tr>																																																												
															</table>
														</div>
														<div    class='halves ' >
															
																	<style>
																	#wysiwyg_div{
																	width:400px;
																	height: 580px;
																	margin:0px 0px 0px 0px;
																	padding:10px 0px 0px 0px;
																	}
																	.save{
																	background-image: url(<?php echo base_url()    ?>images/disk_save.png);
																	background-position: 3px 3px;
																	background-repeat: no-repeat;	
																	height: 22px;
																	width: 22px;
																	cursor:pointer;
																	}
																	#save_text{
																	color:gray;
																	margin:5px 0px 0px 5px;	
																	font-weight:bold;
																	cursor:pointer;
																	}
																	.loading{
																	background-image: url(<?php echo base_url()    ?>images/ajax-loader.gif);
																	background-position: 5px 4px;
																	background-repeat: no-repeat;
																	height: 22px;
																	width: 22px;	
																	}
																	</style>
																	
																		<div>
																					<div  class='save float_left'  title='Save'>
																					</div>
																					<div  id='save_text' class='float_left' >Save
																					</div>
																		</div>
																	
																		<div id='wysiwyg_div' class='clearfix ' >
																				<textarea  name='bio' class='bio_inputs clearfix' id='wysiwyg_text_area'><?php echo ( isset( $data['users'][0]['bio'] ) ? $data['users'][0]['bio']:'' )    ?></textarea>
																		</div>
	
															
														</div>
													</div>
					      </p>
					    </div>
					    <div class="tab-pane " id="3">
					      <p>
												<table  class='fonts_table ' >
													<tr>
														<td>Name
														</td>
														<td><input  name='full_name' id="full_name" type="" value="">
														</td>
													</tr>
		<!--											
													<tr>
														<td>Background
														</td>
		
														<td>
															<select  id='background_color' name='background_color'>
																
															<?php 
															
															$colors = array(
																'red',
																'blue',
																'orange',
																'yellow',
																'green',
																'white',
															);
															
															foreach( $colors  as  $key => $color ){ ?>	
							
																	<option value='<?php  echo $color   ?>'><?php  echo $color   ?></option>
															
															<?php } ?>
															
															</select>
														</td>
													</tr>
													-->
													<tr>
														<td>Font Color
														</td>
														<td>
															<select  id='font_color' name='font_color'>
																
															<?php 
															
															$colors = array(
																'black',
																'red',
																'blue',
																'orange',
																'yellow',
																'green',
																'white',
															);
															
															foreach( $colors  as  $key => $color ){ ?>	
							
																	<option value='<?php  echo $color   ?>'><?php  echo $color   ?></option>
															
															<?php } ?>
															
															</select>
														</td>
													</tr>		
													
													<tr>
														<td>Font Size
														</td>
														<td>
															<select   id='font_size' name='font_size'>
																
															<?php 
															
		
															
																		for( $size = 5;  $size <= 225;  $size++ ){ ?>	
										
																				<option value='<?php  echo $size   ?>px'><?php  echo $size   ?>px</option>
																		
																		<?php } ?>
															
															</select>
														</td>
													</tr>			
													
													<tr>
														<td>Transparency
														</td>
														<td>
															<select   id='transparency' name='transparency'>
																
															<?php for( $transparency_setting = 0;  $transparency_setting <= 9;  $transparency_setting++ ){ ?>	
										
																				<option value='<?php  echo $transparency_setting   ?>'><?php  echo $transparency_setting   ?></option>
																		
															<?php } ?>
															
															</select>
														</td>
													</tr>														
													
													<tr>
														<td>Font
														</td>
														<td>
															<style>
															#profile_box ul#panels_ul li.panels table.fonts_table ul{
																height:300px;
																overflow-y:scroll;
																overflow-x:hidden;
																border:1px solid gray;
															}
															#profile_box ul#panels_ul li.panels table.fonts_table ul#fonts_ul li.fonts_li{
																background:white;	
																border-bottom:1px solid gray;
																height:45px;
																font-size:28px;
															}
															
															</style>
															<ul  id='fonts_ul'>
																<?php foreach($data['fonts'] as $font ){?>
																	
																	<li  class='fonts_li ' font_name='<?php echo $font->name    ?>'><?php  echo $font->name   ?></li>
																
																<?php }?>
															</ul>
														</td>
													</tr>																										
												</table>					      	
					      </p>
					    </div>
					    <div class="tab-pane " id="4">
					      <p>
												<table>
													<tr>
	
														<td >
	<!--														
															<div image_id='0' image_type_id='1'  li_index='-1' class='upload_button'>upload
															</div>
															-->
														<div id="upload_button_pictures"  >		
															<noscript>			
																<p>Please enable JavaScript to use file uploader.</p>
																<!-- or put a simple form for upload here -->
															</noscript>         
														</div>
														</td>													
													</tr>
	
													<tr>
														<td>
															<div  id='pictures-div' class='mycarousel jcarousel-skin-tango'>
																<ul class='thumbs-ul'   >
	
	
	<?php if(  isset($data['users']['pictures']['images'])  ){?>
	
																	<?php foreach( $data['users']['pictures']['images']  as $image_id){?>
	
																		<li   style='background:url(<?php echo base_url()     ?>uploads/<?php echo $data['users']['pictures']['user_id']    ?>/<?php echo $image_id    ?>/image_thumb.jpg)'  class='hovering ' image_id='<?php  echo $image_id   ?>'  image_type_id='1'  >
																			<div  class='small_icons_panel transparent' >
																				<div  class='delete ' >[X]
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
	
														</td>
													</tr>												
												</table>					      	
					      </p>
					    </div>					    
					    <div class="tab-pane " id="5">
					      <p>
												<table>
													<tr>
	
														<td >
															
															<div   style='height:30px'  >
																
																		<style>
																			li#panel-4 input[type=text]{
																				width: 299px;
																				margin-right: 5px;
																			}														
																		</style>
																		
																		
																		<form 
																			id='form_video' 
																			target='results' 
																			enctype='multipart/form-data' 	
																			method='POST'  
																			action='<?php echo base_url();    ?>index.php/main/update_video'
																			>
																			<input name="video_url" id="video_url" type="text" value=""><input name="video_submit" id="video_submit" type="button" value="submit">	
																			<input name="image_id"  type="hidden" value="0">
																			<input name="li_index"  type="hidden" value="-1">
																			
																		</form>																
																
															</div>
															
															
	
															
	
														</td>													
													</tr>
	
													<tr>
														<td>
															<div  id='videos-div' class='mycarousel jcarousel-skin-tango'>
																<ul class='thumbs-ul'   >
																	
	<?php if( isset($data['users']['videos']['images']) ){?>
	
																	<?php foreach( $data['users']['videos']['images']  as $image_id){?>
		
																			<li   style='background:url(<?php echo base_url()     ?>uploads/<?php echo $data['users']['videos']['user_id']    ?>/<?php echo $image_id    ?>/image_thumb.jpg)'  class='hovering ' image_id='<?php  echo $image_id   ?>'  image_type_id='2'  >
																				<div  class='small_icons_panel transparent' >
																					<div  class='delete ' >[X]
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
	
														</td>
													</tr>												
												</table>
					      </p>
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
		id="results"   
		name="results"
		style='background:white;border:0px solid gray;width:0px;height:0px'  
		border="1" 
		frameborder="1" 
		scrolling="auto" 
		align="center" 
		hspace="0" 
		vspace="">
	</iframe>
	

</body>
</html>

<?php 
		$this->load->view('footer/document_ready.php');
?> 




