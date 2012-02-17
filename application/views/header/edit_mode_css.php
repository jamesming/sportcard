<style>
	body{
  background-image: url(<?php  echo base_url()   ?>uploads/<?php echo $data['users'][0]['user_id']   ?>/<?php echo $data['users'][0]['image_background_id']   ?>/image.jpg);
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
	

	
div#header .coordinates{
	width:200px;
}
div#header div.sides{
float:left;
}	
div#header .right_panel{
background:white;
margin-left:400px;
}	

div#header .right_panel .edit-panel{
 width:200px;
 background:lightgray;
}
div#header .right_panel #myaccount_container {
	width:350px;
	background:transparent;
}

				/* BEGIN TWITTER LOGIN CSS */
				#myaccount_container #topnav {
					font-size:13px;
					line-height:23px;
					text-align:right;
					color:#8AA823;
				}
				#myaccount_container #topnav a.myaccount {
					text-decoration:none;
					font-size:12px;	
					background:#A8C739;
					padding:4px 6px 6px;
					text-decoration:none;
					font-weight:bold;
					color:#F2F2F2;
					border-top-left-radius: 5px;
					-moz-border-radius-topleft: 5px;
					-webkit-border-top-left-radius: 5px;
					border-top-right-radius: 5px;
					-moz-border-radius-topright: 5px;
					-webkit-border-top-right-radius: 5px;
					border-bottom-left-radius: 5px;
					-moz-border-radius-bottomleft: 5px;
					-webkit-border-bottom-left-radius: 5px;
					border-bottom-right-radius: 5px;
					-moz-border-radius-bottomright: 5px;
					-webkit-border-bottom-right-radius: 5px;											
				}
				#myaccount_container #topnav a.myaccount:hover {
					background:#D5E8B4;
					color:#8AA823!important;
					text-decoration:none!important;
				}
				#myaccount_container #topnav a.myaccount, #topnav a.myaccount:hover {
					*background-position:0 3px!important;
				}
				
				#myaccount_container #topnav div#greeting{
				font-size: 15px;
				padding-right: 15px;
				padding-top: 5px;
				color:white;
				}
				
				#myaccount_container #topnav a.myaccount {
					position:relative;
					margin-left:3px;
				}
				#myaccount_container #topnav a.myaccount span {
					background-image:url(<?php echo base_url()    ?>images/twitter_login/toggle_down_light.png);
					background-repeat:no-repeat;
					background-position:100% 50%;
					padding:4px 16px 6px 0;
				}
				#myaccount_container #topnav a.myaccount.menu-open {
					background:#D5E8B4!important;
					color:#666!important;
					outline:none;
				}
				
				#myaccount_container #topnav a.myaccount.menu-open span {
					background-image:url(<?php echo base_url()    ?>images/twitter_login/toggle_up_dark.png);
					color:#789;
				}
				
				#myaccount_container #account_menu {
						margin-top:-3px;
				    border-bottom-left-radius: 5px;
				    border-bottom-right-radius: 5px;
				    border-top-left-radius: 5px;
				    background-color: #D5E8B4;    
				    color: gray;
				    display: none;
				    font-size: 12px;
				    padding-top: 12px;
				    padding-bottom: 12px;
				    text-align: left;
				    z-index: 100;
				    width:106px;
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
  height: 300px;
  width: 300px;
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
	background:white;
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
			
#profile_box .insides .div-panel .middle div.halves{
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
<?php  		$this->load->view('header/jcarousel_css.php');   ?>
<?php  		$this->load->view('header/qq-uploader_css.php');   ?>
</style>