
<div class="container" id="f1">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        
            <h1 style="font-family:bebas-neue, sans-serif;color:red;">Registro</h1>
            <?= form_open(base_url()."index.php/envio_email/nuevo_usuario") ;?>
            
                <label for="nombre">Nombre:</label>
                <div class="input-group">
					<input type="text" name="nombre" value="<?php echo set_value('nombre') ?>" placeholder="Francisco Lee Mucho" required />                
					</div>
				<input type="hidden" name="grabar" value="si" />
                <br />
				<label for="usuario">Usuario:</label>
				<div class="input-group">
					<input type="text" name="usuario" value="<?php echo set_value('usuario') ?>" placeholder="VivaStanLee69" required/>
                <label for="correo">Correo:</label>
                <div class="input-group">
                    <input type="email" name="correo" value="<?php echo set_value('correo') ?>" placeholder="stanleemaquinafiera@gmail.com" required />
                </div>
                <br />
                <label for="contraseña">Contraseña:</label>
                <div class="input-groupd">
                    <input type="password" name="contraseña" placeholder="pasguord" required />
                </div>
                <br />
                
                <br />
                <input type="hidden" name="rol" value="user" /> 
                <br />
                <font color="black" style="font-weight: bold; font-size: 11px; text-decoration: underline"><?php echo validation_errors(); ?></font>
				<input type="submit" value="Registrarse" title="Registrarse" />
				<?php echo form_close() ?>
			
        </div>
   
    <div class="col-md-3"></div>
</div>

<style>
    #panel1
    {
        padding: 10px 20px;
        background: #f4f7f8;
        border-radius: 8px;
    }

    h1
    {	
		color:white;
        margin: 0 0 30px 0;
        text-align: center;
    }

    #f1 input[type="text"],
    #f1 input[type="password"],
    #f1 input[type="date"],
    #f1 input[type="datetime"],
    #f1 input[type="email"],
    #f1 input[type="number"],
    #f1 input[type="search"],
    #f1 input[type="tel"],
    #f1 input[type="time"],
    #f1 input[type="url"],
    #f1 textarea,
    #f1 select
    {
        background: rgba(255,255,255,0.1);
        
        font-size: 16px;
        height: auto;
        margin: 0;
        outline: 0;
        padding: 15px;
        width: 100%;
        background-color: #fff;
        color: #8a97a0;
        box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    }

    #f1 textarea,
    #f1 select
    {
        border: 1px solid #ccc;
    }

    #f1 input[type="radio"],
    #f1 input[type="checkbox"]
    {
        margin: 0 4px 8px 0;
    }

    #f1 .sui-sprite.sui-calendar-icon
    {
        margin-top: 14px;
    }

    #b1
    {
        padding: 19px 39px 18px 39px;
        color: #FFF;
        background-color: #4bc970;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        border-radius: 5px;
        width: 100%;
        border: 1px solid #3ac162;
        border-width: 1px 1px 3px;
        box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
        margin-bottom: 10px;
    }

    fieldset
    {
        margin-bottom: 30px;
        border: none;
    }

    legend
    {	
		color:white;
		font-style:oblique;
        font-size: 1.4em;
        margin-bottom: 10px;
    }

    label
    {
		color:white;
		font-style:inherit;
        display: block;
        margin-bottom: 8px;
    }

        label.light
        {
            font-weight: 300;
            display: inline;
        }

    .number
    {
        background-color: #5fcf80;
        color: #fff;
        height: 30px;
        width: 30px;
        display: inline-block;
        font-size: 0.8em;
        margin-right: 4px;
        line-height: 30px;
        text-align: center;
        text-shadow: 0 1px 0 rgba(255,255,255,0.2);
        border-radius: 100%;
    }

    #footer
    {
        font-size: 10px;
        text-align: center;
        font-weight: bold;
    }

    #passwordMatch
    {
        text-align: center;
    }

    .input-group-addon
    {
        background-color: #e8eeef;
    }

    #or
    {
        text-align: center;
        font-weight: bold;
    }

    .social
    {
        list-style-type: none;
        background: #29AFBB;
        height: 52px;
        border: 2px solid#218C95;
    }

        .social li
        {
            padding-right: 20px;
            display: inline-block;
            font-size: 27px;
            border-bottom: 5px solid#29AFBB;
            cursor: pointer;
            margin-top: 5px;
        }

            .social li a
            {
                color: #fff;
                vertical-align: -webkit-baseline-middle;
            }
</style>

<script type="text/javascript">
    jQuery(function ($) {
        $(function () {
            $("#dateTimePicker").shieldDatePicker();

            $('#confirmPass').on('keyup', function () {
                if ($('#confirmPass').val() == $('#pass').val()) {
                    $('#passwordMatch').html('Passwords match!').css('color', 'black');
                }
                else {
                    $('#passwordMatch').html('Passwords do not match!').css('color', 'red');
                }
            });
        });
    });
</script>