<?php

require('functions/connection.php');

$errors = array();

$sql = "SELECT  * FROM comentarios";

$result = $mysqli -> query($sql);

//var_dump($result);

?>

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
    <div class="container">
        <div class="comentarios">
            <h2>Sistema de Comentarios</h2>

            <?php
                if ($result){
                    //VERIFICAMOS SI EL QUERY  SE EJECUTO CORRECTAMENTE 
                    if($result -> num_rows > 0){
                        //VAMOS A VER SI EL RESULTADO NOS REGRESO UN NUMERO DE ROWS MAYOR A CERO, ESTO QUIERE DECIR QUE SI HAY DATOS 
                        //num_rows es mayor a 0, significa que si hay registros  
                        while($comentario = $result -> fetch_assoc()){
                             // despues en un ciclo while vamos a guardar en una variable $comentario el valor que nod devuelve 
                             //la consulta del resultado y con "fetch_assoc" lo vamos a guardar en un arreglo, y lo 
                             // vamos a representar como un arreglo asiativo, por lo cual el comentario lo vamos a tener
                             //cada fila de lo que es nuestra base de datos 
            ?>




            <div class="comentario">
      <!--  asi que despues vamos a tomar la variable comentario y vamos a imprimir el indice que necesitamos, en este caso el campo nombre  -->
            <p><span>Autor: </span> <?php echo $comentario['nombre'] ?> </p>   

            <p><span>Calificacion: </span> <?php echo $comentario['calificacion'] ?> </p>

            <p><span>Fecha: </span> <?php echo $comentario['fecha'] ?></p>

            <p><span>Comentario: </span> <?php echo $comentario['comentario'] ?> </p>
            <div class="acciones">
                <!-- por ultimo vamos a crear un enlace y en este vamos  a poner lo que es borrar.php la cual vamos a ser una pagina que ya la creamos
            y la vamos a mandar por metodo GET  lo que es el ID y en este caso estamos imprimiendo lo que es el ID con lo que es nuestra variable comentario  -->
                <a href="borrar.php?id=<?php echo $comentario['id'];?>"><button class="borrar"> <i class="fas fa-trash"></i> Borrar</button></a>
                <a href="editar.php?id=<?php echo $comentario['id'];?>"><button class="editar"><i class="fas fa-edit"></i> Editar</button></a>
            </div>    
        </div>
        
        <?php


                    } 
                } else { //nos vamos al else de este condicional y si hay algun error lo vamos a almacenar en esta lista, dado que si un ROW nos 
                        //diera cero, osea que no exista 
                    $errors[] = "No hay ningun comentario";
                }
            } else { // hacemos los mismo, almacenar en esa variable y se mostrara despues del error principal, dado que que $result nos daria "false"
                     // 
                $errors [] = "Hubo un error en la consulta";
            }

            
            if(count($errors)>0){  // y despues en esta condicional el "count" va a trabajar contando que si $errors tiene mas de un valor, 
                                    //imprimimos un div con la clase de error 
                    echo "<div class  = 'error'>";
                    foreach($errors as $error){ // y ponemos aqui un foreach desde que la variable $errors va a almacenar en la variable $error 
                        echo "<i class = 'fas fa-exclamation-circle'></i> ".$error." <br>"; // asi que aqui lo vamos a imprimir con un peque;o icono desde 
                                                                                            // awsome icons, nos va imprimir todos nuestros errores  

                    }
                    echo "</div>";

            }
        ?>      
    </div>          
</div>

        <div class="btn-add">

            <a href=""> <i class="fas fa-plus-circle"></i> </a>
        </div>
</body>
</html>