<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VietnamController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

Route::get('/action', [VietnamController::class, 'action'])->name('action');


Route::middleware(['auth'])->group(function (){
    Route::resource('vietnam', VietnamController::class);
});




Route::get('/home', function() {
    return view('home');
});




Route::resource('vietnam', VietnamController::class)->middleware(['auth']);
Route::resource('blog', BlogController::class);

require __DIR__.'/auth.php';

