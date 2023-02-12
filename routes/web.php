<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Http\Livewire\Site\Home::class)->name('home');


Route::middleware('guest')->group(function () {
    Route::get('/login', \App\Http\Livewire\Site\Auth\Login::class)->name('login');
});


Route::middleware('auth')->group(function () {

    Route::any('/logout', \App\Http\Livewire\Site\Auth\Login::class)->name('logout');

});


Route::prefix('admin')->group(function () {

    Route::get('/login', \App\Http\Livewire\Admin\Login::class)->name('admin.login');
    Route::any('/logout', \App\Http\Livewire\Admin\Login::class)->name('admin.logout');


    Route::middleware(['auth'])->group(function () {

        Route::get('/', \App\Http\Livewire\Admin\Home::class)->name('admin.home');
        Route::get('/settings', \App\Http\Livewire\Admin\Settings::class)->middleware('permission:settings show')->name('admin.settings');

        Route::prefix('users')->group(function () {
            Route::get('/', \App\Http\Livewire\Admin\Users\Users::class)->middleware('permission:users show')->name('admin.users');
            Route::get('/{id}', \App\Http\Livewire\Admin\Users\UsersShow::class)->middleware(['permission:users show'])->name('admin.users.show');
        });

        Route::prefix('roles')->group(function () {
            Route::get('/', \App\Http\Livewire\Admin\Roles\Roles::class)->middleware('permission:roles show')->name('admin.roles');
        });

        Route::prefix('service-categories')->group(function () {
            Route::get('/', \App\Http\Livewire\Admin\Services\ServicesCategories::class)->middleware('permission:services categories show')->name('admin.services-categories');
        });

        Route::prefix('services')->group(function () {
            Route::get('/', \App\Http\Livewire\Admin\Services\Services::class)->middleware('permission:services show')->name('admin.services');
        });

        Route::prefix('ads')->group(function () {
            Route::get('/', \App\Http\Livewire\Admin\Ads\Ads::class)->middleware('permission:ads show')->name('admin.ads');
        });

        Route::prefix('contacts')->group(function () {
            Route::get('/', \App\Http\Livewire\Admin\Contacts::class)->middleware('permission:contacts show')->name('admin.contacts');
        });

        Route::prefix('products')->group(function () {
            Route::get('/', \App\Http\Livewire\Admin\Products\Products::class)->middleware('permission:products show')->name('admin.products');
        });

        Route::prefix('countries-list')->group(function () {
            Route::get('/', \App\Http\Livewire\Admin\CountriesLists\CountriesLists::class)->middleware('permission:countries show')->name('admin.countries');
        });

        Route::prefix('cities-list')->group(function () {
            Route::get('/', \App\Http\Livewire\Admin\CitiesLists\CitiesLists::class)->middleware('permission:cities show')->name('admin.cities');
        });

        Route::prefix('reservations')->group(function () {
            Route::get('/', \App\Http\Livewire\Admin\Reservations\Reservations::class)->middleware('permission:reservations show')->name('admin.reservations');
        });


    });
});


