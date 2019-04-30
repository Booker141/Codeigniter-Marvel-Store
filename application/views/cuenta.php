
<html lang="es">
<head>

 <div class="container">
     
      
      <h2 style="font-family:bebas-neue, sans-serif;color:red;">Cambiar contraseña</h2>

      
            <div class="row">
            <div class="col-sm-8">
              
              <ul class="list-group">
                   <?php
				   $Id_Usuario = $this->uri->segment(3);
                  foreach($usuario as $fila)
                  {
					  if($fila->Id == $Id_Usuario){
                  ?>
                     <li class="list-group-item">
                         <div class="row">
                          <?= form_open(site_url()."pages/cambia_pass/".$Id_Usuario) ;
						  $old_pass = $fila->Contraseña;
						 ?>
                            <div class="col-sm-2">
                                <h4 style="font-family:bebas-neue, sans-serif;color:red;">Contraseña: </h4>
                             </div>
							 <td>
						Nueva contraseña:
					</td>
					<td>
						<input type="text" name="nueva_pass" value="<?php echo set_value('nueva_pass') ?>" />
					</td>
					
                             
                             
                             <div class="col-sm-2">
                                <button type="submit" class="btn btn-default">Cambiar </button>
                             </div>
                            <?= form_close();?>
                         </div>
                         
                     </li> 
                  <?php 
                 }
                  }
                  ?>
                </ul>
              
            </div>
           
      
    </div>
</div>