<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/pagina.controlador.php";
require_once "modelos/pagina.modelo.php";
$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();
?>