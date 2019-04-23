<?php


	include("classeCabecalho.php");
	
	include("classeTabela.php");
	include("classeBancoDeDados.php");



	$tabela[]="usuario";


	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "ID_USUARIO as ID";
	$coluna[]= "NOME as Nome";
	$coluna[]= "EMAIL as Email";
	$coluna[]= "IDADE as Idade";
	
	$condicao = null;
	$ordenacao = "ID_USUARIO";

		$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);
		


	$t = new Tabela($m,"usuario",true);
	
	$t->exibe();

?>