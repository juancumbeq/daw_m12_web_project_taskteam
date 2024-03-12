<!-- Archivo encargado de realizar las peticiones a la base de datos para obtener los registros
de los empleados, modificarlos, eliminarlos o crear nuevos -->

<?php

class TasksModel {

  //propiedades
  private $conexion;

  //constructor
  public function __construct($conexion){
    $this->conexion = $conexion;
  }

  //métodos

  //* CREATE
  public function CreateTasksModel(
    $nombre_tarea,
    $fecha_inicio,
    $fecha_entrega,
    $estado_tarea,
    $id_empleado,
    $id_dpto){
    
      // INSERCIÓN DE DATOS
    try {
      $sentencia = $this->conexion->prepare("INSERT INTO tbl_tareas 
      (id_tarea_PK, nombre_tarea, fecha_inicio, fecha_entrega, estado_tarea, id_empleado_FK, id_jefe_dpto_FK) 
      VALUES (NULL, :nombre_tarea, :fecha_inicio, :fecha_entrega, :estado_tarea, :id_empleado, :id_dpto)");

      $sentencia->bindParam(":nombre_tarea", $nombre_tarea);
      $sentencia->bindParam(":fecha_inicio", $fecha_inicio);
      $sentencia->bindParam(":fecha_entrega", $fecha_entrega);
      $sentencia->bindParam(":estado_tarea", $estado_tarea);
      $sentencia->bindParam(":id_empleado", $id_empleado);
      $sentencia->bindParam(":id_dpto", $id_dpto);
      $sentencia->execute();

      // RETORNO DEL RESULTADO DE LA OPERACIÓN
      return true;

    } catch (PDOException $e) {
      echo "Error al insertar datos de la tarea: " . $e->getMessage();

      // RETORNO DEL RESULTADO DE LA OPERACIÓN EN CASO DE ERROR
      return false;
    }
  }
  //* aux - create
  public function FixedDataCreateFormModel($id_dpto){

    // SELECT / VISUALIZACIÓN DE EMPLEADOS EN CAMPO SELECT DE "EMPLEADOS ASIGNADO"
    try {
      $sentencia = $this->conexion->prepare("SELECT *,
        (SELECT nombre_puesto FROM tbl_puestos WHERE tbl_puestos.id_puesto_PK = tbl_empleados.id_puesto_FK) AS nombre_puesto_empleado
      FROM tbl_empleados WHERE id_jefe_dpto_FK =:id_dpto_session");
    
      $sentencia->bindParam(":id_dpto_session", $id_dpto);
      $sentencia->execute();
      $empleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);

      // RETORNO DE LOS DATOS OBTENIDOS
      return $empleados;

    } catch (PDOException $e) {
      echo "Error al recopilar datos de los campos select: " . $e->getMessage();
    }
  }


  //*  READ - DPTO GENERAL
  public function ReadTasksDptoGeneralModel($id_dpto){
    try {
      $sentencia = $this->conexion->prepare("SELECT *,
      (SELECT foto FROM tbl_empleados WHERE tbl_empleados.id_empleado_PK = tbl_tareas.id_empleado_FK) AS foto_empleado
      FROM tbl_tareas WHERE id_jefe_dpto_FK=:id_dpto_session");

      $sentencia->bindParam(":id_dpto_session", $id_dpto);
      $sentencia->execute();
      $lista_tbl_tareas = $sentencia->fetchAll(PDO::FETCH_ASSOC);

      return $lista_tbl_tareas;

    } catch (PDOException $e) {
      echo "Error al leer datos de tareas: " . $e->getMessage();
    }
  }
  //*  READ - DPTO SPECIFIC EMPLOYEE
  public function ReadTasksDptoSpecificModel($empleado_ID){
    try {
      $sentencia = $this->conexion->prepare("SELECT *,
      (SELECT foto FROM tbl_empleados WHERE tbl_empleados.id_empleado_PK = tbl_tareas.id_empleado_FK) AS foto_empleado
      FROM tbl_tareas WHERE id_empleado_FK=:id_empleado");

      $sentencia->bindParam(":id_empleado", $empleado_ID);
      $sentencia->execute();
      $lista_tbl_tareas = $sentencia->fetchAll(PDO::FETCH_ASSOC);

      return $lista_tbl_tareas;

    } catch (PDOException $e) {
      echo "Error al leer datos de tareas: " . $e->getMessage();
    }
  }


  //* UPDATE
  public function UpdateTasksModel(
    $txtID,
    $nombre_tarea,
    $fecha_inicio,
    $fecha_entrega,
    $estado_tarea,
    $id_empleado,
    $id_dpto){

    // INSERCIÓN DE DATOS TEXTO
    try {
      $sentencia = $this->conexion->prepare("UPDATE tbl_tareas SET 
      nombre_tarea=:nombre_tarea,
      fecha_inicio=:fecha_inicio,
      fecha_entrega=:fecha_entrega,
      estado_tarea=:estado_tarea,
      id_empleado_FK=:id_empleado,
      id_jefe_dpto_FK=:id_dpto
      WHERE id_tarea_PK=:ID");
  
      $sentencia->bindParam(":nombre_tarea", $nombre_tarea);
      $sentencia->bindParam(":fecha_inicio", $fecha_inicio);
      $sentencia->bindParam(":fecha_entrega", $fecha_entrega);
      $sentencia->bindParam(":estado_tarea", $estado_tarea);
      $sentencia->bindParam(":id_empleado", $id_empleado);
      $sentencia->bindParam(":id_dpto", $id_dpto);
      $sentencia->bindParam(":ID", $txtID);
      $sentencia->execute();
  
      return true;

    } catch (PDOException $e) {
      echo "Error al actualizar datos de la tarea: " . $e->getMessage();
      // RETORNO DEL RESULTADO DE LA OPERACIÓN EN CASO DE ERROR
      return false;
    }
  }
  //* aux - update
  public function FixedDataUpdateFormModel($id_tarea){
    try {

      // SELECT / VISUALIZACIÓN CAMPOS DE LA TAREA SELECCIONADA
      $sentencia = $this->conexion->prepare("SELECT *,
        (SELECT CONCAT(primer_nombre, ' ', segundo_nombre, ' ', primer_apellido, ' ', segundo_apellido)
        FROM tbl_empleados WHERE tbl_empleados.id_empleado_PK = tbl_tareas.id_empleado_FK) AS nom_empleado_asignado,
        (SELECT nombre_dpto FROM tbl_jefes_dptos WHERE tbl_jefes_dptos.id_jefe_dpto_PK = tbl_tareas.id_jefe_dpto_FK) AS nombre_dpto
      FROM tbl_tareas WHERE id_tarea_PK=:ID");

      $sentencia->bindParam(":ID", $id_tarea);
      $sentencia->execute();
      $tarea = $sentencia->fetch(PDO::FETCH_LAZY);


      // VISUALIZACIÓN DE EMPLEADOS EN CAMPO SELECT DE "EMPLEADOS ASIGNADO"
      $id_dpto = $tarea["id_jefe_dpto_FK"];

      $sentencia = $this->conexion->prepare("SELECT *,
        (SELECT nombre_puesto FROM tbl_puestos WHERE tbl_puestos.id_puesto_PK = tbl_empleados.id_puesto_FK) AS nombre_puesto_empleado
      FROM tbl_empleados WHERE id_jefe_dpto_FK =:id_dpto");

      $sentencia->bindParam(":id_dpto", $id_dpto);
      $sentencia->execute();

      $empleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);


      // RETORNO DE LOS RESULTADOS DE LAS QUERYS
      return array(
        'tarea' => $tarea,
        'empleados' => $empleados
      );
    
    } catch (PDOException $e) {
      echo "Error al recopilar datos de la tarea: " . $e->getMessage();
    }
  }


  //*  DELETE
  public function DeleteTasksModel($txtID){
    try {
      $sentencia = $this->conexion->prepare("DELETE FROM tbl_tareas WHERE id_tarea_PK=:ID");
      $sentencia->bindParam(":ID", $txtID);
      $sentencia->execute();

      // RETORNAMOS TRUE EN CASO DE ÉXITO
      return true;

    } catch (Exception $ex) {
      // EN CASO DE ERROR SE MUESTRA UN MENSAJE POR PANTALLA Y RETORNAMOS FALSE
      echo $ex->getMessage();
      return false;
    }
  }
}

?>