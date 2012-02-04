<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	$this->load->view('header/blueprint_css.php');  ?>
<style>
	body{
  background-image: url(<?php  echo base_url()   ?>uploads/<?php echo $data['user_id']   ?>/<?php echo ( isset( $data['users']['backgrounds']['images'][0]) ? $data['users']['backgrounds']['images'][0]:'0' )    ?>/image.jpg);
  background-position:center 0px;
  background-repeat:no-repeat;
  -webkit-background-size:1500px 1500px;
  background-size:1500px 1500px;
	}
	.top-right-rounded{
		border-top-right-radius: 6px;
		-moz-border-radius-topright: 6px;
		-webkit-border-top-right-radius: 6px;	
	}
	.transparent{
			/* Fallback for web browsers that don't support RGBa */
			background-color: rgb(0, 0, 0);
			/* RGBa with 0.6 opacity */
			background-color: rgba(0, 0, 0, 0.3);
			<?php if( $this->tools->browserIsExplorer() ){?>
				background: transparent; 
			<?php } ?>
			<?php     
			/*
			http://robertnyman.com/2010/01/11/css-background-transparency-without-affecting-child-elements-through-rgba-and-filters/ 
			*/
			?>
		}
	.rounded{
		border-top-left-radius: 6px;
		border-top-right-radius: 6px;
		-moz-border-radius-topleft: 6px;
		-moz-border-radius-topright: 6px;
		-webkit-border-top-right-radius: 6px;
		-webkit-border-top-left-radius: 6px;
		border-bottom-left-radius: 6px;
		border-bottom-right-radius: 6px;
		-moz-border-radius-bottomleft: 6px;
		-moz-border-radius-bottomright: 6px;
		-webkit-border-bottom-right-radius: 6px;
		-webkit-border-bottom-left-radius: 6px;
	}
	.float_left{
	float:left;	
	}
	.float_right{
	float:right;	
	}
	.clearfix{
	clear:both;	
	}
	div.container{
	min-height:30px;	
	border:0px solid gray;
	}
	
	div#header .coordinates{
		width:200px;
	}
	div#header .right_panel{
	 width:662px;

	}	
	
	div#header .right_panel .edit-panel{
	 width:200px;
	 background:lightgray;

	}		
	div#main-box{
	min-height:600px;
	}

	.draggable{ 
	float: left;
/*	background:transparent;	*/
	border:0px solid gray;
	}
	.draggable .insides{
		clear:both;
	}
	.draggable .icon-boxes{
	width:22px;
	float:right;
	height:20px;	
	}	
	.draggable div.handle {
		background: url("<?php  echo base_url()   ?>images/icons.png") no-repeat scroll -14px -480px yellow;
		cursor: move;
		z-index:1; 
	}
	.draggable div.close-window {
	background: url("<?php  echo base_url()   ?>images/icons.png") no-repeat scroll -14px -172px yellow;
	cursor: pointer; 
	}
	#head-line-box{
	width: 500px; 
	height: 200px;	
	position:absolute;
	}
	
	#head-line-box #full_name_readonly{
	font-size:15px;
	font-weight:bold;
	color:gray;	
	padding-left:10px;
	white-space:nowrap;
	margin-top:20px;
	z-index:-1;
	}
	.window-controls-container{
	height:21px;
	background:gray;
	z-index:0;
	}

	#control-panel-box{
	background:red;
	width:875px;
	height: 600px;			
	}		
		#control-panel-box #panel-tabs_container{
		height:19px;
		background:lightblue;	
		}
		#control-panel-box #panel-tabs_container li{
			float:left;
			border-right:1px solid gray;
			width:100px;
			border-bottom:1px solid gray;
			text-align:center;
		}		

		
		
		
	.upload_button{
		height:30px;
		margin:0px 0px 0px 0px;
		padding:0px 0px 0px 0px;
		cursor:pointer;
		background:yellow;
		text-align:right;
	}

			#control-panel-box ul#panels_ul li.panels div.div-panel{
			padding:20px;	
			}
			
.inside_li{
    clear: both;
    height: 75px;
    width: 181px;
    cursor:pointer;
}			
			
.jcarousel-skin-tango ul.thumbs-ul li div.small_icons_panel{
  float: right;
  height: 22px;
  position: relative;
  width: 71px;
  padding-top: 3px;
  display:none;
}	
.jcarousel-skin-tango ul.thumbs-ul li div.small_icons_panel div{
	color:white;
  float: right;
  height: 19px;
  margin-right: 2px;
  width: 20px;
  text-align: center;
  cursor:pointer
}		
					
	  
.jcarousel-skin-tango .jcarousel-container {

    border: 1px solid blue;
}

.jcarousel-skin-tango .jcarousel-direction-rtl {
	direction: rtl;
}

.jcarousel-skin-tango .jcarousel-container-horizontal {
    width:<?php echo $data['thumbnail_panel_width']    ?>px;
    padding: 20px 40px;
}


.jcarousel-skin-tango .jcarousel-clip {
    overflow: hidden;
}

.jcarousel-skin-tango .jcarousel-clip-horizontal {
    width: <?php echo $data['thumbnail_panel_width']    ?>px;
    height: <?php echo $data['thumbnail_size_height']    ?>px;
}


.jcarousel-skin-tango .jcarousel-item {
    width: <?php echo $data['thumbnail_size_width']    ?>px;
    height: <?php echo $data['thumbnail_size_height']    ?>px;
}

.jcarousel-skin-tango .jcarousel-item-horizontal {
	margin-left: 0;
	margin-right: 10px;
}

.jcarousel-skin-tango .jcarousel-direction-rtl .jcarousel-item-horizontal {
	margin-left: 10px;
	margin-right: 0;
}


.jcarousel-skin-tango .jcarousel-item-placeholder {
    background: #fff;
    color: #000;
}

/**
 *  Horizontal Buttons
 */
.jcarousel-skin-tango .jcarousel-next-horizontal {
    position: absolute;
    top: <?php echo $data['top_direction_arrow']    ?>px;
    right: 5px;
    width: 32px;
    height: 32px;
    cursor: pointer;
    background: transparent url(<?php echo base_url()     ?>images/next-horizontal.png) no-repeat 0 0;
}

.jcarousel-skin-tango .jcarousel-direction-rtl .jcarousel-next-horizontal {
    left: 5px;
    right: auto;
    background-image: url(<?php echo base_url()     ?>images/prev-horizontal.png);
}

.jcarousel-skin-tango .jcarousel-next-horizontal:hover,
.jcarousel-skin-tango .jcarousel-next-horizontal:focus {
    background-position: -32px 0;
}

.jcarousel-skin-tango .jcarousel-next-horizontal:active {
    background-position: -64px 0;
}

.jcarousel-skin-tango .jcarousel-next-disabled-horizontal,
.jcarousel-skin-tango .jcarousel-next-disabled-horizontal:hover,
.jcarousel-skin-tango .jcarousel-next-disabled-horizontal:focus,
.jcarousel-skin-tango .jcarousel-next-disabled-horizontal:active {
    cursor: default;
    background-position: -96px 0;
}

.jcarousel-skin-tango .jcarousel-prev-horizontal {
    position: absolute;
    top:  <?php echo $data['top_direction_arrow']    ?>px;
    left: 5px;
    width: 32px;
    height: 32px;
    cursor: pointer;
    background: transparent url(<?php echo base_url()     ?>images/prev-horizontal.png) no-repeat 0 0;
}

.jcarousel-skin-tango .jcarousel-direction-rtl .jcarousel-prev-horizontal {
    left: auto;
    right: 5px;
    background-image: url(<?php echo base_url()     ?>images/next-horizontal.png);
}

.jcarousel-skin-tango .jcarousel-prev-horizontal:hover, 
.jcarousel-skin-tango .jcarousel-prev-horizontal:focus {
    background-position: -32px 0;
}

.jcarousel-skin-tango .jcarousel-prev-horizontal:active {
    background-position: -64px 0;
}

.jcarousel-skin-tango .jcarousel-prev-disabled-horizontal,
.jcarousel-skin-tango .jcarousel-prev-disabled-horizontal:hover,
.jcarousel-skin-tango .jcarousel-prev-disabled-horizontal:focus,
.jcarousel-skin-tango .jcarousel-prev-disabled-horizontal:active {
    cursor: default;
    background-position: -96px 0;
}

.qq-uploader { position:relative; width: 100%;}

.qq-upload-button {
		float:right;
    display:block; /* or inline-block */
    width: 105px; padding: 7px 0; text-align:center;    
    background:#880000; border-bottom:1px solid #ddd;color:#fff;
}
.qq-upload-button-hover {background:#cc0000;}
.qq-upload-button-focus {outline:1px dotted black;}

.qq-upload-drop-area, .qq-upload-extra-drop-area {
    position:absolute; top:0; left:0; width:100%; height:100%; min-height: 70px; z-index:2;
    background:#FF9797; text-align:center; 
}
.qq-upload-drop-area span {
    display:block; position:absolute; top: 50%; width:100%; margin-top:-8px; font-size:16px;
}
.qq-upload-extra-drop-area { position: relative; margin-top: 50px; font-size: 16px; padding-top: 30px; height: 20px; min-height: 40px; }
.qq-upload-drop-area-active {background:#FF7171;}

.qq-upload-list {margin:15px 35px; padding:0; list-style:disc;}
.qq-upload-list li { margin:0; padding:0; line-height:15px; font-size:12px;}
.qq-upload-file, .qq-upload-spinner, .qq-upload-size, .qq-upload-cancel, .qq-upload-failed-text {
    margin-right: 7px;
}

.qq-upload-file {}
.qq-upload-spinner {display:inline-block; background: url("loading.gif"); width:15px; height:15px; vertical-align:text-bottom;}
.qq-upload-size,.qq-upload-cancel {font-size:11px;}

.qq-upload-failed-text {display:none;}
.qq-upload-fail .qq-upload-failed-text {display:inline;}


.qq-upload-drop-area, .qq-upload-list{
display:none;	
}
</style>


<script type="text/javascript" 
        src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
 
  google.load("jquery", "1.4.2");
 	google.load("jqueryui", "1.8.16");

</script>

<!--  
http://stackoverflow.com/questions/1997993/jcarousel-doesnt-work-properly-in-chrome
-->
<!--
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
-->

	<link rel="stylesheet" href="<?php echo  base_url();   ?>js/jquery-ui/themes/base/jquery.ui.all.css"> 
	<script src="<?php echo  base_url();   ?>js/external/jquery.bgiframe-2.1.2.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery-ui/jquery.ui.core.min.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery-ui/jquery.ui.widget.min.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery-ui/jquery.ui.mouse.min.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery-ui/jquery.ui.draggable.min.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery-ui/jquery.ui.position.min.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery-ui/jquery.ui.resizable.min.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery-ui/jquery.ui.dialog.min.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery.jcarousel.js"></script> <!--
	<script src="<?php echo  base_url();   ?>js/easing/jquery.easing.1.1.js"></script> 
	<script src="<?php echo  base_url();   ?>js/mousewheel.js"></script> -->
	<script src="<?php echo  base_url();   ?>js/cufon.js"></script> 
	<script src="<?php echo  base_url();   ?>js/fileuploader.js"></script> 



</head>

<html>

<body>
<div  id='header' class='container ' >
	<div class='float_left coordinates '>
		<style>
		#form0 input{
		width:30px;	
		display:none;
		}
		</style>
		<form id='form0'>
			<input name="x" id="x" type="" value="">
			<input name="y" id="y" type="" value="">
			<input name="margin_left_of_center" id="margin_left_of_center" type="" value="">
		</form>
	</div>
	<div class='float_left right_panel'  >
		<div  class='float_right edit-panel' >
			<span  id='edit_mode' on='1'>preview</span>
		</div>
	</div>
</div>
<div  id='main-box' class='container '>
	

			<div  id='head-line-box' class="transparent rounded draggable " >
				<div class='window-controls-container top-right-rounded'>
					<div class="handle icon-boxes top-right-rounded"></div>
				</div>
				<div  class='insides' >
				</div>
				<div  id='full_name_readonly'>
				</div>
			</div>
			
			<div  id='control-panel-box' class="draggable" >
				<div  class='window-controls-container'>
					<div class="handle icon-boxes">
					</div>
					<div  class='close-window icon-boxes' >
					</div>					
				</div>
				<div  id='panel-tabs_container'>
					<ul>
						<li  id='panel-tab-1'>1
						</li>
						<li  id='panel-tab-2'>2
						</li>
						<li  id='panel-tab-3'>3
						</li>
						<li  id='panel-tab-4'>4
						</li>																		
				</div>
				<div  class='insides' >
							<ul  id='panels_ul'>
								<li id='panel-1'  class='panels ' >
									<div  class='div-panel ' >
										<table>
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
													#control-panel-box ul#panels_ul li.panels table ul{
														height:100px;
														overflow-y:scroll;
														overflow-x:hidden;
													}
													#control-panel-box ul#panels_ul li.panels table ul#fonts_ul li.fonts_li{
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
									</li>
									<li id='panel-2'   class='panels ' >
										<div class='div-panel '>
										
											<table>
												<tr>

													<td ><!--
														<div  id='add-to' image_id='0' image_type_id='0' li_index='-1' class='upload_button'>upload
														</div>-->
														
														
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
																			<div  class='update-image backgrounds_update_button' >[<?php echo $image_id     ?>]
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

										</div>							
									</li>
									
									
									
									<li  id='panel-3'    class='panels ' >
										<div class='div-panel '>
										
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
																			<div  class='update-image  pictures_update_button' >[E]
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

										</div>		
									</li>
									<li   id='panel-4'    class='panels ' >
										<div class='div-panel '>
										
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
																		action='<?php echo base_url();    ?>index.php/home/update_video'
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
	
																		<li   style='background:url(<?php echo base_url()     ?>uploads/<?php echo $data['users']['videos']['user_id']    ?>/<?php echo $image_id    ?>/image_thumb.png)'  class='hovering ' image_id='<?php  echo $image_id   ?>'  image_type_id='2'  >
																			<div  class='small_icons_panel transparent' >
																				<div  class='delete ' >[X]
																				</div>
																				<div  class='update-video_url '  >[E]
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

										</div>	
									</li>									
							</ul>
							<style>
							#preview_box{
								padding:20px;	
							}
							#preview_box_inside{
						    background: none repeat scroll 0 0 white;
						    border: 0px solid gray;
						    height: 281px;
							}
							</style>
							<div  id='preview_box'>
								<div  id='preview_box_inside'>
								</div>
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


<script type="text/javascript" language="Javascript">
	

	
$(document).ready(function() { 
	
			get_stored_configurations();
			store_custom_configuration();
			activate_fonts_for_selection();
			thumbnail_controls();
			bind_events();

			$('#control-panel-box #panel-tabs_container li#panel-tab-4').click()


});




function get_stored_configurations(){
	

			$('#head-line-box').css({
				'position':'absolute',
				'left':($(window).width() / 2),
				'top':'<?php echo ( isset( $data['users'][0]['y']) ? $data['users'][0]['y']:'0' ) ?>px',
				'margin-left':(0-(<?php echo ( isset( $data['users'][0]['margin_left_of_center']) ? $data['users'][0]['margin_left_of_center']:'0' ) ?>))+'px',
			})


			var full_name = '<?php echo ( isset( $data['users'][0]['full_name'] ) ? $data['users'][0]['full_name']:'' )    ?>';
			
			$('#full_name').val( full_name );
			
			
			Cufon.replace('#full_name_readonly',{ fontFamily: '<?php echo ( isset( $data['users'][0]['font_name'] ) ? $data['users'][0]['font_name']:'' )    ?>', hover: true });
				
			$('#full_name_readonly').attr('font_name', '<?php echo ( isset( $data['users'][0]['font_name'] ) ? $data['users'][0]['font_name']:'' )    ?>');
			
			$('#full_name_readonly').html( full_name );
			
		
			$('#full_name_readonly').css({color:'<?php echo ( isset( $data['users'][0]['font_color']) ? $data['users'][0]['font_color']:'black' )    ?>'});
			$('#font_color').val('<?php echo ( isset( $data['users'][0]['font_color']) ? $data['users'][0]['font_color']:'black' )    ?>');			
			
			$('#full_name_readonly').css({'font-size':'<?php echo ( isset( $data['users'][0]['font_size']) ? $data['users'][0]['font_size']:'11px' )    ?>'});			
			$('#font_size').val('<?php echo ( isset( $data['users'][0]['font_size']) ? $data['users'][0]['font_size']:'11px' )    ?>');


			<?php if( isset($data['users'][0]['edit_mode']) && $data['users'][0]['edit_mode'] == 0){?>
									$('#edit_mode').text('edit').attr('on', 0);	
									edit_mode_off();									
			<?php }else{?>
									$('#edit_mode').text('preview').attr('on', 1);
									edit_mode_on();
			<?php } ?>
			
			
			
			$('#transparency').val('<?php echo ( isset( $data['users'][0]['transparency']) ? $data['users'][0]['transparency']:'6' )    ?>');			
		
			<?php if( $this->tools->browserIsExplorer() ){?>
			
						var hex = Math.floor(0.1 * <?php  echo ( isset( $data['users'][0]['transparency']) ? $data['users'][0]['transparency']:'6' )    ?> * 255).toString(16);
			
						$( '#head-line-box' ).css({
							'zoom':'1',
							'-ms-filter':'progid:DXImageTransform.Microsoft.gradient(startColorstr=#'+hex+'000000, endColorstr=#'+hex+'000000)',
							'filter': 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#'+hex+'000000, endColorstr=#'+hex+'000000)'
						})			
						

			
			<?php }else{ ?>

				$( '#head-line-box' ).css({
								'background-color':'rgba(0, 0, 0, 0.'+ <?php  echo ( isset( $data['users'][0]['transparency']) ? $data['users'][0]['transparency']:'6' )    ?> +')'
				})	
			
			<?php }?>		


}	


function store_custom_configuration(){

			$('li.fonts_li').css({cursor:'pointer'}).click(function(event) {
				
				Cufon.replace('#full_name_readonly',{ fontFamily: $(this).attr('font_name'), hover: true });
				
				$('#full_name_readonly').attr('font_name', $(this).attr('font_name'));
				
				var font_name_serialized = "font_name=" + $(this).attr('font_name');
				
				$.post("<?php echo base_url(). 'index.php/home/update';    ?>",{
				table:'users',
				id:1,
				set_what:font_name_serialized
				},function(data) {
				
					$('#y').val(data);
					
				});	
				
			});	

	
			$('#full_name').keyup(function(event) {
				$('#full_name_readonly').html( $(this).val() );	
				Cufon.replace('#full_name_readonly',{ fontFamily: $('#full_name_readonly').attr('font_name'), hover: true });				
			}).blur(function(event) {
						store( $(this) );		
			});	
			
//			$('#background_color').change(function(event) {
//						$('body').css({background:$(this).val()});
//						store( $(this) );
//			});	
			
			$('#font_color').change(function(event) {
						$('#full_name_readonly').css({color:$(this).val()});
						Cufon.replace('#full_name_readonly',{ fontFamily: $('#full_name_readonly').attr('font_name'), hover: true });
						store( $(this) );
			});				



			$('#transparency').change(function(event) {
			
					<?php if( $this->tools->browserIsExplorer() ){?>
					
								var hex = Math.floor(0.1 * $(this).val() * 255).toString(16);
					
								$( '#head-line-box' ).css({
									'zoom':'1',
									'-ms-filter':'progid:DXImageTransform.Microsoft.gradient(startColorstr=#'+hex+'000000, endColorstr=#'+hex+'000000)',
									'filter': 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#'+hex+'000000, endColorstr=#'+hex+'000000)'
								})			
					
					<?php }else{ ?>

						$( '#head-line-box' ).css({
										'background-color':'rgba(0, 0, 0, 0.'+ $(this).val() +')'
						})	
					
					<?php }?>						

					var transparency_serialized = "transparency=" + $(this).val();
					
					$.post("<?php echo base_url(). 'index.php/home/update';    ?>",{
					table:'users',
					id:1,
					set_what:transparency_serialized
					},function(data) {
					
						$('#y').val(data);
						
					});	
			});				

			$('#font_size').change(function(event) {
			
						$('#full_name_readonly').css({'font-size':$(this).val()});
						
						Cufon.replace('#full_name_readonly',{ fontFamily: $('#full_name_readonly').attr('font_name'), hover: true });

						store( $(this) );	
			});		
			
			$( "#head-line-box" ).mouseup(function(){
						store_position( $(this) );
			});	
			
			$('#edit_mode').css({cursor:'pointer'}).click(function(event) {

					if( $(this).attr('on') == 1){
							edit_mode_off();	
							$(this).text('edit').attr('on', 0);
			
					}else{
							$(this).text('preview').attr('on', 1);			
							edit_mode_on();		
					};
					
					var edit_mode_serialized = "edit_mode=" + $(this).attr('on');
					
					$.post("<?php echo base_url(). 'index.php/home/update';    ?>",{
					table:'users',
					id:1,
					set_what:edit_mode_serialized
					},function(data) {
					
						$('#y').val(data);
						
					});	

			});	

}

function bind_events(){



			$('#control-panel-box').css({
				'position':'absolute',
				'left':($(window).width() / 2),
				'top':'150px',
				'margin-left':'-430px',
			})

	
			$( ".draggable" ).draggable({ 
					handle: "div.handle"
			})
			
			$('#head-line-box .handle')
			.mouseout(function(event) {
				
									$('#control-panel-box').show();
									
			}).mousedown(function() {
				
						$('#control-panel-box').hide();
				
			  		$('#head-line-box .handle').unbind('mouseout');
			  		
			});
			

			$('.close-window').click(function(event) {
				$(this).parent().parent().hide();
			});	

			$('#panel-tabs_container li').css({cursor:'pointer'}).click(function(event) {
						$('#control-panel-box ul#panels_ul li.panels').hide();
						$('#control-panel-box ul#panels_ul li.panels:eq('+$(this).index()+')').show()
						$(this).parent().children('li').css({background:'lightblue'});
						$(this).css({background:'white'});
						
			});	
			
			
			<?php if( $this->tools->browserIsExplorer() ){?>
			/*
						var hex = Math.floor(0.3 * 255).toString(16);
			
						$( "#head-line-box" ).css({
							'zoom':'1',
							'-ms-filter':'progid:DXImageTransform.Microsoft.gradient(startColorstr=#'+hex+'000000, endColorstr=#'+hex+'000000)',
							'filter': 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#'+hex+'000000, endColorstr=#'+hex+'000000)'
						})
			*/
			<?php } ?>
			
			$( "#head-line-box" ).bind_mouse_events();			
			
}



function activate_fonts_for_selection(){

		
		<?php foreach($data['fonts'] as $font ){
			
				echo $font->code;  
				
		?>
		
				Cufon.replace('li[font_name="<?php    echo $font->name;     ?>"]',{ fontFamily: '<?php  echo $font->name;   ?>', hover: true });
		
		<?php } ?>

	
}


/********************
*
* LIBRARY OF FUNCTIONS
*	
*********************/

$.fn.bind_mouse_events = function(){
	
			$(this)
			.mousemove(function(){
				
						var coord = $(this).offset();
						$('#x').val( coord.left.toFixed(0) );
						$('#y').val( coord.top.toFixed(0));
	
						$('#windowSize').val( $(window).width()  );
						
						$('#margin_left_of_center').val( ($(window).width()/2) -  (coord.left.toFixed(0)) ); 						
						
		 	})
	
};





function edit_mode_on(){

						$('#control-panel-box').show();
						$('#head-line-box .window-controls-container, .coordinates')
						.css({'visibility':'visible'});
						
}

function edit_mode_off(){

							$('#control-panel-box').hide();
							$('#head-line-box .window-controls-container, .coordinates')
							.css({'visibility':'hidden'});
	
						
}

function store( dom_element ){
	
							$.post("<?php echo base_url(). 'index.php/home/update';    ?>",{
							table:'users',
							id:1,
							set_what:dom_element.serialize()
							},function(data) {
							
								$('#y').val(data);
								
							});	
	
}

function store_position( dom_element ){
	
						var coord = dom_element.offset();
						$('#x').val( coord.left.toFixed(0) );
						$('#y').val( coord.top.toFixed(0) );
						$('#margin_left_of_center').val( ($(window).width()/2) -  (coord.left.toFixed(0)) ); 						

						$.post("<?php echo base_url(). 'index.php/home/update';    ?>",{
							table:'users',
							id:1,
							set_what:$('#form0').serialize()
							},function(data) {
							
								$('#y').val(data);

								if( $('#edit_mode').attr('on') == 1){
										$('#control-panel-box').show();
								
								};

								
//								$('#head-line-box .handle').mouseout(function(event) {
//
//								//		$('#control-panel-box').show();
//														
//								})
		
						});		
	
	
}


function mycarousel_initCallback_1(carousel, state) {
		    if (state != 'init')
		    return;
				window.myCarousel_1 = carousel;
};
function mycarousel_initCallback_2(carousel, state) {
		    if (state != 'init')
		    return;
				window.myCarousel_2 = carousel;
};
function mycarousel_initCallback_3(carousel, state) {
		    if (state != 'init')
		    return;
				window.myCarousel_3 = carousel;
};


function thumbnail_controls(){

						            window.uploader_backgrounds = new qq.FileUploader({
						                element: document.getElementById('upload_button_backgrounds'),
						                action: '<?php echo base_url();    ?>index.php/home/upload',
						                params: {
												        image_id: 0,
												        image_type_id: 0,
												        li_index: -1
												    },
						                onComplete: function(id, fileName, responseJSON){
															//alert(JSON.stringify(responseJSON));
						                	$('#results').attr('src','<?php echo base_url()    ?>index.php/home/resize?li_index=' + responseJSON['li_index']+ '&image_id='  + responseJSON['image_id'] +  '&image_type_id=' + responseJSON['image_type_id'] +  '&random='+ Math.floor(Math.random()*9999));
						                	
						                },
						                debug: true
						            }); 
						            
						            window.uploader_pictures = new qq.FileUploader({
						                element: document.getElementById('upload_button_pictures'),
						                action: '<?php echo base_url();    ?>index.php/home/upload',
						                params: {
												        image_id: 0,
												        image_type_id: 1,
												        li_index: -1
												    },
						                onComplete: function(id, fileName, responseJSON){
															//alert(JSON.stringify(responseJSON));
						                	$('#results').attr('src','<?php echo base_url()    ?>index.php/home/resize?li_index=' + responseJSON['li_index']+ '&image_id='  + responseJSON['image_id'] +  '&image_type_id=' + responseJSON['image_type_id'] +  '&random='+ Math.floor(Math.random()*9999));
						                	
						                },
						                debug: true
						            }); 
						            
						            
						            
												$('.update-image.backgrounds_update_button').live("click", function(){

														window.uploader_backgrounds.setParams({
												        image_id:  $(this).parent().parent().attr('image_id') ,
												        image_type_id: $(this).parent().parent().attr('image_type_id') ,
												        li_index: $(this).parent().parent().index()
														});
														$('#btnUpload').click();// REFER TO fileuploader.js line 864. added  id='btnUpload'
														
												})
												
												
												$('.thumbs-ul li .images_preview.inside_li').click(function(event) {						             

															
															$('#preview_box_inside').html('').css({
														    'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/'  + $(this).parent().attr('image_id') + '/image.jpg?random=<?php echo   rand(5,124344523)   ?>)',
														    'background-position': 'center 0px',
														    'background-repeat': 'no-repeat'});
												});	
												
												$('.thumbs-ul li .videos_preview.inside_li').click(function(event) {						             


													$.post("<?php echo base_url(). 'index.php/home/get_video_iframe';    ?>",{
													image_id:$(this).parent().attr('image_id')
													},function(data) {
														
																$('#preview_box_inside').html(data);
														
													});																


															 
															// $('#preview_box_inside').html("<iframe src='http://www.msnbc.com' name='preview_video'	style='background:white;border:1px solid gray;width:833px;height:281px'  	border='1' 	frameborder='1' 	scrolling='auto' 	align='center' 	hspace='0' 	vspace=''	/>");
		
												});													
	

												$("#backgrounds-div").jcarousel({
												        scroll: 1,
												        initCallback: mycarousel_initCallback_1
												});	
												$("#pictures-div").jcarousel({
												        scroll: 1,
												        initCallback: mycarousel_initCallback_2
												});													
												$("#videos-div").jcarousel({
												        scroll: 1,
												        initCallback: mycarousel_initCallback_3
												});													


												$('.hovering').live("mouseover", function(){
															$(this).children('.small_icons_panel').show()
												 }).live("mouseout", function(){
															$(this).children('.small_icons_panel').hide()
												 });

												
												$('.swap').live("click", function(){
													$('body').css({
														  'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $data['user_id']   ?>/' + $(this).parent().parent().attr('image_id') + '/image.jpg)'
														})		
												})	
																							

												
												$('.delete').live("click", function(){
													
													thisLi = $(this).parent('div.small_icons_panel').parent('li');
													thisParentUL = thisLi.parent();
													
													whichPanel = thisParentUL.parent().parent().attr('id');

													if( whichPanel == 'backgrounds-div'){
														whichCarousel = window.myCarousel_1;
													}else if( whichPanel == 'pictures-div'){
														whichCarousel = window.myCarousel_2;														
													}else if( whichPanel == 'videos-div'){
														whichCarousel = window.myCarousel_3;														
													};

													indexOf = thisLi.index()+1;

													var li_array = new Array();

													var e = whichCarousel.get( indexOf );

													theChildren = e.parent().find("li");
								
								
									        var count = 0; 
									        $.each(theChildren,function(){
									        		if( $(this).attr('jcarouselindex') != indexOf ){
									          	 	$(this).removeAttr("class").removeAttr("jcarouselindex");
									              li_array[count] = $(this); 	 
									              count++;       			
									        		}
									            
									        });
									        
								
									        whichCarousel.reset();
													
								          count = 1;
								
								          $.each(li_array, function(key, value){
								
								              if(value != null) {
								              		value.addClass('hovering');
								                 	whichCarousel.add(count,  value);
								                  count++;
								              }
								          });
								          
								
													whichCarousel.size( li_array.length)          
								          
													
													whichCarousel.reload()
													
													
													whichCarousel.scroll(parseInt( indexOf ),true);
													
													
													$.post("<?php echo base_url(). 'index.php/home/remove';    ?>",{
													image_id:$(this).parent().parent().attr('image_id')
													},function(data) {
														
														last_li = thisParentUL.children('li').last();
														
														/* CHANGING BACKGROUND */
														if( last_li.attr('image_type_id') == 0){ 

																$('body').css({
														    'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/' + last_li.attr('image_id') + '/image.jpg?random=<?php echo   rand(5,124344523)   ?>)',
														    'background-position': 'center 0px',
														    'background-repeat': 'no-repeat'});	
														    															
														};
														
													});	
													
													
												});	
												
												
												
						$('#video_submit').click(function(event) {
							$('#form_video').submit();
						});	
						
						$('#video_url').click(function(event) {
								$(this).val('');		
						});	
						
						$('.update-video_url').live("click", function(){
							thisElem = $(this);
							$.post("<?php echo base_url(). 'index.php/home/get_video_url';    ?>",{
							image_id:$(this).parent().parent().attr('image_id')
							},function(data) {
								$('#video_url').val(data);
								$('#form_video input[name=li_index]').val( thisElem.parent().parent().index() );
								$('#form_video input[name=image_id]').val(   thisElem.parent().parent().attr('image_id')  );
								$('#form_video input[name=image_type_id]').val( thisElem.parent().parent().attr('image_type_id') );
								
							});		
						});	
												
												

}



</script>




