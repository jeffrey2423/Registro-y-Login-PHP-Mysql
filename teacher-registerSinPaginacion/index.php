<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro y biografia docentes </title>
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <?php
        require 'componentes/navbar.php';
    ?>

    <div class="container my-5">
        <?php
            require 'componentes/taps-navegacion.php';
        ?>
    </div>


    
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script language="javascript">
			$(document).ready(function(){
				$("#inputGroupSelect01").change(function () {
                    $("#inputGroupSelect01 option:selected").each(function () {
						id_sede = $(this).val();
						$.post("php/getTeacher.php", { id_sede: id_sede }, function(data){
							$("#card-deck").html(data);
						});            
					});
				})
			});

</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>