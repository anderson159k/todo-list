# Documentação da Lista de Tarefas

## Visão Geral do Projeto

![Screenshot_2](https://github.com/anderson159k/todo-list/assets/71734533/9948421d-1797-4e0b-8f42-34e658abd0a6)

Este é o projeto de uma Lista de Tarefas implementado utilizando PHP e o framework Laravel. O objetivo do projeto é permitir que os usuários possam gerenciar suas tarefas diárias, incluindo a criação, leitura, atualização e exclusão de tarefas.

## Configuração do Ambiente

Antes de começar, certifique-se de ter o ambiente de desenvolvimento configurado corretamente. Siga os passos abaixo:

1. Instale o PHP (versão 7.4 ou superior)
2. Instale o Composer (gerenciador de dependências do PHP)
3. Instale o Laravel (versão 8.x ou superior)
4. Configure um servidor web local (por exemplo, Apache) e configure o DocumentRoot para a pasta do projeto

## Estrutura do Projeto

O projeto segue a estrutura básica do Laravel, com o padrão MVC (Model-View-Controller). A estrutura de pastas é a seguinte:

- `app/`: Contém os arquivos relacionados aos modelos e controladores da aplicação
- `resources/`: Contém os arquivos relacionados às visualizações (views) da aplicação
- `routes/`: Contém os arquivos de definição das rotas da aplicação

## Configuração do Banco de Dados

O projeto utiliza um banco de dados MySQL para armazenar as tarefas. Siga os passos abaixo para configurar o banco de dados:

1. Crie um novo banco de dados no MySQL
2. Abra o arquivo `.env` na raiz do projeto e configure as informações do banco de dados:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario_do_banco
DB_PASSWORD=senha_do_banco

## Executando as Migrações

O Laravel utiliza migrações para criar as tabelas do banco de dados. Para executar as migrações, siga os passos abaixo:

1. Abra o terminal na raiz do projeto
2. Execute o comando `php artisan migrate` para criar as tabelas do banco de dados

## Executando o Projeto

Após configurar o ambiente e o banco de dados, siga os passos abaixo para executar o projeto:

1. Abra o terminal na raiz do projeto
2. Execute o comando `php artisan serve` para iniciar o servidor web
3. Acesse o projeto no seu navegador usando o endereço `http://localhost:8000`

## Funcionalidades

O projeto possui as seguintes funcionalidades:

- **Listar tarefas**: Exibe a lista de todas as tarefas cadastradas
- **Criar tarefa**: Permite adicionar uma nova tarefa
- **Editar tarefa**: Permite editar uma tarefa existente
- **Excluir tarefa**: Permite excluir uma tarefa
