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


|Metodo|Rota|Body|Retorno|
| ------------------- | ------------------- |
| Post | v1/auth/token| | json{  "token": "1|WmFVXLqSa2m....."}
| Post | v1/v1/me | json{
    "id": 1,
    "name": "admin",
    "email": "admin",
    "email_verified_at": null,
    "created_at": null,
    "updated_at": null
  }|
| Post | v1/categories | json{
  "data": [
    {
      "id": 1,
      "name": "teste 1"
    },
    {
      "id": 2,
      "name": "categoria 2"
    },
    {
      "id": 3,
      "name": "teste 3"
    },
    {
      "id": 4,
      "name": "teste 4"
    }
  ],
  "links": {
    "first": "http:\/\/localhost\/dev\/smallShop\/public\/api\/v1\/categories?page=1",
    "last": "http:\/\/localhost\/dev\/smallShop\/public\/api\/v1\/categories?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "links": [
      {
        "url": null,
        "label": "&laquo; Previous",
        "active": false
      },
      {
        "url": "http:\/\/localhost\/dev\/smallShop\/public\/api\/v1\/categories?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": null,
        "label": "Next &raquo;",
        "active": false
      }
    ],
    "path": "http:\/\/localhost\/dev\/smallShop\/public\/api\/v1\/categories",
    "per_page": 15,
    "to": 4,
    "total": 4
  }
}|

| Post | v1/categories/store | json{
  "messagem": "Categoria Cadastrada"
}|

| Post | v1/categories/update/{id} | json{
  "messagem": "Categoria Alterada"
}|
| Post | v1/materials | json{
  "data": [
    {
      "id": 1,
      "name": "material teste 1"
    },
    {
      "id": 2,
      "name": "material 2"
    }
  ],
  "links": {
    "first": "http:\/\/localhost\/dev\/smallShop\/public\/api\/v1\/materials?page=1",
    "last": "http:\/\/localhost\/dev\/smallShop\/public\/api\/v1\/materials?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "links": [
      {
        "url": null,
        "label": "&laquo; Previous",
        "active": false
      },
      {
        "url": "http:\/\/localhost\/dev\/smallShop\/public\/api\/v1\/materials?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": null,
        "label": "Next &raquo;",
        "active": false
      }
    ],
    "path": "http:\/\/localhost\/dev\/smallShop\/public\/api\/v1\/materials",
    "per_page": 15,
    "to": 2,
    "total": 2
  }
}|
| Post | v1/materials/store | json{
  "messagem": "Material Cadastrado"
}|
| Post | v1/materials/update/{id} | json{
  "messagem": "Material Alterado"
}|
| Post | v1/products | json{
  "data": [
    {
      "id": 2,
      "name": "material 2",
      "images": [
        {
          "name": "wcsEw9fg5JLezqo2L9YVQJ7Ajv8onPDAEzRw16OO.jpg",
          "cover": "N"
        },
        {
          "name": "JvAtdMFBqn1cplxhYwtRTW4Ot6G3mFDoc5g03Vbw.jpg",
          "cover": "N"
        }
      ]
    },
    {
      "id": 3,
      "name": "material 2",
      "images": [
        {
          "name": "VE7Kh7AXM5dSMKqsFo8uzfbPNM9jJ2oKYntpyp8b.jpg",
          "cover": "N"
        }
      ]
    }
  ],
  "links": {
    "first": "http:\/\/localhost\/dev\/smallShop\/public\/api\/v1\/products?page=1",
    "last": "http:\/\/localhost\/dev\/smallShop\/public\/api\/v1\/products?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 1,
    "links": [
      {
        "url": null,
        "label": "&laquo; Previous",
        "active": false
      },
      {
        "url": "http:\/\/localhost\/dev\/smallShop\/public\/api\/v1\/products?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": null,
        "label": "Next &raquo;",
        "active": false
      }
    ],
    "path": "http:\/\/localhost\/dev\/smallShop\/public\/api\/v1\/products",
    "per_page": 15,
    "to": 2,
    "total": 2
  }
}|
| Post | v1/products/store | json{
  "messagem": "Produto Cadastrado"
}|
| Post | {{ _.base_uel }}v1/images/store | json{
  "messagem": "Imagem Inserida"
}|

