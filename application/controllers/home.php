<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	
   public function __construct(){
        parent::__construct();
				$this->user_id = 1;
				$this->thumbnail_size_width  = '181';
				$this->thumbnail_size_height = '120';
   }

	/**
	 * Index Page for this controller.
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/home/index
	 * @access public
	 */
	 
	 
	function jc(){
     ?>
<style>  
.jcarousel-skin-tango .jcarousel-container {
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
   border-radius: 10px;
    background: #F0F6F9;
    border: 1px solid #346F97;
}

.jcarousel-skin-tango .jcarousel-direction-rtl {
	direction: rtl;
}

.jcarousel-skin-tango .jcarousel-container-horizontal {
    width: 245px;
    padding: 20px 40px;
}

.jcarousel-skin-tango .jcarousel-container-vertical {
    width: 75px;
    height: 245px;
    padding: 40px 20px;
}

.jcarousel-skin-tango .jcarousel-clip {
    overflow: hidden;
}

.jcarousel-skin-tango .jcarousel-clip-horizontal {
    width:  245px;
    height: 75px;
}

.jcarousel-skin-tango .jcarousel-clip-vertical {
    width:  75px;
    height: 245px;
}

.jcarousel-skin-tango .jcarousel-item {
    width: 75px;
    height: 75px;
}

.jcarousel-skin-tango .jcarousel-item-horizontal {
	margin-left: 0;
    margin-right: 10px;
}

.jcarousel-skin-tango .jcarousel-direction-rtl .jcarousel-item-horizontal {
	margin-left: 10px;
    margin-right: 0;
}

.jcarousel-skin-tango .jcarousel-item-vertical {
    margin-bottom: 10px;
}

.jcarousel-skin-tango .jcarousel-item-placeholder {
    background: #fff;
    color: #000;
}

/**
 *  Horizontal Buttons
 */
.jcarousel-skin-tango .jcarousel-next-horizontal {
    position: absolute;
    top: 43px;
    right: 5px;
    width: 32px;
    height: 32px;
    cursor: pointer;
    background: transparent url(next-horizontal.png) no-repeat 0 0;
}

.jcarousel-skin-tango .jcarousel-direction-rtl .jcarousel-next-horizontal {
    left: 5px;
    right: auto;
    background-image: url(prev-horizontal.png);
}

.jcarousel-skin-tango .jcarousel-next-horizontal:hover,
.jcarousel-skin-tango .jcarousel-next-horizontal:focus {
    background-position: -32px 0;
}

.jcarousel-skin-tango .jcarousel-next-horizontal:active {
    background-position: -64px 0;
}

.jcarousel-skin-tango .jcarousel-next-disabled-horizontal,
.jcarousel-skin-tango .jcarousel-next-disabled-horizontal:hover,
.jcarousel-skin-tango .jcarousel-next-disabled-horizontal:focus,
.jcarousel-skin-tango .jcarousel-next-disabled-horizontal:active {
    cursor: default;
    background-position: -96px 0;
}

.jcarousel-skin-tango .jcarousel-prev-horizontal {
    position: absolute;
    top: 43px;
    left: 5px;
    width: 32px;
    height: 32px;
    cursor: pointer;
    background: transparent url(prev-horizontal.png) no-repeat 0 0;
}

.jcarousel-skin-tango .jcarousel-direction-rtl .jcarousel-prev-horizontal {
    left: auto;
    right: 5px;
    background-image: url(next-horizontal.png);
}

.jcarousel-skin-tango .jcarousel-prev-horizontal:hover, 
.jcarousel-skin-tango .jcarousel-prev-horizontal:focus {
    background-position: -32px 0;
}

.jcarousel-skin-tango .jcarousel-prev-horizontal:active {
    background-position: -64px 0;
}

.jcarousel-skin-tango .jcarousel-prev-disabled-horizontal,
.jcarousel-skin-tango .jcarousel-prev-disabled-horizontal:hover,
.jcarousel-skin-tango .jcarousel-prev-disabled-horizontal:focus,
.jcarousel-skin-tango .jcarousel-prev-disabled-horizontal:active {
    cursor: default;
    background-position: -96px 0;
}

/**
 *  Vertical Buttons
 */
.jcarousel-skin-tango .jcarousel-next-vertical {
    position: absolute;
    bottom: 5px;
    left: 43px;
    width: 32px;
    height: 32px;
    cursor: pointer;
    background: red;
}

.jcarousel-skin-tango .jcarousel-next-vertical:hover,
.jcarousel-skin-tango .jcarousel-next-vertical:focus {
    background-position: 0 -32px;
}

.jcarousel-skin-tango .jcarousel-next-vertical:active {
    background-position: 0 -64px;
}

.jcarousel-skin-tango .jcarousel-next-disabled-vertical,
.jcarousel-skin-tango .jcarousel-next-disabled-vertical:hover,
.jcarousel-skin-tango .jcarousel-next-disabled-vertical:focus,
.jcarousel-skin-tango .jcarousel-next-disabled-vertical:active {
    cursor: default;
    background-position: 0 -96px;
}

.jcarousel-skin-tango .jcarousel-prev-vertical {
    position: absolute;
    top: 5px;
    left: 43px;
    width: 32px;
    height: 32px;
    cursor: pointer;
    background: blue;
}

.jcarousel-skin-tango .jcarousel-prev-vertical:hover,
.jcarousel-skin-tango .jcarousel-prev-vertical:focus {
    background-position: 0 -32px;
}

.jcarousel-skin-tango .jcarousel-prev-vertical:active {
    background-position: 0 -64px;
}

.jcarousel-skin-tango .jcarousel-prev-disabled-vertical,
.jcarousel-skin-tango .jcarousel-prev-disabled-vertical:hover,
.jcarousel-skin-tango .jcarousel-prev-disabled-vertical:focus,
.jcarousel-skin-tango .jcarousel-prev-disabled-vertical:active {
    cursor: default;
    background-position: 0 -96px;
}
</style>
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
	<script src="http://sorgalla.com/projects/jcarousel/lib/jquery.jcarousel.min.js"></script> 

<script type="text/javascript" language="Javascript">
	function carousel_callback( carousel, state) {
		
		    if (state != 'init')
		    return;

				//carousel.size( 0 )
				
				$('#reset-caro').click( function( evt ) {
					carousel.reset();
				});
				
				$('#go').click(function(event) {

						carousel.scroll(parseInt($('#see').val()),true);
				});	
				
				$('#add-to').click( function( evt ) {
				
					if( carousel.size() > -1 ){
						carousel.size( carousel.size() + 1)
					}else{
						carousel.size( 0 )
					};
					
					carousel.add(  (carousel.size()) , "<li>" + (carousel.size()) +"</li>");					
					
					$('#see2').val(carousel.size())
					

				  carousel.scroll(parseInt(carousel.size()),true);
				});
				
				$('#remove').click( function( evt ) {
	
					var li_array = new Array();

					var e = carousel.get(  $('#see').val() );

					theParent = e.parent()
					theChildren = e.parent().find("li");


	        var count = 0; 
	        $.each(theChildren,function(){
	        		if( $(this).attr('jcarouselindex') != $('#see').val() ){
	          	 	$(this).removeAttr("class").removeAttr("jcarouselindex");
	              li_array[count] = $(this); 	 
	              count++;       			
	        		}
	            
	        });
	        

	        carousel.reset();
					
          count = 1;

          $.each(li_array, function(key, value){

              if(value != null) {
                 	carousel.add(count,  value);
                  count++;
              }
          });
          

					carousel.size( li_array.length)          
          
					
					$('#see2').val(carousel.size())
					
					carousel.reload()
					

				});	

	}
	
	
	
	
	
	$(document).ready(function() {

	    $('#mycarousel').jcarousel( {
	        initCallback: carousel_callback,
	        
	    });
	    
   	    

	});	
</script>
  <a id="reset-caro" href="#">reset</a>

  <a id="add-to" href="#">add</a>  
  <a id="remove" href="#">remove</a> 
  <a id="go" href="#">go</a> 
  <input id="see" type="" value=""> 
  <input id="see2" type="" value=""> 

  <ul id="mycarousel" class="jcarousel-skin-tango">
    <li><img src="http://static.flickr.com/66/199481236_dc98b5abb3_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/75/199481072_b4a0d09597_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/57/199481087_33ae73a8de_s.jpg" width="75" height="75" alt="" /></li>
  	<li><img src="http://static.flickr.com/77/199481108_4359e6b971_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/58/199481143_3c148d9dd3_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/72/199481203_ad4cdcf109_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/58/199481218_264ce20da0_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/69/199481255_fdfe885f87_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/60/199480111_87d4cb3e38_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/70/229228324_08223b70fa_s.jpg" width="75" height="75" alt="" /></li>
  </ul>
     <?php
	}
	 
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
			'thumbnail_size_width' => $this->thumbnail_size_width,
			'thumbnail_size_height' => $this->thumbnail_size_height,
			'user_id' => $this->user_id
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
			
			$this->update_thumbnail_panel(
				$image_id,
				$image_type_id,
				$li_index
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
			$location = $upload_path . '/image_thumb.png'
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
									    'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/<?php echo $image_id    ?>/image.png?random=<?php echo   rand(5,124344523)   ?>)',
									    'background-position': 'center 0px',
									    'background-repeat': 'no-repeat'});
						
						
					<?php } ?>
							    
					<?php if( $image_types[$image_type_id] == 'videos-div' ){?>
							
							window.parent.$('#form_video input[name=li_index]').val(-1);
							window.parent.$('#form_video input[name=image_id]').val(0);
							window.parent.$('#form_video input[name=video_url]').val('');
						
						
					<?php } ?>							    

					<?php if( $li_index != -1 ){?>  /* UPDATE THUMB*/
							    
							window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div li:eq(<?php echo $li_index    ?>)').css({
									    'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/<?php echo $image_id    ?>/image_thumb.png?random=<?php echo  rand(5,126724523)   ?>)',
									    'background-position': '0px 0px',
									    'background-repeat': 'no-repeat'});						
							
					<?php }else{ ?>  /* INSERT THUMB */

							if( window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div li').length > 0   ){
								
								var copy_li = window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div li:eq(0)').clone(true);
								window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div ul').append(copy_li);			
								
													
							}else{

									thumbs_div = window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div');
									uploadButton = thumbs_div.find('.upload_button');
									thumbs_div.children('ul').append("<li style='background:brown'  class='background-img ' image_id='0'  image_type_id='" + uploadButton.attr('image_type_id') + "'  ><div  class='small_icons_panel transparent' ><div  class='delete ' >[X]</div><div  class='<?php echo ( $image_types[$image_type_id] == 'videos-div' ? 'update-video_url':'update-image' )    ?> ' ' >[E]</div><?php echo ( $image_types[$image_type_id] == 'backgrounds-div' ? "<div  class='swap ' >[C]</div>": "")    ?></div></li>");

							};
							
							
							window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div ul li').last()
								.attr('image_type_id',<?php  echo $image_type_id   ?>)
								.attr('image_id',<?php  echo $image_id   ?>)
								.css({'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/<?php echo $image_id    ?>/image_thumb.png?random=<?php echo  rand(5,126724523)   ?>)',
									    'background-position': '0px 0px',
									    'background-repeat': 'no-repeat'})
							window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div ul.thumbs-ul')
								.css({width:(<?php echo $this->thumbnail_size_width ?> * window.parent.$('#<?php echo $image_types[$image_type_id] ?>.thumbs-div li').length )+'px'})		    
					
							window.parent.clearModelCarousel();
							
					    window.parent.$(".jcarousel").jCarouselLite({
					        btnNext: ".next",
					        btnPrev: ".prev",
							    easing: "backout",
							    speed: 750,
	 								circular: false,
	 								mouseWheel: true,
	  							scroll: 1,
									visible: 4
					    });
															    
									    						
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