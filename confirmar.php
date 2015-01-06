<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mBlogMongo | Crear usuario</title>

	<?php require_once("head.php");?>
</head>
<body>
	<?php include_once("reporteuser.php");
      $user=$usuarios->count();
      ?>
<br><br><br>
<div class="container">
<div class="panel panel-primary">
  <div class="panel-heading">Confirmación, registro usuario.
  
     Gracias, ya somos: <strong><?php  echo $user;?></strong> usuarios

  </div>
  <div class="panel-body">
	<?php

			error_reporting(0);
			$mensaje = $_GET["mensaje"];
			if ($mensaje == 1) {
				echo "<p class='alert alert-success' role='alert><i class='icon-trash icon-white'></i> El usuario fue guardado éxito.</p><br><br>";
			} 
			if ($mensaje == 2) {
				echo "<p class='alert alert-danger' role='alert><i class='icon-trash icon-white'></i> El usuario no pudo ser guardado.</p><br><br>";
			} 

	 ?>
	<div class="form-group">
		    	<div class="col-sm-offset-2 col-sm-10">
		      		 <a href="index.php" class="btn btn-large btn-primary"><i class="glyphicon glyphicon-user"></i> Login</a>
		    	</div>
		  	</div>
</div>
</div>
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