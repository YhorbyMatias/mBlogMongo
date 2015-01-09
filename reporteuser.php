<?php 
	$mongo = new MongoClient();
	$db = $mongo->selectDB("miblog");
	$usuarios= $mongo->selectCollection($db,"usuario");
?>