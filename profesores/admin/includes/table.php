<div class="table-responsive">
<table class="table table-hover my-5">
        <thead class="thead-dark">
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Descripcion</th>
            <th>Fecha Creacion</th>
            <th>Sede</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT docente.id, docente.name, docente.lastname, docente.image,
          docente.email, docente.descripcion, docente.created_at, sede.nombre_sede FROM docente INNER JOIN sede ON docente.sede_id = sede.id_sede";

          $result_tasks = mysqli_query($connection, $query);    
          while($row = mysqli_fetch_array($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td><?php echo $row['nombre_sede']; ?></td>
            <td>
              <a href="./vistas/update.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
            </td>
            <td>
              <a href="./controller/deleteTeacher.php?id=<?php echo $row['id']?>" class="btn btn-danger" id="delete">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
</table>
</div>

<script type="text/javascript">
       (function() {
         var delete = document.getElementById('delete');
         delete.addEventListener("click", function(event) {
           // si es false entonces que no haga el submit
           if (!confirm('Realmente desea eliminar?')) {
             event.preventDefault();
           }
         }, false);
       })();
</script>