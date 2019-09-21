<?php
    require 'conexionBD.php';
    if (isset($_POST['update'])) {
        
        $id = $_GET['id'];
        $nombre    = $_POST['nombre']; 
        $apellido   = $_POST['apellido']; 
        $email     = $_POST['email'];
        $area     = $_POST['area'];
        $select     = $_POST['inputGroupSelect01'];
        $file     = $_FILES["file"]["name"];
        $teacher = 1;

        //echo $id;

        
        /*$verUser = "SELECT * FROM docente WHERE email = '$email'";
        $result = mysqli_query($connection, $verUser);
        $row = mysqli_num_rows($result);*/

        if($nombre != "" || $apellido != "" || $email != "" || $area != "" ){ 

            //if($clave == $clave2){
                
                //if($file != ""){

                    //if($select != "0"){ 

                        /*if($row > 0){
                            $_SESSION['message'] = 'Error, El email ya esta, por favor intenta con otro';
                            $_SESSION['message_type'] = 'danger';
                            header('Location: ../index.php');*/
                        //}else{
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
                                || ($_FILES["file"]["type"] == "")
                                || ($_FILES["file"]["type"] == "image/png"))){
                                //Verificamos que sea una imagen
                                /*if ($_FILES["file"]["error"] > 0){
                                    //verificamos que venga algo en el input file
                                    $_SESSION['message'] = 'Error, algo ocurre, por favor intenta nuevamente';
                                    $_SESSION['message_type'] = 'danger';
                                    header('Location: ../admin.php');*/
                                //}else{
                                    //subimos la imagen
                                    $imagen= $random.'_'.$_FILES["file"]["name"];
                                    if(file_exists("../../public/img/".$random.'_'.$_FILES["file"]["name"])){
                                        $_SESSION['message'] = 'Error, la imagen ya esta, por favor intenta con otra';
                                        $_SESSION['message_type'] = 'danger';
                                        header('Location: ../admin.php');
                                        
                                    }else{

                                        //echo "Archivo guardado en " . "..//imagenes/" .$random.'_'. $_FILES["imagen"]["name"];

                                        if($select == "0" && $file != "" ){
                                            move_uploaded_file($_FILES["file"]["tmp_name"],"../../public/img/" .$random.'_'.$_FILES["file"]["name"]);
                                            //guardamos todo en la bd
                                            $Sql="UPDATE docente SET name='$nombre',lastname='$apellido',email='$email',image='$imagen',descripcion='$area' WHERE id=$id;";
                                            mysqli_query($connection,$Sql);
                                            $_SESSION['message'] = 'Se ha actualizado con exito';
                                            $_SESSION['message_type'] = 'success';
                                            header('Location: ../admin.php');

                                        }else if($select != "0" && $file == "" ){

                                            //guardamos todo en la bd
                                            $Sql="UPDATE docente SET name='$nombre',lastname='$apellido',email='$email',sede_id='$select',descripcion='$area' WHERE id=$id;";
                                            mysqli_query($connection,$Sql);
                                            $_SESSION['message'] = 'Se ha actualizado con exito';
                                            $_SESSION['message_type'] = 'success';
                                            header('Location: ../admin.php');

                                        }else if($file == "" && $select == "0" ){
                                            //guardamos todo en la bd
                                            $Sql="UPDATE docente SET name='$nombre',lastname='$apellido',email='$email',descripcion='$area' WHERE id=$id;";
                                            mysqli_query($connection,$Sql);
                                            $_SESSION['message'] = 'Se ha actualizado con exito';
                                            $_SESSION['message_type'] = 'success';
                                            header('Location: ../admin.php');

                                        }else{
                                            move_uploaded_file($_FILES["file"]["tmp_name"],"../../public/img/" .$random.'_'.$_FILES["file"]["name"]);
                                            //guardamos todo en la bd
                                            $Sql="UPDATE docente SET name='$nombre',lastname='$apellido',email='$email',image='$imagen',sede_id='$select',descripcion='$area' WHERE id=$id;";
                                            mysqli_query($connection,$Sql);
                                            $_SESSION['message'] = 'Se ha actualizado con exito';
                                            $_SESSION['message_type'] = 'success';
                                            header('Location: ../admin.php');

                                        }



                                            
                                    }
                                //}
                            }else{
                                $_SESSION['message'] = 'Error, formato de imagen no soportado';
                                $_SESSION['message_type'] = 'danger';
                                header('Location: ../admin.php');
                            
                    
                        }
                    //}
                    /*}else{
                        $_SESSION['message'] = 'Error, no ha seleccionado la sede';
                        $_SESSION['message_type'] = 'danger';
                        header('Location: ../vistas/vista-registro.php');
                    }*/
                /*}else{
                    $_SESSION['message'] = 'Error, no ha seleccionado la imagen';
                    $_SESSION['message_type'] = 'danger';
                    header('Location: ../vistas/vista-registro.php');
                } */  
                
            /*}else{
                $_SESSION['message'] = 'Error, Las claves no coinciden';
                $_SESSION['message_type'] = 'danger';
                header('Location: ../vistas/vista-registro.php');
            }*/
    }else{
            $_SESSION['message'] = 'Error, todos los campos son obligatorios';
            $_SESSION['message_type'] = 'danger';
            header('Location: ../admin.php');
    }

}
?>