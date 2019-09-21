<?php 
    require 'controller/conexionBD.php';

    if (isset($_SESSION['login'])){
        
    }else{
        header('Location: index.php?Acceso=Denegado');//Aqui lo redireccionas al lugar que quieras.
    }
    
    require 'includes/header.php';
    require 'includes/navbar.php'; 
?>
<main class="container-fluid p-5">
      <!-- MESSAGES -->

      <?php require 'includes/alert.php'; ?>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="table-tab" data-toggle="tab" href="#table" role="tab" aria-controls="home" aria-selected="true">Docentes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="registro-tab" data-toggle="tab" href="#registro" role="tab" aria-controls="profile" aria-selected="false">Registrar Docente</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="table" role="tabpanel" aria-labelledby="home-tab">
        <?php require 'includes/table.php'; ?>
            
        </div>
        <div class="tab-pane fade" id="registro" role="tabpanel" aria-labelledby="profile-tab">
        <?php require 'includes/register-form.php'; ?>
        </div>
    </div>

</main>

<?php require 'includes/footer.php'; ?>