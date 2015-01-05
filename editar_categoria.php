<?php
	$mongo = new  MongoClient('mongodb://admin:alvarez@ds052827.mongolab.com:52827/miblog');
	$db = $mongo->selectDB("miblog");
	$c_autores = $mongo->selectCollection("miblog","categoria");

	///////////////////////////////// 
	require_once 'seguridad/class.inputfilter.php';
	$filtro = new InputFilter();
	$_POST = $filtro->process($_POST);
	//////////////////////////////////////////
	$nameCategoria =htmlspecialchars(addslashes(stripslashes(strip_tags(trim( $_POST["inputNameCategoria"])))));
	
	$id = $_POST["id"];
	$condicion = array("_id" => new MongoId($id));
	$modCategoria = array("categoria"=>$nameCategoria);
	$c_autores->update($condicion, $modCategoria);

	header("Refresh: 0;url=categorias.php?mensaje=3")
?>