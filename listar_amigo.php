<?php

	include("classeCabecalho.php");
	include("classeTabela.php");
	include("classeBancoDeDados.php");

	$tabela[]="lista_amigos";
	
	$coluna[]= "COD_USUARIO as Usuário";
	$coluna[]= "COD_AMIGO as Amigo";
	$coluna[]= "DATA as Data";
	
	$condicao = null;
	$ordenacao = "cod_usuario";

	$bd = new BancoDeDados($conexao);
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);

	$t = new Tabela($m,"lista_amigo",true);
	
	$t->exibe();

?>