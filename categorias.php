<!DOCTYPE html>
<html lang="es-CO">
  <head>
  		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
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
		


		<div class="fb-like" data-href="http://mblogmongo.herokuapp.com/" data-width="20px" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>


		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=747238572031215&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
 
		<strong><h3>Lista de categorías almacenados</h3></strong>
		<?php
			error_reporting(0);
			$mensaje = $_GET["mensaje"];
			if ($mensaje == 1) {
				echo "<p class='alert alert-success' role='alert><i class='icon-trash icon-white'></i> La categoría fue eliminado con éxito.</p><br><br>";
			}
			if ($mensaje == 2) {
				echo "<p class='alert alert-primary' role='alert><i class='icon-ok icon-white'></i> La categoria fue guardado con éxito.</p><br><br>";
			}
			if ($mensaje == 3) {
				echo "<p class='alert alert-warning' role='alert><i class='icon-refresh icon-white'></i> La categoría fue modificado con éxito.</p><br><br>";
			}
			if ($mensaje == 4) {
				echo "<p class='alert alert-danger' role='alert><i class='icon-refresh icon-white'></i> Texto dañino, ingrese un valor valído para categotería </p><br><br>";
			}
		?>
 	<div id="contenidoc"></div>

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