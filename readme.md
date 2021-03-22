# Bonfanti 4x4

Tema desenvolvido em WordPress para o site da Bonfanti 4x4.

## Stack

- CMS: [Wordpress](https://wordpress.com/)
- Virtualização: [Docker](https://docker.com/)
- Preprocessador CSS: [Sass](https://sass-lang.com/)
- Automação: [Gulp](https://gulpjs.com/)
- Teste de navegador: [Browsersync](https://www.browsersync.io/)

## Instalação

Necessário [Docker](https://docker.com/), [NodeJS](https://nodejs.org/), [GulpJS](https://gulpjs.com/) e [Yarn](https://yarnpkg.com/) para instalar as dependências e rodar o projeto.

```sh
# baixar imagens e inicializar containers
$ cd bonfanti4x4
$ docker-compose up -d

# instalar dependências
$ yarn
```

## Editando os arquivos

Os arquivos do tema estão na pasta `wp-content/themes/simple`. Edite somente os arquivos **PHP**.

Os arquivos **SCSS** e **JS**, além das **imagens**, estão dentro da pasta `src`. Os arquivos `img`, `css` e `js` da pasta do tema serão substituídios ao gerar o build.

```sh
# inicializar servidor de desenvolvimento
$ yarn dev
```

## Gerando build

```sh
# gerar o build de produção
$ yarn build
```
