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
<div class="container p-4">
	<div class="row">
		<div class="col-md-a mx-auto">
			<div class="card text-center">
				<div class="card-header">
					<h3>signIn</h3>
				</div>
				<div class="card-body">
					<img src="assets/img/man.png" alt="logo-user" class="rounded-circle mb-2" width="100px">
					<form action="/signin" method="POST">
						<div class="form-group">
							<input type="text" name="username" placeholder="Nombre Usuario" class="form-control" >
						</div>
						<div class="form-group">
							<input type="password" name="password" placeholder="Contraseña" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" name="login" class="btn btn-success btn-block" value="Iniciar sesion">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>