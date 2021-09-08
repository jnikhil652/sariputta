<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['management'] = 'ManagementController';
// ------------------------------------------------------------------------------------------------------
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
$route['Contact-us-form'] = WEBSITE . 'ContactUsController/contactForm';

// Nikhil
$route['romania-form'] = WEBSITE . 'Form';
$route['roma-form-submit'] = WEBSITE . 'Form/romaForm';
$route['roma-form-position'] = WEBSITE . 'Form/romaniaPosition';

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

$route['admin'] = ADMIN . 'Admin';
$route['admin/pdf-Creator'] = ADMIN . 'PDF';
$route['admin/login'] = ADMIN . 'Login';
$route['admin/Romania'] = ADMIN . 'Romania';



// 
// 