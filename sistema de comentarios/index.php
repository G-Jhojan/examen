<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE COMENTARIOS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="sha384-enpDwFISL6M3ZGZ50Tjo8m65q06uLVnyvkFO3rsoW0UC15ATBFz3QEhr3hmxpYsn" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/estilos.css"> -->
    <!-- <link rel="stylesheet" href="css/all.min.css"> -->
    <link rel="stylesheet" href="css/insertar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">


</head>

<body>
    <div class="container pt-5">
        <div class="comentarios">
            <h2>Login.</h2>



            <form>
                <fieldset>
                    <!-- <legend _msthash="2737891" _msttexthash="92430">Registrese para poder generar los datos</legend> -->
                    <div class="Registro">



                        <!-- <div class="form-group"> -->
                        <label for="exampleInputEmail1" class="form-label mt-4" _msthash="3145532" _msttexthash="868153">Correo Electronico.</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" _mstplaceholder="751400">
                        <!-- <small id="emailHelp" class="form-text text-muted" _msthash="2500745" _msttexthash="2221635">Nunca compartiremos tu correo electrónico con nadie más.</small> -->
                        <!-- </div> -->
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label mt-4" _msthash="3145779" _msttexthash="182013"> Password</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" _mstplaceholder="182013">
                        </div>
                        <div class="boton1">

                            <button type="button" class="btn btn-primary" _msthash="1333917" _msttexthash="115193">Registrarse </button>

                            </div>


                            <div class="boton2">

                            <button type="button" class="btn btn-danger" _msthash="1333917" _msttexthash="115193">Ingresar </button>

                            </div>


                        

                        
                        <!-- <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label mt-4" _msthash="3145779" _msttexthash="182013">Asignatura</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" _mstplaceholder="182013">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label mt-4" _msthash="3145779" _msttexthash="182013">Profesor</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" _mstplaceholder="182013">
                        </div> -->
                    </div>

            </form>


            <!--  -->


            <?php
            /*if (count($errors) > 0) {  // y despues en esta condicional el "count" va a trabajar contando que si $errors tiene mas de un valor, 
                    //imprimimos un div con la clase de error 
                    echo "<div class = 'error'>";
                    foreach ($errors as $error) { // y ponemos aqui un foreach desde que la variable $errors va a almacenar en la variable $error 
                        echo "<i class = 'fas fa-exclamation-circle'></i>  $error.<br>"; // asi que aqui lo vamos a imprimir con un peque;o icono desde 
                        // awsome icons, nos va imprimir todos nuestros errores 
                    }
                    echo "</div>";
                }
                $mysqli -> close();*/
            ?>
            <!-- <a href="index.php">REGRESAR A LA PAGINA DE INICIO</a> -->



        </div>
    </div>





    <div class="btn-add">

        <a href=""> <i class="fas fa-plus-circle"></i> </a>
    </div>
    <!-- ES UN ARCHIVO JS PARA LAS ANIMACIONES, QUE FUNCIONE EL TEMA QUE NECESITAMOS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>