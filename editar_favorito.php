<?php
	$mongo = new MongoClient('mongodb://admin:alvarez@ds052827.mongolab.com:52827/miblog');
	$db = $mongo->selectDB("miblog");
	$c_favoritos = $mongo->selectCollection($db,"favorito");

	/////////////////////////////////
	require_once 'seguridad/class.inputfilter.php';
	$filtro = new InputFilter();
	$_POST = $filtro->process($_POST);
	////////////////////////////////////////
	$id =htmlspecialchars(addslashes(stripslashes(strip_tags(trim( $_POST['id'])))));
	$titulo =htmlspecialchars(addslashes(stripslashes(strip_tags(trim( $_POST['titulo'])))));
	$categoria =htmlspecialchars(addslashes(stripslashes(strip_tags(trim( $_POST["categoria"])))));
	$id =htmlspecialchars(addslashes(stripslashes(strip_tags(trim( $_POST["id"])))));
	$descripcion =htmlspecialchars(addslashes(stripslashes(strip_tags(trim( $_POST['descripcion'])))));
	$url =htmlspecialchars(addslashes(stripslashes(strip_tags(trim( $_POST['url'])))));
	////////////////////////////////////

	$condicion = array("_id" => new MongoId($id));
	$modFavorito = array("titulo"=>$titulo, "categoria"=>$categoria, "descripcion"=>$descripcion,"url"=>$url);
	$c_favoritos->update($condicion, $modFavorito);

	header("Refresh: 0;url=principal.php?mensaje=3")
?>