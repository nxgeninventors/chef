<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\FormsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});


// Change Password Routes...
Route::get('change_password', [ChangePasswordController::class, 'showChangePasswordForm'])->name('auth.change_password');
Route::patch('change_password', [ChangePasswordController::class, 'changePassword'])->name('auth.change_password');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('permissions', PermissionsController::class);
    Route::delete('permissions_mass_destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.mass_destroy');
    Route::resource('roles', RolesController::class);
    Route::delete('roles_mass_destroy', [RolesController::class, 'massDestroy'])->name('roles.mass_destroy');
    Route::resource('users', UsersController::class);
    Route::delete('users_mass_destroy', [UsersController::class, 'massDestroy'])->name('users.mass_destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('clients', ClientsController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::get('/todos', [TodosController::class, 'index']);
Route::post('/todos', [TodosController::class,'store']);
Route::get('/todos/create', [TodosController::class, 'create']);
Route::get('/todos/{id}', [TodosController::class,'show']);
Route::get('/todos/{id}/edit', [TodosController::class, 'edit']);
Route::post('/todos/{id}', [TodosController::class, 'update']);
Route::get('/todos/{id}', [TodosController::class, 'destroy']);
    

Route::get('/forms', [FormsController::class, 'index']);
Route::get('/dash', [FormsController::class, 'dash']);


require __DIR__.'/auth.php';
