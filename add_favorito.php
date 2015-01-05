<?php
	$mongo = new MongoClient('mongodb://admin:alvarez@ds052827.mongolab.com:52827/miblog');
	$db = $mongo->selectDB("miblog");
	$c_libros = $mongo->selectCollection("miblog","favorito");

	//////////////////////////////////////////
	require_once 'seguridad/class.inputfilter.php';
	$filtro = new InputFilter();
	$_POST = $filtro->process($_POST);

	//////////////////////////////////////
	$nameFavorito =htmlspecialchars(addslashes(stripslashes(strip_tags(trim( $_POST["nameFavorito"])))));
	$categoria =htmlspecialchars(addslashes(stripslashes(strip_tags(trim( $_POST["categoria"])))));
	$descripcion =htmlspecialchars(addslashes(stripslashes(strip_tags(trim( $_POST["descripcion"])))));
	$url =htmlspecialchars(addslashes(stripslashes(strip_tags(trim( $_POST["url"])))));
	//////////////////////////////////////

	$nuevoFavorito = array("titulo"=>$nameFavorito,	"categoria"=>$categoria,"descripcion"=>$descripcion,"url"=>$url);
	$c_libros->insert($nuevoFavorito);

	header("Refresh: 0;url=principal.php?mensaje=2")
?>