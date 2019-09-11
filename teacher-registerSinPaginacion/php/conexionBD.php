<?php
    session_start();
    
    $server = 'localhost';
    $username = 'root';
    $pass = '';
    $bd = 'furyum';
    try{    
        $connection = mysqli_connect($server, $username, $pass, $bd);
        mysqli_set_charset($connection,'utf8'); 
    }catch(mysqliException $err){
        die('La coneccion fallo:'.$err->getMessage());
    }
?>