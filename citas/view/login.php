<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../view/css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="title-user">
			<h1>Iniciar Sesion</h1>
		</div>
		<div class="form-user">	
			<form action="../controller/login.php?user=login" method="post">
				<label for="user">Usuario</label>
				<input type="text" name="user">
				<label for="password">Contraseña</label>
				<input type="text" name="password">
				<input type="submit" value="Enviar">
			</form>
			<?php 
				if(isset($result)){
					if($result == 2){
						echo 'Usuario y/o contraseña incorrectos';
					}
				}
			?>
		</div>
		<div class="footer">SMGroup &copy; All rights reserved Copyright 2015</div>
	</div>
</body>
</html>