<div class="container">
     <ul class="nav nav-tabs " style="color:black;">
      <li class="list-group-item-success"><a data-toggle="tab" href="#Articulos" style="font-family:bebas-neue, sans-serif;color:red;">Artículos</a></li>
      
    </ul>

    <div class="tab-content">
      <div id="Articulos" class="tab-pane fade in active">
           <div class="row">
            <div class="col-sm-8">
              
              <ul class="list-group">
                  <?php
                  foreach($articulo as $fila)
                  {
                  ?>
                     <li class="list-group-item-success">
                            <div class="media">
                              <div class="media-left">
                                <img src="http://localhost:8080/stanleetribute/images/<?=$fila->Imagen?>" class="media-object" style="width:50px" alt='img'>
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading" style="font-family:bebas-neue, sans-serif;color:red;"><?=$fila->Titulo?></h4>
                                <h3 style="font-family:bebas-neue, sans-serif;color:red;"><?=$fila->Descripcion?></h3>
								<p><?=$fila->Cuerpo?></p>
                              </div>
                              <div class="media-right">
                                <p>Precio:<br> <?=$fila->Precio?> €</p>
                                <span class="badge">Stock: <?=$fila->Stock?></span>
                                <a onclick="if(confirma() == false) return false" href="<?=base_url()?>index.php/pages/borrar_articulo/<?=$fila->Id?>/<?=$fila->Imagen?>"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-remove"></span> </button></a>
                                </div>
                          </div>
                      </li> 
                  <?php      
                  }
                  ?>
                </ul>
              
            </div>
            <div class="col-sm-4" >
                <div class="panel panel-success">
                  <div class="panel-heading">Añadir Artículo</div>
                  <div class="panel-body">
                      
                        <form action="<?= base_url();?>index.php/admin/subir" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="sel1">Tipo:</label>
                              <select class="form-control" name="Id_Tipo">
                                <option value="1">Camiseta</option>
                                <option value="2">Taza</option>
                                <option value="3">Disfraz</option>
                                <option value="4">Peluche</option>
							                	<option value="5">Complemento</option>
							                	<option value="6">Otro</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="titulo">Título:</label>
                              <input type="text" class="form-control" name="Titulo" required>
                          </div>
                          <div class="form-group">
                              <label for="descripcion">Descripción:</label>
                              <textarea class="form-control" rows="5" name="Descripcion" required></textarea>
                          </div>
                          <div class="form-group">
                              <label for="cuerpo">Cuerpo:</label>
                              <textarea class="form-control" rows="5" name="Cuerpo" required></textarea>
                          </div>
                          <div class="form-group">
                            <label for="imagen">Imagen:</label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                            <input type="file" name="imagen" id="imagen" required/>
                          </div>
                          
                          <div class="form-group">
                              <div class="col-xs-6">
                                  <label for="precio">Precio:</label>
                                  <input class="form-control" name="Precio" type="text" required>
                                </div>
                                <div class="col-xs-6">
                                  <label for="stock">Stock:</label>
                                  <input class="form-control" name="Stock" type="text" required>
                                </div>
                          </div>
                          <br><br><br><br>
                          
                          <button type="submit" class="btn btn-default">Añadir</button>
                        </form>
                      
                  </div>
                </div>
            </div>
          </div>
      </div>
    
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Eliminar</h4>
      </div>
      <div class="modal-body">
        <p>¿Está seguro de que desea eliminar el artículo?</p>
      </div>
      <div class="modal-footer">
        <a href="<?= base_url();?>index.php/admin"><button type="button" class="btn btn-danger" data-dismiss="modal">Aceptar</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </div>

  </div>
</div>