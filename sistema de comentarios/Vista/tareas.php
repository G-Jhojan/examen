<?php include('../functions/connection.php') ?>

<?php include('header.php') ?>
<div class="container pt-5">
  <div class="container d-flex m-2 bg-primary text-white rounded justify-content-start">
    <h2>Tareas</h2>
  </div>

  <div class="col-12 d-flex  justify-content-center">
    <a href="./crearTarea.php" class="btn btn-primary">Nueva tarea </a>
  </div>

  <!-- Table -->

  <div class="mt-5">
    <table class="table table-striped" id="table">
      <thead>
        <tr>
          <th scope="col">Todo</th>
          <th scope="col">Fecha creación</th>
          <th scope="col">
            <div class="d-flex justify-content-start">
              Fecha entrega
            </div>
          </th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>

        <?php
        $query = "SELECT * FROM tareas";
        $result_tasks = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombre_ta']; ?></td>
            <td><?php echo $row['fecha_ta']; ?></td>
            <td><?php echo $row['fentrega_ta']; ?></td>
            <td>
              <a href="detalles_tarea.php?id=<?php echo $row['id_ta'] ?>" class="btn btn-secondary">
                <i class="fas fa-marker">Calificar </i>
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <div class="col-12 d-flex  justify-content-center">
    <a type="submmit" class="btn btn-primary" name="reportes">REPORTES </a>
  </div>
</div>
<?php include('footer.php') ?>