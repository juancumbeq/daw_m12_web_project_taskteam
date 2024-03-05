<!-- ESTE ARCHIVO REPRESENTA LA PANTALLA DE HOME DEL APLICATIVO -->

<?php
// INSERCIÓN DE LOS LINKS DE CABECERA
include("templates/header.php");
?>

</br>

<!-- HOME DE EMPLEADO -->
<?php if (isset($_SESSION["login_empleado"])) { ?>
  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Bienvenid@
        <?php echo $_SESSION["primer_nombre"] . " " . $_SESSION["segundo_nombre"] . " " . $_SESSION["primer_apellido"]; ?>
      </h1>
      <p class="col-md-8 fs-4"> Te encuentras en el
        <?php echo $_SESSION["nombre_dpto"]; ?>
      </p>
      <img width="150px" height="1500px" class="img-fluid rounded"
        src="./secciones/employees/empleados_docs/<?php echo $_SESSION['foto'] ?>"
        alt="<?php echo $_SESSION['nombre_dpto'] ?>">
    </div>
  </div>
  </div>

  <div class="row align-items-md-stretch">
    <div class="col-md-6">
      <div class="h-100 p-5 text-light bg-dark border rounded-3">
        <h2>Panel de Tareas</h2>
        <p> Pulsa en el botón para acceder a tus tareas y poder modificar su estado</p>
        <a name="" id="" class="btn btn-outline-light" href="secciones/tasks/index_tasks.php" role="button">Ver tareas
          asignadas</a>
      </div>
    </div>
  </div>

<!-- HOME DE JEFE DE DPTO -->
<?php } else if (isset($_SESSION["login_jefe_dpto"])) { ?>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Bienvenid@
        <?php echo $_SESSION["primer_nombre"] . " " . $_SESSION["segundo_nombre"] . " " . $_SESSION["primer_apellido"]; ?>
        </h1>
        <p class="col-md-8 fs-4">Te encuentras en el
        <?php echo $_SESSION["nombre_dpto"]; ?>
        </p>
        <img width="150px" height="1500px" class="img-fluid rounded"
          src="./assets/jefes_dptos_docs/<?php echo $_SESSION['foto'] ?>" alt="<?php echo $_SESSION['nombre_dpto'] ?>">
      </div>
    </div>


    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-dark bg-light border rounded-3">
          <h2>Panel de Empleados</h2>
          <p> Pulsa en el botón para añadir, eliminar y editar empleados</p>

          <a name="" id="" class="btn btn-outline-dark" href="secciones/employees/index_employees.php"
            role="button">Administrar empleados</a>
        </div>
      </div>

      <div class="col-md-6">
        <div class="h-100 p-5 text-light bg-dark border rounded-3">
          <h2>Panel de Tareas</h2>
          <p> Pulsa en el botón para añadir, eliminar y asignar tareas</p>

          <a name="" id="" class="btn btn-outline-light" href="secciones/tasks/index_tasks.php" role="button">Administrar
            Tareas</a>
        </div>
      </div>
    </div>

<?php } ?>

<!-- INSERT DEL SCRIPT DEL FOOTER -->
<?php
include("templates/footer.php");
?>