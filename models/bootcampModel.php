<?php
    //Como viene y como luce nuestra informacion
    
    class Bootcamp{
        private $conexion;

        public function __construct(){
            $this->conexion = new mysqli('127.0.0.1','root','','kodigo');
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