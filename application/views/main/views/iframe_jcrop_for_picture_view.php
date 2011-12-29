<html>
<head>
	
	<?php  $this->load->view('header/blueprint_css.php');   ?>	
	

<link rel="stylesheet" href="<?php  echo base_url();   ?>js/Jcrop/css/jquery.Jcrop.css" type="text/css"  type="text/css" >
   
<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
<script type='text/javascript' src='<?php  echo base_url()   ?>js/Jcrop/js/jquery.Jcrop.min.js'></script>


<script type="text/javascript" language="Javascript">
	
					$(document).ready(function() {
						
							
							jQuery('#cropbox').Jcrop({		
								onChange: showPreview,
								aspectRatio: <?php  
								
							
															        echo $picture_width / $picture_height;
							
								
													   ?>,
								setSelect:   [ 0, 0, <?php 
								
							
															        echo $width_of_file . ", ". $height_of_file ;
							
								
																	?> ]
							});  	
							
							
							$('#submit').click(function(event) {
							
							submitCropForm();
							
							
							});		

					});
					
					function checkCoords(){
						if (parseInt($('#w').val())) return true;
						alert('Please select a crop region then press submit.');
						return false;
					};
					
					function showPreview(coords){
						$('#x').val(coords.x);
						$('#y').val(coords.y);
						$('#x2').val(coords.x2);
						$('#y2').val(coords.y2);
						$('#w').val(coords.w);
						$('#h').val(coords.h);
					};
					
					function submitCropForm(){
						

										// AJAX UPDATE
										$.post("<?php echo base_url() . 'index.php/main/crop_picture';    ?>",{
											x_origin: $('#x').val(),
											y_origin: $('#y').val(),
											desired_width: $('#w').val(),
											desired_height: $('#h').val(),
											picture_id: '<?php echo $picture_id;    ?>',
											menu_item:'<?php echo $menu_item;    ?>',
											picture_width:'<?php echo $picture_width;    ?>',
											picture_height:'<?php echo $picture_height;    ?>'
										},function(data) {
											
											$(window.parent.document).find("#picture_div").css({'background-image':'url(<?php  echo base_url()   ?>uploads/pictures/<?php echo $user_id;    ?>/<?php echo $picture_id;    ?>/image.png?random=<?php echo rand(5,1231)    ?>)'})
													.mouseover(function() {
														$(this).children().show();
													}).mouseout(function(){
															$(this).children().hide();
													}).children().html('Click to Change Picture').hide();	
														
											$(window.parent.document).find("div.slide_box_tab[order='<?php echo $order    ?>']").css({background:'orange'}).attr('order','<?php echo $order    ?>').attr('picture_id','<?php echo $picture_id    ?>').addClass('spot_filled');
											
											window.parent.dialog_close();

										});		
										
										
					};
					
					
					

</script>

<style>
	table {
	width:100%;
	}
	table td{
	color:darkgray;
	font-size:23px;
	}
</style>
</head>

<body   style='padding-top:2px'  >


<div   style='width:930px;height:414px;overflow:auto'  >
	<div   style='width:<?php echo $width_of_file;    ?>px;margin-left:auto;margin-right:auto'  > 
		<img     id='cropbox' src = '<?php  echo  base_url() . 'uploads/pictures/' . $user_id . '/' . $picture_id . '/transition.png?random=' . rand(5,6815);   ?>'>		
	</div> 	
</div>



							
							
<form id='corpForm' name='corpForm' action='<?php  echo base_url();   ?>index.php/upload/crop' onsubmit='return checkCoords();'>
	<input type="hidden" size="4" id="x" name="x" value="" />
	<input type="hidden" size="4" id="y" name="y" />
	<input type="hidden" size="4" id="x2" name="x2" />
	<input type="hidden" size="4" id="y2" name="y2" />
	<input type="hidden" size="4" id="w" name="w" />
	<input type="hidden" size="4" id="h" name="h" />
	

	<!-- 
	<label>X1 </label>
	<label>Y1 </label>
	<label>X2 </label>

	<label>Y2 </label>
	<label>W </label>
	<label>H </label>-->
</form>
</body>

