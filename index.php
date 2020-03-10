<?php
require_once 'controladores/plantilla.controlador.php'; 

require_once 'modelos/rutas.modelo.php'; 
require_once "extensiones/PHPMailer/PHPMailerAutoload.php";
require_once "extensiones/vendor/autoload.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();