<style>
	body{
/*  background-image: url(<?php  echo base_url()   ?>uploads/<?php echo $data['users'][0]['user_id']   ?>/<?php echo $data['users'][0]['image_background_id']   ?>/image.jpg);
  background-position:center 40px;/* 40px to make the container go all the way to the bottom of the topbar */
  background-repeat:no-repeat;
  -webkit-background-size:1280px 1324px; background-size:cover;*/
  padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	}
.fullBg {
  position: absolute;
  top: 0;
  left: 0;
  overflow: hidden;
//  margin-top:35px;
}
 
#maincontent {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 50; 
}	
	.top-right-rounded{
		border-top-right-radius: 6px;
		-moz-border-radius-topright: 6px;
		-webkit-border-top-right-radius: 6px;	
	}
	.top-left-rounded{
		border-top-left-radius: 6px;
		-moz-border-radius-topleft: 6px;
		-webkit-border-top-left-radius: 6px;	
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
	.shadowed{
	  -webkit-box-shadow: 0 0 12px #dbc59e;
	  -moz-box-shadow: 0 0 6px #dbc59e;
	  box-shadow: 0 0 6px #dbc59e;	
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

	.draggable .icon-boxes{
	width:22px;
	float:right;
	height:20px;	
	padding-top:4px;
	}	
	.draggable div.handle {
		
		cursor: move;
		z-index:1; 
	}
	.draggable div.close-window {
	cursor: pointer; 
	}
	
.box{
	z-index:5;	
}
.box.push-z-index-back{
z-index:-1;
}

	.window-controls-container{
	height:23px;
	background:white;
	z-index:0;
	}	
	

	

#main-box{
	border:0px solid white;
	height:600px;	
}

#main-box div.box{
	padding:0px;
}
		
#main-box #settings-box{
	background:white;
  height: 340px;
  width: 370px;
  display:none;
  position:absolute;
}
#main-box #settings-box li.settings_tabs{
float:left;
padding:5px;
border:1px solid gray;
cursor:pointer;
}
			
#head-line-box{
width: 800px; 
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
	background:white;
	width:860px;
	height: 600px;			
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
			
			.small_icons_panel{
			height:25px !important;	
			width:25px !important;
			border-bottom-left-radius: 3px;
			-moz-border-radius-bottomleft: 3px;
			-webkit-border-bottom-left-radius: 3px;				
			}			
			.small_icons_panel div{
			margin-top:5px;	
			margin-right:5px;	
			}

#preview_box{
padding:20px;	
clear:both;
}
#preview_box  #preview_box_inside{
background: gray;
border: 1px solid gray;
width:400px;
height: 250px;
margin-left:auto;
margin-right:auto;
}				
			
.inside_li{
    clear: both;
    height: 75px;
    width: 181px;
    cursor:pointer;
}			
<?php  		$this->load->view('header/jcarousel_css.php');   ?>
<?php  		$this->load->view('header/qq-uploader_css.php');   ?>

.jcarousel-skin-tango{
margin-top:5px;	
}
.qq-upload-button {
		float:right;
    display:inline-block; /* or inline-block */
    width: 60px; padding: 3px 0; text-align:center;    
    background:transparent; border-bottom:0px solid #ddd;color:gray;
    cursor:pointer;
}
.qq-upload-button-hover {background:transparent;cursor:pointer;}
.qq-upload-button-focus {outline:1px dotted black;cursor:pointer;}
.orange{
background:orange;	
}
.yellow{
background:yellow;	
}
</style>