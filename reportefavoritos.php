<?php 

require_once("connect_favoritos.php");

$total=$c_favoritos->count();
$reg=$c_favoritos->find();


 
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
	  <?php 
    	require_once("nav.php");
    ?>
    <br><br><br><br> 

<div class="container">
	<p>Total registros <span class="badge"><?  echo  $total;?></span></p>
	 <hr>
<div class="row">
	 <?php  foreach ($reg as $obj) {  ?>
<div class="col-xs-4 .col-sm-8 .col-lg-10">
  <div class="panel panel-success">
  <div class="panel-heading"><? echo  $obj['titulo'] . "<br/>"; ?></div>
  <div class="panel-body">
   <? echo "<strong>Descripcion:</strong> " . $obj['descripcion'] . "<br/>"; ?>
  </div>
	 
	<nav>
	   <ul class="pager">    
	    <li ><a href="<?php echo $obj['url']?>" target="_blank">Visitar <span aria-hidden="true">&rarr;</span></a></li>
	  </ul>
  </nav>
  <div class="panel-footer">
   <span class="badge">Categoria</span>
    <? echo $obj['categoria']; ?>
  </div>
</div>

</div>
     <?}?>
</div>
</div>
</body>
</html>