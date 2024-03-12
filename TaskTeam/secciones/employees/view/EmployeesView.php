</br>

<h3>Empleados del
  <?php echo $_SESSION['nombre_dpto'] ?>
</h3>

<br>

<div class="card">
  <div class="card-header">

    <a name="" id="" class="btn btn-primary" href="./create_employees.php" role="button">Agregar empleado</a>
  </div>
  <div class="card-body">

    <div class="table-responsive">
      <table class="table table-white" id="tabla_id">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Foto</th>
            <th scope="col">CV</th>
            <th scope="col">Puesto</th>
            <th scope="col">Fecha de ingreso</th>
            <th scope="col">E-mail</th>
            <th scope="col">Password</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($lista_tbl_empleados as $registro) { ?>
            <tr class="">
              <td>
                <?php echo $registro['id_empleado_PK'] ?>
              </td>
              <td scope="row">
                <?php echo $registro['primer_nombre'] ?>
                <?php echo $registro['segundo_nombre'] ?>
                <?php echo $registro['primer_apellido'] ?>
                <?php echo $registro['segundo_apellido'] ?>
              </td>
              <td>
                <!-- Decode de url de nombre de arcchivo foto y cv -->
                <?php 
                  $url = $registro['foto'];
                  $url_decoded = urldecode($url);
                ?>
                <img width="80px" height="80px" src=" <?php echo "./empleados_docs/" . $url_decoded ?>"
                  class="img-fluid rounded" alt="" />
              </td>
              <td>
                <a href="<?php echo "./empleados_docs/" . $registro['CV'] ?>" target="_blank">
                  <?php echo "CV_" . $registro['primer_nombre'] ?>
                </a>
              </td>
              <td>
                <?php echo $registro['subc_nombre_puesto'] ?>
              </td>
              <td>
                <?php echo $registro['fecha_ingreso'] ?>
              </td>
              <td>
                <?php echo $registro['mail_empleado'] ?>
              </td>
              <td>
                <?php echo $registro['password_empleado'] ?>
              </td>
              <td>
                <div class="btn-group" role="group">

                  <?php if ($registro["subc_nombre_dpto"] === $_SESSION["nombre_dpto"]) { ?>
                    <a name="" id="" class="btn btn-info"
                      href="../tasks/index_tasks.php?empleado_ID=<?php echo $registro['id_empleado_PK']; ?>&empleado_filter=<?php echo $registro['primer_nombre'] . " " . $registro['segundo_nombre'] . " " . $registro['primer_apellido']; ?>"
                      role="button">Tareas</a>
                    <a name="" id="" class="btn btn-primary"
                      href="./edit_employees.php?txtID=<?php echo $registro['id_empleado_PK'] ?>" role="button">Editar</a>
                    <a name="" id="" class="btn btn-danger"
                      href="javascript:btnBorrar(<?php echo $registro['id_empleado_PK'] ?>)" role="button">Eliminar</a>

                  <?php } else {
                    echo "<strong>Sin credenciales para cambios<strong/>";
                  } ?>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>