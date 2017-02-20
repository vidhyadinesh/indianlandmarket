<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Alternative languages helper
*
* Returns a string with links to the content in alternative languages
*
* version 0.2
* @author Luis <luis@piezas.org.es>
* @modified by Ionut <contact@quasiperfect.eu>
*/

function alt_site_url($uri = '')
{
    $CI =& get_instance();
    $actual_lang=$CI->uri->segment(1);
    $languages=$CI->config->item('lang_desc');
    $languages_useimg=$CI->config->item('lang_useimg');
    $ignore_lang=$CI->config->item('lang_ignore');
    if (empty($actual_lang))
    {
        $uri=$ignore_lang.$CI->uri->uri_string();
        $actual_lang=$ignore_lang;
    }
    else
    {
        if (!array_key_exists($actual_lang,$languages))
        {
            $uri=$ignore_lang.$CI->uri->uri_string();
            $actual_lang=$ignore_lang;
        }
        else
        {
            $uri=$CI->uri->uri_string();
            $uri=substr_replace($uri,'',0,1);
        }
    }
    $alt_url='<ul>';
    //i use ul because for me formating a list from css is easy
    foreach ($languages as $lang=>$lang_desc)
    {
         if ($actual_lang!=$lang)
         {
            $alt_url.='<li><a href="'.config_item('site_baseurl');
            if ($lang==$ignore_lang)
            {
                $new_uri=ereg_replace('^'.$actual_lang,'',$uri);
                $new_uri=substr_replace($new_uri,'',0,1);
            }
            else
            {
                $new_uri=ereg_replace('^'.$actual_lang,$lang,$uri);
            }
            $alt_url.=$new_uri.'">';
            if ($languages_useimg){
                //change the path on u'r needs
                //in images u need to have for example en.gif and so on for every   
                //language u use
                //the language description will be used as alternative
                $alt_url.= '<img src="'.base_url().'images/'.$lang.'.gif" alt="'.$lang_desc.'"></a></li>';
            }
            else
            {
                $alt_url.= $lang_desc.'</a></li>';
            }
         }
    }
    $alt_url.='</ul>';
    return $alt_url;
}
/**
 * function to get site base url
 *
 * site base url string
 */
function site_baseurl(){
	$CI =& get_instance();
	return base_url();
	//return base_url().$CI->config->item('language_abbr').'/';
}
/**
 * function to get image url
 *
 * image url string
 */
function image_url(){
	$CI =& get_instance();
	return $CI->config->item('image_url');
}
 function image_path(){
	$CI =& get_instance();
	return $CI->config->item('images_path');
}
/**
 * function to get css url
 *
 * css url string
 */
function css_url(){
	$CI =& get_instance();
	return $CI->config->item('css_url_path');
}
/**
 * function to get js url
 *
 * js url string
 */
function js_url(){
	$CI =& get_instance();
	return $CI->config->item('js_url_path');
}

function upload_path(){
	$CI =& get_instance();
	return $CI->config->item('upload_file_path');
}
function upload_url(){
	$CI =& get_instance();
	return $CI->config->item('upload_file_url');
}
?>