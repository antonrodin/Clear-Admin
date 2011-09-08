<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="utf8">
<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
        <link href="<?php echo base_url(); ?>public/css/admin.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/admin.js" ></script>
        <script type="text/javascript">
            var site_url = "<?php echo base_url(); ?>";
            $(document).ready(function() {
                activate('<?php echo $option; ?>','<?php echo $suboption; ?>');
                jQuery('#content tr:odd').css({'background' : '#ddd'});
            });
        </script>
</head>
    <body>
        <div id="center">
            <div id="header">
                <div id="header-inside"><?php $this->load->view('admin/main/' . $header); ?></div>
            </div>
            <div id="menu">
                <div id="menu-inside"><?php $this->load->view('admin/main/' . $menu); ?></div>
            </div>
            <div id="content">
                <?php $this->load->view('admin/main/' . $load_view); ?>
            </div>
            <div id="footer">
                <div id="footer-inside"><?php $this->load->view('admin/main/' . $footer); ?></div>
            </div>
        </div>
    </body>
</html>