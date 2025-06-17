Relatório de Análise Estática 

Complexidade Ciclomática Média: 2.4 

Cobertura de Código: 0% ❌ (nenhum teste automatizado identificado)

Duplicação de Código: 22%  (lógica repetida entre add.php e edit.php)

Dívida Técnica Estimada: 3h  (funções duplicadas, lógica misturada)

Más Práticas Detectadas:

Uso de SQL direto sem prepared statements ❌

Falta de sanitização e validação de entrada ❌

Lógica de negócio duplicada 

Estrutura procedural e acoplada 

INDEFINIÇÃO DE PROBLEMAS 

Segurança	SQL -> Injection por uso de queries diretas sem prepared statements.

Código duplicado	-> Lógica de cálculo de média e situação repetida em add.php e edit.php.

Más práticas -> Entrada de usuário não validada/sanitizada.

Arquitetura frágil	-> Código misturado (HTML + lógica).

Reutilização ausente ->	Falta de funções utilitárias reutilizáveis.

PLANO DE REFATORAÇÃO 

Segurança->	SQL Injection por uso de queries diretas sem prepared statements.

Código duplicado->	Lógica de cálculo de média e situação repetida em add.php e edit.php.

Más práticas->	Entrada de usuário não validada/sanitizada.

Arquitetura frágil-> Código misturado.

Reutilização ausente	-> Falta de funções utilitárias reutilizáveis.




