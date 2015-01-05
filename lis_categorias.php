<script type="text/javascript" language="javascript" src="js/config_datatable_api.js"></script>

<div class="container">


<table class="table table-striped table-bordered table-hover" id="registro">
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


	</div>