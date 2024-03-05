<!-- Controlador encargado del método READ -->

<?php

class EmployeesController{

  // propiedades
  private $employeesModel;

  private $resultCreate;
  private $resultFixedDataCreate;

  private $resultRead;

  private $resultUpdate;
  private $resultFixedDataUpdate;

  private $resultDelete;


  // constructor
  public function __construct($employeesModel){
    $this->employeesModel = $employeesModel;
  }


  // métodos

  //* CREATE
  public function CreateEmployees($data){
    $alertAdicion = "";

    // Recopilación de datos del formulario
    $primernombre = (isset($data['primernombre']) ? $data['primernombre'] : "");
    $segundonombre = (isset($data['segundonombre']) ? $data['segundonombre'] : "");
    $primerapellido = (isset($data['primerapellido']) ? $data['primerapellido'] : "");
    $segundoapellido = (isset($data['segundoapellido']) ? $data['segundoapellido'] : "");

    $foto = (isset($_FILES['foto']['name']) ? $_FILES['foto']['name'] : "");
    $cv = (isset($_FILES['cv']['name']) ? $_FILES['cv']['name'] : "");

    $id_dpto_string = (isset($data['id_dpto']) ? $data['id_dpto'] : "");
    $id_dpto = (int) $id_dpto_string;
    $id_puesto_string = (isset($data['id_puesto']) ? $data['id_puesto'] : "");
    $id_puesto = (int) $id_puesto_string;

    $fechadeingreso = (isset($data['fechadeingreso']) ? $data['fechadeingreso'] : "");
    $mail = (isset($data['mail_input']) ? $data['mail_input'] : "");
    $password = (isset($data['password_input']) ? $data['password_input'] : "");
    

    // Manejo de datos por parte del Modelo
    $this->resultCreate = $this->employeesModel->CreateEmployeesModel(
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
      $password
    );

    // True, creación exitosa. False, creación fallida
    if($this->resultCreate == true){
       // Mensaje de adición del empleado
      $alertAdicion = "Empleado añadido";
    }
    else if ($this->resultCreate == false) {
       // Mensaje de error en la adición del empleado
      $alertAdicion = "Error, no se pudo añadir los datos.";
    }

    // Redireccionamiento hacia el index_employees
    header("Location:index_employees.php?mensaje=" . $alertAdicion);
  }
  //* aux - create
  public function FixedDataCreateForm($id_dpto){

    // Obtención de datos
    $this->resultFixedDataCreate = $this->employeesModel->FixedDataCreateFormModel($id_dpto);

    // Retorno de los datos
    return $this->resultFixedDataCreate;
  }



  //*  READ
  public function ReadEmployees(){
    
    // Obtención de datos a través del método
    $this->resultRead = $this->employeesModel->ReadEmployeesModel();

    // Retorno de los datos obtenidos
    return $this->resultRead;
  }



  //* UPDATE
  public function UpdateEmployees($data){
    $alertUpdate = "";
    

    // Recopilación de datos del formulario
    $txtID = (int) (isset($data['txtID'])) ? $data['txtID'] : "";
    $primernombre = (isset($data['primernombre']) ? $data['primernombre'] : "");
    $segundonombre = (isset($data['segundonombre']) ? $data['segundonombre'] : "");
    $primerapellido = (isset($data['primerapellido']) ? $data['primerapellido'] : "");
    $segundoapellido = (isset($data['segundoapellido']) ? $data['segundoapellido'] : "");

    $foto = (isset($_FILES['foto']['name']) ? $_FILES['foto']['name'] : "");
    $cv = (isset($_FILES['cv']['name']) ? $_FILES['cv']['name'] : "");

    $id_dpto = (int) (isset($data['id_dpto']) ? $data['id_dpto'] : "");
    $id_puesto = (int) (isset($data['id_puesto']) ? $data['id_puesto'] : "");
    $fechadeingreso = (isset($data['fechadeingreso']) ? $data['fechadeingreso'] : "");

    $mail = (isset($data['mail_input']) ? $data['mail_input'] : "");
    $password = (isset($data['password_input']) ? $data['password_input'] : "");

    //var_dump($txtID);
    //var_dump($foto);

    // Manejo de los datos en el Modelo
    $this->resultUpdate = $this->employeesModel->UpdateEmployeesModel(
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
      $password
    );

    // True, update exitosa. False, update fallida
    if($this->resultUpdate == true){
      // Mensaje de update del empleado
      $alertUpdate = "Empleado actualizado";
    }
    else if ($this->resultUpdate == false) {
      // Mensaje de error en la update del empleado
      $alertUpdate = "Error, no se pudo actualizar los datos.";
    }

    // Redireccionamiento hacia el index_employees
    header("Location:index_employees.php?mensaje=" . $alertUpdate);

  }
  //* aux- update
  public function FixedDataUpdateForm($id_empleado){

    // Obtención de datos
    $this->resultFixedDataUpdate = $this->employeesModel->FixedDataUpdateFormModel($id_empleado);

    // Retorno de los datos obtenidos
    return $this->resultFixedDataUpdate;
  }



  //* DELETE
  public function DeleteEmployees($id){
    echo "<script>console.log('dentro del método' + '$id');</script>";

    // Ejecución del borrado  a través del método
    $this->resultDelete = $this->employeesModel->DeleteEmployeesModel($id);

    // True, borrado exitoso. False, borrado fallido.
    if($this->resultDelete == true){
      return "Empleado eliminado";
    }
    elseif ($this->resultDelete == false) {
      return "Error, hay tareas asignadas.";
    }
  }
}


// CLASES Y VARIABLES NECESARIAS
include(__DIR__ . '/../../../bd.php');
include(__DIR__ . '/../model/EmployeesModel.php');

// INTANCIAS
$employeesModel = new EmployeesModel($conexion);
$employeesController = new EmployeesController($employeesModel);

?>