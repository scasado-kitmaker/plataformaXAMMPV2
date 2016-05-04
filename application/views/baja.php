<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Baja en el servicio</title> 
	<!--Estilos-->	
	<link href='base_url()'.'/public/assets/css/style.css' rel='stylesheet' type='text/css' />
</head>
<body>
	<!--vista de menu-->
	<?php include('menu.php');?>
	<!--Formulario para aceptar el alta en el servicio-->
	<div class="show_entries" >
		<?=form_open(base_url().'index.php/plataforma/delete_servicio/')?>
		<p>Texto legal:</p>
		<textarea class="estiloarea" readonly="">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pulvinar rutrum magna eu hendrerit. Etiam quis justo porta, dapibus mauris eget, iaculis est. Proin in lorem posuere, lacinia lacus non, ultricies elit. Donec iaculis venenatis mi, at sodales libero venenatis sed. Sed dui tortor, volutpat sit amet tristique ut, ullamcorper egestas lectus. In eget felis diam. Nam sit amet efficitur ex. Ut sollicitudin euismod commodo.

			Nunc quis arcu mauris. Donec sit amet purus quis velit tristique cursus egestas sed eros. Fusce dictum placerat mi, nec volutpat nulla posuere vel. Nulla facilisi. Curabitur congue dui at felis facilisis, sed commodo enim faucibus. Pellentesque suscipit posuere eros ut rutrum. Sed semper egestas metus, eu iaculis arcu placerat vitae. Vivamus finibus vulputate ex, nec eleifend est vehicula a. Quisque malesuada posuere tellus nec varius. Morbi molestie leo suscipit velit posuere feugiat. Aliquam erat volutpat.

			Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin varius elit eget leo gravida, eu mollis justo eleifend. Maecenas sed massa turpis. Proin interdum ex purus, at molestie ante porttitor sed. Cras convallis ante in accumsan aliquet. Sed interdum tristique lobortis. Suspendisse potenti. Nam erat ex, lobortis sed nulla et, accumsan pharetra magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus a hendrerit enim. Nullam ac sagittis ipsum, iaculis egestas nulla.
		</textarea>
		<br/>
		<p>
			<input type="checkbox"  id="terminos" required >
			He leido y acepto la condiciones			 
		</p>
		<?=form_submit('submit', 'Darse de baja')?>
	</div>
</body>
</html>