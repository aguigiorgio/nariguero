<div class="row">
  <div class="col-md-7">
    <div class="panel panel-success">
      <div class="panel-heading">Panel heading without title</div>
      <div class="panel-body">
        <div class="col-xs-6">
            <img width="80%" height="auto" src="<?=base_url()?>images/venta.png" alt="">
        </div>
        <div class="col-xs-6">
          <?php foreach ($resultado as $key): ?>
            <p><?=$key->nombre_producto?></p>
          <div class="col-xs-12">
            <form class="" action="<?=base_url()?>index.php/Paypal/buy" method="post">
              <label for="">Precio</label>
              <p><?=$key->precio_producto_venta?></p>
              <input type="hidden" name="numero" value="<?=$key->precio_producto_venta?>">
              <?php endforeach; ?>
              <label for="numero">Cantidad:</label><br>
              <input class="form-control" type="number" name="cantidad" min="1" max="50" value="<?=set_value('numero')?>">
              <button type="submit" class="btn btn-info btn-block"name="button"><i class="fa fa-money" aria-hidden="true"></i>   Realizar compra</button>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-5">

  </div>
</div>
