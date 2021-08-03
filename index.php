<?php

// se requiere utilizar los controladores
require_once "controladores/plantilla.controlador.php";
require_once "controladores/inicio.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/enviarCorreo.controlador.php";


// se requiere utilizar los modelos
require_once "modelos/inicio.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/rutas.php";


// PLUGINS
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../libs/PHPMailer/Exception.php';
require '../libs/PHPMailer/PHPMailer.php';
require '../libs/PHPMailer/SMTP.php';

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();