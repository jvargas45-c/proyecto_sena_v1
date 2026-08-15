<?php

include("conexion.php");

if(isset($_POST['registrar'])){

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$sql="INSERT INTO usuarios
(nombre,correo,usuario,contrasena,rol)
VALUES
('$nombre','$correo','$usuario','$contrasena','cliente')";

mysqli_query($conexion,$sql);

echo "Usuario registrado";

}

?>

<form method="POST">

<input type="text" name="nombre">

<input type="email" name="correo">

<input type="text" name="usuario">

<input type="password" name="contrasena">

<button name="registrar">
Registrar
</button>

</form>