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
	#head-line-box{
	width: 200px; 
	height: 200px;	
	display:none;	
	}
	
	#head-line-box #full_name_readonly{
	font-size:15px;
	font-weight:bold;
	color:gray;	
	padding-left:10px;
	}
	.draggable{ 
	float: left;
	background:orange;	
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
	#control-panel-box{
	position:relative;
	top:100px;
	left:100px;
	background:red;
	width:300px;
	height: 300px;			
	}
	#control-panel-box table{
	padding:20px;	
	}
</style>
</head>

<html>

<body>
<div  id='header' class='container ' >
	<div class='float_left coordinates '>
		<form id='form0'>
			<input name="x" id="x" type="" value="">
			<input name="y" id="y" type="" value="">
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
				<div>
					<div class="handle icon-boxes"></div>
				</div>
				<div  class='insides' >
				</div>
				<div  id='full_name_readonly'>
				</div>
			</div>
			
			<div  id='control-panel-box' class="draggable" >
				<div class="handle icon-boxes"></div>
				<div  class='close-window icon-boxes' >
				</div>
				<div  class='insides' >
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
					</table>
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
	
	
x_start_position = 37;
y_start_position = 51;


	
$(document).ready(function() { 
	
			get_stored_configurations();
			
			store_custom_configuration();
			
			bind_events();

});

function get_stored_configurations(){
	
		
			$('#head-line-box').show().css({position:'relative',left:'<?php echo ( isset( $data['users'][0]->x ) ? $data['users'][0]->x:'0' )    ?>px', top:'<?php echo ( isset( $data['users'][0]->y) ? $data['users'][0]->y:'0' ) ?>px'})
			
			var full_name = '<?php echo ( isset( $data['users'][0]->full_name ) ? $data['users'][0]->full_name:'' )    ?>';
			
			$('#full_name').val( full_name );
			
			$('#full_name_readonly').html( full_name );	
			
			
			$('body').css({background:'<?php echo ( isset( $data['users'][0]->background_color) ? $data['users'][0]->background_color:'white' )    ?>'});
			
			
}	


function store_custom_configuration(){
	
			$('#full_name').keyup(function(event) {
				
				$('#full_name_readonly').html( $(this).val() )	;	
				
			}).blur(function(event) {

						$.post("<?php echo base_url(). 'index.php/home/update';    ?>",{
							table:'users',
							id:1,
							set_what:$(this).serialize()
							},function(data) {
							
								$('#y').val(data);
		
						});		
			});	
			
			
			$('#background_color').change(function(event) {
				
						$('body').css({background:$(this).val()});
						
						$.post("<?php echo base_url(). 'index.php/home/update';    ?>",{
							table:'users',
							id:1,
							set_what:$(this).serialize()
							},function(data) {
							
								$('#y').val(data);
								
						});	
						
			});	
			
			$( "#head-line-box" ).mouseup(function(){


						store_position( $(this) );
						
						
			});	
			
			
			

}

function bind_events(){
	
			$( ".draggable" ).draggable({ 
					handle: "div.handle",
					containment: '#main-box'
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
				
						var coord = $(this).position();
						$('#x').val( coord.left.toFixed(0)  -  x_start_position );
						$('#y').val( coord.top.toFixed(0) - y_start_position);
						
		 	})
			.mouseup(function(){
						$(this).unbind('mouseleave');
						
			}).mousedown(function(event) {
				
						$(this).mouseleave(function(){
			          
			          $(this).css({background:'gray'})
			          
						})
						.mouseover(function(){
			          
			          $(this).css({background:'orange'})
			          
						})
						.mouseup(function(){
			          
			          $(this).unbind('mouseleave');
			          
						})		
			});	
			
			$(document).mouseup(function(){
						$("#head-line-box").css({background:'orange'}).unbind('mouseleave');
						$('#control-panel-box').show();
			})
				
			
			$('.close-window').click(function(event) {
				$(this).parent().hide();
			});	
			

			$('#edit-mode').css({cursor:'pointer'}).click(function(event) {
						$('#control-panel-box').show();
						
			});	
			

}



function store_position( dom_element ){
	
						var coord = dom_element.position();
						$('#x').val( coord.left.toFixed(0) -  x_start_position );
						$('#y').val( coord.top.toFixed(0) - y_start_position );

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

