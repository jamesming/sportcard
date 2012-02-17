<style>
	body{
  background-image: url(<?php  echo base_url()   ?>uploads/<?php echo $data['user_id']   ?>/<?php echo ( isset( $data['users']['backgrounds']['images'][0]) ? $data['users']['backgrounds']['images'][0]:'0' )    ?>/image.jpg);
  background-position:center 0px;
  background-repeat:no-repeat;/*
  -webkit-background-size:1280px 1024px;*/
  background-size:cover;
	}
	.top-right-rounded{
		border-top-right-radius: 6px;
		-moz-border-radius-topright: 6px;
		-webkit-border-top-right-radius: 6px;	
	}
	.hide{
	display:none;	
	}
	.transparent{
			/* Fallback for web browsers that don't support RGBa */
			background-color: rgb(0, 0, 0);
			/* RGBa with 0.6 opacity */
			background-color: rgba(0, 0, 0, 0.3);
			<?php if( $this->tools->browserIsExplorer() ){?>
				background: transparent; 
			<?php } ?>
			<?php     
			/*
			http://robertnyman.com/2010/01/11/css-background-transparency-without-affecting-child-elements-through-rgba-and-filters/ 
			*/
			?>
		}
	.rounded{
		border-top-left-radius: 6px;
		border-top-right-radius: 6px;
		-moz-border-radius-topleft: 6px;
		-moz-border-radius-topright: 6px;
		-webkit-border-top-right-radius: 6px;
		-webkit-border-top-left-radius: 6px;
		border-bottom-left-radius: 6px;
		border-bottom-right-radius: 6px;
		-moz-border-radius-bottomleft: 6px;
		-moz-border-radius-bottomright: 6px;
		-webkit-border-bottom-right-radius: 6px;
		-webkit-border-bottom-left-radius: 6px;
	}
	.float_left{
	float:left;	
	}
	.float_right{
	float:right;	
	}
	.clearfix{
	clear:both;	
	}
	
	.large_header{
	font-size:17px;
	margin-bottom:20px;
	}
	.input-label{
	font-size:9px;
	margin-top:5px;	
	}	
	
	div.container{
	min-height:30px;	
	border:0px solid gray;
	}
	
	
	div#main-box{
	min-height:600px;
	}

	.draggable{ 
	float: left;
/*	background:transparent;	*/
	border:0px solid gray;
	}
	.draggable .insides{
		clear:both;
	}
	.draggable .icon-boxes{
	width:22px;
	float:right;
	height:20px;	
	}	
	.draggable div.handle {
		background: url("<?php  echo base_url()   ?>images/icons.png") no-repeat scroll -14px -480px yellow;
		cursor: move;
		z-index:1; 
	}
	.draggable div.close-window {
	background: url("<?php  echo base_url()   ?>images/icons.png") no-repeat scroll -14px -172px yellow;
	cursor: pointer; 
	}
	
.box{
	z-index:5;	
}
.box.push-z-index-back{
z-index:-1;
}

	.window-controls-container{
	height:21px;
	background:gray;
	z-index:0;
	}	
	

	div#header{
	display:none;	
	}

#main-box{
	border:0px solid white;
	height:600px;	
}

#main-box div.box{
	padding:0px;
}
		

			
#head-line-box{
width: 500px; 
height: 200px;	
position:absolute;

}


#head-line-box #full_name_readonly{
font-size:15px;
font-weight:bold;
color:gray;	
padding-left:10px;
white-space:nowrap;
margin-top:20px;
}


	#profile_box{
	background:red;
	width:875px;
	height: 600px;			
	}		
	
		#profile_box #panel-tabs_container{
		height:19px;
		background:lightblue;	
		}
		#profile_box #panel-tabs_container li{
			float:left;
			border-right:1px solid gray;
			width:100px;
			border-bottom:1px solid gray;
			text-align:center;
		}		

		
		
		
	.upload_button{
		height:30px;
		margin:0px 0px 0px 0px;
		padding:0px 0px 0px 0px;
		cursor:pointer;
		background:yellow;
		text-align:right;
	}

			#profile_box ul#panels_ul li.panels div.div-panel{
			padding:20px;	
			}
			
#profile_box .insides  #panel-5 .div-panel .middle div.halves{
	width: 397px;
	height:441px;
	float:left;
	padding:10px;
	
}
#profile_box .insides  #preview_box{
padding:20px;	
clear:both;
}
#profile_box .insides  #preview_box_inside{
background: none repeat scroll 0 0 white;
border: 0px solid gray;
height: 281px;
}				
			
.inside_li{
    clear: both;
    height: 75px;
    width: 181px;
    cursor:pointer;
}			
			
.jcarousel-skin-tango ul.thumbs-ul li div.small_icons_panel{
  float: right;
  height: 22px;
  position: relative;
  width: 71px;
  padding-top: 3px;
  display:none;
}	
.jcarousel-skin-tango ul.thumbs-ul li div.small_icons_panel div{
	color:white;
  float: right;
  height: 19px;
  margin-right: 2px;
  width: 20px;
  text-align: center;
  cursor:pointer
}		
					
	  
.jcarousel-skin-tango .jcarousel-container {

    border: 1px solid blue;
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
    background: transparent url(<?php echo base_url()     ?>images/next-horizontal.png) no-repeat 0 0;
}

.jcarousel-skin-tango .jcarousel-direction-rtl .jcarousel-next-horizontal {
    left: 5px;
    right: auto;
    background-image: url(<?php echo base_url()     ?>images/prev-horizontal.png);
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
    background: transparent url(<?php echo base_url()     ?>images/prev-horizontal.png) no-repeat 0 0;
}

.jcarousel-skin-tango .jcarousel-direction-rtl .jcarousel-prev-horizontal {
    left: auto;
    right: 5px;
    background-image: url(<?php echo base_url()     ?>images/next-horizontal.png);
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

.qq-uploader { position:relative; width: 100%;}

.qq-upload-button {
		float:right;
    display:block; /* or inline-block */
    width: 105px; padding: 7px 0; text-align:center;    
    background:#880000; border-bottom:1px solid #ddd;color:#fff;
}
.qq-upload-button-hover {background:#cc0000;}
.qq-upload-button-focus {outline:1px dotted black;}

.qq-upload-drop-area, .qq-upload-extra-drop-area {
    position:absolute; top:0; left:0; width:100%; height:100%; min-height: 70px; z-index:2;
    background:#FF9797; text-align:center; 
}
.qq-upload-drop-area span {
    display:block; position:absolute; top: 50%; width:100%; margin-top:-8px; font-size:16px;
}
.qq-upload-extra-drop-area { position: relative; margin-top: 50px; font-size: 16px; padding-top: 30px; height: 20px; min-height: 40px; }
.qq-upload-drop-area-active {background:#FF7171;}

.qq-upload-list {margin:15px 35px; padding:0; list-style:disc;}
.qq-upload-list li { margin:0; padding:0; line-height:15px; font-size:12px;}
.qq-upload-file, .qq-upload-spinner, .qq-upload-size, .qq-upload-cancel, .qq-upload-failed-text {
    margin-right: 7px;
}

.qq-upload-file {}
.qq-upload-spinner {display:inline-block; background: url("loading.gif"); width:15px; height:15px; vertical-align:text-bottom;}
.qq-upload-size,.qq-upload-cancel {font-size:11px;}

.qq-upload-failed-text {display:none;}
.qq-upload-fail .qq-upload-failed-text {display:inline;}


.qq-upload-drop-area, .qq-upload-list{
display:none;	
}
</style>