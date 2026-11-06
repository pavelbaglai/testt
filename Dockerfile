# syntax=docker/dockerfile:1
FROM php:8.3-cli
RUN --mount=type=secret,id=proxy_ca \
    if [ -f /run/secrets/proxy_ca ]; then \
        export SSL_CERT_FILE=/run/secrets/proxy_ca; \
        printf 'Acquire::https::CaInfo "/run/secrets/proxy_ca";\n' > /etc/apt/apt.conf.d/99-build-ca; \
    fi; \
    apt-get update && apt-get install -y --no-install-recommends libpng-dev libjpeg62-turbo-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-jpeg --with-freetype \
    && docker-php-ext-install -j2 pdo_mysql calendar gd \
    && rm -rf /var/lib/apt/lists/* /etc/apt/apt.conf.d/99-build-ca
WORKDIR /app
COPY docker/php.ini /usr/local/etc/php/conf.d/app.ini
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/app"]
