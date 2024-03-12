<!-- Archivo encargado de manejar el método CREATE -->

<!-- CRUD: CREATE -->
<?php

  // ACCESO A LAS VARIABLES SE SESION
  session_start();

  // VERIFICAMOS QUE QUIEN ACCEDE A ESTA PÁGINA ES UN JEFE DE DEPARTAMENTO
  if (!isset($_SESSION["login_jefe_dpto"])) {
    $url_base = "http://localhost/DAW_FP/M12_WebApp/";
    session_destroy();
    header("Location:" . $url_base . "login/login.php");
  }

  // CONTROLADOR DEL CRUD
  include("./controllers/TasksController.php");

  // INSERCIÓN DE LOS DATOS 
  if ($_POST) {
    $tasksController->CreateTasks($_POST);
  }

  //* VISUALIZACIÓN PARA CAMPOS SELECT
  $id_dpto = $_SESSION["id_dpto"];
  $empleados = $tasksController->FixedDataCreateForm($id_dpto);
?>



<!-- HEADER -->
<?php
  include("../../templates/header.php");
?>

<!-- VIEW -->
<?php
  include("./view/CreateTasksView.php");
?>

<!-- FOOTER -->
<?php
  include("../../templates/footer.php");
?>