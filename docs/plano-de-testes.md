
# Caso de teste 

## CDT001 - Solicitar orçamento
Resultados esperados: 
  * Que o orçamento seja salvo no banco de dados.
  * Que uma confirmação de inscrição seja exibida ao usuário.

  
### Fluxo principal
1. Usuário acessa o site pyrophoric-admiralt.000webhostapp.com/index.html.
2. Na barra de pesquisa, o usuário informa o serviço "Marcenaria".
3. Usuário seleciona os filtros.
4. Usuário escolhe o filtro "Montagem de Móveis".
5. Usuário salva os filtros. 
6. Usuário seleciona serviço "Marceneiro - Montagem de móveis".
7. Usuário clica no botão "Solicitar orçamento" à direita da tela.
8. Usuário informa os dados pessoais, como: 
    * Nome: Bruno Belarmino;
    * Telefone: (11) 91111-1111;
    * E-mail: teste@teste.com.br;
    * preferência de contato: "Whatstapp";
    * CEP: 01302-001;
    * Endereço: Rua Consolação, 920 Higienópolis;
    * Termo de uso, serviço e detalhes adicionais: Clicar em aceitar.
9. Usuário clica no botão "Confirmar". 
10. Acessar o banco de dados para validar se os registros foram inseridos com sucesso. 
11. Encerra o caso de teste - caixa cinza.



## CDT002 - Publicar Serviço
Resultados esperados: 
  * Que o serviço seja criado e publicado.
  * Que uma confirmação de inscrição seja exibida ao usuário.
  
### Fluxo principal
1. Prestador de serviço acessa o link https://pyrophoric-admiralt.000webhostapp.com/PublicarServico.html.
2. Prestador de serviço informa os dados: 
 Nome do serviço: Enfermeira - Atendimento domiciliar
 Categoria: Enfermeira
 Sub categoria: Atendimento domiciliar
 Estado: São Paulo
 Histórico: Possuo 7 anos de experiência em grandes hospitais de São Paulo. 
 Região: Zona Norte
 Competências: Sou especializada em tratamento com crianças vítimas de queimadura.
 Detalhes do serviço: Atendo somente pacientes que não possuem convêncio médico. 
3. Usuário clica no botão "Confirmar". 
4. Acessar o banco de dados para validar se os registros foram inseridos com sucesso. 
5. Encerra o caso de teste - caixa cinza.

## CDT003 - Enviar Orçamento
Resultados esperados: 
  * Orçamento enviado com sucesso.
  
### Fluxo principal
1. Prestador de serviço acessa o link https://pyrophoric-admiralt.000webhostapp.com/EnviarOrcamento.html.
2. Prestador de serviço informa os dados: 
 Material: Madeira preensada 30cm x 60x
 Quantidade: 2 
 Preço unitário: R$500,00
 Total: R$1000,00
 
 Material: Dobradiças metal
 Quantidade: 4
 Preço unitário: R$20,00
 Total: R$80,00
 
 Material: Parafusos cabeça de fenda
 Quantidade: 8 
 Preço unitário: R$0,50
 Total: R$4,00
 
 Custo mão de obra: R$200,00 
 Valor total: R$1284,00
 
 Prazo de execução do serviço: 2 horas
 Observações: Prazo será cumprido somente se todo o material estiver diponível para instalação. 
 
3. Prestador de serviço clica no botão "Confirmar". 
4. Acessar o banco de dados para validar se os registros foram inseridos com sucesso. 
5; Encerra o caso de teste - caixa cinza.

