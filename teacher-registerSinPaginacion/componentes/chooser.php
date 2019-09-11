<div class="form-row">
    <div class="input-group col-mb-6">
        <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Sedes</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="inputGroupSelect01" required>
        <option value="0">Selecciona una sede</option>
            <?php
                $query="SELECT * FROM sede"; 
                $execute=mysqli_query($connection,$query);
                
                while ($result=mysqli_fetch_array($execute)) { 

            ?>
                <option value="<?php echo $result['id_sede']; ?>"><?php echo $result['nombre_sede']; ?></option>
            <?php 
                }
            ?>

        </select>
    </div>
</div>