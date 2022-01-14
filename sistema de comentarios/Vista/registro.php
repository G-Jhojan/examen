<?php include('header.php') ?>
<div class="container pt-5">
    <h2>Registro de Usuarios</h2>

    <form action="../functions/registroDocente.php" method="POST">
        <div class="Registro">

            <div class="form-group">
                <label class="form-label mt-4">Dirección de correo electrónico</label>
                <input type="email" class="form-control" name="email" placeholder="Ingrese el correo electrónico">
                <small class="form-text text-muted">Nunca compartiremos tu correo electrónico con nadie más.</small>
            </div>
            <div class="form-group">
                <label class="form-label mt-4">Contraseña</label>
                <input type="text" class="form-control" name="password" placeholder="Ingresa una contraseña">
            </div>
            <div class="form-group">
                <label class="form-label mt-4">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre">
            </div>
            <div class="form-group">
                <label class="form-label mt-4">Apellido</label>
                <input type="text" class="form-control" name='apellido' placeholder="Ingresa tu apellido">
            </div>
            <div class="form-group">
                <label class="form-label mt-4">Usuario</label>
                <input type="text" class="form-control" name='username' placeholder="Ingresa tu usuario">
            </div>
            <div class="form-group">
                <label class="form-label mt-4">Dirección</label>
                <input type="text" class="form-control" name="direccion" placeholder="Ingresa tu dirección">
            </div>

            <div class="col-12 d-flex  justify-content-end">
                <button type="submmit" class="btn btn-primary m-2" name="registrarse">Registrarse => </button>
            </div>

        </div>
    </form>
</div>
<?php include('footer.php') ?>