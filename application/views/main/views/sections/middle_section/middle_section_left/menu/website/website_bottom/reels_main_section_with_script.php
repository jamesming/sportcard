<style>


#reels_container{
    background: none repeat scroll 0 0 #FFFFFF;
    padding: 0px 0 16px 0px;
    clear:both;
}
div.pic_row {
    margin-bottom: 13px;
}
		div.pic_row div.pic_box {
		    border: 1px dashed gray;
		    height: 264px;
		    margin-right: 12px;
		    width: 353px;
		    background:#F8F6F6;
		}
		

		div.pic_row div.contains_image_container{
		    border: 1px solid lightgray;
		    padding: 2px;
		    width: 349px;
		}
		
				div.pic_row div.contains_image_container div.contains_image {
				    height: 261px;
				    width: 347px;
						background:ivory;
				    border: 1px solid lightgray;
				}		
				
				
								
								div.small_icon_container{
							    display: block;
							    width: 78px;
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
						
											div.pic_row div.pic_box div.viewing{
										    background-image: url(<?php echo base_url()    ?>images/camera.png);
										    background-repeat: no-repeat;
										    background-position: 0px 0px;
											}
				
				
		
		div.pic_row div.first_available {
    border: 1px solid lightgreen;
    color: gray;
    font-size:20px;
    font-weight: bold;
    height: 47px;
    text-align:center;
    width: 353px;
    padding:108px 0px;
		}
		div.pic_row div.last_in_row {
		    margin-right: 0px;
		}
#dialog{
display:none;	
}

		

				
		#dialog textarea#youtube_url{
    height: 129px;
    margin-left: 5px;
    margin-top: 13px;
    width: 373px
		}	
		
#viewing_div{
	width:400px;
	height:160px;
	display:none;
}
		#iframe_src_for_speech_viewing{
			width:400px;
		}	
	
</style>



	
																		<div  id='reels_container'>
																		
																		<?php foreach($website_data['reels']  as $reel_row){  ?>
																		
																				<div  class='pic_row clearfix' >
																		
																				<?php
																				foreach($reel_row  as $reel){  ?>
																					
																					
																								<?php if($reel['type'] == 'contains_image'){?>
																								
																								
																											<div  class='pic_box float_left contains_image_container' >

																													<?php 
																													// echo $reel['url'] 
																													?>
																													
																													
																													<!--  style='background:url(<?php echo base_url()    ?>index.php/home/thumb_of_youtube_video_id/<?php echo $reel['youtube_video_id']    ?>/348)'       -->
																													
																													<div    reel_id='<?php echo $reel['reel_id']     ?>' 
																																class=' contains_image'    
																																style='background:url(<?php echo base_url()    ?>uploads/reels/<?php  echo $website_data['user_id']   ?>/<?php echo $reel['reel_id']    ?>/image.png?rand=<?php echo rand(5,12312)    ?>) no-repeat'  
																																>
																														
																														
																													</div>			
																												  
																											</div>
																		
																		
																								<?php }elseif (  $reel['type'] == 'first_available'  ) {?>
																								
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
																		
																		
													
																		
<div id="dialog" title="Upload URL"     >

		<textarea id='youtube_url'></textarea>
		<input id='reel_id' name="reel_id" type="hidden" value="0">
		<input id="submit_url_button" type="button" value="submit">

</div>

<div id="viewing_div">
				

		<iframe id="iframe_src_for_speech_viewing" 
			frameborder="0" scrolling=no src=""   >
			
		    <p>Your browser does not support iframes.</p>
		    
		</iframe>				

</div>	


<?php 
// ** USED FOR COLORBOX
foreach($website_data['reels']  as $reel_row){  
	foreach($reel_row  as $reel){  ?>
			<a  id='launch_colorbox_for_reel_id_<?php echo $reel['reel_id']    ?>'  href='<?php echo base_url()    ?>index.php/themes/iframe_youtube?reel_id=<?php echo $reel['reel_id']    ?>&rand=<?php  echo rand(5,3242)   ?>'   rel='reels_group'    style='display:none'  ></a>
<?php } 
} ?>			

<?php     	$this->load->view('header/colorbox_css.php');  ?>
<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/colorbox/jquery.colorbox-min.js"></script>

<script type="text/javascript" language="Javascript">
$(document).ready(function() {
	
				$('.pic_row div.pic_box:nth-child(2)').addClass('last_in_row');
				
				$('.contains_image')
				
				.html("<div  class='small_icon_container float_right transparent_class'        ><div   class='delete small_icon'  title='Remove Picture'  ></div><div  class='edit small_icon' title='Change Picture'  ></div><div    href='#viewing_div'  class='viewing small_icon'  title='Make speech viewing'  ></div></div>")
				
				
				.mouseover(function() {
					
								$(this).find('.small_icon_container').css({display:'block'});
								
						}).mouseout(function(){
							
							
								$(this).find('.small_icon_container').css({display:'none'});
						});
						
						
				$('.delete').css({cursor:'pointer'}).click(function(event) {				
						if(  confirm('Do you really want to remove this picture?')  ){
						    document.location.href='<?php echo  base_url();   ?>index.php/main/remove_reel?reel_id=' + $(this).parent().parent().attr('reel_id');
						}
				});
				


				
				$('.edit, .first_available').css({cursor:'pointer'}).click(function(event) {
					open_dialogue_upload_image(
					 $(this).parent().parent().attr('reel_id')
					);
				})
				
				
				$('#submit_url_button').css({cursor:'pointer'}).click(function(event) {				
						$.post("<?php echo base_url(). 'index.php/main/update_reels'; ?>",{
							reel_id:$('#reel_id').val(),
							youtube_url: $('#youtube_url').val()
						},function(data_from_first_post) {
							//alert(data_from_first_post);
							document.location.reload(true);
							
						});	
				});
				
				
				// ** USED FOR COLORBOX
				$("a[rel='reels_group']").colorbox();

				$("a[rel='reels_group']").click(function(e) {
		    	e.preventDefault();  
				}); // .css({cursor:'default'});

				$('.viewing').css({cursor:'pointer'}).click(function(event) {
					$('#launch_colorbox_for_reel_id_' + $(this).parent().parent().attr('reel_id')).click();
				});		
						

});		



function submit_viewing_form( reel_id ){
	

	
						$.post("<?php echo base_url(). 'index.php/main/update_viewing_text'; ?>",{
							reel_id:reel_id,
							viewing_text:$('#viewing_text').val()
						},function(data_from_first_post) {

							alert('updated');
							
						});
	
	
	
}

function open_dialogue_upload_image( reel_id ){

		if( reel_id != undefined ){
			$('#reel_id').val(reel_id);			
		};

		
		var width_of_dialog = 410;
		var height_of_dialog = 280;
		var left_coord = ($(window).width()/2 - width_of_dialog/2);

		$("#dialog" ).dialog({
			position:[left_coord,200],
			height: height_of_dialog,
			zIndex: -10,
			width: width_of_dialog,
			resizable: false 
			})
						
};
						


</script>
<?php
	$this->load->view('footer/jquery_ui_for_dialog.php');
	$this->load->view('footer/fancy_zoom.php');
?>
