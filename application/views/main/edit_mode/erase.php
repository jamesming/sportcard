					<div  id='setting-tabs_container' class="tabbable"   style='padding:10px'  >
						
						
					  <ul class="nav nav-tabs"   style='margin-top:10px;'  >
					    <li  id='setting-tab-1' class="active"><a href="#1" data-toggle="tab">Account</a></li>
					    <li  id='setting-tab-2' ><a href="#2" data-toggle="tab">Password</a></li>
					  </ul>
					  
					  
					  <div class="tab-content">
					    <div class="tab-pane active" id="1">
					      <p>	
					      	<table>
													<tr>
	
														<td ><!--
															<div  id='add-to' image_id='0' image_type_id='0' li_index='-1' class='upload_button'>upload
															</div>-->
														
															
															
								
															
														<div id="upload_button_backgrounds"  class='btn float_right'   >		
															
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
								<div>
										<legend >Edit you Bio</legend>
								</div>
								<div>
								    <div class="span5">
								
								      <form class="form-horizontal">
								
								        <fieldset>

       
								         <?php foreach( $data['input_bio_array']['inputs']  as  $inputs){ 
								         
								         
								         				if( $inputs['type'] == 'text'){?>
								         					
														          <div class="control-group">
														
														            <label class="control-label" for="<?php echo $inputs['input_name']    ?>"><?php echo $inputs['label']    ?></label>
														
														            <div class="controls">
														
														              <input type="text" class="<?php echo $data['input_bio_array']['size-class']    ?> bio_inputs '  id='<?php echo $inputs['input_name']    ?>' name="<?php echo $inputs['input_name']    ?>" type="" value="<?php  echo $data['users'][0][$inputs['input_name']]   ?>">
														
														            </div>
														
														          </div>										         				
								         				
								         				<?php
								         				}elseif( $inputs['type'] == 'select'){
								         				?>	
								         					
														          <div class="control-group">
														
														            <label class="control-label" for="<?php echo $inputs['input_name']    ?>"><?php echo $inputs['label']    ?></label>
														
														            <div class="controls">
														
														              <select  class="<?php echo $data['input_bio_array']['size-class']    ?> bio_inputs " id='<?php echo $inputs['input_name']    ?>' name='<?php echo $inputs['input_name']    ?>'>
														              	
														              						<?php foreach( $inputs['options']  as  $option){ ?>	
														              							
																																	<option value="<?php echo $option['value']    ?>"><?php echo $option['text']    ?></option>
																																	
																											<?php } ?>	
														              </select>
														
														            </div>
														
														          </div>
								         					
								         				<?php
								         				};
								         			 
								         } ?>

								        </fieldset>
								
								      </form>
								
								    </div>
								 		<div class="span5"    >

																	<style>
																	#wysiwyg_div{
																	margin:0px 0px 0px 0px;
																	padding:0px 0px 0px 0px;
																	}
																	
																	</style>
																	

																	
																		<div id='wysiwyg_div' class='clearfix ' >
																				<textarea  name='bio' class='bio_inputs clearfix' id='wysiwyg_text_area'><?php echo ( isset( $data['users'][0]['bio'] ) ? $data['users'][0]['bio']:'' )    ?></textarea>
																		</div>								 			
										</div>									
									
								</div>
			          <div class='clearfix'  style='padding:12px'  >
			
			            <button  id='save_bio_button' type="submit" class="float_right btn btn-primary">Save changes</button>
			
			          </div>

							</div>
							    
					  </div>
					</div>