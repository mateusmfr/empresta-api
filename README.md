# API do processo seletivo da [Empresta](https://empresta.com.br)

<details>
<summary><strong>👨‍💻 O que foi desenvolvido</strong></summary><br />

Este projeto é uma API Laravel que simula operações com dados persistidos em arquivos JSON. Não há banco de dados envolvido.

O objetivo foi criar uma API RESTful funcional, utilizando uma estrutura organizada (Controller -> Service), garantindo organização e legibilidade, e que roda facilmente via Docker.

</details>

<details>
<summary><strong>🏗️ Estrutura do projeto</strong></summary><br />

O projeto segue uma estrutura de camadas, mesmo sem banco de dados, e está dividido da seguinte forma:

- **app/Http/Controllers**: Responsável por lidar com as requisições HTTP.
- **app/Services**: Contém a lógica de negócio.
- **app/Data**: Responsável por armazenar os arquivos JSON.
- **routes/api.php**: Define as rotas da API.

</details>

# Rodando o projeto

<details>
  <summary><strong>📦 Como inicializar sem o Docker</strong></summary><br />

Inicie o servidor de desenvolvimento:

```bash
php artisan serve
```

</details>

<details>
  <summary><strong>🐳 Como inicializar com Docker</strong></summary><br />

Suba o contêiner:

```bash
docker compose up
```

O Laravel já estará rodando no modo de desenvolvimento.

</details>

# Testando a API com Insomnia

<details>
  <summary><strong>🧪 Collection de Requisições</strong></summary><br />

Enviei por email o arquivo contendo a collection do [Insomnia](https://insomnia.rest/), com todas as requisições necessárias para testar a API.

Cada rota presente na API está representada na collection, e todas as funcionalidades possuem testes associados para garantir que estão retornando o comportamento esperado.

</details>

<details>
  <summary><strong>🚀 Testando em ambiente de deploy</strong></summary><br />

Para facilitar ainda mais os testes, disponibilizei uma versão do projeto rodando em um ambiente online.

Enviei por email também o arquivo contendo as requisições apontadas para o ambiente de deploy.

O deploy utiliza um sistema de sleep mode, então o primeiro request pode levar alguns segundos a mais para responder.

O projeto de produção usa exatamente o mesmo código enviado no repositório, sem nenhuma alteração, apenas para permitir o acesso remoto.

</details>

# Considerações Finais

<details>
  <summary><strong>📝 Observações</strong></summary><br />

- Nenhum banco de dados foi utilizado. As informações usadas vem dos arquivos `.json`.
- A estrutura do projeto permite fácil migração para um banco real, caso necessário no futuro.
- Utilizei uma imagem do [bitnami](https://hub.docker.com/r/bitnami/laravel), simplificando a configuração do ambiente.

</details>

<details>
  <summary><strong>🗣 Me dê um feedback!</strong></summary><br />

Se tiver sugestões, dúvidas ou quiser apenas trocar uma ideia, estou à disposição!

📬 Email: `mateus.mfr10@gmail.com`

</details>