<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	$this->load->view('header/blueprint_css.php');  ?>
<style>
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
	 background:lightblue;

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
	background:transparent;	
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
	}
	.window-controls-container{
	height:21px;
	background:gray;
	}
	#control-panel-box{
	position:absolute;
	top:100px;
	left:320px;
	background:red;
	width:406px;
	height: 300px;			
	}		
		#control-panel-box #panel-tabs_container{
		height:19px;
		background:lightblue;	
		}
		#control-panel-box #panel-tabs_container div{
			float:left;
			border-right:1px solid gray;
			width:100px;
			border-bottom:1px solid gray;
		}		

		#control-panel-box #control-panel-box table{
		padding:20px;	
		}
	#control-panel-box .panel{
	display:none;	
	}
	#control-panel-box #panel-1{
	display:block;	
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
			<input name="windowSize" id="windowSize" type="" value="">
			<input name="margin_left_of_center" id="margin_left_of_center" type="" value="">
		</form>
	</div>
	<div class='float_left right_panel'  >
		<div  class='float_right edit-panel' >
			<span  id='edit-mode'>EDIT</span>
		</div>
	</div>
</div>
<div  id='main-box' class='container '>
	

			<div  id='head-line-box' class="draggable" >
				<div class='window-controls-container'>
					<div class="handle icon-boxes"></div>
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
					<div>1
					</div>
					<div>2
					</div>
					<div>3
					</div>
					<div>4
					</div>
				</div>
				<div  class='insides' >
					<div  id='panel-1'  class='panel ' >
						<table>
							<tr>
								<td>Name
								</td>
								<td><input  name='full_name' id="full_name" type="" value="">
								</td>
							</tr>
							
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
					<div  id='panel-2'   class='panel ' >
						test						
					</div>
					</div>

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

function get_stored_configurations(){
	

			$('#head-line-box').css({
				'position':'absolute',
				'left':($(window).width() / 2),
				'top':'<?php echo ( isset( $data['users'][0]->y) ? $data['users'][0]->y:'0' ) ?>px',
				'margin-left':(0-<?php echo ( isset( $data['users'][0]->margin_left_of_center) ? $data['users'][0]->margin_left_of_center:'0' ) ?>)+'px',
			})

	
			var full_name = '<?php echo ( isset( $data['users'][0]->full_name ) ? $data['users'][0]->full_name:'' )    ?>';
			
			$('#full_name').val( full_name );
			
			$('#full_name_readonly').html( full_name );
				
			
			$('body').css({background:'<?php echo ( isset( $data['users'][0]->background_color) ? $data['users'][0]->background_color:'white' )    ?>'});
			$('#background_color').val('<?php echo ( isset( $data['users'][0]->background_color) ? $data['users'][0]->background_color:'white' )    ?>')
			
			
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
			
			$('#background_color').change(function(event) {
						$('body').css({background:$(this).val()});
						store( $(this) );
			});	
			
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
					handle: "div.handle",
					// containment: '#main-box'
			})
			
			$('#head-line-box .handle')
			.mouseout(function(event) {
				
									$('#control-panel-box').show();
									
			}).mousedown(function() {
				
						$('#control-panel-box').hide();
				
			  		$('#head-line-box .handle').unbind('mouseout');
			  		
			}).mouseup(function() {
				
			  		
			  		
			});
			
			$( "#head-line-box" )
			.mousemove(function(){
				
						var coord = $(this).offset();
						$('#x').val( coord.left.toFixed(0) );
						$('#y').val( coord.top.toFixed(0));
						
	
			$('#windowSize').val( $(window).width()  );
			
			$('#margin_left_of_center').val( ($(window).width()/2) -  (coord.left.toFixed(0)) ); 						


						
						
		 	})
			.mouseup(function(){
						$(this).unbind('mouseleave');
						
			}).mousedown(function(event) {
				
						$(this).mouseleave(function(){
			          
			          $(this).css({background:'gray'})
			          
						})
						.mouseover(function(){
			          
			          $(this).css({background:'transparent'})
			          
						})
						.mouseup(function(){
			          
			          $(this).unbind('mouseleave');
			          
						})		
			});	
			
			$(document).mouseup(function(){
						$("#head-line-box").css({background:'transparent'}).unbind('mouseleave');
						$('#control-panel-box').show();
			})
				
			
			$('.close-window').click(function(event) {
				$(this).parent().parent().hide();
			});	
			

			$('#edit-mode').css({cursor:'pointer'}).click(function(event) {
						$('#control-panel-box').show();
						
			});	
			

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

