<?php

// ESTE ARCHIVO ACCEDE A LA SESSIÓN Y LA DESTRUYE
session_start();
session_destroy();

// REDIRECCIONAMIENTO HACIA LA PÁGINA DE LOGIN
header("Location:./login.php");

?>