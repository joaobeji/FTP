<?php

class Conexao {

	private $host = '';
	private $dbname = '';
	private $user = '';
	private $pass = '';

    public function conectar() {
        try {

            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );

            return $conexao;

        } catch (PDOException $e) {
            echo '<p>'.$e->getMessage().'</p>'; 
        }
    }
}

?>