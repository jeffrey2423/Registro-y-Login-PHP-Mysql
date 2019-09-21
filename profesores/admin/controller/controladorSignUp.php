<?php
    require 'conexionBD.php';
    if (isset($_POST['registrar'])) {
    
        $nombre    = $_POST['nombre']; 
        $apellido   = $_POST['apellido']; 
        $email     = $_POST['email'];
        $clave    = $_POST['clave']; 
        $clave2   = $_POST['clave2']; 
        $area     = $_POST['area'];
        $select     = $_POST['inputGroupSelect01'];
        $file     = $_FILES["file"]["name"];
        $claveCrip = md5($clave);
        $teacher = 1;

        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;
        $_SESSION['email'] = $email;
        $_SESSION['area'] = $area;

        
        $verUser = "SELECT * FROM docente WHERE email = '$email'";
        $result = mysqli_query($connection, $verUser);
        $row = mysqli_num_rows($result);

        if($nombre != "" || $apellido != "" || $email != "" || $clave != "" || $clave2 != "" || $area != "" ){ 

            if($clave == $clave2){
                
                if($file != ""){

                    if($select != "0"){ 

                        if($row > 0){
                            $_SESSION['message'] = 'Error, El email ya esta, por favor intenta con otro';
                            $_SESSION['message_type'] = 'danger';
                            header('Location: ../admin.php');
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
                                    $_SESSION['message'] = 'Error, algo ocurre, por favor intenta nuevamente';
                                    $_SESSION['message_type'] = 'danger';
                                    header('Location: ../admin.php');
                                }else{
                                    //subimos la imagen
                                    $imagen= $random.'_'.$_FILES["file"]["name"];
                                    if(file_exists("../../public/img/".$random.'_'.$_FILES["file"]["name"])){
                                        $_SESSION['message'] = 'Error, la imagen ya esta, por favor intenta con otra';
                                        $_SESSION['message_type'] = 'danger';
                                        header('Location: ../admin.php');
                                        
                                    }else{
                                        move_uploaded_file($_FILES["file"]["tmp_name"],
                                        "../../public/img/" .$random.'_'.$_FILES["file"]["name"]);
                                        //echo "Archivo guardado en " . "..//imagenes/" .$random.'_'. $_FILES["imagen"]["name"];

                                        //guardamos todo en la bd
                                        $Sql="INSERT INTO docente (name,lastname,email,image,sede_id,descripcion) VALUES(
                                                '".$nombre."',
                                                '".$apellido."',
                                                '".$email."',
                                                '".$imagen."',
                                                '".$select."',
                                                '".$area."')";


                                        mysqli_query($connection,$Sql);
                                        $_SESSION['message'] = 'Se ha registrado con exito';
                                        $_SESSION['message_type'] = 'success';
                                        unset($_SESSION['nombre']);
                                        unset($_SESSION['apellido']);
                                        unset($_SESSION['email']);
                                        unset($_SESSION['area']);
                                        header('Location: ../admin.php');
                                            
                                    }
                                }
                            }else{
                                $_SESSION['message'] = 'Error, formato de imagen no soportado';
                                $_SESSION['message_type'] = 'danger';
                                header('Location: ../admin.php');
                            
                    
                            }
                        }
                    }else{
                        $_SESSION['message'] = 'Error, no ha seleccionado la sede';
                        $_SESSION['message_type'] = 'danger';
                        header('Location: ../admin.php');
                    }
                }else{
                    $_SESSION['message'] = 'Error, no ha seleccionado la imagen';
                    $_SESSION['message_type'] = 'danger';
                    header('Location: ../admin.php');
                }   
                
            }else{
                $_SESSION['message'] = 'Error, Las claves no coinciden';
                $_SESSION['message_type'] = 'danger';
                header('Location: ../admin.php');
            }
        }else{
            $_SESSION['message'] = 'Error, todos los campos son obligatorios';
            $_SESSION['message_type'] = 'danger';
            header('Location: ../admin.php');
        }

    }
?>