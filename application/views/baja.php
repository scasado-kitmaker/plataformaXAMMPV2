<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Baja en el servicio</title> 
	<!--Estilos-->
	<link rel="shortcut icon" type="image/ico" href="http://localhost/blog/public/assets/images/favicon.ico"/>
</head>
<body>
	<!--vista de menu-->
	<?php include('menu.php');?>

	<!--Formulario para aceptar el alta en el servicio-->
	<div class="show_entries" >
		<?=form_open(base_url().'index.php/plataforma/alta/')?>
		<p>Texto legal:</p>
		<p><?=form_textarea('content','Texto legal to complicado shur','readonly')?></p>	
		<input type="checkbox" name="vehicle" value="Bike"> He leido y acepto la condiciones<br>
		<?=form_submit('submit', 'Darse de baja')?>
	</div>
</body>
</html>