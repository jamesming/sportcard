<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {
	
	
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
		
	}
	
	function jcrop(){
		 ?>
				<link href="<?php  echo base_url()   ?>bootstrap/css/bootstrap.css" rel="stylesheet">
				<script src="<?php  echo base_url()   ?>bootstrap/js/jquery.js"></script>
				<script type="text/javascript" language="Javascript">
					$(document).ready(function() { 
						$('#test2').click(function(event) {
							
							alert('');
							//document.location = '<?php  echo base_url()   ?>index.php/main/update_thumbnail_panel?image_id=&image_type_id=&li_index=';
						});						
					});
				</script>
				
				<a  id='test2' class='btn ' >click</a>		 
			<?php    	
		
	}
	



}

/* End of file welcome.php */
/* Location: ./application/controllers/ajax.php */