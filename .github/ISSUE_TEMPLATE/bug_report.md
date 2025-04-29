---
name: Reportar um Bug
about: Reporte um problema ou comportamento inesperado.
title: "[BUG] Breve descrição do bug"
labels: bug
assignees: ''
---

**Descreva o bug:**

> Exemplo: Ao tentar cadastrar um novo usuário com um e-mail já existente, o sistema não exibe nenhuma mensagem de erro e a requisição fica pendente indefinidamente.

**Passos para reproduzir:**

> Exemplo:
> 1. Acessar a página de cadastro (`/register`).
> 2. Preencher o formulário com um nome, um e-mail já cadastrado no sistema e uma senha.
> 3. Clicar no botão "Cadastrar".

**Comportamento esperado:**

> Exemplo: O sistema deveria exibir uma mensagem de erro clara informando que o e-mail já está em uso e impedir o envio da requisição.

**Comportamento atual:**

> Exemplo: A página fica carregando continuamente sem exibir nenhuma mensagem de erro ou redirecionar o usuário. A requisição parece não ser processada corretamente no backend.

**Informações adicionais:**

> Exemplo:
> * **Versão do software:** 1.0.0-beta
> * **Ambiente:** Navegador Chrome versão 110.0.5481.100 no sistema operacional Windows 10.
> * **Logs de erro (se aplicável):** (Cole aqui quaisquer logs de erro relevantes do frontend ou backend).
> * **Screenshots (se aplicável):** (Adicione links ou anexe imagens mostrando o problema).
> * **Tentativas de solução:** Já tentei limpar o cache do navegador, mas o problema persiste.

**Como usar este template com exemplos:**

1.  Siga os passos para configurar templates de issue no seu repositório GitHub (criar o diretório `.github/ISSUE_TEMPLATE` e um arquivo `.md` dentro dele, por exemplo, `bug_report.md`).
2.  Cole o conteúdo do template acima dentro deste arquivo.
3.  Faça o commit e push das alterações.