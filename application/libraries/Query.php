<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Query Library Related to SceneCredit
 * @autoloaded YES
 * @path \system\application\libraries\Query.php
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @copyright 2010 Prospace LLC
 * @version 1.0
 * 
 */
 
 
 
class Query {

	private $CI;	// CodeIgniter instance
	
	
	function query(){
		
		$this->CI =& get_instance();	
		
	}

	function get( $table, $where_array ){
		
		return $this->CI->my_database_model->select_from_table( 
			$table, 
			$select_what = '*', 
			$where_array, 
			$use_order = TRUE, 
			$order_field = 'created', 
			$order_direction = 'desc',
			$limit = -1
			);
		
	}

	function insert($post_array){

		$set_where_array = $this->get_set_where_array($post_array);
		
		$this->add_column_if_not_exist($set_where_array, $post_array['table']);					

	}

	function update($post_array){

		$set_where_array = $this->get_set_where_array($post_array);
		
		$this->add_column_if_not_exist($set_where_array, $post_array['table']);

		$db_response = $this->CI->my_database_model->update_table_where(
					$post_array['table'], 
					$where_array = array('id'=>$post_array['id']),
					$set_what_array = $set_where_array
					);	
	}
	
	function get_set_where_array($post_array){
		
			$fields = explode('&', $post_array['set_what_array']);
			foreach($fields as $field){
				$field_key_value = explode("=",$field);
				$key = urldecode($field_key_value[0]);
				$value = urldecode($field_key_value[1]);
				eval("$$key = \"$value\";");
				$set_where_array[$key] = $value;
			};	  

			return $set_where_array;
				
	}
	
	
	function add_column_if_not_exist($set_where_array, $table){
		
			foreach( $set_where_array  as  $key => $value){
				$fields_array = array(
							$key => array('type' => 'varchar(255)')                                          
            	); 

				$this->CI->my_database_model->add_column_to_table_if_exist(
					$table, 
					$fields_array
				);    					
			};
 	
		
	}
	
}


/* End of file Tool.php */ 
/* Location: \system\application\libraries\Query.php */
