<?php
	
	include("classeBancoDeDados.php");
	include("classeCabecalho.php");
	include("classeForm.php");

	
	
	$parametros = null;
	$parametros["action"] = "insere.php?tabela=biblioteca";
	$parametros["method"] = "post";
	
	$f = new Form($parametros);
	
	$consulta = "SELECT TITULO as value, CONCAT(TITULO, ', ', PRECO) as label 
							FROM loja ORDER BY TITULO";
	$stmt = $conexao->prepare($consulta);
	$stmt->execute();
	while($linha=$stmt->fetch()){
		$jogos[] = $linha;
	}	
	$f->add_select("TITULO",$jogos);



	$parametros = null;
	$parametros["name"] = "COD_USUARIO";
	$parametros["type"] = "hidden";
	$parametros["value"] = $_SESSION["usuario"]->get_id();
	$f->add_input($parametros);



	$parametros = "Comprar";
	$f->add_button($parametros);

	$f->exibe();
	
?>