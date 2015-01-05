 
<script type="text/javascript" language="javascript" src="js/config_datatable_api.js"></script>
<div class="container">


 
		<table class="  table table-striped table-bordered " id="registro">
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
 

 