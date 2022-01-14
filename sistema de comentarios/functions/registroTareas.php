<?php
include("connection.php");

if (isset($_POST['guardar'])) {
    $tarea = $_POST['nombreta'];
    $fecha = $_POST['fecha'];
    $fecha_entrega = $_POST['fecha_entrega'];
    $materia = $_POST['materia'];
    $id = $_SESSION['message_id_do'];

    $sql = "INSERT INTO asignatura VALUES(null,'$id','$materia');";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "SELECT id_asig FROM asignatura WHERE id_do='$id';";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
    $id_asig = $row['id_asig'];

    $sql = "INSERT INTO tareas VALUES(null,'$id_asig','$tarea','$fecha', '$fecha_entrega', null);";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Location: ../Vista/tareas.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
