<?php
include("conexion.php");

if(isset($_POST['ingresar'])){

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$sql="SELECT * FROM usuarios
WHERE usuario='$usuario'
AND contrasena='$contrasena'";

$resultado=mysqli_query($conn,$sql);

if(mysqli_num_rows($resultado)>0){

header("Location:index.php");

}else{

echo "Usuario incorrecto";

}

}
?>

<form method="POST">

<input type="text" name="usuario" placeholder="Usuario">

<input type="password" name="contrasena" placeholder="Contraseña">

<button name="ingresar">
Ingresar
</button>

</form>