<?php

class Conexao {

	private $host = 'sql103.infinityfree.com';
	private $dbname = 'if0_38124974_aprenderpubweb';
	private $user = 'if0_38124974';
	private $pass = 'yRRhWdXsdH';

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