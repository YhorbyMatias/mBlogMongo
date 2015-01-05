function mostrar(){
	$.post("consulta.php", function(data){ 
		$("#contenido").html(data) 
	});
}

$(document).ready(function(){
	mostrar();
}); 


function mostrarcategoria(){
	$.post("lis_categorias.php", function(data){ 
		$("#contenidoc").html(data) 
	});
}

$(document).ready(function(){
	mostrarcategoria();
});

 
	