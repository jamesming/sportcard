<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
	
	
   public function __construct(){
        parent::__construct();
				$this->user_id = 1;
				$this->thumbnail_size_width  = '181';
				$this->thumbnail_size_height = '120';
				$this->thumbnail_panel_width = '755';	
				$this->top_direction_arrow = '62';	
   }


	function test_lightbox(){
?>		

<head>

	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
	<script type="text/javascript" language="Javascript">
	(function($){
	
	//closeDOMWindow
	$.fn.closeDOMWindow = function(settings){
		
		if(!settings){settings={};}
		
		var run = function(passingThis){
			
			if(settings.anchoredClassName){
				var $anchorClassName = $('.'+settings.anchoredClassName);
				$anchorClassName.fadeOut('fast',function(){
					if($.fn.draggable){
						$anchorClassName.draggable('destory').trigger("unload").remove();	
					}else{
						$anchorClassName.trigger("unload").remove();
					}
				});
				if(settings.functionCallOnClose){settings.functionCallAfterClose();}
			}else{
				var $DOMWindowOverlay = $('#DOMWindowOverlay');
				var $DOMWindow = $('#DOMWindow');
				$DOMWindowOverlay.fadeOut('fast',function(){
					$DOMWindowOverlay.trigger('unload').unbind().remove();																	  
				});
				$DOMWindow.fadeOut('fast',function(){
					if($.fn.draggable){
						$DOMWindow.draggable("destroy").trigger("unload").remove();
					}else{
						$DOMWindow.trigger("unload").remove();
					}
				});
			
				$(window).unbind('scroll.DOMWindow');
				$(window).unbind('resize.DOMWindow');
				
				if($.fn.openDOMWindow.isIE6){$('#DOMWindowIE6FixIframe').remove();}
				if(settings.functionCallOnClose){settings.functionCallAfterClose();}
			}	
		};
		
		if(settings.eventType){//if used with $().
			return this.each(function(index){
				$(this).bind(settings.eventType, function(){
					run(this);
					return false;
				});
			});
		}else{//else called as $.function
			run();
		}
		
	};
	
	//allow for public call, pass settings
	$.closeDOMWindow = function(s){$.fn.closeDOMWindow(s);};
	
	//openDOMWindow
	$.fn.openDOMWindow = function(instanceSettings){	
		
		var shortcut =  $.fn.openDOMWindow;
	
		//default settings combined with callerSettings////////////////////////////////////////////////////////////////////////
		
		shortcut.defaultsSettings = {
			anchoredClassName:'',
			anchoredSelector:'',
			borderColor:'#ccc',
			borderSize:'2',
			draggable:0,
			eventType:null, //click, blur, change, dblclick, error, focus, load, mousedown, mouseout, mouseup etc...
			fixedWindowY:100,
			functionCallOnOpen:null,
			functionCallOnClose:null,
			height:500,
			loader:0,
			loaderHeight:0,
			loaderImagePath:'',
			loaderWidth:0,
			modal:0,
			overlay:1,
			overlayColor:'#000',
			width:500, 
			windowBGColor:'transparent',
			windowBGImage:null, // http path
			windowHTTPType:'get',
			windowPadding:0,
			windowSource:'inline', //inline, ajax, iframe
			windowSourceID:'',
			windowSourceURL:'',
			windowSourceAttrURL:'href'
		};
		
		var settings = $.extend({}, $.fn.openDOMWindow.defaultsSettings , instanceSettings || {});
		
		//Public functions
		
		shortcut.viewPortHeight = function(){ return self.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;};
		shortcut.viewPortWidth = function(){ return self.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;};
		shortcut.scrollOffsetHeight = function(){ return self.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;};
		shortcut.scrollOffsetWidth = function(){ return self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft;};
		shortcut.isIE6 = typeof document.body.style.maxHeight === "undefined";
		
		//Private Functions/////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		var sizeOverlay = function(){
			var $DOMWindowOverlay = $('#DOMWindowOverlay');
			if(shortcut.isIE6){//if IE 6
				var overlayViewportHeight = document.documentElement.offsetHeight + document.documentElement.scrollTop - 4;
				var overlayViewportWidth = document.documentElement.offsetWidth - 21;
				$DOMWindowOverlay.css({'height':overlayViewportHeight +'px','width':overlayViewportWidth+'px'});
			}else{//else Firefox, safari, opera, IE 7+
				$DOMWindowOverlay.css({'height':'100%','width':'100%','position':'fixed'});
			}	
		};
		
		var sizeIE6Iframe = function(){
			var overlayViewportHeight = document.documentElement.offsetHeight + document.documentElement.scrollTop - 4;
			var overlayViewportWidth = document.documentElement.offsetWidth - 21;
			$('#DOMWindowIE6FixIframe').css({'height':overlayViewportHeight +'px','width':overlayViewportWidth+'px'});
		};
		
		var centerDOMWindow = function() {
			var $DOMWindow = $('#DOMWindow');
			if(settings.height + 50 > shortcut.viewPortHeight()){//added 50 to be safe
				$DOMWindow.css('left',Math.round(shortcut.viewPortWidth()/2) + shortcut.scrollOffsetWidth() - Math.round(($DOMWindow.outerWidth())/2));
			}else{
				$DOMWindow.css('left',Math.round(shortcut.viewPortWidth()/2) + shortcut.scrollOffsetWidth() - Math.round(($DOMWindow.outerWidth())/2));
				$DOMWindow.css('top',Math.round(shortcut.viewPortHeight()/2) + shortcut.scrollOffsetHeight() - Math.round(($DOMWindow.outerHeight())/2));
			}
		};
		
		var centerLoader = function() {
			var $DOMWindowLoader = $('#DOMWindowLoader');
			if(shortcut.isIE6){//if IE 6
				$DOMWindowLoader.css({'left':Math.round(shortcut.viewPortWidth()/2) + shortcut.scrollOffsetWidth() - Math.round(($DOMWindowLoader.innerWidth())/2),'position':'absolute'});
				$DOMWindowLoader.css({'top':Math.round(shortcut.viewPortHeight()/2) + shortcut.scrollOffsetHeight() - Math.round(($DOMWindowLoader.innerHeight())/2),'position':'absolute'});
			}else{
				$DOMWindowLoader.css({'left':'50%','top':'50%','position':'fixed'});
			}
			
		};
		
		var fixedDOMWindow = function(){
			var $DOMWindow = $('#DOMWindow');
			$DOMWindow.css('left', settings.positionLeft + shortcut.scrollOffsetWidth());
			$DOMWindow.css('top', + settings.positionTop + shortcut.scrollOffsetHeight());
		};
		
		var showDOMWindow = function(instance){
			if(arguments[0]){
				$('.'+instance+' #DOMWindowLoader').remove();
				$('.'+instance+' #DOMWindowContent').fadeIn('fast',function(){if(settings.functionCallOnOpen){settings.functionCallOnOpen();}});
				$('.'+instance+ '.closeDOMWindow').click(function(){
					$.closeDOMWindow();	
					return false;
				});
			}else{
				$('#DOMWindowLoader').remove();
				$('#DOMWindow').fadeIn('fast',function(){if(settings.functionCallOnOpen){settings.functionCallOnOpen();}});
				$('#DOMWindow .closeDOMWindow').click(function(){						
					$.closeDOMWindow();
					return false;
				});
			}
			
		};
		
		var urlQueryToObject = function(s){
			  var query = {};
			  s.replace(/b([^&=]*)=([^&=]*)b/g, function (m, a, d) {
				if (typeof query[a] != 'undefined') {
				  query[a] += ',' + d;
				} else {
				  query[a] = d;
				}
			  });
			  return query;
		};
			
		//Run Routine ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
		var run = function(passingThis){
			
			//get values from element clicked, or assume its passed as an option
			settings.windowSourceID = $(passingThis).attr('href') || settings.windowSourceID;
			settings.windowSourceURL = $(passingThis).attr(settings.windowSourceAttrURL) || settings.windowSourceURL;
			settings.windowBGImage = settings.windowBGImage ? 'background-image:url('+settings.windowBGImage+')' : '';
			var urlOnly, urlQueryObject;
			
			if(settings.positionType == 'anchored'){//anchored DOM window
				
				var anchoredPositions = $(settings.anchoredSelector).position();
				var anchoredPositionX = anchoredPositions.left + settings.positionLeft;
				var anchoredPositionY = anchoredPositions.top + settings.positionTop;
				
				$('body').append('<div class="'+settings.anchoredClassName+'" style="'+settings.windowBGImage+';background-repeat:no-repeat;padding:'+settings.windowPadding+'px;overflow:auto;position:absolute;top:'+anchoredPositionY+'px;left:'+anchoredPositionX+'px;height:'+settings.height+'px;width:'+settings.width+'px;background-color:'+settings.windowBGColor+';border:'+settings.borderSize+'px solid '+settings.borderColor+';z-index:10001"><div id="DOMWindowContent" style="display:none"></div></div>');		
				//loader
				if(settings.loader && settings.loaderImagePath !== ''){
					$('.'+settings.anchoredClassName).append('<div id="DOMWindowLoader" style="width:'+settings.loaderWidth+'px;height:'+settings.loaderHeight+'px;"><img src="'+settings.loaderImagePath+'" /></div>');
					
				}
	
				if($.fn.draggable){
					if(settings.draggable){$('.' + settings.anchoredClassName).draggable({cursor:'move'});}
				}
				
				switch(settings.windowSource){
					case 'inline'://////////////////////////////// inline //////////////////////////////////////////
						$('.' + settings.anchoredClassName+" #DOMWindowContent").append($(settings.windowSourceID).children());
						$('.' + settings.anchoredClassName).unload(function(){// move elements back when you're finished
							$('.' + settings.windowSourceID).append( $('.' + settings.anchoredClassName+" #DOMWindowContent").children());				
						});
						showDOMWindow(settings.anchoredClassName);
					break;
					case 'iframe'://////////////////////////////// iframe //////////////////////////////////////////
						$('.' + settings.anchoredClassName+" #DOMWindowContent").append('<iframe frameborder="0" hspace="0" wspace="0" src="'+settings.windowSourceURL+'" name="DOMWindowIframe'+Math.round(Math.random()*1000)+'" style="width:100%;height:100%;border:none;background-color:#fff;" class="'+settings.anchoredClassName+'Iframe" ></iframe>');
						$('.'+settings.anchoredClassName+'Iframe').load(showDOMWindow(settings.anchoredClassName));
					break;
					case 'ajax'://////////////////////////////// ajax //////////////////////////////////////////	
						if(settings.windowHTTPType == 'post'){
							
							if(settings.windowSourceURL.indexOf("?") !== -1){//has a query string
								urlOnly = settings.windowSourceURL.substr(0, settings.windowSourceURL.indexOf("?"));
								urlQueryObject = urlQueryToObject(settings.windowSourceURL);
							}else{
								urlOnly = settings.windowSourceURL;
								urlQueryObject = {};
							}
							$('.' + settings.anchoredClassName+" #DOMWindowContent").load(urlOnly,urlQueryObject,function(){
								showDOMWindow(settings.anchoredClassName);
							});
						}else{
							if(settings.windowSourceURL.indexOf("?") == -1){ //no query string, so add one
								settings.windowSourceURL += '?';
							}
							$('.' + settings.anchoredClassName+" #DOMWindowContent").load(
								settings.windowSourceURL + '&random=' + (new Date().getTime()),function(){
								showDOMWindow(settings.anchoredClassName);
							});
						}
					break;
				}
				
			}else{//centered, fixed, absolute DOM window
				
				//overlay & modal
				if(settings.overlay){
					$('body').append('<div id="DOMWindowOverlay" style="z-index:10000;display:none;position:absolute;top:0;left:0;background-color:'+settings.overlayColor+';filter:alpha(opacity='+settings.overlayOpacity+');-moz-opacity: 0.'+settings.overlayOpacity+';opacity: 0.'+settings.overlayOpacity+';"></div>');
					if(shortcut.isIE6){//if IE 6
						$('body').append('<iframe id="DOMWindowIE6FixIframe"  src="blank.html"  style="width:100%;height:100%;z-index:9999;position:absolute;top:0;left:0;filter:alpha(opacity=0);"></iframe>');
						sizeIE6Iframe();
					}
					sizeOverlay();
					var $DOMWindowOverlay = $('#DOMWindowOverlay');
					$DOMWindowOverlay.fadeIn('fast');
					if(!settings.modal){$DOMWindowOverlay.click(function(){$.closeDOMWindow();});}
				}
				
				//loader
				if(settings.loader && settings.loaderImagePath !== ''){
					$('body').append('<div id="DOMWindowLoader" style="z-index:10002;width:'+settings.loaderWidth+'px;height:'+settings.loaderHeight+'px;"><img src="'+settings.loaderImagePath+'" /></div>');
					centerLoader();
				}
	
				//add DOMwindow
				$('body').append('<div id="DOMWindow" style="background-repeat:no-repeat;'+settings.windowBGImage+';overflow:auto;padding:'+settings.windowPadding+'px;display:none;height:'+settings.height+'px;width:'+settings.width+'px;background-color:'+settings.windowBGColor+';border:'+settings.borderSize+'px solid '+settings.borderColor+'; position:absolute;z-index:10001"></div>');
				
				var $DOMWindow = $('#DOMWindow');
				//centered, absolute, or fixed
				switch(settings.positionType){
					case 'centered':
						centerDOMWindow();
						if(settings.height + 50 > shortcut.viewPortHeight()){//added 50 to be safe
							$DOMWindow.css('top', (settings.fixedWindowY + shortcut.scrollOffsetHeight()) + 'px');
						}
					break;
					case 'absolute':
						$DOMWindow.css({'top':(settings.positionTop+shortcut.scrollOffsetHeight())+'px','left':(settings.positionLeft+shortcut.scrollOffsetWidth())+'px'});
						if($.fn.draggable){
							if(settings.draggable){$DOMWindow.draggable({cursor:'move'});}
						}
					break;
					case 'fixed':
						fixedDOMWindow();
					break;
					case 'anchoredSingleWindow':
						var anchoredPositions = $(settings.anchoredSelector).position();
						var anchoredPositionX = anchoredPositions.left + settings.positionLeft;
						var anchoredPositionY = anchoredPositions.top + settings.positionTop;
						$DOMWindow.css({'top':anchoredPositionY + 'px','left':anchoredPositionX+'px'});
								
					break;
				}
				
				$(window).bind('scroll.DOMWindow',function(){
					if(settings.overlay){sizeOverlay();}
					if(shortcut.isIE6){sizeIE6Iframe();}
					if(settings.positionType == 'centered'){centerDOMWindow();}
					if(settings.positionType == 'fixed'){fixedDOMWindow();}
				});
	
				$(window).bind('resize.DOMWindow',function(){
					if(shortcut.isIE6){sizeIE6Iframe();}
					if(settings.overlay){sizeOverlay();}
					if(settings.positionType == 'centered'){centerDOMWindow();}
				});
				
				switch(settings.windowSource){
					case 'inline'://////////////////////////////// inline //////////////////////////////////////////
						$DOMWindow.append($(settings.windowSourceID).children());
						$DOMWindow.unload(function(){// move elements back when you're finished
							$(settings.windowSourceID).append($DOMWindow.children());				
						});
						showDOMWindow();
					break;
					case 'iframe'://////////////////////////////// iframe //////////////////////////////////////////
						$DOMWindow.append('<iframe frameborder="0" hspace="0" wspace="0" src="'+settings.windowSourceURL+'" name="DOMWindowIframe'+Math.round(Math.random()*1000)+'" style="width:100%;height:100%;border:none;background-color:#fff;" id="DOMWindowIframe" ></iframe>');
						$('#DOMWindowIframe').load(showDOMWindow());
					break;
					case 'ajax'://////////////////////////////// ajax //////////////////////////////////////////
						if(settings.windowHTTPType == 'post'){
							
							if(settings.windowSourceURL.indexOf("?") !== -1){//has a query string
								urlOnly = settings.windowSourceURL.substr(0, settings.windowSourceURL.indexOf("?"));
								urlQueryObject = urlQueryToObject(settings.windowSourceURL);
							}else{
								urlOnly = settings.windowSourceURL;
								urlQueryObject = {};
							}
							$DOMWindow.load(urlOnly,urlQueryObject,function(){
								showDOMWindow();
							});
						}else{
							if(settings.windowSourceURL.indexOf("?") == -1){ //no query string, so add one
								settings.windowSourceURL += '?';
							}
							$DOMWindow.load(
								settings.windowSourceURL + '&random=' + (new Date().getTime()),function(){
								showDOMWindow();
							});
						}
					break;
				}
				
			}//end if anchored, or absolute, fixed, centered
			
		};//end run()
		
		if(settings.eventType){//if used with $().
			return this.each(function(index){				  
				$(this).bind(settings.eventType,function(){
					run(this);
					return false;
				});
			});	
		}else{//else called as $.function
			run();
		}
		
	};//end function openDOMWindow
	
	//allow for public call, pass settings
	$.openDOMWindow = function(s){$.fn.openDOMWindow(s);};
	
	})(jQuery);
	</script>

</head>
<body style="padding:50px;">

	<a href="#inlineContent" class="defaultDOMWindow">Open DOM Window</a>
	
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
	
				<script type="text/javascript">
					$(document).ready(function() { 
						$('.defaultDOMWindow').openDOMWindow({
							eventType:'click',
							loader:1,
							loaderImagePath:'<?php  echo base_url()   ?>images/animationProcessing.gif',
							loaderHeight:16,
							loaderWidth:17,
							overlayOpacity:'55', 
							positionType:'absolute', 
							positionTop:300, 
							positionLeft:($(window).width() / 2) - 400
						});
						
						$('a.defaultDOMWindow').click()
								
					});

				</script>
				<style>
					.halves{
						margin:0px 0px 0px 0px;
						float:left;
						width:250px;
						background:transparent;
					}
				</style>
				<div id="inlineContent" style="display:none;overflow:none">
						<div 	class='halves '   style='background:white'  >
							<p>Inline Content</p>
							<p>Click overlay to close window</p>
							<input onclick=$.closeDOMWindow() type="button" value="close">
						</div>					
						<div  class='halves '   style='
							height:400px;
							background-image: url(<?php  echo base_url()   ?>images/scenecredit2.png);
							background-position:right center;
							background-repeat: no-repeat;
							'  >
							
							&nbsp;
						</div >

				</div>
				
</body>

<?php     
	}


	function palorama(){

		$objects = $this->CI->my_database_model->select_from_table( 
			$table = 'users_objects', 
			$select_what = 'id, rate',    
			$where_array = array(
				'user_id' => $this->user_id
			), 
			$use_order = TRUE, 
			$order_field = 'user_id', 
			$order_direction = 'asc', 
			$limit = -1
			);		

		foreach( $objects  as  $key => $object){
			
				if( $object->rate <= 2){  // IF USER LIKES OR REALLY LIKES
					
						$users_object = $this->CI->my_database_model->select_from_table( 
							$table = 'users_objects', 
							$select_what = 'user_id',    
							$where_array = array(
								'object_id' => $object->id,
								'rate <=' => 2,
							), 
							$use_order = TRUE, 
							$order_field = 'user_id', 
							$order_direction = 'asc', 
							$limit = -1
							);					
							
				}elseif( $object->rate  >= 3 && $object->rate != 5){  // IF USER DISLIKES OR HATES, IGNORING NO OPINION
					
						$users_object = $this->CI->my_database_model->select_from_table( 
							$table = 'users_objects', 
							$select_what = 'user_id',    
							$where_array = array(
								'object_id' => $object->id,
								'rate >=' => 3,
							), 
							$use_order = TRUE, 
							$order_field = 'user_id', 
							$order_direction = 'asc', 
							$limit = -1
							);						
					
				};

				foreach( $users_object  as  $user){
					$users_set[] = $user->user_id;
				};
				
				$user_sets[$key] = $users_set;
				
				if( isset( $user_sets[$key - 1] ) ){
					
						$user_sets[$key] = $this->custom->intersect_array(
							$user_sets[$key],
							$user_sets[$key - 1]
						);					
						
				};

		}

		echo '<pre>';print_r( $user_sets[$key]  );echo '</pre>';  exit;  
		
	}
	
	

	function mytest(){
?>

<script type="text/javascript" 
        src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
 
  google.load("jquery", "1.6.4");
 	// google.load("jqueryui", "1.8.16");

</script>
<script type="text/javascript" language="Javascript">
$(document).ready(function() { 
	
});
</script>
<form 
	id='form_image' 
	method='POST' 
	enctype='multipart/form-data' 
	action='<?php echo base_url();    ?>index.php/home/upload'
	>
	<input  id='image_type_id' name="image_type_id"  type="" value="0">
	<input  id='image_id' name="image_id"  type="" value="">
	<input  id='li_index' name="li_index"  type="" value="-1">
	<input type="file"  id='Filedata' name="Filedata"  value="" >
	<input id="submit_button" type="submit" value="submit">
</form>	
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
			'thumbnail_panel_width' => $this->thumbnail_panel_width,
			'thumbnail_panel_width' => $this->thumbnail_panel_width,
			'top_direction_arrow' => $this->top_direction_arrow,
			'user_id' => $this->user_id
		);

		$this->load->view('test/index_view',
					array('data' => $data));	
		
	}
	
	
	public function jtest(){
		
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
	

function x(){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us">
<head>
<title>jCarousel Examples</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
<!--
<script type="text/javascript" src="http://sorgalla.com/projects/jcarousel/lib/jquery-1.4.2.min.js"></script>
-->
<script type="text/javascript" 
        src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
 
  google.load("jquery", "1.4.2");
 	

</script>
<script src="http://sorgalla.com/projects/jcarousel/lib/jquery.jcarousel.min.js"></script> 
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="http://sorgalla.com/projects/jcarousel/skins/tango/skin.css" />

<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel();
});

</script>

</head>
<body>
<div id="wrap">
  <h1>jCarousel</h1>
  <h2>Riding carousels with jQuery</h2>

  <h3>Simple carousel</h3>
  <p>
    This is the most simple usage of the carousel with no configuration options.
  </p>

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

</div>
</body>
</html>


<?php     
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/test.php */