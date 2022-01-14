<?php
include("connection.php");



if (isset($_POST['ingresar'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // echo $username, $password;

    $sql = "SELECT id_do from docentes WHERE usuario_do='$username' AND clave_do='$password';";
    $result = mysqli_query($conn, $sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row['id_do'];
        $_SESSION['message_id_do'] = $id;
        
        $sql1 = "SELECT nombre_do, apellido_do from docentes WHERE id_do='$id';";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = $result1->fetch_assoc();
        $nombre = $row1['nombre_do'];
        $apellido = $row1['apellido_do'];
        echo $nombre, $apellido;
        $_SESSION['message_name_do'] = $nombre . " " . $apellido;

        header('Location: ../Vista/tareas.php');
    } else {
        die("Query Failed.");
        header('Location: ../index.php');
    }
}
