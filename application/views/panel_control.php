<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Alta en el servicio</title> 
	<!--Estilos-->
	<link rel="shortcut icon" type="image/ico" href="http://localhost/blog/public/assets/images/favicon.ico"/>
</head>
<body>
	<!--vista de menu-->
	<?php include('menu.php');?>
	<?php if (!empty($usuario)) : ?>
		<?php foreach($usuario as $userf) : ?>
			<?php $telefonoz = $userf->telefono ?>
			<?php $passwordz = $userf->password ?>
			<?php $saldoz = $userf->saldo ?>
			<?php $estadoz= $userf->estado_alta?>
		<?php endforeach; ?>
		<!-- If there is no info -->

	<?php endif; ?>

	<div class="show_entries">
		<?=form_open(base_url().'index.php/users/validatePass/')?>
		<p>Teléfono:</p> <?php echo $telefonoz ?>
		<p>Cambiar contraseña:</p>
		<div style="display:none; ">
			<p><?=form_input('username',$telefonoz,'placeholder="Usuario"')?></p> 
		</div>  
		<p><?=form_password('password','','placeholder="Introduce tu contraseña actual para cambiarla"')?></p>
		<?=form_submit('submit', 'Actualizar contraseña')?>
		<!--<p>Saldo: 	
			<?php
			
			//print_r ($dinero);

			if (in_array('SUCCESS', $dinero)) {
				echo 'Tienes saldo';
			}
			if (in_array('NO_FUNDS', $dinero)) {
				echo 'No tiene saldo';
			}
			if (in_array('CHARGING_ERROR', $dinero)) {
				echo 'An error ocurred, please try again';
			}

			?>-->
		</p>
		<!--<?php echo $saldoz.'$'.'	'.'<a href="http://localhost/plataforma/index.php/plataforma/aviso_saldo/">Añadir saldo</a> ' ?>-->
		<p>Estado suscripción:	
		<?php 
		if($estadoz>0)
		{
			echo 'Activa <a href="http://localhost/plataforma/index.php/plataforma/baja/">	Dar de baja</a>';
		}
		else
		{
			if (in_array('SUCCESS', $dinero)) 
			{
				echo 'No activa <a href="http://localhost/plataforma/index.php/plataforma/alta/">	Dar de alta</a>';
			}
			if (in_array('CHARGING_ERROR', $dinero)) 
			{
				echo 'An error ocurred, please try again';
			}
			if(in_array('NO_FUNDS', $dinero))
			{
				echo 'No activa. Debe de agregar saldo para activar la suscripción.';
			}
			
		}
		?>
		</p>
	</div>

</body>
</html>