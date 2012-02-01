<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	$this->load->view('header/blueprint_css.php');  ?>
<style>
							

div.jcarousel-skin-tango ul.thumbs-ul li div.small_icons_panel{
  float: right;
  height: 22px;
  position: relative;
  width: 71px;
  padding-top: 3px;
  display:block;
}	
div.jcarousel-skin-tango ul.thumbs-ul li div.small_icons_panel div{
	color:white;
  float: right;
  height: 19px;
  margin-right: 2px;
  width: 20px;
  text-align: center;
  cursor:pointer
}		
			
	  
.jcarousel-skin-tango .jcarousel-container {

    border: 1px solid red;
}

.jcarousel-skin-tango .jcarousel-direction-rtl {
	direction: rtl;
}

.jcarousel-skin-tango .jcarousel-container-horizontal {
    width:<?php echo $data['thumbnail_panel_width']    ?>px;
    padding: 20px 40px;
}


.jcarousel-skin-tango .jcarousel-clip {
    overflow: hidden;
}

.jcarousel-skin-tango .jcarousel-clip-horizontal {
    width: <?php echo $data['thumbnail_panel_width']    ?>px;
    height: <?php echo $data['thumbnail_size_height']    ?>px;
}


.jcarousel-skin-tango .jcarousel-item {
    width: <?php echo $data['thumbnail_size_width']    ?>px;
    height: <?php echo $data['thumbnail_size_height']    ?>px;
}

.jcarousel-skin-tango .jcarousel-item-horizontal {
	margin-left: 0;
	margin-right: 10px;
}

.jcarousel-skin-tango .jcarousel-direction-rtl .jcarousel-item-horizontal {
	margin-left: 10px;
	margin-right: 0;
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
    top: <?php echo $data['top_direction_arrow']    ?>px;
    right: 5px;
    width: 32px;
    height: 32px;
    cursor: pointer;
    background: transparent url(http://sorgalla.com/projects/jcarousel/skins/tango/next-horizontal.png) no-repeat 0 0;
}

.jcarousel-skin-tango .jcarousel-direction-rtl .jcarousel-next-horizontal {
    left: 5px;
    right: auto;
    background-image: url(http://sorgalla.com/projects/jcarousel/skins/tango/prev-horizontal.png);
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
    top:  <?php echo $data['top_direction_arrow']    ?>px;
    left: 5px;
    width: 32px;
    height: 32px;
    cursor: pointer;
    background: transparent url(http://sorgalla.com/projects/jcarousel/skins/tango/prev-horizontal.png) no-repeat 0 0;
}

.jcarousel-skin-tango .jcarousel-direction-rtl .jcarousel-prev-horizontal {
    left: auto;
    right: 5px;
    background-image: url(http://sorgalla.com/projects/jcarousel/skins/tango/next-horizontal.png);
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


</style>
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
	<script src="<?php echo  base_url();   ?>js/jCarousel.min.js"></script> 


</head>

<html>

<body>



														<div class='mycarousel  jcarousel-skin-tango'>
															<ul class='thumbs-ul'   style='width:<?php echo ( isset($data['users']['backgrounds']['images']) ? $data['thumbnail_size_width'] * count($data['users']['backgrounds']['images']) : $data['thumbnail_size_width'] )    ?>px'  >
																
<?php if( isset($data['users']['backgrounds']['images']) ){?>
																
																<?php foreach( $data['users']['backgrounds']['images']  as $image_id){?>

																	<li   style='background:url(<?php echo base_url()     ?>uploads/<?php echo $data['user_id']    ?>/<?php echo $image_id    ?>/image_thumb.png)'  class='background-img ' image_id='<?php  echo $image_id   ?>'  image_type_id='0'  >
																		<div  class='small_icons_panel transparent' >
																			<div  class='delete ' >[X]
																			</div>
																			<div  class='update-image ' ' >[E]
																			</div>
																			<div  class='swap ' >[C]
																			</div>																																							
																		</div>
																	</li>
																
																<?php } ?>

														
<?php } ?>

																
																
																
															</ul>															
														</div>


<script type="text/javascript" language="Javascript">


function mycarousel_initCallback(carousel, state) {
		
		    if (state != 'init')
		    return;
		    

    
};

$(document).ready(function() { 

												$(".mycarousel").jcarousel({
												        scroll: 1,
												        initCallback: mycarousel_initCallback
												});	
});


</script>




