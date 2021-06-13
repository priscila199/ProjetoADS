<?php

class db {

	//host
	private $host = 'localhost';

	//usuario
	private $usuario = 'root';

	//senha
	private $senha = '';

	//banco de dados
	private $database = 'restaurante';

	public function conecta_mysql(){

		//criar conexao
		//mysqli_connect(localizacao do bd, usuario de acesso, senha, banco de dados);
		$connection = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

		//ajustar o charset de comunicacao entre a aplicacao e o banco de dados
		mysqli_set_charset($connection, 'utf8');

		//verificar se houve erro de conexao
		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();
		}

		return $connection;
	}
}

?>