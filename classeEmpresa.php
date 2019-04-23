<?php

	class Empresa{
	
		private $id_empresa;
		private $razao_social;
		private $documento;
		private $email;
		private $permissao;
		private $senha;
		
		public function __construct($parametros){
			$this->id_empresa = $parametros["ID_EMPRESA"];
			$this->razao_social = $parametros["RAZAO_SOCIAL"];
			$this->documento = $parametros["DOCUMENTO"];
			$this->email = $parametros["EMAIL"];
			$this->permissao = $parametros["PERMISSAO"];
			$this->senha = $parametros["SENHA"];			
		}
		
		public function get_razao(){
			return($this->razao_social);
		}

		public function get_permissao(){
			return($this->permissao);
		}

		public function get_id(){
			return($this->id_empresa);
		}
	
	
	}



?>