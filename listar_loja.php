<?php


	include("classeCabecalho.php");
	
	include("classeTabela.php");
	include("classeBancoDeDados.php");


	$tabela[]="loja";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "ID_JOGO as ID";
	$coluna[]= "COD_EMPRESA as Empresa";
	$coluna[]= "TITULO as Título";
	$coluna[]= "CLASSIFICACAO as Classificação";
	$coluna[]= "PRECO as Preço";
	
	$condicao = null;
	$ordenacao = "PRECO";
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);


	$t = new Tabela($m,"loja",true);
	try{
		$t->exibe();
	}
	catch(Exception $e){
		$e->get_message();
	};

?>