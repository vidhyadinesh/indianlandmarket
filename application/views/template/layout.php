<?php 
	header("Content-Type: text/html; charset=UTF-8"); 
	header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	header('P3P: CP="ALL ADM DEV PSAi COM OUR OTRo STP IND ONL"');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	    <title><?php echo (isset($title) && !empty($title) ? $title : "Confirm 365");?></title>
		<?php echo load_css_files_direct($css) ;  ?>
	    
	    <script type="text/javascript">
	        var base_url 	= "<?php echo base_url(); ?>";
	        var image_url 	= "<?php echo base_url();?>images/";
	        var max_download	= "<?php echo get_general_settings_value('max_download_limit');?>";
		</script>
                <?php echo load_js_files_direct($js);?>
		<style type="text/css">
			*{
				behavior: url(<?php echo $this->config->item('js_path_url');?>iepngfix.htc);
			}
		</style>
	</head>
	<body style="background:none !important;">
		<div id="layout-wrapper">
		<?php print($content);?>
		</div>
	</body>
	<script type="text/javascript">
		var password_min	= "<?php echo get_general_settings_value('password_min_length')?>";	
	</script>
	<img src="<?php echo image_url()?>admin/greybox_disc_over.jpg" style="display:none">
	<img src="<?php echo image_url()?>admin/greybox_disc.jpg" style="display:none">
</html>