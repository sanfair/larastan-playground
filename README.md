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

## Notes
Repository should be reasonable clean, but here list of important files and changes:

* [Invitation.php](src%2Fapp%2FModels%2FInvitation.php)
  * Model that contain reference to User model using `uuid`.
* [User.php](src%2Fapp%2FModels%2FUser.php) 
  * Use trait `\Illuminate\Database\Eloquent\Concerns\HasUuids`
* [Main.php](src%2Fapp%2FHttp%2FControllers%2FMain.php)
  * Main controller
* [2014_10_12_000000_create_users_table.php](src%2Fdatabase%2Fmigrations%2F2014_10_12_000000_create_users_table.php)
  * Users migration with uuid field as primary key
* [2023_06_06_091354_create_invitations_table.php](src%2Fdatabase%2Fmigrations%2F2023_06_06_091354_create_invitations_table.php)
  * Invitations migration with user reference 
* [phpstan.neon](src%2Fphpstan.neon)
  * phpstan config


## Results

### Controller
![Controller.png](images%2FController.png)
### IDE
![IDE.png](images%2FIDE.png)
### PHPStan
![PHPStan.png](images%2FPHPStan.png)