<?php


	include("classeCabecalho.php");
	include("classeTabela.php");
	include("classeBancoDeDados.php");


	$tabela[]="biblioteca";


	$bd = new BancoDeDados($conexao);
	
	
	$coluna[]= "COD_USUARIO as ID";
	$coluna[]= "TITULO as Título";


	
	$condicao = null;
	$ordenacao = null;
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);


	$t = new Tabela($m,"biblioteca",true);
	
	$t->exibe();

?>