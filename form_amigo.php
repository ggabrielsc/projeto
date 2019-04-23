<?php
	
	include("classeBancoDeDados.php");
	include("classeCabecalho.php");
	include("classeForm.php");

	
	
	$parametros = null;
	$parametros["action"] = "insere.php?tabela=lista_amigos";
	$parametros["method"] = "post";
	
	$f = new Form($parametros);
	
	$consulta = "SELECT ID_USUARIO as value, ID_USUARIO as label 
							FROM USUARIO ORDER BY ID_USUARIO";
	$stmt = $conexao->prepare($consulta);
	$stmt->execute();
	while($linha=$stmt->fetch()){
		$usuarios[] = $linha;
	}	
	$f->add_select("COD_AMIGO",$usuarios);



	$parametros = null;
	$parametros["name"] = "COD_USUARIO";
	$parametros["type"] = "hidden";
	$parametros["value"] = $_SESSION["usuario"]->get_id();
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "DATA";
	$parametros["type"] = "hidden";
	$parametros["value"] = date("Y-m-d");	
	$f->add_input($parametros);


	$parametros = "Enviar";
	$f->add_button($parametros);

	$f->exibe();
	
?>