#!/bin/sh
set -eu
cd "$(dirname "$0")/.."
docker compose exec -T web sh -c 'set -eu; for file in *.php* src/*.php tests/*.php config/*.php scripts/check-runtime.php; do php -l "$file" > /dev/null; done; echo "PHP syntax: PASS"'
docker compose exec -T web php tests/configuration.php
started=$(date -u +%Y-%m-%dT%H:%M:%SZ)
docker compose exec -T -e TESTT_TEST_DATABASE=1 web php tests/integration.php
logfile=$(mktemp)
trap 'rm -f "$logfile"' EXIT
docker compose logs --no-color --since "$started" web > "$logfile" 2>&1
if rg -q 'PHP (Warning|Deprecated|Fatal error|Parse error)|Uncaught |Database query failed' "$logfile"; then
    cat "$logfile"
    exit 1
fi
printf 'HTTP runtime diagnostics: PASS\n'
