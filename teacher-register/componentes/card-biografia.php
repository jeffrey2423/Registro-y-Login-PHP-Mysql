<?php
require './php/conexionBD.php';
?>
    <div class="card-title">
        <?php
        require 'chooser.php';
        ?>
    </div>
<div class="card-deck my-5" style="">
    <?php
    $articulosXpagina = 3;

    $query="SELECT * FROM user";
    
    $execute=mysqli_query($connection,$query);
    $filas =  mysqli_num_rows($execute);
    $paginas = ceil($filas/$articulosXpagina);

     if(!$_GET){
         header('Location:index.php?pagina=1');
     }
     if($_GET['pagina']>$paginas || $_GET['pagina']<=0 ){
        header('Location:index.php?pagina=1');
     }
     
     $iniciar = ($_GET['pagina']-1)*$articulosXpagina;

     
     $queryLimit="SELECT * FROM user LIMIT $iniciar,$articulosXpagina"; 
     $executeLimit=mysqli_query($connection,$queryLimit);

    ?>
    <?php 
        setlocale(LC_ALL,"es_ES");

        while ($result=mysqli_fetch_array($executeLimit)) { 
    ?>
    <div class="card">
        <img src="https://www.bootdey.com/img/Content/avatar/avatar7.png" class="card-img-top"  alt="ProfilePhoto">
        <div class="card-body">
            <h5 class="card-title"><?php echo $result['name']; ?></h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Creado a las <?php echo date_format(date_create($result['created_at']), 'g:ia \o\n l jS F Y'); ?></small>

        </div>
    </div>

    <?php     
        }
    ?> 
</div>

<div class="card-footer">
      <?php
        require 'paginacion.php';
      ?>
</div>