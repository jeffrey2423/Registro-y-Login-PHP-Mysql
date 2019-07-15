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
					<h3>signUp</h3>
				</div>
				<div class="card-body">
					<img src="assets/img/account.png" alt="logo-user" class="rounded-circle mb-2" width="100px">
					<form action="/signup" method="POST">
						<div class="form-group">
							<input type="text" name="fullname" placeholder="Nombre Completo" class="form-control" autofocus="true">
						</div>
						<div class="form-group">
							<input type="text" name="username" placeholder="Nombre Usuario" class="form-control" >
						</div>
						<div class="form-group">
							<input type="password" name="password" placeholder="Contraseña" class="form-control">
						</div>
                        <div class="form-group">
							<input type="password" name="repassword" placeholder="Confirmar contraseña" class="form-control">
						</div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input name="file" type="file" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                            </div>
                        </div>
						<div class="form-group">
							<button class="btn btn-success btn-block">
								SignUp
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>