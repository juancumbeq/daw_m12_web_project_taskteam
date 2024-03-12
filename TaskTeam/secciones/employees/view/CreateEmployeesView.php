<br>

<div class="card">
  <div class="card-header">
    Datos del empleado
  </div>
  <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
      <!-- PRIMER NOMBRE -->
      <div class="mb-3">
        <label for="primernombre" class="form-label">Primer nombre</label>
        <input type="text" class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId"
          placeholder="Primer nombre">
      </div>

      <!-- SEGUNDO NOMBRE -->
      <div class="mb-3">
        <label for="segundonombre" class="form-label">Segundo nombre</label>
        <input type="text" class="form-control" name="segundonombre" id="segundonombre" aria-describedby="helpId"
          placeholder="Segundo nombre">
      </div>

      <!-- PRIMER APELLIDO -->
      <div class="mb-3">
        <label for="primerapellido" class="form-label">Primer apellido</label>
        <input type="text" class="form-control" name="primerapellido" id="primerapellido" aria-describedby="helpId"
          placeholder="Primer apellido">
      </div>

      <!-- SEGUNDO APELLIDO -->
      <div class="mb-3">
        <label for="segundoapellido" class="form-label">Segundo apellido</label>
        <input type="text" class="form-control" name="segundoapellido" id="segundoapellido" aria-describedby="helpId"
          placeholder="Segundo apellido">
      </div>

      <!-- FOTO -->
      <div class="mb-3">
        <label for="" class="form-label">Foto</label>
        <input type="file" class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="Foto">
      </div>

      <!-- CV -->
      <div class="mb-3">
        <label for="" class="form-label">CV (pdf)</label>
        <input type="file" class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="CV">
      </div>

      <!-- DEPARTAMENTO -->
      <div class="mb-3">
        <label for="id_dpto" class="form-label">Departamento</label>

        <select class="form-select form-select-sm" name="id_dpto" id="id_dpto">

          <option value="<?php echo $lista_tbl_departamentos['id_jefe_dpto_PK'] ?>" hidden selected>Departamento del
            empleado</option>
          <option value="<?php echo $lista_tbl_departamentos['id_jefe_dpto_PK'] ?>">
            <?php echo $lista_tbl_departamentos['nombre_dpto'] ?>
          </option>

        </select>
      </div>

      <!-- PUESTO -->
      <div class="mb-3">
        <label for="id_puesto" class="form-label">Puesto</label>
        <select class="form-select form-select-sm" name="id_puesto" id="id_puesto">

          <option value="" hidden selected>Posición del empleado</option>

          <?php foreach ($lista_tbl_puestos as $registro) { ?>
            <option value="<?php echo $registro['id_puesto_PK'] ?>">
              <?php echo $registro['nombre_puesto'] ?>
            </option>
          <?php } ?>

        </select>
      </div>

      <!-- FECHA DE INGRESO -->
      <div class="mb-3">
        <label for="fechadeingreso" class="form-label">Fecha de ingreso</label>
        <input type="date" class="form-control" name="fechadeingreso" id="fechadeingreso" aria-describedby="emailHelpId"
          placeholder="Fecha de ingreso a la empresa">
      </div>

      <!-- E-MAIL -->
      <div class="mb-3">
        <label for="mail_input" class="form-label">E-mail</label>
        <input type="text" class="form-control" name="mail_input" id="mail_input" aria-describedby="helpId"
          placeholder="E-mail">
      </div>

      <!-- PASSWORD -->
      <div class="mb-3">
        <label for="password_input" class="form-label">Password</label>
        <input type="text" class="form-control" name="password_input" id="password_input" aria-describedby="helpId"
          placeholder="Password">
      </div>

      <!-- BOTONES -->
      <button type="submit" class="btn btn-success">Agregar empleado</button>
      <a name="" id="" class="btn btn-primary" href="../employees/index_employees.php" role="button">Cancelar</a>

    </form>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>