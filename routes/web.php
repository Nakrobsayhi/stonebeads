<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\EmployeeController;
use App\Http\Controllers\admin\CategoryController;

use App\Http\Controllers\FrontendController;
use App\Https\Controller\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\isAdmin;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
get = form post = hide info
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|  auth.login
*/

// Frontend
// Route::get('/', function () {
//     return view('frontend.index');
// })->name('main');

Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');

Route::get('/news', [FrontendController::class, 'news'])->name('news');

Route::get('shop', [FrontendController::class, 'shop'])->name('shop');

Route::get('contact', function () {
    return view('frontend.contact');
})->name('contact');

// Backend
Route::get('/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/dashboard', function () {
    $employee = User::all();
    $Category = Category::all();
    $news = Product::all();
    return view('/dashboard', compact('employee', 'Category', 'news'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::prefix('admin')->name('admin.')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::prefix('employee')->name('employee.')->group(function () {
        Route::get('index', [EmployeeController::class, 'index'])->name('index'); // Display list of Users
        Route::get('add', [EmployeeController::class, 'add'])->name('add'); // Form to create a new User
        Route::get('edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
        Route::post('insert', [EmployeeController::class, 'insert'])->name('insert'); // Handle new User creation
        Route::post('update/{id}', [EmployeeController::class, 'update'])->name('update');
        Route::get('delete/{id}', [EmployeeController::class, 'delete'])->name('delete');
    });

    Route::prefix('product')->name('product.')->group(function () {
        Route::get('index', [ProductController::class, 'index'])->name('index');
        Route::get('add', [ProductController::class, 'add'])->name('add');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::post('insert', [ProductController::class, 'insert'])->name('insert');
        Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
        Route::get('delete/{id}', [ProductController::class, 'delete'])->name('delete');
    });

    Route::prefix('category')->name('category.')->group(function () {
        Route::get('index', [CategoryController::class, 'index'])->name('index');
        Route::get('add', [CategoryController::class, 'add'])->name('add');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('insert', [CategoryController::class, 'insert'])->name('insert');
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('delete');
    });
});
