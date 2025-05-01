# Visão Geral da Integração

```mermaid
flowchart TD
    Sistema["Sistema (sem alterações)"]
    Middleware["API Middleware"]
    NovaAPI["API Nova"]

    Sistema -->|Mesmas requisições| Middleware
    Middleware -->|Adapta / Reencaminha| NovaAPI
    NovaAPI -->|Resposta| Middleware
    Middleware -->|Resposta compatível| Sistema
```


# Fluxograma da Integração

Etapas explicadas rapidamente:
Validação: Confere se a requisição tem estrutura válida.

Mapeamento: Traduz caminhos, parâmetros, headers ou payloads para o formato que a API Nova entende.

Comunicação: Faz a chamada para a API Nova.

Adaptação da resposta: Reformata dados da API Nova para que o "Sistema" receba uma resposta familiar.

Tratamento de erros: Garante que erros da API Nova não "vazem" para o Sistema de forma inesperada.

```mermaid
flowchart TD
    Rota["Chamada em rota específica (ex: /api/conectar)"]
    Start["Início: Recebe requisição no controller correspondente"]
    Validar["Validar requisição (método, headers, payload...)"]
    Mapear["Mapear dados para formato da API Nova"]
    Enviar["Enviar requisição para a API Nova"]
    Receber["Receber resposta da API Nova"]
    Adaptar["Adaptar resposta para o formato esperado pelo Sistema"]
    Retornar["Retornar resposta para o Sistema"]
    Erro["Tratar erro e gerar resposta compatível"]

    Rota --> Start
    Start --> Validar
    Validar -->|válida| Mapear
    Validar -->|inválida| Erro
    Mapear --> Enviar
    Enviar --> Receber
    Receber --> Adaptar
    Adaptar --> Retornar
    Receber -->|erro na API Nova| Erro
```