<?php
include("connection.php");

if (isset($_POST['registrarse'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    echo $username, $password, $email, $direccion, $nombre, $apellido;

    $sql = "INSERT INTO docentes VALUES(null,'$nombre','$apellido','$email','$direccion','$username','$password');";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Location: ../index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header('Location: ../Vista/registro.php');
    }

}
