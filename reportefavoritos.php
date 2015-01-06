<?php 

require_once("connect_favoritos.php");

$total=$c_favoritos->count();
$reg=$c_favoritos->find();

 echo "Total registros ".$total."<br>";
 
/*
        foreach ($reg as $obj) { 
            echo "<strong>ID:</strong> " . $obj['_id'] ."<br/>";
            echo "<strong>Titulo:</strong> " . $obj['titulo'] . "<br/>"; 
            echo "<strong>Categoría:</strong> " . $obj['categoria'] . "<br/>";
            echo "<strong>Descripcion:</strong> " . $obj['descripcion'] . "<br/>";
            echo "<strong>Link:</strong> " . $obj['url'] . "<br/>";
            echo "<br/>"; }
*/

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	  <?php 
    	require_once("head.php");
    ?>
</head>
<body>
<div class="row">
  <div class="col-sm-10 col-md-10">
    <div class="thumbnail">
     <?php  foreach ($reg as $obj) {  ?>
      <div class="caption">
        <h3><? echo "<strong>Titulo:</strong> " . $obj['titulo'] . "<br/>"; ?></h3>
        <p><? echo "<strong>Titulo:</strong> " . $obj['descripcion'] . "<br/>"; ?></p>
        <p><a href="<?echo "<strong>Link:</strong> " . $obj['url'] . "<br/>"?>" class="btn btn-primary" role="button">Enlace</a> </p>
      </div>
      <?}?>
    </div>
  </div>
</div>
</body>
</html>