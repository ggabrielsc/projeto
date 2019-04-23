<?php

	class Usuario{
	
		private $id_usuario;
		private $nome;
		private $email;
		private $senha;
		private $idade;
		private $permissao;
		
		public function __construct($parametros){
		
			$this->id_usuario = $parametros["ID_USUARIO"];
			$this->nome = $parametros["NOME"];
			$this->email = $parametros["EMAIL"];
			$this->senha = $parametros["SENHA"];
			$this->idade = $parametros["IDADE"];
			$this->permissao = $parametros["PERMISSAO"];			
		}
		
		public function get_nome(){
			return($this->nome);
		}

		public function get_permissao(){
			return($this->permissao);
		}

		public function get_id(){
			return($this->id_usuario);
		}
	
	
	}



?>