<?php 
	$mongo = new MongoClient('mongodb://admin:alvarez@ds052827.mongolab.com:52827/miblog');
	$db = $mongo->selectDB("miblog");
	$c_categoria = $mongo->selectCollection($db,"categoria");
?>