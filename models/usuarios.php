<?php 

  class Usuarios extends model {

  	public function verificarLogin() {  		

  		if (!isset($_SESSION['loginp']) || ( isset($_SESSION['loginp']) && empty($_SESSION['loginp']) )) {
  			header("Location: ".BASE."painel/login");
  			exit;
  		}
  	}

  	public function logar($email, $senha) {
  		$retorno = '';

  		$sql = "SELECT id FROM usuarios WHERE email = '$email' AND senha = '$senha'";
  		$sql = $this->db->query($sql);

  		// Faz a consulta na tabela usuarios
  		if ($sql->rowCount() > 0) {
  			$f = $sql->fetch();

  			$_SESSION['loginp'] = $f['id'];  // Compara os dados

  			header("Location: ".BASE."painel");
  		} else {
  			$retorno = 'E-mail e/ou Senha invalidos!';
  		}
  		return $retorno;  		
  	}

  }