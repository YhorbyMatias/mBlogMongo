<!DOCTYPE html>
<html lang="es-CO">
  <head>
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
		 
		 <script>
           $(document).ready(function() {
		    $('#example').dataTable( {
		        "order": [[ 3, "desc" ]]
		    } );
		} );
		 </script>
		<h3>Mis favoritos <a href="favoritos.php" href="principal.php" class="btn btn-success glyphicon glyphicon-saved">Add</a></h3>
		
		<div id="example_wrapper" class="dataTables_wrapper">
		<table class="  table table-striped table-bordered " id="example">
			<thead>
			    <tr class="tr-head">
			    	<th>Nombre Favorito</th>
			    	<th>Categoria</th>
			    	<th>Descripción</th>
			    	<th>Enlace</th>
			    	<th>Modificar</th>
			    	<th>Eliminar</th>
			    </tr>
			</thead>
			<tbody>
				<?php
					require_once("connect_favoritos.php");

					if ($c_favoritos->count()>0)
					{
						$favoritos = $c_favoritos->find();
						foreach ($favoritos as $favorito) {
						
				?>
				<tr>
					<td><?php echo $favorito["titulo"]; ?></td>
					<td><?php echo $favorito["categoria"]; ?></td>
					<td><?php echo $favorito["descripcion"]; ?></td>
					 
					<td><a href="<?php echo $favorito['url'] ?>" target="_blank">Mostrar</a></td>
					<td><a href="mod_favorito.php?id=<?php echo $favorito['_id'] ?>" 
					  onclick="return false;" class="btn btn-warning"><i class="glyphicon glyphicon-plus-sign"></i> Modificar</a></td>
					<td><a href="eliminar_favorito.php?id=<?php echo $favorito['_id'] ?>" onclick="return false;"
					 class="btn btn-danger"><i class="glyphicon glyphicon-remove-circle">
					 	
					 </i> Eliminar</a></td>
				</tr>
				<?php
						}
					}else{
				?>
				<tr>
					<td colspan="4"><h4><i class="icon-info-sign"></i> Sin registros en la Base de Datos</h4></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
</div>
		 
	</div> <!-- /container -->
	<footer class="row ">
    <div class="panel-footer text-center">
        <p>Desarrollado por:  </p>
        <div class="fotimg">
        	 <h5>Edwin Esneyder</h5>
        </div>
       </div>
       </footer>
   
	 
	 
 <script>
	$(document).ready(function() {
		$('#example').dataTable( {
			"order": [[ 3, "desc" ]]
		} );
	} );

	</script>

  </body>
</html>