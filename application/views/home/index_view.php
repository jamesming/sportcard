<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	$this->load->view('header/blueprint_css.php');  ?>
<style>
	body{
  background-image: url(<?php  echo base_url()   ?>uploads/images/<?php echo $data['users'][0]->image_id    ?>/image.png);
  background-position:center 0px;
  background-repeat:no-repeat;
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
	border:1px solid gray;
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
	border:1px solid gray;
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
	background: url("http://localhost/sportcard/images/icons.png") no-repeat scroll -14px -480px yellow;
	cursor: move; 
	}
	.draggable div.close-window {
	background: url("http://localhost/sportcard/images/icons.png") no-repeat scroll -14px -172px yellow;
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

	}
	.window-controls-container{
	height:21px;
	background:gray;
	
	
	}
	#control-panel-box{
	background:red;
	width:406px;
	height: 300px;			
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


	#control-panel-box ul#panels li{
	display:none;	
	}
			#control-panel-box ul#panels li div{
			padding:20px;	
			}		
	
	#control-panel-box ul#panels li#panel-2{
	display:block;	
	}

	#control-panel-box ul#panels #background-thumb{
	  background-image: url(<?php  echo base_url()   ?>uploads/images/<?php echo $data['users'][0]->image_id    ?>/image_thumb.png);
	  background-position:0px 0px;
	  background-repeat:no-repeat;
		height:150px;
	}	

	
</style>
</head>

<html>

<body>
<div  id='header' class='container ' >
	<div class='float_left coordinates '>
		<style>
		#form0 input{
		width:30px;	
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
			<span  id='edit-mode'>EDIT</span>
			<span  id='preview-mode'>PREVIEW</span>
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
						<li>1
						</li>
						<li>2
						</li>
						<li>3
						</li>
						<li>4
						</li>																		
				</div>
				<div  class='insides' >
							<ul  id='panels'>
								<li id='panel-1'>
									<div >
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
													<select  id='font_size' name='font_size'>
														
													<?php 
													
													$sizes = array(
														'9px',
														'10px',
														'11px',
														'12px',
														'13px',
														'14px',
														'15px',
														'16px',
														'17px',
														'18px',
														'19px',
														'20px',
														'21px',
														'22px',
														'23px',
														'24px',
														'25px',
														'26px',
														'27px',
														'28px',
														'29px',
														'31px',
														'32px',
														'33px',
														'34px',
														'35px',
														'36px',
														'37px',
														'38px',
														'39px',
														'40px',
														'41px',
														'42px',
														'43px',
														'44px',
														'45px',
														'46px',
														'47px',
														'48px',
														'49px',
														'50px',
														'51px',
														'52px',
														'53px',
														'54px',
														'55px',
													);
													
																foreach( $sizes  as  $key => $size ){ ?>	
								
																		<option value='<?php  echo $size   ?>'><?php  echo $size   ?></option>
																
																<?php } ?>
													
													</select>
												</td>
											</tr>																	
										</table>
									</li>
									<li id='panel-2'>
										<div >
											<table>
												<tr>
													<td>File Upload:
													</td>
													<td>
														<form 
															id='form1' 
															target='results' 
															method='POST' 
															enctype='multipart/form-data' 
															action='<?php echo base_url();    ?>index.php/home/upload'
															>
															<input type="file" name="Filedata"  value="">
															<input name="" id="" type="submit" value="Go">
														</form>
														
													</td>
												</tr>
												<tr>
													<td colspan=2>
														<div  id='background-thumb'>&nbsp;
														</div>
													</td>
												</tr>												
											</table>
											<iframe  
												id="results"   
												style='border:0px solid gray;width:0px;height:0px'  
												border="1" 
												frameborder="1" 
												scrolling="auto" 
												align="center" 
												hspace="0" 
												vspace="">
											</iframe>
										</div>							
									</li>
									<li>
										<div>
											panel 3
										</div>
									</li>
									<li>
										<div>
										panel 4
										</div>
									</li>									
							</ul>
				</div>
			</div>
</div>


</body>
</html>

<script type="text/javascript" 
        src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
 
  google.load("jquery", "1.7.1");
 	google.load("jqueryui", "1.8.16");

</script>

<script type="text/javascript" language="Javascript">
	

	
$(document).ready(function() { 

	
			get_stored_configurations();
			
			store_custom_configuration();
			
			bind_events();



});


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

function get_stored_configurations(){

			$('#head-line-box').css({
				'position':'absolute',
				'left':($(window).width() / 2),
				'top':'<?php echo ( isset( $data['users'][0]->y) ? $data['users'][0]->y:'0' ) ?>px',
				'margin-left':(0-<?php echo ( isset( $data['users'][0]->margin_left_of_center) ? $data['users'][0]->margin_left_of_center:'0' ) ?>)+'px',
			})


			$('#control-panel-box').css({
				'position':'absolute',
				'left':($(window).width() / 2),
				'top':'100px',
				'margin-left':'30px',
			})

			var full_name = '<?php echo ( isset( $data['users'][0]->full_name ) ? $data['users'][0]->full_name:'' )    ?>';
			
			$('#full_name').val( full_name );
			
			$('#full_name_readonly').html( full_name );
			
//			$('body').css({background:'<?php echo ( isset( $data['users'][0]->background_color) ? $data['users'][0]->background_color:'white' )    ?>'});
//			$('#background_color').val('<?php echo ( isset( $data['users'][0]->background_color) ? $data['users'][0]->background_color:'white' )    ?>')
			
			$('#full_name_readonly').css({color:'<?php echo ( isset( $data['users'][0]->font_color) ? $data['users'][0]->font_color:'black' )    ?>'});
			$('#font_color').val('<?php echo ( isset( $data['users'][0]->font_color) ? $data['users'][0]->font_color:'black' )    ?>');			
			
			$('#full_name_readonly').css({'font-size':'<?php echo ( isset( $data['users'][0]->font_size) ? $data['users'][0]->font_size:'11px' )    ?>'});			
			$('#font_size').val('<?php echo ( isset( $data['users'][0]->font_size) ? $data['users'][0]->font_size:'11px' )    ?>');
}	


function store_custom_configuration(){
	
			$('#full_name').keyup(function(event) {
				$('#full_name_readonly').html( $(this).val() )	;	
			}).blur(function(event) {
						store( $(this) );		
			});	
			
//			$('#background_color').change(function(event) {
//						$('body').css({background:$(this).val()});
//						store( $(this) );
//			});	
			
			$('#font_color').change(function(event) {
						$('#full_name_readonly').css({color:$(this).val()});
						store( $(this) );
			});				
			
			$('#font_size').change(function(event) {
						$('#full_name_readonly').css({'font-size':$(this).val()});
						store( $(this) );	
			});		
			
			$( "#head-line-box" ).mouseup(function(){
						store_position( $(this) );
			});	

}

function bind_events(){
	
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
			
			$( "#head-line-box" ).bind_mouse_events();
			
			$(document).mouseup(function(){
						edit_mode_on();
			})
				
			
			$('.close-window').click(function(event) {
				$(this).parent().parent().hide();
			});	
			

			$('#edit-mode').css({cursor:'pointer'}).click(function(event) {

					edit_mode_on();
						
			});	
			
			$('#preview-mode').css({cursor:'pointer'}).click(function(event) {
			
						$('#control-panel-box').hide();

						$('.draggable, #main-box, #header').css({border:'0px'});
						$('#head-line-box .window-controls-container, .coordinates').css({'visibility':'hidden'});

			});				
			
			
			$('#panel-tabs_container li').css({cursor:'pointer'}).click(function(event) {
						$('#control-panel-box ul#panels li').hide();
						$('#control-panel-box ul#panels li:eq('+$(this).index()+')').show();
						
			});	
			
			
			<?php if( $this->tools->browserIsExplorer() ){?>
			
						var hex = Math.floor(0.3 * 255).toString(16);
			
						$( "#head-line-box" ).css({
							'zoom':'1',
							'-ms-filter':'progid:DXImageTransform.Microsoft.gradient(startColorstr=#'+hex+'000000, endColorstr=#'+hex+'000000)',
							'filter': 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#'+hex+'000000, endColorstr=#'+hex+'000000)'
						})
			
			<?php } ?>
			
			
}

function edit_mode_on(){

						$('#control-panel-box').show();
						$('.draggable, #main-box, #header').css({border:'1px solid gray'});
						$('#head-line-box .window-controls-container, .coordinates').css({'visibility':'visible'});
						
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
								
								$('#control-panel-box').show();
								
								$('#head-line-box .handle').mouseout(function(event) {

										$('#control-panel-box').show();
														
								})
		
						});		
	
	
}
</script>

