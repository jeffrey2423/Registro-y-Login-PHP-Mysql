<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro y biografia docentes </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/index.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://www.eldiamante.com.co/">IEO El Diamante</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo basename($_SERVER['PHP_SELF']);?>?render=biografia">Biografias <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo basename($_SERVER['PHP_SELF']);?>?render=registro">Registro Docentes</a>
      </li>
    </ul>
  </div>
</nav>


<?php
if(isset($_GET['render'])){ 
  switch($_GET['render']){
      case "biografia": header('Location: index.php'); break;
      case "registro":  header('Location: vistas/vista-registro.php');  break;
      default: header('Location: ../index.php'); break;
  }
}
?>


    <div class="container my-3">
        <?php
            require 'componentes/contenido-taps.php';
        ?>
    </div>

    <?php
        require 'componentes/footer.php';
    ?>
    

<script src="js/get-teacher-helper.js"> </script>

<!--<script src="js/navbar-item.js"></script>-->

</html>