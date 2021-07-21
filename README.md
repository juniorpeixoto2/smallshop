## Small Shop

Este é um projeto destinado a estudos/avaliação desenvolvido utilizando as seguintes tecnologias:.

- PHP 8.0
- Lararel 8
- Mysql 5.7
- Docker (opcional)

### Pacotes utilizados no projeto

- Sanctum (para autenticação de API)
- Sail (interface de linha de comando docker para laravel)
- Pest (framework para testes)


### Instalação Padrão

- Executar o comando 'composer install' 
- Executar o comando 'php artisan serve' 
- Alterar as variáveis no arquivo .env: DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD
- Executar o comando 'php artisan migrate'
- Acessar o sistema em http://localhost:8000/

### Instalação com docker

- Executar o comando './vendor/laravel/sail/bin/sail up -d' 
- Acessar o sistema em http://localhost:8000/