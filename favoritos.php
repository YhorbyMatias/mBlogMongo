<!DOCTYPE html>
<html lang="es-CO">
<head>
	 <?php require_once('head.php');?>
</head>
<body>
<div class="navbar navbar navbar-inverse navbar-fixed-top">
	  <?php 
	  	require_once("nav.php");
	  ?>
	</div>
	<div class="contenido">
		<div class="container">
<form class="form-horizontal" action="add_favorito.php" method="post">
		  	<div class="form-group">
		    	<label class="col-sm-2 control-label" for="inputNameFavorito">Nombre publicación</label>
		    	<div class="col-sm-10">
		      		<input type="text" required name="nameFavorito" id="inputNameFavorito" class="form-control" 
		      		 placeholder="Nuevo favorito"/>
		    	</div>
		  	</div>
			<div class="form-group">
		    	<label class="col-sm-2 control-label" for="inputAutor">Categoria</label>
		    	<div class="col-sm-10">
		      		<select name="categoria" id="categoria" class="form-control">
		      			<?php
							require_once("connect_categoria.php");

							if ($c_categoria->count()>0)
							{
								$categorias = $c_categoria->find();
								foreach ($categorias as $categoria) {
						?>
						<option value="<?php echo $categoria['categoria'] ?>">
						<?php echo $categoria['categoria'] ?>
						</option>
						<?php 
								}
							}else{
						?>
						<option value="Sin Categoría">Sin categoría</option>
						<?php } ?>
		      			
		      		</select>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<label class="col-sm-2 control-label" for="inputAutor">Descripción favorito</label>
		    	<div class="col-sm-10">
		      		<textarea name="descripcion" required placeholder="Breve descrición" rows="3" class="form-control" ></textarea>
		    	</div>
		  	</div>
		  		<div class="form-group">
		    	<label class="col-sm-2 control-label" for="inputNameUrl">Web</label>
		    	<div class="col-sm-10">
		      		<input type="text" name="url" id="url" class="form-control" required
		      		 placeholder="Url enlace "/>
		    	</div>
		  	</div>
		  	<div class="form-group">
		    	<div class="col-sm-offset-2 col-sm-10">
		      		<button type="submit" class="btn btn-large btn-primary">
		      		<i class="glyphicon glyphicon-saved"></i> Guardar favorito</button>
		      		 <a href="principal.php" class="btn btn-large btn-success">List</a>
		    	</div>
		  	</div>
		</form>
	</div>
	</div>

</body>
</html>