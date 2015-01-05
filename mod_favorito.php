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
	</div><br><br><br>
	<div class="container">
		<h2>nBlogMongo</h2>
		<p class="text-info">Actualización de mis favoritos</p><br><br>
		<form class="form-horizontal" action="editar_favorito.php" method="post">
			<?php 
				require_once("connect_favoritos.php");

				$id =  $_GET['id'];
				$condicion = array("_id" => new  MongoId($id));
				if($c_favoritos->count($condicion) == 1){
					$favoritos = $c_favoritos->findOne($condicion);
				}
				$nameCategoria = $favoritos['categoria'];
			?>
		  <div class="form-group">
		    	<label class="col-sm-2 control-label" for="inputNameFavorito">Nombre publicación</label>
		    	<div class="col-sm-10">
		      		<input type="text" name="titulo" value="<?php echo $favoritos['titulo'] ?>" id="titulo" class="form-control" 
		      		 placeholder="Nuevo favorito"/>
		    	</div>

		  	</div>
			 <div class="form-group">
		    	<label class="col-sm-2 control-label" for="inputAutor">Categoria</label>
		    	<div class="col-sm-10">
		      		<select name="autor" class="form-control">
		      			<?php
							require_once("connect_categoria.php");

							if ($c_categoria->count()>0)
							{
								$categorias = $c_categoria->find();
								foreach ($categorias as $categoria) {
									if($categoria['categoria'] == $nameCategoria){
						?>
						 <option value="<?php echo $categoria['categoria'] ?>" selected="selected"><?php echo $categoria['categoria'] ?></option>
						<?php 
							}else{
						?>
							<option value="<?php echo $categoria['categoria'] ?>"><?php echo $categoria['categoria'] ?></option>
						<?php 
									}
								}
							}else{
						?>
						<option value="Sin Categoría">Sin Categoría</option>
						<?php } ?>
		      			
		      		</select>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-2 control-label" for="inputAutor">Descripción favorito</label>
		    	<div class="col-sm-10">
		      		<textarea name="descripcion" rows="6" class="form-control" ><?php echo $favoritos['descripcion'] ?></textarea>
		    	</div>
		  	</div>
		  		<div class="form-group">
		    	<label class="col-sm-2 control-label" for="inputNameUrl">Web</label>
		    	<div class="col-sm-10">
		      		<input type="text" name="url" id="url" class="form-control" 
		      		value="<?php echo $favoritos['url'] ?>"
		      		 placeholder="Url enlace "/>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<div class="col-sm-offset-2 col-sm-10">
		      		<button type="submit" class="btn btn-large btn-primary">
		      		<i class="glyphicon glyphicon-saved"></i> Modificar favorito</button>
		    	</div>
		  	</div>
		</form>
		<footer>
		  <p>Desarrollado por @EdwinEsneyder</p>
		</footer>
	</div> <!-- /container -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>