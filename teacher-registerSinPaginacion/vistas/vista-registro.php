<?php
    require '../php/conexionBD.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro y biografia docentes </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/index.css">
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
      <li class="nav-item">
        <a class="nav-link" href="<?php echo basename($_SERVER['PHP_SELF']);?>?render=registro">Registro Docentes</a>
      </li>
    </ul>
  </div>
</nav>



<?php
if(isset($_GET['render'])){ 
  switch($_GET['render']){
      case "biografia": header('Location: ../index.php'); break;
      case "registro":  header('Location: vista-registro.php');  break;
      default: header('Location: ../index.php'); break;
  }
}
?>
<div class="container">
    <?php
            require '../componentes/alert.php';
    ?>
</div>
<div class="container my-3">
            <div class="card mb-3" >

                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="registro">
                        <img src="https://i2.wp.com/cdn.dribbble.com/users/43762/screenshots/2391583/open-uri20151207-3-ku974m" height="auto" width="auto" class="card-img-top" alt="...">
                            <?php
                                require '../componentes/register-form.php';
                            ?>
                        </div>
                    </div>

                </div>

            </div>

</div>


<?php
        require '../componentes/footer.php';
?>


</html>