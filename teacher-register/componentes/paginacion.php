
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item <?php if ($_GET['pagina']<=1) {echo 'disabled';}else{ echo '';} ?>"><a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina'] - 1?>">Atras</a></li>

    <?php
       for($i=0;$i<$paginas;$i++):
    ?>
        <li class="page-item <?php if ($_GET['pagina']==$i + 1) {echo 'active';}else{ echo '';} ?>"><a class="page-link" href="index.php?pagina=<?php echo $i + 1 ?>"><?php echo $i + 1 ?></a></li>
    <?php
        endfor
    ?>

    <li class="page-item <?php if ($_GET['pagina']>=$paginas) {echo 'disabled';}else{ echo '';} ?>"><a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina'] + 1?>">Siguiente</a></li>
  </ul>
</nav>