<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar datos</title>
	<link rel="stylesheet" type="text/css" href="../view/css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="title-user">
			<h1>Actualiza tus datos</h1>
		</div>
		<div class="form-user">	
			<form action="../controller/updateUser.php?user=update" method="post">
				<label for="name">Nombre</label>
				<input type="text" name="name">
				<label for="lastname">Apellido</label>
				<input type="text" name="lastname">
				<label for="phone">Telefono</label>
				<input type="text" name="phone">
				<label for="cell">Celular</label>
				<input type="text" name="cel">
				<label for="email">Correo electronico</label>
				<input type="email" name="email">
				<label for="birth">Fecha de nacimiento</label>
				<input type="date" name="birth">
				<input type="submit" value="Actualizar">

				<?php 
					if(isset($result)){
						if($result == 1){
							echo "Datos actualizados";
						}
						else if($result == 2){
							echo "Hubo un problema";
						}
					} 
				?>
			</form>
		</div>

		<div class="footer">SMGroup &copy; All rights reserved Copyright 2015</div>
	</div>
</body>
</html>