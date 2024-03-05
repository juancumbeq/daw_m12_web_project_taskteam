<?php

// INICIO DE SESSIÓN PARA TENER LAS VARIABLES DISPONIBLES EN TODOS LOS ARCHIVOS
session_start();
$url_base = "http://localhost/DAW_FP/M12_WebApp/";


// VERIFICAMOS QUE EXISTA UNA SESSIÓN CREADA ANTES DE CARGAR EL HEADER
if (!isset($_SESSION["mail"])) {
  session_destroy();
  header("Location:" . $url_base . "login/login.php");
}
?>


<!doctype html>
<html lang="es">

<head>
  <title>TaskTeam</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

  <!-- DATA TABLES -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css" />
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

  <!-- Sweet Alert2 -->
  <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
  <header>
    <!-- MENU SUPERIOR -->
    <nav class="navbar navbar-expand navbar-light bg-light">
      <ul class="nav navbar-nav">

        <li class="nav-item">
          <a class="nav-link active" href="<?php echo $url_base ?>index_main.php" aria-current="page">Home<span
              class="visually-hidden">(current)</span></a>
        </li>

        <?php if (isset($_SESSION["login_jefe_dpto"]) && $_SESSION["login_jefe_dpto"] == true) { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $url_base ?>secciones/employees/index_employees.php">Empleados</a>
          </li>
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url_base ?>secciones/tasks/index_tasks.php">Tareas</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url_base ?>./login/logout.php">Cerrar sesión</a>
        </li>

      </ul>
    </nav>

  </header>
  <main class="container">

    <!-- MENSAJE SWEET ALERT-2 ACCIONES SOBRE REGISTRO -->
    <?php if (isset($_GET["mensaje"])) {

      $sms = $_GET["mensaje"];
      $icon = "";

      // CONDICIONAL MENSAJES TAREAS
      if (strpos($sms, "Tarea") !== false) {
        $pagina_destino = "index_tasks.php";
        $icon = "success";

      } 
      elseif (strpos($sms, "Error!") !== false || $sms === "") {
        $pagina_destino = "index_tasks.php";
        $icon = "error";

      // CONDICIONAL MENSAJES EMPLEADOS
      }
      elseif (strpos($sms, "Empleado") !== false) {
        $pagina_destino = "index_employees.php";
        $icon = "success";

      } 
      elseif (strpos($sms, "Error") !== false || $sms === "") {
        $pagina_destino = "index_employees.php";
        $icon = "error";
      }

      // CONDICIONAL MENSAJES TAREAS
      // if ($sms == "Empleado añadido" || $sms == "Empleado actualizado" || $sms == "Empleado eliminado") {
      //   $pagina_destino = "index_employees.php";
      // } else if ($sms == "Tarea añadida" || $sms == "Tarea actualizada" || $sms == "Tarea eliminada") {
      //   $pagina_destino = "index_tareas.php";
      // }

      ?>
      <script>
        Swal.fire({
          icon: "<?php echo $icon ?>",
          title: "<?php echo $_GET["mensaje"] ?>",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = "<?php echo $pagina_destino ?>";
          }
        })
      </script>
    <?php } ?>