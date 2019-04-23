<?php


	include("classeCabecalho.php");
	
	include("classeTabela.php");
	include("classeBancoDeDados.php");

	$tabela[]="empresa";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "ID_EMPRESA as ID";
	$coluna[]= "RAZAO_SOCIAL as Nome";
	$coluna[]= "DOCUMENTO as Doc";
	$coluna[]= "EMAIL as Email";


	$condicao = null;
	$ordenacao = "ID_EMPRESA";
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);


	$t = new Tabela($m,"empresa",true);
	
	$t->exibe();

?>