				<div  id='settings-box' class="draggable box  rounded shadowed"   >
					<div class='window-controls-container top-left-rounded top-right-rounded'    style='margin-bottom:-40px;padding-top: 8px;'  >
						<div class="handle icon-boxes top-right-rounded">
						<i class="icon-move"></i>	
						</div>
					</div>
					<div  id='setting-tabs_container' class="tabbable"   style='padding:10px'  >
						
						
					  <ul class="nav nav-tabs"   style='margin-top:10px;'  >
					    <li  id='setting-tab-1' class="active"><a href="#1" data-toggle="tab">Account</a></li>
					    <li  id='setting-tab-2' ><a href="#2" data-toggle="tab">Password</a></li>
					  </ul>
					  
					  
					  <div class="tab-content">
					    <div class="tab-pane active" id="1">
<style>
.setting-padding-right{
padding-right:30px;	
}
</style>
								<div>
										<legend >Edit you account</legend>
								</div>
								<div  class='setting-padding-right ' >
								
								      <form class="form-horizontal">
								
								        <fieldset>

       
								         <?php foreach( $data['input_account_array']['inputs']  as  $inputs){ 
								         
								         
								         				if( $inputs['type'] == 'text'){?>
								         					
														          <div class="control-group">
														
														            <label class="control-label" for="<?php echo $inputs['input_name']    ?>"><?php echo $inputs['label']    ?></label>
														
														            <div class="controls">
														
														              <input type="text" class="<?php echo $data['input_account_array']['size-class']    ?> account_inputs '  id='<?php echo $inputs['input_name']    ?>' name="<?php echo $inputs['input_name']    ?>" type="" value="<?php  echo $data['users'][0][$inputs['input_name']]   ?>">
														
														            </div>
														
														          </div>										         				
								         				
								         				<?php
								         				}elseif( $inputs['type'] == 'select'){
								         				?>	
								         					
														          <div class="control-group">
														
														            <label class="control-label" for="<?php echo $inputs['input_name']    ?>"><?php echo $inputs['label']    ?></label>
														
														            <div class="controls">
														
														              <select  class="<?php echo $data['input_account_array']['size-class']    ?> account_inputs " id='<?php echo $inputs['input_name']    ?>' name='<?php echo $inputs['input_name']    ?>'>
														              	
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
								
						          <div class='clearfix' >
						
						            <button  id='save_account_button' type="submit" class="float_right btn btn-primary">Save changes</button>
						
						          </div>
									
								</div>


					    </div>
					    <div class="tab-pane " id="2">
								<div>
										<legend >Edit you Password</legend>
								</div>
								
								<div  class='setting-padding-right '>

								
								      <form class="form-horizontal">
								
								        <fieldset>

       
								         <?php 	 foreach( $data['input_password_array']['inputs']  as  $inputs){ ?>

								         					
														          <div class="control-group">
														
														            <label class="control-label" for="<?php echo $inputs['input_name']    ?>"><?php echo $inputs['label']    ?></label>
														
														            <div class="controls">
														
														              <input type="password" class="<?php echo $data['input_password_array']['size-class']    ?> password_inputs '  id='<?php echo $inputs['input_name']    ?>' name="<?php echo $inputs['input_name']    ?>" >
														
														            </div>
														
														          </div>		
														          
												<?php } ?>

								        </fieldset>
								
								      </form>
						          <div class='clearfix'   >
			
						            	<button  id='save_password_button' type="submit" class=" float_right  btn btn-primary">Save changes</button>
			
						          </div>									      

						
									
								</div>


							</div>
							    
					  </div>
					</div>
	
				</div>