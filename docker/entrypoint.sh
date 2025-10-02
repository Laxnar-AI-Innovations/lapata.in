#!/usr/bin/env bash
set -euo pipefail

# Render provides PORT; default to 8080 locally
PORT="${PORT:-8080}"

# Switch Apache to listen on $PORT
if grep -q "Listen 80" /etc/apache2/ports.conf; then
  sed -ri "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
fi
if grep -q "<VirtualHost \*:80>" /etc/apache2/sites-available/000-default.conf; then
  sed -ri "s/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/" /etc/apache2/sites-available/000-default.conf
fi

exec apache2-foreground



