<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="utf8">
<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="es" />
        <link href="<?php echo base_url(); ?>public/css/login.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/login.js" ></script>
        <script type="text/javascript">
            var site_url = "<?php echo base_url(); ?>";
        </script>
</head>
    <body>
        <div id="center-login">
            <?php $this->load->view('admin/login/' . $header); ?>
                <div id="login-form">
                    <?php $this->load->view('admin/login/' . $content); ?>
                </div>
                <p class="error" style="display:none;">
                    La informacion proporcionada es incorrecta
                </p>
            <?php $this->load->view('admin/login/' . $footer); ?>
        </div>
    </body>
</html>