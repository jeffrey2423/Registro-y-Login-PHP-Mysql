<?php
    require 'conexionBD.php';
	
    $id_sede = $_POST['id_sede'];

     //$articulosXpagina = 3;
     //$iniciar = ($_GET['pagina']-1)*3;

     $queryLimit="SELECT user.name, user.lastname, user.image, user.created_at, sede.nombre_sede FROM user INNER JOIN sede ON user.sede_id = sede.id_sede WHERE user.sede_id = '$id_sede'";

     $executeLimit=mysqli_query($connection,$queryLimit);
     $filas =  mysqli_num_rows($executeLimit);
    
 
     setlocale(LC_ALL,"es_ES");
     $html = "";

      if ($filas>0) {

        while ($result=mysqli_fetch_assoc($executeLimit)) { 

           $html .= '
           <div class="card my-3" style="max-width: 355px; max-height:370 ; display: inline-block;">
                <img src="https://www.jennstrends.com/wp-content/uploads/2013/10/bad-profile-pic-2-768x768.jpeg" class="card-img-top"  alt="">
                <div class="card-body">
                    <h5 class="card-title">'.$result['name'].'</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Creado a las '.date_format(date_create($result['created_at']), 'g:ia \o\n l jS F Y').'</small>

                </div>
            </div>
            ';

     
        }
        
    }else{

        $html .= '<div class="card text-center" >
        <div class="card-body">
            <h5 class="card-title">No hay resultados</h5>
            <p class="card-text">No hay docentes registrados en esa jornada o sede.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Estamos trabajando en ello</small>

        </div>
        </div>';
    }

    echo $html;
	
?>