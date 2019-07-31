<?php
// autoload.php
// [created] 10 octubre del 2014
// [rebuilded] 9 abril del 2016
// esta funcion elimina el hecho de estar agregando los modelos manualmente
// by evilnapsis



spl_autoload_register(function($class) {
	include Model::getFullPath($class);
});

error_reporting(E_ALL & ~E_DEPRECATED);

?>