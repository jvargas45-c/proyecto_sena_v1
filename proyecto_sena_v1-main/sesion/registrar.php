<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../conexion.php");

if (!$conexion) {
    die("No hay conexión con la base de datos.");
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$usuario = $_POST['usuario'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

$rol = "cliente";

$sql = "INSERT INTO usuarios (nombre, correo, telefono, usuario, contrasena, rol)
VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexion, $sql);

if (!$stmt) {
    die("Error al preparar la consulta: " . mysqli_error($conexion));
}

mysqli_stmt_bind_param(
    $stmt,
    "ssssss",
    $nombre,
    $correo,
    $telefono,
    $usuario,
    $contrasena,
    $rol
);

if (mysqli_stmt_execute($stmt)) {
    echo "✅ Usuario registrado correctamente.";
} else {
    die("❌ Error al registrar: " . mysqli_stmt_error($stmt));
}
?>