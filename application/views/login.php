<!DOCTYPE html>
<html lang="es">
<head>
<title><?php echo $title;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//use.edgefonts.net/bebas-neue.js"></script>
</head>
<body>

<div class="container">
  <h2 style="font-family:bebas-neue, sans-serif;color:red;">Iniciar sesión</h2>
 <?=form_open(site_url().'Cuenta/login')?>
    <div class="form-group">
      <label for="correo" style="font-family:bebas-neue, sans-serif;color:red;">Correo:</label>
      <input type="text" class="form-control" id="correo" placeholder="manolito@gmail.com">
    </div>
    <div class="form-group">
      <label for="contraseña" style="font-family:bebas-neue, sans-serif;color:red;">Contraseña:</label>
      <input type="text" class="form-control" name="contraseña" placeholder="contrasenia">
	  
    </div>
   
    <button type="submit" class="btn btn-default">Iniciar sesión</button>
  <?php echo form_close() ;
	if($this->session->flashdata('usuario_incorrecto')){
					?>
					<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
					<?php
	}
					?>
</div>

</body>
</html>
