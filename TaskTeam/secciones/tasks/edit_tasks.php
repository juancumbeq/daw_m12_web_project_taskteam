<!-- Archivo encargado de manejar el método UPDATE -->

<!-- CRUD: UPDATE -->
<?php
  include("./controllers/TasksController.php");

  // UPDATE DE LOS DATOS DE LA TAREA EN LA BBDD
  if ($_POST) {
    $tasksController->UpdateTasks($_POST);
  }

  // SELECT / VISUALIZACIÓN CAMPOS DE LA TAREA SELECCIONADA
  if (isset($_GET['txtID'])) {
    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";
    $results = $tasksController->FixedDataUpdateForm($txtID);
    $tarea = $results['tarea'];
    $empleados = $results['empleados'];

    // EXTRACCIÓN DE LOS DATOS DE LA QUERY
    $nombre_tarea = $tarea["nombre_tarea"];
    $fecha_inicio = $tarea["fecha_inicio"];
    $fecha_entrega = $tarea["fecha_entrega"];
    $estado_tarea = $tarea["estado_tarea"];

    $id_empleado = $tarea["id_empleado_FK"];
    $id_dpto = $tarea["id_jefe_dpto_FK"];

    $nom_empleado_asignado = $tarea["nom_empleado_asignado"];
    $nombre_dpto = $tarea["nombre_dpto"];
  }
?>



<!-- HEADER -->
<?php
  include("../../templates/header.php");
?>

<!-- VIEW -->
<?php
  include("./view/EditTasksView.php");
?>

<!-- FOOTER -->
<?php
  include("../../templates/footer.php");
?>