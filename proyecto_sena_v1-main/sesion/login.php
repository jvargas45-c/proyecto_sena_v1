<?php
session_start();
include("../conexion.php"); // Ajusta la ruta si es necesario

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE correo = ?";

$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "s", $correo);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($resultado) == 1) {

    $usuario = mysqli_fetch_assoc($resultado);

    if (password_verify($contrasena, $usuario['contrasena'])) {

        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['nombre'] = $usuario['nombre'];

        header("Location: ../index.php");
        exit;

    } else {
        echo "Contraseña incorrecta";
    }

} else {
    echo "El correo no está registrado.";
}
?>