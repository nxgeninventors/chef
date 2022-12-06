

```bash
php artisan make:model -mrc UserRole # it will create migration, resource controller & factory file
php artisan make:model -mf UserRole # it will create migration & factory file

php artisan make:migration add_user_role_id_to_users_table --table=users

php artisan make:model -mf Country
php artisan make:model -mf ProjectCategory
php artisan make:model -mf ProjectStatus
php artisan make:model -mf Client
php artisan make:model -mf Project
php artisan make:model -mf ProjectManager
php artisan make:model -mf ProjectMember
php artisan make:model -mf Income
php artisan make:model -mf ExpenseStatus
php artisan make:model -mf Expense



php artisan migrate:rollback
php artisan migrate
```


```
php artisan tinker

use App\Models\Client;
use App\Models\User;

# Update factory files inside `database/factories`

$clients = Client::factory()->count(100)->create();
$users = User::factory()->count(100)->create();
```