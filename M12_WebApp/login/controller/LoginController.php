<!-- Controlador encargado del caso de uso LOGIN -->

<?php

class LoginController {

  // propiedades
  private $userModel;

  private $userReturnedData;


  // constructor
  public function __construct($userModel){
    $this->userModel = $userModel;
  }


  // métodos
  public function login($data){

    // Obtención de los datos del formulario
    $mail = $data["mail_input"];
    $password = $data["password_input"];

    // Iniciamos la sesión
    session_start();

    // Hacemos uso del objeto userModel
    $this->userReturnedData = $this->userModel->verificarCredenciales($mail, $password);

    // SI EL ARRAY NO ESTÁ VACÍO PASAMOS A COMPROBAR DE QUÉ A QUÉ ROL CORRESPONDE
    if(!empty($this->userReturnedData) && $this->userReturnedData !== null){

      // Verificamos si el usuario es jefe de departamento
      if(isset($this->userReturnedData['n_dptos']) && $this->userReturnedData["n_dptos"] > 0) {
        $_SESSION['primer_nombre'] = $this->userReturnedData["primer_nombre"];
        $_SESSION['segundo_nombre'] = $this->userReturnedData["segundo_nombre"];
        $_SESSION['primer_apellido'] = $this->userReturnedData["primer_apellido"];
        $_SESSION['nombre_dpto'] = $this->userReturnedData["nombre_dpto"];
        $_SESSION['id_dpto'] = $this->userReturnedData["id_jefe_dpto_PK"];
        $_SESSION['foto'] = $this->userReturnedData["foto"];


        $_SESSION['mail'] = $this->userReturnedData["mail_dpto"];
        $_SESSION['login_jefe_dpto'] = true;
      }
      // Verificamos si el usuario es un empleado
      else if (isset($this->userReturnedData["n_empleados"]) && $this->userReturnedData["n_empleados"] > 0) {
        $_SESSION['id_empleado'] = $this->userReturnedData["id_empleado_PK"];
        $_SESSION['primer_nombre'] = $this->userReturnedData["primer_nombre"];
        $_SESSION['segundo_nombre'] = $this->userReturnedData["segundo_nombre"];
        $_SESSION['primer_apellido'] = $this->userReturnedData["primer_apellido"];
        $_SESSION['foto'] = $this->userReturnedData["foto"];
        $_SESSION['nombre_dpto'] = $this->userReturnedData["nombre_dpto_empleado"];


        $_SESSION['mail'] = $this->userReturnedData["mail_empleado"];
        $_SESSION['login_empleado'] = true;
      }
      
      // Redireccionamos al archivo index_main = HOME
      header("Location:../index_main.php");
    }
    else {
      // Si hay error, retornamos un mensaje
      return $error = "Error: El email o la contraseña son incorrectos";
    }
  }
}

// CLASES Y VARIABLES NECESARIAS
include(__DIR__ . '/../../bd.php');
include(__DIR__ . '/../model/UserModel.php');

// INTANCIAS
$userModel = new UserModel($conexion);
$loginController = new LoginController($userModel);

?>