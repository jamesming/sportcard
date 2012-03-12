<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	
   public function __construct(){
        parent::__construct();

					
				if( $this->input->get('logout')){
					
						$this->session->sess_create();	
						
						redirect('/home/login');	
						
				};
				
				if(  isset( $this->session->userdata['user_id'] )  ){

					$this->user_id = $this->session->userdata['user_id'];

				}else{

					redirect('/home/login');

				};
				
				



				$this->thumbnail_size_width  = '181';
				$this->thumbnail_size_height = '120';
				$this->thumbnail_panel_width = '755';
				$this->top_direction_arrow = '62';						
   }

	/**
	 * Index Page for this controller.
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/home/index
	 * @access public
	 */
	 

	public function index(){
		
		$select_what =  '*';
		
		$where_array = array('id !=' => 16);

		$fonts = $this->my_database_model->select_from_table(
			$table = 'fonts', 
			$select_what, 
			$where_array, 
			$use_order = TRUE, 
			$order_field = 'id', 
			$order_direction = 'asc', 
			$limit = 10
			);

		
		$users = $this->query->get_users(
			'users',
			$where_array = array(
				'users.id' => $this->user_id
			)	
		);
		

		$input_bio_array = array(
			'size-class' => 'input-medium',
			'inputs' => array(
			
				array('type' => 'text', 'label' => 'First Name', 'input_name'=>'first_name'),
				array('type' => 'text', 'label' => 'Last Name', 'input_name'=>'last_name'),
				array('type' => 'text', 'label' => 'Position', 'input_name'=>'position'),
				array('type' => 'text', 'label' => 'Organization', 'input_name'=>'organization'),
				array('type' => 'text', 'label' => 'Location', 'input_name'=>'location'),
				array(
						'type' => 'select', 
						'label' => 'Sports', 
						'input_name'=>'sports', 
						'options' => array(
								array('value' => '1','text' => 'football'),
								array('value' => '2','text' => 'soccer'),
								array('value' => '3','text' => 'baseball'),
						)
				)
			)
		);
		
		
		for($i=1;$i<=400;$i++){
			$font_size['value'] = $i.'px'; 
			$font_size['text'] = $i.'px'; 
			$font_sizes_array[] = $font_size;
		}
		
		for($i=1;$i<=400;$i++){
			$width_of_headline_size['value'] = ($i*2).'px'; 
			$width_of_headline_size['text'] = ($i*2).'px'; 
			$width_of_headline_sizes_array[] = $width_of_headline_size;
		}		

		for($i=0;$i<=9;$i++){
			$transparency_shade['value'] = $i; 
			$transparency_shade['text'] = $i; 
			$transparency_shades_array[] = $transparency_shade;
		}		

		$input_style_array = array(
			'size-class' => 'input-medium',
			'inputs' => array(

				array('type' => 'text', 'label' => 'Name', 'input_name'=>'full_name'),

				array(
						'type' => 'select', 
						'label' => 'Font Color', 
						'input_name' =>'font_color', 
						'options' => array(
								array('value' => 'red','text' => 'red'),
								array('value' => 'blue','text' => 'blue'),
								array('value' => 'green','text' => 'green'),
						)
				),
				
				array(
						'type' => 'select', 
						'label' => 'Font Size', 
						'input_name' =>'font_size', 
						'options' => $font_sizes_array
				),
				
				array(
						'type' => 'select', 
						'label' => 'Transparency', 
						'input_name' =>'transparency', 
						'options' => $transparency_shades_array
				),					
				
				array(
						'type' => 'select', 
						'label' => 'Box Width', 
						'input_name' =>'box_width', 
						'options' => $width_of_headline_sizes_array
				),		
			)
		);
		
		$input_account_array = array(
			'size-class' => 'input-medium',
			'inputs' => array(
			
				array('type' => 'text', 'label' => 'Profile Url', 'input_name'=>'profile_url'),
				array('type' => 'text', 'label' => 'Email', 'input_name'=>'email')
			)
		);
		
		$input_password_array = array(
			'size-class' => 'input-medium',
			'inputs' => array(
			
				array('type' => 'password', 'label' => 'Current Password', 'input_name'=>'current_password'),
				array('type' => 'password', 'label' => 'Password', 'input_name'=>'password'),
				array('type' => 'password', 'label' => 'Confirm Password', 'input_name'=>'confirm_password')
			)
		);		

		$data = array(
			'users' => $users,
			'fonts' => $fonts,
			'thumbnail_size_width' => $this->thumbnail_size_width,
			'thumbnail_size_height' => $this->thumbnail_size_height,
			'thumbnail_panel_width' => $this->thumbnail_panel_width,
			'top_direction_arrow' => $this->top_direction_arrow,
			'input_bio_array' => $input_bio_array,
			'input_style_array' => $input_style_array,
			'input_account_array' => $input_account_array,
			'input_password_array' => $input_password_array,
			'user_id' => $this->user_id,
			'live_only' => 0
		);
		


		$this->load->view('main/index_view',
					array('data' => $data));	    
	}
	
	
	
	public function confirm_existing_password(){
		
			$this->load->helper('security');
		
			$select_what =  '*';

			$where_array = array(
			'id' => $this->user_id
			);		

			$users = $this->my_database_model->select_from_table( 
				$table = 'users', 
				$select_what, 
				$where_array, 
				$use_order = FALSE, 
				$order_field = '', 
				$order_direction = 'desc', 
				$limit = 1);

			if( $users[0]->password == do_hash(  $this->input->post('current_password'), 'md5' )){
				
				echo '1';
				
			}else{
				
				echo '0';
				
			}
		
	}
	
	
	public function update_password(){	
	
		$this->load->helper('security');
	
		$set_what_array = array(
						'password' => do_hash( $this->input->post('user_password'), 'md5' )
						);			
						
		echo $this->my_database_model->update_table( 
			$table = 'users', 
			$primary_key = $this->user_id, 
			$set_what_array 
		);
				
	
	}	
	

	public function update(){

		echo  $this->query->update( $this->input->post()  );
		
	}
	
	
	
	
	public function insert(){

		echo  $this->query->insert( $this->input->post()  );
		
	}	
	
	
	
	
	
	public function remove(){

		
		$image_id = $this->input->post('image_id');
		
		$dir_path = 'uploads/' 
		. $this->user_id . '/'  
		.  $image_id . '/';
		

		$this->tools->recursiveDelete($dir_path);
		
		$where_array = array(
	  	'id' => $image_id
  	);

		$table  = 'images';
					
		$this->my_database_model->delete_from_table( $table, $where_array);	
		
		
	}	
	
	
		
	
	
	public function upload(){
     
		$image_type_id = $this->input->get('image_type_id');
		$image_id = $this->input->get('image_id');
		$li_index = $this->input->get('li_index');
		
		
		if( $this->my_database_model->check_if_exist(
							$where_array = array('id' => $image_id), $table = 'images' )
		){

			
		}else{
			
					$image_id = $this->my_database_model->insert_table(
						$table = 'images', 
						array(
							'image_type_id' => $image_type_id,
							'user_id' => $this->user_id
						)
					);
			
		};

		
		$path_array = array(
			'user_id' => $this->user_id,
			'image_id' => $image_id
		);
					
		$upload_path = $this->tools->set_directory_for_upload( $path_array );
		
		
		$this->load->library('qquploadedfilexhr');
		
		// list of valid extensions, ex. array("jpeg", "xml", "bmp")
		$allowedExtensions = array("jpg", "JPG");
		// max file size in bytes
		$sizeLimit = 10 * 1024 * 1024;
		
		$uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
		$result = $uploader->handleUpload($upload_path . '/');

		?>
		{success:true,image_id:'<?php echo $image_id; ?>', image_type_id:'<?php echo $image_type_id; ?>', li_index:'<?php echo $li_index; ?>'}
		<?php   	
		
/*	

		ADAPT FILE UPLOADER FOR CODEIGNIGHTER TO BE FOUND:
		http://codeigniter.com/forums/viewthread/175970/#941905  #3


		$config['upload_path'] = './' . $upload_path;
		$config['allowed_types'] = 'bmp|jpeg|gif|jpg|png';
		$config['overwrite'] = 'TRUE';
		$config['file_name'] = 'image.png';
		
		$this->load->library('upload', $config);
		$this->upload->do_upload("qqfile");
			

		
*/		
		  
	}	

	
	
	public function resize(){
		
			$image_id = $this->input->get('image_id');
			$image_type_id = $this->input->get('image_type_id');
			$li_index = $this->input->get('li_index');
		
			$dir_path = 'uploads/'. $this->user_id .'/'  . $image_id . '/'; 
		
			$image_information = getimagesize($dir_path  . 'image.jpg');
			
			$width_of_file = $image_information[0];
			$height_of_file = $image_information[1];
		
			$crop_height = '500';	
				
			$this->tools->clone_and_resize_append_name_of(
				$appended_suffix = '_crop_this', 
				$full_path = $dir_path  . 'image.jpg', 
				$width = $this->tools->get_new_size_of (
											$what = 'width', 
											$based_on_new =  $crop_height, 
											$orig_width = $width_of_file, 
											$orig_height = $height_of_file 
											), 
				$height = $crop_height
				);				
				
			
			 ?>			
			 
			 
			
			<script src="<?php  echo base_url()   ?>bootstrap/js/jquery.js"></script>
			<script type="text/javascript" language="Javascript">

				window.parent.$('#test')
					.attr('image_id', '<?php  echo $image_id   ?>')
					.attr('image_type_id', '<?php  echo $image_type_id   ?>')
					.attr('li_index', '<?php  echo $li_index   ?>')
					.attach_FancyZoom_JcropPopWindow();
				
				window.parent.$('#test').click();	
			</script>
			
			
			<?php    

			exit;
			
			$this->update_thumbnail_panel(
				$image_id,
				$image_type_id,
				$li_index
			);
		
	}		
	
	
	function jcrop(){
		
			$image_id = $this->input->get('image_id');
		
			$dir_path = 'uploads/'. $this->user_id .'/'  .  $image_id; 
		
			$image_information = getimagesize($dir_path . '/' . 'image_crop_this.jpg');
			
			$width_of_file = $image_information[0];
			$height_of_file = $image_information[1];
		
		 ?>
		 
		 <head>

				<link rel="stylesheet" href="<?php  echo base_url();   ?>js/Jcrop/css/jquery.Jcrop.css" type="text/css"  type="text/css" >
				
				<script src="<?php  echo base_url()   ?>bootstrap/js/jquery.js"></script>
				
				<script type='text/javascript' src='<?php  echo base_url()   ?>js/Jcrop/js/jquery.Jcrop.min.js'></script>	
							
				<script type="text/javascript" language="Javascript">

					$(document).ready(function() { 
						
								$('#cropbox').Jcrop({		
									onChange: showPreview,
									aspectRatio: <?php echo ($width_of_file/$height_of_file);    ?>,
									setSelect:   [ 0, 0, <?php  echo $width_of_file   ?>, <?php echo $height_of_file   ?>],
									trackDocument: true
								}); 

								$('#submit').click(function(event) {
									submitCropForm();
								});										
					});

					
					function showPreview(coords){
						$('#x').val(coords.x);
						$('#y').val(coords.y);
						$('#x2').val(coords.x2);
						$('#y2').val(coords.y2);
						$('#w').val(coords.w);
						$('#h').val(coords.h);
					};
					
					function submitCropForm(){
										$.post("<?php echo base_url() . 'index.php/main/crop/';    ?>",{
											image_id: <?php  echo $image_id;   ?>,
											x_origin: $('#x').val(),
											y_origin: $('#y').val(),
											width: $('#w').val(),
											height: $('#h').val()
										},function(data) {
												window.parent.$('#iframe_dom').attr('src', '<?php echo base_url()    ?>index.php/main/on2update_thumbnail_panel?image_id=<?php  echo $this->input->get('image_id');   ?>&image_type_id=<?php  echo $this->input->get('image_type_id');   ?>&li_index=<?php  echo $this->input->get('li_index');   ?>');
												window.parent.$('#close_fancy_zoom').click();
										});		
					};										
				</script>

	</head>

<body >
<div   style='width:<?php echo $width_of_file;    ?>px;margin-left:auto;margin-right:auto'  > 
	<img  id='cropbox' src='<?php  echo base_url()   ?>uploads/<?php echo  $this->user_id;    ?>/<?php echo $this->input->get('image_id');    ?>/image_crop_this.jpg?random=<?php  echo rand(234234,234234)   ?>'>		
</div> 
<center   style='margin-top:10px'  ><button  id='submit' class='btn ' >submit</button></center>
<input type="hidden" size="4" id="x" name="x" value="" />
<input type="hidden" size="4" id="y" name="y" />
<input type="hidden" size="4" id="x2" name="x2" />
<input type="hidden" size="4" id="y2" name="y2" />
<input type="hidden" size="4" id="w" name="w" />
<input type="hidden" size="4" id="h" name="h" />

</body>

			<?php    	
		
	}
	
	function crop(){
		
		$dir_path = 'uploads/' . $this->user_id . '/' .   $this->input->post('image_id')  . '/';

		$x_origin = $this->input->post('x_origin');
		$y_origin = $this->input->post('y_origin');
		$width = $this->input->post('width');
		$height = $this->input->post('height');

		$this->tools->crop_and_name_it( 
		$new_name = 'image_cropped.jpg', 
		$original_file = 'image_crop_this.jpg', 
		$dir_path, 
		$width, 
		$height, 
		$x_origin, 
		$y_origin 
		);

		$this->tools->copy_file( 
		$orig_file_name = $dir_path.'image_cropped.jpg', 
		$new_file_name = $dir_path .'image_thumb.jpg'
		);
		
		$image_information = getimagesize($dir_path  . 'image_thumb.jpg');

		$this->tools->resize_this(  
		 $orig_file_name = $dir_path .'image_thumb.jpg' ,
		 $width =  $this->thumbnail_size_width, 
		 $height = $this->tools->get_new_size_of (
		 				$what = 'height', 
		 				$based_on_new = $this->thumbnail_size_width, 
		 				$orig_width = $image_information[0], 
		 				$orig_height =  $image_information[1] )
		 );
			
		// ** Delete transitional image
		$this->tools->recursiveDelete($dir_path  . 'image_crop_this.jpg');			

	}

	function on2update_thumbnail_panel(){
		
				$this->update_thumbnail_panel(
				$image_id = $this->input->get('image_id'),
				$image_type_id = $this->input->get('image_type_id'),
				$li_index = $this->input->get('li_index')
				);		
		
	}
	

	
	function get_video_url(){
		
		$images = $this->my_database_model->select_from_table( 
					$table = 'images', 
					$select_what = 'video_url',    
					$where_array = array('id'=>$this->input->post('image_id')), 
					$use_order = FALSE, 
					$order_field = '', 
					$order_direction = 'asc', 
					$limit = -1
					);		
					
		echo $images[0]->video_url;					
		
	}

    
	function update_video(){
		
		$table = 'images';
		$video_url = $this->input->post('video_url');
		$image_id = $this->input->post('image_id');
		$li_index = $this->input->post('li_index');

	  if( $image_id != 0){
	  	
				$set_what_array = array(
										'video_url' => $video_url,
										'youtube_video_id' => $this->tools->extract_video_id_from_youtube_url($video_url)
										);		
										
				$this->my_database_model->update_table( 
				$table, 
				$primary_key = $image_id, 
				$set_what_array 
				);

	  }else{
	  	
	  			$youtube_video_id = $this->tools->extract_video_id_from_youtube_url($video_url);
					
					if( $youtube_video_id =='error'){
								
					}else{
								$insert_what = array(
											'video_url' => $video_url,
											'user_id' => $this->user_id,
											'image_type_id' => 2,
											'youtube_video_id' => $youtube_video_id
											);	
			
								$image_id =  $this->my_database_model->insert_table(
																$table, 
																$insert_what
																); 						
					};
									
	      
	  };



	  
		$path_array = array(
			'user_id'=> $this->user_id, 
			'image_id'=> $image_id
		);
		
		$upload_path = $this->tools->set_directory_for_upload( $path_array );

		$filename = $this->tools->get_thumbnail_from_youtube_video_id(
			$this->tools->extract_video_id_from_youtube_url($video_url)
		);
		
		
		$this->tools->create_thumbnail_of(
			$filename, 
			$new_width = $this->thumbnail_size_width, 
			$location = $upload_path . '/image_thumb.jpg'
		);	  
		

		$this->update_thumbnail_panel(
			$image_id,
			$image_type_id = 2,
			$li_index
		);

		
	}
	
	
	
	function update_thumbnail_panel(
		$image_id,
		$image_type_id,
		$li_index
	){
		
			
			$image_types = array(
				'0' => 'backgrounds-div',
				'1' => 'pictures-div',
				'2' => 'videos-div',
			);
		
		?>

		<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>


		<script type="text/javascript" language="Javascript">
			$(document).ready(function() { 
				


					<?php if( $image_types[$image_type_id] == 'backgrounds-div' ){?>
							
							window.parent.$('body').css({
									    'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/<?php echo $image_id    ?>/image.jpg?random=<?php echo   rand(5,124344523)   ?>)',
									    'background-position': 'center 0px',
									    'background-repeat': 'no-repeat'});
						
							window.parent.window.uploader_backgrounds.setParams({
					        image_id:  0,
					        image_type_id: 0,
					        li_index: -1
							});
		
						
						
					<?php } ?>
							    
					<?php if( $image_types[$image_type_id] == 'videos-div' ){?>
							
							window.parent.$('#form_video input[name=li_index]').val(-1);
							window.parent.$('#form_video input[name=image_id]').val(0);
							window.parent.$('#form_video input[name=video_url]').val('');
						
						
					<?php } ?>							    

					<?php if( $li_index != -1 ){?>  /* UPDATE THUMB*/
							    
							window.parent.$('#<?php echo $image_types[$image_type_id] ?> li:eq(<?php echo $li_index    ?>)').css({
									    'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/<?php echo $image_id    ?>/image_thumb.jpg?random=<?php echo  rand(5,126724523)   ?>)',
									    'background-position': '0px 0px',
									    'background-repeat': 'no-repeat'});		
			
							
					<?php }else{ ?>  /* INSERT THUMB */
						
						
						
						<?php if( $image_types[$image_type_id] == 'backgrounds-div' ){?>
								whichCarousel = window.parent.window.myCarousel_1;
						<?php }elseif( $image_types[$image_type_id] == 'pictures-div' ){ ?>	
								whichCarousel = window.parent.window.myCarousel_2;						
						<?php }elseif( $image_types[$image_type_id] == 'videos-div' ){ ?>	
								whichCarousel = window.parent.window.myCarousel_3;						
						<?php } ?>
						
						
						if( whichCarousel.size() > -1 ){
							whichCarousel.size( whichCarousel.size() + 1)
						}else{
							whichCarousel.size( 0 )
						};
						
						whichCarousel.add(  (whichCarousel.size()) , "<li style='background:brown'  class='hovering ' image_id='0'  image_type_id='<?php echo $image_type_id    ?>'  ><div  class='small_icons_panel transparent '  <?php echo ( $image_types[$image_type_id] == 'backgrounds-div' ? "  style='height:51px !important' ": "")    ?> ><div  class='delete ' ><i class='icon-trash icon-white'></i></div><div  class='hide <?php echo ( $image_types[$image_type_id] == 'videos-div' ? 'update-video_url':'update-image' )    ?>  ' >[E]</div><?php echo ( $image_types[$image_type_id] == 'backgrounds-div' ? "<div  class='swap ' ><i class='icon-refresh icon-white'></i></div>": "")    ?></div><div  class='inside_li <?php echo ( $image_types[$image_type_id] == 'videos-div' ? 'videos_preview':'images_preview' )    ?>  ' ></div></li>");					
	
	
					  whichCarousel.scroll(parseInt(whichCarousel.size()),true);
					  
						window.parent.$('#<?php echo $image_types[$image_type_id] ?> ul li').last()
							.attr('image_type_id',<?php  echo $image_type_id   ?>)
							.attr('image_id',<?php  echo $image_id   ?>)
							.css({'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/<?php echo $image_id    ?>/image_thumb.jpg?random=<?php echo  rand(5,126724523)   ?>)',
								    'background-position': '0px 0px',
								    'background-repeat': 'no-repeat'})		
								    
						window.parent.$('#preview_box_inside').html('').css({
																				    'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/<?php echo $image_id    ?>/image_cropped.jpg?random=<?php echo   rand(5,124344523)   ?>)',
																				    'background-position': 'center 0px',
																				    'background-repeat': 'no-repeat',
																				    'background-size':'contain'
																				    });			  
				  
							/*							
							if( window.parent.$('#<?php echo $image_types[$image_type_id] ?> li').length > 0   ){
								
								var copy_li = window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div li:eq(0)').clone(true);
								window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div ul').append(copy_li);			
								
													
							}else{

									thumbs_div = window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div');
									uploadButton = thumbs_div.find('.upload_button');
									thumbs_div.children('ul').append("<li style='background:brown'  class='background-img ' image_id='0'  image_type_id='" + uploadButton.attr('image_type_id') + "'  ><div  class='small_icons_panel transparent' ><div  class='delete ' ><i class='icon-trash icon-white'></i></div><div  class='<?php echo ( $image_types[$image_type_id] == 'videos-div' ? 'update-video_url':'update-image' )    ?> ' ' >[E]</div><?php echo ( $image_types[$image_type_id] == 'backgrounds-div' ? "<div  class='swap ' ><i class='icon-refresh icon-white'></div>": "")    ?></div></li>");

							};
							

							window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div ul li').last()
								.attr('image_type_id',<?php  echo $image_type_id   ?>)
								.attr('image_id',<?php  echo $image_id   ?>)
								.css({'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/<?php echo $image_id    ?>/image_thumb.jpg?random=<?php echo  rand(5,126724523)   ?>)',
									    'background-position': '0px 0px',
									    'background-repeat': 'no-repeat'})
							window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div ul.thumbs-ul')
								.css({width:(<?php echo $this->thumbnail_size_width ?> * window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div li').length )+'px'})		    
					
							*/    
									    						
					<?php } ?>

						    
			});
		</script>
		
		<?php
		
	}
	
	
	function get_video_iframe(){
		
	$images	= $this->my_database_model->select_from_table(
			$table = 'images', 
			$select_what = 'youtube_video_id', 
			$where_array = array('id' => $this->input->post('image_id')), 
			$use_order = false, 
			$order_field = 'id', 
			$order_direction = 'asc', 
			$limit = -1
			);
		
	$youtube_video_id = $images[0]->youtube_video_id;
	
	echo $this->tools->create_iframe_html_from_youtube_video_id( 
		$youtube_video_id, 
		$width = 400, 
		$height = 250
		);
		
	}
	
	

/**
 * create_table
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @path /index.php/home/create_table
 * @access public
 **/ 

	
function t(){
$table = 'a3_nos';
$this->my_database_model->create_generic_table($table );

exit;
$fields_array = array(
                      'user_id' => array(
                                               'type' => 'int(11)'
                                    ),
                      'image_type_id' => array(
                                               'type' => 'int(11)'
                                    ),
//                      'county' => array(
//                                               'type' => 'varchar(255)'
//                                    ),
//                      'city' => array(
//                                               'type' => 'varchar(255)'
//                                    ),
//                      'state' => array(
//                                               'type' => 'varchar(255)'
//                                    )
              ); 
              
              
              
$this->my_database_model->add_column_to_table_if_exist(
	$table, 
	$fields_array
);
   


}
	



}

/* End of file welcome.php */
/* Location: ./application/controllers/home.php */