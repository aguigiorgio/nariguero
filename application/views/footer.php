</div>
  </section>

  <footer id="footer"><!--Footer-->

    <div class="footer-widget">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <div class="single-widget">
              <h2>Nariconfort</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="<?=base_url()?>index.php/About/mision">Misión y Visión</a></li>
                <li><a href="<?=base_url()?>index.php/About/valores">Valores</a></li>
                <li><a href="<?=base_url()?>index.php/About/politicas">Política de privacidad</a></li>
                <li><a href="<?=base_url()?>index.php/About/condiciones">Condiciones de uso</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="single-widget">
              <h2>Menu</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="<?=base_url()?>index.php/AdminClientes/agregar_cliente">Registrarse</a></li>
                <li><a href="<?=base_url()?>index.php/Logueo/iniciar_sesion">Iniciar sesión</a></li>
                <li><a href="<?=base_url()?>index.php/About/FAQ">Preguntas frecuentes</a></li>
                <li><a href="<?=base_url()?>index.php/About/contacto">Contáctanos</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-widget">
              <h2>Boletín</h2>
              <form class="searchform" method="post">
                <input type="text" id="correo" name="correo_boletin" placeholder="correo electrónico" />
                <button type="button" id="btnboletin" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                <p>Obtén noticias y actualizaciones del sitio.</p>
              </form>
            </div>
          </div>
          <div class="col-sm-4 col-sm-offset-1">
            <div class="single-widget">
              <img src="<?=base_url()?>images/nariconfort120.png">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <p class="pull-left">Copyright © 2017 Nariconfort. Derechos reservados.</p>
        </div>
      </div>
    </div>

  </footer><!--/Footer-->

  <script src="<?=base_url()?>js/jquery.js"></script>
  <script src="<?=base_url()?>js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>js/jquery.scrollUp.min.js"></script>
  <script src="<?=base_url()?>js/price-range.js"></script>
  <script src="<?=base_url()?>js/jquery.prettyPhoto.js"></script>
  <script src="<?=base_url()?>js/main.js"></script>
  
  <script type="text/javascript">

  $("#btnboletin").click(function(){
    $.ajax({
      type: "POST",
      dataType: 'json',
      data: {'correo_boletin': $("#correo").val()}, //valor debes reemplazar con algo valido, de esta manera puedes enviar el numero de variables que necesites.
      url: "<?=base_url()?>index.php/Boletin/suscripcion",
      success : function(data) {
        switch (data) {
          case 0:
            swal('¡Registro exitoso!','Su correo ha sido almacenado correctamente.','success');
            break;
          case 1:
            swal('No se pudo registrar','Error de conexión','error');
          break;
          case 2:
            swal('No se pudo registrar','verifique que su correo electrónico sea correcto','error');
          break;
          case 3:
            swal('Correo existente','Su correo ya se ha registrado anteriormente','error');
          break;
        }

      }
    });
  });
  </script>
  <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        country: 'short_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcsAYsrp83Zxi-gCcocettUkCFdvQBHzY&libraries=places&callback=initAutocomplete"
        async defer></script>

</body>
</html>
