<?php 

	$mongo = new MongoClient('mongodb://admin:alvarez@ds052827.mongolab.com:52827/miblog');
	$db = $mongo->selectDB("miblog");
	$c_categoria = $mongo->selectCollection("miblog","categoria");

	/////////////////////////////////

### RootNetworking; Código NO vulnerable a XSS/Html Injection/Seguridad ALTA
      /////////////////////////////////
	require_once 'seguridad/class.inputfilter.php';
	$filtro = new InputFilter();
	$_POST = $filtro->process($_POST);
	////////////////////////////////////////

	/////////////////////////
	$nameCategoria =htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['categoria'])))));
	$nuevaCategoria = array("categoria"=>$nameCategoria);
	$c_categoria->insert($nuevaCategoria);

	header("Refresh: 0;url=categorias.php?mensaje=2");




?>

