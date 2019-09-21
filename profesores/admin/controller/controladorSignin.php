<?php
    require 'conexionBD.php';

    if (isset($_POST['login'])) {
        $usuario   = $_POST['usuario']; 
        $clave     = $_POST['clave'];     
        $claveCrip = sha1(md5($clave));

        $verUser = "SELECT * FROM user WHERE username = '$usuario' AND password = '$claveCrip' AND kind = 1";
        $result = mysqli_query($connection, $verUser);
        $row = mysqli_num_rows($result);
        $fila=mysqli_fetch_array($result,MYSQLI_NUM);
        $_SESSION['idUsuario']=$fila[0];
        $_SESSION['username']=$fila[1];


        if($usuario != "" || $clave != "" ){ 
            if($row > 0){
                $_SESSION['login']= "entro";
                header('location:../admin.php');
            }else{
                $_SESSION['message'] = 'Error, ese usuario no es el administrador o no esta creado';
                $_SESSION['message_type'] = 'danger';
                header('location:../index.php');
                
            }
        }else{
            $_SESSION['message'] = 'Error, todos los campos son obligatorios';
            $_SESSION['message_type'] = 'danger';
            header('location:../index.php');

        }

    }
?>