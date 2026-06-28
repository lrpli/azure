FROM php:8.2-fpm

# 安装系统依赖（Debian 有预编译包，比 Alpine 快很多）
RUN apt-get update && apt-get install -y --no-install-recommends \
        nginx \
        supervisor \
        curl \
        unzip \
        libpng-dev \
        libzip-dev \
        libicu-dev \
        libonig-dev \
    && docker-php-ext-install -j$(nproc) \
        pdo_mysql \
        mbstring \
        gd \
        zip \
        intl \
        opcache \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# 安装 Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# 先复制 composer 文件，利用 Docker 层缓存
COPY composer.json ./
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

# 复制其余项目文件
COPY . .

# 运行 composer scripts（service:discover 等）
RUN composer run-script post-autoload-dump || true

# 设置目录权限
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html/runtime

# 配置文件
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/default.conf /etc/nginx/sites-enabled/default
COPY docker/php.ini /usr/local/etc/php/conf.d/app.ini
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh && rm -f /etc/nginx/sites-enabled/000-default* /etc/nginx/conf.d/default.conf 2>/dev/null || true

EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]
