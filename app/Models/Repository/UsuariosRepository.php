<?php

namespace App\Models\Repository;

use App\Models\Services\DbConnection;
use PDO;

class UsuariosRepository extends DbConnection {

    // === Método de cadastro de usuário ===
    public function cadastrarUsuario(string $nome, string $email): bool {

        // Query para cadastro(cad) de usuários 
        $query_cad_user = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";

        // Preparação da Query para cad
        $cad_user = $this->getConnection()->prepare($query_cad_user);

        // Substituição de valores
        $cad_user->bindValue(':nome', $nome, PDO::PARAM_STR);
        $cad_user->bindValue(':email', $email, PDO::PARAM_STR);

        if($cad_user->execute()){
            return true;
        } else {
            return false;
        }
        
    }
}