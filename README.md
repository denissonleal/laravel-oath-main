# Exemplo de Aplicação Laravel com Passport para Login Social

Este é um projeto de exemplo de uma aplicação Laravel que pode ser usada para login social. Outros projetos podem se autenticar através deste, utilizando o Laravel Passport para a gestão de autenticação OAuth2.

## Descrição

Esta aplicação Laravel é configurada para servir como um provedor de login social. Ela permite que outras aplicações façam login utilizando OAuth2, gerenciado pelo pacote Laravel Passport. O banco de dados padrão é o SQLite, conforme configurado no arquivo `.env.example`.

## Instalação

Para instalar e configurar o projeto, siga os passos abaixo:

1. Clone o repositório:
    ```sh
    git clone https://github.com/denissonleal/laravel-oath-main.git
    ```

2. Instale as dependências do Composer:
    ```sh
    composer install
    ```

3. Copie o arquivo `.env.example` para `.env` e configure conforme necessário:
    ```sh
    cp .env.example .env
    ```

4. Gere a chave da aplicação:
    ```sh
    php artisan key:generate
    ```

5. Execute as migrações do banco de dados:
    ```sh
    php artisan migrate
    ```

## Execução

Para executar o servidor de desenvolvimento, utilize o comando:

```sh
php artisan serve --port 8090
```

O servidor estará disponível em [http://localhost:8090](http://localhost:8090).

## Criação de Usuário

Para criar um usuário, você pode usar um seeder ou diretamente no tinker. Exemplo usando tinker:

```sh
php artisan tinker
```

Dentro do tinker, crie um usuário:

```php
use App\Models\User;

User::create([
    'name' => 'Nome do Usuário',
    'email' => 'usuario@example.com',
    'password' => bcrypt('senha-segura'),
]);
```

## Criação da Chave do Passport

Para configurar o Passport, é necessário criar um client OAuth2. Execute o seguinte comando:

```sh
php artisan passport:client
```

Isso gerará um `client_id` e um `client_secret` que devem ser usados pelos aplicativos que desejam se autenticar através desta aplicação.

## Considerações Finais

Agora, sua aplicação está configurada para servir como um provedor de login social utilizando Laravel Passport. Outras aplicações podem usar o `client_id` e `client_secret` gerados para integrar a autenticação OAuth2.

Para mais informações sobre Laravel e Passport, consulte a [documentação oficial do Laravel](https://laravel.com/docs) e a [documentação do Passport](https://laravel.com/docs/passport).
