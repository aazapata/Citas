<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Usuario</title>
	<link rel="stylesheet" type="text/css" href="../view/css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="title-user">
			<h1>Resgitrate para solicitar una cita o <a href="../view/login.php">[Ingresa aquí]</a></h1>
		</div>
		<div class="form-user">	
			<form action="../controller/user.php?user=register" method="post">
				<label for="name">Nombre</label>
				<input type="text" name="name">
				<label for="lastname">Apellido</label>
				<input type="text" name="lastname">
				<label for="phone">Telefono</label>
				<input type="text" name="phone">
				<label for="cell">Celular</label>
				<input type="text" name="cel">
				<label for="identification">Nro Identificación</label>
				<input type="text" name="identification">
				<label for="email">Correo electronico</label>
				<input type="email" name="email">
				<label for="password">Contraseña</label>
				<input type="text" name="password">
				<label for="password">Confirmar Contraseña</label>
				<input type="text" name="confirm-password">
				<label for="birth">Fecha de nacimiento</label>
				<input type="date" name="birth">
				<input type="submit" value="Enviar">

				<?php 
					if(isset($result)){
						if($result == 1){
							echo "Resgitro con exito";
						}
						else if($result == 2){
							echo "Las contraseñas no coinciden";
						}
					} 
				?>
			</form>
		</div>

		<div class="footer">SMGroup &copy; All rights reserved Copyright 2015<a href="../view/login.php">(+)</a></div>
	</div>
</body>
</html>