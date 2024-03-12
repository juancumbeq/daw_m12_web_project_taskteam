<!-- DOC BODY -->
</br>
<div class="card">
  <div class="card-header">
    <h3>Datos de la tarea</h3>
  </div>

  <div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">
      <!-- CAMPO ID -->
      <div class="mb-3">
        <label for="txtID" class="form-label">ID</label>
        <input type="text" class="form-control" name="txtID" id="txtID" aria-describedby="helpId" placeholder="ID" <?php if (isset($_SESSION)) { ?> readonly style="background-color:#f2f2f2" <?php } ?> value="<?php echo $txtID; ?>">
      </div>
      <!-- NOMBRE DE LA TAREA -->
      <div class="mb-3">
        <label for="nombre_tarea" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre_tarea" id="nombre_tarea" aria-describedby="helpId"
          placeholder="Nombre de la tarea" <?php if (isset($_SESSION["login_empleado"]) && $_SESSION["login_empleado"] == true) { ?> readonly style="background-color:#f2f2f2" <?php } ?>
          value="<?php echo $nombre_tarea; ?>">
      </div>

      <!-- FECHA DE INICIO -->
      <div class="mb-3">
        <label for="fecha_inicio" class="form-label">Fecha de inicio</label>
        <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" aria-describedby="helpId"
          placeholder="Fecha de inicio" <?php if (isset($_SESSION["login_empleado"]) && $_SESSION["login_empleado"] == true) { ?> readonly style="background-color:#f2f2f2" <?php } ?>
          value="<?php echo $fecha_inicio; ?>">
      </div>

      <!-- FECHA DE ENTREGA -->
      <div class="mb-3">
        <label for="fecha_entrega" class="form-label">Fecha de entrega</label>
        <input type="date" class="form-control" name="fecha_entrega" id="fecha_entrega" aria-describedby="helpId"
          placeholder="Fecha de entrega" <?php if (isset($_SESSION["login_empleado"]) && $_SESSION["login_empleado"] == true) { ?> readonly style="background-color:#f2f2f2" <?php } ?>
          value="<?php echo $fecha_entrega; ?>">
      </div>

      <!-- ESTADO DE TAREA -->
      <div class="mb-3">
        <label for="estado_tarea" class="form-label">Estado de tarea</label>

        <select class="form-select form-select-sm" name="estado_tarea" id="estado_tarea">
          <option <?php echo (($estado_tarea == 0) ? "selected" : "") ?> value="0">Sin iniciar</option>
          <option <?php echo (($estado_tarea == 1) ? "selected" : "") ?> value="1">En progreso</option>
          <option <?php echo (($estado_tarea == 2) ? "selected" : "") ?> value="2">Finalizada</option>
        </select>
      </div>

      <!-- EMPLEADO ASIGNADO -->
      <div class="mb-3">
        <label for="id_empleado" class="form-label">Empleado asignado</label>
        <select class="form-select form-select-sm" name="id_empleado" id="id_empleado" <?php if (isset($_SESSION["login_empleado"]) && $_SESSION["login_empleado"] == true) { ?> readonly
            style="background-color:#f2f2f2" <?php } ?>>

          <?php foreach ($empleados as $registros) { ?>
            <option <?php echo (($id_empleado == $registros['id_empleado_PK']) ? "selected" : "") ?>
              value="<?php echo $registros['id_empleado_PK'] ?>">
              <?php echo $registros['primer_nombre'] . " " . $registros['segundo_nombre'] . " " . $registros['primer_apellido'] . " " . $registros['segundo_apellido'] . " - " . $registros['nombre_puesto_empleado'] ?>
            </option>
          <?php } ?>
        </select>
      </div>

      <!-- DEPARTAMENTO -->
      <div class="mb-3">
        <label for="id_dpto" class="form-label">Departamento</label>

        <select class="form-select form-select-sm" name="id_dpto" id="id_dpto" <?php if (isset($_SESSION)) { ?> readonly
            style="background-color:#f2f2f2" <?php } ?>>
          <option selected value="<?php echo $id_dpto ?>">
            <?php echo $nombre_dpto ?>
          </option>
        </select>

      </div>

      <!-- Botones acción -->
      <button type="submit" class="btn btn-success">Actualizar tarea</button>
      <a name="" id="" class="btn btn-primary" href="index_tasks.php" role="button">Cancelar</a>

    </form>

  </div>

  <div class="card-footer text-muted">

  </div>
</div>