<?php include('../functions/connection.php') ?>

<?php include('header.php') ?>
<div class="container pt-5">
    <h2>Crear una nueva tarea</h2>

    <form action="../functions/registroTareas.php" method="POST">
        <div class="Registro">

            <div class="form-group">
                <label class="form-label mt-4">Tarea</label>
                <input type="text" class="form-control" name="nombreta" placeholder="Ingrese el nombre de la tarea">
            </div>
            <div class="form-group">
                <label class="form-label mt-4">fecha</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="form-group">
                <label class="form-label mt-4">Fecha de entrega</label>
                <input type="date" class="form-control" name="fecha_entrega">
            </div>
            <div class="form-group">
                <label class="form-label mt-4">Materia</label>
                <input type="text" class="form-control" name='materia' placeholder="Ingresa la materia">
            </div>
            <div class="form-group">

                <?php if (isset($_SESSION['message'])) { ?>

                    <label class="form-label mt-4">Profesor</label>
                    <input type="text" class="form-control" name='username' value="<?= $_SESSION['message_name_do'] ?>">
                <?php
                } ?>
            </div>

            <div class="col-12 d-flex  justify-content-end">
                <button type="submmit" class="btn btn-primary m-2" name="guardar">Guardar </button>
            </div>

        </div>
    </form>
</div>

<?php include('footer.php') ?>