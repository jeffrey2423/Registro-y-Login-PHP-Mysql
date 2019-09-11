<form action="../php/ControladorSignup.php" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php if (isset($_SESSION['nombre'])){ echo $_SESSION['nombre']; } ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="apellido">Apellido</label>
      <input type="texts" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email"  placeholder="Email">
  </div>
  <div class="form-group">
    <label for="clave">clave</label>
    <input type="password" class="form-control" id="clave" placeholder="Clave">
  </div>
  <div class="form-group">
    <label for="clave2">Confimar clave</label>
    <input type="password" class="form-control" id="clave2" placeholder="Confirmar clave">
  </div>
  <div class="form-group">
    <label for="chooser">Seleccionar imagen</label>
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="chooser" name="file" lang="es">
      <label class="custom-file-label" for="customFileLang">Seleccionar imagen</label>
    </div>
  </div>
  <div class="form-group">
  <label for="area">Descripcion personal</label>
    <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Descripcion personal</span>
          </div>
          <textarea name="area" id="area" class="form-control" aria-label="With textarea"></textarea>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="sede">Seleccionar sede</label>
      <?php require('chooser.php'); ?>
    </div>
  </div>

  <button type="submit" name="registrar" class="btn btn-primary">Registrarse</button>
</form>