<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php     	$this->load->view('header/blueprint_css.php');  ?>
<style>
	body{
  background-image: url(<?php  echo base_url()   ?>uploads/<?php echo $data['user_id']   ?>/<?php echo ( isset( $data['users']['backgrounds']['images'][0]) ? $data['users']['backgrounds']['images'][0]:'0' )    ?>/image.jpg);
  background-position:center 0px;
  background-repeat:no-repeat;
  -webkit-background-size:1500px 1500px;
  background-size:1500px 1500px;
	}
	.top-right-rounded{
		border-top-right-radius: 6px;
		-moz-border-radius-topright: 6px;
		-webkit-border-top-right-radius: 6px;	
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
	border:1px solid white;
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


<script type="text/javascript" 
        src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
 
  google.load("jquery", "1.4.2");
 	google.load("jqueryui", "1.8.16");

</script>

<!--  
http://stackoverflow.com/questions/1997993/jcarousel-doesnt-work-properly-in-chrome
-->
<!--
	<script type="text/javascript" language="Javascript" src = "<?php echo  base_url();   ?>js/jquery.js"></script>
-->

	<link rel="stylesheet" href="<?php echo  base_url();   ?>js/jquery-ui/themes/base/jquery.ui.all.css"> 
	<script src="<?php echo  base_url();   ?>js/external/jquery.bgiframe-2.1.2.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery-ui/jquery.ui.core.min.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery-ui/jquery.ui.widget.min.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery-ui/jquery.ui.mouse.min.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery-ui/jquery.ui.draggable.min.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery-ui/jquery.ui.position.min.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery-ui/jquery.ui.resizable.min.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery-ui/jquery.ui.dialog.min.js"></script> 
	<script src="<?php echo  base_url();   ?>js/jquery.jcarousel.js"></script> <!--
	<script src="<?php echo  base_url();   ?>js/easing/jquery.easing.1.1.js"></script> 
	<script src="<?php echo  base_url();   ?>js/mousewheel.js"></script> -->
	<script src="<?php echo  base_url();   ?>js/cufon.js"></script> 
	<script src="<?php echo  base_url();   ?>js/fileuploader.js"></script> 
<script type="text/javascript" language="Javascript">
(function($){ 
$.fn.htmlbox=function(options){
    // START: Settings
        // Are there any plugins?
    var colors = (typeof document.htmlbox_colors === 'function')?document.htmlbox_colors():['silver','silver','white','white','yellow','yellow','orange','orange','red','red','green','green','blue','blue','brown','brown','black','black'];
	var styles = (typeof document.htmlbox_styles === 'function')?document.htmlbox_styles():[['No Styles','','']];
	var syntax = (typeof document.htmlbox_syntax === 'function')?document.htmlbox_syntax():[['No Syntax','','']];
	var urm = (typeof htmlbox_undo_redo_manager === 'function')?new htmlbox_undo_redo_manager():false;
	// Default option
	var d={
	    toolbars:[["bold","italic","underline"]],      // Buttons
		idir:"<?php echo base_url();    ?>js/htmlbox/images/",// HtmlBox Image Directory, This is needed for the images to work
		icons:"default",  // Icon set
		about:true,
		skin:"default",  // Skin, silver
		output:"xhtml",  // Output
		toolbar_height:24,// Toolbar height
		tool_height:16,   // Tools height
		tool_width:16,    // Tools width
		tool_image_height:16,  // Tools image height
		tool_image_width:16,  // Tools image width
		css:"body{margin:3px;font-family:verdana;font-size:11px;}p{margin:0px;}",
		success:function(data){alert(data);}, // AJAX on success
		error:function(a,b,c){return this;}   // AJAX on error
	};
	
	// User options
    d = $.extend(d, options);
    
    // Is forward slash added to the image directory
    if(d.idir.substring(d.idir.length-1)!="/"){d.idir+="/";}
    // END: Settings
	
	// ------------- START: PRIVATE METHODS -----------------//
	
    //========================= START OF METHOD ===========================//
    //  METHOD: get_selection                                              //
    //=====================================================================//
	   /**
	    * Returns the selected (X)HTML code
	    * @access private
	    */
	var get_selection = function(){
	    var range;
		if($.browser.msie){
	       range = d.iframe.contentWindow.document.selection.createRange();
		   if (range.htmlText && range.text){return range.htmlText;}
	    }else{
		   if (d.iframe.contentWindow.getSelection) {
		       var selection = d.iframe.contentWindow.getSelection();
		       if (selection.rangeCount>0&&window.XMLSerializer){
                   range=selection.getRangeAt(0);
                   var html=new XMLSerializer().serializeToString(range.cloneContents());
			       return html;
               }if (selection.rangeCount > 0) {
		           range = selection.getRangeAt(0);
			       var clonedSelection = range.cloneContents();
			       var div = document.createElement('div');
			       div.appendChild(clonedSelection);
			       return div.innerHTML;
		       }
			}
		}
	};
    //=====================================================================//
    //  METHOD: get_selection                                              //
    //========================== END OF METHOD ============================//
	
	//========================= START OF METHOD ===========================//
    //  METHOD: in_array                                                   //
    //=====================================================================//
	 /**
	    * Coppies the PHP in_array function. This is useful for Objects.
	    * @access private
	    */
	var in_array=function(o,a){
	   for (var i in a){ if((i===o)){return true;} }
       return false;
	};
    //=====================================================================//
    //  METHOD: in_array                                                   //
    //========================== END OF METHOD ============================//
	
    //========================= START OF METHOD ===========================//
    //  METHOD: insert_text                                                //
    //=====================================================================//
	   /**
	    * Inserts text at the cursor position or selection
	    * @access private
	    */
	var insert_text = function(text,start,end){
	    if($.browser.msie){
	        if(typeof d.idoc.selection !== "undefined" && d.idoc.selection.type !== "Text" && d.idoc.selection.type !== "None"){start = false;d.idoc.selection.clear();}
		    var sel = d.idoc.selection.createRange();sel.pasteHTML(text);
			if (text.indexOf("\n") === -1) {
			    if (start === false) {} else {
                    if (typeof start !== "undefined") {
                        sel.moveStart("character", - text.length + start);
                        sel.moveEnd("character", - end);
                    } else {
                        sel.moveStart("character", - text.length);
                    }
                }
                sel.select();
            }
		}else{
		    d.idoc.execCommand("insertHTML", false, text);
		}
	};
    //=====================================================================//
    //  METHOD: insert_text                                                //
    //========================== END OF METHOD ============================//

	//========================= START OF METHOD ===========================//
    //  METHOD: keyup                                                      //
    //=====================================================================//
	   /**
	    * Keyup event.
	    * @access private 
	    */
	var keyup = function(e){
	    // Updating the textarea component, so whenever it is posted it will send all the data
		var html = $("#1"+d.id).is(":visible")?$("#"+d.id).val():html = d.iframe.contentWindow.document.body.innerHTML;
		if(urm){urm.add(html);} // Undo Redo
	    html = (typeof getXHTML === 'function')?getXHTML(html):html;
		$("#"+d.id).val(html);
		if(undefined!==d.change){d.change();}
	};
    //=====================================================================//
    //  METHOD: keyup                                                      //
    //========================== END OF METHOD ============================//
	
    //========================= START OF METHOD ===========================//
    //  METHOD: style                                                      //
    //=====================================================================//
	   /**
	    * Sets the CSS style to the HtmlBox iframe
	    * @access private
	    */
    var style = function(){
	    // START: HtmlBox Style
        if(d.css.indexOf("background:")===-1){d.css+="body{background:white;}";}
        if(d.css.indexOf("background-image:")===-1){
		    d.css=d.css+"body{background:none;background-position:top right;background-repeat:no-repeat;}";
		}
        
		if( d.idoc.createStyleSheet) {
		  d.idoc.createStyleSheet().cssText=d.css;
		}else {
		  var css=d.idoc.createElement('link');
		  css.rel='stylesheet'; css.href='data:text/css,'+escape(d.css);
		  if($.browser.opera){
			 d.idoc.documentElement.appendChild(css);
		  }else{
			 d.idoc.getElementsByTagName("head")[0].appendChild(css);
		  }
		}
		// END: HtmlBox Style
	};
    //=====================================================================//
    //  METHOD: style                                                      //
    //========================== END OF METHOD ============================//
	
    //========================= START OF METHOD ===========================//
    //  METHOD: toolbar                                                    //
    //=====================================================================//
	   /**
	    * The toolbar of HtmlBox
	    * @return this
		* @access private
	    */
	var toolbar=function(){
	    var h = "";
	    if(d.about&&!in_array(d.toolbars[0],"about")){d.toolbars[0][d.toolbars[0].length]="separator";d.toolbars[0][d.toolbars[0].length]="about";}
		for(var k=0;k<d.toolbars.length;k++){
		    var toolbar = d.toolbars[k];
			h += "<tr><td class='"+d.id+"_tb' valign='middle'><table cellspacing='1' cellpadding='0'>";
			for(var i=0;i<(toolbar.length);i++){
				var img = (d.icons=="default")?d.idir+"default/"+toolbar[i]+".gif":d.idir+d.icons+"/"+toolbar[i]+".png";
	            if(undefined===toolbar[i]){continue;}
	            // START: Custom button
	            else if(typeof(toolbar[i])!='string'){
	                img = d.idir+d.icons+"/"+toolbar[i].icon;
	                var cmd = "var cmd = unescape(\""+escape( toolbar[i].command.toString() )+"\");eval(\"var fn=\"+cmd);fn()'";
	                h += "<td class='"+d.id+"_html_button' valign='middle' align='center' onclick='"+cmd+"' title='"+toolbar[i].tooltip+"'><image src='"+img+"'></td>";
			    }
	            // END: Custom button
				else if(toolbar[i]==="separator"){h += "<td valign='middle' align='center'><image src='"+d.idir+"separator.gif' style='margin-right:1px;margin-left:3px;height:13px;'></td>";}
				else if(toolbar[i]==="fontsize"){
				    h += "<td valign='middle' align='center'><select id='"+d.id+"_fontsize' onchange='global_hb[\""+d.id+"\"].cmd(\"fontsize\",this.options[this.selectedIndex].value);this.options[0].selected=\"true\";' style='font-size:12px;'><option value='' selected>- SIZE -</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option></select></td>";
			    }else if(toolbar[i]==="fontfamily"){
				    h += "<td valign='middle' align='center'><select id='"+d.id+"_fontfamily' onchange='global_hb[\""+d.id+"\"].cmd(\"fontname\",this.options[this.selectedIndex].value);this.options[0].selected=\"true\";' style='font-size:12px;'><option value='' selected>- FONT -</option><option value='arial' style='font-family:arial;'>Arial</option><option value='courier' style='font-family:courier;'>Courier</option><option value='cursive' style='font-family:cursive;'>Cursive</option><option value='georgia' style='font-family:georgia;'>Georgia</option><option value='monospace' style='font-family:monospace;'>Monospace</option><option value='tahoma' style='font-family:tahoma;'>Tahoma</option><option value='verdana' style='font-family:verdana;'>Verdana</option></select></td>";
				}else if(toolbar[i]==="formats"){
				    h += "<td valign='middle' align='center'><select id='"+d.id+"_formats' onchange='global_hb[\""+d.id+"\"].cmd(\"format\",this.options[this.selectedIndex].value);this.options[0].selected=\"true\";' style='font-size:12px;'><option value='' selected>- FORMATS -</option><option value='h1'>Heading 1</option><option value='h2'>Heading 2</option><option value='h3'>Heading 3</option><option value='h4'>Heading 4</option><option value='h5'>Heading 5</option><option value='h6'>Heading 6</option><option value='p'>Paragraph</option><option value='pindent'>First Indent</option><option value='pre'>Preformatted</option></select></td>";
				}else if(toolbar[i]==="fontcolor"){
				    h += "<td valign='middle' align='center'><select id='"+d.id+"_fontcolor' onchange='global_hb[\""+d.id+"\"].cmd(\"fontcolor\",this.options[this.selectedIndex].value);this.options[0].selected=\"true\";' style='font-size:12px;'><option value='' selected>-COLOR-</option>";
					for(var m=0;m<colors.length;m++){ if(m%2){continue;}
					   h+="<option value='"+colors[m]+"' style='background:"+colors[m]+";color:"+colors[m]+";'>"+colors[m]+"</option>";
					}
					h += "</select></td>";
				}else if(toolbar[i]==="highlight"){
				    h += "<td valign='middle' align='center'><select id='"+d.id+"_highlight' onchange='global_hb[\""+d.id+"\"].cmd(\"backcolor\",this.options[this.selectedIndex].value);this.options[0].selected=\"true\";' style='font-size:12px;'><option value='' selected>-HIGHLIGHT-</option>";
					for(var n=0;n<colors.length;n++){ if(n%2){continue;}
					   h+="<option value='"+colors[n]+"' style='background:"+colors[n]+";color:"+colors[n]+";'>"+colors[n]+"</option>";
					}
					h += "</select></td>";
				}else if(toolbar[i]==="styles"){
				    h += "<td valign='middle' align='center'><select id='"+d.id+"_styles' onchange='global_hb[\""+d.id+"\"].cmd(\"styles\",this.options[this.selectedIndex].value);this.options[0].selected=\"true\";' style='font-size:12px;' style='background:white;'><option value='' selected>-STYLES-</option>";
					for(var o=0;o<styles.length;o++){ if(o%2){continue;}
					   h+="<option value='"+o+"' style='background:white;color:red;'>"+styles[o][0]+"</option>";
					}
					h += "</select></td>";
				}else if(toolbar[i]==="syntax"){
				    h += "<td valign='middle' align='center'><select id='"+d.id+"_syntax' onchange='global_hb[\""+d.id+"\"].cmd(\"syntax\",this.options[this.selectedIndex].value);this.options[0].selected=\"true\";' style='font-size:12px;'><option value='' selected>-SYNTAX-</option>";
					for(var p=0;p<syntax.length;p++){ if(p%2){continue;}
					   h+="<option value='"+p+"' style='background:white;color:red;'>"+syntax[p][0]+"</option>";
					}
					h += "</select></td>";
				}
				// Commands
				var cmds = {"about":"About","bold":"Bold","center":"Center","code":"View Code","copy":"Copy","cut":"Cut","hr":"Insert Line","link":"Insert Link","image":"Insert Image","indent":"Indent","italic":"Italic","justify":"Justify","left":"Left","ol":"Numbered List","outdent":"Outdent","paragraph":"Insert Paragraph","paste":"Paste","quote":"Quote","redo":"Redo","removeformat":"Remove Format","right":"Right","strike":"Strikethrough","striptags":"Strip Tags","sub":"Subscript","sup":"Superscript","ul":"Bulleted List","underline":"Underline","undo":"Undo","unlink":"Remove Link"};
				if(in_array(toolbar[i],cmds)){h += "<td class='"+d.id+"_html_button' valign='middle' align='center' onclick='global_hb[\""+d.id+"\"].cmd(\""+toolbar[i]+"\")' title='"+cmds[toolbar[i]]+"'><image src='"+img+"'></td>";}
		    }
			h += "</table></td></tr>";
		}
		return h;
	};
    //=====================================================================//
    //  METHOD: toolbar                                                    //
    //========================== END OF METHOD ============================//
	
    //========================= START OF METHOD ===========================//
    //  METHOD: wrap_tags                                                  //
    //=====================================================================//
	   /**
	    * Wraps tags around the cursor position or selection
	    * @access private
	    */
	this.wrap_tags = function(start,end){
	   var sel = get_selection(); 
	   if(undefined===sel){sel="";}
	   if(undefined===end){end="";}
	   insert_text(start+sel+end,start.length,end.length);
	};
    //=====================================================================//
    //  METHOD: wrap_tags                                                  //
    //========================== END OF METHOD ============================//
	
	// -------------- END: PRIVATE METHODS ------------------//
	
	// ------------- START: PUBLIC METHODS -----------------//
    //========================= START OF METHOD ===========================//
    //  METHOD: _init                                                      //
    //=====================================================================//
	/**
	  * Draws the HtmlBox on the screen
	  * @return this
	  * @access private	  
	  */
	this._init = function(is_init){
	    if(undefined===window.global_hb){global_hb=[];}
        if(!$(this).attr("id")){$(this).attr("id","jqhb_"+global_hb.length);d.id="jqhb_"+global_hb.length;global_hb[d.id]=global_hb;}else{d.id=$(this).attr("id");}
	    if(undefined === global_hb[d.id]){global_hb[d.id]=this;}
	    // START: Timeout to allow creation of DesignMode
	    //if(undefined===is_init){setTimeout("global_hb['"+d.id+"'].init(true)",250);return false;}
		// END: Timeout to allow creation of DesignMode
		d.ta_wrap_id = d.id+"_wrap";
		var w=$(this).css("width");var h=$(this).css("height");$(this).wrap("<table id='"+d.id+"_wrap' width='"+w+"' style='height:"+h+";border:2px solid #E9EAEF;' cellspacing='0' cellpadding='0'><tr><td id='"+d.id+"_container'></td></tr></table>");
		// START: Appending toolbar
		$(this).parent().parent().parent().parent().prepend(toolbar());
		$("."+d.id+"_tb").height(d.toolbar_height);
		
		$("."+d.id+"_html_button").each(function(){
			// Set tool dimension
		    $(this).width(d.tool_width).height(d.tool_height);
		    // Set image dimension
		    $(this).find("image").each(function(){$(this).width(d.tool_image_width).height(d.tool_image_height);});
		    // Set borders
		    $(this).css("border","1px solid transparent").css("background","transparent").css("margin","1px 1px 1px 1px").css("padding","1px");
		    $(this).mouseover(function(){$(this).css("border","1px solid #BFCAFF").css("background","#EFF2FF");});
			$(this).mouseout(function(){$(this).css("border","1px solid transparent").css("background","transparent");});
			}
		);
		
		// Selectors
		$("."+d.id+"_tb").find("select").each(function(){
		    $(this).css("border","1px solid #E9EAEF").css("background","transparent").css("margin","2px 2px 3px 2px");
			if($.browser.mozilla){$(this).css("padding","0").css("position","relative").css("top","-2px");}
		    }
		);		 
		// END: Appending toolbar
		
		// START: Skin
		// default
		var hb_border = "1px solid #7F7647";
		var hb_background = "#DFDDD1";
		var tb_border = "1px solid #7F7647";
		if(d.skin=="blue"){
			hb_border = "1px solid #7E9DB9";
			hb_background = "#D7E3F2";
			tb_border = "1px solid #7E9DB9";
		}
        if(d.skin=="red"){
			hb_border = "1px solid #B91E00";
			hb_background = "#FFD7CF";
			tb_border = "1px solid #B91E00";
		}
        if(d.skin=="green"){
			hb_border = "1px solid #8DB900";
			hb_background = "#D5EF86";
			tb_border = "1px solid #8DB900";
		}
        if(d.skin=="silver"){
			hb_border = "1px solid #DDDDDD";
			hb_background = "#F4F4F3";
			tb_border = "1px solid #DDDDDD";
		}
		
		$("#"+d.id+"_wrap").css("border",hb_border);
		$("#"+d.id+"_wrap").css("background",hb_background);
		$("#"+d.id+"_container").css("background","white");
		$("."+d.id+"_tb").css("border-bottom",tb_border);
		
		//$("."+d.id+"_tb").css("background-image","url("+d.idir+"bg_blue.gif)");
		//style='background:silver;border-bottom:1px outset white'
		// END: Skin
		try {
		   var iframe=document.createElement("IFRAME");// var doc=null;
		   $(iframe).css("width",w).css("height",h).attr("id",d.id+"_html").css("border","0");
		   $(this).parent().prepend(iframe);
		   // START: Shortcuts for less code
		   d.iframe = iframe;
		   d.idoc = iframe.contentWindow.document;
		   // END: Shortcuts
		   
		   d.idoc.designMode="on";
		   // START: Insert text
		      // Is there text in the textbox?
		   var text = ($(this).val()==="")?"":$(this).val();
		   if($.browser.mozilla||$.browser.safari){
			   //if(text===""){text="&nbsp;";}
			   d.idoc.open('text/html', 'replace'); d.idoc.write(text); d.idoc.close();
		   }else{
	           if(text!==""){d.idoc.write(text);}
		   }
		   // Needed by browsers other than MSIE to become editable
		   if($.browser.msie===false){iframe.contentWindow.document.body.contentEditable = true;}
		   // END: Insert text
		   
		   // START: HtmlBox Style
		   if(d.css.indexOf("background:")===-1){d.css+="body{background:white;}";}
		   if(d.css.indexOf("background-image:")===-1){
		       d.css=d.css+"body{background:none;background-position:top right;background-repeat:no-repeat;}";
		   }
		   
		   if(d.idoc.createStyleSheet) {
		       setTimeout("global_hb['"+d.id+"'].set_text(global_hb['"+d.id+"'].get_html())",10);
		   }else {style();}
		   // END: HtmlBox Style
		   
		   // START: Adding events
		   if(iframe.contentWindow.document.attachEvent){
		       iframe.contentWindow.document.attachEvent("onkeyup", keyup);
		   }else{
			   iframe.contentWindow.document.addEventListener("keyup",keyup,false);
		   }
		   $(this).hide();
	    }catch(e){
	       alert("This rich text component is not supported by your browser.\n"+e);
		   $(this).show();
	    }
		return this;
	};
    //=====================================================================//
    //  METHOD: _init                                                      //
    //========================== END OF METHOD ============================//
	
    //========================= START OF METHOD ===========================//
    //  METHOD: cmd                                                        //
    //=====================================================================//
	   /**
	    * Executes a user-specified command
		* @since 2.0
	    * @return this
	    */
	this.cmd = function(cmd,arg1){
	   // When user clicks toolbar button make sure it always targets its respective WYSIWYG
       d.iframe.contentWindow.focus();
	   // START: Prepare commands
	   if(cmd==="paragraph"){cmd="format";arg1="p";}
	   var cmds = {"center":"justifycenter","hr":"inserthorizontalrule","justify":"justifyfull","left":"justifyleft","ol":"insertorderedlist","right":"justifyright","strike":"strikethrough","sub":"subscript","sup":"superscript","ul":"insertunorderedlist"};
	   if(in_array(cmd,cmds)){cmd=cmds[cmd];}
       // END: Prepare commands
	   if(cmd==="code"){
	       var text = this.get_html();
	       if($("#"+d.id).is(":visible")){		       
		       $("#"+d.id).hide();		   
		       $("#"+d.id+"_html").show();
			   this.set_text(text);
		   }else{
		       $("#"+d.id).show();
		       $("#"+d.id+"_html").hide();
			   this.set_text(text);
			   $("#"+d.id).focus();
		   }
		   
	   }else if(cmd==="link"){
		   d.idoc.execCommand("createlink", false, prompt("Paste Web Address URL Here:"));
	   }else if(cmd==="image"){
		   d.idoc.execCommand("insertimage", false, prompt("Paste Image URL Here:"));
	   }else if(cmd==="fontsize"){
		   d.idoc.execCommand(cmd, false,arg1);
	   }else if(cmd==="backcolor"){
	       if($.browser.msie){
		   d.idoc.execCommand("backcolor", false,arg1);
		   }else{
		   d.idoc.execCommand("hilitecolor", false,arg1);
		   }
	   }else if(cmd==="fontcolor"){
	       d.idoc.execCommand("forecolor", false,arg1);
	   }else if(cmd==="fontname"){
		   d.idoc.execCommand(cmd, false, arg1);
	   }else if(cmd==="cut"){
	       if($.browser.msie === false){
		       alert("Available in IExplore only.\nUse CTRL+X to cut text!");
		   }else{
	           d.idoc.execCommand('Cut');
	       }
	   }else if(cmd==="copy"){
	       if($.browser.msie === false){
		       alert("Available in IExplore only.\nUse CTRL+C to copy text!");
		   }else{
	           d.idoc.execCommand('Copy');
	       }
	   }else if(cmd==="paste"){
	       if($.browser.msie === false){
		       alert("Available in IExplore only.\nUse CTRL+V to paste text!");
		   }else{
	           d.idoc.execCommand('Paste');
	       }
	   }else if(cmd==="format"){
	       if(arg1==="pindent"){this.wrap_tags('<p style="text-indent:20px;">','</p>');}
		   else if(arg1!==""){d.idoc.execCommand('formatBlock', false, "<"+arg1+">");}
	   }else if(cmd==="striptags"){
	       var sel = get_selection();
		   sel = sel.replace(/(<([^>]+)>)/ig,"");
		   insert_text(sel); 
	   }else if(cmd==="quote"){
	       this.wrap_tags('<br /><div style="position:relative;top:10px;left:11px;font-size:11px;font-family:verdana;">Quote</div><div class="quote" contenteditable="true" style="border:1px inset silver;margin:10px;padding:5px;background:#EFF7FF;">','</div><br />');
	   }else if(cmd==="styles"){
	       this.wrap_tags(styles[arg1][1],styles[arg1][2]);
	   }else if(cmd==="syntax"){
	       this.wrap_tags(syntax[arg1][1],syntax[arg1][2]);
	   }else if(cmd==="bold"){
	       this.wrap_tags("<b>","</b>");
	   }else if(cmd==="undo"&&urm){
	       if(urm.can_undo()){
		       var undo = urm.undo();
			   this.set_text(undo);
			   return true;
		   }
	   }else if(cmd==="redo"&&urm){
	       if(urm.can_redo()){
		       var redo = urm.redo();
			   this.set_text(redo);
			   return true;
		   }
	   }else if(cmd==="about"){
		   var about = "<p>HtmlBox is a modern, cross-browser, interactive, open-source text area built on top of the excellent jQuery library.</p>";
		   about += "<p style='margin:2px;'><b>Official Website:</b> <a href='http://remiya.com' target='_blank'>http://remiya.com</a></p>";
		   about += "<p style='margin:2px;'><b>License:</b> MIT license</p>";
		   about += "<p style='margin:2px;'><b>Version:</b> 4.0</p>";
		   about += "<p style='margin:2px;'><b>Credits:</b></p>";
		   about += "<p style='margin:2px;padding-left:20px;'><a href='http://jquery.com/' target='_blank'>JQuery (JavaScript Framework)</a></p>";
		   about += "<p style='margin:2px;padding-left:20px;'><a href='http://www.famfamfam.com/lab/icons/silk/' target='_blank'>Silk (Icon Set)</a></p>";
		   var html = '<table cellspacing="3" cellpadding="0" width="100%" height="100%"  style="background:#D7E3F2;border:2px solid #7E9DB9;font-family:verdana;font-size:12px;">';
	       html += '<tr><td align="center" valign="middle" height="30" style="font-size:16px;"><b>About HtmlBox</b></td></tr>';
	       html += '<tr><td style="border:1px solid #7E9DB9;background:white;font-size:11px;" valign="top"><div style="overflow:auto;height:140px;" >'+about+'</div></td></tr>';
	       html += '<tr><td height="20"><table width="100%" style="font-family:verdana;font-size:10px;"><tr><td align="left">Copyright&copy;2009 Remiya Solutions<br>All right reserved!</td><td align="right"><button style="width:60px;height:24px;font-family:verdana;font-size:11px;" onclick="$(\'#'+d.id+'_about\').fadeOut(500);">Close</button></td></tr></table></td></tr>';
	       html += '</table>';
	       
	       var w = 300;var h = 200;
	       var top = ($(window).height()-200)/2+$(document).scrollTop();
	       var left = ($(window).width()-300)/2;
	       if ($("#"+d.id+"_about").length === 0){
               $("body").append("<div id='"+d.id+"_about' style='display:none;position:absolute;background:red;width:"+w+"px;height:"+h+"px;top:"+top+"px;left:"+left+"px;'>about</div>");
		       $("#"+d.id+"_about").html(html);
		   }else{
			   $("#"+d.id+"_about").css("top",top);
			   $("#"+d.id+"_about").css("left",left);
		   }
	       $("#"+d.id+"_about").focus();
	       $("#"+d.id+"_about").fadeIn(1000);
	   }else{
	       var arg = (undefined===arg1)?null:arg1;
	       d.idoc.execCommand(cmd, false, arg);
	   }
	   //Setting the changed text to textearea
	   if($("#"+d.id).is(":visible")===false){
	      $("#"+d.id).val(this.get_html());
	      // Register change
		  if(urm){urm.add(this.get_html());}
		  if(undefined!==d.change){d.change();}
	   }
	};
    //=====================================================================//
    //  METHOD: cmd                                                        //
    //========================== END OF METHOD ============================//
		
    //========================= START OF METHOD ===========================//
    //  METHOD: get_text                                                   //
    //=====================================================================//
	   /**
	    * Returns the text without tags of the HtmlBox
		* @since 1.2
	    * @return this
	    */
	this.get_text = function(){
	   // Is textbox visible?
	   if($("#"+d.id).is(":visible")){ return $("#"+d.id).val(); }
	   // Iframe is visible
	   var text;
	   if($.browser.msie){
	       text = d.iframe.contentWindow.document.body.innerText;
	   }else{
	       var html = d.iframe.contentWindow.document.body.ownerDocument.createRange();
		   html.selectNodeContents(d.iframe.contentWindow.document.body);
		   text = html;
	   }
	   return text;
	};
    //=====================================================================//
    //  METHOD: get_text                                                   //
    //========================== END OF METHOD ============================//
	
    //========================= START OF METHOD ===========================//
    //  METHOD: set_text                                                  //
    //=====================================================================//
	   /**
	    * Sets the text as a content of the HtmlBox
		* @since 1.2
	    * @return this
	    */
	this.set_text = function(txt){
	   var text = (undefined===txt)?"":txt;
	   if(text=="" && $.browser.safari){text = "&nbsp;";}// Bug in Chrome and Safari
	   // Is textarea visible? Writing to it.
	   if($("#"+d.id).is(":visible")){
	       $("#"+d.id).val(text);
	   }else{
	     // Textarea not visible. write to iframe
	     if($.browser.mozilla||$.browser.safari){
		   //if($.trim(text)===""){text="&nbsp;";}
		   d.idoc.open('text/html', 'replace'); d.idoc.write(text); d.idoc.close();
	     }else{
		   d.idoc.body.innerHTML = "";
	       if(text!==""){d.idoc.write(text);}
	     }
	     style(); // Setting the CSS style for the iframe
		 d.idoc.body.contentEditable = true;
		 
	   }
	   if(urm){urm.add(this.get_html());}
	   if(undefined!==d.change){d.change();}
	   return this;
	};
    //=====================================================================//
    //  METHOD: set_text                                                   //
    //========================== END OF METHOD ============================//
	
	//========================= START OF METHOD ===========================//
    //  METHOD: get_html                                                   //
    //=====================================================================//
	   /**
	    * Returns the (X)HTML content of the HtmlBox
	    * @return this
	    */
	this.get_html = function(){
	   var html;
	   if($("#"+d.id).is(":visible")){
	      html = $("#"+d.id).val();
	   }else{
	      html = d.iframe.contentWindow.document.body.innerHTML;
	   }
	   if(typeof getXHTML === 'function'){ return getXHTML(html); }else{return html;}
	};
    //=====================================================================//
    //  METHOD: get_html                                                   //
    //========================== END OF METHOD ============================//
    
    //========================= START OF METHOD ===========================//
    //  METHOD: change                                                     //
    //=====================================================================//
       /**
        * Specifies a function to be executed on text change in the HtmlBox
        */
	this.change=function(fn){d.change=fn;return this;};
    //=====================================================================//
    //  METHOD: change                                                     //
    //========================== END OF METHOD ============================//
	
    //========================= START OF METHOD ===========================//
    //  METHOD: remove                                                     //
    //=====================================================================//
       /**
        * Removes the HtmlBox instance from the DOM and the globalspace
        */
	this.remove = function(){
		global_hb[d.id]=undefined;
	    $("#"+d.id+"_wrap").remove();
	    if ($("#"+d.id+"_about").length === 0){$("#"+d.id+"_about").remove();}
	};
    //=====================================================================//
    //  METHOD: remove                                                     //
    //========================== END OF METHOD ============================//
	
    //========================= START OF METHOD ===========================//
    //  METHOD: post                                                       //
    //=====================================================================//
	   /**
	    * Posts the form data to the specified URL using Ajax
        * @param String the URL to post to
	    * @param String the text to be posted, default the (X)HTML text
	    * @return this;
	    */
	this.post=function(url,data){
	    if(undefined===data){data=this.get_html();} data=(d.id+"="+data);
		$.ajax({type: "POST", data: data,url: url,dataType: "html",error:d.error,success:d.success});
	};
    //=====================================================================//
    //  METHOD: post                                                       //
    //========================== END OF METHOD ============================//
	
    //========================= START OF METHOD ===========================//
    //  METHOD: get                                                        //
    //=====================================================================//
	   /**
	    * Gets the form data to the specified URL using Ajax
        * @param String the URL to get to
	    * @param String the text to be posted, default the (X)HTML text
	    * @return this;
	    */
	this.get=function(url,data){
	    if(undefined===data){data=this.get_html();} data=(d.id+"="+data);
		$.ajax({type: "GET", data: data,url: url,dataType: "html",error:d.error,success:d.success});
	};
    //=====================================================================//
    //  METHOD: get                                                        //
    //========================== END OF METHOD ============================//
	
    //========================= START OF METHOD ===========================//
    //  METHOD: success                                                    //
    //=====================================================================//
       /**
        * Specifies what is to be executed on successful Ajax POST or GET
        */
	this.success=function(fn){d.success=fn;return this;};
    //=====================================================================//
    //  METHOD: success                                                    //
    //========================== END OF METHOD ============================//

    //========================= START OF METHOD ===========================//
    //  METHOD: error                                                      //
    //=====================================================================//
       /**
        * Specifies what is to be executed on error Ajax POST or GET
		* @return {HtmlBox} the instance of this HtmlBox
        */
	this.error=function(fn){d.error=fn;return this;};
    //=====================================================================//
    //  METHOD: error                                                      //
    //========================== END OF METHOD ============================//

	// -------------- END: PUBLIC METHODS ------------------//
	this._init(false);
	return this;
};
})(jQuery);
</script>	
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/htmlbox.colors.js" type="text/javascript"></script>
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/htmlbox.styles.js" type="text/javascript"></script>
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/htmlbox.syntax.js" type="text/javascript"></script>
	<script language="Javascript" src="<?php  echo base_url();   ?>js/htmlbox/xhtml.js" type="text/javascript"></script>


</head>

<html>

<body>
	
	<div  id='header' class='container '  >
		<div class='coordinates left_panel'>
			<style>
			#form0 input{
			width:30px;	
			display:none;
			}
			</style>
			<form id='form0'>
				<input name="x" id="x" type="" value="">
				<input name="y" id="y" type="" value="">
				<input name="margin_left_of_center" id="margin_left_of_center" type="" value="">
			</form>
		</div>
		<div class='right_panel'  >
				<div  class='edit-panel float_left' >
					<span  id='edit_mode' on='1'>preview</span>
				</div>
				<div  id='myaccount_container' class='float_left '  >
			
						<div id="topnav" class="topnav clearfix">
							
						 	<a  href="" class="float_right myaccount" onfocus="this.blur()">
						 		<span>My SportCard</span>
						 	</a>  
						 		
						 	<div id='greeting' class='float_right ' >Welcome James.
						 	</div>
						
						</div>

						<div  class=' clearfix ' >
								<fieldset id="account_menu"    class='float_right '   >
									<ul>
										<li><a id='edit_profile_menu_item'>Edit Profile</a></li>
										<li><a id='settings_menu_item'>Settings</a></li>
										<li><a id='logout'>Log Out</a></li>
									</ul>
								</fieldset>						
							
						</div>
		
						
				</div> 
		</div>
	</div>
	
	<div  id='main-box' class='container '>
	
				<div  id='head-line-box' class="transparent rounded draggable box" >
					<div class='window-controls-container top-right-rounded'>
						<div class="handle icon-boxes top-right-rounded"></div>
					</div>
					<div  class='insides' >
					</div>
					<div  id='full_name_readonly'>
					</div>
				</div>
	
				<div  id='settings-box' class="draggable box"   >
					<div  class='window-controls-container'>
						<div class="handle icon-boxes">
						</div>	
					</div>
					<div>
						<div>Settings
						</div>
						<div>
							<ul>
								<li activate='account_section' class='account_tab settings_tabs' >
									Account
								</li>
								<li activate='password_section'  class='password_tab  settings_tabs' >
									Password
								</li>							
							</ul>
						</div>
						<table  id='account_section' class='settings_sections '>
							<tr>
								<td>
									<div  class='input-label ' >url
									</div>
									<div>
										<input  class='account_section_inputs '  id='profile_url' name="profile_url" type="" value="">
									</div>
								</td>
							</tr>	
							<tr>
								<td>
									<div  class='input-label ' >email
									</div>
									<div>
										<input   class='account_section_inputs '  id='email' name="email"  type="" value="">
									</div>																				
								</td>
							</tr>
							<tr>
								<td>
									
									<div>
										<input  id='account_section_submit' type="submit" value="submit">
									</div>																				
								</td>
							</tr>																																																										
						</table>
	
						<table  id='password_section'  class='settings_sections ' >
							<tr>
								<td>
									<div  class='input-label ' >Current Password
									</div>
									<div>
										<input id='current_password' name="current_password" type="" value="">
									</div>
								</td>
							</tr>	
							<tr>
								<td>
									<div  class='input-label ' >New Password
									</div>
									<div>
										<input  id='user_password' name="password"  type="password" value="">
									</div>																				
								</td>
							</tr>						
							
							<tr>
								<td>
									<div  class='input-label ' >Confirm Password
									</div>
									<div>
										<input  id='confirm_password' name="confirm_password"  type="password" value="">
									</div>																				
								</td>
							</tr>
							<tr>
								<td>
									
									<div>
										<input  id='password_section_submit' type="submit" value="submit">
									</div>																				
								</td>
							</tr>																																																										
						</table>	
					</div>
	
				</div>
				
				<div  id='profile_box' class="draggable box" >
					<div  class='window-controls-container'>
						<div class="handle icon-boxes">
						</div>
						<div  class='close-window icon-boxes' >
						</div>					
					</div>
					<div  id='panel-tabs_container'>
						<ul>
					
							<li  id='panel-tab-1'>Color and Fonts
							</li>
							<li  id='panel-tab-2'>Background
							</li>
							<li  id='panel-tab-3'>Photos
							</li>
							<li  id='panel-tab-4'>Videos
							</li>	
							<li  id='panel-tab-5'>Bio
							</li>	
						</ul>	
					</div>
					<div  class='insides' >
								<ul  id='panels_ul'>
										<li id='panel-1'  class='panels ' >
											<div  class='div-panel ' >
												<table>
													<tr>
														<td>Name
														</td>
														<td><input  name='full_name' id="full_name" type="" value="">
														</td>
													</tr>
		<!--											
													<tr>
														<td>Background
														</td>
		
														<td>
															<select  id='background_color' name='background_color'>
																
															<?php 
															
															$colors = array(
																'red',
																'blue',
																'orange',
																'yellow',
																'green',
																'white',
															);
															
															foreach( $colors  as  $key => $color ){ ?>	
							
																	<option value='<?php  echo $color   ?>'><?php  echo $color   ?></option>
															
															<?php } ?>
															
															</select>
														</td>
													</tr>
													-->
													<tr>
														<td>Font Color
														</td>
														<td>
															<select  id='font_color' name='font_color'>
																
															<?php 
															
															$colors = array(
																'black',
																'red',
																'blue',
																'orange',
																'yellow',
																'green',
																'white',
															);
															
															foreach( $colors  as  $key => $color ){ ?>	
							
																	<option value='<?php  echo $color   ?>'><?php  echo $color   ?></option>
															
															<?php } ?>
															
															</select>
														</td>
													</tr>		
													
													<tr>
														<td>Font Size
														</td>
														<td>
															<select   id='font_size' name='font_size'>
																
															<?php 
															
		
															
																		for( $size = 5;  $size <= 225;  $size++ ){ ?>	
										
																				<option value='<?php  echo $size   ?>px'><?php  echo $size   ?>px</option>
																		
																		<?php } ?>
															
															</select>
														</td>
													</tr>			
													
													<tr>
														<td>Transparency
														</td>
														<td>
															<select   id='transparency' name='transparency'>
																
															<?php for( $transparency_setting = 0;  $transparency_setting <= 9;  $transparency_setting++ ){ ?>	
										
																				<option value='<?php  echo $transparency_setting   ?>'><?php  echo $transparency_setting   ?></option>
																		
															<?php } ?>
															
															</select>
														</td>
													</tr>														
													
													<tr>
														<td>Font
														</td>
														<td>
															<style>
															#profile_box ul#panels_ul li.panels table ul{
																height:100px;
																overflow-y:scroll;
																overflow-x:hidden;
															}
															#profile_box ul#panels_ul li.panels table ul#fonts_ul li.fonts_li{
																background:white;	
																border-bottom:1px solid gray;
																height:45px;
																font-size:28px;
															}
															
															</style>
															<ul  id='fonts_ul'>
																<?php foreach($data['fonts'] as $font ){?>
																	
																	<li  class='fonts_li ' font_name='<?php echo $font->name    ?>'><?php  echo $font->name   ?></li>
																
																<?php }?>
															</ul>
														</td>
													</tr>																										
												</table>
											</div>
										</li>
										<li id='panel-2'   class='panels ' >
											<div class='div-panel '>
											
												<table>
													<tr>
	
														<td ><!--
															<div  id='add-to' image_id='0' image_type_id='0' li_index='-1' class='upload_button'>upload
															</div>-->
															
															
														<div id="upload_button_backgrounds"  >		
															<noscript>			
																<p>Please enable JavaScript to use file uploader.</p>
																<!-- or put a simple form for upload here -->
															</noscript>         
														</div>
															
															
														</td>													
													</tr>
	
													<tr>
														<td>
	
	
															<div  id='backgrounds-div' class=' jcarousel-skin-tango'>
																<ul class='thumbs-ul'   >
																	
																<?php if( isset($data['users']['backgrounds']['images']) ){?>
																	
																	<?php foreach( $data['users']['backgrounds']['images']  as $image_id){?>
	
																		<li   style='background:url(<?php echo base_url()     ?>uploads/<?php echo $data['user_id']    ?>/<?php echo $image_id    ?>/image_thumb.jpg)'  class='hovering ' image_id='<?php  echo $image_id   ?>'  image_type_id='0'  >
																			<div  class='small_icons_panel transparent' >
																				<div  class='delete ' >[X]
																				</div>
																				<div  class='update-image backgrounds_update_button' >[<?php echo $image_id     ?>]
																				</div>
																				<div  class='swap ' >[C]
																				</div>																																							
																			</div>
																			<div  class='inside_li images_preview' >
																			</div>
																		</li>
																	
																	<?php } ?>
	
															
																<?php } ?>
																	
																	
																</ul>															
															</div>
	
														</td>
													</tr>												
												</table>
	
											</div>							
										</li>
										<li  id='panel-3'    class='panels ' >
											<div class='div-panel '>
											
												<table>
													<tr>
	
														<td >
	<!--														
															<div image_id='0' image_type_id='1'  li_index='-1' class='upload_button'>upload
															</div>
															-->
														<div id="upload_button_pictures"  >		
															<noscript>			
																<p>Please enable JavaScript to use file uploader.</p>
																<!-- or put a simple form for upload here -->
															</noscript>         
														</div>
														</td>													
													</tr>
	
													<tr>
														<td>
															<div  id='pictures-div' class='mycarousel jcarousel-skin-tango'>
																<ul class='thumbs-ul'   >
	
	
	<?php if(  isset($data['users']['pictures']['images'])  ){?>
	
																	<?php foreach( $data['users']['pictures']['images']  as $image_id){?>
	
																		<li   style='background:url(<?php echo base_url()     ?>uploads/<?php echo $data['users']['pictures']['user_id']    ?>/<?php echo $image_id    ?>/image_thumb.jpg)'  class='hovering ' image_id='<?php  echo $image_id   ?>'  image_type_id='1'  >
																			<div  class='small_icons_panel transparent' >
																				<div  class='delete ' >[X]
																				</div>
																				<div  class='update-image  pictures_update_button' >[E]
																				</div>																																				
																			</div>
																			<div  class='inside_li images_preview' >
																			</div>																		
																		</li>
																	
																	<?php } ?>
	
	<?php } ?>
	
	
																	
																	
																	
																	
																</ul>															
															</div>
	
														</td>
													</tr>												
												</table>
	
											</div>		
										</li>
										<li   id='panel-4'    class='panels ' >
											<div class='div-panel '>
											
												<table>
													<tr>
	
														<td >
															
															<div   style='height:30px'  >
																
																		<style>
																			li#panel-4 input[type=text]{
																				width: 299px;
																				margin-right: 5px;
																			}														
																		</style>
																		
																		
																		<form 
																			id='form_video' 
																			target='results' 
																			enctype='multipart/form-data' 	
																			method='POST'  
																			action='<?php echo base_url();    ?>index.php/main/update_video'
																			>
																			<input name="video_url" id="video_url" type="text" value=""><input name="video_submit" id="video_submit" type="button" value="submit">	
																			<input name="image_id"  type="hidden" value="0">
																			<input name="li_index"  type="hidden" value="-1">
																			
																		</form>																
																
															</div>
															
															
	
															
	
														</td>													
													</tr>
	
													<tr>
														<td>
															<div  id='videos-div' class='mycarousel jcarousel-skin-tango'>
																<ul class='thumbs-ul'   >
																	
	<?php if( isset($data['users']['videos']['images']) ){?>
	
																	<?php foreach( $data['users']['videos']['images']  as $image_id){?>
		
																			<li   style='background:url(<?php echo base_url()     ?>uploads/<?php echo $data['users']['videos']['user_id']    ?>/<?php echo $image_id    ?>/image_thumb.jpg)'  class='hovering ' image_id='<?php  echo $image_id   ?>'  image_type_id='2'  >
																				<div  class='small_icons_panel transparent' >
																					<div  class='delete ' >[X]
																					</div>
																					<div  class='update-video_url '  >[E]
																					</div>																																					
																				</div>
																			<div  class='inside_li videos_preview' >
																			</div>																			
																			</li>
																			
																	<?php };?>
	
	<?php } ?>
																	
	
																	
																	
																	
																	
																</ul>															
															</div>
	
														</td>
													</tr>												
												</table>
	
											</div>	
										</li>
	
										<li  id='panel-5'    class='panels ' >
										
											<div class='div-panel '>
											
													<div  class='large_header ' >Edit you Bio
													</div>
	
													
													<div  class='middle ' >
														<div   class='halves '  >
													
															<table>
																<tr>
																	<td colspan=2>
																		General Info
																	</td>
																</tr>		
																<tr>
																	<td>
																		<div  class='input-label ' >First Name
																		</div>
																		<div>
																			<input  class='bio_inputs '  id='first_name' name="first_name" type="" value="">
																		</div>
																	</td>
																	<td>
																		<div  class='input-label ' >Last Name
																		</div>
																		<div>
																			<input   class='bio_inputs '  id='last_name' name="last_name"  type="" value="">
																		</div>																				
																	</td>
																</tr>
																<tr>
																	<td>
																		<div  class='input-label ' >Position or Title
																		</div>
																		<div>
																			<input   class='bio_inputs '  id='position' name="position" type="" value="">
																		</div>
																	</td>
																	<td>
																		<div  class='input-label ' >School, Team, or Organization
																		</div>
																		<div>
																			<input   class='bio_inputs '  id='organization' name="organization" type="" value="">
																		</div>																				
																	</td>
																</tr>
																<tr>
																	<td>
																		<div  class='input-label ' >Hometown or Location
																		</div>
																		<div>
																			<input   class='bio_inputs '  id='location' name="location" type="" value="">
																		</div>																		
																	</td>
																	<td>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div  class='input-label ' >sports
																		</div>	
																		<select   class='bio_inputs '  id='sports' name='sports'>
																			<option>Football</option>
																			<option>Baseball</option>
																			<option>Soccer</option>
																		</select>																																	
																	</td>
																	<td>
	
																	</td>
																</tr>
																<tr>
																	<td>
																	</td>
																	<td>
																	</td>
																</tr>																																																												
															</table>
														</div>
														<div    class='halves ' >
															
																	<style>
																	#wysiwyg_div{
																	width:400px;
																	height: 580px;
																	margin:0px 0px 0px 0px;
																	padding:10px 0px 0px 0px;
																	}
																	.save{
																	background-image: url(<?php echo base_url()    ?>images/disk_save.png);
																	background-position: 3px 3px;
																	background-repeat: no-repeat;	
																	height: 22px;
																	width: 22px;
																	cursor:pointer;
																	}
																	#save_text{
																	color:gray;
																	margin:5px 0px 0px 5px;	
																	font-weight:bold;
																	cursor:pointer;
																	}
																	.loading{
																	background-image: url(<?php echo base_url()    ?>images/ajax-loader.gif);
																	background-position: 5px 4px;
																	background-repeat: no-repeat;
																	height: 22px;
																	width: 22px;	
																	}
																	</style>
																	
																		<div>
																					<div  class='save float_left'  title='Save'>
																					</div>
																					<div  id='save_text' class='float_left' >Save
																					</div>
																		</div>
																	
																		<div id='wysiwyg_div' class='clearfix ' >
																				<textarea  name='bio' class='bio_inputs clearfix' id='wysiwyg_text_area'><?php echo ( isset( $data['users'][0]['bio'] ) ? $data['users'][0]['bio']:'' )    ?></textarea>
																		</div>
	
															
														</div>
													</div>
											</div>		
										</li>																	
								</ul>
	
								<div  id='preview_box'>
									<div  id='preview_box_inside'>
									</div>
								</div>
					</div>
				</div>
				
	</div>
		
	<iframe  
		id="results"   
		name="results"
		style='background:white;border:0px solid gray;width:0px;height:0px'  
		border="1" 
		frameborder="1" 
		scrolling="auto" 
		align="center" 
		hspace="0" 
		vspace="">
	</iframe>
	

</body>
</html>

<script type="text/javascript" language="Javascript">
	
$(document).ready(function() { 
			account_menu();
			settings_box();
			get_stored_configurations();
			store_custom_configuration();
			activate_fonts_for_selection();
			thumbnail_controls();
			bind_events();
			
			$('#profile_box #panel-tabs_container li#panel-tab-5').click()

});

function account_menu(){

            $(".myaccount").click(function(e) {          
							e.preventDefault();
			        $("fieldset#account_menu").toggle();
							$(".myaccount").toggleClass("menu-open");
							
							$('.box').toggleClass("push-z-index-back");				
            });

						$("fieldset#account_menu").mouseup(function() {
							return false
						});

						$("#account_menu a").css({cursor:'pointer'}).click(function(e) {          
							
							e.preventDefault();
							
							$('.box').hide();
							
							if( $(this).attr('id') == 'edit_profile_menu_item'){
							
								$('#head-line-box, #profile_box').show();

							}else if($(this).attr('id') == 'settings_menu_item'){
								
								$('#settings-box').show();
							
							}else if($(this).attr('id') == 'logout'){

								document.location.href='<?php echo  base_url(); ?>index.php/home/index?logout=1';									
																
							};
						
							$(document).mouseup(function(e) {
								if($(e.target).parent("a.myaccount").length==0) {
									$(".myaccount").removeClass("menu-open");
									$("fieldset#account_menu").hide();
								}
								$('.box').removeClass('push-z-index-back');
							});	
														
							
							$(document).mouseup();
							
						});
						
							
}

function settings_box(){
	
	
								$('#settings-box').css({
									'position':'absolute',
									'left':($(window).width() / 2) -430 ,
									'top':'250px'
								})
		
							
								$('#password_section').hide();
								
								$('.settings_tabs').click(function(event) {
											
										$('.settings_sections').hide();
										$('#'+$(this).attr('activate')).show();
								
								});	
								
								$('#account_section_submit').css({cursor:'pointer'}).click(function(event) {
				
										$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
										table:'users',
										id:<?php echo $data['user_id']    ?>,
										set_what:$('.account_section_inputs').serialize()
										},function(data) {
				
													alert(data);
											
										});	
				
					
								})
				
																
							
								$('#password_section_submit').css({cursor:'pointer'}).click(function(event) {

									$.post("<?php echo base_url(). 'index.php/main/confirm_existing_password';    ?>",{
											table:'users',
											id:<?php echo $data['user_id']    ?>,
											current_password:$('#current_password').val()
											},function(validated) {
												

												if( validated == 1 ){
												
																if( $('#current_password').val() == $('#user_password').val() ){
																
																			$.post("<?php echo base_url(). 'index.php/main/update_password';    ?>",{
																					user_password:$('#user_password').val()
																					},function(data) {
																					
																							alert(data);
																					
																					});	
																
																}else{
																
																	alert('password does not match');
																
																};			
																										
												}else{
													
													alert('Your password does not match what was initially set.');
													
												};
											
											});	
								})	
	
}

function get_stored_configurations(){
	
			$('#first_name').val('<?php echo ( isset( $data['users'][0]['first_name'] ) ? $data['users'][0]['first_name']:'' )    ?>');
			$('#last_name').val('<?php echo ( isset( $data['users'][0]['last_name'] ) ? $data['users'][0]['last_name']:'' )    ?>');
			$('#position').val('<?php echo ( isset( $data['users'][0]['position'] ) ? $data['users'][0]['position']:'' )    ?>');
			$('#organization').val('<?php echo ( isset( $data['users'][0]['organization'] ) ? $data['users'][0]['organization']:'' )    ?>');
			$('#location').val('<?php echo ( isset( $data['users'][0]['location'] ) ? $data['users'][0]['location']:'' )    ?>');
			$('#sports').val('<?php echo ( isset( $data['users'][0]['sports'] ) ? $data['users'][0]['sports']:'' )    ?>');
			$('#profile_url').val('<?php echo ( isset( $data['users'][0]['profile_url'] ) ? $data['users'][0]['profile_url']:'' )    ?>');
			$('#email').val('<?php echo ( isset( $data['users'][0]['email'] ) ? $data['users'][0]['email']:'' )    ?>');


			$('#head-line-box').css({
				'position':'absolute',
				'left':($(window).width() / 2),
				'top':'<?php echo ( isset( $data['users'][0]['y']) ? $data['users'][0]['y']:'0' ) ?>px',
				'margin-left':(0-(<?php echo ( isset( $data['users'][0]['margin_left_of_center']) ? $data['users'][0]['margin_left_of_center']:'0' ) ?>))+'px',
			})


			var full_name = '<?php echo ( isset( $data['users'][0]['full_name'] ) ? $data['users'][0]['full_name']:'' )    ?>';
			
			$('#full_name').val( full_name );
			
			
			Cufon.replace('#full_name_readonly',{ fontFamily: '<?php echo ( isset( $data['users'][0]['font_name'] ) ? $data['users'][0]['font_name']:'' )    ?>', hover: true });
				
			$('#full_name_readonly').attr('font_name', '<?php echo ( isset( $data['users'][0]['font_name'] ) ? $data['users'][0]['font_name']:'' )    ?>');
			
			$('#full_name_readonly').html( full_name );
			
		
			$('#full_name_readonly').css({color:'<?php echo ( isset( $data['users'][0]['font_color']) ? $data['users'][0]['font_color']:'black' )    ?>'});
			$('#font_color').val('<?php echo ( isset( $data['users'][0]['font_color']) ? $data['users'][0]['font_color']:'black' )    ?>');			
			
			$('#full_name_readonly').css({'font-size':'<?php echo ( isset( $data['users'][0]['font_size']) ? $data['users'][0]['font_size']:'11px' )    ?>'});			
			$('#font_size').val('<?php echo ( isset( $data['users'][0]['font_size']) ? $data['users'][0]['font_size']:'11px' )    ?>');


			<?php if( isset($data['users'][0]['edit_mode']) && $data['users'][0]['edit_mode'] == 0){?>
									$('#edit_mode').text('edit').attr('on', 0);	
									edit_mode_off();									
			<?php }else{?>
									$('#edit_mode').text('preview').attr('on', 1);
									edit_mode_on();
			<?php } ?>
			
			
			
			$('#transparency').val('<?php echo ( isset( $data['users'][0]['transparency']) ? $data['users'][0]['transparency']:'6' )    ?>');			
		
			<?php if( $this->tools->browserIsExplorer() ){?>
			
						var hex = Math.floor(0.1 * <?php  echo ( isset( $data['users'][0]['transparency']) ? $data['users'][0]['transparency']:'6' )    ?> * 255).toString(16);
			
						$( '#head-line-box' ).css({
							'zoom':'1',
							'-ms-filter':'progid:DXImageTransform.Microsoft.gradient(startColorstr=#'+hex+'000000, endColorstr=#'+hex+'000000)',
							'filter': 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#'+hex+'000000, endColorstr=#'+hex+'000000)'
						})			
						

			
			<?php }else{ ?>

				$( '#head-line-box' ).css({
								'background-color':'rgba(0, 0, 0, 0.'+ <?php  echo ( isset( $data['users'][0]['transparency']) ? $data['users'][0]['transparency']:'6' )    ?> +')'
				})	
			
			<?php }?>		


}	

function store_custom_configuration(){

			$('li.fonts_li').css({cursor:'pointer'}).click(function(event) {
				
				Cufon.replace('#full_name_readonly',{ fontFamily: $(this).attr('font_name'), hover: true });
				
				$('#full_name_readonly').attr('font_name', $(this).attr('font_name'));
				
				var font_name_serialized = "font_name=" + $(this).attr('font_name');
				
				$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
				table:'users',
				id:<?php echo $data['user_id']    ?>,
				set_what:font_name_serialized
				},function(data) {
				
					$('#y').val(data);
					
				});	
				
			});	

	
			$('#full_name').keyup(function(event) {
				$('#full_name_readonly').html( $(this).val() );	
				Cufon.replace('#full_name_readonly',{ fontFamily: $('#full_name_readonly').attr('font_name'), hover: true });				
			}).blur(function(event) {
						store( $(this) );		
			});	
			
//			$('#background_color').change(function(event) {
//						$('body').css({background:$(this).val()});
//						store( $(this) );
//			});	
			
			$('#font_color').change(function(event) {
						$('#full_name_readonly').css({color:$(this).val()});
						Cufon.replace('#full_name_readonly',{ fontFamily: $('#full_name_readonly').attr('font_name'), hover: true });
						store( $(this) );
			});				



			$('#transparency').change(function(event) {
			
					<?php if( $this->tools->browserIsExplorer() ){?>
					
								var hex = Math.floor(0.1 * $(this).val() * 255).toString(16);
					
								$( '#head-line-box' ).css({
									'zoom':'1',
									'-ms-filter':'progid:DXImageTransform.Microsoft.gradient(startColorstr=#'+hex+'000000, endColorstr=#'+hex+'000000)',
									'filter': 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#'+hex+'000000, endColorstr=#'+hex+'000000)'
								})			
					
					<?php }else{ ?>

						$( '#head-line-box' ).css({
										'background-color':'rgba(0, 0, 0, 0.'+ $(this).val() +')'
						})	
					
					<?php }?>						

					var transparency_serialized = "transparency=" + $(this).val();
					
					$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
					table:'users',
					id:<?php echo $data['user_id']    ?>,
					set_what:transparency_serialized
					},function(data) {
					
						$('#y').val(data);
						
					});	
			});				

			$('#font_size').change(function(event) {
			
						$('#full_name_readonly').css({'font-size':$(this).val()});
						
						Cufon.replace('#full_name_readonly',{ fontFamily: $('#full_name_readonly').attr('font_name'), hover: true });

						store( $(this) );	
			});		
			
			$( "#head-line-box" ).mouseup(function(){
						store_position( $(this) );
			});	
			
			$('#edit_mode').css({cursor:'pointer'}).click(function(event) {

					if( $(this).attr('on') == 1){
							edit_mode_off();	
							$(this).text('edit').attr('on', 0);
			
					}else{
							$(this).text('preview').attr('on', 1);			
							edit_mode_on();		
					};
					
					var edit_mode_serialized = "edit_mode=" + $(this).attr('on');
					
					$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
					table:'users',
					id:<?php echo $data['user_id']    ?>,
					set_what:edit_mode_serialized
					},function(data) {
					
						$('#y').val(data);
						
					});	

			});	

}

function bind_events(){



			$('#profile_box').css({
				'position':'absolute',
				'left':($(window).width() / 2),
				'top':'250px',
				'margin-left':'-430px',
			})

	
			$( ".draggable" ).draggable({ 
					handle: "div.handle"
			})
			
			$('#head-line-box .handle')
			.mouseout(function(event) {
				
									$('#profile_box').show();
									
			}).mousedown(function() {
				
						$('#profile_box').hide();
				
			  		$('#head-line-box .handle').unbind('mouseout');
			  		
			});
			

			$('.close-window').click(function(event) {
				$(this).parent().parent().hide();
			});	

			$('#profile_box #panel-tabs_container li').css({cursor:'pointer'}).click(function(event) {
						$('#profile_box ul#panels_ul li.panels').hide();
						$('#profile_box ul#panels_ul li.panels:eq('+$(this).index()+')').show()
						$(this).parent().children('li').css({background:'lightblue'});
						$(this).css({background:'white'});
						
						if( $(this).attr('id') == 'panel-tab-5' ||
								$(this).attr('id') == 'panel-tab-1' 
						){
							$('#preview_box').hide()
						}else{
							$('#preview_box').show()
						};
						
			});	
			
			
			<?php if( $this->tools->browserIsExplorer() ){?>
			/*
						var hex = Math.floor(0.3 * 255).toString(16);
			
						$( "#head-line-box" ).css({
							'zoom':'1',
							'-ms-filter':'progid:DXImageTransform.Microsoft.gradient(startColorstr=#'+hex+'000000, endColorstr=#'+hex+'000000)',
							'filter': 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#'+hex+'000000, endColorstr=#'+hex+'000000)'
						})
			*/
			<?php } ?>
			
			$( "#head-line-box" ).bind_mouse_events();	
			
			
			
			
			
				var mbox = $("#wysiwyg_text_area").css({
						height:"380px",
						width:"100%"
						}).htmlbox({
						toolbars:[
 						[
						"code","separator",
						"undo","redo","separator",
						"bold","italic","underline","fontsize","separator",
						"justify","left","center","right"
						]
					],
					skin:"gray"
					});
				

				$('.save, #save_text').click(function(event) {
					
						$('#wysiwyg_text_area').val(mbox.get_html());

						var save_dom = $('.save'); 
					
						save_dom.removeClass('save').addClass('loading');
					
	
						$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
						table:'users',
						id:<?php echo $data['user_id']    ?>,
						set_what:$('.bio_inputs').serialize()
						},function(data) {

									setTimeout(function() { 											
									save_dom.removeClass('loading').addClass('save');
																}, 300);	
								
							
						});	

	
				})	
					

}

function activate_fonts_for_selection(){

		
		<?php foreach($data['fonts'] as $font ){
			
				echo $font->code;  
				
		?>
		
				Cufon.replace('li[font_name="<?php    echo $font->name;     ?>"]',{ fontFamily: '<?php  echo $font->name;   ?>', hover: true });
		
		<?php } ?>

	
}


/********************
*
* LIBRARY OF FUNCTIONS
*	
*********************/

$.fn.bind_mouse_events = function(){
	
			$(this)
			.mousemove(function(){
				
						var coord = $(this).offset();
						$('#x').val( coord.left.toFixed(0) );
						$('#y').val( coord.top.toFixed(0));
	
						$('#windowSize').val( $(window).width()  );
						
						$('#margin_left_of_center').val( ($(window).width()/2) -  (coord.left.toFixed(0)) ); 						
						
		 	})
	
};

function edit_mode_on(){

						$('#profile_box').show();
						$('#head-line-box .window-controls-container, .coordinates')
						.css({'visibility':'visible'});
						
}

function edit_mode_off(){

							$('#profile_box').hide();
							$('#head-line-box .window-controls-container, .coordinates')
							.css({'visibility':'hidden'});
	
						
}

function store( dom_element ){
	
							$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
							table:'users',
							id:<?php echo $data['user_id']    ?>,
							set_what:dom_element.serialize()
							},function(data) {
							
								$('#y').val(data);
								
							});	
	
}

function store_position( dom_element ){
	
						var coord = dom_element.offset();
						$('#x').val( coord.left.toFixed(0) );
						$('#y').val( coord.top.toFixed(0) );
						$('#margin_left_of_center').val( ($(window).width()/2) -  (coord.left.toFixed(0)) ); 						

						$.post("<?php echo base_url(). 'index.php/main/update';    ?>",{
							table:'users',
							id:<?php echo $data['user_id']    ?>,
							set_what:$('#form0').serialize()
							},function(data) {
							
								$('#y').val(data);

								if( $('#edit_mode').attr('on') == 1){
										$('#profile_box').show();
								
								};

								
//								$('#head-line-box .handle').mouseout(function(event) {
//
//								//		$('#profile_box').show();
//														
//								})
		
						});		
	
	
}

function mycarousel_initCallback_1(carousel, state) {
		    if (state != 'init')
		    return;
				window.myCarousel_1 = carousel;
};
function mycarousel_initCallback_2(carousel, state) {
		    if (state != 'init')
		    return;
				window.myCarousel_2 = carousel;
};
function mycarousel_initCallback_3(carousel, state) {
		    if (state != 'init')
		    return;
				window.myCarousel_3 = carousel;
};


function thumbnail_controls(){

						            window.uploader_backgrounds = new qq.FileUploader({
						                element: document.getElementById('upload_button_backgrounds'),
						                action: '<?php echo base_url();    ?>index.php/main/upload',
						                params: {
												        image_id: 0,
												        image_type_id: 0,
												        li_index: -1
												    },
						                onComplete: function(id, fileName, responseJSON){
															
						                	$('#results').attr('src','<?php echo base_url()    ?>index.php/main/resize?li_index=' + responseJSON['li_index']+ '&image_id='  + responseJSON['image_id'] +  '&image_type_id=' + responseJSON['image_type_id'] +  '&random='+ Math.floor(Math.random()*9999));
						                	
						                },
						                debug: true
						            }); 
						            
						            window.uploader_pictures = new qq.FileUploader({
						                element: document.getElementById('upload_button_pictures'),
						                action: '<?php echo base_url();    ?>index.php/main/upload',
						                params: {
												        image_id: 0,
												        image_type_id: 1,
												        li_index: -1
												    },
						                onComplete: function(id, fileName, responseJSON){
															//alert(JSON.stringify(responseJSON));
						                	$('#results').attr('src','<?php echo base_url()    ?>index.php/main/resize?li_index=' + responseJSON['li_index']+ '&image_id='  + responseJSON['image_id'] +  '&image_type_id=' + responseJSON['image_type_id'] +  '&random='+ Math.floor(Math.random()*9999));
						                	
						                },
						                debug: true
						            }); 
						            
						            
//						            
//												$('.update-image.backgrounds_update_button').live("click", function(){
//													
//														window.uploader_backgrounds.setParams({
//												        image_id:  $(this).parent().parent().attr('image_id') ,
//												        image_type_id: $(this).parent().parent().attr('image_type_id') ,
//												        li_index: $(this).parent().parent().index()
//														});
//														$('#btnUpload').click();// REFER TO fileuploader.js line 864. added  id='btnUpload'
//														
//												})
//												
												
												$('.thumbs-ul li .images_preview.inside_li').live("click", function(){					             

															
															$('#preview_box_inside').html('').css({
														    'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/'  + $(this).parent().attr('image_id') + '/image.jpg?random=<?php echo   rand(5,124344523)   ?>)',
														    'background-position': 'center 0px',
														    'background-repeat': 'no-repeat'});
												});	
												
												$('.thumbs-ul li .videos_preview.inside_li').live("click", function(){					             


													$.post("<?php echo base_url(). 'index.php/main/get_video_iframe';    ?>",{
													image_id:$(this).parent().attr('image_id')
													},function(data) {
														
																$('#preview_box_inside').html(data);
														
													});																


															 
															// $('#preview_box_inside').html("<iframe src='http://www.msnbc.com' name='preview_video'	style='background:white;border:1px solid gray;width:833px;height:281px'  	border='1' 	frameborder='1' 	scrolling='auto' 	align='center' 	hspace='0' 	vspace=''	/>");
		
												});													
	

												$("#backgrounds-div").jcarousel({
												        scroll: 1,
												        initCallback: mycarousel_initCallback_1
												});	
												$("#pictures-div").jcarousel({
												        scroll: 1,
												        initCallback: mycarousel_initCallback_2
												});													
												$("#videos-div").jcarousel({
												        scroll: 1,
												        initCallback: mycarousel_initCallback_3
												});													


												$('.hovering').live("mouseover", function(){
															$(this).children('.small_icons_panel').show()
												 }).live("mouseout", function(){
															$(this).children('.small_icons_panel').hide()
												 });

												
												$('.swap').live("click", function(){
													$('body').css({
														  'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $data['user_id']   ?>/' + $(this).parent().parent().attr('image_id') + '/image.jpg)'
														})		
												})	
																							

												
												$('.delete').live("click", function(){
													
													thisLi = $(this).parent('div.small_icons_panel').parent('li');
													thisParentUL = thisLi.parent();
													
													whichPanel = thisParentUL.parent().parent().attr('id');

													if( whichPanel == 'backgrounds-div'){
														whichCarousel = window.myCarousel_1;
													}else if( whichPanel == 'pictures-div'){
														whichCarousel = window.myCarousel_2;														
													}else if( whichPanel == 'videos-div'){
														whichCarousel = window.myCarousel_3;														
													};

													indexOf = thisLi.index()+1;

													var li_array = new Array();

													var e = whichCarousel.get( indexOf );

													theChildren = e.parent().find("li");
								
								
									        var count = 0; 
									        $.each(theChildren,function(){
									        		if( $(this).attr('jcarouselindex') != indexOf ){
									          	 	$(this).removeAttr("class").removeAttr("jcarouselindex");
									              li_array[count] = $(this); 	 
									              count++;       			
									        		}
									            
									        });
									        
								
									        whichCarousel.reset();
													
								          count = 1;
								
								          $.each(li_array, function(key, value){
								
								              if(value != null) {
								              		value.addClass('hovering');
								                 	whichCarousel.add(count,  value);
								                  count++;
								              }
								          });
								          
								
													whichCarousel.size( li_array.length)          
								          
													
													whichCarousel.reload()
													
													
													whichCarousel.scroll(parseInt( indexOf ),true);
													
													
													$.post("<?php echo base_url(). 'index.php/main/remove';    ?>",{
													image_id:$(this).parent().parent().attr('image_id')
													},function(data) {
														
														last_li = thisParentUL.children('li').last();
														
														/* CHANGING BACKGROUND */
														if( last_li.attr('image_type_id') == 0){ 

																$('body').css({
														    'background-image': 'url(<?php  echo base_url()   ?>uploads/<?php echo $this->user_id    ?>/' + last_li.attr('image_id') + '/image.jpg?random=<?php echo   rand(5,124344523)   ?>)',
														    'background-position': 'center 0px',
														    'background-repeat': 'no-repeat'});	
														    															
														};
														
													});	
													
													
												});	
												
												
												
						$('#video_submit').click(function(event) {
							$('#form_video').submit();
						});	
						
						$('#video_url').click(function(event) {
								$(this).val('');		
						});	
						
						$('.update-video_url').live("click", function(){
							thisElem = $(this);
							$.post("<?php echo base_url(). 'index.php/main/get_video_url';    ?>",{
							image_id:$(this).parent().parent().attr('image_id')
							},function(data) {
								$('#video_url').val(data);
								$('#form_video input[name=li_index]').val( thisElem.parent().parent().index() );
								$('#form_video input[name=image_id]').val(   thisElem.parent().parent().attr('image_id')  );
								$('#form_video input[name=image_type_id]').val( thisElem.parent().parent().attr('image_type_id') );
								
							});		
						});	
												
												

}
</script>




