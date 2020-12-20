<?php

use Illuminate\Support\Facades\Route;
use App\Http\livewire\StartComponent;
use App\Http\livewire\HomeComponent;
use App\Http\livewire\ShopComponent;
use App\Http\livewire\CartComponent;
use App\Http\livewire\CheckoutComponent;
use App\Http\livewire\User\UserDashboardComponent;
use App\Http\livewire\Admin\Admin\AdminDashboardComponent;



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


//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
 //   return view('dashboard');
//})->name('dashboard');

Route::get('/', StartComponent::class);
Route::get('/main', HomeComponent::class);
Route::get('/shop', ShopComponent::class);
Route::get('/cart', CartComponent::class);
Route::get('/checkout', CheckoutComponent::class);
Route::get('/product/{slug}' , DetailComponent::class)->name('product.details');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});
