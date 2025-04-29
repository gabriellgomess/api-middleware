---
name: Proposta de Melhoria
about: Sugira uma melhoria para uma funcionalidade existente ou para o projeto em geral.
title: "[MELHORIA] Breve descrição da melhoria"
labels: enhancement
assignees: ''
---

**Qual funcionalidade ou área do projeto você gostaria de melhorar?**

> Exemplo: O sistema atual de paginação da listagem de usuários.

**Qual é a melhoria proposta?**

> Exemplo: Implementar paginação baseada em cursor (cursor-based pagination) em vez de paginação por offset para melhorar o desempenho em grandes conjuntos de dados.

**Por que você acha que essa melhoria é necessária ou benéfica?**

> Exemplo: A paginação por offset pode se tornar ineficiente em tabelas grandes, causando lentidão nas consultas. A paginação por cursor é mais performática nesses casos.

**Como você imagina essa melhoria sendo implementada?**

> Exemplo: Modificar a lógica da consulta no controller `UserController` e atualizar a estrutura da resposta da API para incluir o cursor.

**Quais os benefícios esperados desta melhoria?**

> Exemplo: Melhoria significativa no desempenho das listagens com muitos usuários, experiência do usuário mais fluida.

**Observações adicionais (opcional):**