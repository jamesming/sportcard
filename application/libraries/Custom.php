<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Custom Library Related to SceneCredit
 * @autoloaded YES
 * @path \system\application\libraries\Custom.php
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @copyright 2010 Prospace LLC
 * @version 1.0
 * 
 */
class Custom {

private $CI;			// CodeIgniter instance


function custom(){
	
	$this->CI =& get_instance();	
	
}

function intersect_array($array1,$array2) 
{ 
      
//		$array1 = array(1,2,3,4,5,6,7,8,9,12,3);
//		$array2 = array(5,6,7,11,12); 
         
    $result = array(); 
    foreach ($array1 as $val) { 
      if (($key = array_search($val, $array2, TRUE))!==false) { 
         $result[] = $val; 
         unset($array2[$key]); 
      } 
    } 
    return $result; 
} 

	
}


/* End of file Tool.php */ 
/* Location: \system\application\libraries\Custom.php */
