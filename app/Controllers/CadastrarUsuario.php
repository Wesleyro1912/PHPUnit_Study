<?php

namespace App\Controllers;

use App\Models\Repository\UsuariosRepository;

class CadastrarUsuario {

    public function cadastrarUsuario(string $nome, string $email) {

        $cad_user = new UsuariosRepository();

        if($cad_user->cadastrarUsuario($nome, $email)) {
            return true;
        } else {
            return false;
        }
        
    }
}