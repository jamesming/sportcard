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
		
		$users = $this->query->get(
			'users',
			array(
				'id' => 1
			)	
		);
		
		
		$data = array(
			'users' => $users
		);
		

		$this->load->view('home/index_view',
					array('data' => $data));	    
	}
	
	

	public function update(){

		echo  $this->query->update( $this->input->post()  );
		
	}
	
	
	
	
	
	
	function a3_insert(){

		$set_what = array(
			'table' => $this->input->get('table'),
			'set_what' => $this->input->get()
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
$table = 'a3_emails';
$this->my_database_model->create_generic_table($table );

$table = 'a3_screenings';
$this->my_database_model->create_generic_table($table );

$fields_array = array(
//                      'user_id' => array(
//                                               'type' => 'int(11)'
//                                    ),
//                      'ip_address' => array(
//                                               'type' => 'varchar(255)'
//                                    ),
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