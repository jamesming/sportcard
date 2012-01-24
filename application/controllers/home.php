<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	
   public function __construct(){
        parent::__construct();


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
				'users.id' => 1,
				'images.image_type_id' => 1  // REPRESENTS IMAGES THAT ARE BACKGROUND
			)	
		);
		
		
		$data = array(
			'users' => $users,
			'fonts' => $fonts
		);
		

		$this->load->view('home/index_view',
					array('data' => $data));	    
	}
	
	
	
	function test(){
	?>	

		<script src="http://jqueryui.com/jquery-1.6.2.js"></script>
		<script src="http://jqueryui.com/ui/jquery.ui.core.js"></script>
		<script src="http://jqueryui.com/ui/jquery.ui.widget.js"></script>
		<script src="http://jqueryui.com/ui/jquery.ui.mouse.js"></script>
		<script src="http://jqueryui.com/ui/jquery.ui.resizable.js"></script>
		<style>
		#resizable { background:red;width: 150px; height: 150px; padding: 0.5em; }
		#resizable h3 { text-align: center; margin: 0; }
		</style>

		
		
		<script type="text/javascript" language="Javascript">
			$(document).ready(function() { 
				
				
				$( "#resizable" ).resizable();
						    
						    
			});
		</script>
	
		<div id="resizable" class="ui-widget-content">
			<h3 class="ui-widget-header">Resizable</h3>
		</div>
	
	
	<?php     
		
	}

	public function update(){

		echo  $this->query->update( $this->input->post()  );
		
	}
	
	
	
	
	public function insert(){

		echo  $this->query->insert( $this->input->post()  );
		
	}	
	
	
	
	
	
	
	public function upload(){
		
		$image_type_id = $this->input->post('image_type_id');
		$image_id = $this->input->post('image_id');
		
		if( $image_id [exist in datbase ]){
			
					$this->my_database_model->update_table_where(
										$table = 'images', 
										$where_array = array(
											'id' => 1
										),
										$set_what_array = array()
										);		
											
		}else{
			
				// INSERT
				
		};
		

							
		switch ( $image_type_id ) {
			
		   			case '1':
		    			$folder = 'backgrounds';
		        break;
		        
		   			case '2':
		    			$folder = 'pictures';
		        break;		        
		        
		        
		}
		
		$path_array = array(
			'folder'=> $folder, 
			'image_type_id' => $image_type_id
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
				document.location = '<?php echo base_url()    ?>index.php/home/resize?image_id=1&random=<?php echo  rand(5,126724523)   ?>&image_type_id=<?php echo $image_type_id ?>';		
		</script>
		
		<?php     
	}	
	
	
	
	
	public function resize(){
		
			$image_id = $this->input->get('image_id');
		
			$dir_path = 'uploads/backgrounds/'  . $image_id; 
		
			$image_information = getimagesize($dir_path . '/' . 'image.png');
			
			$width_of_file = $image_information[0];
			$height_of_file = $image_information[1];
			
			$new_width = '367';
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
		<!-- 
		<script type="text/javascript" 
		        src="http://www.google.com/jsapi"></script>
		<script type="text/javascript">
		 
		  google.load("jquery", "1.7.1");
		 	google.load("jqueryui", "1.8.16");
		
		</script>		
		 -->
		<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>


		<script type="text/javascript" language="Javascript">
			$(document).ready(function() { 
				
				
				window.parent.$('body').css({
						    'background-image': 'url(<?php  echo base_url()   ?>uploads/backgrounds/<?php echo $image_id    ?>/image.png?random=<?php echo   rand(5,124344523)   ?>)',
						    'background-position': 'center 0px',
						    'background-repeat': 'no-repeat'});
						    
						    
				window.parent.$('#background-thumb').css({
						    'background-image': 'url(<?php  echo base_url()   ?>uploads/backgrounds/<?php echo $image_id    ?>/image_thumb.png?random=<?php echo  rand(5,126724523)   ?>)',
						    'background-position': '0px 0px',
						    'background-repeat': 'no-repeat'});						    
						    
						    
						    
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