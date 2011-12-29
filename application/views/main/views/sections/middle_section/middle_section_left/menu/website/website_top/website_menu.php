<?php     	$this->load->view('header/menu_area_css.php');  ?>

<style>
.menu_area_div ul#menu_area li{
	width:92px;
}
.menu_area_div ul#menu_area li input{
	border: 0
}
		
</style>

<div  class='menu_area_div ' >
		<ul  id='menu_area' >
			<li class='website_menu  menu_item' ><a  id='home'  >Home</a></li>

<?php     

$a_links = array(
	array(
	'id'=>'bio',
	'text'=>'Bio',
	'name_checkbox' => 'bio_checkbox'
	),
	array(
	'id'=>'photos',
	'text'=>'Gallery',
	'name_checkbox' => 'photos_checkbox'
	),
	array(
	'id'=>'reels',
	'text'=>'Video',
	'name_checkbox' => 'reels_checkbox'
	),
	array(
	'id'=>'resume_builder',
	'text'=>'Resume',
	'name_checkbox' => 'resume_checkbox'
	),
	array(
	'id'=>'press',
	'text'=>'Press',
	'name_checkbox' => 'press_checkbox'
	),
	array(
	'id'=>'links',
	'text'=>'Links',
	'name_checkbox' => 'links_checkbox'
	)
);


foreach( $a_links  as  $a_link){
	
	?>
			<li class='website_menu  menu_item' >
				<div  class='center_this '>
					<div  class=' float_left' >
						<input  class='tab_include_checkboxes ' field="<?php  echo  $a_link['name_checkbox']  ?>" type="checkbox" value="">
					</div>
					<div  class='float_left' >
						<a  id='<?php  echo  $a_link['id']  ?>'   ><?php echo $a_link['text']    ?></a>
					</div>
				</div>
			</li>
			
	<?php     
	
}


?>
	
			<li class='website_menu  menu_item last_li' ><a  id='contact'  >Contact</a></li>
		</ul>	
</div>

<script type="text/javascript" language="Javascript">
$(document).ready(function() {
	
	$('li.website_menu div.center_this').each(function(event) {
		
		<?php if( !$this->tools->browserIschrome() ){?>
			
			$(this).children('div:nth-child(1)').css({
				'margin-top':'1px'
			})
			
						
		<?php } ?>
		
		$(this).children('div:nth-child(2)').css({
			'margin-left':'3px'
		})
	});
	

	$('.tab_include_checkboxes').click(function(event) {
			
			if( $(this).is(':checked') ){
				checked = 1;
			}else{
				checked = 0;
			};
			
			$.post("<?php echo base_url(). 'index.php/main/update_database';    ?>",{
				method:'update_checkbox',
				table:'users',
				field:$(this).attr('field'),
				checked:checked
				},function(data) {

			 });

			
		});	
		
		
		
		<?php     
		
		$checkboxes = array(
			'bio_checkbox',
			'photos_checkbox',
			'reels_checkbox',
			'resume_checkbox',
			'press_checkbox',
			'links_checkbox'
		);
		
		foreach( $checkboxes  as  $checkbox ){
			
			if( $website_data['users'][0]->$checkbox == 1){
			?>
				$('input[field=<?php echo $checkbox   ?>]').attr('checked','checked');			
			<?php     
			}else{
			?>
				$('input[field=<?php echo $checkbox   ?>]').removeAttr('checked');			
			<?php     	
			};
		};
		
		?>
		


		

});	
</script>
