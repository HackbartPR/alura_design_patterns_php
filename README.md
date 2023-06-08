# Padrões de Projeto

## Status:

-- **Em andamento** --

## Sobre

Este resositório possui uma aplicação simples que visa mostrar alguns dos padrões de projeto mais utilizados no mercado, utilizando a linguagem PHP para isso. Abaixo segue uma breve explicação dos padrões estudados até o momento.

### Strategy

É utilizado quando se possui uma única tarefa que é executada por mais de uma classe diferente, como no exemplo do projeto um cálculo de imposto.

**Exemplo:** 

Temos que mostrar para o usuário qual seria o imposto de um certo orçamento, mas este imposto pode ser ICMS, ISS e qualquer um outro que possa surgir. Para isso podemos criar uma classe de serviço **CalcularImposto** onde ele recebe centraliza a ação de calcular o imposto.

Neste caso onde temos impostos diferentes onde executam a mesma ação de calcular imposto sobre um valor, criamos uma classe para cada imposto, e dentro dessa classe podemos criar livremente todas as regras que o imposto necessita e passá-lo futuramente para a classe CalcularImposto somente executar um método em comum com todos os impostos.


