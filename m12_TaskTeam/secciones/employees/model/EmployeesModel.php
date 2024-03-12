<!-- Archivo encargado de realizar las peticiones a la base de datos para obtener los registros
de los empleados, modificarlos, eliminarlos o crear nuevos -->

<?php

class EmployeesModel {

  //propiedades
  private $conexion;

  //constructor
  public function __construct($conexion){
    $this->conexion = $conexion;
  }



  //métodosa

  //* CREATE
  public function CreateEmployeesModel(
    $primernombre,
    $segundonombre,
    $primerapellido,
    $segundoapellido,
    $foto,
    $cv,
    $id_dpto,
    $id_puesto,
    $fechadeingreso,
    $mail,
    $password){
    
      // INSERCIÓN DE DATOS
    try {
      $fecha = new DateTime();

      // MODIFICACIÓN DEL NOMBRE DEL ARCHIVO "FOTO" PARA LA SUBIDA
      $nombreArchivo_foto = ($foto != "") ? $fecha->getTimestamp() . "_" . $primerapellido . $segundoapellido . "_" . $primernombre . $segundonombre . "_foto.jpg" : "";
      $tmp_foto = $_FILES["foto"]["tmp_name"];

      // MOVEMOS EL ARCHIVO TEMPORAL AL SERVIDOR USANDO EL NOMBRE CÓMO RUTA
      if ($tmp_foto != "") {
        move_uploaded_file($tmp_foto, "./empleados_docs/" . $nombreArchivo_foto);
      }

      // MODIFICACIÓN DEL NOMBRE DEL ARCHIVO "CV" PARA LA SUBIDA
      $nombreArchivo_cv = ($cv != "") ? $fecha->getTimestamp() . "_" . $primerapellido . $segundoapellido . "_" . $primernombre . $segundonombre . "_cv.pdf" : "";
      $tmp_cv = $_FILES["cv"]["tmp_name"];

      // MOVEMOS EL ARCHIVO TEMPORAL AL SERVIDOR USANDO EL NOMBRE CÓMO RUTA
      if ($tmp_cv != "") {
        move_uploaded_file($tmp_cv, "./empleados_docs/" . $nombreArchivo_cv);
      }

      $sentencia = $this->conexion->prepare("INSERT INTO tbl_empleados 
      (id_empleado_PK, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, foto, fecha_ingreso, id_puesto_FK, id_jefe_dpto_FK, CV, mail_empleado, password_empleado) 
      VALUES (NULL, :primernombre, :segundonombre, :primerapellido, :segundoapellido, :foto, :fechadeingreso, :id_puesto, :id_dpto, :cv, :mail, :password)");

      $sentencia->bindParam(":primernombre", $primernombre);
      $sentencia->bindParam(":segundonombre", $segundonombre);
      $sentencia->bindParam(":primerapellido", $primerapellido);
      $sentencia->bindParam(":segundoapellido", $segundoapellido);
      $sentencia->bindParam(":foto", $nombreArchivo_foto);
      $sentencia->bindParam(":fechadeingreso", $fechadeingreso);
      $sentencia->bindParam(":id_puesto", $id_puesto);
      $sentencia->bindParam(":id_dpto", $id_dpto);
      $sentencia->bindParam(":cv", $nombreArchivo_cv);
      $sentencia->bindParam(":mail", $mail);
      $sentencia->bindParam(":password", $password);

      $sentencia->execute();

      // RETORNO DEL RESULTADO DE LA OPERACIÓN
      return true;

    } catch (PDOException $e) {
      echo "Error al insertar datos del empleado: " . $e->getMessage();

      // RETORNO DEL RESULTADO DE LA OPERACIÓN EN CASO DE ERROR
      return false;
    }
  }
  //* aux - create
  public function FixedDataCreateFormModel($id_dpto){

    // SELECT / VISUALIZACIÓN PARA CAMPOS SELECT
    try {

      // EXTRACCIÓN DE PUESTOS DE BBDD PARA CAMPO SELECT
      $sentencia = $this->conexion->prepare("SELECT * FROM tbl_puestos WHERE id_jefe_dpto_FK=:id_dpto_session");
      $sentencia->bindParam(":id_dpto_session", $id_dpto);
      $sentencia->execute();
      $lista_tbl_puestos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      //var_dump($lista_tbl_puestos);

      // EXTRACCIÓN DE DEPARTAMENTOS DE BBDD PARA CAMPO SELECT EN FUNCIÓN DE JEFE
      $sentencia = $this->conexion->prepare("SELECT * FROM tbl_jefes_dptos WHERE id_jefe_dpto_PK=:id_dpto_session");
      $sentencia->bindParam(":id_dpto_session", $id_dpto);
      $sentencia->execute();
      $lista_tbl_departamentos = $sentencia->fetch(PDO::FETCH_LAZY);
      //var_dump($lista_tbl_departamentos);


      // RETORNO DE LOS DATOS OBTENIDOS
      return array(
        'lista_tbl_puestos' => $lista_tbl_puestos,
        'lista_tbl_departamentos' => $lista_tbl_departamentos
      );

    } catch (PDOException $e) {
      echo "Error al recopilar datos de los campos select: " . $e->getMessage();
    }
  }



  //* READ
  public function ReadEmployeesModel(){
    try {
      // Obtención de todos los registros de los empleados
      $sentencia = $this->conexion->prepare("SELECT * ,
        (SELECT `nombre_puesto` FROM `tbl_puestos` WHERE `tbl_puestos`.`id_puesto_PK` = `tbl_empleados`.`id_puesto_FK` LIMIT 1) AS `subc_nombre_puesto`,
        (SELECT `nombre_dpto` FROM `tbl_jefes_dptos` WHERE `tbl_jefes_dptos`.`id_jefe_dpto_PK` = `tbl_empleados`.`id_jefe_dpto_FK`) AS `subc_nombre_dpto`
      FROM `tbl_empleados`;");

      $sentencia->execute();
      $lista_tbl_empleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);

      return $lista_tbl_empleados;
      
    } catch (Exception $ex) {
      // EN CASO DE ERROR SE MUESTRA UN MENSAJE POR PANTALLA
      echo $ex->getMessage();
    }
  }



  //* UPDATE
  public function UpdateEmployeesModel(
    $txtID,
    $primernombre,
    $segundonombre,
    $primerapellido,
    $segundoapellido,
    $foto,
    $cv,
    $id_dpto,
    $id_puesto,
    $fechadeingreso,
    $mail,
    $password){
    
    $updateTextFields = false;
    $updateFoto = false;
    $updateCV = false;

    // INSERCIÓN DE DATOS TEXTO
    try {
      // SQL EJECUCIÓN 
      $sentencia = $this->conexion->prepare("UPDATE tbl_empleados SET
      primer_nombre=:primernombre,
      segundo_nombre=:segundonombre, 
      primer_apellido=:primerapellido, 
      segundo_apellido=:segundoapellido,

      fecha_ingreso=:fechadeingreso,
      id_puesto_FK=:id_puesto,
      id_jefe_dpto_FK=:id_dpto,

      mail_empleado=:mail,
      password_empleado=:password
      WHERE id_empleado_PK=:txtID;");

      $sentencia->bindParam(":primernombre", $primernombre);
      $sentencia->bindParam(":segundonombre", $segundonombre);
      $sentencia->bindParam(":primerapellido", $primerapellido);
      $sentencia->bindParam(":segundoapellido", $segundoapellido);

      $sentencia->bindParam(":fechadeingreso", $fechadeingreso);
      $sentencia->bindParam(":id_puesto", $id_puesto);
      $sentencia->bindParam(":id_dpto", $id_dpto);

      $sentencia->bindParam(":mail", $mail);
      $sentencia->bindParam(":password", $password);

      $sentencia->bindParam(":txtID", $txtID);
      $sentencia->execute();

      $updateTextFields = true;
    } catch (PDOException $e) {
      echo "Error al insertar datos de texto: " . $e->getMessage();
    }

    // VARIABLE FECHA PARA RENOMBRAR ARCHIVOS
    $fecha = new DateTime();

    // INSERCIÓN DE NUEVA FOTO
    try {

      // RENAME FOTO
      $nombreArchivo_foto = ($foto != "") ? $fecha->getTimestamp() . "_" . $primerapellido . $segundoapellido . "_" . $primernombre . $segundonombre . "_foto.jpg" : "";
      $tmp_foto = $_FILES["foto"]["tmp_name"];

      // GESTIÓN FOTOS
      if ($tmp_foto != "") {

        // RECUPERACIÓN ARCHIVO FOTO ANTERIOR
        $sentencia = $this->conexion->prepare("SELECT foto FROM tbl_empleados WHERE id_empleado_PK=:ID");
        $sentencia->bindParam(":ID", $txtID);
        $sentencia->execute();
        $archivo_foto = $sentencia->fetch(PDO::FETCH_LAZY);

        // BORRADO ARCHIVO FOTO ANTERIOR
        if (isset($archivo_foto["foto"]) && $archivo_foto["foto"] != "") {
          if (file_exists("./empleados_docs/" . $archivo_foto["foto"])) {
            unlink("./empleados_docs/" . $archivo_foto["foto"]);
          }
        }

        // UPLOAD NUEVA FOTO
        move_uploaded_file($tmp_foto, "./empleados_docs/" . $nombreArchivo_foto);
        $sentencia = $this->conexion->prepare("UPDATE tbl_empleados SET foto=:foto WHERE id_empleado_PK=:txtID;");
        $sentencia->bindParam(":foto", $nombreArchivo_foto);
        $sentencia->bindParam(":txtID", $txtID);
        $sentencia->execute();

        $updateFoto = true;
      }
    } catch (PDOException $e) {
      echo "Error al insertar FOTO: " . $e->getMessage();
    }

    // INSERCIÓN DE CV
    try {

      // RENAME CV
      $nombreArchivo_cv = ($cv != "") ? $fecha->getTimestamp() . "_" . $primerapellido . $segundoapellido . "_" . $primernombre . $segundonombre . "_cv.pdf" : "";
      $tmp_cv = $_FILES["cv"]["tmp_name"];

      // GESTIÓN CVs
      if ($tmp_cv != "") {

        // RECUPERACIÓN ARCHIVO CV ANTERIOR
        $sentencia = $this->conexion->prepare("SELECT CV FROM tbl_empleados WHERE id_empleado_PK=:ID");
        $sentencia->bindParam(":ID", $txtID);
        $sentencia->execute();
        $archivo_cv = $sentencia->fetch(PDO::FETCH_LAZY);

        // BORRADO ARCHIVO CV ANTERIOR
        if (isset($archivo_cv["CV"]) && $archivo_cv["CV"] != "") {
          if (file_exists("./empleados_docs/" . $archivo_cv["CV"])) {
            unlink("./empleados_docs/" . $archivo_cv["CV"]);
          }
        }

        // UPLOAD NUEVO CV
        move_uploaded_file($tmp_cv, "./empleados_docs/" . $nombreArchivo_cv);
        $sentencia = $this->conexion->prepare("UPDATE tbl_empleados SET CV=:CV WHERE id_empleado_PK=:txtID;");
        $sentencia->bindParam(":CV", $nombreArchivo_cv);
        $sentencia->bindParam(":txtID", $txtID);
        $sentencia->execute();

        $updateCV = true;
      }
    } catch (PDOException $e) {
      echo "Error al insertar CV: " . $e->getMessage();
    }

    // RETORNO EN FUNCIÓN DE LOS RESULTADOS DE LAS QUERYS
    if($updateTextFields !== false || $updateFoto !== false || $updateCV !== false){
      return true;
    }
    else {
      // RETORNO DEL RESULTADO DE LA OPERACIÓN EN CASO DE ERROR
      return false;
    }
  }
  //* aux - update
  public function FixedDataUpdateFormModel($id_empleado){
    try {

      // SELECT / VISUALIZACIÓN DE DATOS EN LOS CAMPOS CORRESPONDIENTES
      $sentencia = $this->conexion->prepare("SELECT *,
        (SELECT `nombre_dpto` FROM `tbl_jefes_dptos` WHERE `tbl_jefes_dptos`.`id_jefe_dpto_PK` = `tbl_empleados`.`id_jefe_dpto_FK`) AS `subc_nombre_dpto`
      FROM tbl_empleados WHERE id_empleado_PK=:ID");
  
      $sentencia->bindParam(":ID", $id_empleado);
      $sentencia->execute();
      $registro = $sentencia->fetch(PDO::FETCH_LAZY);
      $id_dpto = $registro["id_jefe_dpto_FK"]; // Variable usada para la siguiente consulta
    

      // EXTRACCIÓN DE PUESTOS DEL DEPARTAMENTO CORRESPONDIENTE PARA CAMPO SELECT
      $sentencia = $this->conexion->prepare("SELECT * FROM `tbl_puestos` WHERE `id_jefe_dpto_FK`=:id_dpto");
    
      $sentencia->bindParam("id_dpto", $id_dpto);
      $sentencia->execute();
      $lista_tbl_puestos = $sentencia->fetchAll(PDO::FETCH_ASSOC);


      // RETORNO DE LOS RESULTADOS DE LAS QUERYS
      return array(
        'registro' => $registro,
        'lista_tbl_puestos' => $lista_tbl_puestos
      );
    
    } catch (PDOException $e) {
      echo "Error al recopilar datos del empleado: " . $e->getMessage();
    }
  }
  


  //*  DELETE
  public function DeleteEmployeesModel($txtID){
    try {
      // BUSCAMOS LOS ARCHIVOS DEL EMPLEADO CORRESPONDIENTE
    $sentencia = $this->conexion->prepare("SELECT `foto`, `CV` FROM `tbl_empleados` WHERE `id_empleado_PK`=:ID");
    $sentencia->bindParam(":ID", $txtID);
    $sentencia->execute();
    $archivos_empleado = $sentencia->fetch(PDO::FETCH_LAZY);

    // BORRADO FOTO
    if (isset($archivos_empleado["foto"]) && $archivos_empleado["foto"] != "") {
      if (file_exists("../empleados_docs/" . $archivos_empleado["foto"])) {
        unlink("../empleados_docs/" . $archivos_empleado["foto"]);
      }
    }

    // BORRADO CV
    if (isset($archivos_empleado["CV"]) && $archivos_empleado["CV"] != "") {
      if (file_exists("../empleados_docs/" . $archivos_empleado["CV"])) {
        unlink("../empleados_docs/" . $archivos_empleado["CV"]);
      }
    }

    // BORRADO DEL RESTO DEL REGISTRO DEL EMPLEADO
    $sentencia = $this->conexion->prepare("DELETE FROM `tbl_empleados` WHERE `tbl_empleados`.`id_empleado_PK`=:ID");
    $sentencia->bindParam(":ID", $txtID);
    $sentencia->execute();

    // RETORNAMOS TRUE EN CASO DE ÉXITO
    return true;

    } catch (Exception $ex) {
      // EN CASO DE ERROR SE MUESTRA UN MENSAJE POR PANTALLA
      echo $ex->getMessage();

      // RETORNAMOS FALSE
      return false;
    }
  }
}

?>