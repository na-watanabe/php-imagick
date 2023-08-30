FROM php:8.2-cli
#COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY ./php.ini /usr/local/etc/php/
RUN apt-get update && apt-get install -y imagemagick libmagickwand-dev && \
    mkdir -p /usr/src/php/ext/imagick && \
    curl -fsSL https://github.com/Imagick/imagick/archive/refs/tags/3.7.0.tar.gz | tar xvz -C "/usr/src/php/ext/imagick" --strip 1 && \
    docker-php-ext-install imagick
RUN groupadd -f -g 1000 user && useradd -m -s /bin/bash -u 1000 -g 1000 user
USER user
WORKDIR /home/user/works

