<?php
// server configurations
if (defined('ENVIRONMENT'))
{
	switch (ENVIRONMENT)
	{
		case 'development':	
			$config['site_baseurl'] 		= "http://".$_SERVER['SERVER_NAME'];
			$config['site_baseurl'] 		.= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
		break;
	
		case 'testing':
			$config['site_baseurl'] = "https://www.indianpropmarket.com/";	
                    break;
		case 'production':
			$config['site_baseurl'] = "https://www.indianpropmarket.com/";	
		break;

		default:
			$config['site_baseurl'] 		= "http://".$_SERVER['SERVER_NAME'];
			$config['site_baseurl'] 		.= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

	}
}



?>
