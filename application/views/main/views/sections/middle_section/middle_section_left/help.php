

<div  class='help_top'  >
		
</div>	
<div  class='help_bottom ' >
	
	
	<?php
	// 	$this->load->view('main/views/sections/middle_section/middle_section_left/message/help_bottom/'.$website_data['menu_item'].'.php');  
	?>
	
<style>
.rounded_gray{
	width:80px;
}
.rounded_gray_middle{
		height:20px;
    width: 100%;
    text-align: center;
    font-size:14px;
    color:white;
    background: none repeat scroll 0 0 #E5E5E5;
    color:gray;
}
.rounded_gray_corner{
	background:url(<?php  echo base_url()   ?>images/rounded_gray.png) no-repeat 0 0;
	background-repeat:no-repeat;
	height:10px;
}
.rounded_gray_top_left{
	width:10%;
	background-position: left 0;
}

.rounded_gray_top_right{
    background-position: right 0;
    width: 90%;
}

.rounded_gray_bottom_left{
	width:10%;
	background-position: left bottom;
}

.rounded_gray_bottom_right{
    background-position: right bottom;
    width: 90%;

}



</style>


<div   style='padding:30px' >
	
				<div  id='continue_botton' class='rounded_gray' >
							<div  class='rounded_gray_corner_left rounded_gray_corner rounded_gray_top_left' >
								<div class='rounded_gray_corner_right rounded_gray_corner rounded_gray_top_right ' >
								</div>
							</div>
								
							<div  class='rounded_gray_middle' >
								
									Submit
			
							</div>
							<div class='rounded_gray_corner_left rounded_gray_corner rounded_gray_bottom_left ' >
								<div class='rounded_gray_corner_right rounded_gray_corner rounded_gray_bottom_right ' >
								</div>
							</div>		
					
				</div>	
</div>


<script type="text/javascript" language="Javascript">
$(document).ready(function() {	

	$('.rounded_gray_corner_right').css({
		width:$('.rounded_gray').width() *.9 +'px',
		})
	
	$('.rounded_gray_corner_left').css({
		width:$('.rounded_gray').width() *.1 +'px',
		'padding-left':$('.rounded_gray').width() *.1
		})
});	
</script>		
	


			<div  style='padding:30px'>
				
				<div   class='transparent_button'  >
						<div  class='top_transparent_button ' >
							<div  class='bottom_transparent_button' >
					
							</div>
								<div  class='middle_transparent_button' >
									Submit
								</div>
						</div>					
				</div>

				
			</div>
	
</div>	

									
												