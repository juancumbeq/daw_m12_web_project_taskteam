<!-- Archivo principal del CASO DE USO: LOGIN
en este archivo hacemos uso de las partes del MVC -->

<?php

try {
  if($_POST){
    
    // OBJETOS NECESARIOS
    include("./controller/LoginController.php");

    // PASAMOS LOS DATOS DEL FORMULARIO
    $loginResult = $loginController->login($_POST);

    // SI HAY MENSAJE LOS MOSTRAMOS POR PANTALLA
    if(!empty($loginResult) && $loginResult !== null){
      $mensaje = $loginResult;
    }
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>

<?php
  include("./view/LoginView.php");
?>