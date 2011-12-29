<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	$this->load->view('header/blueprint_css.php');  ?>
<style>
	
	div.container{
	min-height:30px;	
	border:1px solid gray;
	}
	
	div#main-box{
	min-height:600px;
	}
	#head-line-box{
	width: 200px; 
	height: 200px;		
	}
	
	#head-line-box #name-location{
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
	.draggable div.handle { 
	cursor: move; 
	background:yellow;
	width:20px;
	float:right;
	text-align:center;
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
</div>
<div  id='main-box' class='container '>
	

			<div  id='head-line-box' class="draggable" >
				<div>
					<div class="handle">X</div>
				</div>
				<div  class='insides' >
				</div>
				<div  id='name-location'>
				</div>
			</div>
			
			<div  id='control-panel-box' class="draggable" >
				<div class="handle">X</div>
				<div  class='insides' >
					<table>
						<tr>
							<td>Name
							</td>
							<td><input  id="name" type="" value="">
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
$(document).ready(function() { 
			$( ".draggable" ).draggable({ 
					handle: "div.handle",
					containment: '#main-box'
			})

			
			$( "#head-line-box.draggable" ).mousemove(function(){
						var coord = $(this).position();
						$('#header').text( "left: " + coord.left + ", top: " + coord.top );
		 	}).mouseup(function(){
				var coords=[];
				var coord = $(this).position();
				var item={ coordTop:  coord.left, coordLeft: coord.top  };
			   	coords.push(item);
				var order = {id:this.id, coords: coords };
				
//					$.post('updatecoords.php', 'data='+$.toJSON(order), function(response){
//							if(response == "success")
//								$("#respond").html('<div class="success">X and Y Coordinates Saved!</div>').hide().fadeIn(1000);
//								setTimeout(function(){ $('#respond').fadeOut(1000); }, 2000);
//							});

			})
			
			$('#name').keyup(function(event) {
				$('#name-location').html( $(this).val() )	;	
			});	
			
			
});
</script>

