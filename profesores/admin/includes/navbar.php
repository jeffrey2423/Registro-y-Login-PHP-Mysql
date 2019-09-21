<?php 
    $archivo =  basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="http://www.eldiamante.com.co/">IEO El Diamante</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav w-100">
    <?php if ($archivo == "index.php") { ?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
    <?php } ?>

    <?php if ($archivo == "admin.php") { ?>
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
    <?php } ?>
    <?php if ($archivo == "update.php") { ?>
      <li class="nav-item active">
        <a class="nav-link" href="../admin.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
    <?php } ?>

      <?php if (isset($_SESSION['login'])) { ?>
      <li class="nav-item dropdown ml-auto">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['username'];  ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="controller/signOut.php">Cerrar sesion</a>
            </div>
      </li>
      <?php } ?>

    </ul>  
  </div>
</nav>