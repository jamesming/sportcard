<style>
	
.social_icon_img{
    margin: 1px 10px 0 0;
    width: 27px;
}
		#facebook_profile_link{
    width: 108px;
		}
		#twitter_profile_link{
    width: 91px;
		}		
		
		.input_container{
		margin:0px 0px 20px 0px;	
		}
		.input_social_url_link{
    	width: 166px !important;
    	/*background:red !important;*/
		}


		
</style>

<div  class='label_description  ' >Enter your social network identifier.  Leave blank if not enrolled. 
</div>
		
<div  class=' input_container' >	
				<div  >
							<img class='float_left social_icon_img' src='<?php  echo base_url()   ?>images/logo_facebook_25x25.png'>
							<div  class='float_left input_background input_300 ' >
								<div   id='facebook_profile_link' class=' float_left ' >
									http://facebook.com/
								</div>
								<input social_network_url='facebook_url'class='float_left input_social_url_link ' name="facebook_url" id="facebook_url" type="" value="<?php echo $website_data['facebook_url']    ?>">
							</div>
							



<?php $this->load->view('main/views/sections/middle_section/middle_section_left/menu/website/website_bottom/contact/update_button.php'); ?>
							
										
				</div>
				<div  class='error_message clearfix' >
				</div>				
</div>

<div   class=' input_container' >	
				<div  >
						<img class='float_left social_icon_img' src='<?php  echo base_url()   ?>images/logo_twitter_25x25.png'>
							<div  class='float_left input_background input_300 ' >
								<div   id='twitter_profile_link' class=' float_left ' >
									http://twitter.com/
								</div>
								<input social_network_url='twitter_url' class='float_left input_social_url_link ' name="facebook_url" id="facebook_url" type="" value="<?php echo $website_data['twitter_url']    ?>">
							</div>
							

							
<?php $this->load->view('main/views/sections/middle_section/middle_section_left/menu/website/website_bottom/contact/update_button.php'); ?>
	
							
										
				</div>
				<div  class='error_message clearfix' >
				</div>				
</div>



<div   class=' input_container' >	
				<div  >
						<img class='float_left social_icon_img' src='<?php  echo base_url()   ?>images/web2icons/linkedin_25x25.png'>
							<div  class='float_left input_background input_300 ' >
								<div   id='linkedin_profile_link' class=' float_left ' >
									http://linkedin.com/
								</div>
								<input social_network_url='linkedin_url' class='float_left input_social_url_link ' name="linkedin_url" id="linkedin_url" type="" value="<?php echo $website_data['linkedin_url']    ?>">
							</div>
							

							
							
<?php $this->load->view('main/views/sections/middle_section/middle_section_left/menu/website/website_bottom/contact/update_button.php'); ?>
		
							
							
								
										
				</div>
				<div  class='error_message clearfix' >
				</div>				
</div>



<div   class=' input_container' >	
				<div  >
						<img class='float_left social_icon_img' src='<?php  echo base_url()   ?>images/web2icons/blog_25x25.png'>
							<div  class='float_left input_background input_300 ' >
								<div   id='blog_profile_link' class=' float_left ' >
									http://blogger.com/
								</div>
								<input social_network_url='blog_url' class='float_left input_social_url_link ' name="blog_url" id="blog_url" type="" value="<?php echo $website_data['blog_url']    ?>">
							</div>
							


<?php $this->load->view('main/views/sections/middle_section/middle_section_left/menu/website/website_bottom/contact/update_button.php'); ?>
			
				</div>
				<div  class='error_message clearfix' >
				</div>				
</div>




<div   class=' input_container' >	
				<div  >
						<img class='float_left social_icon_img' src='<?php  echo base_url()   ?>images/web2icons/imdb_32x32.png'   style='width:33px;margin:-2px 8px 0px -3px;'  >
							<div  class='float_left input_background input_300 ' >
								<div   id='imdb_profile_link' class=' float_left ' >
									http://imdb.com/
								</div>
								<input social_network_url='imdb_url' class='float_left input_social_url_link ' name="imdb_url" id="imdb_url" type="" value="<?php echo $website_data['imdb_url']    ?>">
							</div>
							


<?php $this->load->view('main/views/sections/middle_section/middle_section_left/menu/website/website_bottom/contact/update_button.php'); ?>
	

			
				</div>
				<div  class='error_message clearfix' >
				</div>				
</div>

<!-- 
 
 (e.g. http://www.imdb.com/name/im1234567/ or im1234567.

-->

<style>
	.update_button.transparent_button{
	width:80px;
	}
	.update_button div.top_transparent_button{
		background:orange;
		height:27px;
	}
</style>
<script type="text/javascript" language="Javascript">
$(document).ready(function() {
	
	$('.update_button div.middle_transparent_button').css({'margin-left':($('.update_button.transparent_button').width()-$('.update_button div.middle_transparent_button').width())/2+'px'})

			
	$('.update_button').click(function(event) {
		
			ele_dom = $(this);

			ele_dom_inside_stuff = $(this).html();
    	
			ele_dom.addClass("loading").children().remove();

			input_dom = ele_dom.prev().children('input');

			$.post("<?php echo base_url(). 'index.php/main/update_social_network';    ?>",{
				social_url:input_dom.val(), 
				social_network_url:input_dom.attr('social_network_url'), 
				},function(data) {

							setTimeout(function() { 	
							
								ele_dom.removeClass('loading').append(ele_dom_inside_stuff);
								// input_dom.parent().parent().next('div.error_message').html(data);
								
							}, 700);	
						
						
			 });
			
		});	
		
		$('.input_social_url_link').click(function(event) {
			$(this).select();
		});
});	

</script>