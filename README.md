<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Contact Management - Laravel 12

Uma aplicação web moderna para gerenciamento de contatos, desenvolvida em Laravel 12.

## Funcionalidades

- **Listagem de contatos:** Página pública com paginação.
- **Adicionar contato:** Formulário protegido por autenticação.
- **Detalhes do contato:** Página dedicada mostrando todos os campos, com botões de editar e deletar.
- **Editar contato:** Formulário protegido por autenticação.
- **Excluir contato:** Soft delete (remoção lógica) usando recursos nativos do Laravel.

## Regras de Negócio
- **Contato:** ID, Nome (mín. 6 caracteres), Contato (9 dígitos, único), Email (válido e único).
- **Validação:** Nome, contato e email validados no backend.
- **Unicidade:** Contato e email não podem se repetir.
- **Soft Delete:** Contatos excluídos não aparecem na listagem, mas permanecem no banco.

## Autenticação
- Listagem de contatos é pública.
- Adição, edição e exclusão exigem login.
- Usuário padrão criado pelo seeder:
  - **Email:** admin@example.com
  - **Senha:** password123

## Instalação e Uso

1. Instale as dependências:
   ```bash
   composer install
   ```
2. Configure o arquivo `.env` (já incluso no ambiente).
3. Rode as migrations e seeders:
   ```bash
   php artisan migrate:fresh --seed
   ```
4. Inicie o servidor:
   ```bash
   php artisan serve
   ```
5. Acesse em [http://127.0.0.1:8000/contacts](http://127.0.0.1:8000/contacts)

## Testes
- Para rodar os testes (se implementados):
  ```bash
  php artisan test
  ```

## Tecnologias
- Laravel 12
- PHP 8.1+
- Bootstrap 5 (CDN)

## Observações
- Não remova ou altere os arquivos `.env` e `.htaccess`.
- O layout é responsivo e moderno.
- O banco já vem populado com 20 contatos de exemplo.

---
Desenvolvido para fins de avaliação técnica.
