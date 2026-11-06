#!/bin/sh
set -eu
cd "$(dirname "$0")/.."
# Managed cloud builds need the platform's CA bundle; ordinary Docker uses its system roots.
if [ -n "${CODEX_PROXY_CERT:-}" ]; then
    docker build --secret id=proxy_ca,src=/etc/ssl/certs/ca-certificates.crt -t testt-php83-dev .
else
    docker build -t testt-php83-dev .
fi
docker compose up -d --no-build --wait
# Import only into an empty development schema; preserve existing data on reruns.
initialized=$(docker compose exec -T db sh -c 'exec mariadb -uroot -p"$MARIADB_ROOT_PASSWORD" -Nse "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema=\"telephone\""')
if [ "$initialized" = 0 ]; then
    docker compose exec -T db sh -c 'exec mariadb -uroot -p"$MARIADB_ROOT_PASSWORD" telephone' < __DB2__.sql
fi
# Also supports existing development database volumes, without reimporting the dump.
docker compose exec -T db sh -c 'exec mariadb -uroot -p"$MARIADB_ROOT_PASSWORD" telephone' < migrations/001_support_tables.sql
