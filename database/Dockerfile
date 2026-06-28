FROM mysql:8.0

COPY azure.sql /docker-entrypoint-initdb.d/01_azure.sql
COPY config.sql /docker-entrypoint-initdb.d/02_config.sql
COPY seeds.sql /docker-entrypoint-initdb.d/03_seeds.sql
