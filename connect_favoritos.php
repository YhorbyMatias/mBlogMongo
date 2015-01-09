<?php 
	$mongo = new MongoClient();
	$db = $mongo->selectDB("miblog");
	$c_favoritos = $mongo->selectCollection($db,"favorito");
?>