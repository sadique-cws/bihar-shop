<?php

use App\Livewire\Admin\Page\CallingCategory;
use App\Livewire\Admin\Page\CallingProduct;
use App\Livewire\Admin\Page\Dashboard;
use App\Livewire\Admin\Page\InsertCategory;
use App\Livewire\Admin\Page\InsertProduct;
use App\Livewire\Page\Cart;
use App\Livewire\Page\Checkout;
use Illuminate\Support\Facades\Route;
use App\Livewire\Page\Home;
use App\Livewire\Page\ViewProduct;

Route::get("/", Home::class)->name('homepage');
Route::get("/cart", Cart::class)->name('home.cart');
Route::get("/checkout", Checkout::class)->name('home.checkout');


Route::prefix('admin')->group(function(){
    Route::get('/', Dashboard::class)->name('admin.dashboard');
    Route::prefix('product')->group(function(){
        Route::get('/',CallingProduct::class)->name('admin.product.index');
        Route::get('/create', InsertProduct::class)->name('admin.product.create');
    });
    Route::prefix('category')->group(function(){
        Route::get('/', CallingCategory::class)->name('admin.category.index');
        Route::get('/create', InsertCategory::class)->name('admin.category.create');
    });
});

Route::get("/fliter/{category_slug}/{slug}", ViewProduct::class)->name('view.product');