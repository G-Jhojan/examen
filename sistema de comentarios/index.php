<?php include('Vista/header.php') ?>

<div class="container pt-5">
    <div class="comentarios">
        <div class="container p-5 my-5 bg-primary text-white rounded-pill">
            <h2>Login.</h2>
        </div>

        <form action="functions/autenticacion.php" method="POST">
            <div class="Registro">

                <label for="exampleInputEmail1" class="form-label mt-4">Usuario</label>
                <input type="text" class="form-control" name="username" placeholder="Ingresa tu usuario">
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4"> Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

            </div>
            <div class="d-flex justify-content-end">
                <a href="Vista/registro.php" class="btn btn-info m-2" name="registrarse">Registrarse </a>

                <button type="submmit" class="btn btn-primary m-2" name="ingresar">Ingresar </button>

            </div>

        </form>

    </div>
</div>
<?php include('Vista/footer.php') ?>