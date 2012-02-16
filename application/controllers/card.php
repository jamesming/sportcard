<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	
   public function __construct(){
        parent::__construct();


				$this->thumbnail_size_width  = '181';
				$this->thumbnail_size_height = '120';
				$this->thumbnail_panel_width = '755';
				$this->top_direction_arrow = '52';						
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
		
		echo $this->uri->segment(1);
		
		exit;
		
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
			'thumbnail_size_width' => $this->thumbnail_size_width,
			'thumbnail_size_height' => $this->thumbnail_size_height,
			'thumbnail_panel_width' => $this->thumbnail_panel_width,
			'top_direction_arrow' => $this->top_direction_arrow,
			'user_id' => $this->user_id
		);
		

		$this->load->view('main/index_view',
					array('data' => $data));	    
	}
	
	



}

/* End of file welcome.php */
/* Location: ./application/controllers/card.php */