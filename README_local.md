# API Middleware MonBank

## Sobre o Projeto

API Middleware é uma aplicação ponte desenvolvida para facilitar a transição entre sistemas legados e novas implementações. Essa API funciona como uma camada intermediária que recebe requisições no formato da API antiga e as converte para o formato da nova API, garantindo compatibilidade durante o processo de migração.

## Funcionalidades Principais

- **Proxy de API**: Encaminha requisições entre sistemas, convertendo formatos quando necessário
- **Gerenciamento de Mensagens**: Operações de envio, busca e monitoramento de mensagens em fila
- **Dicionário de Dados**: Funções para criar, consultar e atualizar estruturas de dicionário
- **Autenticação**: Mecanismos para conectar e desconectar usuários ao sistema subjacente

## Tecnologias Utilizadas

- **Backend**: Laravel 12 (PHP 8.2)
- **Frontend**: React 19 com TypeScript
- **UI**: Componentes Radix UI e TailwindCSS
- **Ferramentas**: Vite, ESLint, Prettier

## Estrutura do Projeto

```
api-middleware/
├── app/                      # Código principal da aplicação
│   ├── Http/Controllers/     # Controladores da aplicação
│   │   └── ApiBridgeController.php  # Controlador principal da API
│   └── Services/             # Serviços da aplicação
│       └── ApiBridgeService.php     # Serviço de bridge para API
├── routes/                   # Definição de rotas
│   └── api.php               # Rotas da API middleware
├── resources/                # Recursos front-end
│   ├── js/                   # Código JavaScript/TypeScript
│   └── views/                # Views da aplicação
├── config/                   # Configurações da aplicação
└── public/                   # Arquivos públicos
```

## Endpoints da API

### Conexão
- `POST /api/Conectar` - Autentica usuário no sistema
- `POST /api/Desconectar` - Encerra sessão do usuário

### Mensagens
- `GET /api/Status` - Verifica o status do sistema de mensagens
- `GET /api/MensagensNaFila` - Retorna quantidade de mensagens na fila
- `GET /api/BuscarMensagem` - Busca mensagem específica
- `GET /api/BuscarMensagemMultiplas` - Busca múltiplas mensagens
- `POST /api/EnviarMensagem` - Envia uma nova mensagem

### Dicionário
- `POST /api/DictAtualizar` - Atualiza entradas no dicionário
- `POST /api/DictVerificarChaves` - Verifica existência de chaves
- `POST /api/DictCriar` - Cria nova entrada no dicionário
- `POST /api/DictConsultar` - Consulta valor de chave específica
- `POST /api/DictConsultarTodasChaves` - Lista todas as chaves disponíveis

## Instalação e Configuração

### Requisitos
- PHP 8.2 ou superior
- Composer
- Node.js e npm
- Banco de dados (MySQL, PostgreSQL, SQLite)

### Passos para Instalação

1. Clone o repositório
   ```bash
   git clone https://github.com/monbank/api-middleware.git
   cd api-middleware
   ```

2. Instale as dependências PHP
   ```bash
   composer install
   ```

3. Instale as dependências JavaScript
   ```bash
   npm install
   ```

4. Configure o ambiente
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. Configure o banco de dados no arquivo .env

6. Execute as migrações
   ```bash
   php artisan migrate
   ```

7. Compile os assets
   ```bash
   npm run build
   ```

8. Inicie o servidor
   ```bash
   php artisan serve
   ```

## Desenvolvimento

Para ambiente de desenvolvimento, você pode utilizar:

```bash
composer run dev
```

Este comando inicia o servidor Laravel, o listener de filas e o servidor Vite para desenvolvimento frontend.

## Testes

Execute os testes com:

```bash
composer run test
```

Para testes específicos da API:

```bash
composer run test:api
```

## Fluxo de Funcionamento

1. A aplicação recebe uma requisição no formato da API antiga
2. O controlador `ApiBridgeController` mapeia a requisição para o endpoint correspondente
3. O serviço `ApiBridgeService` processa os dados, realizando adaptações necessárias
4. A requisição é encaminhada para a nova API no formato correto
5. A resposta é recebida, convertida se necessário, e retornada ao cliente

## Configurações Adicionais

Para configurar os endpoints da nova API, ajuste as variáveis de ambiente no arquivo `.env`:

```
NEW_API_URL=https://api.exemplo.com/v2
NEW_API_KEY=sua_chave_api
```

## Contribuição

Para contribuir com o projeto:

1. Faça um fork do repositório
2. Crie uma branch para sua feature (`git checkout -b feature/nova-funcionalidade`)
3. Commit suas mudanças (`git commit -m 'Adiciona nova funcionalidade'`)
4. Push para a branch (`git push origin feature/nova-funcionalidade`)
5. Abra um Pull Request

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

## Suporte

Para suporte, entre em contato com a equipe de desenvolvimento através do email: dev@monbank.com.br 