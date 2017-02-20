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

$route['default_controller'] = "user";
$route['404_override'] = '';
$route['register-us'] = 'user/register';
$route['login'] = 'user/loginview';
$route['home'] = 'user/home';
$route['logout'] = 'user/logout';
$route['myaccount'] = 'user/getAccountDetails';
$route['change-password'] = 'user/changePassword';
$route['update-password'] = 'user/updatePassword';
$route['verify'] = 'user/verify';
$route['checkemailexist'] = 'user/checkemailexist';
$route['forgot-password'] = 'user/forgotPassword';
$route['reset-password'] = 'user/recoverPassword';
$route['resetpassword'] = 'user/resetPassword';
$route['password-reset'] = 'user/userPasswordReset';
$route['email-exist'] = 'user/emailExist';
$route['about'] = 'user/about';
$route['advertise'] = 'user/advertise';
$route['privacy'] = 'user/privacy';
$route['terms'] = 'user/terms';
$route['tips'] = 'user/tips';

$route['post-property'] = 'property/postProperty';
$route['postproperty/subcategories'] = 'property/getSubcategory';
$route['postproperty/get-subcategorytype'] = 'property/getSubcategoryType';
$route['postproperty/step1'] = 'property/addPropertyStep1';
$route['postproperty/step2'] = 'property/addPropertyStep2';
$route['postproperty/step3'] = 'property/addPropertyStep3';
$route['postproperty/edit/step3'] = 'property/editPropertyStep3';
$route['postproperty/edit/step1'] = 'property/editPropertyStep1';
$route['postproperty/step4'] = 'property/addPropertyStep4';
$route['postproperty/step5'] = 'property/addPropertyStep5';
$route['properties'] = 'property/properties';
$route['advancedsearch'] = 'property/advancedsearch';
$route['property/view/(:num)'] = 'property/view/$1';
$route['property/add-to-shortlist'] = 'property/addToShortlist';
$route['property/remove-from-shortlist'] = 'property/removeFromShortlist';
$route['my-shortlisted-properties'] = 'property/getShortlistedProperties';
$route['my-properties'] = 'property/getUserProperties';
$route['contact'] = 'user/contact';
$route['remove-prop-image'] = 'property/removePropImage';
$route['remove-floor-image'] = 'property/removeFloorImage';
$route['remove-floor-plan'] = 'property/removeFloorPlan';
$route['add-pg'] = 'property/addpg';
$route['save-pg'] = 'property/savepg';
$route['contact/save'] = 'user/saveContact';
$route['pg/edit'] = 'property/editpg';
$route['paying-guest-properties'] = 'property/payingGuestProperties';
$route['upload-pg-images'] = 'property/uploadPgImages';
$route['pg-delete-image'] = 'property/deletePgImages';
$route['pg/view/(:num)'] = 'property/pgview/$1';




///  Admin Routes
$route['admin/login'] = 'admin/user/login';
$route['admin/home'] = 'admin/user/home';
$route['admin/property/change-status'] = 'admin/property/changeStatus';
$route['admin/property/delete'] = 'admin/property/delete';
$route['advertisement/getposition'] = 'admin/advertisement/getPositionByPage';
$route['advertisement/save'] = 'admin/advertisement/save';
$route['advertisement/edit'] = 'admin/advertisement/add';
$route['advertisement/delete'] = 'admin/advertisement/delete';
$route['admin/properties'] = 'admin/property/properties';
$route['admin/pending-properties'] = 'admin/property/pendingProperties';
$route['properties/bulk-approve'] = 'admin/property/bulkapprove';
$route['properties/bulk-delete'] = 'admin/property/bulkdelete';

$route['admin/users'] = 'admin/user/users';
$route['admin/amenities'] = 'admin/amenity/amenities';
$route['amenity/save'] = 'admin/amenity/save';
$route['amenity/edit'] = 'admin/amenity/add';
$route['amenity/delete'] = 'admin/amenity/delete';

$route['admin/features'] = 'admin/feature/features';
$route['feature/save'] = 'admin/feature/save';
$route['feature/edit'] = 'admin/feature/add';
$route['feature/delete'] = 'admin/feature/delete';

$route['admin/subcategories'] = 'admin/subcategory/subcategories';
$route['subcategory/save'] = 'admin/subcategory/save';
$route['subcategory/edit'] = 'admin/subcategory/add';
$route['subcategory/delete'] = 'admin/subcategory/delete';
$route['admin/logout'] = 'admin/user/logout';

/* End of file routes.php */
/* Location: ./application/config/routes.php */