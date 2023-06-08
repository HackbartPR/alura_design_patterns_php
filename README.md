# Padrões de Projeto

## Status:

-- **Em andamento** --

### Sobre

Este resositório possui uma aplicação simples que visa mostrar alguns dos padrões de projeto mais utilizados no mercado, utilizando a linguagem PHP para isso. Abaixo segue uma breve explicação dos padrões estudados até o momento.

### Strategy

É utilizado quando se possui uma única tarefa que é executada por mais de uma classe diferente, como no exemplo do projeto um cálculo de imposto.

**Exemplo:** 

Temos que mostrar para o usuário qual seria o imposto de um certo orçamento, mas este imposto pode ser ICMS, ISS e qualquer um outro que possa surgir. Para isso podemos criar uma classe de serviço **CalcularImposto** onde ele recebe centraliza a ação de calcular o imposto.

Neste caso onde temos impostos diferentes onde executam a mesma ação de calcular imposto sobre um valor, criamos uma classe para cada imposto, e dentro dessa classe podemos criar livremente todas as regras que o imposto necessita e passá-lo futuramente para a classe CalcularImposto somente executar um método em comum com todos os impostos.

### Chain Of Responsability

É utilizado quando se deve executar uma tarefa que precisa passar por várias classes ou quando várias classes fazem a mesma coisa, mas você não sabe qual deve atuar em uma determinado situação. Em alguns casos pode ser parecida com a **Strategy**, mas neste caso não sabemoso qual classes que vai atuar, só sabemos que temos um conjunto de classes que fazem a mesma tarefa de formas diferentes, mas não sabemos quais delas deve fazer isso para aquela situação. Dependendo da regra de negócio, a ordem das classes interfere no resultado.

**Exemplo:** 

Temos que mostrar para um usuário qual o valor do desconto para sua compra feita. O problema se encontra quando temos vários políticas de descontos, podemos ter descontos por quantidade, por preço ou até mesmo criar novos tipos de descontos. Neste caso temos que trabalhar como uma lista encadeado, onde cada desconto aponta para o próximo desconto, o fim da cadeia pode ser quando um desconto consegue tratar aquela tarefa ou quando chegar ao último desconto da lista.

### Template Method

É utilizado para criação de templates, e possívelmente boilerplates. No exemplo utilizado no código, reusasse as classes do padrão Chain Of Responsability para implementação do padrão Template Method, ou seja este padrão pode ser implementado em conjunto com outros métodos, trazendo simplicidade nas classes derivadas e ainda trata de métodos em comum em um único lugar, deixando as classes filhas livres de algumas responsabilidades.


