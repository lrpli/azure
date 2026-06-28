#!/bin/sh
set -e

# 从环境变量生成 ThinkPHP 格式的 .env 文件
if [ ! -f /var/www/html/.env ]; then
    cat > /var/www/html/.env << EOF
APP_DEBUG = ${APP_DEBUG:-false}

[APP]
DEFAULT_TIMEZONE = Asia/Shanghai
APP_NAME = ${APP_NAME:-AzPanel}

[DATABASE]
TYPE = mysql
HOSTNAME = ${DB_HOSTNAME:-db}
DATABASE = ${DB_DATABASE:-azpanel}
USERNAME = ${DB_USERNAME:-azpanel}
PASSWORD = ${DB_PASSWORD:-azpanel123}
HOSTPORT = ${DB_PORT:-3306}
CHARSET = utf8mb4
DEBUG = false

[THEME]
CARD_WIDTH = 10
CARD_RIGHT_OFFSET = 1

[LANG]
default_lang = zh-cn
EOF
    chown www-data:www-data /var/www/html/.env
    echo "Generated .env file"
fi

# 确保权限正确
chown -R www-data:www-data /var/www/html/runtime /var/www/html/storage 2>/dev/null || true
chmod -R 777 /var/www/html/runtime /var/www/html/storage 2>/dev/null || true

exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
