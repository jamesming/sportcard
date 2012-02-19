				<div  id='settings-box' class="draggable box  rounded shadowed"   >
					<div class='window-controls-container top-left-rounded top-right-rounded'    style='margin-bottom:-40px;padding-top: 8px;'  >
						<div class="handle icon-boxes top-right-rounded">
						<i class="icon-move"></i>	
						</div>
					</div>
					<div  id='setting-tabs_container' class="tabbable"   style='padding:10px'  >
						
						
					  <ul class="nav nav-tabs"   style='margin-top:10px;'  >
					    <li  id='setting-tab-1' class="active"><a href="#6" data-toggle="tab">Account</a></li>
					    <li  id='setting-tab-2' ><a href="#7" data-toggle="tab">Password</a></li>
					  </ul>
					  
					  
					  <div class="tab-content">
					    <div class="tab-pane active" id="6">
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
								         ?>

														          <div class="control-group">
														
														            <label class="control-label" for="<?php echo $inputs['input_name']    ?>"><?php echo $inputs['label']    ?></label>
														
														            <div class="controls">
														
														              <input   id='<?php echo $inputs['input_name']    ?>' name="<?php echo $inputs['input_name']    ?>"   type="text" class="account_section_inputs   <?php echo $data['input_account_array']['size-class']    ?> ' value="<?php  echo $data['users'][0][$inputs['input_name']]   ?>">
														
														            </div>
														
														          </div>										         				

								         <?php			 
								         } ?>

								        </fieldset>
								
								      </form>
								
						          <div class='clearfix' >
						
						            <button  id='save_account_button' type="submit" class="float_right btn btn-primary">Save changes</button>
						
						          </div>
									
								</div>


					    </div>
					    <div class="tab-pane " id="7">
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