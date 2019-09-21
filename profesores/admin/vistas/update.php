<?php 
    require '../controller/conexionBD.php';

    if (isset($_SESSION['login'])){
        
    }else{
        header('Location: index.php?Acceso=Denegado');//Aqui lo redireccionas al lugar que quieras.
    } 
    require '../includes/header.php';
    require '../includes/navbar.php'; 
    $result = "";
    $query = "";
  
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT docente.id, docente.name, docente.lastname, docente.image,
        docente.email, docente.descripcion, docente.created_at, sede.nombre_sede FROM docente INNER JOIN sede ON docente.sede_id = sede.id_sede WHERE docente.id = $id;";
        $result = mysqli_query($connection, $query);
    }
?>

    <div class="container">
    <?php while($row = mysqli_fetch_array($result)) {?>
        <form action="../controller/updateTeacher.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data" class="my-5">
       
            
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="nombre">Actualizar Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['name']; ?>">
                </div>
                <div class="form-group col-md-6">
                <label for="apellido">Actualizar Apellido</label>
                <input type="texts" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo $row['lastname']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Actualizar Email</label>
                <input type="email" class="form-control" id="email" name="email"  placeholder="Email" value="<?php echo $row['email']; ?>">
            </div>
            
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../../public/img/<?php echo $row['image']; ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Imagen Actual</p>
                </div>
            </div>

            <div class="form-group">
                <label for="chooser">Actualizar imagen</label>
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="chooser" name="file" lang="es">
                <label class="custom-file-label" for="customFileLang">Seleccionar imagen</label>
                </div>
            </div>
            <div class="form-group">
            <label for="area">Actualizar Descripcion personal</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Descripcion personal</span>
                    </div>
                    <textarea name="area" id="area" class="form-control" aria-label="With textarea"><?php echo $row['descripcion']; ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Sede actual</label>
                <input type="text" class="form-control" id="sedeAct" name="sedeAct"  value="<?php echo $row['nombre_sede']; ?>" readonly>
            </div>
            <?php }?> 
            
            <div class="form-group">
                <label for="sede"> Actualizar sede</label>
                <?php require('../includes/chooser.php'); ?>
            </div>
            


            <button type="submit" name="update" class="btn btn-primary">Actualizar</button>
        </form>

    </div>

<?php require '../includes/footer.php'; ?>
