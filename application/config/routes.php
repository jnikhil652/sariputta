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
$route['default_controller'] = 'welcome';
$route['higherEducation'] = WEBSITE . 'HigherEducationController/higher';
$route['paramedical'] = WEBSITE . 'HigherEducationController/paramedical';
$route['mbbsabrod'] = WEBSITE . 'HigherEducationController/mbbsabrod';
$route['medicalindia'] = WEBSITE . 'HigherEducationController/medicalindia';
$route['stepapp'] = WEBSITE . 'HigherEducationController/stepapp';
$route['try'] = WEBSITE . 'HigherEducationController/try';
$route['pgp'] = WEBSITE . 'HigherEducationController/pgp';
$route['pgdm'] = WEBSITE . 'HigherEducationController/pgdm';
$route['probe'] = WEBSITE . 'HigherEducationController/probe';
$route['cfp'] = WEBSITE . 'HigherEducationController/cfp';
$route['placement'] = WEBSITE . 'HigherEducationController/placement';
$route['overseas'] = WEBSITE . 'HigherEducationController/overseas';
$route['usa'] = WEBSITE . 'HigherEducationController/usa';
$route['uk'] = WEBSITE . 'HigherEducationController/uk';
$route['canada'] = WEBSITE . 'HigherEducationController/canada';
$route['australia'] = WEBSITE . 'HigherEducationController/australia';
$route['germany'] = WEBSITE . 'HigherEducationController/germany';
$route['career'] = WEBSITE . 'HigherEducationController/career';
$route['IndianAbacus'] = WEBSITE . 'HigherEducationController/IndianAbacus';
$route['privacy'] = WEBSITE . 'HigherEducationController/privacy';
$route['terms'] = WEBSITE . 'HigherEducationController/terms';


$route['404_override'] = WEBSITE . 'LoginController/Errors404';
$route['translate_uri_dashes'] = FALSE;

$route['error-401'] = WEBSITE . 'LoginController/Errors401';
$route['error-404'] = WEBSITE . 'LoginController/Errors404';
$route['login'] = WEBSITE . 'LoginController/index';
$route['validateUser'] = WEBSITE . 'LoginController/validateUser';
$route['logout'] = WEBSITE . 'LoginController/logout';

$route['our-services'] = WEBSITE . 'OurServicesController/ourServices';
$route['our-collaborations'] = WEBSITE . 'OurCollaborationsController/ourCollaborations';
$route['contact-us'] = WEBSITE . 'ContactUsController/contactUs';
$route['send-contact-email'] = WEBSITE . 'ContactUsController/sendContactMail';
$route['send-enquiry-email'] = WEBSITE . 'ContactUsController/sendEnquiryMail';

