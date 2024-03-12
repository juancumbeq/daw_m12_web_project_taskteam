</br>
<div class="card">
  <div class="card-header">
    <h3> Crear una nueva tarea </h3>
  </div>
  <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
      <!-- NOMBRE DE LA TAREA -->
      <div class="mb-3">
        <label for="nombre_tarea" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre_tarea" id="nombre_tarea" aria-describedby="helpId"
          placeholder="Nombre de la tarea" value="">
      </div>

      <!-- FECHA DE INICIO -->
      <div class="mb-3">
        <label for="fecha_inicio" class="form-label">Fecha de inicio</label>
        <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" aria-describedby="helpId"
          placeholder="Fecha de inicio" value="">
      </div>

      <!-- FECHA DE ENTREGA -->
      <div class="mb-3">
        <label for="fecha_entrega" class="form-label">Fecha de entrega</label>
        <input type="date" class="form-control" name="fecha_entrega" id="fecha_entrega" aria-describedby="helpId"
          placeholder="Fecha de entrega" value="">
      </div>

      <!-- ESTADO DE TAREA -->
      <div class="mb-3">
        <label for="estado_tarea" class="form-label">Estado de tarea</label>

        <select class="form-select form-select-sm" name="estado_tarea" id="estado_tarea">
          <option value="0" selected>Sin iniciar</option>
          <option value="1">En progreso</option>
          <option value="2">Finalizada</option>
        </select>
      </div>

      <!-- EMPLEADO ASIGNADO -->
      <div class="mb-3">
        <label for="id_empleado" class="form-label">Asignar tarea</label>

        <select class="form-select form-select-sm" name="id_empleado" id="id_empleado">

          <?php foreach ($empleados as $registros) { ?>
            <option value="<?php echo $registros['id_empleado_PK'] ?>">
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
          <option selected value="<?php echo $_SESSION['id_dpto'] ?>"> <?php echo $_SESSION['nombre_dpto'] ?></option>
        </select>
      </div>

      <!-- ACCIONES -->
      <button type="submit" class="btn btn-success">Crear tarea</button>
      <a name="" id="" class="btn btn-primary" href="index_tasks.php" role="button">Cancelar</a>
    </form>

  </div>

  <div class="card-footer text-muted"> </div>
</div>