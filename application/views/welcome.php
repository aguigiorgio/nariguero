<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NariConfort: El mejor cuidado para tu ganado.</title>
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>css/bootflat.css">
    <link href="<?=base_url()?>css/carousel.css" rel="stylesheet">
		<link href="<?=base_url()?>css/font-awesome.css" rel="stylesheet">
    <style media="screen">
      #logo{
        position: absolute;
        top:5px;
        left:20px;
      }
      .acopla{
        background-size: cover;
      }
      .cuadro{
        background-color: rgba(0, 0, 0, 0.3);
        border-radius: 5px;
      }
    </style>
  </head>
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img id="logo" height="36" width="242" src="<?=base_url()?>images/nariconfort.png" alt="Nariconfort Logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="<?=base_url()?>"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
                <li><a href="<?=base_url()?>index.php/AdminClientes/agregar_cliente"> <i class="fa fa-user" aria-hidden="true"></i> Registro</a></li>
                <li><a href="<?=base_url()?>index.php/AdminClientes/nosotros"><i class="fa fa-info-circle" aria-hidden="true"></i> Nosotros</a></li>
                <li><a id="viewcart" href="#">[ <i class="fa fa-cart-plus" aria-hidden="true"></i> Ver Carrito ]</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?=base_url()?>images/backgroundregistro.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption cuadro">
              <h1>Regístrese</h1>
              <p>Llene el formulario de registro para estar informado de ofertas, así como
              conocer disponibilidad de productos y realizar pedidos de producto.</p>
              <p><a class="btn btn-lg btn-success" href="#" role="button">Registrarse ahora</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide acopla" src="<?=base_url()?>images/backgroundslide2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption cuadro">
              <h1>¡Compre ahora!</h1>
              <p>¿Desea adquirir nuestro producto? Clic en el siguiente enlace para comenzar el proceso de compra.</p>
              <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="add" value="1">
                <input type="hidden" name="business" value="aguigiorgio@gmail.com">
                <input type="hidden" name="item_name" value="Nariguero">
                <input type="hidden" name="item_number" value="Nar-123">
                <input type="hidden" name="amount" value="5.95">
                <input type="hidden" name="shipping" value="1.00">
                <input type="hidden" name="shipping2" value="0.50">
                <input type="hidden" name="handling" value="2.00 ">
                <input type="hidden" name="currency_code" value="MXN">
                <input type="hidden" name="return" value="<?=base_url()?>">
                <input type="hidden" name="undefined_quantity" value="1">
                <input type="image" src="https://www.paypalobjects.com/webstatic/es_MX/mktg/logos-buttons/redesign/btn_13.png" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro.">
              </form>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?=base_url()?>images/slide3.png" alt="Third slide">

        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <div class="row">
        <div class="col-md-7">
          <h3>Compre ahora con nosotros.</h3>
          <p>Realice el pedido de nariguero por medio
          de nuestro sitio de internet de una manera
          fácil, rápida y segura.</p>
        </div>
        <div class="col-md-5">
          <label for="">¡Pague con cualquier tarjeta de débito!</label>
          <p>Utilice la tarjeta de débito de su preferencia para pagar a través de Paypal.</p>
          <img src="https://www.paypalobjects.com/digitalassets/c/website/marketing/latam/mx/logos-buttons/updated-logo/tarjetas-debito-2-1.png" alt="Check out with PayPal" />
          <br><br>
          <center><form method="post" action="https://www.paypal.com/cgi-bin/webscr">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="add" value="1">
            <input type="hidden" name="business" value="aguigiorgio@gmail.com">
            <input type="hidden" name="item_name" value="Nariguero">
            <input type="hidden" name="item_number" value="Nar-123">
            <input type="hidden" name="amount" value="5.95">
            <input type="hidden" name="shipping" value="1.00">
            <input type="hidden" name="shipping2" value="0.50">
            <input type="hidden" name="handling" value="2.00 ">
            <input type="hidden" name="currency_code" value="MXN">
            <input type="hidden" name="return" value="<?=base_url()?>">
            <input type="hidden" name="undefined_quantity" value="1">
            <input type="image" src="https://www.paypalobjects.com/webstatic/es_MX/mktg/logos-buttons/redesign/btn_13.png" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro.">
          </form></center>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2>Producto de calidad</h2>
          <p class="lead">Nuestro producto se distingue por ser realizado cuidadosamente por medio de ingenieros y docentes
          especializados en distintas ramas, así también se ha construido con materiales resistentes a temperaturas
          extremas y golpes.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="<?=base_url()?>images/nariconfort2.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Un precio inigualable.</h2>
          <p class="lead">NariConfort tiene una gran responsabilidad con los practicantes de la ganadería, y es por ello que el.
            diseño de su producto está realizado con precios accesibles sin perder su calidad.
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" style="border-radius:5px;" src="<?=base_url()?>images/nari2.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
      <footer>
        <p class="pull-right"><a href="#">Ir arriba</a></p>
        <p>&copy; 2017 NariConfort. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Términos y condiciones</a></p>
      </footer>

    </div>
    <script src="<?=base_url()?>js/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/minicart/3.0.5/minicart.min.js"></script>
		<script>
		    paypal.minicart.render();

				$('#viewcart').click(function (e) {
			e.stopPropagation();
			paypal.minicart.view.show();
		});
		</script>
  </body>
</html>
