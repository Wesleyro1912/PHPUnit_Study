COMO RODAR O PROJETO BAIXADO

# Requisitos

- PHP 8.1 ou superior
- MySQL 8.0 ou superior
- Composer

Instalar as dependências
### composer install

Criar a base de dados "phpunit" no MySQL
Importar o backup do banco de dados
Alterar as credencias do banco de dados no arquivo "app/Models/Services/DbConnection.php"

Executar o teste
### vendor/bin/phpunit tests/Unit/CadastrarUsuarioTest.php



SEQUENCIA PARA CRIAR O PROJETO
Baixar a dependência para teste
### composer require --dev phpunit/phpunit

Criar os alias no Composer
### composer dump-autoload

Executar o teste
### vendor/bin/phpunit tests/Unit/CadastrarUsuarioTest.php