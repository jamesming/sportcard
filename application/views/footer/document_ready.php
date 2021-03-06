<script type="text/javascript" language="Javascript">
	
$(document).ready(function() { 
			$.backstretch("<?php  echo base_url()   ?>uploads/<?php echo $data['users'][0]['user_id']   ?>/<?php echo $data['users'][0]['image_background_id']   ?>/image.jpg",{	
																	centeredX: true,         // Should we center the image on the X axis?
																	centeredY: false,        // Should we center the image on the Y axis?
																	speed: 0                 // fadeIn speed for background after image loads (e.g. "fast" or 500)
																}
			);
			account_menu();
			settings_box();
			get_stored_configurations();
			store_custom_configuration();
			activate_fonts_for_selection();
			thumbnail_controls();
			bind_events();
			
			$('li#panel-tab-1 a').click()
			
			//$("#menu1 a#settings_menu_item").click()

});


function account_menu(){
	
						$('#test').css({cursor:'pointer'}).attach_FancyZoom_JcropPopWindow().click(function(event) {

									$('.box').addClass('push-z-index-back');
							  	
						});	

						$("#menu1 a").css({cursor:'pointer'}).click(function(e) {          
							
							e.preventDefault();
							
							$('.box').hide();
							
							if( $(this).attr('id') == 'edit_profile_menu_item'){
							
								$('#head-line-box, #profile_box').show();

							}else if($(this).attr('id') == 'settings_menu_item'){
								
								$('#settings-box').show();
							
							}else if($(this).attr('id') == 'logout'){

								document.location.href='<?php echo  base_url(); ?>index.php/home/index?logout=1';									
																
							};
						

							
						});
						
							
}

function settings_box(){
	
	
								$('#settings-box').css({
									'position':'absolute',
									'left':($(window).width() / 2) - ($('#settings-box').width()/2) ,
									'top':'250px'
								})
		
							
								$('#password_section').hide();
								
								$('.settings_tabs').click(function(event) {
											
										$('.settings_sections').hide();
										$('#'+$(this).attr('activate')).show();
								
								});	
								
								$('#save_account_button').css({cursor:'pointer'}).click(function(event) {
				
										$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
										table:'users',
										id:<?php echo $data['user_id']    ?>,
										set_what:$('.account_section_inputs').serialize()
										},function(data) {
				
													alert(data);
											
										});	
				
					
								})
				
																
							
								$('#save_password_button').css({cursor:'pointer'}).click(function(event) {

									$.post("<?php echo base_url(). 'index.php/main/confirm_existing_password';    ?>",{
											table:'users',
											id:<?php echo $data['user_id']    ?>,
											current_password:$('#current_password').val()
											},function(validated) {
												

												if( validated == 1 ){
												
																if( $('#current_password').val() == $('#user_password').val() ){
																
																			$.post("<?php echo base_url(). 'index.php/main/update_password';    ?>",{
																					user_password:$('#user_password').val()
																					},function(data) {
																					
																							alert(data);
																					
																					});	
																
																}else{
																
																	alert('password does not match');
																
																};			
																										
												}else{
													
													alert('Your password does not match what was initially set.');
													
												};
											
											});	
								})	
	
}

function get_stored_configurations(){
	
			$('#first_name').val('<?php echo ( isset( $data['users'][0]['first_name'] ) ? $data['users'][0]['first_name']:'' )    ?>');
			$('#last_name').val('<?php echo ( isset( $data['users'][0]['last_name'] ) ? $data['users'][0]['last_name']:'' )    ?>');
			$('#position').val('<?php echo ( isset( $data['users'][0]['position'] ) ? $data['users'][0]['position']:'' )    ?>');
			$('#organization').val('<?php echo ( isset( $data['users'][0]['organization'] ) ? $data['users'][0]['organization']:'' )    ?>');
			$('#location').val('<?php echo ( isset( $data['users'][0]['location'] ) ? $data['users'][0]['location']:'' )    ?>');
			$('#sports').val('<?php echo ( isset( $data['users'][0]['sports'] ) ? $data['users'][0]['sports']:'' )    ?>');
			$('#profile_url').val('<?php echo ( isset( $data['users'][0]['profile_url'] ) ? $data['users'][0]['profile_url']:'' )    ?>');
			$('#email').val('<?php echo ( isset( $data['users'][0]['email'] ) ? $data['users'][0]['email']:'' )    ?>');
			$('#box_width').val('<?php echo ( isset( $data['users'][0]['box_width'] ) ? $data['users'][0]['box_width']:'' )    ?>');


			$('#head-line-box').css({
				'position':'absolute',
				'width':'<?php echo ( isset( $data['users'][0]['box_width']) ? $data['users'][0]['box_width']:'0' ) ?>',
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


			<?php if( isset($data['users'][0]['edit_mode']) && $data['users'][0]['edit_mode'] == 0
						||  $data['live_only'] == 1 
						){?>
									$('#edit_mode').text('Edit').attr('on', 0);	
									edit_mode_off();									
			<?php }else{?>
									$('#edit_mode').text('Preview').attr('on', 1);
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
				
				
				var width_of_name_container = $('#full_name_readonly').width() + 15;
				
				$('#head-line-box').css({'width':width_of_name_container});
				$('#box_width').val(width_of_name_container);				
				
				
				var font_name_serialized = "font_name=" + $(this).attr('font_name');
				
				$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
				table:'users',
				id:<?php echo $data['user_id']    ?>,
				set_what:'box_width='+width_of_name_container+'&'+font_name_serialized
				},function(data) {
				
					$('#y').val(data);
					
				});	
			});	

	
			$('#full_name')
			.keyup(function(event) {
				$('#full_name_readonly').html( $(this).val() );	
				Cufon.replace('#full_name_readonly',{ fontFamily: $('#full_name_readonly').attr('font_name'), hover: true });			
				
				var width_of_name_container = $('#full_name_readonly').width() + 15;
				
				$('#head-line-box').css({'width':width_of_name_container});
				$('#box_width').val(width_of_name_container);

							$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
							table:'users',
							id:<?php echo $data['user_id']    ?>,
							set_what:'box_width='+width_of_name_container+'&full_name='+$(this).val()
							},function(data) {
							
								$('#y').val(data);
								
							});	

			})
//			.blur(function(event) {
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
					
					$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
					table:'users',
					id:<?php echo $data['user_id']    ?>,
					set_what:transparency_serialized
					},function(data) {
					
						$('#y').val(data);
						
					});	
			});				

			$('#font_size').change(function(event) {
			
						$('#full_name_readonly').css({'font-size':$(this).val()});
						
						Cufon.replace('#full_name_readonly',{ fontFamily: $('#full_name_readonly').attr('font_name'), hover: true });
						
						
								var width_of_name_container = $('#full_name_readonly').width() + 15;
								
								$('#head-line-box').css({'width':width_of_name_container});
								$('#box_width').val(width_of_name_container);
								
								$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
								table:'users',
								id:<?php echo $data['user_id']    ?>,
								set_what:'box_width='+width_of_name_container+'&font_size='+$(this).val()
								},function(data) {
								
									$('#y').val(data);
									
								});							

						// store( $(this) );	
			});		
			
			$('#box_width').change(function(event) {
			
						$('#head-line-box').css({'width':$(this).val()});

						store( $(this) );	
			});					
			
			
			$( "#head-line-box" ).mouseup(function(){
						store_position( $(this) );
			});	
			
			$('#edit_mode').css({cursor:'pointer'}).click(function(event) {

					if( $(this).attr('on') == 1){
							edit_mode_off();	
							$(this).text('Edit').attr('on', 0);
			
					}else{
							$(this).text('Preview').attr('on', 1);			
							edit_mode_on();		
					};
					
					var edit_mode_serialized = "edit_mode=" + $(this).attr('on');
					
					$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
					table:'users',
					id:<?php echo $data['user_id']    ?>,
					set_what:edit_mode_serialized
					},function(data) {
					
						$('#y').val(data);
						
					});	

			});	

}

function bind_events(){
	
			$('#head-line-box .window-controls-container').css({visibility:'hidden'})
			$('#head-line-box').live("mouseover", function(){
						$(this).children('.window-controls-container').css({visibility:'visible'})
			 }).live("mouseout", function(){
						$(this).children('.window-controls-container').css({visibility:'hidden'})
			 });			

			$('#fancyZoom_div').setFancyZoomWindowSize(800, 560 );
			
			

			$('#profile_box').css({
				'position':'absolute',
				'left':($(window).width() / 2),
				'top':'250px',
				'margin-left':'-430px',
			})

	
			$( ".draggable" ).draggable({ 
					handle: "div.handle"
			})
			
			$('#head-line-box .handle')
			.mouseup(function(event) {
				
						$('#profile_box').show();
									
			}).mousedown(function() {
				
						$('#profile_box').hide();
				
			  		//$('#head-line-box .handle').unbind('mouseout');
			  		
			});
			

			$('.close-window').click(function(event) {
				$(this).parent().parent().hide();
			});	

			$('#panel-tabs_container ul.nav.nav-tabs li').css({cursor:'pointer'}).click(function(event) {
						
						if( $(this).attr('id') == 'panel-tab-3' ||
								$(this).attr('id') == 'panel-tab-2' 
						){
							$('#preview_box').hide()
						}else{
							
							$('#preview_box').show()
						};
						
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
			
			
			
			
			
				var mbox = $("#wysiwyg_text_area").css({
						height:"340px",
						width:"390px"
						}).htmlbox({
						toolbars:[
 						[
						"code","separator",
						"undo","redo","separator",
						"bold","italic","underline","fontsize","separator",
						"justify","left","center","right"
						]
					],
					skin:"gray"
					});
				

				$('#save_bio_button').click(function(event) {
					
						$('#wysiwyg_text_area').val(mbox.get_html());

						$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
						table:'users',
						id:<?php echo $data['user_id']    ?>,
						set_what:$('.bio_inputs').serialize()
						},function(data) {

						alert(data);
								
							
						});	

	
				})	
					

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

$.fn.setFancyZoomWindowSize = function(width, height) {
			$(this).css({width:width+'px',height:height+'px'})
			.children('iframe').css({
					width:width+'px',
					height:height+'px',
					<?php     
						echo ( $this->tools->browserIsExplorer()  ? "'margin-top':'40px'" :"" );
					?>
			})
};
	

$.fn.attach_FancyZoom_JcropPopWindow = function() {
	$(this).fancyZoom().css({cursor:'pointer'}).click(function(event) {
		$('#iframe_fancyZoom').attr('src','<?php  echo base_url()   ?>index.php/main/jcrop?image_id=' + $(this).attr('image_id') +  '&image_type_id=' + $(this).attr('image_type_id') +  '&li_index=' + $(this).attr('li_index')  )
	});	
	return this;
};
		

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
						
						$('#profile_box').show();
						
}

function edit_mode_off(){

							$('#profile_box').hide();
	
						
}

function store( dom_element ){
	
							$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
							table:'users',
							id:<?php echo $data['user_id']    ?>,
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

						$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
							table:'users',
							id:<?php echo $data['user_id']    ?>,
							set_what:$('#form0').serialize()
							},function(data) {
								//alert(data);
								$('#y').val(data);

								if( $('#edit_mode').attr('on') == 1){
										$('#profile_box').show();
								
								};

		
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
						                action: '<?php echo base_url();    ?>index.php/main/upload',
						                params: {
												        image_id: 0,
												        image_type_id: 0,
												        li_index: -1
												    },
														allowedExtensions: ['jpg', 'JPG'],
						                onComplete: function(id, fileName, responseJSON){
															//alert(JSON.stringify(responseJSON));
															
															
															var image_id_serialized = "image_background_id=" +  responseJSON['image_id'];
		
															$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
															table:'users',
															id:<?php echo $data['user_id']    ?>,
															set_what:image_id_serialized
															},function(data) {
									
																	
																
															});	
															
															
															
						                	$('#iframe_dom').attr('src','<?php echo base_url()    ?>index.php/main/resize?li_index=' + responseJSON['li_index']+ '&image_id='  + responseJSON['image_id'] +  '&image_type_id=' + responseJSON['image_type_id'] +  '&random='+ Math.floor(Math.random()*9999));
						                	
						                },
						                debug: true,
        										multiple: false
														
						            }); 
						            
						            window.uploader_pictures = new qq.FileUploader({
						                element: document.getElementById('upload_button_pictures'),
						                action: '<?php echo base_url();    ?>index.php/main/upload',
						                params: {
												        image_id: 0,
												        image_type_id: 1,
												        li_index: -1
												    },
														allowedExtensions: ['jpg', 'JPG'],
						                onComplete: function(id, fileName, responseJSON){
															//alert(JSON.stringify(responseJSON));
						                	$('#iframe_dom').attr('src','<?php echo base_url()    ?>index.php/main/resize?li_index=' + responseJSON['li_index']+ '&image_id='  + responseJSON['image_id'] +  '&image_type_id=' + responseJSON['image_type_id'] +  '&random='+ Math.floor(Math.random()*9999));
						                	
						                },
						                debug: true,
        										multiple: false
						            }); 
						            
						            
//						            
//												$('.update-image.backgrounds_update_button').live("click", function(){
//													
//														window.uploader_backgrounds.setParams({
//												        image_id:  $(this).parent().parent().attr('image_id') ,
//												        image_type_id: $(this).parent().parent().attr('image_type_id') ,
//												        li_index: $(this).parent().parent().index()
//														});
//														$('#btnUpload').click();// REFER TO fileuploader.js line 864. added  id='btnUpload'
//														
//												})
//												
												
												$('.thumbs-ul li .images_preview.inside_li').live("click", function(){					             

															
															$('#preview_box_inside').html('').css({
														    'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/'  + $(this).parent().attr('image_id') + '/image_cropped.jpg?random=<?php echo   rand(5,124344523)   ?>)',
														    'background-position': 'center 0px',
														    'background-repeat': 'no-repeat',
														    'background-size':'contain'
														    });
												});	
												
												$('.thumbs-ul li .videos_preview.inside_li').live("click", function(){					             


													$.post("<?php echo base_url(). 'index.php/main/get_video_iframe';    ?>",{
													image_id:$(this).parent().attr('image_id')
													},function(data) {
														
																$('#preview_box_inside').html(data);
														
													});																


															 
															// $('#preview_box_inside').html("<iframe src='http://www.msnbc.com' name='preview_video'	style='background:white;border:1px solid gray;width:833px;height:281px'  	border='1' 	frameborder='1' 	scrolling='auto' 	align='center' 	hspace='0' 	vspace=''	/>");
		
												});													
	

												$("#backgrounds-div").jcarousel({
												        scroll: 1,
												        initCallback: mycarousel_initCallback_1,
//												        buttonNextHTML: null,
//        												buttonPrevHTML: null
												});	
												$("#pictures-div").jcarousel({
												        scroll: 4,
												        initCallback: mycarousel_initCallback_2,
//												        buttonNextHTML: null,
//        												buttonPrevHTML: null
												});													
												$("#videos-div").jcarousel({
												        scroll: 4,
												        initCallback: mycarousel_initCallback_3,
//												        buttonNextHTML: null,
//        												buttonPrevHTML: null
												});													


												$('.hovering').live("mouseover", function(){
															$(this).children('.small_icons_panel').show()
												 }).live("mouseout", function(){
															$(this).children('.small_icons_panel').hide()
												 });

												
												$('.swap').live("click", function(){
													
														$.backstretch('<?php  echo base_url()   ?>uploads/<?php echo $data['user_id']   ?>/' + $(this).parent().parent().attr('image_id') + '/image.jpg',{	
																	centeredX: true,         // Should we center the image on the X axis?
																	centeredY: false,         // Should we center the image on the Y axis?
																	speed: 0                 // fadeIn speed for background after image loads (e.g. "fast" or 500)
																}
														);


														$('#preview_box_inside').html('').css({
													    'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $data['user_id']   ?>/'  + $(this).parent().parent().attr('image_id') + '/image_cropped.jpg?random=<?php echo   rand(5,124344523)   ?>)',
													    'background-position': 'center 0px',
													    'background-repeat': 'no-repeat',
													    'background-size':'contain'
													    });														
														
														var image_id_serialized = "image_background_id=" + $(this).parent().parent().attr('image_id');
	
														$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
														table:'users',
														id:<?php echo $data['user_id']    ?>,
														set_what:image_id_serialized
														},function(data) {
								

															
														});	

														
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
													
													
													$.post("<?php echo base_url(). 'index.php/main/remove';    ?>",{
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
							$.post("<?php echo base_url(). 'index.php/main/get_video_url';    ?>",{
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