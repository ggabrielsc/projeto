<?php
	include("classeCabecalho.php");
	include("classeForm.php");
	include("conexao.php");
	
	
	$parametros = null;
	$parametros["action"] = "insere.php?tabela=usuario";
	$parametros["method"] = "post";
	
	$f = new Form($parametros);
	
	$parametros = null;
	$parametros["name"] = "ID_USUARIO";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o ID (max:12 caracteres)";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "NOME";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o Nome";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "EMAIL";
	$parametros["type"] = "email";
	$parametros["placeholder"] = "Digite o Email";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "SENHA";
	$parametros["type"] = "password";
	$parametros["placeholder"] = "Digite a Senha";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "IDADE";
	$parametros["type"] = "number";
	$parametros["placeholder"] = "Digite a Idade";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "PERMISSAO";
	$parametros["type"] = "hidden";
	$parametros["value"] = 0;	
	$f->add_input($parametros);



	$parametros = "Enviar";
	$f->add_button($parametros);
	
	
	$f->exibe();
	
?>
