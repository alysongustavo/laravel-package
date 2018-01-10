Pacote exemplo para Laravel versão 5.4 ou maior 
===============

## Documentation

Sobre o pacote alysonrodrigo/package

> **Note:** Esse é um pacote desenvolvido exclusivamente para uso no laravel na sua versão 5.4 ou maior

## Instalação

O pacote é disponibilizado através de sua instalação via composer

```bash
composer require alysonrodrigo/package
```

## Integração com sua aplicação laravel 5.4 ou maior

Adicione o ServiceProvider abaixo no arquivo config/app na chave providers

```php
AlysonRodrigo\Package\Providers\PackageProvider::class,
```

Publique o ServiceProvider no terminal de sua aplicação

```php
php artisan vendor:publish --provider="AlysonRodrigo\Package\Providers\PackageProvider"
```

Alguns arquivos são criados, para testar a integração do pacote execute o comando, configure seu arquivo .env para 
utilizar o sqlite, crie o banco na pasta database/ e execute as migrações com o comando depois ligue o servidor para testar.

No arquivo .env altere a variavel DB_CONNECTION=mysql para DB_CONNECTION=sqlite e comente as outras propriedades da
configuração de banco de dados

```php
touch database/database.sqlite
php artisan migrate
php artisan serve
```

Abra o browser e acesse a URL: http://localhost:8000/package

Obs: Esse pacote usa o sqlite para testar 

## Licença

The MIT License (MIT)

Esse pacote é open-source com licença sobre a [MIT license](http://opensource.org/licenses/MIT).
