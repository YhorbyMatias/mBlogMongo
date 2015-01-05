<?php
	$mongo = new MongoClient('mongodb://admin:alvarez@ds052827.mongolab.com:52827/miblog');
	$db = $mongo->selectDB("miblog");
	$c_favoritos = $mongo->selectCollection($db,"favorito");

	/////////////////////////////////
	$id = $_GET["id"];
	////////////////////////////////
	$condicion = array("_id" => new MongoId($id));
	if ($c_favoritos->count($condicion) == 1){
		$c_favoritos->remove($condicion);
	}
	
	header("Refresh: 0;url=principal.php?mensaje=1");
?>