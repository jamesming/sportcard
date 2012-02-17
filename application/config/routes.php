<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = '';

//$route['home/login'] = "home/login";
//$route['home/logout'] = "home/logout";
//$route['home/register'] = "home/register";
//$route['home/validate_account'] = "home/validate_account";
//$route['home/create_or_update_with_facebook'] = "home/create_or_update_with_facebook";
//$route['home/facebook'] = "home/facebook";

//$route['main/:any'] = "main/index"; 

//$route['main/confirm_existing_password'] = "main/confirm_existing_password";
//$route['main/update_password'] = "main/update_password";
//$route['main/update'] = "main/update";
//$route['main/insert'] = "main/insert";
//$route['main/remove'] = "main/remove";
//$route['main/upload'] = "main/upload";
//$route['main/resize'] = "main/resize";
//$route['main/get_video_url'] = "main/get_video_url";
//$route['main/update_thumbnail_panel'] = "main/update_thumbnail_panel";
//$route['main/t'] = "main/t";

$route[':any'] = "card"; 

/* End of file routes.php */
/* Location: ./application/config/routes.php */