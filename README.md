# Biblioteca Pessoal Back-End

## Descrição
Este é o back-end de uma aplicação de gerenciamento de livros, construído usando o framework Laravel. A API oferece funcionalidades para adicionar, visualizar, atualizar e excluir livros. Os dados dos livros são armazenados em um banco de dados SQL e incluem título, autor, classificação e resenha.

## Rotas da API
1. **Adicionar um novo livro**
   - **Endpoint:** `POST /livros`

2. **Recuperar lista de todos os livros**
   - **Endpoint:** `GET /livros`

3. **Recuperar detalhes de um livro específico**
   - **Endpoint:** `GET /livros/:id`

4. **Atualizar detalhes de um livro específico**
   - **Endpoint:** `PUT /livros/:id`

5. **Deletar um livro específico**
   - **Endpoint:** `DELETE /livros/:id`

## Banco de Dados
Os dados dos livros são armazenados em um banco de dados (SQL ou NoSQL) e cada entrada de livro contém os seguintes campos:
- `title` (string): Título do livro.
- `author` (string): Autor do livro.
- `rating` (numeric): Classificação do livro (de 1 a 5).
- `review` (string): Resenha do livro.
- `created_at` (timestamp): Data de adição do livro.

## Status do Projeto
Este projeto está **finalizado**.
