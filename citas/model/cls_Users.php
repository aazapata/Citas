<?php 
	class cls_Users{
		private $id;
		private $rol;
		private $identification;
		private $name;
		private $lastname;
		private $email;
		private $password;
		private $phone;
		private $cell;
		private $birth_date;
		private $date_register;
		private $connect;

		public function __construct(){
      		$this->connect = new Connection();
		}

		public function newUser(){
			$ins = "INSERT INTO users (rol, identification, name, lastname, email, password, phone, cell, birth_date) 
					VALUES(2,'".$this->get_identification()."','".$this->get_name()."','".$this->get_lastname()."','".$this->get_email()."','".$this->get_password()."','".$this->get_phone()."','".$this->get_cell()."','".$this->get_birth_date()."')";

		  	return $this->connect->DML($ins);
		}

		public function VerificarUsuario(){
			$query = "SELECT * FROM users WHERE email = '".$this->get_email()."' AND password = '".$this->get_password()."'";
			return $this->connect->Query($query)->fetch(PDO::FETCH_ASSOC); //NUM - BOTH;
		}

		public function listarUsuario(){
			$query = "SELECT * FROM users WHERE rol = 2";
			return $this->connect->Query($query)->fetchAll(PDO::FETCH_ASSOC);
		}

		public function eliminarUsuario(){
			$delete = "DELETE FROM users WHERE id = '".$this->get_id()."'";
			return $this->connect->DML($delete);
		}

		// public function modificarUsuario(){
		// 	$update = "UPDATE users SET name='".$this->get_name()."', lastname='".$this->get_lastname.()"', email='".$this->get_email()."', phone='".$this->get_phone()."', cell='".$this->get_cell()."', birth_date='".$this->get_birth_date()."'
		// 			   WHERE id = '".$this->get_id()."'";
		// 	return $this->connect->DML($update);
		// }

		public function set_id($id){
			$this->id = $id;
		}

		public function get_id(){
			return $this->id;
		}

		public function set_rol($rol){
			$this->rol = $id;
		}

		public function get_rol(){
			return $this->rol;
		}

		public function set_identification($identification){
			$this->identification = $identification;
		}

		public function get_identification(){
			return $this->identification;
		}

		public function set_name($name){
			$this->name = $name;
		}

		public function get_name(){
			return $this->name;
		}

		public function set_lastname($lastname){
			$this->lastname = $lastname;
		}

		public function get_lastname(){
			return $this->lastname;
		}

		public function set_email($email){
			$this->email = $email;
		}

		public function get_email(){
			return $this->email;
		}

		public function set_password($password){
			$this->password = $password;
		}

		public function get_password(){
			return $this->password;
		}

		public function set_phone($phone){
			$this->phone = $phone;
		}

		public function get_phone(){
			return $this->phone;
		}

		public function set_cell($cell){
			$this->cell = $cell;
		}

		public function get_cell(){
			return $this->cell;
		}

		public function set_birth_date($birth_date){
			$this->birth_date = $birth_date;
		}

		public function get_birth_date(){
			return $this->birth_date;
		}
		
		public function set_date_register($date_register){
			$this->date_register = $date_register;
		}

		public function get_date_register(){
			return $this->date_register;
		}
	}

?>