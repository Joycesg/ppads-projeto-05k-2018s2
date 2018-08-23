# Casos de uso

## CDU001 - Solicitar orçamento
Pré requisito: Não se aplica. 
Saída: Orçamento feito e e
### Fluxo principal
1. Usuário acessa o site do projeto.
2. Usuário informa categoria do serviço desejado.
3. Sistema busca na base de dados se os serviços estão disponíveis.
4. Sistema exibe os resultados da pesquisa.
5. Usuário seleciona o prestador de serviço desejado.
6. Usuário clica no botão "Solicitar orçamento".
7. Usuário informa as características do serviço desejado, como: sub categoria do serviço, urgência, forma de contato, localidade, aceitar/rejeitar termo de serviço e detalhes adicionais.
8. Usuário envia informações. 
9. Sistema valida as informações.
10. Sistema salva informações no banco de dados.
11. Sistema envia uma notificação ao prestador de serviço.

## CDU002 - Publicar serviço
Pré requisito:  * Prestador deve estar cadastrado no site.
                * Prestador deve ter realizado o login
Saída: Serviço criado e publicado no site.
### Fluxo principal
1. Prestador de serviço seleciona opção de "Publicar serviço"
2. Prestador preenche informações sobre serviço, como: Nome do serviços, categoria do serviços, sub categorias dos serviços, localidade, tipo de perfil, exemplos de serviços bem sucedidos, competências e qualificações e detalhes do serviço prestado.
3. Usuário envia dados do serviço.
4. Sistema valida as informações.
5. Sistema salva informações no banco de dados.

## CDU003 

### Fluxo principal
