<!-- Controlador encargado del método READ -->

<?php

class TasksController{

  // propiedades
  private $tasksModel;

  private $resultCreate;
  private $resultFixedDataCreate;

  private $resultRead;

  private $resultUpdate;
  private $resultFixedDataUpdate;

  private $resultDelete;


  // constructor
  public function __construct($tasksModel){
    $this->tasksModel = $tasksModel;
  }


  // métodos

  //* CREATE
  public function CreateTasks($data){
    
    // Mensaje de resultado
    $alertAdicion = "";

    // Recopilación de datos del formulario
    $nombre_tarea = (isset($data['nombre_tarea']) ? $data['nombre_tarea'] : "");
    $fecha_inicio = (isset($data['fecha_inicio']) ? $data['fecha_inicio'] : "");
    $fecha_entrega = (isset($data['fecha_entrega']) ? $data['fecha_entrega'] : "");

    $estado_tarea = (int) (isset($data['estado_tarea']) ? $data['estado_tarea'] : "");
    $estado_tarea = (int) $estado_tarea;

    $id_empleado = (int) (isset($data['id_empleado']) ? $data['id_empleado'] : "");
    $id_empleado = (int) $id_empleado;

    $id_dpto = (int) (isset($data['id_dpto']) ? $data['id_dpto'] : "");
    $id_dpto = (int) $id_dpto;

    // Manejo de datos por parte del Modelo
    $this->resultCreate = $this->tasksModel->CreateTasksModel(
      $nombre_tarea,
      $fecha_inicio,
      $fecha_entrega,
      $estado_tarea,
      $id_empleado,
      $id_dpto);

    // True, creación exitosa. False, creación fallida
    if($this->resultCreate == true){
       // Mensaje de adición de la tarea
      $alertAdicion = "Tarea añadida";
    }
    else if ($this->resultCreate == false) {
       // Mensaje de error en la adición de la tarea
      $alertAdicion = "Error!, no se pudo añadir los datos.";
    }

    // Redireccionamiento hacia el index_tasks
    header("Location:index_tasks.php?mensaje=" . $alertAdicion);
  }
  //* aux - create
  public function FixedDataCreateForm($id_dpto){

    // Obtención de datos
    $this->resultFixedDataCreate = $this->tasksModel->FixedDataCreateFormModel($id_dpto);

    // Retorno de los datos
    return $this->resultFixedDataCreate;
  }


  //*  READ - DPTO GENERAL
  public function ReadTasksDptoGeneral($id_dpto){
    
    // Obtención de datos a través del método
    $this->resultRead = $this->tasksModel->ReadTasksDptoGeneralModel($id_dpto);

    // Retorno de los datos obtenidos
    return $this->resultRead;
  }
  //*  READ - DPTO SPECIFIC EMPLOYEE
  public function ReadTasksDptoSpecific($id_empleado){
    
    // Obtención de datos a través del método
    $this->resultRead = $this->tasksModel->ReadTasksDptoSpecificModel($id_empleado);

    // Retorno de los datos obtenidos
    return $this->resultRead;
  }


  //* UPDATE
  public function UpdateTasks($data){

    // Mensaje de aviso de actulización
    $alertUpdate = "";

    // Recopilación de datos del formulario
    $txtID = (isset($data['txtID']) ? $data['txtID'] : "");
    $nombre_tarea = (isset($data['nombre_tarea']) ? $data['nombre_tarea'] : "");
    $fecha_inicio = (isset($data['fecha_inicio']) ? $data['fecha_inicio'] : "");
    $fecha_entrega = (isset($data['fecha_entrega']) ? $data['fecha_entrega'] : "");
    $estado_tarea = (isset($data['estado_tarea']) ? $data['estado_tarea'] : "");
    $id_empleado = (isset($data['id_empleado']) ? $data['id_empleado'] : "");
    $id_dpto = (isset($data['id_dpto']) ? $data['id_dpto'] : "");

    // Manejo de los datos en el Modelo
    $this->resultUpdate = $this->tasksModel->UpdateTasksModel(
      $txtID,
      $nombre_tarea,
      $fecha_inicio,
      $fecha_entrega,
      $estado_tarea,
      $id_empleado,
      $id_dpto);

    // True, update exitosa. False, update fallida
    if($this->resultUpdate == true){
      // Mensaje de update del empleado
      $alertUpdate = "Tarea actualizada";
    }
    else if ($this->resultUpdate == false) {
      // Mensaje de error en la update del empleado
      $alertUpdate = "Error!, no se pudo actualizar los datos.";
    }

    // Redireccionamiento hacia el index_employees
    header("Location:index_tasks.php?mensaje=" . $alertUpdate);

  }
  //* aux- update
  public function FixedDataUpdateForm($id_tarea){

    // Obtención de datos
    $this->resultFixedDataUpdate = $this->tasksModel->FixedDataUpdateFormModel($id_tarea);

    // Retorno de los datos obtenidos
    return $this->resultFixedDataUpdate;
  }


  //* DELETE - DPTO
  public function DeleteTasks($id_tarea){

    // Ejecución del borrado  a través del método
    $this->resultDelete = $this->tasksModel->DeleteTasksModel($id_tarea);

    // True, borrado exitoso. False, borrado fallido.
    if($this->resultDelete == true){
      return "Tarea eliminada";
    }
    elseif ($this->resultDelete == false) {
      return "Error!, no se pudo eliminar.";
    }
  }
}


// CLASES Y VARIABLES NECESARIAS
include(__DIR__ . '/../../../bd.php');
include(__DIR__ . '/../model/TasksModel.php');

// INTANCIAS
$tasksModel = new TasksModel($conexion);
$tasksController = new TasksController($tasksModel);

?>