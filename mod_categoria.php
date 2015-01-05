<!DOCTYPE html>
<html lang="es-CL">
  <head>
    <?php 
    	require_once("head.php");
    ?>
  </head>
  <body>
  	<div class="navbar navbar navbar-inverse navbar-fixed-top">
	  <?php 
	  	require_once("nav.php");
	  ?>
	</div>
	<div class="container"><br><br><br>
		<h2>Modificando Categoría</h2>
		<p class="text-info">Aquí modificaremos la categoría</p>
		<form class="form-horizontal" action="editar_categoria.php" method="post">
			<?php
				require_once("connect_categoria.php");

				$id = $_GET["id"];
				$condicion = array("_id" => new MongoId($id));
				if ($c_categoria->count($condicion) == 1) {
					$nameCategoria = $c_categoria->findOne($condicion);
				}
			?>
		  	<div class="form-group">
		    	<label class="col-sm-2 control-label" for="inputNameCategoria">Nombre Categoría</label>
		    	<div class="col-sm-10">
		      		<input type="text" name="inputNameCategoria" id="inputNameCategoria" 
		      		class="form-control" placeholder="Nombre Categoría" 
		      		value="<?php echo $nameCategoria['categoria']; ?>"/>
		    		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		    	</div>
		  	</div>
		  	 <div class="form-group">
		    	<div class="col-sm-offset-2 col-sm-10">
		      		<button type="submit" class="btn btn-large btn-primary">
		      		<i class="glyphicon glyphicon-floppy-save"></i> Guardar Categoría</button>
		    	</div>
		  	</div>
		</form>
		 
	</div> <!-- /container -->
	<footer class="row ">
    <div class="panel-footer text-center">
        <p>Desarrollado por:  </p>
        <div class="fotimg">
        	 <h5>Edwin Esneyder</h5>
        </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>