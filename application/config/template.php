<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Active template
|--------------------------------------------------------------------------
|
| The $template['active_template'] setting lets you choose which template 
| group to make active.  By default there is only one group (the 
| "default" group).
|
*/
$template['active_template'] = 'default';

/*
|--------------------------------------------------------------------------
| Explaination of template group variables
|--------------------------------------------------------------------------
|
| ['template'] The filename of your master template file in the Views folder.
|   Typically this file will contain a full XHTML skeleton that outputs your
|   full template or region per region. Include the file extension if other
|   than ".php"
| ['regions'] Places within the template where your content may land. 
|   You may also include default markup, wrappers and attributes here 
|   (though not recommended). Region keys must be translatable into variables 
|   (no spaces or dashes, etc)
| ['parser'] The parser class/library to use for the parse_view() method
|   NOTE: See http://codeigniter.com/forums/viewthread/60050/P0/ for a good
|   Smarty Parser that works perfectly with Template
| ['parse_template'] FALSE (default) to treat master template as a View. TRUE
|   to user parser (see above) on the master template
|
| Region information can be extended by setting the following variables:
| ['content'] Must be an array! Use to set default region content
| ['name'] A string to identify the region beyond what it is defined by its key.
| ['wrapper'] An HTML element to wrap the region contents in. (We 
|   recommend doing this in your template file.)
| ['attributes'] Multidimensional array defining HTML attributes of the 
|   wrapper. (We recommend doing this in your template file.)
|
| Example:
| $template['default']['regions'] = array(
|    'header' => array(
|       'content' => array('<h1>Welcome</h1>','<p>Hello World</p>'),
|       'name' => 'Page Header',
|       'wrapper' => '<div>',
|       'attributes' => array('id' => 'header', 'class' => 'clearfix')
|    )
| );
|
*/
 
/*
|--------------------------------------------------------------------------
| Default Template Configuration (adjust this or create your own)
|--------------------------------------------------------------------------
*/

$template['default']['template'] = 'template/template';
$template['default']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['launch']['template'] = 'template/launch';
$template['launch']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['default']['parser'] = 'parser';
$template['default']['parser_method'] = 'parse';
$template['default']['parse_template'] = FALSE;



/*
|--------------------------------------------------------------------------
| Admin Template Configuration (adjust this or create your own)
|--------------------------------------------------------------------------
*/

$template['admin']['template'] = 'template/admin';
$template['admin']['regions'] = array( 
   'admin_menu',
   'content', 
);
$template['admin']['parser'] = 'parser';
$template['admin']['parser_method'] = 'parse';
$template['admin']['parse_template'] = FALSE;



$template['error_login']['template'] = 'template/error_login_template';
$template['error_login']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['error_login']['parser'] = 'parser';
$template['error_login']['parser_method'] = 'parse';
$template['error_login']['parse_template'] = FALSE;



$template['common']['template'] = 'template/common_template';
$template['common']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['common']['parser'] = 'parser';
$template['common']['parser_method'] = 'parse';
$template['common']['parse_template'] = FALSE;


/*
|--------------------------------------------------------------------------
| Default Template Configuration (adjust this or create your own)
|--------------------------------------------------------------------------
*/

$template['layout']['template'] = 'template/layout';
$template['layout']['regions'] = array(
   'content'
);
$template['layout']['parser'] = 'parser';
$template['layout']['parser_method'] = 'parse';
$template['layout']['parse_template'] = FALSE;

 
/*
|--------------------------------------------------------------------------
| error_javascript Template Configuration (adjust this or create your own)
|--------------------------------------------------------------------------
*/

$template['error_javascript']['template'] = 'template/error_template';
$template['error_javascript']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['error_javascript']['parser'] = 'parser';
$template['error_javascript']['parser_method'] = 'parse';
$template['error_javascript']['parse_template'] = FALSE;



$template['help']['template'] = 'template/help_template';
$template['help']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['help']['parser'] = 'parser';
$template['help']['parser_method'] = 'parse';
$template['help']['parse_template'] = FALSE;

/*
|--------------------------------------------------------------------------
| button_widget Template Configuration (adjust this or create your own)
|--------------------------------------------------------------------------
*/

$template['button_widget']['template'] = 'template/button_widget';
$template['button_widget']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['button_widget']['parser'] = 'parser';
$template['button_widget']['parser_method'] = 'parse';
$template['button_widget']['parse_template'] = FALSE;


/*
|--------------------------------------------------------------------------
| PDF Template Configuration (adjust this or create your own)
|--------------------------------------------------------------------------
*/

$template['pdf']['template'] = 'template/pdf_template';
$template['pdf']['regions'] = array(
   'content'
);
$template['pdf']['parser'] = 'parser';
$template['pdf']['parser_method'] = 'parse';
$template['pdf']['parse_template'] = FALSE;


/*
|--------------------------------------------------------------------------
| Landing page Template Configuration (adjust this or create your own)
|--------------------------------------------------------------------------
*/

$template['landing']['template'] = 'template/landingpage';
$template['landing']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['landing']['parser'] = 'parser';
$template['landing']['parser_method'] = 'parse';
$template['landing']['parse_template'] = FALSE;



/* End of file template.php */
/* Location: ./system/application/config/template.php */