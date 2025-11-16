# Usa uma imagem base estável do PHP com FPM
FROM php:8.3-fpm-alpine

# Instala dependências e extensões PHP essenciais para o Laravel
RUN apk update && apk add \
    git \
    zip \
    unzip \
    # Instala extensões PHP comuns. 'pdo' é útil.
    && docker-php-ext-install pdo opcache \
    # Limpeza
    && rm -rf /var/cache/apk/*

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho
WORKDIR /var/www/html

# Cria um usuário 'www' para rodar o app de forma segura
RUN adduser -D -g 'www' www

# Define a porta do PHP-FPM
EXPOSE 9000

# Comando para iniciar o PHP-FPM
CMD ["php-fpm"]
