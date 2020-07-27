<br>
<div class="row">
  <div class="col-md-5">
    <form class="" action="<?=base_url()?>index.php/About/contacto" method="post">
      <label for="">Nombre:</label>
      <input class="form-control" type="text" name="nombre" value="<?=set_value('nombre')?>">
      <label for="">Asunto:</label>
      <input class="form-control" type="text" name="asunto" value="<?=set_value('asunto')?>" required>
      <label for="">Correo:</label>
      <input class="form-control" type="text" name="correo" value="<?=set_value('correo')?>" required>
      <label for="">Mensaje:</label>
      <textarea class="form-control" name="mensaje" cols="80" rows="8">
        <?=ltrim(set_value('mensaje'))?>
      </textarea><br>
      <button class="btn btn-info pull-right" type="submit" name="button"><i class="fa fa-envelope-o"></i> Enviar mensaje</button>
    </form>
  </div>
  <div class="col-md-7">
    <img src="<?=base_url()?>images/Contactanos.png" alt="">
    <br><br>
    <?php
      if (isset($mensaje) && $mensaje == "Ok") {
        echo "<div class='alert alert-success' role='alert'><i class='fa fa-check' aria-hidden='true'></i>
         <b>Mensaje enviado correctamente.</b> Su mensaje será leído y contestado lo más pronto posible.</div>";
      }
      echo validation_errors();
     ?>
  </div>
</div>
<br>
