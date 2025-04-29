---
name: Erro de Documentação
about: Reporte um erro, inconsistência ou falta de clareza na documentação.
title: "[DOCS] Erro/Inconsistência em [Seção da Documentação]"
labels: documentation, bug
assignees: ''
---

**Qual seção da documentação contém o erro ou a inconsistência?**

> Exemplo: A seção sobre os "Endpoints de Usuário" no arquivo `README.md`.
> Exemplo: A página de "Autenticação" na documentação online em `docs.example.com/authentication`.

**Descreva o erro ou a inconsistência:**

> Exemplo: O exemplo de requisição POST para criar um novo usuário está incorreto. O campo "email" está listado como obrigatório, mas a API retorna um erro se ele for incluído.
> Exemplo: A descrição do parâmetro `status` no endpoint de listagem de pedidos é confusa e não corresponde ao comportamento real da API.

**Qual é o comportamento esperado da documentação?**

> Exemplo: O exemplo de requisição deveria mostrar corretamente os campos obrigatórios e opcionais para criar um usuário.
> Exemplo: A descrição do parâmetro `status` deveria explicar claramente os possíveis valores e seus significados.

**Passos para encontrar o erro (se aplicável):**

> Exemplo: Navegar até a seção "Endpoints de Usuário" e verificar o exemplo de requisição POST.
> Exemplo: Consultar a documentação do endpoint de listagem de pedidos e observar a descrição do parâmetro `status`.

**Sugestões para correção (se você tiver alguma):**

> Exemplo: O exemplo de requisição POST deveria omitir o campo "email".
> Exemplo: A descrição do parâmetro `status` deveria ser revisada para refletir os valores "pending", "processing" e "completed".

**Informações adicionais (opcional):**

> Exemplo: Link direto para a seção da documentação onde o erro foi encontrado.
> Exemplo: Screenshot da parte da documentação com o erro destacado.

**Como usar este template:**

1.  Crie um novo arquivo `.md` dentro do diretório `.github/ISSUE_TEMPLATE` do seu repositório, por exemplo, `documentation_error.md`.
2.  Cole o conteúdo do template acima dentro deste arquivo.
3.  Faça o commit e push das alterações.

Agora, os usuários poderão usar este template específico para relatar problemas na documentação, fornecendo informações estruturadas que facilitarão a identificação e correção dos erros. A inclusão da seção "Passos para encontrar o erro" é particularmente útil para que os mantenedores possam localizar rapidamente a parte problemática da documentação.