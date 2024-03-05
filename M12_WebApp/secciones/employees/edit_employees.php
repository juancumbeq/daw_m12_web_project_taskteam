<!-- Archivo encargado de manejar el método UPDATE -->

<!-- CRUD: UPDATE -->
<?php

  // ACCESO A LAS VARIABLES SE SESION
  // session_start();
  include("./controllers/EmployeesController.php");

  //  UPDATE DE LOS DATOS 
  if ($_POST) {
    $employeesController->UpdateEmployees($_POST);
  }

  // VISUALIZACIÓN PARA CAMPOS SELECT
  if (isset($_GET['txtID'])) {
    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";
    $result = $employeesController->FixedDataUpdateForm($txtID);

    // Extracción de los arrays
    $registro = $result['registro'];
    $lista_tbl_puestos = $result['lista_tbl_puestos'];

    // Extracción de data del registro
    $primernombre = $registro["primer_nombre"];
    $segundonombre = $registro["segundo_nombre"];
    $primerapellido = $registro["primer_apellido"];
    $segundoapellido = $registro["segundo_apellido"];

    $foto = $registro["foto"];
    $fechadeingreso = $registro["fecha_ingreso"];

    $id_puesto = $registro["id_puesto_FK"];
    $id_dpto = $registro["id_jefe_dpto_FK"]; // Variable usada para la siguiente consulta
    $nombre_dpto = $registro["subc_nombre_dpto"];

    $cv = $registro["CV"];
    $mail = $registro["mail_empleado"];
    $password = $registro["password_empleado"];
  }
?>


<!-- HEADER -->
<?php
  include("../../templates/header.php");
?>

<!-- VIEW -->
<?php
  include("./view/EditEmployeesView.php");
?>

<!-- FOOTER -->
<?php
  include("../../templates/footer.php");
?>
