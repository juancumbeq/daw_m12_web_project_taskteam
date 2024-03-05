<?php
// DATOS DEL SERVIDOR QUE ALOJA LA DATABASE

$servidor = "localhost"; //127.0.0.1
$baseDatos = "daw_m12_app";
$usuario = "root";
$password = "";

try {
  // EJECUTA UNA CONEXIÓN HACIA LA DATABASE
  $conexion = new PDO("mysql:host=$servidor; dbname=$baseDatos", $usuario, $password);
} catch (Exception $ex) {
  
  // EN CASO DE ERROR SE MUESTRA UN MENSAJE POR PANTALLA
  echo $ex->getMessage();
}
?>

