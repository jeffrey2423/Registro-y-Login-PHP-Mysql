<?php
    require 'database.php';

    if (isset($_POST['registrar'])) {

        $mensaje = "";
    
        $nombre    = $_POST['nombre']; 
        $usuario   = $_POST['usuario']; 
        $clave     = $_POST['clave'];
        $claveCrip = md5($clave);   

        $verUser = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $result = mysqli_query($connection, $verUser);
        $row = mysqli_num_rows($result);

        if($row > 0){
            //$mensaje = "error, El usuario ya esta, por favor intenta con otro";
            //header("Location: ../signup.php");
            echo '<script type="text/javascript">
            alert("error, El usuario ya esta, por favor intenta con otro");
            window.history.back(-1);
            </script>';
        }else{

            $allowedExts = array("gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);
            $imagen="";
            $random=rand(1,999999);
            if ((($_FILES["file"]["type"] == "image/gif")
                || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/jpg")
                || ($_FILES["file"]["type"] == "image/pjpeg")
                || ($_FILES["file"]["type"] == "image/x-png")
                || ($_FILES["file"]["type"] == "image/png"))){
                //Verificamos que sea una imagen
                if ($_FILES["file"]["error"] > 0){
                    //verificamos que venga algo en el input file
                            echo '<script type="text/javascript">
                            alert("error, intenta nuevamente");
                            window.history.back(-1);
                            </script>';
                }else{
                    //subimos la imagen

                    $imagen= $random.'_'.$_FILES["file"]["name"];
                    if(file_exists("../img/".$random.'_'.$_FILES["file"]["name"])){
                            echo '<script type="text/javascript">
                            alert("error, la imagen ya existe");
                            window.history.back(-1);
                            </script>';
                        
                    }else{
                        move_uploaded_file($_FILES["file"]["tmp_name"],
                        "../img/" .$random.'_'.$_FILES["file"]["name"]);
                        //echo "Archivo guardado en " . "..//imagenes/" .$random.'_'. $_FILES["imagen"]["name"];
                        //guardamos todo en la bd
                        $Sql="INSERT INTO usuarios (nombre,usuario,clave,imagen) VALUES(
                                '".$nombre."',
                                '".$usuario."',
                                '".$claveCrip."',
                                '".$imagen."')";
                        mysqli_query($connection,$Sql);
                                echo '<script type="text/javascript">
                            alert("Se ha Registrado Correctamente");
                            window.history.back(-1);
                            </script>';
                    }
                }
            }else{
                            echo '<script type="text/javascript">
                            alert("error, formato no soportado");
                            window.history.back(-1);
                            </script>';
            
            }

      }

    }
?>