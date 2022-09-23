<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VietnamController;
use App\Http\Controllers\NhatbanController;
use App\Http\Controllers\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController; 
use App\Http\Controllers\ListingController; 
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

Auth::routes(['verify' => true]);

Route::get('admin/login', function(){
    return view('admin.login');
});
Route::post('admin/login', [AdminController::class, 'loginPost'])->name('admin.loginPost');
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware(['admin'])->group(function (){
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/static', [AdminController::class, 'static'])->name('admin.static');
    Route::get('admin/listing/{model}', [ListingController::class, 'index'])->name('listing.index');
});





Route::middleware(['auth'])->group(function (){
    Route::get('/actionvn', [VietnamController::class, 'action'])->name('actionvn');
    Route::get('/actionjp', [NhatbanController::class, 'action'])->name('actionjp');
    Route::get('/choosenVN', [VietnamController::class, 'choosen'])->name('choosenVN');
    Route::resource('vietnam', VietnamController::class);
    Route::get('aodai', [VietnamController::class,'aodai'])->name('aodai');
    Route::get('ngayle', [VietnamController::class,'ngayle'])->name('ngayle');
    Route::get('tongiao', [VietnamController::class,'tongiao'])->name('tongiao');
    Route::resource('nhatban', NhatbanController::class);
    Route::resource('blog', BlogController::class);
    Route::get('/profile',[HomeController::class,'profile']);
    Route::post('/profile', [HomeController::class,'upload']);
    Route::get('/63', function() {
        return view('vietnam.hanoi');
    })->name('63');
    Route::get('/about', function() {
        return view('about');
    })->name('about');
});

Route::get('/home', function() {
    return view('home');
})->name('home');



require __DIR__.'/auth.php';

