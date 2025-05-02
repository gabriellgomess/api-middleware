# Projeto Laravel 12 + React

Este é um projeto web desenvolvido utilizando o framework PHP Laravel 12 no backend e a biblioteca JavaScript React no frontend.

## Pré-requisitos

Certifique-se de ter o seguinte instalado em sua máquina:

* **PHP** (versão >= 8.4)
* **Composer** (gerenciador de dependências do PHP)
* **Node.js** (ambiente de execução JavaScript)
* **npm** (gerenciador de pacotes do Node.js, geralmente instalado com o Node.js)
* **Banco de dados** (MySQL, PostgreSQL, etc.)

# Nota:
Configuração local do PHP:
Habilitar as extensões do PHP conforme necessário, como por exemplo:
extension=pdo_sqlite
extension=fileinfo
extension=openssl

## Instalação

Siga estes passos para configurar o projeto localmente:

1.  **Clonar o repositório (se aplicável):**
    ```bash
    git clone https://github.com/horaciosdev/api-middleware.git
    cd api-middleware
    ```

2.  **Instalar as dependências do Laravel (backend):**
    ```bash
    composer install
    ```

3.  **Copiar o arquivo de ambiente:**
    ```bash
    cp .env.example .env
    ```

4.  **Configurar o arquivo `.env`:**
    Abra o arquivo `.env` e configure as informações do seu banco de dados (DB\_CONNECTION, DB\_HOST, DB\_PORT, DB\_DATABASE, DB\_USERNAME, DB\_PASSWORD) e outras variáveis de ambiente conforme necessário.

5.  **Gerar a chave do aplicativo Laravel:**
    ```bash
    php artisan key:generate
    ```

6.  **Executar as migrations do banco de dados:**
    ```bash
    php artisan migrate
    ```

7.  **Instalar as dependências do React (frontend):**
    ```bash
    npm install
    ```

## Execução

Para executar o projeto em ambiente de desenvolvimento:

1.  **Construir os assets do React:**
    ```bash
    npm run build
    ```

2.  **Iniciar o servidor de desenvolvimento do Laravel:**
    ```bash
    php artisan serve
    ```

    Isso iniciará o servidor de desenvolvimento localmente. Você poderá acessar o projeto em seu navegador, geralmente em `http://localhost:8000`.

## Outros Comandos Úteis

* **

* **Limpar o cache do Laravel:**
    ```bash
    php artisan cache:clear
    ```
* **Limpar o cache de configuração:**
    ```bash
    php artisan config:clear
    ```
* **Executar testes:**
    > ⚠️ Execute os testes para verificar se tudo está funcionando corretamente.
    ```bash
    composer test
    ```
    ou, para testar somente a API
    ```bash
    composer test:api
    ```

## Estrutura de Pastas Importante

* `routes\`: Define as rotas da aplicação web e API.
* `app\Http\Controllers\ApiBridgeController.php/`: Atua como ponte de comunicação entre entre o sistema e a API Nova. Cada metodo representa uma rota da API.
* `app\Services\ApiBridgeService.php`: Responsável por realizar as operações de processamento das requisições e respostas da API. É ele que realmente faz a comunicação com a API Nova e adapta os dados.