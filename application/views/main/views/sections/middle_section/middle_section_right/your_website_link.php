<style>
.your_website_middle{
  height: 130px;  
  padding:40px 0px 30px 0px;
  font-size:12px;
}
.your_website_middle a{
  text-decoration:underline;
  color:blue;
}
.your_website_middle a.profile_link_a{
	font-weight:bold;
	font-size:14px;
}
</style>


<div  class='top_side_box'>
	Your Website
</div>


<div  class='middle_side_box your_website_middle'>
	
<?php if( $website_data['profile_url']){
	
  $this->custom->echoOutSidebox( 
  $profile_url = $website_data['profile_url'],
  $template_name= $website_data['template_name']
  );   

} ?>

</div>



<div  class='bottom_side_box'>
</div>