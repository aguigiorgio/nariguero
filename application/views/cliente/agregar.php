<div class="row">
  <div class="col-md-12">
    <h2>Registro de cliente</h2>
  </div>
  <div class="col-md-6">
    <br>
          <form action="<?=base_url()?>index.php/AdminClientes/agregar_cliente" method="post">
            <div class="col-xs-12">
              <label for="nombre">Nombre(s):</label>
              <input class="form-control" type="text" name="nombre" required value="<?=set_value('nombre')?>">
            </div>
            <div class="col-xs-6">
              <label for="apaterno">Apellido paterno</label>
              <input class="form-control" type="text" name="apaterno" required value="<?=set_value('apaterno')?>">
            </div>
            <div class="col-xs-6">
              <label for="amaterno">Apellido materno</label>
              <input class="form-control" type="text" name="amaterno" required value="<?=set_value('amaterno')?>">
            </div>
            <div class="col-xs-12">
              <label for="direccion">Domicilio:</label>
              <input class="form-control" type="text" name="domicilio" id="autocomplete" required onFocus="geolocate()" value="<?=set_value('domicilio')?>">
                <span class="label label-primary">utilice el nombre de su domicilio o código postal para buscar su ubicación</span>
            </div>

            <input type="hidden" name="calle" id="route" readonly="true"></input>
            <input type="hidden" name="ciudad" id="locality" readonly="true"></input>
            <input type="hidden" name="estado" id="administrative_area_level_1" readonly="true"></input>
            <input type="hidden" name="cp" id="postal_code" readonly="true"></input>
            <input type="hidden" name="pais" id="country" readonly="true"></input>
            <input type="hidden" name="numero" id="street_number" readonly="true"></input>

            <div class="col-xs-6">
              <label for="email">Correo electrónico:</label>
              <input class="form-control" type="mail" name="email" required value="<?=set_value('email')?>">
            </div>
            <div class="col-xs-6">
              <label for="telefono">Teléfono:</label>
              <input class="form-control" type="tel" name="telefono" required value="<?=set_value('telefono')?>">
            </div>
            <div class="col-xs-6">
              <label for="contrasenia">Contraseña:</label>
              <input class="form-control" type="password" required name="contrasenia">
            </div>
            <div class="col-xs-6">
              <label for="contrasenia">Confirmar contraseña:</label>
              <input class="form-control" type="password" required name="contrasenia2">
            </div>
            <div class="col-xs-12">
              <br>
              <input class="btn btn-info pull-right" id="submit" type="submit" value="Registrar ahora">
              <br><br><br>
            </div>
          </form>
  </div>
  <div class="col-md-6">
    <div class="col-xs-12">
      <br>
      <img src="<?=base_url()?>images/Registrarse.png" alt="">
      <br><br>
      <?php if (isset($mensaje)): ?>
        <?=$mensaje?>
      <?php endif; ?>
      <?=validation_errors()?>
    </div>
  </div>
  </div>
