<!-- Archivo principal que muestra/READ toda la información de las tareas y además nos permite
borrar/DELETE a una de ellas. La gestión del creado y editado (CREATE & DELETE) se gestiona en
otros archivos.
-->

<!-- CRUD: READ & DELETE -->
<?php
  session_start(); // Accedemos a las variables de sesión
  include("./controllers/TasksController.php");

  // VISUALIZACIÓN DE TAREAS COMO JEFE DE DEPARTAMENTO
  if ($_SESSION['login_jefe_dpto'] === true) {

    // DELETE TASK
    if (isset($_GET['txtID'])) {
      $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";

      // MENSAJE AVISO BORRADO TAREA
      $alertBorrado = $tasksController->DeleteTasks($txtID);
      header("Location:index_tasks.php?mensaje=" . $alertBorrado);
    }

    // VISUALIZACIÓN DE TODAS LAS TAREAS DE UN EMPLEADO EN CONCRETO COMO JEFE DEPARTAMENTO
    if (isset($_GET["empleado_ID"])) {
      // READ
      $empleado_ID = (isset($_GET['empleado_ID'])) ? $_GET['empleado_ID'] : "";
      $lista_tbl_tareas= $tasksController->ReadTasksDptoSpecific($empleado_ID);
      
    // VISUALIZACIÓN POR DEFECTO DE TODAS LAS TAREAS DEL DEPARTAMENTO SIN FILTRAR
    } else {
      // READ
      $id_dpto = $_SESSION['id_dpto'];
      $lista_tbl_tareas= $tasksController->ReadTasksDptoGeneral($id_dpto);
    }

  // VISUALIZACIÓN DE TAREAS CÓMO EMPLEADO
  } else if ($_SESSION['login_empleado'] === true) {
    // READ
    $id_empleado = (isset($_SESSION['id_empleado'])) ? $_SESSION['id_empleado'] : "";
    $lista_tbl_tareas= $tasksController->ReadTasksDptoSpecific($id_empleado);
  }
?>



<!-- HEADER -->
<?php
  include("../../templates/header.php");
?>

<!-- VIEW -->
<?php
  include("./view/TasksView.php");
?>

<!-- FOOTER -->
<?php
  include("../../templates/footer.php");
?>