# Padrão de Projeto Flywight

Este trabalho trata-se de uma aplicação básica do padrão de projeto flyweight.

# Considerações Iniciais

Geralmente utilizado para resolver o problema de alto consumo de memória numa aplicação. O Flyweight é um padrão estrutural de projeto que tem a intenção de usar o compartilhamento para suportar eficientemente grandes quantidades de objetos de forma granular.

    - É um padrão de otimização

    - Visa economizar memória devido ao grande número de objetos na aplicação.

    - Resolve o problema de desempenho dividindo o estado de um objeto em “extrínseco” e “intrínseco”.

        Estado intrínseco é aquele que geralmente não muda ou muda muito pouco.

        Estado extrínseco é aquele que pode ser movido para fora do objeto por mudar frequentemente


    - Só deve ser usado se sua aplicação estiver com problema de alto consumo de memória RAM.

#Aplicabilidade

Aplique o padrão Flyweight quando  todas as condições  a seguir forem verdadeiras:

A aplicação utiliza uma grande quantidade de objetos

Os custos de armazenamento são altos por causa da grande quantidade de objetos

A maioria dos estados de objetos podem se tornar extrínsecos

Muitos objetos podem ser substituídos por poucos objetos compartilhados.

A aplicação não depende da identidade dos objetos

![diagrama de classes](https://github.com/JucieLima/flyweight_pattern/blob/main/images/diagrama.jpg)

## License
[MIT](https://choosealicense.com/licenses/mit/)
