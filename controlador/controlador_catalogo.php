<?php

require_once("../MODELO/modelo_catalogo.php");
require_once("../MODELO/IniciarSesion.php");
require_once ("../conexion/Conexion.php");

$Productos =new registrar_productos();
$sesion = new IniciarSession();
$conexion = new Conexion();

$conectar = $conexion->Conexion();

$boton=$_POST['signin'];  

 if($boton == 'ingresar'){
  $user = $_POST['UserLogin'];
  $pass = $_POST['PasswordLogin'];  
  $sesion->Iniciar($user, $pass,$conectar);

 }


?>