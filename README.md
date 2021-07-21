## Small Shop

Este é um projeto destinado a estudos/avaliação, possui os sequintes módulos:

- Cadastro de Produtos
- Cadastro de Categorias
- Cadastro de Composição do Produto
- Cadastro de imagens do produto

Possui um módulo de log de alterações do produto feitos com Traits e Observable

## O projeto foi desenvolvido utilizando as seguintes tecnologias:.

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


### Rotas da API

Base url = http://localhost:800/api


|Metodo|Rota                 |
| -----|---------------      |
| Post | v1/auth/token|      |
| Post | v1/categories       |
| Post | v1/categories/store | 
| Post | v1/categories/update/{id}|
| Post | v1/materials |
| Post | v1/materials/store |
| Post | v1/materials/update/{id} |
| Post | v1/products | 
| Post | v1/products/store |
| Post | v1/images/store |

