<?php 
	$mongo = new MongoClient();
	$db = $mongo->selectDB("miblog");
	$c_categoria = $mongo->selectCollection($db,"categoria");
?>