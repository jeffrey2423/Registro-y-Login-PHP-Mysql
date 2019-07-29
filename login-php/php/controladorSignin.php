<?php
session_start(); 
    require 'database.php';

    if (isset($_POST['login'])) {

        $usuario   = $_POST['usuario']; 
        $clave     = $_POST['clave'];
        $claveCrip = md5($clave);  

        $verUser = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$claveCrip'";
        $result = mysqli_query($connection, $verUser);
        $row = mysqli_num_rows($result);

        $fila=$verUser->fetch();
        $_SESSION['idUsuario']=$fila[0];
        $_SESSION['nombre']=$fila[1];
        $_SESSION['usuario']=$fila[2];
        $_SESSION['imagen']=$fila[4];


        if($row > 0){

            $_SESSION['login']=true;
            header('location:../user.php');

        }else{

            echo  "
            <script>
            alert ('este usuario no ha sido registrado');
            window.history.go(-1);
            </script>"; 

        }
    }
?>