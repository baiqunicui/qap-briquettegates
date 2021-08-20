<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactFormListController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductListController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StyleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Auth\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',             App\Http\Livewire\Home\FeIndex::class)->name('home');
Route::get('/about',        App\Http\Livewire\About\FeIndex::class)->name('about.index');
Route::get('/products',     App\Http\Livewire\Product\FeIndex::class)->name('products.index');
Route::get('/products/{item:slug}',   App\Http\Livewire\ProductList\FeIndex::class)->name('products.show');
Route::get('/contact',      App\Http\Livewire\Contact\FeIndex::class)->name('contact.index');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Style
    Route::post('styles/media', [StyleController::class, 'storeMedia'])->name('styles.storeMedia');
    Route::resource('styles', StyleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Home
    Route::post('homes/media', [HomeController::class, 'storeMedia'])->name('homes.storeMedia');
    Route::resource('homes', HomeController::class, ['except' => ['store', 'update', 'destroy']]);

    // About
    Route::post('abouts/media', [AboutController::class, 'storeMedia'])->name('abouts.storeMedia');
    Route::resource('abouts', AboutController::class, ['except' => ['store', 'update', 'destroy']]);

    // Product
    Route::post('products/media', [ProductController::class, 'storeMedia'])->name('products.storeMedia');
    Route::resource('products', ProductController::class, ['except' => ['store', 'update', 'destroy']]);

    // Product List
    Route::post('product-lists/media', [ProductListController::class, 'storeMedia'])->name('product-lists.storeMedia');
    Route::resource('product-lists', ProductListController::class, ['except' => ['store', 'update', 'destroy']]);

    // Contact
    Route::post('contacts/media', [ContactController::class, 'storeMedia'])->name('contacts.storeMedia');
    Route::resource('contacts', ContactController::class, ['except' => ['store', 'update', 'destroy']]);

    // Header
    Route::post('headers/media', [HeaderController::class, 'storeMedia'])->name('headers.storeMedia');
    Route::resource('headers', HeaderController::class, ['except' => ['store', 'update', 'destroy']]);

    // Footer
    Route::post('footers/media', [FooterController::class, 'storeMedia'])->name('footers.storeMedia');
    Route::resource('footers', FooterController::class, ['except' => ['store', 'update', 'destroy']]);

    // Contact Form List
    Route::resource('contact-form-lists', ContactFormListController::class, ['except' => ['store', 'update', 'destroy']]);

    // Upload
    Route::post('uploads/media', [UploadController::class, 'storeMedia'])->name('uploads.storeMedia');
    Route::resource('uploads', UploadController::class, ['except' => ['store', 'update', 'destroy']]);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});
