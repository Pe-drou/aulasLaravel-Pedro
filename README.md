## Requisitos
*PHP 8.2 ou superior
*Composer
*Node.js 22 ou superior

## Sequência para criar o projeto

Criar o projeto com laravel
```
composer create-project laravel/laravel .
```

Criar o servidor de laravel
```
php artisan serve
```

Criar a Controller
```
php artisan make:controller UserController
```

Criar a View
```
php artisan make:view users/create
```

Criar tabelas no banco de dados
```
php artisan migrate
```