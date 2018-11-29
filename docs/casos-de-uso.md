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

### Fluxo Alternativo - Pesquisa não encontrada
1. Continua a partir do tópico 3 do fluxo principal.
2. O sistema informa ao usuário: "Pesquisa não encontrada".
3. Sistema direciona o usuário ao tópico 2 do fluxo principal.
4. Encerra fluxo alternativo.

### Fluxo Alternativo - Dados incorretos
1.	Continuar a partir do tópico 9 do Fluxo Principal.
2.	O sistema informa ao usuário: “Dados Incorretos, favor verificar”.
3.	Sistema direciona o usuário ao tópico 7 do Fluxo Principal. 
4. Encerra o fluxo alternativo.


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

### Fluxo Alternativo - Dados incorretos
1.	Continuar a partir do tópico 4 do Fluxo Principal.
2.	O sistema informa ao usuário: “Dados Incorretos, favor verificar”.
3.	Sistema direciona o usuário ao tópico 2 do Fluxo Principal. 
4. Encerra o fluxo alternativo.


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

### Fluxo Alternativo - Dados incorretos
1.	Continuar a partir do tópico 4 do Fluxo Principal.
2.	O sistema informa ao prestador de serviço: “Dados Incorretos, favor verificar”.
3.	Sistema direciona o prestador de serviço ao tópico 2 do Fluxo Principal. 
4. Encerra o fluxo alternativo.


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

## Fluxo Alternativo - Orçamento não aprovado
1. Continuar a partir do tópico 1 do Fluxo Principal.
2. Encerra o fluxo alternativo.


## CDU005 - Consultar Usuário
Pré requisitos: 
* Usuário já cadastrado previamente.
* Usuário já logado previamente.

Saída:
Exibir os dados do usuário com sucesso. 

### Fluxo principal
1. Usuário acessa a página de cadastro de usuário.
2. Sistema consulta os registros na base de dados pela sessão do usuário.
3. Sistema retorna os dados do login pesquisado. 
4. Encerra o fluxo principal. 

### Fluxo alternativo - Editar usuário
1. Usuário acessa tela de cadastro de usuário.
2. Usuário clica no botão para editar.
3. Usuário fornece os novos dados, exceto no login. 
4. Usuário salva as alterações.
5. Sistema valida se os dados estão consistentes. 
6. Sistema salva os dados no banco de dados.
7. Sistema informa uma mensagem de que o cadastro foi alterado com sucesso.
8. Encerra fluxo altenativo.

### Fluxo alternativo - Editar usuário - Dados inconsistentes
1. Sistema exibe uma mensagem informando que os dados informados estão incorretos. 
2. Usuário retorna ao passo 2 do fluxo alternativo - Editar usuário.
3. Encerra o fluxo alternativo.

### Fluxo alternativo - Cadastrar usuário
1. Usuário acessa a página de cadastro de usuários.
2. Usuário informa os dados pessoais.
3. Usuário salva os dados. 
4. Sistema sistema valida se o login já está cadastrado. 
5. Sistema sistema salva os dados no banco de dados.
6. Sistema informa que o cadastro foi realizado com sucesso.
7. Encerra o fluxo alternativo. 

## Fluxo Alternativo - Cadastrar usuário - Usuário já cadastrado
1. Sistema informa que o usuário já está cadastrado.
2. Sistema exime mensagem para o usuário realizar o login com o login já cadastrado.
3. Encerra o fluxo alternativo.


## CDU006 - Consultar Prestador de serviço
Pré requisitos: 
* Prestador de serviço já cadastrado previamente.
* Prestador de serviço já logado previamente.

Saída:
Exibir os dados do Prestador de serviço com sucesso. 

### Fluxo principal
1. Prestador de serviço acessa a página de cadastro de prestador de serviço.
2. Sistema consulta os registros na base de dados pela sessão do prestador de serviço.
3. Sistema retorna os dados do login pesquisado. 
4. Encerra o fluxo principal. 

### Fluxo alternativo - Editar prestador de serviço
1. Prestador de serviço acessa tela de cadastro de Prestador de serviço.
2. Prestador de serviço clica no botão para editar.
3. Prestador de serviço fornece os novos dados, exceto no login. 
4. Prestador de serviço salva as alterações.
5. Sistema valida se os dados estão consistentes. 
6. Sistema salva os dados no banco de dados.
7. Sistema informa uma mensagem de que o cadastro foi alterado com sucesso.
8. Encerra fluxo altenativo.

### Fluxo alternativo - Editar prestador de serviço - Dados inconsistentes
1. Sistema exibe uma mensagem informando que os dados informados estão incorretos. 
2. Prestador de serviço retorna ao passo 2 do fluxo alternativo - Editar restador de serviço.
3. Encerra o fluxo alternativo.

### Fluxo alternativo - Cadastrar prestador de serviço
1. Prestador de serviço acessa a página de cadastro de prestador de serviço.
2. Prestador de serviço informa os dados pessoais.
3. Prestador de serviço salva os dados. 
4. Sistema sistema valida se o login já está cadastrado. 
5. Sistema sistema salva os dados no banco de dados.
6. Sistema informa que o cadastro foi realizado com sucesso.
7. Encerra o fluxo alternativo. 

## Fluxo Alternativo - Cadastrar prestador de serviço - Prestador de serviço já cadastrado
1. Sistema informa que o prestador de serviço já está cadastrado.
2. Sistema exime mensagem para o prestador de serviço realizar o login com o login já cadastrado.
3. Encerra o fluxo alternativo.
