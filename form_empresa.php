<?php
	include("classeCabecalho.php");
	include("classeForm.php");
	include("conexao.php");
	
	
	$parametros = null;
	$parametros["action"] = "insere.php?tabela=empresa";
	$parametros["method"] = "post";
	
	$f = new Form($parametros);

	$parametros = null;
	$parametros["name"] = "EMAIL";
	$parametros["type"] = "email";
	$parametros["placeholder"] = "Digite o email...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "SENHA";
	$parametros["type"] = "password";
	$parametros["placeholder"] = "Digite a senha...";	
	$f->add_input($parametros);
	
	$parametros = null;
	$parametros["name"] = "RAZAO_SOCIAL";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o nome da Empresa...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "DOCUMENTO";
	$parametros["type"] = "number";
	$parametros["placeholder"] = "Documento da Empresa";	
	$f->add_input($parametros);


	$parametros = null;
	$parametros["name"] = "PERMISSAO";
	$parametros["type"] = "hidden";
	$parametros["value"] = 1;	
	$f->add_input($parametros);

	
	$parametros = "Enviar";
	$f->add_button($parametros);
	
	
	$f->exibe();
	
?>
