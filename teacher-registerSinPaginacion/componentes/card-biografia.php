<?php
require './php/conexionBD.php';
?>
    <div class="card-title">
        <?php
        require 'chooser.php';
        ?>
    </div>

    

    
<div id="card-deck">
    <?php
    /*$articulosXpagina = 3;

    $query="SELECT * FROM user";
    
    $execute=mysqli_query($connection,$query);
    $filas =  mysqli_num_rows($execute);
    $paginas = ceil($filas/$articulosXpagina);*/

     /*if(!$_GET){
         header('Location:index.php?pagina=1');
     }
     if($_GET['pagina']>$paginas || $_GET['pagina']<=0 ){
        header('Location:index.php?pagina=1');
     }
     
     /*$iniciar = ($_GET['pagina']-1)*$articulosXpagina;

     
     $queryLimit="SELECT * FROM user LIMIT $iniciar,$articulosXpagina"; 
     $executeLimit=mysqli_query($connection,$queryLimit);*/

    ?>

</div>


<div class="card-footer">
      <?php
        //require 'paginacion.php';
      ?>
</div>