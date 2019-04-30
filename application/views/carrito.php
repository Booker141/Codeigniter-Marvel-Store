
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <ul class="list-group">
              <?php
                  $precio_total = 0;
                  foreach($articulo as $fila)
                  {
                  ?>
                     <li class="list-group-item">
                            <div class="media">
                             <div class="row">
                             <div class="col-sm-8">
                              <div class="media-left">
                                <img src="http://localhost:8080/stanleetribute/images/<?=$fila->Imagen?>" class="media-object" style="width:60px" alt='img'>
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading" style="font-family:bebas-neue, sans-serif;color:red;"><?=$fila->Titulo?></h4>
                                <p><?=$fila->Descripcion?></p>
                              </div>
                              </div>
                              <div class="col-sm-1">
                                <p>Precio: <?=$fila->Precio?> €</p>
                              </div>
                              <form action="<?= base_url()?>index.php/pages/cambia_cantidad/<?=$user ?>/<?=$fila->Id?>" method="post">
                              <div class="col-sm-1">
                                  Cantidad: 
                                <input type="number" name="cantidad" min="1" max="99" value=1 required>
                              </div>
                              <div class="col-sm-2">
                                  <button type="submit" class="btn btn-success">Cambiar</button>
                                  <a href="<?= base_url()?>index.php/pages/borrar_del_pedido/<?=$user ?>/<?=$fila->Id?>">Eliminar</a> 
                              </div>
                              </form>
                            </div>
                          </div>
                      </li> 
                  <?php 
                    $precio_total+= $fila->Precio;   
                  }
                  ?> 
            </ul>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-default">
            <div class="panel-heading"><center>Precio total</center></div>
            <div class="panel-body">

                <center><h3 style="font-family:bebas-neue, sans-serif;color:red;"><?= $precio_total?> €</h3></center>
            </div>
            </div>
            <center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Comprar</button></center>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="font-family:bebas-neue, sans-serif;color:red;">Pedido</h4>
      </div>
      <div class="modal-body">
        <p>¿Desea realizar la compra?</p>
      </div>
      <div class="modal-footer">
          <a href="<?= base_url()?>index.php/pages/realiza_pedido/<?=$user?>"><button type="button" class="btn btn-default" >Aceptar</button></a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </div>

  </div>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>