
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrarse</title>
</head>
<body>
<fieldset>
	<legend style="font-family:bebas-neue, sans-serif;color:red;">Registro</legend>
		<?= form_open(site_url()."envio_email/nuevo_usuario") ;?>
			<table>
				<tr>
					<td>
						Nombre:
					</td>
					<td>
						<input type="text" name="Nombre" value="<?php echo set_value('Nombre') ?>" required />
					</td>
				</tr>
				<tr><input type="hidden" name="grabar" value="si" />
					<td>
						Usuario:
					</td>
					<td>
						<input type="text" name="Usuario" value="<?php echo set_value('Usuario') ?>" required/>
					<td>
						Email:
					</td>
					<td>
						<input type="text" name="Correo" value="<?php echo set_value('Correo') ?>" required/>
					</td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="Id_Rol" value=2 required/>
					</td>
				</tr>
				<tr>
					<td>
						Contraseña:
					</td>
					<td>
						<input type="password" name="Contraseña" required/>
					</td>
				</tr>
				<tr>
				<td></td>
				<td>
					 <font color="black" style="font-weight: bold; font-size: 14px; text-decoration: underline"><?php echo validation_errors(); ?></font>
				</td>
			</tr>
				<tr>
					<td>
					
					</td>
					<td>
						<input style="color:black;" type="submit" value="Registrarse" title="Registrarse" />
					</td>
				</tr>
			</table>
		<?php echo form_close() ?>
</fieldset>
</body>
</html>
