# Padrão de Projeto Flywight

Este trabalho trata-se de uma aplicação básica do padrão de projeto flyweight.

##__ Considerações Iniciais

Geralmente utilizado para resolver o problema de alto consumo de memória numa aplicação. O Flyweight é um padrão estrutural de projeto que tem a intenção de usar o compartilhamento para suportar eficientemente grandes quantidades de objetos de forma granular.

    - É um padrão de otimização

    - Visa economizar memória devido ao grande número de objetos na aplicação.

    - Resolve o problema de desempenho dividindo o estado de um objeto em “extrínseco” e “intrínseco”.

        Estado intrínseco é aquele que geralmente não muda ou muda muito pouco.

        Estado extrínseco é aquele que pode ser movido para fora do objeto por mudar frequentemente


    - Só deve ser usado se sua aplicação estiver com problema de alto consumo de memória RAM.

# Aplicabilidade

_Aplique o padrão Flyweight quando  todas as condições  a seguir forem verdadeiras:_

A aplicação utiliza uma grande quantidade de objetos

Os custos de armazenamento são altos por causa da grande quantidade de objetos

A maioria dos estados de objetos podem se tornar extrínsecos

Muitos objetos podem ser substituídos por poucos objetos compartilhados.

A aplicação não depende da identidade dos objetos

## Diagrama de classes

![diagrama de classes](https://github.com/JucieLima/flyweight_pattern/blob/main/images/diagrama.jpg)


## Prós
Você pode economizar muita RAM, desde que seu programa tenha muitos objetos similares.

## Contras

Você pode estar trocando RAM por ciclos de CPU quando parte dos dados de contexto precisa ser recalculado cada vez que alguém chama um método flyweight.

O código fica muito mais complicado. Novos membros de equipe sempre se perguntarão por que o estado de uma entidade foi separado de tal forma.

## License
[MIT](https://choosealicense.com/licenses/mit/)
