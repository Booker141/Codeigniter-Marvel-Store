
<?php 
	if(!$good_logged){
?>
		<script>
			$(document).ready(function()
			{
				$("#myModal2").modal("show");
			});
		</script>
<?php
	}
?>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="70">   
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-right">

		<?php
			if($user!=-1){	
        ?>
				<li><a href="<?= base_url();?>index.php/main/carrito"><span class="glyphicon glyphicon-shopping-cart"></span><strong>Carrito</strong><span class="badge"><?=$Cantidad?></span></a></li>
				<li><a href="<?= base_url();?>index.php/main/cuenta"><span class="glyphicon glyphicon-user"></span> <strong>Configuración</strong></a></li>
				<li><a href="<?= base_url();?>"><strong>Cerrar sesión</strong></a></li>
        <?php
			}else{	
        ?>
		
				<li><a href="#myModal5" data-toggle="modal" data-target="#myModal5" style="color:white;font-style:oblique;font-size:16;"><span class="glyphicon glyphicon-wrench" style="color:white;"></span><strong>Administrar</strong></a></li>
				<li><a href="<?= base_url();?>index.php/envio_email" style="color:white;font-style:oblique;font-size:16;"><span class="glyphicon glyphicon-edit"></span> <strong>Registrarse</strong></a></li>
				<li><a href="#myModal2" data-toggle="modal" data-target="#myModal2" style="color:white;font-style:oblique;font-size:16;"><span class="glyphicon glyphicon-log-in" style="color:white;"></span><strong>  Iniciar sesión</strong></a></li>
        <?php
			}
		?>
		</ul>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<img src="http://localhost:8080/stanleetribute/images/SLT.svg" width="35%"/>
		</div>
		<div class="col-sm-8">
			<h2 style="font-family:bebas-neue, sans-serif;color:red;font-size:80px;"><strong>StanLee Tribute</strong></h2>
		</div>
	</div>
</div>

<br/>
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="70" style="z-index:100;">
	<div class="container">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="<?= base_url();?>index.php/main/inicio_view" style="font-size:23px;font-family:bebas-neue, sans-serif;margin-left:10px;margin-right:160px;"><strong>Inicio</strong></a>
				</li>
				<li><a href="<?= base_url();?>index.php/main/Camisetas"style="font-family:bebas-neue, sans-serif;color:red;font-size:20px;">Camisetas</a></li>
				<li><a href="<?= base_url();?>index.php/main/Tazas"style="font-family:bebas-neue, sans-serif;color:red;font-size:20px;">Tazas</a></li>
				<li><a href="<?= base_url();?>index.php/main/Disfraces"style="font-family:bebas-neue, sans-serif;color:red;font-size:20px;">Disfraces</a></li>
				<li><a href="<?= base_url();?>index.php/main/Peluches"style="font-family:bebas-neue, sans-serif;color:red;font-size:20px;">Peluches</a></li>
				<li><a href="<?= base_url();?>index.php/main/Complementos"style="font-family:bebas-neue, sans-serif;color:red;font-size:20px;">Complementos</a></li>
				<li><a href="<?= base_url();?>index.php/main/Otros"style="font-family:bebas-neue, sans-serif;color:red;font-size:20px;">Otros</a></li>
				<li><a href="<?= base_url();?>index.php/main/mostrar_todos"style="font-family:bebas-neue, sans-serif;color:red;font-size:20px;">Mostrar todos</a></li>
			</ul>
		</div>
	</div>
</nav>

<div id="myModal2" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Login</h4>
			</div>
			<div class="modal-body">
			<?php 
				if(!$good_logged){ 
			?>
					<div class="alert alert-danger">
						<strong>¡Error!</strong> Usuario y/o contraseña incorrectos.
					</div>
            <?php
				}
			?>
           
				<?=form_open(base_url().'index.php/Cuenta/login')?>
				<div class="form-group">
					<label for="nombre">Usuario:</label>
					<input type="text" class="form-control" name="nombre" placeholder="Introduzca su usuario" required>
				</div>
				<div class="form-group">
					<label for="pass">Contraseña:</label>
					<input type="password" class="form-control" name="pass" placeholder="Introduzca su contraseña" required>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-default">Iniciar sesión</button>
			<?php
				echo form_close();
				if($this->session->flashdata('usuario_incorrecto')){
            ?>
					<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
            <?php
				}
            ?>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			</div>
		</div>
	</div>
</div>

<div id="myModal5" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modo admin</h4>
			</div>
			<div class="modal-body">
           
			<?php 
				if(!$good_logged){
            ?>
					<div class="alert alert-danger">
						<strong>¡Error!</strong> Usuario y/o contraseña incorrectos.
					</div>
            <?php
				}
			?>
				<?=form_open(base_url().'index.php/Cuenta/login_admin')?>
				<div class="form-group">
					<label for="admin">Usuario:</label>
					<input type="text" class="form-control" name="admin" placeholder="admin" required>
				</div>
				<div class="form-group">
					<label for="pass">Contraseña:</label>
					<input type="password" class="form-control" name="pass" placeholder="1234" required>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-default">Acceder</button>
			<?php
				echo form_close() ;
				if($this->session->flashdata('usuario_incorrecto')){
            ?>
                    <p><?=$this->session->flashdata('usuario_incorrecto')?></p>
            <?php
				}
            ?>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			</div>
			<hr/>
			<?= validation_errors(); ?>
		</div>
	</div>
</div>