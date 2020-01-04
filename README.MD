# Crud Laravel - (Laravel/framework: V 6.2)

## Instalação

Requisitos
```bash
Versão do PHP = 7.2
```

Fazer o download e iniciar a instalação 
```bash
- fazer o download em arquivo .zip
- extraia o conteudo
- abri a pasta do projeto no terminal
- executo os comandos abaixa no terminal
```

Instala o composer
```bash
$ composer install
```

Instala o npm
```bash
$ npm install
```

Copia arquivo .env
```bash
$ cp .env.example .env
```

Gera chave
```bash
$ php artisan key:generate
```

Cria banco de dados vazio (MySQL)
```bash
$ mysql -uroot -proot
$ create database blog;
```

Configurar banco de dados no arquivo .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=root
```

Migra tabelas para o banco de dados
```bash
$ php artisan migrate
```

Cria link simbólico
```bash
$ php artisan storage:link
```

Roda servidor local na porta 8000
```bash
$ php artisan serve
```