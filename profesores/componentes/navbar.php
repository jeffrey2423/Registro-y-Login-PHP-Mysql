
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://www.eldiamante.com.co/">IEO El Diamante</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo basename($_SERVER['PHP_SELF']);?>?render=biografia">Biografias <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo basename($_SERVER['PHP_SELF']);?>?render=registro">Registro Docentes</a>
      </li>
    </ul>
  </div>
</nav>

<script>

$( '#navbarNav .navbar-nav a' ).on( 'click', function () {
	$( '#navbarNav .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});

</script>

<?php
if(isset($_GET['render'])){ 
  switch($_GET['render']){
      case "biografia": header('Location: ../index.php'); break;
      case "registro":  header('Location: ../vistas/vista-registro.php');  break;
      default: header('Location: ../index.php'); break;
  }
}
?>