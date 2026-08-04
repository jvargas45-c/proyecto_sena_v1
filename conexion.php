<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "dulce_tentacion";

$conn = mysqli_connect($host,$user,$password,$db);

if(!$conn){
    die("Error de conexión");
}

?>