<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//variables útiles
$assets_url = assets_url();
$base_url   = base_url();
$ol_url     = base_url('ofertas-laborales'); //ofertas laborales url
$le_url     = base_url('empresas'); //empresas url
$co_url     = base_url('contactenos'); //contactenos url

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
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo $assets_url; ?>css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo $assets_url; ?>css/main.css">

        <script src="<?php echo $assets_url; ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GatiTrabajos</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php $base_url; ?>">Inicio</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ofertas Laborales <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $ol_url; ?>">Búqueda de Ofertas Laborales</a></li>
                <li><a href="<?php echo $le_url; ?>">Listado de Empresas</a></li>
              </ul>
            </li>
            <li><a href="<?php echo $co_url; ?>">Contáctenos</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>¡Bienvenidos!</h1>
        <p>Contamos con las todas ofertas laborales vigentes de las principales entidades públicas y privadas en Perú. ¿Deseas empezar a trabajar ya mismo? Entonces realiza una <a href="<?php echo $ol_url; ?>">búsqueda de ofertas laborales</a> o échale un vistazo a nuestro <a href="<?php echo $le_url; ?>">listado de empresas</a>. Seguramente más de una de las ofertas laborales que encontrarás ha sido hecha para ti.</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Ofertas Laborales</h2>
          <p>Si buscas empleo de acuerdo a tu perfil profesional entonces realiza una búsqueda de ofertas laborales y encuentra aquella que ha sido hecha para ti.</p>
          <p><a class="btn btn-default" href="<?php echo $ol_url; ?>" role="button">Continuar &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Listado de Empresas</h2>
          <p>Si buscas empleo en una empresa en particular pues échale un vistazo a nuestro listado de empresas y encuentra la lista de empleos que ofrece dicha empresa.</p>
          <p><a class="btn btn-default" href="<?php echo $le_url; ?>" role="button">Continuar &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Contáctenos</h2>
          <p>¿No encuentras la empresa que buscabas? ¿Hay alguna falla en la página? ¿Algo que se pueda mejorar? No dudes en ponerte en contacto con nosotros. Estaremos felices de prestar atención a tus dudas y sugerencias.</p>
          <p><a class="btn btn-default" href="<?php echo $co_url; ?>" role="button">Continuar &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; GatiTrabajos <?php echo date('Y'); ?>. Una página creada con puro <a href="http://codigolindo.com" target="_blank">CodigoLindo</a></p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo $assets_url; ?>js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo $assets_url; ?>js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo $assets_url; ?>js/plugins.js"></script>
        <script src="<?php echo $assets_url; ?>js/main.js"></script>

        <?php echo $google_analytics; ?>
    </body>
</html>
