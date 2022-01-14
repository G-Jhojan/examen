<?php

require('functions/connection.php');

$errors = array();


if (isset($_GET['id'])) {
    //verificamos que nos envien ID// y si nos envian un ID vamos  
    $idComentario  = $_GET['id']; // aqui es la referencia que se hace cuando llamos el ID de los botones 
    //debemos verificar que no venga vacia, eso lo hacemos con un condicional if
    if (empty($idComentario)) {  //con el empty verificamos que no venga vacio 

        $errors[] = "El id esta vacio";
    } else {
        // si el id no esta vacio, entonces seria correcto y empezaremos con nuestra sentencia sql 
        $sql = "DELETE  FROM comentarios WHERE id = $idComentario";
        $result = $mysqli->query($sql);
    }
} else {
    $errors[] = "no puedes estar en esta pagina";
}
?>



<!-- AQUI PEGAMOS EL DISE;O  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE COMENTARIOS</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">


</head>

<body>
    <div class="container pt-5">
        <div class="comentarios">
            <h2>Borrar Comentarios</h2>


            <div class="comentario">
                <?php
 
                if (isset($result)) {
                    // verificamos si la variable esta definida, entonces podemos trabajar 
                    if ($result) {
                        //verificamos, que la variable nos devuelve un TRUE, para seguir con la ejecucion de nuestro query
                        if ($mysqli->affected_rows > 0) {
                            // si todo lo de arriba se cumple,entonces vamos a imprimir algo, ya estamos verificando si todas las
                            //pruebas fueron correctas entonces imprimios un mensaje 
                            echo "<div class='success'><i class='fas fa-check-circle'></i> Comentario Borrando Correctamente </div> ";
                                //<div class="comentario">
                            //

                        } else {
                            $errors[] = "Este comentario no exise";
                        }

                    } else {
                        $errors[] = "Error en la consulta";
                    }
                }

            ?>

                <?php
                if (count($errors) > 0) {  // y despues en esta condicional el "count" va a trabajar contando que si $errors tiene mas de un valor, 
                    //imprimimos un div con la clase de error 
                    echo "<div class = 'error'>";
                    foreach ($errors as $error) { // y ponemos aqui un foreach desde que la variable $errors va a almacenar en la variable $error 
                        echo "<i class = 'fas fa-exclamation-circle'></i>  $error.<br>"; // asi que aqui lo vamos a imprimir con un peque;o icono desde 
                        // awsome icons, nos va imprimir todos nuestros errores 
                    }
                    echo "</div>";
                }

                $mysqli -> close();
                 ?>
                 <a href="index.php">REGRESAR A LA PAGINA DE INICIO</a>
                 
            </div>

        </div>
    </div>





    <div class="btn-add">

        <a href=""> <i class="fas fa-plus-circle"></i>  </a>
    </div>
</body>

</html>