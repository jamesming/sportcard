		<div   id='payment_wrapper'  class=' input_wrapper'   style='margin:0px 0px;'  >
		
									<div>
													<style>
														table#payment_table{
															width:410px;
															/*border:1px dotted gray;*/
														}
														table#payment_table td{
															height:14px;
														 	padding:17px 4px 3px 10px;
															color:gray;
															font-weight:bold;
														}
																table#payment_table td div.input_background{
																	margin-top:-7px;
																}
																
																
															table#payment_table select{
															margin:0px 0px 0px 0px;
															border:1px solid gray;
															color:gray;
															outline:none;
															}		
																
																
																
													#submit_wrapper {
													    margin: 53px 0 0 33px;
													}
													#submitlink {
													    margin: 17px 0 0 66px;
													}
				
													
													
													#state_wrapper{
												    display: none;
												    height: 100px;
												    left: 142px;
												    position: absolute;
												    top: 419px;
												    width: 148px;
													}
													
															select#state{
															width:147px;	
															}									
													
													#month_wrapper{
												    background: none repeat scroll 0 0 white;
												    height: 100px;
												    left: 142px;
												    position: absolute;
												    top: 507px;
												    width: 49px;
												    z-index: 1;
												    display:none;
													}
													
															select#month{
														    width: 50px;
														    height: 131px;
															}		
													
													
													#year_click{
														margin-left:7px;	
													}
													
													#year_wrapper{
												    background: none repeat scroll 0 0 white;
												    height: 100px;
												    left: 199px;
												    position: absolute;
												    top: 507px;
												    width: 49px;
												    z-index: 1;
												    display:none;
													}									
													
															select#year{
														    height: 131px;
														    width: 53px;
															}		
																
													#zip_label{
														margin-left:16px;
													}
													#zip_input{
														margin-left:7px;	
													}
													#cvv_label{
														margin-left:58px;	
													}
													#cvv_input{
														margin-left:7px;
													}
													</style>
													
													<form id='form0' method='post' 
														action='<?php echo base_url()    ?>index.php/main/index/message/upgraded'>
														<table  id='payment_table'>
															<tr>
																<td>First Name
																</td>
																<td>
																		<div  class='input_background input_300 ' >
																			<input name='first_name' id="first_name" type="text" value=""  >
																		</div>
																</td>
															</tr>
															<tr>
																<td>Last Name
																</td>
																<td>
																		<div  class='input_background input_300 ' >
																			<input name='last_name' id="last_name" type="text" value=""  >
																		</div>
																</td>
															</tr>		
															
															<tr>
																<td>Address
																</td>
																<td>
																		<div  class='input_background input_300 ' >
																			<input name='address'  id="address" type="text" value=""  >
																		</div>
																</td>
															</tr>
															<tr>		
																<td>City
																</td>
																<td>
																		<div  class='input_background input_300 ' >
																			<input name='city'  id="city" type="text" value=""  >
																		</div>
																</td>		
															</tr>	
														
															<tr>
																<td >
																	State
																</td>
																<td>
														
																		<div  id='state_click' class='clicker float_left input_background input_150_select ' >
																			
																		</div>
							
							
							
																		<div   id='state_wrapper'  >
																			<select name='state' id='state' multiple size='15'>
																					<option value=''>--Select State--</option>
				                              <option value="AL">Alaska</option> 
				                              <option value="AZ">Arizona</option> 
				                              <option value="AR">Arkansas</option> 
				                              <option value="CA">California</option> 
				                              <option value="CO">Colorado</option> 
				                              <option value="CT">Connecticut</option> 
				                              <option value="DE">Delaware</option> 
				                              <option value="DC">District of Columbia</option> 
				                              <option value="FL">Florida</option> 
				                              <option value="GA">Georgia</option> 
				                              <option value="HI">Hawaii</option> 
				                              <option value="ID">Idaho</option> 
				                              <option value="IL">Illinois</option> 
				                              <option value="IN">Indiana</option> 
				                              <option value="IO">Iowa</option> 
				                              <option value="KS">Kansas</option> 
				                              <option value="KY">Kentucky</option> 
				                              <option value="LA">Louisiana</option> 
				                              <option value="ME">Maine</option> 
				                              <option value="MD">Maryland</option> 
				                              <option value="MA">Massachusetts</option> 
				                              <option value="MI">Michigan</option> 
				                              <option value="MN">Minnesota</option> 
				                              <option value="MS">Mississippi</option> 
				                              <option value="MO">Missouri</option> 
				                              <option value="MT">Montana</option> 
				                              <option value="NE">Nebraska</option> 
				                              <option value="NV">Nevada</option> 
				                              <option value="NH">New Hampshire</option> 
				                              <option value="NJ">New Jersey</option> 
				                              <option value="NM">New Mexico</option> 
				                              <option value="NY">New York</option> 
				                              <option value="NC">North Carolina</option> 
				                              <option value="ND">North Dakota</option> 
				                              <option value="OH">Ohio</option> 
				                              <option value="OK">Oklahoma</option> 
				                              <option value="OR">Oregon</option> 
				                              <option value="PA">Pennsylvania</option> 
				                              <option value="RI">Rhode Island</option> 
				                              <option value="SC">South Carolina</option> 
				                              <option value="SD">South Dakota</option> 
				                              <option value="TN">Tennessee</option> 
				                              <option value="TX">Texas</option> 
				                              <option value="UT">Utah</option> 
				                              <option value="VT">Vermont</option> 
				                              <option value="VA">Virginia</option> 
				                              <option value="WA">Washington</option> 
				                              <option value="WV">West Virginia</option> 
				                              <option value="WI">Wisconsin</option> 
				                              <option value="WY">Wyoming</option> 
																					
																					
																					
																					
																					
																			</select>
																		</div>
							
							
																		<div  id='zip_label' class='float_left second_label' >Zip				
																		</div>
																		<div  id='zip_input' class='float_left input_background input_100 second_input_wrapper' >
																			<input name='Zip'  id="Zip" type="text" value=""  >
																		</div>															
														
														
																	
																</td>	
															</tr>	
															<tr>		
																<td>Credit Card
																</td>
																<td>
																		<div  class='input_background input_300 ' >
																			<input name='cc'  id="cc" type="text" value=""  >
																		</div>
																</td>		
															</tr>	
															
															
															<tr>
																<td >
																	Expiration
																</td>
																<td>
														
																		<div  id='month_click' class='clicker float_left input_background input_50_select ' >
																			
																		</div>
																		
																		<div   id='month_wrapper'  >
																			<select name='month' id='month' multiple size='5'>
																				<option  value='01'>01</option>
																				<option  value='02'>02</option>
																				<option  value='03'>03</option>
																				<option  value='04'>04</option>
																				<option  value='05'>05</option>
																				<option  value='06'>06</option>
																				<option  value='07'>07</option>
																				<option  value='08'>08</option>
																				<option  value='09'>09</option>
																				<option  value='11'>11</option>
																				<option  value='12'>12</option>
																			</select>
																		</div>
																		
																		<div   id='year_click' class='clicker float_left input_background input_50_select '    >
																		</div>			
																		
																		<div   id='year_wrapper'  >
																			<select name='year' id='year' multiple size='5'>
																				<option  value='2011'>2011</option>
																				<option  value='2012'>2012</option>
																				<option  value='2013'>2013</option>
																				<option  value='2014'>2014</option>
																				<option  value='2015'>2015</option>
																				<option  value='2016'>2016</option>
																				<option  value='2017'>2017</option>
																				<option  value='2018'>2018</option>
																				<option  value='2019'>2019</option>
				
																			</select>
																		</div>														
																													
																		
																		<div  id='cvv_label' class='float_left second_label' >CVV				
																		</div>														
																		
																		<div   id='cvv_input' class='float_left input_background input_100 second_input_wrapper' >
																			<input name='cvv'  id="cvv" type="text" value=""  >
																		</div>
				
																		
														
																	
																</td>	
															</tr>
															
															
														</table>
													</form>
									</div>
		
									<div  id='submit_wrapper'>
										
										
										<div  class='float_left ' >
											
											<img src='<?php echo base_url()    ?>images/authorize_logo.gif'>
										</div>
										
										
				<div   class='update_button float_left transparent_button'  >
						<div  class='top_transparent_button ' >
							<div  class='bottom_transparent_button' >
					
							</div>
								<div  class='middle_transparent_button' >
									Upgrade
								</div>
						</div>					
				</div>
										
										
									</div>
			
									<div  class='error_message clearfix' >
						
									</div>				
							
		</div>
<style>
	.update_button.transparent_button{
	width:110px;
	margin:0px 0px 0px 60px;
	}
	.update_button div.top_transparent_button{
		background:orange;
	}
</style>
		<script type="text/javascript" language="Javascript">
		$(document).ready(function() {
			
			
			$('.update_button div.middle_transparent_button').css({'margin-left':($('.update_button.transparent_button').width()-$('.update_button div.middle_transparent_button').width())/2+'px'})

			
			
			$('table#payment_table td:nth-child(1)').css({width:'65px'})

			$('.clicker').css({cursor:'pointer'}).click(function(event) {
					$(this).next().toggle()	
			});	
			
			$('#payment_table select').change(function(event) {
					$(this).parent().prev().html( $(this).children('option:selected').text() );
					$(this).parent().hide()
			});

			$('.update_button').click(function(event) {
						$('#form0').submit();
			});	
		
		});	
		</script>