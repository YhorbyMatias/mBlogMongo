<?php 

require_once("connect_favoritos.php");

$total=$c_favoritos->count();
$reg=$c_favoritos->find();

 echo "Total registros ".$total."<br>";
 

        foreach ($reg as $obj) { 
            echo "<strong>ID:</strong> " . $obj['_id'] ."<br/>";
            echo "<strong>Titulo:</strong> " . $obj['titulo'] . "<br/>"; 
            echo "<strong>Categoría:</strong> " . $obj['categoria'] . "<br/>";
            echo "<strong>Descripcion:</strong> " . $obj['descripcion'] . "<br/>";
            echo "<strong>Link:</strong> " . $obj['url'] . "<br/>";
            echo "<br/>"; }


?>