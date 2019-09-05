<?php
    $server = 'localhost';
    $username = 'root';
    $pass = '';
    $bd = 'furyum';
    try{    
        $connection = mysqli_connect($server, $username, $pass, $bd);
    }catch(mysqliException $err){
        die('La coneccion fallo:'.$err->getMessage());
    }
?>