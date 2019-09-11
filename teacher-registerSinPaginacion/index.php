

    <?php
        require 'componentes/header.php';
        require 'componentes/navbar.php';
    ?>

    <div class="container my-3">
        <?php
            require 'componentes/contenido-taps.php';
        ?>
    </div>

    <?php
        require 'componentes/footer.php';
    ?>
    

<script language="javascript">
			$(document).ready(function(){
				$("#inputGroupSelect01").change(function () {
                    $("#inputGroupSelect01 option:selected").each(function () {
						id_sede = $(this).val();
                        if(id_sede === "0"){
                            $("#card-deck").html('<div class="card text-center"><div class="card-body"><p class="card-text">Debes escoger una sede.</p></div></div>');
                        }else{
                            $.post("php/getTeacher.php", { id_sede: id_sede }, function(data){
							$("#card-deck").html(data);
						    }); 
                            
                        }
		       
					});
				})
			});

</script>

</html>