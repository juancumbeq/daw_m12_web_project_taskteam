<!-- Archivo encargado de manejar el método CREATE -->

<!-- CRUD: CREATE -->
<?php

  // ACCESO A LAS VARIABLES SE SESION
  session_start();
  include("./controllers/EmployeesController.php");

  // INSERCIÓN DE LOS DATOS 
  if ($_POST) {
    $employeesController->CreateEmployees($_POST);
  }

  // VISUALIZACIÓN PARA CAMPOS SELECT
  $id_dpto = $_SESSION["id_dpto"];
  $results = $employeesController->FixedDataCreateForm($id_dpto);
  $lista_tbl_puestos = $results['lista_tbl_puestos'];
  $lista_tbl_departamentos = $results['lista_tbl_departamentos'];
?>


<!-- HEADER -->
<?php
  include("../../templates/header.php");
?>

<!-- VIEW -->
<?php
  include("./view/CreateEmployeesView.php");
?>

<!-- FOOTER -->
<?php
  include("../../templates/footer.php");
?>
