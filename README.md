# mysymfony
The repo for mysymfony.

# Requirements

Check with `symfony check:requirements`

# Deployment

- on the target webserver checkout the production branch and edit .env
- run `composer install --no-dev --optimize-autoloader`
- point the webserver's webroot to ./public
