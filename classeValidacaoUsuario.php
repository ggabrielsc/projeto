<?php

	include("classeUsuario.php");
	include("classeEmpresa.php");

	class ValidacaoUsuario{
		
		private $conexao;
		private $email;
		private $senha;
		private $tipo;
		
		public function __construct($conexao,$valores){
			$this->conexao=$conexao;
			$this->email=$valores["EMAIL"];
			$this->senha=$valores["SENHA"];	
			$this->tipo=$valores["tipo"];			
		}
		
		public function validar(){
			if($this->tipo == 0){

				$consulta = "SELECT * FROM usuario 
							WHERE email=:email AND senha=:senha";
				
				$stmt = $this->conexao->prepare($consulta);
				$stmt->bindValue(":email",$this->email);
				$stmt->bindValue(":senha",$this->senha);
				
				$stmt->execute();
				
				if($stmt->rowCount()==1){

					session_start();
					$linha = $stmt->fetch();
					$_SESSION["usuario"] = new Usuario($linha);
					
					header("location: index.php");
				}
				else{
					header("location: form_login.php?erro=1");
				}

				
			} else {
				$consulta = "SELECT * FROM empresa 
							WHERE email=:email AND senha=:senha";
				
				$stmt = $this->conexao->prepare($consulta);
				$stmt->bindValue(":email",$this->email);
				$stmt->bindValue(":senha",$this->senha);
				
				$stmt->execute();
				
				if($stmt->rowCount()==1){
					session_start();
					$linha = $stmt->fetch();
					$_SESSION["usuario"] = new Empresa($linha);
					header("location: index.php");
				}
				else{
					header("location: form_login.php?erro=1");
				}
			}
			
		}
		
	}


?>