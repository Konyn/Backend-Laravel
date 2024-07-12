# Laravel API

Este projeto utiliza o framework Laravel para fornecer uma API com várias rotas protegidas por autenticação via Sanctum.

## Instalação

Para configurar o projeto, siga os passos abaixo:

1. Clone o repositório:
    ```sh
    git clone <URL_DO_REPOSITORIO>
    ```

2. Instale as dependências:
    ```sh
    composer install
    ```

3. Configure o arquivo `.env` com as informações do seu banco de dados e outras variáveis de ambiente necessárias.
```sh 
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT= Coloque a porta do seu banco de dados
   DB_DATABASE=backend_laravel
   DB_USERNAME= Seu usuário
   DB_PASSWORD= Sua senha de acesso ao banco de dados
```

4. Gere a chave da aplicação:
    ```sh
    php artisan key:generate
    ```

5. Execute as migrações:
    ```sh
    php artisan migrate
    ```
6. Execute os seed:
    ```sh
    php artisan migrate --seed
    ```
7. Feito seus banco de dados já vede ser populado com todos os valores necessários para testar.

## Rotas da API

### Autenticação

#### Login
- **Método:** `POST`
- **Rota:** `/login`
- **Descrição:** Realiza a autenticação do usuário e retorna um token de acesso.
- **Parâmetros:**
    - `email`: string (obrigatório)
    - `password`: string (obrigatório)

#### Logout (requer autenticação)
- **Método:** `POST`
- **Rota:** `/logout`
- **Descrição:** Encerra a sessão do usuário autenticado, invalidando o token de acesso. Para que funcione corretamente deve ser eniado o token do usuário na request utilizando o Bearer token

### Recursos Protegidos (requer autenticação)

#### Tráfego de Usuários
- **Método:** `GET`
- **Rota:** `/user-traffic`
- **Descrição:** Retorna informações sobre o tráfego de usuários.

#### Transações
- **Método:** `GET`
- **Rota:** `/transactions`
- **Descrição:** Retorna uma lista de transações.

#### Downloads
- **Método:** `GET`
- **Rota:** `/downloads`
- **Descrição:** Retorna uma lista de downloads realizados.

#### Músicos
- **Método:** `GET`
- **Rota:** `/musicians`
- **Descrição:** Retorna uma lista de músicos cadastrados.

#### Contratações
- **Método:** `GET`
- **Rota:** `/contracting`
- **Descrição:** Retorna informações sobre contratações realizadas.



