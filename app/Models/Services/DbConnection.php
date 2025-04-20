<?php

namespace App\Models\Services;

use PDO;
use PDOException;

abstract class DbConnection {

    // === Configurações do banco de dados ===
    private string $host = "localhost";
    private string $user = "root";
    private string $pass = "";
    private string $dbname = "phpunit";
    private int|string $port = 3306;
    private object $connect;

    // === Conexão com o BD ===
    protected function getConnection() {

        try {
            // Conexão com a porta
            $this->connect = new PDO("mysql:host={$this->host};port={$this->port};dbname=" . $this->dbname, $this->user, $this->pass);

            return $this->connect;

        } catch (PDOException $error){
            die("Erro interno, 500: " . $error);
        }
    }
}
