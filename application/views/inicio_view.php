<?php 
    $user_id = $this->uri->segment(3,0);
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>



  <div class="carousel-inner" role="listbox" style="height:450">
    

    <div class="item active">
      <center><img src="http://localhost:8080/stanleetribute/images/ofertasMarvel.jpg" width="400" alt="500"></center>

    </div>

    <div class="item">
      <center><img src="http://localhost:8080/stanleetribute/images/Camiseta/camiseta3.jpg" width="400" alt="500"></center>
      <div class="carousel-caption">
        <h3>Artículos</h3>
      </div>
    </div>

    <div class="item">
      <center><img src="http://localhost:8080/stanleetribute/images/Tazas/taza1.jpg"  width="400" alt="500"></center>
      <div class="carousel-caption">
        <h3><a style="color:red;" href="<?= base_url();?>index.php/envio_email">¡Regístrate!</a></h3>
        
      </div>
    </div>
  </div>

  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
   
    <div class="container">

        <hr>


        <div class="row">
            <div class="col-lg-12">
                <h2 style="font-family:bebas-neue, sans-serif;color:red;font-style:oblique;">Categorías</h3>
            </div>
        </div>


        <div class="row text-center">

            <div class="col-md-6 col-sm-9 hero-feature">
                <div>
                    <img src="http://localhost:8080/stanleetribute/images/Camiseta/camiseta1.jpg" width="40%">
                    <div>
						<h3><a style="font-family:bebas-neue, sans-serif;color:red;" href="<?= base_url();?>index.php/main/Camisetas/<?=$this->uri->segment(3);?>" >Camisetas</a></h3>


                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-9 hero-feature">
                <div>
                    <img src="http://localhost:8080/stanleetribute/images/Tazas/taza2.jpg" width="40%">
                    <div class="caption">
					<h3><a style="font-family:bebas-neue, sans-serif;color:red;" href="<?= base_url();?>index.php/main/Tazas/<?=$this->uri->segment(3);?>" >Tazas</a></h3>
                      
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-9 hero-feature">
                <div>
                    <img src="http://localhost:8080/stanleetribute/images/Disfraces/disfraz2.jpg" width="40%">
                    <div class="caption">
					<h3><a style="font-family:bebas-neue, sans-serif;color:red;" href="<?= base_url();?>index.php/main/Disfraces/<?=$this->uri->segment(3);?>" >Disfraces</a></h3>
                    
                        
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-9 hero-feature">
                <div>
                    <img src="http://localhost:8080/stanleetribute/images/Peluches/peluche1.jpg" width="40%" >
                    <div class="caption">
                        <h3><a style="font-family:bebas-neue, sans-serif;color:red;" href="<?= base_url();?>index.php/main/Peluches/<?=$this->uri->segment(3);?>" >Peluches</a></h3>
                        
                    </div>
                </div>
            </div>
			
			<div class="col-md-6 col-sm-9 hero-feature">
                <div>
                    <img src="http://localhost:8080/stanleetribute/images/Complementos/complemento3.jpg" width="40%" >
                    <div class="caption">
                        <h3><a style="font-family:bebas-neue, sans-serif;color:red;" href="<?= base_url();?>index.php/main/Complementos/<?=$this->uri->segment(3);?>" >Complementos</a></h3>
                        
                    </div>
                </div>
            </div>

			<div class="col-md-6 col-sm-9 hero-feature">
                <div>
                    <img src="http://localhost:8080/stanleetribute/images/Otros/otro3.jpg" width="40%" >
                    <div class="caption">
                        <h3><a style="font-family:bebas-neue, sans-serif;color:red;" href="<?= base_url();?>index.php/main/Otros/<?=$this->uri->segment(3);?>" >Otros</a></h3>
                        
                    </div>
                </div>
            </div>
			
        </div>
        
    </div>
    
