<br>

<div class="card">
  <div class="card-header">
    Datos del empleado
  </div>
  <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">

      <!-- CAMPO ID LECTURA -->
      <div class="mb-3">
        <label for="txtID" class="form-label">ID (no modificable)</label>
        <input type="text" class="form-control" readonly disabled name="txtID" id="txtID" aria-describedby="helpId"
          placeholder="ID" value="<?php echo $txtID; ?>">
          <!-- Campo ID oculto -->
        <input type="hidden" name="txtID" id="txtID" value="<?php echo $txtID; ?>">
      </div>

      <!-- PRIMER NOMBRE -->
      <div class="mb-3">
        <label for="primernombre" class="form-label">Primer nombre</label>
        <input type="text" class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId"
          placeholder="Primer nombre" value="<?php echo $primernombre; ?>">
      </div>

      <!-- SEGUNDO NOMBRE -->
      <div class="mb-3">
        <label for="segundonombre" class="form-label">Segundo nombre</label>
        <input type="text" class="form-control" name="segundonombre" id="segundonombre" aria-describedby="helpId"
          placeholder="Segundo nombre" value="<?php echo $segundonombre; ?>">
      </div>

      <!-- PRIMER APELLIDO -->
      <div class="mb-3">
        <label for="primerapellido" class="form-label">Primer apellido</label>
        <input type="text" class="form-control" name="primerapellido" id="primerapellido" aria-describedby="helpId"
          placeholder="Primer apellido" value="<?php echo $primerapellido; ?>">
      </div>

      <!-- SEGUNDO APELLIDO -->
      <div class="mb-3">
        <label for="segundoapellido" class="form-label">Segundo apellido</label>
        <input type="text" class="form-control" name="segundoapellido" id="segundoapellido" aria-describedby="helpId"
          placeholder="Segundo apellido" value="<?php echo $segundoapellido; ?>">
      </div>

      <!-- FOTO -->
      <div class="mb-3">
        <label for="" class="form-label">Foto</label>
        </br>

        <img width="100" src=" <?php echo "./empleados_docs/" . $foto; ?>" class="rounded" alt="" />

        </br> </br>
        <input type="file" class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="Foto">
      </div>

      <!-- CV -->
      <div class="mb-3">
        <label for="" class="form-label">CV (PDF)</label>
        </br>
        <a href="<?php echo "./empleados_docs/" . $cv; ?>"><?php echo $cv; ?></a>
        <input type="file" class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="CV">
      </div>

      <!-- DEPARTAMENTO -->
      <div class="mb-3">
        <label for="id_dpto" class="form-label">Departamento (no modificable)</label>
        <select class="form-select form-select-sm" name="id_dpto" id="id_dpto">

          <option selected value="<?php echo $id_dpto ?>">
            <?php echo $nombre_dpto ?>
          </option>

        </select>
      </div>

      <!-- PUESTO -->
      <div class="mb-3">
        <label for="id_puesto" class="form-label">Puesto</label>
        <select class="form-select form-select-sm" name="id_puesto" id="id_puesto">

          <?php foreach ($lista_tbl_puestos as $registros) { ?>
            <option <?php echo (($id_puesto == $registros['id_puesto_PK']) ? "selected" : "") ?>
              value="<?php echo $registros['id_puesto_PK'] ?>">
              <?php echo $registros['nombre_puesto'] ?>
            </option>
          <?php } ?>

        </select>
      </div>

      <!-- FECHA DE INGRESO -->
      <div class="mb-3">
        <label for="fechadeingreso" class="form-label">Fecha de ingreso</label>
        <input type="date" class="form-control" name="fechadeingreso" id="fechadeingreso" aria-describedby="emailHelpId"
          placeholder="Fecha de ingreso a la empresa" value="<?php echo $fechadeingreso; ?>">
      </div>

      <!-- E-MAIL -->
      <div class="mb-3">
        <label for="mail_input" class="form-label">E-mail</label>
        <input type="text" class="form-control" name="mail_input" id="mail_input" aria-describedby="helpId"
          placeholder="E-mail" value="<?php echo $mail; ?>">
      </div>

      <!-- PASSWORD -->
      <div class="mb-3">
        <label for="password_input" class="form-label">Password</label>
        <input type="text" class="form-control" name="password_input" id="password_input" aria-describedby="helpId"
          placeholder="Password" value="<?php echo $password; ?>">
      </div>

      <!-- BOTONES -->
      <button type="submit" class="btn btn-success">Actualizar datos </button>
      <a name="" id="" class="btn btn-primary" href="index_employees.php" role="button">Cancelar</a>

    </form>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>