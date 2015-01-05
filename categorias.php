<!DOCTYPE html>
<html lang="es-CO">
  <head>
    <?php 
    	require_once("head.php");
    ?>
  </head>
  <body>
  	<div class="navbar navbar-default">
	  <?php 
	  	require_once("nav.php");
	  ?>
	</div>
	<div class="container">
		<h2>Categorías</h2>
		<p class="text-info">Mantenimiento Categorías</p>
		<form class="form-horizontal"   method="post" action=" add_categoria.php"> 
		   

		  	<div class="form-group">
		    	<label class="col-sm-2 control-label" for="inputCategoria">Nombre Categoría</label>
		    	<div class="col-sm-10">
		      		 <input type="text" name="categoria" id="categoria" class="form-control" required
		      		placeholder="Nombre categoría"/>
		    	</div>
		  	</div>
		    <div class="form-group">
		    	<div class="col-sm-offset-2 col-sm-10">
		      		<button type="submit" class="btn btn-large btn-primary">
		      		<i class="glyphicon glyphicon-saved"></i> Guardar Categoría</button>
		    	</div>
		  	</div>
		</form>
		
 
		<h3>Lista de categorías almacenados</h3>
		<?php
			error_reporting(0);
			$mensaje = $_GET["mensaje"];
			if ($mensaje == 1) {
				echo "<p class='btn  btn-danger'><i class='icon-trash icon-white'></i> La categoría fue eliminado con éxito.</p><br><br>";
			}
			if ($mensaje == 2) {
				echo "<p class='btn  btn-success'><i class='icon-ok icon-white'></i> La categoria fue guardado con éxito.</p><br><br>";
			}
			if ($mensaje == 3) {
				echo "<p class='btn  btn-warning'><i class='icon-refresh icon-white'></i> La categoría fue modificado con éxito.</p><br><br>";
			}
			if ($mensaje == 4) {
				echo "<p class='btn  btn-warning'><i class='icon-refresh icon-white'></i> Texto dañino, ingrese un valor valído para categotería </p><br><br>";
			}
		?>
		<table class="table table-striped table-bordered">
			<thead>
			    <tr class="tr-head">
			    	<th>Nombre caterogía</th>
			    	<th>Modificar</th>
			    	<th>Eliminar</th>
			    </tr>
			</thead>
			<tbody>
				<?php
					require_once("connect_categoria.php");

					if ($c_categoria->count()>0) {
						$row = $c_categoria->find();
						foreach ($row as $nameCategoria) {
				?>
				<tr>
					<td><?php echo $nameCategoria["categoria"]; ?></td>
					<td><a href="mod_categoria.php?id=<?php echo $nameCategoria["_id"]; ?>" class="btn btn-warning" onclick="return false;"><i class="icon-pencil icon-white"></i> Modificar</a></td>
					<td><a href="eliminar_categoria.php?id=<?php echo $nameCategoria["_id"]; ?>" class="btn btn-danger" onclick="return false;"><i class="icon-remove icon-white"></i> Eliminar</a></td>
				</tr>	
				<?php
						}
					}else{
				?>
				<tr>
					<td colspan="3"><i class="icon-info-sign"></i> Sin registros en la Base de Datos</h4></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>

		
	</div> <!-- /container -->
	<footer class="row ">
    <div class="panel-footer text-center">
        <p>Desarrollado por:  </p>
        <div class="fotimg">
        	 <h5>Edwin Esneyder</h5>
        </div>
       </div>
       </footer>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

 
  </body>
</html>