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
			<h1>Bienvenido administrador</h1>
		</div>
		<div class="content-item">
			<a href="../controller/listUser.php?user=list">
				<div class="item_admin"><span>Listar usuarios</span></div>
			</a>
		</div>

		<div class="content-table">
				<?php
					if(isset($result))
						echo $result;
				?>
		</div>
		<div class="footer">SMGroup &copy; All rights reserved Copyright 2015</div>
	</div>
</body>
</html>