<?php 
// For the script that is running:

if(!defined('DOCUMENT_ROOT')) define('DOCUMENT_ROOT',str_replace('application/config','',substr(__FILE__, 0, strrpos(__FILE__, '/'))));
$script_directory 								= substr($_SERVER['SCRIPT_FILENAME'], 0, strrpos($_SERVER['SCRIPT_FILENAME'], '/'));
$CI 				= 	&get_instance();
$config['site_baseurl']							=$CI->config->item('site_baseurl');
$config['site_basepath']						= constant("DOCUMENT_ROOT");

$config['captcha_image_path']      			 	= $config['site_basepath'] .'captcha/';
$config['captcha_image_url']    			   	= $config['site_baseurl'].'captcha/';
$config['captcha_font_path']        			= $config['site_basepath'].'system/fonts/arialbd.ttf';

$config['css_path']        						= $config['site_basepath'].'style/';
$config['css_path_parsed']        				= $config['site_basepath'].'style/parsed/';
$config['css_url_path']        					= $config['site_baseurl'].'style/parsed/';
$config['css_path_url']        					= $config['site_baseurl'].'style/';
$config['js_path_url']        					= $config['site_baseurl'].'js/';
$config['js_path']        						= $config['site_basepath'].'js/';

$config['js_path_parsed']        				= $config['site_basepath'].'js/parsed/';
$config['js_url_path']        					= $config['site_baseurl'].'js/parsed/';

$config['fonts_path']							= $config['site_basepath'] .'fonts/';
$config['images_path']							= $config['site_basepath'] .'images/';
$config['images']								= $config['site_baseurl'] .'images/';
$config['image_url']							= $config['site_baseurl'] .'images/';

$config['upload_file']	   						= $config['site_basepath']."uploads/";
$config['upload_file_url']	   					= $config['site_baseurl']."uploads/";

$config['profile_image_path']       			= $config['site_basepath']."uploads/profile/";
$config['profile_image_url']        			= $config['site_baseurl']."uploads/profile/";
$config['image_upload_max_size']    			= "2097152"; //in bytes

?>