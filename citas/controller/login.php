<?php
	include('../model/Connection.php');
	include('../model/cls_Users.php');

	if(isset($_GET['user'])){
		$objUser = new cls_Users();

		$user = $_GET['user'];
		switch ($user) {
			case 'login':
				if(isset($_POST['user']) && isset($_POST['password'])){
					$objUser->set_email($_POST['user']);
					$objUser->set_password($_POST['password']);

					$result = $objUser->VerificarUsuario();
					if(count($result) > 0 && $result['password'] == $_POST['password']){
						if($result['rol'] == 1){
							header('location: ../view/admin.php');
						}else{
							header('location: ../view/editUser.php');
						}
					}
					else{
						$result = 2;
					}
				}
			break;
			default:
				# code...
			break;
		}
	}

	include("../view/login.php");
?>