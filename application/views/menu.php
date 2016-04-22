<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">       
	<!--Estilos-->
	<link href='http://localhost/blog/public/assets/css/style.css' rel='stylesheet' type='text/css' />
	<!--Scripts-->
	<script src="http://localhost/blog/public/assets/js/toastr.js"></script>	
	<script type="text/javascript" src="http://localhost/blog/public/assets/js/jquery.cookiebar.js"></script> 
	<script type="text/javascript"> 
		$(document).ready(function()
		{
			$.cookieBar();
		});
	</script>
</head>
<body>
	<div id="header">		
		<img  src="http://localhost/blog/public/assets/images/header2.png">
	</div>

	<!--Menu principal y codigo para resaltar el boton de la página donde estamos-->
	<div class="show_entries">
		<div class="menuBotones"> 
			<ul>
				<li>					
					<?php
					echo anchor(base_url().'index.php/plataforma/login/',' Login ');
					?>
				</li>

				<li>					
					<?php
					echo anchor(base_url().'index.php/plataforma/alta/',' Alta ');
					?>
				</li>

				<li>
					<?php
					echo anchor(base_url().'index.php/plataforma/baja/',' Baja ');
					?>
				</li>

				<li>
					<?php
					echo anchor(base_url().'index.php/plataforma/about/',' About ');
					?>
				</li>

				<!-- LI DE TEST-->
				<li>
					<?php
					echo anchor(base_url().'index.php/plataforma/aviso_saldo/',' aviso_saldo ');
					?>
				</li>
				<li>
					<?php
					echo anchor(base_url().'index.php/plataforma/logs/',' logs ');
					?>
				</li>

			</ul>	
		</div>
		<hr class="style13"/>
	</div>
</body>
</body>