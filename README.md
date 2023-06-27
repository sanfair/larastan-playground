## Docker

1. Open docker directory in console
2. Copy `.env.example` to `.env` and make necessary changes.
3. Run `make` command
4. Run `make shell php` to enter in php container

## Install

1. Run `composer install`
2. Run `php artisan migrate`
3. Run `php artisan ide-helper:generate`, `php artisan ide-helper:models -M` to generate files for ide.
4. Run `vendor/bin/phpstan`
