<?=@$error?>
<div id="formulario_imagenes">
    <span><?php echo validation_errors(); ?></span>
	<?=form_open_multipart(site_url()."admin")?>
		<label style="font-family:bebas-neue, sans-serif;color:red;">Nombre:</label><input type="text" name="titulo" />
		<label style="font-family:bebas-neue, sans-serif;color:red;">Imagen:</label><input type="file" name="imagen" /><br/><br/>
		<input type="submit" value="Subir" />
	<?=form_close()?>
</div>