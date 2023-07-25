<?php
    //Como viene y como luce nuestra informacion
    require_once './config.php';
    class Bootcamp{
        private $conexion;

        public function __construct(){
            $this->conexion = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            if($this->conexion->connect_error){
                die("Conexión Fallida: ".$this->conexion->connect_error);
            }else{
                echo "Conexión establecida.";
            }
        }

        public function get_bootcamps(){
            $sql = "SELECT * FROM  bootcamps";
            $result = $this->conexion->query($sql);
            $bootcamps = array();

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $bootcamps[] = $row;
                }
            }
            return $bootcamps;
        }
    }
?>