<?php
	$mongo = new  MongoClient();
	$db = $mongo->selectDB("miblog");
	$c_categoria = $mongo->selectCollection("miblog","categoria");

	/////////////////////////////////
	$id = $_GET["id"];
	$condicion = array("_id" => new MongoId($id));
	if ($c_categoria->count($condicion) == 1)
	{
		$c_categoria->remove($condicion);
		header("Refresh: 0;url=categorias.php?mensaje=1");
	}else{

	}
?>