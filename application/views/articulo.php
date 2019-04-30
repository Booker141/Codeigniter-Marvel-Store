<?php 
    $user_id = $this->uri->segment(3,0);
?>


<div class="container">
<div class="row">
<?php 
    $Id_Articulo = $this->uri->segment(4);
    foreach($articulo as $fila){
	    if($fila->Id == $Id_Articulo){?>
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://localhost:8080/stanleetribute/images/<?=$fila->Imagen?>" alt="img">
              
        </div>
      
    </div>
  </div>
  </div>
  <div class="col-sm-4">
    <div>
		<h1 style="font-family:bebas-neue, sans-serif;color:red;"><?=$fila->Titulo?><br><h3 style="font-family:bebas-neue, sans-serif;color:red;"><?=$fila->Descripcion?></h3></h1>
		<p><?=$fila->Cuerpo?><br/></p>
		<h1 style="font-family:Impact, Charcoal, sans-serif;color:black;font-style:oblique;"><?=$fila->Precio?> €</h1>    
		<h3 style="font-family:bebas-neue, sans-serif;color:red;">Stock:<small style="color:black;font-style:oblique;"> <?=$fila->Stock?></small></h3>
		<h1><?php if($user_id==0){
                echo '<a href="#myModal" data-toggle="modal" data-target="#myModal2" class="btn btn-danger">Login</a>';
            }else{
            ?><a href="<?=base_url()?>index.php/pages/add_cart/<?=$user_id?>/<?=$fila->Id?>" class="btn btn-success">Comprar</a><?php
            }?> 
        </h1>
    </div>
   
  </div>

<hr>
<?php     
      }
    }?> 
</div>

</div><br>

