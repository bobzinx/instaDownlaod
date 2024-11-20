## Instagram Video Downloader (Laravel)
Aqui está o README para o projeto que baixa vídeos do Instagram usando Laravel:
Instagram Video Downloader (Laravel)

Este é um projeto Laravel que permite baixar vídeos do Instagram usando URLs públicas de postagens. Ele oferece uma interface simples e intuitiva, utilizando Tailwind CSS para uma experiência de usuário moderna e responsiva.

## Recursos

Baixar vídeos do Instagram a partir de URLs públicas de postagens.
Interface web com Tailwind CSS para um design limpo e moderno.
Validação simples de URL para garantir que os links inseridos são válidos.

## Tecnologias Usadas

Laravel: Framework PHP para desenvolvimento web.
Tailwind CSS: Framework CSS para um design responsivo e estilizado.
Guzzle HTTP: Biblioteca PHP para enviar requisições HTTP e obter o conteúdo das páginas.

## Pré-requisitos

Antes de começar, você precisa ter as seguintes ferramentas instaladas no seu sistema:

    PHP 8.1 ou superior
    Composer: Gerenciador de dependências PHP
    Servidor web (como Apache ou Nginx)


## Instalação

### 1 Clonar o repositório

Clone o repositório para o seu ambiente local:

```
git clone https://github.com/seu-usuario/instagram-video-downloader.git
cd instagram-video-downloader
```
2. Instalar dependências

Instale as dependências do projeto usando o Composer:

```
composer install

```

3. Configurar o ambiente

```
cp .env.example .env

```

Gere a chave do aplicativo Laravel:

```
php artisan key:generate

```

4. Configurar banco de dados (opcional)

Se o projeto utilizar banco de dados para outras funcionalidades, configure as variáveis no arquivo .env com suas credenciais de banco de dados.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=instagram_downloader
DB_USERNAME=root
DB_PASSWORD=

```

## Como usar 

Inicie o servidor Laravel:

Se o seu servidor estiver configurado, inicie o servidor com o comando:

```
php artisan serve

```

Acesse a aplicação:

Abra seu navegador e vá para http://127.0.0.1:8000.

Baixar vídeos

    Cole a URL pública de uma postagem do Instagram na caixa de texto.
    Clique em "Baixar Vídeo" para iniciar o download do vídeo.

