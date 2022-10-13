

```bash
php artisan make:model -mrc UserRole # it will create migration, resource controller & factory file
php artisan make:model -mf UserRole # it will create migration & factory file

php artisan make:migration add_user_role_id_to_users_table --table=users

php artisan make:model -mf Country



php artisan migrate:rollback
php artisan migrate
```