<?php 
	include('../model/Connection.php');
	include('../model/cls_Users.php');
	if(isset($_GET['user'])){
		$objUser = new cls_Users();

		switch ($_GET['user']) {
			case 'list':
				$resultlist = $objUser->listarUsuario();

			  	$table = '<table style="width:100%">
						  <tr>
						    <td>Nombre</td>
						    <td>Apellido</td> 
						    <td>Telefono</td>
						    <td>Celular</td>
						    <td>Identicación</td> 
						    <td>Correo</td>
						    <td>Nacimiento</td>
						    <td style="color: red;">Eliminar</td>
						    <td style="color: blue;">Asignar cita</td>
						  </tr>';

				foreach ($resultlist as $item) {
					$table .= '<tr>';
					$table .= '<td>'.$item['name'].'</td>';
					$table .= '<td>'.$item['lastname'].'</td>';
					$table .= '<td>'.$item['phone'].'</td>';
					$table .= '<td>'.$item['cell'].'</td>';
					$table .= '<td>'.$item['identification'].'</td>';
					$table .= '<td>'.$item['email'].'</td>';
					$table .= '<td>'.$item['birth_date'].'</td>';
					$table .= '<td><a href="listUser.php?user=deleteUser&id='.$item['id'].'"><img src="http://www.unipamplona.edu.co/unipamplona/hermesoft/portalIG/GruposIG/publico/ayuda/images/eliminar.gif" title="Eliminar usuario"></a></td>';
					$table .= '</tr>';
				}
				$table .= '</table>';

				$result = $table;

				break;
				
				case 'deleteUser':
					if(isset($_GET['id'])){
						$objUser->set_id($_GET['id']);
						$resuldelete = $objUser->eliminarUsuario();

						if($resuldelete == 1){
							header('Location: ../controller/listUser.php?user=list');
						}
					}
				break;
			default:
				# code...
				break;
		}
	}

	include('../view/admin.php');
?>