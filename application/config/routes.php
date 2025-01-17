<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = 'errors/error_404';
$route['translate_uri_dashes'] = FALSE;

$route['main'] = 'home/home';
$route['main/(:any)'] = 'home/home';
$route['services/(:any)'] = 'home/services';
$route['services/(:any)/(:num)'] = 'home/services';
$route['details/(:any)'] = 'home/details';
$route['about/(:any)'] = 'about/index';
$route['main/(:any)/contact'] = 'home/contact';
$route['main/(:any)/projects'] = 'home/projects';
$route['main/(:any)/register'] = 'home/register';
$route['main/(:any)/login'] = 'home/login';
$route['projects/(:any)'] = 'home/projects';
$route['blogs/(:any)'] = 'home/news';
$route['project_details/(:any)'] = 'home/project_details';
$route['blog_details/(:any)'] = 'home/blog_details';
$route['user_logout/(:any)'] = 'home/user_logout';

$route['register/(:any)/search_blogs'] = 'home/search_blogs';
$route['register/(:any)/search_user'] = 'home/search_user';
$route['register/(:any)/news_later'] = 'register/news_later';

$route['admin'] = 'admin';
$route['admin/users'] = 'admin/users';
