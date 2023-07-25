<?php

// ----------------------------------------------------------------
// En este archivo empieza la aplicacion.
// ----------------------------------------------------------------
require_once './controllers/bootcampController.php';
require_once './models/bootcampModel.php';

$controller = new BootcampController();
$controller->index();

?>