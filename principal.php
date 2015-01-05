<!DOCTYPE html>
<html lang="es-CO">
  <head>
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
    <?php 
    	require_once("head.php");
    ?>
    <link rel="stylesheet" href="media/css/jquery.dataTables.css">
  </head>
  <body>
  	<div class="navbar navbar navbar-inverse navbar-fixed-top">
	  <?php 
	  	require_once("nav.php");
	  ?>
	</div>
	<div class="container">
	<br><br><br><br>	
		<h2><span>Bienvenido a mBlogMongo</span></h2>	
		<h5>Si desea registrar algún curso, lo puedes hacer. Este sitio web corre sobre una base de datos <a href="http://www.mongodb.org/">MongoDB</a></h5>	 
		<?php
			error_reporting(0);
			$mensaje = $_GET["mensaje"];
			if ($mensaje == 1) {
				echo "<p class='btn  btn-danger'><i class='icon-trash icon-white'></i> El favorito fue guardado éxito.</p><br><br>";
			}
			if ($mensaje == 2) {
				echo "<p class='btn  btn-success'><i class='icon-ok icon-white'></i> El favorito fue guardado con éxito.</p><br><br>";
			}
			if ($mensaje == 3) {
				echo "<p class='btn  btn-warning'><i class='icon-refresh icon-white'></i> El favorito fue modificado con éxito.</p><br><br>";
			}
		?>
		 
		 
		<h3>Mis favoritos <a href="favoritos.php" href="principal.php" class="btn btn-success glyphicon glyphicon-saved">Add</a></h3>
		
		<div id="contenido"></div>
		 
	</div> <!-- /container -->
	<footer class="row ">
    <div class="panel-footer text-center">
        <p>Desarrollado por:  </p>
        <div class="fotimg">
        	 <h5>Edwin Esneyder</h5>
        </div>
       </div>
       </footer>
   
	 
	 
 

  </body>
</html>