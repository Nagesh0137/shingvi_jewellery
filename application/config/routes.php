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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'User';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['Index']="Website/index";
$route['About']="Website/about";
$route['Products']="Website/products";
$route['Services']="Website/services";
$route['Plants']='Website/our_plants';
$route['Contact']='Website/contact';
$route['Gallery']='Website/gallery';
$route['Faq']='Website/faq';
$route['Blog']='Website/blog';
$route['Career']='Website/career';
$route['Terms']='Website/terms_condition';
$route['Privacy']='Website/privacy_policy';
$route['Career']='Website/career';
$route['Feedback']='Website/feedback';
$route['Customers']='Website/customers';
$route['BlogDetails']='Website/blog_details';
$route['Introduction']='Website/company_intro';
$route['Supplier']='Website/supplier';
$route['Founder']='Website/founder';
$route['Team']='Website/team';
$route['Mission-Vision']='Website/mis_vis';
$route['Client-Stories']='Website/client_stories';
$route['Enquire/(:id)']='Website/enquire/id';
// Numbers CRUD Routes
$route['admin/bulk_mark_sold/(:any)'] = 'admin/bulk_mark_sold/$1';
$route['admin/bulk_mark_available/(:any)'] = 'admin/bulk_mark_available/$1';

