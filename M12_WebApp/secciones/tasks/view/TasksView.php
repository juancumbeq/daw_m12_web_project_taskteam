</br>

<h3>
  <?php
  // VISTA TAREAS DEL EMPLEADO DESDE BOTÓN TAREAS DEL INDEX DE EMPLEADOS
  if (isset($_GET["empleado_filter"])) {
    echo "Tareas de " . $_GET['empleado_filter'];
  } else if (!isset($_GET["empleado_filter"])) {
    echo "Tareas del " . $_SESSION['nombre_dpto'];
  }
  ?>
</h3>
<br>
<div class="card">
  <div class="card-header">
    <?php if (isset($_SESSION["login_jefe_dpto"]) && $_SESSION["login_jefe_dpto"] == true) { ?>
      <a name="" id="" class="btn btn-primary" href="create_tasks.php" role="button">Agregar tarea</a>
    <?php } else {
      echo "<h3> Estas son tus tareas: </h3>";
    }

    ?>
  </div>

  <div class="card-body">
    <div class="table-responsive-sm">
      <table class="table" id="tabla_id">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tarea</th>
            <th scope="col">Fecha de Inicio</th>
            <th scope="col">Fecha de Entrega</th>
            <th scope="col">Estado</th>
            <th scope="col">Empleado asignado</th>
            <th scope="col">Departamento</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($lista_tbl_tareas as $registro) { ?>
            <tr class="" <?php
            // CAMBIO COLOR DE FONDO EN FUNCIÓN DEL ESTADO
            switch ($registro['estado_tarea']) {
              case 0:
                echo 'style="background-color:#f2f2f2"';
                break;
              case 1:
                echo 'style="background-color:#FFFACD"';
                break;
              case 2:
                echo 'style="background-color:#90EE90"';
                break;
            }
            ?>>
              <td scope="row">
                <?php echo $registro['id_tarea_PK'] ?>
              </td>
              <td>
                <?php echo $registro['nombre_tarea'] ?>
              </td>
              <td>
                <?php echo $registro['fecha_inicio'] ?>
              </td>
              <td>
                <?php echo $registro['fecha_entrega'] ?>
              </td>
              <td>
                <?php
                // ESTADO TAREAS PASO A STRING
                switch ($registro['estado_tarea']) {
                  case 0:
                    echo "Sin iniciar";
                    break;
                  case 1:
                    echo "En progreso";
                    break;
                  case 2:
                    echo "Finalizada";
                    break;
                }
                ?>
              </td>
              <td>
                <img width="80px" height="80px"
                  src=" <?php echo "../employees/empleados_docs/" . $registro['foto_empleado'] ?>"
                  class="img-fluid rounded" alt="empleado asignado" />
              </td>
              <td>
                <?php echo $_SESSION['nombre_dpto'] ?>
              </td>
              <td>
                <div class="btn-group" role="group">
                  <a name="" id="" class="btn btn-primary"
                    href="edit_tasks.php?txtID=<?php echo $registro['id_tarea_PK'] ?>" role="button">Editar</a>

                  <?php if (isset($_SESSION["login_jefe_dpto"]) && $_SESSION["login_jefe_dpto"] == true) { ?>
                    <a name="" id="" class="btn btn-danger"
                      href="javascript:btnBorrar(<?php echo $registro['id_tarea_PK'] ?>)" role="button">Eliminar</a>
                  <?php } ?>

                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>