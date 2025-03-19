<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $correo = $_POST['Correoelectronico'];
    $contraseña = password_hash($_POST['Contraseña'], PASSWORD_BCRYPT);

    $sql = "SELECT id FROM usuarios WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "El correo ya está registrado.";
    } else {
        $sql = "INSERT INTO usuarios (nombre, apellido, correo, contraseña) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nombre, $apellido, $correo, $contraseña);

        if ($stmt->execute()) {
            echo "Registro exitoso. <a href='Ingreso.html'>Iniciar sesión</a>";
        } else {
            echo "Error al registrar.";
        }
    }

    $stmt->close();
    $conn->close();
}
?>
