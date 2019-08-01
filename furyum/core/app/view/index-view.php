<div class="container">
<div class="row">
<div class="col-md-12">
<div class="">
</div>
<div class="row">
<div class="col-md-9">

<h2>Bienvenido a Furyum</h2>
<?php $admin = UserData::getAdmin();?>


<p class="lead">Te invitamos participar en nuestro foro, ya seas estudiante o profesor de la Institución Educativa El Diamante</p>
<p class="lead">Si estas registrado como profesor y necesitas una categoria nueva para interacturar con tus alumnos te puedes comunicar 
via correo electronico al <?php echo $admin->email;?> para que el administrador del foro cree la respectiva categoria</p>
<p class="lead">Vamos a compartir el conocimiento!</p>



<?php 
$cats = CategoryData::getAll();
if(count($cats)>0):
	?>
<table class="table table-bordered">
<thead>
	<th></th>
</thead>
<?php
foreach($cats as $cat):?>
<tr>
<td>
<h4><a href="./?view=posts&id=<?php echo $cat->id; ?>"><?php echo $cat->name; ?></a></h4>
<p><?php echo $cat->description; ?></p>
</td>
</tr>
<?php endforeach; ?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay categorias</p>
<?php endif; ?>
</div>



</div>


</div>
</div>
</div>
<br><br><br><br>