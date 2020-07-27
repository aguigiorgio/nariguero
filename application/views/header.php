<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sitio de desarrollo y venta de narigueros">
    <meta name="author" content="Desarrollados por grupo académico de desarrollo e innovación tecnológica ITST">
    <title> Nariconfort | <?=$titulo?></title>
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>css/main.css" rel="stylesheet">
    <link href="<?=base_url()?>css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>images/ico/apple-touch-icon-57-precomposed.png">

</head><!--/head-->

<body>
  <header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="contactinfo">
              <ul class="nav nav-pills">
                <li><a href="#"><i class="fa fa-phone"></i> +52 1 241 121 1747</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> soporte@nariconfort.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="pull-right">

            </div>
          </div>
        </div>
      </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="logo pull-left">
              <a href="<?=base_url()?>"><img src="<?=base_url()?>images/nariconfort2.png" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">
              <li><a href="<?=base_url()?>"><i class="fa fa-home"></i> Inicio</a></li>
              <?php if (isset($_SESSION['email'])): ?>
                <li><a href="#"><i class="fa fa-user"></i> Cuenta</a></li>
                <li><a href="<?=base_url()?>index.php/Logueo/cerrar_sesion"><i class="fa fa-lock"></i> Cerrar sesión</a></li>
              <?php else: ?>
                <li><a href="<?=base_url()?>index.php/About/contacto"><i class="fa fa-pencil" aria-hidden="true"></i> Contacto</a></li>
                <li><a href="<?=base_url()?>index.php/AdminClientes/agregar_cliente"><i class="fa fa-pencil-square-o"></i> Registrarse</a></li>
                <li><a href="<?=base_url()?>index.php/Logueo/iniciar_sesion"><i class="fa fa-lock"></i> Iniciar sesión</a></li>
              <?php endif ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-middle-->

  </header><!--/header-->

  <section>
    <div class="container">
