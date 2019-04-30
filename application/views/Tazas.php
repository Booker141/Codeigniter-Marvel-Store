<?php 
    $user_id = $this->uri->segment(3,0);
?>
 <div class="container">    
  
  <?php
    $cont=1; 
    foreach($articulo as $fila){
    if($cont% 4==0){
        echo '<div class="row">';
    }
    if($fila->Id_Tipo == 2){      
      ?>
            <div class="col-md-6 col-sm-9 hero-feature">
                <div>
                 <img src="http://localhost:8080/stanleetribute/images/Tazas/<?=$fila->Imagen?>" width="50%">
                    <div class="caption">
                        <h3 style="font-family:bebas-neue, sans-serif;color:red;"><?=$fila->Titulo?></h3>
                        <b style="font-family:bebas-neue, sans-serif;color:red;">Precio: </b> <big style="font-family:Impact, Charcoal, sans-serif;color:black;font-style:oblique;"><?=$fila->Precio?> €</big>
                        <p>
                            <?php if($user_id==0){
                                echo '<a href="#myModal" data-toggle="modal" data-target="#myModal2" class="btn btn-danger">Login</a>';
                            }else{
                            ?><a href="<?=base_url()?>index.php/pages/add_cart/<?=$user_id?>/<?=$fila->Id?>" class="btn btn-success">Comprar</a><?php
                            }?> 
                            <a href="<?=base_url()?>index.php/main/articulo/<?=$user_id?>/<?=$fila->Id?>" class="btn btn-default">Ir al artículo</a>
                        </p>
         </div>
                </div>
            </div>
	<?php
    }
    if($cont% 4==0){
        echo '</div>';
    }
    $cont=$cont+1;
    }
     ?> 
</div>

<br><br>
