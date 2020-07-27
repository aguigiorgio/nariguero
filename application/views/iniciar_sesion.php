<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <h1>Iniciar sesión</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-5 col-md-offset-1">
    <div class="panel panel-primary">
      <div class="panel-heading">Ingrese los datos correspondientes</div>
      <div class="panel-body">
        <form action="<?=base_url()?>index.php/Logueo/iniciar_sesion" method="post">
          <label for="correo">Correo electrónico</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
            <input type="text" class="form-control" name="correo" placeholder="correo@ejemplo.com" aria-describedby="basic-addon1">
          </div>
          <br>
          <label for="contrasena">Contraseña</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" name="contrasena" placeholder="**********" aria-describedby="basic-addon1">
          </div>
          <br>
          <button type="submit" class="btn btn-info btn-lg btn-block">Iniciar sesión</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="col-xs-9 col-xs-offset-3">
      <img src="<?=base_url()?>images/login.png" alt=""><br><br>
    </div><br><br>
    <center><p><b>Ingrese sus datos correctamente para accesar</b></p></center>
    <?php if (isset($mensaje) && $mensaje == "NOK"): ?>
      <?php echo "<script>swal('No se pudo registrar','verifique su usuario y/o contraseña','error');</script>";?>
    <?php endif; ?>
    <?=validation_errors()?>
  </div>
</div>
