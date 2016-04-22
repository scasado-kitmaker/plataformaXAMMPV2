<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Aviso saldo</title> 
	<!--Estilos-->
	<link rel="shortcut icon" type="image/ico" href="http://localhost/blog/public/assets/images/favicon.ico"/>
</head>
<body>
	<!--vista de menu-->
	<?php include('menu.php');?>

	<!--Formulario para ingresar dinero en la cuenta-->
	<div class="show_entries" >		
		<p>Necesitas $$$, ingresa $$$, el ingreso minimo es de 5 $</p>
		<?=form_open(base_url().'index.php/plataforma/alta/')?>
		<p>Cantidad:</p>
		<input type="radio" name="quantity">5$
		<input type="radio" name="quantity">10$
		<input type="radio" name="quantity">20$
		<input type="number" name="quantity" min="5" max="50000000000" placeholder="custom ammount">$
		<p>Texto legal:</p>
		<p><?=form_textarea('content','Texto legal to complicado shur','readonly')?></p>	
		<input type="checkbox" name="checkAlta"> He leido y acepto la condiciones<br>
		<?=form_submit('submit', 'Ingresar dinero')?>
	</div>	
</body>
</html>