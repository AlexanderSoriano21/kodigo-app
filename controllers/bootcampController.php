<?php

class BootcampController{

    public $bootcamp;

    public function __construct(){
        $this->bootcamp = new Bootcamp();
    }
    
    public function index(){
        //Controlador de modelos
        $bootcamps = $this->bootcamp->get_bootcamps();

        //Controlar las vistas
        include '../views/bootcampView.php';
    }
}

?>