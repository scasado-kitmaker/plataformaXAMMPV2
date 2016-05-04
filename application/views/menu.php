<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">       
	<!--Estilos-->
	<link href="<?=base_url()?>/public/assets/css/style.css" rel='stylesheet' type='text/css' />

	<link rel="shortcut icon" type="image/ico" href="<?=base_url()?>/public/assets/images/favicon.ico"/>
</head>
<body>
	<div id="header">		
		<img  src="<?=base_url()?>/public/assets/images/header2.png">
	</div>
	<!--Menu principal y codigo para resaltar el boton de la página donde estamos-->
	<div class="show_entries">
		<div class="menuBotones"> 
			<?php if (!empty($estado)) : ?>
				<?php foreach($saldo as $estadof) : ?>
					<?php $estadoz = $estadof->estado_alta?>
				<?php endforeach; ?>
			<?php endif; ?>
			<ul>
				<?php
				$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
				$var1='1';
				$varVerde1=' ';
				$varVerde2=' ';
				$varVerde3=' ';
				$varVerde4=' ';
				$varVerde5=' ';
				//vista login
				if ($actual_link =='http://localhost/plataforma/index.php/users/login/') {
					$varVerde1='principal';
				}else{
					$varVerde1=' ';
				}
				//vista alta
				if ($actual_link =='http://localhost/plataforma/index.php/plataforma/alta/') {
					$varVerde2='principal';
				}else{
					$varVerde2=' ';
				}
				//vista baja
				if ($actual_link =='http://localhost/plataforma/index.php/plataforma/baja/') {
					$varVerde3='principal';
				}else{
					$varVerde3=' ';
				}
				//vista about
				if ($actual_link =='http://localhost/plataforma/index.php/plataforma/about/') {
					$varVerde4='principal';
				}else{
					$varVerde4=' ';
				}
				if ($actual_link =='http://localhost/plataforma/index.php/webservices/webservice_getSaldo/') {
					$varVerde5='principal';
				}else{
					$varVerde5=' ';
				}
				if ($actual_link =='http://localhost/plataforma/index.php') {
					$varVerde5='principal';
				}
				?>
				<li>					
					<?php
					if ($this->session->userdata('is_logged_in')){
						echo anchor(base_url().'index.php/users/logout/','Hola, '.$this->session->userdata('username'). ' logout ');
						$var1=0;
					}				
					else
					{
						echo anchor(base_url().'index.php/users/login/',' Login ','class="'.$varVerde1.'"');
					}				
					?>
				</li>
				<li>
					<?php
					if ($this->session->userdata('is_logged_in'))
					{
						echo anchor(base_url().'index.php/webservices/webservice_getSaldo/','Panel de control','class="'.$varVerde5.'"');
					}
					?>
				</li>

				<!--Si se esta dado de alta en el servicio-->
				<li>
					<?php
					echo anchor(base_url().'index.php/plataforma/about/',' About ','class="'.$varVerde4.'"');
					?>
				</li>
			</ul>	
		</div>
		<hr class="style13"/>
	</div>
</body>
