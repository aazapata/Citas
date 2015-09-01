<?php
	include('../model/Connection.php');
	include('../model/cls_Users.php');

	if(isset($_GET['user'])){
		$objUser = new cls_Users();

		$user = $_GET['user'];
		switch ($user) {
			case 'register':
				if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['phone']) && 
					isset($_POST['cel']) && isset($_POST['identification']) && isset($_POST['email']) && 
					isset($_POST['password']) && isset($_POST['confirm-password']) && isset($_POST['birth']))
					
					if ($_POST['password'] == $_POST['confirm-password']) {
						$objUser->set_name($_POST['name']);
						$objUser->set_lastname($_POST['lastname']);
						$objUser->set_phone($_POST['phone']);
						$objUser->set_cell($_POST['cel']);
						$objUser->set_identification($_POST['identification']);
						$objUser->set_email($_POST['email']);
						$objUser->set_password($_POST['password']);
						$objUser->set_birth_date($_POST['birth']);

						$result = $objUser->newUser();
					}
					else {
						$result = 2;
					}					
			break;
			
			default:
				# code...
			break;
		}
	}


	include("../view/usuario.php");
?>