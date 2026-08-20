<?php

$host = "localhost";
$usuario = "root";
$password = "";
$bd = "dulce_tentación";

$conn = mysqli_connect(
    $host,
    $usuario,
    $password,
    $bd
);

if(!$conn){
    die("Error de conexión");
}

?>