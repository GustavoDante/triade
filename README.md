# Tríade

Uma loja virtual de roupas, sapatos e acessórios.

## Descrição

Esse projeto utiliza da versão **8.x do Laravel** e no website principal com componentes baseados no framework de CSS **Bootstrap 5**.

## Iniciando no projeto

### Dependências

Segue abaixo as dependências para poder rodar o projeto:

* Composer stable
* PHP >= 8.1.x
* MySQL ou PostgreSQL

### Executando o projeto

* Primeiro defina o arquivo de configuração `.env` baseado no `.env.example` com as configurações do banco de dados
* Instalação das dependências do composer
* Depois rode o projeto com o artisan

Instalar as dependências:

```bash
composer install
```

Depois:

```bash
php artisan migrate --seed
```

depois rode o comando do artisan:

```bash
php artisan serve
```

Abra [http://localhost:8000](http://localhost:8000) no seu browser para ver o projeto.

## Ajuda

Caso ocorra algum problema, verificar as versões das dependências ou entre em contato comigo.
