<?php
	include("classeCabecalho.php");
	include("classeForm.php");
	
	include("conexao.php");
	
	
	$parametros = null;
	$parametros["action"] = "insere.php?tabela=loja";
	$parametros["method"] = "post";
	
	$f = new Form($parametros);

	$parametros = null;
	$parametros["name"] = "TITULO";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o titulo do jogo...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "CLASSIFICACAO";
	$parametros["type"] = "number";
	$parametros["placeholder"] = "Digite a classificacao recomendada...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "PRECO";
	$parametros["type"] = "number";
	$parametros["placeholder"] = "Digite o Valor...";	
	$f->add_input($parametros);

	
	$parametros = null;
	$parametros["name"] = "COD_EMPRESA";
	$parametros["type"] = "hidden";
	$parametros["value"] = $_SESSION["usuario"]->get_id();
	$f->add_input($parametros);
	
	$parametros = "Enviar";
	$f->add_button($parametros);
	
	
	$f->exibe();
	
?>
