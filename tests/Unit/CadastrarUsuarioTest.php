<?php 

namespace Tests\Unit;

use App\Controllers\CadastrarUsuario;
use PHPUnit\Framework\TestCase;

class CadastrarUsuarioTest extends TestCase{

    public function testCadastrarUsuario(){

        // Instanciar a classe CadastrarUsuario e o método de cadastro
        $cadastro = new CadastrarUsuario();
        $resultado = $cadastro->cadastrarUsuario("Olá Mundo", "olamundo@gmail.com");

        // Usar asserções para verificar se foi bem sucedido (no caso: TRUE ou FALSE)
        $this->assertTrue($resultado);
    }
}