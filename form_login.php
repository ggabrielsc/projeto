<?php

	//include("classeCabecalho.php");
	include("interfaceExibicao.php");
	include("classeForm.php");
	
	$parametros["action"]="validacao.php";
	$parametros["method"]="post";
	
	$f = new Form($parametros);
	
	$parametros=null;
	$parametros["type"]="email";
	$parametros["name"]="EMAIL";
	$parametros["placeholder"]="Digite o usuário...";
	$f->add_input($parametros);

	$parametros=null;
	$parametros["type"]="password";
	$parametros["name"]="SENHA";
	$parametros["placeholder"]="Digite a senha...";
	$f->add_input($parametros);

	$parametros=null;
	$parametros["type"]="radio";
	$parametros["name"]="tipo";
	$parametros["label"]="Tipo";
	$parametros["opcoes"][0]="Usuário";
	$parametros["opcoes"][1]="Empresa";
	$f->add_inputOpcoes($parametros);
	
	$parametros = "Logar";
	$f->add_button($parametros);
	
	if(isset($_GET["erro"])){
		echo "Login e/ou senha inválidos.<hr />";
	}
	$f->exibe();

?>