<style>

			#top_button_container{
			  padding-left:11px;
			}						

							
							.add_button{
							    background-image: url(<?php echo base_url()    ?>images/icons-390.png);
							    background-position: -11px -15px;
							    background-repeat: no-repeat;
							    height: 22px;
							    width: 22px;
							    float:left;
							    margin-top: 0px;		
							}
							
							.add_button, .save{
									margin-top: 1px;
									margin-left: 1px;
									cursor:pointer;
							}
							
							.save{
							    background-image: url(<?php echo base_url()    ?>images/disk_save.png);
							    background-position: 3px 3px;
							    background-repeat: no-repeat;	
							    height: 22px;
							    width: 22px;
							}
							
							#save_text{
							color:gray;
							margin:5px 0px 0px 5px;	
							font-weight:bold;
							cursor:pointer;
							}
							
							
							.loading{
						    background-image: url(<?php echo base_url()    ?>images/ajax-loader.gif);
						    background-position: 5px 4px;
						    background-repeat: no-repeat;
						    height: 22px;
						    width: 22px;	
							}
							
							#view_resume{
							    background-image: url(<?php echo base_url()    ?>images/icons-390.png);
							    background-position: -11px -75px;
							    background-repeat: no-repeat;
							    float: left;
							    height: 22px;
							    margin-top: 0;
							    width: 22px;
							    margin-left: 0px;		
							}
			
			
			#resume_container{
				height:auto;
			  /*border: 1px solid;*/
			}
							ul#resume  {
								width:692px;  /* Used the adjust margin of pull out */
								list-style-type: none; 
								padding:0px;
								clear:both;
							}
							#resume li { 
								float:left; 
								padding:5px; 
								height:25px;
								}
									#resume li div.div_row { 
										width:692px; 
										height:30px; 
										border:solid 1px black; 
										background-color:#E0E0E0; 
										text-align:center;
									}
									#resume .placeHolder div.div_row { 
										background-color:white!important; 
										border:dashed 1px gray !important; 
									}
									
													span.grab{
														margin: 7px 8px 0 10px;
														float:left;
													}
									
									
													input.text{
												    border: 1px solid gray;
												    height: 19px;
												    margin-right: 2px;
												    margin-top: 3px;
												    padding:3px 0px 0px 5px;
												    <?php $width_of_field = '190px';   ?>
												    width: <?php  echo $width_of_field   ?>;
														float:left;
													}
			
													.header_span{
														display:block;
														font-weight:bold;
														font-size:12px;	
														margin: 5px 8px 0 2px;
														float:left;
													}
													
													input.header_check{
															display:block;
															<?php if( $this->tools->browserIsExplorer() ){?>
																							margin: 5px 1px 0 10px;	
															<?php }else{?>
																							margin: 8px 1px 0 10px;	
															<?php } ?>
															float:left;
													}		
													
													div.delete{	
													    background-image: url(<?php echo base_url()    ?>images/icons-390.png);
													    background-position: -67px -164px;
													    background-repeat: no-repeat;
													    height: 22px;
													    margin-left: 5px;
													    width: 22px;
															cursor:pointer;
															float:left;
													}

</style>


	
			<div  id='top_button_container'  class='clearfix ' >
				<div  id='add' class='float_left add_button'  title='Add Header'>
				</div>
				<div  id='view_resume' href='#zoom_div_container'  class='float_left '   >
				</div>				
				<div  class='save float_left'  title='Save'>
				</div>
				<div  id='save_text' class='float_left' >Save
				</div>
				
			</div>
		
	    <div  id='resume_container'  >
					<ul id="resume">
					</ul>
	    </div>
			
			<div  id='results'>			
			</div>
			
			
			<div id="zoom_div_container"  >
				<iframe id="iframe_content_text" scrolling="AUTO"  style="
					width:750px;
					height:555px;
				<?php if( $this->tools->browserIsExplorer() ){?>
												margin-top: 40px;	
				<?php }else{?>
												margin-top: 20px;	
				<?php } ?> 
					padding: 0;
					" 
					frameborder="0" src=""  >
					
				    <p>Your browser does not support iframes.</p>
				    
				</iframe>
			</div>	


			
			
<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/dragsort/jquery.dragsort-0.4.3.min.js"></script>

<script type="text/javascript">
	
		order = new Array();

		rows = new Array();
		
		<?php 
		$count=0;
		foreach($website_data['resume_entries']  as $row){  ?>	
			
			rows[<?php echo $count ?>] = new Array('<?php echo $row->id    ?>','<?php echo $row->field_1    ?>','<?php echo $row->field_2    ?>','<?php echo $row->field_3    ?>','<?php echo $row->header    ?>');
			
		<?php 
		$count++;
		} ?>
		

$(document).ready(function() {
	
				$('.middle_section_box').height( rows.length * 44);

	
		  	$('#view_resume').css({cursor:'pointer'})
		  	.fancyZoom().click(function(event) {
		  		
					$("#iframe_content_text").attr('src','<?php echo base_url();    ?>index.php/themes/view_resume_top_to_bottom?user_id=<?php  echo $website_data['user_id']   ?>');
					
				});		
	
				for (i=0;i<rows.length;i++) {
					append_one_row(i);
				}
			
		    $("#resume").dragsort({ 
		    		dragSelector: "span.grab", 
		    		dragEnd: saveOrder, 
		    		placeHolderTemplate: "<li class='placeHolder'><div  class='div_row ' ></div></li>" });
		    		
		    $('div.delete').live('click', function() {
		    	rows[$(this).attr('row')][5] = 1;
		    	$(this).parent().parent().remove();
				});	
				
		    $('#add').click(function(event) {  
		    	newest_row = add_element_to_rows_array();
		    	make_into_header( newest_row.children() );
				});		
				
		    $('.add_from_side').live('click', function() {
		    	newest_row = add_element_to_rows_array();
		    	var row_number = $(this).attr('row');
		    	var designated_row = $('#resume li#row_'+row_number.toString());
		    	newest_row.insertAfter( designated_row );
				});						

		    $('.add_header_from_side').live('click', function() {
		    	newest_row = add_element_to_rows_array();
		    	var row_number = $(this).attr('row');
		    	var designated_row = $('#resume li#row_'+row_number.toString());
		    	 make_into_header( newest_row.children() );
		    	newest_row.insertAfter( designated_row );
				});	
				
				
				$('.header_check').live('click', function() {
					
						if( $(this).is(':checked')  ){

							 make_into_header( $(this).parent()  );

						}else{
							$(this).parent().css({background:'#FFFFFF'});
							$(this).parent().children('input.text').show();
							$(this).parent().children('input.text:nth-child(2)')
							.css({width:'<?php echo $width_of_field;    ?>','font-weight':'normal'});
							
						};
					
						
				});

				$('.save, #save_text').click(function(event) {
					
						var save_dom = $('.save'); 
					
						save_dom.removeClass('save').addClass('loading');
					
						saveOrder(); 

						for (i=0;i<rows.length;i++) {
			
							rows[i][1] = $("input#"+i+"-1").val();
							rows[i][2] = $("input#"+i+"-2").val(); 
							rows[i][3] = $("input#"+i+"-3").val();

							if( $('input#header_check-'+i).is(':checked')  ){ // HEADER
								rows[i][4] = 1;
							}else{
								rows[i][4] = 0;
							};
							
							if( rows[i][1] == null ){ // DELETE 
								rows[i][5] = 1;
							}else{
								rows[i][5] = 0;
							};
							
							rows[i][6] = i;  // ORDER
							
						}
						
						var j = 0;
						for(var k in order){
							rows[order[k]][6] = j; // ORDER
							j++;
						}
				
						$.post("<?php echo base_url(). 'index.php/main/update_resume'; ?>",{
						rows:rows
						},function(data) {
						
							$('#results').html(data);
							
							setTimeout(function() { 											
							save_dom.removeClass('loading').addClass('save');
														}, 300);		
							
							
						
						});  	
				});

});


function add_element_to_rows_array(){
	
		    	rows.push(new Array('','','',''));
		    	
		    	var new_index = rows.length - 1;
		    	
		    	append_one_row(  new_index  );
		    	
		    	var newest_row = $('#resume li#row_'+new_index.toString());
		    	
		    	$('#resume').prepend(newest_row);
		    	
		    	return newest_row;
}

function append_one_row(i){
	
		$("#resume").append("<li id='row_"+i+"' itemID='"+i+"'><div  class='div_row ' ><span title='Move' class='grab'><img src='<?php  echo base_url()   ?>images/drag.png' /></span>&nbsp;&nbsp;</div></li>");
		
		for (k=1;k<=3;k++) {
			$("#resume li#row_" + i + " div.div_row").append("<input  class='text '  id='" + i + "-" + k + "' value='" + rows[i][k] + "' /></li>");
		}

		
		designated_row = $("#resume li#row_" + i + " div.div_row");
		
		designated_row.append("<input id='header_check-" + i + "' class='header_check '   type='checkbox' value=''   style='display:none'  ><span  class='header_span '  style='display:none' >Header</span><div  title='Insert' class='add_button add_header_from_side' style='display:none'   row='"+i+"'></div><div    title='Add Item' class='add_button add_from_side' row='"+i+"'></div> <div title='Delete' class='delete ' row='"+i+"'></div>");
	
	
		if( rows[i][4] == 1  ){
			
			make_into_header( designated_row  );

		};
	
		$('.middle_section_box').height( rows.length * 44);
		
}

function make_into_header( designated_row  ){
	
			designated_row.css({background:'#BCBCBC'});
			designated_row.children('input.text').hide();
			designated_row.children('input.text:nth-child(2)').show()
			.css({width:'588px','font-weight':'bold'});
			designated_row.children('input.header_check').attr('checked','checked')

	
}

function saveOrder() {
	order =  $("#resume li").map(function() { 
			return $(this).attr("itemID"); 
		}).get();
};
		    
		    
</script>
<?php
	$this->load->view('footer/fancy_zoom.php'); 
			
			
			