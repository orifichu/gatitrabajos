<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//variables útiles
$assets_url = assets_url();
$base_url   = base_url();
$panel_url  = sprintf("%s%s", $base_url, 'panel');

?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $language_abbr; ?>"> <!--<![endif]-->
    <head>
    	<?php
		//prefix
		$prefix = 'meta_';
		?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo t($prefix.'title'); ?></title>
        <meta name="description" content="<?php echo t($prefix.'description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $assets_url; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $assets_url; ?>css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo $assets_url; ?>css/login.css">

        <script src="<?php echo $assets_url; ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
      <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
      <div class="container">

        <form action="<?php echo sprintf("%s/%s", $panel_url, 'check_login') ; ?>" class="form-signin" method="post">
          <h2 class="form-signin-heading">Gatitrabajos Panel</h2>
          <label for="nickname" class="sr-only">Usuario</label>
          <input type="text" id="nickname" class="form-control" placeholder="Usuario" required autofocus>
        
          <label for="password" class="sr-only">Contraseña</label>
          <input type="password" id="password" class="form-control" placeholder="Contraseña" required>
          
          <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me"> Recordarme
            </label>
          </div>
          
          <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        </form>

      </div> <!-- /container -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>  
      <script src="<?php echo $assets_url; ?>js/login.js"></script>
    </body>
</html>
