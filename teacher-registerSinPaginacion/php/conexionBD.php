<?php
    session_start();
    $server = 'xlr';
    $username = 'wwweldia_foro';
    $pass = 'vRaMzr9Kk-r.';
    $bd = 'wwweldia_furyum';
    try{    
        $connection = mysqli_connect($server, $username, $pass, $bd);
        mysqli_set_charset($connection,'utf8'); 
    }catch(mysqliException $err){
        die('La coneccion fallo:'.$err->getMessage());
    }
?>