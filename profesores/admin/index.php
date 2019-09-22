<?php 
    require 'controller/conexionBD.php';
    if (isset($_SESSION['login'])){
        header('Location: admin.php?Acceso=Denegado');//Aqui lo redireccionas al lugar que quieras.
    }else{
        
    } 
    require 'includes/header.php';
    require 'includes/navbar.php'; 
?>


<div class="container p-4">
<?php require 'includes/alert.php'; ?>
	<div class="row">
		<div class="col-md-a mx-auto">
			<div class="card text-center">
				<div class="card-header">
					<h3>Iniciar Sesion</h3>
				</div>
				<div class="card-body">
					<img src="../public/img/ESCUDO.jpg" alt="logo-user" class="rounded-circle mb-2" width="100px">
					<form action="controller/controladorSignin.php" method="POST">
						<div class="form-group">
							<input type="text" name="usuario" placeholder="Nombre Usuario" class="form-control" >
						</div>
						<div class="form-group">
							<input type="password" name="clave" placeholder="Contraseña" class="form-control">
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
<?php require 'includes/footer.php'; ?>