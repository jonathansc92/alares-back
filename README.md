# Teste

Este projeto é destinado a pôr em exercício aprendizados e conhecimento técnico simulando um cadastro de planos.

## Breifing
### Objetivo
O principal objetivo deste projeto é criar um API em Laravel, que possibilita.

- Cadastro de planos,
- Cadastro de pedidos.

# Padrões adotados
Para criação da API foi adotado alguns padrões e conceitos para melhor legibilidade e manutenção do projeto, como:
SOLID
Design Pattern (Requests, Resources, Services, Filters)

# Tecnologias
- API desenvolvida em Laravel
- Banco de Dados em MYSQL
- PHPUnit para testes

## Uso
Para rodar o projeto é necessário ter o **docker** configurador e um terminal **bash**. Após o clonar o repositório, deve ser acessada a pasta raiz do projeto e rodado o comando: `docker compose up -d` no terminal. Feito isso, só aguardar o projeto rodar e executar todos os scripts necessários. Caso desejar dados nas tabelas de banco de dados pode rodar o seeder com o comando `php artisan db:seed`. Para rodar os testes de integração, acessar o container e executar o comando `php artisan test`.

**PLANS:**

Lista de planos: **[GET]** `/api/plans`.

Mostrar uma plano: **[GET]** `/api/plans/1`.

Salvar uma plano: **[POST]** `/api/plans`, payload: `{"price": 79.90, "wifi": "sim", "games": "não", "movies": "sim", "speed": 100, "giga": "não", "best": "não"}`.

Alterar uma plano: **[PUT]** `/api/plans/1`, payload: `{"price": 79.90, "wifi": "sim", "games": "não", "movies": "sim", "speed": 100, "giga": "não", "best": "não"}`.

Excluir uma plano: **[DELETE]** `/api/plans/1`.

**ORDERS:**

Lista de pedidos: **[GET]** `/api/orders`.

Salvar um pedido: **[POST]** `/api/orders`, payload: `{"plan_id": 3, "name": "Jonathan Cruz", "email": "jonathan@alares.com", "phone": "51999999999"}`.

Alterar uma pedido: **[PUT]** `/api/orders/1`, , payload: `{"status": "done"}`.

Excluir uma pedido: **[DELETE]** `/api/orders/1`.

## Autor
- Autor - Jonathan Cruz
- [https://jonathansc92.github.io/jonathancruzdev/?language=ptBr](https://jonathansc92.github.io/jonathancruzdev/?language=ptBr)