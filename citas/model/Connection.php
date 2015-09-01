<?php
    class Connection{
        public $servidor='localhost';
        public $usuario='root';
        public $password='';
        public $base_datos='db_appointments_smgroup';
        public $connect;

        
        public function __construct(){
            if(!isset($this->connect)){
              $this->connect = new PDO("mysql:host=".$this->servidor.";dbname=".$this->base_datos, $this->usuario, $this->password, array(PDO::ATTR_PERSISTENT => true));
              $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return $this->connect;
        }

        public function Query($query){
            return $this->connect->query($query);
        }

        public function DML($dml){
            return $this->connect->Exec($dml);
        }

        public function __clone() {
            trigger_error('Este objeto no se puede clonar ', E_USER_ERROR);
        }
    } 
?>