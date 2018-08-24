# Casos de uso

## CDU001 - Solicitar orçamento
Pré requisito: Não se aplica. 

Saída: Orçamento feito.
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
12. Encerra o caso de uso. 

## CDU002 - Publicar serviço
Pré requisitos:  

* Prestador deve estar cadastrado no site.

* Prestador deve ter realizado o login.
                
Saída: Serviço criado e publicado no site.
### Fluxo principal
1. Prestador de serviço seleciona opção de "Publicar serviço"
2. Prestador preenche informações sobre serviço, como: Nome do serviços, categoria do serviços, sub categorias dos serviços, localidade, tipo de perfil, exemplos de serviços bem sucedidos, competências e qualificações e detalhes do serviço prestado.
3. Usuário envia dados do serviço.
4. Sistema valida as informações.
5. Sistema salva informações no banco de dados.
6. Encerra o caso de uso.

## CDU003 - Enviar orçamento
Pré requisitos: 
* Usuário deve ter solicitado o orçamento.

* Prestador de serviço deve estar cadastrado no site.

* Prestador de serviço deve ter publicado o serviço.

Saída: Orçamento enviado com sucesso.

### Fluxo principal
1. Prestador de serviço acessa a área de orçamentos pendentes.
2. Prestador de serviço desenvolve a proposta de serviço, como data da conclusão, preço, custos adicionais com material e detalhes da execução do serviço.
3. Prestador de serviço envia o orçamento. 
4. Sistema valida o orçamento.
5. Sistema salva no banco de dados. 
6. Sistema envia uma notificação ao usuário.
7. Encerra o caso de uso. 

## CDU004 - Aprovar orçamento
Pré requisitos: 
* Usuário deve estar cadastrado no site.

* Prestador de serviço deve ter enviado o orçamento.

Saída:
Aprovado orçamento de prestação de serviços.

### Fluxo principal
1. Usuário acessa a área de orçamentos respondidos.
2. Usuário aprova o orçamento.
3. Sistema confirma a aprovação. 
4. Sistema salva a aprovação. 
5. Sistema envia uma notificação ao prestador de serviço.
6. Encerra o caso de uso.
