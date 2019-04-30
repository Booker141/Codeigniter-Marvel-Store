
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="70">   
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="<?= site_url();?>carrito"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito <span class="badge"><?= $cant = 0?></span></a></li>
			<li><a href="<?= base_url();?>index.php/cuenta"><span class="glyphicon glyphicon-user"></span> Configuración</a></li>
            <li><a href="<?= site_url();?>Cuenta/logout"> Cerrar sesion </a></li>
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