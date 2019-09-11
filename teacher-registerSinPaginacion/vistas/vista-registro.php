<?php
        require '../componentes/header.php';
        require '../componentes/navbar.php';
        require '../componentes/footer.php';
?>
<div class="container my-3">
            <div class="card mb-3" >

                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="registro">
                        <img src="https://i2.wp.com/cdn.dribbble.com/users/43762/screenshots/2391583/open-uri20151207-3-ku974m" height="auto" width="auto" class="card-img-top" alt="...">
                            <?php
                                require '../componentes/register-form.php';
                            ?>
                        </div>
                    </div>

                </div>

            </div>

</div>


<?php
        require '../componentes/footer.php';
?>

</html>