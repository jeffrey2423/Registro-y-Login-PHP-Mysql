
<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Bienvenido</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
<link rel="shortcut icon" href="/favicon.ico" />
</head>
 
<body>
<?php
require 'componentes/header.php';
?>

<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

<div class="container p-4">
	<div class="row">
		<div class="col-md-a mx-auto">
			<div class="card text-center">
				<div class="card-header">
					<h3>signUp</h3>
				</div>
				<div class="card-body">
					<img src="img/account.png" alt="logo-user" class="rounded-circle mb-2" width="100px">
					<form action="php/ControladorSignup.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<input type="text" name="nombre" placeholder="Nombre Completo" class="form-control" autofocus="true">
						</div>
						<div class="form-group">
							<input type="text" name="usuario" placeholder="Nombre Usuario" class="form-control" >
						</div>
						<div class="form-group">
							<input type="password" name="clave" placeholder="Contraseña" class="form-control">
						</div>
                        <div class="form-group">
							<input type="password" name="reclave" placeholder="Confirmar contraseña" class="form-control">
						</div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input name="file" type="file" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            </div>
                        </div>
						<div class="form-group">
							<input type="submit" name="registrar" class="btn btn-success btn-block" value="Guardar datos">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>