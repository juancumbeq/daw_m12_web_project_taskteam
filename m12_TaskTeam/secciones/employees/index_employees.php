<!-- Archivo principal que muestra/READ toda la información de los empleados y además nos permite
borrar/DELETE a uno de ellos. La gestión del creado y editado (CREATE & DELETE) se gestiona en
otros archivos.
-->

<!-- CRUD: READ & DELETE -->
<?php
  include("./controllers/EmployeesController.php");

  // DELETE
  if (isset($_GET['txtID'])) {
    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";

    // MENSAJE AVISO BORRADO EMPLEADO
    $alertBorrado = $employeesController->DeleteEmployees($txtID);
    //echo "<script>console.log('ALERT  BORRADO: ' + '$alertBorrado');</script>";
    header("Location:index_employees.php?mensaje=" . $alertBorrado);
  }

  // READ
  $lista_tbl_empleados = $employeesController->ReadEmployees();
?>



<!-- HEADER -->
<?php
  include("../../templates/header.php");
?>

<!-- VIEW -->
<?php
  include("./view/EmployeesView.php");
?>

<!-- FOOTER -->
<?php
  include("../../templates/footer.php");
?>