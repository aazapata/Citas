<?php
	class appointment{
		private $user_id;
		private $appointment_id;
		private $status_user;
		private $date_acept;

		public function __construct(){

		}

		public function set_user_id($user_id){
			$this->user_id = $user_id;
		}

		public function get_user_id(){
			return $this->user_id;
		}

		public function set_appointment_id($appointment_id){
			$this->appointment_id = $appointment_id;
		}

		public function get_appointment_id(){
			return $this->appointment_id;
		}

		public function set_status_user($status_user){
			$this->status_user = $status_user;
		}

		public function get_status_user(){
			return $this->status_user;
		}

		public function set_date_acept($date_acept){
			$this->date_acept = $date_acept;
		}

		public function get_date_acept(){
			return $this->date_acept;
		}
	}

?>