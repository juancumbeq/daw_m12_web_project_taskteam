<!-- Este archivo es el encargado de hacer las peticiones a la base de datos
para obtener los datos de los usuarios correspondientes  -->

<?php

class UserModel {
  //propiedades
  private $conexion;

  //contructor
  public function __construct($conexion) {
    $this->conexion = $conexion;
  }

  //métodos
  public function verificarCredenciales($mail, $password) {

    // VERIFICAMOS SI ES JEFE DE DEPARTAMENTO
    $sentencia = $this->conexion->prepare("SELECT *, count(*) AS n_dptos FROM tbl_jefes_dptos WHERE mail_dpto=:mail AND password_dpto=:password ");

    $sentencia->bindParam(":mail", $mail);
    $sentencia->bindParam(":password", $password);
    $sentencia->execute();

    $lista_tbl_dptos = $sentencia->fetch(PDO::FETCH_LAZY); // SI EL USUARIO NO ES JEFE DE DPTO EL REGISTRO DEVUELTO ESTARÁ VACÍO

    
    // VERIFICAMOS SI ES EMPLEADO
    $sentencia = $this->conexion->prepare("SELECT *,
      (SELECT nombre_dpto FROM tbl_jefes_dptos WHERE id_jefe_dpto_PK = tbl_empleados.id_jefe_dpto_FK) AS nombre_dpto_empleado,
      count(*) AS n_empleados
    FROM tbl_empleados 
    WHERE mail_empleado=:mail 
    AND password_empleado=:password ");

    $sentencia->bindParam(":mail", $mail);
    $sentencia->bindParam(":password", $password);
    $sentencia->execute();

    $lista_tbl_empleados = $sentencia->fetch(PDO::FETCH_LAZY);




    // RETORNO DE USERDATA O MENSAJE DE ERROR  EN FUNCIÓN DE LA RESPUESTA DE LA DB
    if (($lista_tbl_dptos["n_dptos"] > 0) && ($lista_tbl_empleados["n_empleados"] < 1)) {
      // El usuario es jefe de dpto
      return $lista_tbl_dptos;
    
    } else if (($lista_tbl_empleados["n_empleados"] > 0) && ($lista_tbl_dptos["n_dptos"] < 1)) {
      // El usuario es empleado
      return $lista_tbl_empleados;
    } else {
      // No se encontraron registros
      return null;
    }
  }
}
?>