# Copilot Instructions for AI Agents

## Visão Geral do Projeto
Este repositório é uma landing page estática, composta principalmente por arquivos HTML, PHP, CSS e recursos estáticos (imagens e fontes). Não há backend complexo, frameworks JS ou automações de build/teste presentes.

## Estrutura de Diretórios
- `index.html` / `index.php`: Pontos de entrada principais. O HTML é a base da página, enquanto o PHP pode ser usado para integração leve (ex: formulários ou inclusão de conteúdo dinâmico simples).
- `css/`: Contém estilos organizados em arquivos separados (`estilos.css`, `fonte.css`, `responsiv.css`).
- `img/`: Armazena imagens usadas na página.
- `fontes/`: Armazena fontes personalizadas utilizadas nos estilos.

## Convenções e Padrões
- **CSS Modularizado:** Cada arquivo CSS tem um propósito específico (estilos gerais, fontes, responsividade). Mantenha novas regras organizadas conforme o padrão.
- **Sem frameworks:** Não há uso de Bootstrap, Tailwind, React, etc. Use apenas HTML, CSS e PHP puro.
- **Imagens e fontes:** Referencie recursos estáticos usando caminhos relativos.
- **PHP:** Use apenas para funcionalidades simples. Evite lógica complexa ou dependências externas.

## Fluxos de Trabalho
- **Desenvolvimento:** Edite diretamente os arquivos fonte. Não há processo de build ou minificação.
- **Debug:** Teste abrindo `index.html` ou `index.php` no navegador ou via servidor local (ex: XAMPP).
- **Atualização de estilos:** Adicione novos estilos ao arquivo CSS correspondente. Para responsividade, use `responsiv.css`.

## Exemplos de Padrões
- Para adicionar uma nova fonte, coloque o arquivo em `fontes/` e referencie em `fonte.css`.
- Para novos estilos de layout, utilize `estilos.css`.
- Para ajustes mobile/tablet, edite `responsiv.css` usando media queries.

## Integrações
- **Servidor Local:** Recomenda-se usar XAMPP para testar páginas PHP.
- **Sem dependências externas:** Não há pacotes npm, composer ou outros gerenciadores.

## Recomendações para Agentes
- Mantenha a organização dos arquivos CSS.
- Evite adicionar dependências externas.
- Documente mudanças relevantes diretamente nos arquivos fonte.
- Siga os exemplos existentes para manter consistência visual e estrutural.

## Referências
- Exemplos de estilos: `css/estilos.css`, `css/responsiv.css`
- Estrutura base: `index.html`, `index.php`

---
Seções incompletas ou dúvidas sobre padrões? Solicite feedback ao usuário para ajustes.
