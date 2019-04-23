<?php

	include_once("classeUsuario.php");

	include_once("classeEmpresa.php");

	session_start();

	include("interfaceExibicao.php");



	include("autenticacao.php");

	


	class Cabecalho implements Exibicao{
	
		private $charset;
		private $title;
		private $links;
		private $scripts;
		
		public function __construct($parametros){
			$this->charset = $parametros["charset"];
			$this->title = $parametros["title"];
			if(isset($parametros["links"])){
				$this->links = $parametros["links"];
			}
			if(isset($parametros["scripts"])){
				$this->scripts = $parametros["scripts"];
			}
		}
		
		public function exibe(){
			
			echo "<!DOCTYPE html>
					<html>
					<head>
						<meta charset='$this->charset' />
						 <title>$this->title</title>";
			if($this->links!=null){
					foreach($this->links as $i=>$l){
						echo "<link rel='stylesheet' href='$l' />";
					}
			}			 
			if($this->scripts!=null){
					foreach($this->scripts as $i=>$s){
						echo "<script type='text/javascript' src='$s'></script>";
					}
			}
			echo "
					</head>	
						<body>";
			
			$this->exibe_menu();
		}
		
		public function exibe_menu(){
			
			echo "<div id='menu'>
			
					Listar: 
						<ul>
							<li>
								<a href='listar_usuario.php'>
								Usuários
								</a>
							</li>
							<li>
								<a href='listar_empresa.php'>
								Empresas
								</a>
							</li>
							<li>
								<a href='listar_biblioteca.php'>
								Biblioteca de Jogos
								</a>
							</li>
							<li>
								<a href='listar_loja.php'>
								Loja
								</a>
							</li>
							<li>
								<a href='listar_amigo.php'>
								Amizades
								</a>
							</li>							
						</ul>";

					echo "<div id='menu'>
			
					Cadastrar: 
						<ul>
							<li>
								<a href='form_usuario.php'>
								Usuário
								</a>
							</li>
							<li>
								<a href='form_empresa.php'>
								Empresa
								</a>
							</li>
							<li>
								<a href='form_amigo.php'>
								Amigo
								</a>
							</li>							
						</ul>
						</br>
						<ul>
							<li>
								<a href='form_biblioteca.php'><h3>Comprar Jogo</h3></a>
							</li>
						</ul>";
						
						
					if((isset($_SESSION["usuario"])) && ($_SESSION["usuario"]->get_permissao()==1)){	
					echo " 
						<ul>
							<li>
								<a href='form_insere_jogo.php'>
								Inserir jogo na Loja
								</a>
							</li>						
						</ul>";
					}

				echo "<a href='logout.php'>Logout</a> <br/>";
				echo "
				</div>
				<hr />";
		}
	
	}
	
	
	$parametros["charset"]="utf-8";
	$parametros["title"]="Listagem Opções";
	$parametros["links"][] = "estiloTable.css";

	
	$c = new Cabecalho($parametros);
	$c->exibe();	
	
?>


	