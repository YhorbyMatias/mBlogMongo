<?php 
	$mongo = new MongoClient('mongodb://admin:alvarez@ds052827.mongolab.com:52827/miblog');
	$db = $mongo->selectDB("miblog");
	$usuarios= $mongo->selectCollection($db,"usuario");
?>