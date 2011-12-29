
<style>
#photos_container{
    background: none repeat scroll 0 0 #FFFFFF;
    padding: 0px 0 16px 0px;
    clear:both;
}
div.pic_row {
    margin-bottom: 24px;
}
		div.pic_row div.pic_box {
		    border: 1px dashed gray;
		    height: 123px;
		    margin-right: 16px;
		    width: 162px;
		    background:#F8F6F6;
		}
		

		div.pic_row div.contains_image_container{
		    border: 1px solid lightgray;
		    padding: 2px;
		    width: 158px;
		}
		
				div.pic_row div.contains_image_container div.contains_image {
						height: 120px;
				    width: 156px;
						background:ivory;
				    border: 1px solid lightgray;
				}		
				
				
								
								div.small_icon_container{
							    display: block;
							    width: 104px;
							    padding-bottom: 6px;
							    padding-left: 7px;
							    display:none;
								}		
						
						
											div.pic_row div.pic_box div.small_icon{
													float:right;
											    height: 20px;
											    margin-right: 5px;
											    margin-top: 5px;
											    width: 20px;
											    z-index:100;
											}
						
											div.pic_row div.pic_box div.edit{
										    background-image: url(<?php echo base_url()    ?>images/icons-390.png);
										    background-repeat: no-repeat;
										    background-position: -149px -166px;
											}
											
											div.pic_row div.pic_box div.delete{
										    background-image: url(<?php echo base_url()    ?>images/icons-390.png);
										    background-repeat: no-repeat;
										    background-position: -65px -167px;
											}
						
											div.pic_row div.pic_box div.bubble{
										    background-image: url(<?php echo base_url()    ?>images/icons-390.png);
										    background-repeat: no-repeat;
										    background-position: -39px -48px;
											}
				
											div.pic_row div.pic_box div.viewing{
										    background-image: url(<?php echo base_url()    ?>images/camera.png);
										    background-repeat: no-repeat;
										    background-position: 0px 0px;
											}				
		
		div.pic_row div.first_available {
		    border: 1px solid lightgreen;
		    color: gray;
		    font-size: 15px;
		    font-weight: bold;
		    height: 30px;
		    padding: 47px 34px;
		    width: 93px;
		}
		div.pic_row div.last_in_row {
		    margin-right: 0px;
		}
#dialog{
display:none;	
}
		#dialog table#submit_jcrop_table{
			margin:14px; display:none
		}
		
				#dialog div#submit{
						text-align:center;
						font-size:18px;
						background:orange;
						color:white;
						width:100px
				}
				
		#dialog iframe#iframe_src_for_image{
			padding: 5px; 
			border: 1px solid lightgray;
			width:350px;
			height:50px;
			margin-top:13px;
			margin-left:5px;
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



															
																		<div  id='photos_container'>
																		
																		<?php foreach($website_data['photos']  as $photo_row){  ?>
																		
																				<div  class='pic_row clearfix' >
																		
																				<?php
																				foreach($photo_row  as $photo){  ?>
																					
																					
																					
																								<?php if($photo['type'] == 'contains_image'){?>
																								
																								
																											<div  class='pic_box float_left contains_image_container' >
																												
																													<div  photo_id='<?php echo $photo['photo_id']     ?>' 
																																class=' contains_image'    
																																style='background:url(<?php echo base_url()    ?>uploads/gallery/<?php echo $website_data['user_id']    ?>/<?php echo $photo['photo_id']    ?>/image_tiny.png?random=<?php echo rand(5,12312)    ?>)'  >
																														
																													</div>										
																												
																											</div>
																		
																		
																								<?php }elseif (  $photo['type'] == 'first_available'  ) {?>
																								
																											<div class='pic_box float_left first_available'  title='Add New Picture'>
																													Click to add
																											</div>	
																											
																								<?php }else{?>
																								
																											<div  class='pic_box float_left no_image' >
																												
																											</div>
																								
																								<?php } ?>		
																		
																		
																				<?php 
																				}?>
																				
																				</div>		
																		
																		<?php } ?>
																		</div>
																		
																		
																		
															
																		
<div id="dialog" title="Upload Picture"     > 

		<table id='submit_jcrop_table' width='100%'    >
			<tr>
				<td width='55%' align=right>Crop image then&nbsp;&nbsp;</td>
				<td>
					<div id='submit' class='rounded_border cursor_pointer'    >
						submit
					</div>	
				</td>
			</tr>
		</table>

		<iframe id="iframe_src_for_image" frameborder="0" scrolling=no src=""  >
			
		    <p>Your browser does not support iframes.</p>
		    
		</iframe>			


</div>

<div id="bubble_div">
				

		<iframe id="iframe_src_for_speech_bubble" 
			frameborder="0" scrolling=no src=""   >
			
		    <p>Your browser does not support iframes.</p>
		    
		</iframe>				

</div>	



<?php 
// ** USED FOR COLORBOX
foreach($website_data['photos'] as $photo_row){  
	foreach($photo_row  as $photo){ 
		
			if($photo['type'] == 'contains_image'){?>
				<a  id='launch_colorbox_for_photo_id_<?php echo $photo['photo_id']    ?>' href='<?php echo base_url()    ?>uploads/gallery/<?php echo $website_data['user_id']    ?>/<?php echo $photo['photo_id']    ?>/image.png?random=<?php echo rand(5,123123)    ?>'   rel='photo_group'   style='display:none'  ></a>
<?php }
	} 
} ?>																					
						

<?php     	$this->load->view('header/colorbox_css.php');  ?>
<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" language="Javascript">
$(document).ready(function() {
	

				$('#submit').click(function(event) {  // THIS IS FOR SUBMITTING JCROP
					document.getElementsByTagName('iframe')[1].contentWindow.submitCropForm();
				});

				$('.pic_row div.pic_box:nth-child(4)').addClass('last_in_row');
				
				$('.contains_image')
				
				.html("<div  class='small_icon_container float_right transparent_class'        ><div   class='delete small_icon'  title='Remove Picture'  ></div><div  class='edit small_icon' title='Change Picture'  ></div><div    href='#bubble_div'  class='bubble small_icon'  title='Make speech bubble'  ></div><div  class='viewing small_icon'  title='View'  ></div></div>")
				
				
				.mouseover(function() {
								$(this).find('.small_icon_container').css({display:'block'});
						}).mouseout(function(){
								$(this).find('.small_icon_container').css({display:'none'});
						});
						
						
				$('.delete').css({cursor:'pointer'}).click(function(event) {				
						if(  confirm('Do you really want to remove this picture?')  ){
						    document.location.href='<?php echo  base_url();   ?>index.php/main/remove_photo?photo_id=' + $(this).parent().parent().attr('photo_id');
						}
				});
				
				
				$('.bubble').css({cursor:'pointer'}).fancyZoom().click(function(event) {
					$("#iframe_src_for_speech_bubble").attr('src','<?php echo base_url();    ?>index.php/main/speech_bubbble_form/'+$(this).parent().parent().attr('photo_id'));
				});		
				
				
				$('.edit, .first_available').css({cursor:'pointer'}).click(function(event) {
					open_dialogue_upload_image(
					 $(this).parent().parent().attr('photo_id'),
					 $(this).attr('title')
					);
				})
				
				
				
				// ** USED FOR COLORBOX
				$("a[rel='photo_group']").colorbox();

				$("a[rel='photo_group']").click(function(e) {
		    	e.preventDefault();  
				}); // .css({cursor:'default'});
				
				$('.viewing').css({cursor:'pointer'}).click(function(event) {
					$('#launch_colorbox_for_photo_id_'+$(this).parent().parent().attr('photo_id')).click();
				});	
				

});		



function submit_bubble_form( photo_id ){
	

	
						$.post("<?php echo base_url(). 'index.php/main/update_bubble_text'; ?>",{
							photo_id:photo_id,
							bubble_text:$('#bubble_text').val()
						},function(data_from_first_post) {

							alert('updated');
							
						});
	
	
	
}

function open_dialogue_upload_image( photo_id, title ){
	
		// $('#dialog').attr('title', title);
	
		$('#dialog table#submit_jcrop_table').css({display:'none'});
	
		if( photo_id == null){
			photo_id = 0;
		};
		
	
		$("#iframe_src_for_image")
		.css({width:'350px',height:'80px'})
		.attr('src','<?php echo base_url();    ?>index.php/main/upload_photo_form?photo_id=' + photo_id );
			
		var width_of_dialog = 410;
		var left_coord = ($(window).width()/2 - width_of_dialog/2);

		$("#dialog" ).dialog({
			position:[left_coord,200],
			height: 160,
			zIndex: -10,
			width: width_of_dialog,
			resizable: false 
			})
						
};
						
function open_jcrop( photo_id ){ // called from inside iframe
	
	$("#iframe_src_for_image")
	.css({width:'940px',height:'420px'})
	.attr('src','<?php echo base_url();    ?>index.php/main/iframe_jcrop_form_for_photo?photo_id=' + photo_id);

	$( "#dialog" ).dialog({
		position:[6,10],
		height: 1150,
		height: 570,
		zIndex: -10,
		width: 990,
		resizable: false
		
		})	

};

</script>
<?php
	$this->load->view('footer/jquery_ui_for_dialog.php');
	$this->load->view('footer/fancy_zoom.php');
?>
