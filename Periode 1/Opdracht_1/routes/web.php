
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderrowController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


/*
|--------------------------------------------------------------------------
| Authenticatie
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'show'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


/*
|--------------------------------------------------------------------------
| Beschermde routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Categories
    |--------------------------------------------------------------------------
    */

    Route::get('/categories', [CategoryController::class, 'index'])
        ->name('categories.index');

    Route::post('/categories/create', [CategoryController::class, 'create'])
        ->name('categories.create');

    Route::get('/categories/{id}', [CategoryController::class, 'get'])
        ->name('categories.get');

    Route::put('/categories/{id}', [CategoryController::class, 'update'])
        ->name('categories.update');

    Route::delete('/categories/{id}', [CategoryController::class, 'delete'])
        ->name('categories.delete');


    /*
    |--------------------------------------------------------------------------
    | Orders
    |--------------------------------------------------------------------------
    */

    Route::get('/orders', [OrderController::class, 'index'])
        ->name('orders.index');

    Route::post('/orders/create', [OrderController::class, 'create'])
        ->name('orders.create');

    Route::get('/orders/{id}', [OrderController::class, 'get'])
        ->name('orders.get');

    Route::put('/orders/{id}', [OrderController::class, 'update'])
        ->name('orders.update');

    Route::delete('/orders/{id}', [OrderController::class, 'delete'])
        ->name('orders.delete');


    /*
    |--------------------------------------------------------------------------
    | Orderrows
    |--------------------------------------------------------------------------
    */

    Route::get('/orderrows', [Orderrowcontroller::class, 'index'])
        ->name('orderrows.index');

    Route::post('/orderrows/create', [OrderrowController::class, 'create'])
        ->name('orderrows.create');

    Route::get('/orderrows/{id}', [OrderrowController::class, 'get'])
        ->name('orderrows.get');

    Route::put('/orderrows/{id}', [OrderrowController::class, 'update'])
        ->name('orderrows.update');

    Route::delete('/orderrows/{id}', [OrderrowController::class, 'delete'])
        ->name('orderrows.delete');


    /*
    |--------------------------------------------------------------------------
    | Prices
    |--------------------------------------------------------------------------
    */

    Route::get('/prices', [PriceController::class, 'index'])
        ->name('prices.index');

    Route::post('/prices/create', [PriceController::class, 'create'])
        ->name('prices.create');

    Route::get('/prices/{id}', [PriceController::class, 'get'])
        ->name('prices.get');

    Route::put('/prices/{id}', [PriceController::class, 'update'])
        ->name('prices.update');

    Route::delete('/prices/{id}', [PriceController::class, 'delete'])
        ->name('prices.delete');


    /*
    |--------------------------------------------------------------------------
    | Products
    |--------------------------------------------------------------------------
    */

    Route::get('/products', [ProductController::class, 'index'])
        ->name('products.index');

    Route::post('/products/create', [ProductController::class, 'create'])
        ->name('products.create');

    Route::get('/products/{id}', [ProductController::class, 'get'])
        ->name('products.get');

    Route::put('/products/{id}', [ProductController::class, 'update'])
        ->name('products.update');

    Route::delete('/products/{id}', [ProductController::class, 'delete'])
        ->name('products.delete');


    /*
    |--------------------------------------------------------------------------
    | Reviews
    |--------------------------------------------------------------------------
    */

    Route::get('/reviews', [ReviewController::class, 'index'])
        ->name('reviews.index');

    Route::post('/reviews/create', [ReviewController::class, 'create'])
        ->name('reviews.create');

    Route::get('/reviews/{id}', [ReviewController::class, 'get'])
        ->name('reviews.get');

    Route::put('/reviews/{id}', [ReviewController::class, 'update'])
        ->name('reviews.update');

    Route::delete('/reviews/{id}', [ReviewController::class, 'delete'])
        ->name('reviews.delete');


    /*
    |--------------------------------------------------------------------------
    | Roles
    |--------------------------------------------------------------------------
    */

    Route::get('/roles', [RoleController::class, 'index'])
        ->name('roles.index');

    Route::post('/roles/create', [RoleController::class, 'create'])
        ->name('roles.create');

    Route::get('/roles/{id}', [RoleController::class, 'get'])
        ->name('roles.get');

    Route::put('/roles/{id}', [RoleController::class, 'update'])
        ->name('roles.update');

    Route::delete('/roles/{id}', [RoleController::class, 'delete'])
        ->name('roles.delete');


    /*
    |--------------------------------------------------------------------------
    | Users
    |--------------------------------------------------------------------------
    */

    Route::get('/users', [UserController::class, 'index'])
        ->name('users.index');

    Route::post('/users/create', [UserController::class, 'create'])
        ->name('users.create');

    Route::get('/users/{id}', [UserController::class, 'get'])
        ->name('users.get');

    Route::put('/users/{id}', [UserController::class, 'update'])
        ->name('users.update');

    Route::delete('/users/{id}', [UserController::class, 'delete'])
        ->name('users.delete');

});
