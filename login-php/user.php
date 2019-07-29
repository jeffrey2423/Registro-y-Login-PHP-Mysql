<?php 
session_start();

include 'php/database.php';

 if(($_SESSION['login']==true))
 {
   
 }
 else
 {
  header("location:index.php?Error=Acceso denegado");
 }

?>

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
<div class="app container">
          <div class="jumbotron  mt-sm-5">
            <p class ="lead text-center display-4">Bienvenido <?php echo $_SESSION['usuario'];?></p>
            <hr class="my-4">
            <p class="lead text-center">
                <a class="btn btn-primary btn-lg" href="./login.php" role="button">Inicia sesion</a> <a class="btn btn-primary btn-lg" href="./signup.php" role="button">Registrate</a>
            </p>
          </div>
    
</div>


</body>
</html>
   