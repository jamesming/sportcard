<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	
   public function __construct(){
        parent::__construct();
				$this->user_id = 1;
				$this->thumbnail_size_width  = '367';
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
		

		$data = array(
			'users' => $users,
			'fonts' => $fonts,
			'thumbnail_size_width' => $this->thumbnail_size_width
		);

		$this->load->view('home/index_view',
					array('data' => $data));	    
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
		
		$image_type_id = $this->input->post('image_type_id');
		$image_id = $this->input->post('image_id');
		$li_index = $this->input->post('li_index');
		
		
		if( $this->my_database_model->check_if_exist(
							$where_array = array('id'=>$image_id), $table = 'images' )
		){
					$this->my_database_model->update_table_where(
										$table = 'images', 
										$where_array = array(
											'id' => $image_id
										),
										$set_what_array = array()
										);					
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
		
		$config['upload_path'] = './' . $upload_path;
		$config['allowed_types'] = 'bmp|jpeg|gif|jpg|png';
		$config['overwrite'] = 'TRUE';
		$config['file_name'] = 'image.png';
		
		$this->load->library('upload', $config);
		$this->upload->do_upload("Filedata");
		
		?>
		
		<script type="text/javascript" language="Javascript">
				document.location = '<?php echo base_url()    ?>index.php/home/resize?li_index=<?php  echo $li_index   ?>&image_id=<?php echo $image_id    ?>&image_type_id=<?php echo $image_type_id ?>&random=<?php echo  rand(5,126724523)   ?>';		
		</script>
		
		<?php     
	}	
	
	
	
	
	public function resize(){
		
			$image_types = array(
				'1' => 'backgrounds-div',
				'2' => 'pictures-div',
				'3' => 'videos-div',
			);
		
			$image_id = $this->input->get('image_id');
			$image_type_id = $this->input->get('image_type_id');
			$li_index = $this->input->get('li_index');
		
			$dir_path = 'uploads/'. $this->user_id .'/'  . $image_id; 
		
			$image_information = getimagesize($dir_path . '/' . 'image.png');
			
			$width_of_file = $image_information[0];
			$height_of_file = $image_information[1];
			
			$new_width = $this->thumbnail_size_width;
			$new_height = $this->tools->get_new_size_of (
				$what = 'height', 
				$based_on_new = $new_width, 
				$orig_width = $width_of_file, 
				$orig_height = $height_of_file 
				);
		
		
			$this->tools->clone_and_resize_append_name_of(
				$appended_suffix = '_thumb', 
				$full_path = $dir_path . '/' . 'image.png', 
				$width = $new_width, 
				$height = $new_height
				);
			
			
		
		
		
		?>

		<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>


		<script type="text/javascript" language="Javascript">
			$(document).ready(function() { 
				

					<?php if( $image_types[$image_type_id] == 'backgrounds-div' ){?>
							
							window.parent.$('body').css({
									    'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/<?php echo $image_id    ?>/image.png?random=<?php echo   rand(5,124344523)   ?>)',
									    'background-position': 'center 0px',
									    'background-repeat': 'no-repeat'});
						
						
					<?php } ?>
							    
							    
							    
							    
					<?php if( $li_index != -1 ){?>  /* UPDATE THUMB*/
							    
							window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div li:eq(<?php echo $li_index    ?>)').css({
									    'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/<?php echo $image_id    ?>/image_thumb.png?random=<?php echo  rand(5,126724523)   ?>)',
									    'background-position': '0px 0px',
									    'background-repeat': 'no-repeat'});						
							
					<?php }else{ ?>  /* INSERT THUMB */
						

							var copy_li = window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div li:eq(0)').clone(true);
							window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div ul').append(copy_li);
							window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div ul li').last()
								.attr('image_type_id',<?php  echo $image_type_id   ?>)
								.attr('image_id',<?php  echo $image_id   ?>)
								.css({'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/<?php echo $image_id    ?>/image_thumb.png?random=<?php echo  rand(5,126724523)   ?>)',
									    'background-position': '0px 0px',
									    'background-repeat': 'no-repeat'})
							window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div ul.thumbs-ul')
								.css({width:(<?php echo $this->thumbnail_size_width ?> * window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div li').length )+'px'})		    
									    							
					<?php } ?>

						    
			});
		</script>
		
		<?php 		
		
	}		

    

	
	
	public function a3_insert(){
		
		$string = '';
		
		$count = 0;
		foreach( $this->input->get()  as  $key => $value){
			$count++;
			if( $count < count($this->input->get())){
					$string = ( $key != 'table' ? $string .  $key.'='.$value.'&':'' );
			}else{
					$string = ( $key != 'table' ? $string .  $key.'='.$value:'' );
			};
			
		}

		$post_array = array(
			'table' => $this->input->get('table'),
			'set_what' => $string
		);
		

		echo $this->query->insert( $post_array );
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
$table = 'images';
$this->my_database_model->create_generic_table($table );


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