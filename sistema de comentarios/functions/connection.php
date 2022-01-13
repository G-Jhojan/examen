<?php

$mysqli = new mysqli("localhost", "root", "","registro_notas") ;

// evaluar que se haya conectado correctamente
if($mysqli -> connect_errno){


    echo "fallo al conectar, numero de error". $mysqli -> errno. "<br> Descripcion del error ".$mysqli-> connect_error ;

    echo "algo salio mal, intenta de nuevo";
} else {
    //echo "se conecto exitosamente, sigue asi bro";
}