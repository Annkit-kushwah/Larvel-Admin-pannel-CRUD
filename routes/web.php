<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Logincontroller;
use App\Http\Controllers\Auth\Registercontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Dashboardcontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('login');
// })->name('login');

// Route::get('register', function () {
//     return view('register');
// })->name('register');


// Route::get('dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('user/create', function () {
//     return view('create');
// })->name('user.create');

// Route::get('user/list', function () {
//     return view('list');
// })->name('user.list');


Route::get('/', function () {
    return view('login');
})->name('login');



route::post('login',[Logincontroller::class, 'login'])->name('user.login');
route::get('logout',[Logincontroller::class, 'logout'])->name('logout');
route::get('register',[Registercontroller::class, 'register'])->name('register');
route::post('register',[Registercontroller::class, 'store'])->name('user.register');

route::get('dashboard',[Dashboardcontroller::class, 'dashboard'])->name('dashboard');

Route::prefix('user/')->group(function () {
    route::get('list',[Usercontroller::class, 'index'])->name('user.list');
    route::get('create',[Usercontroller::class, 'create'])->name('user.create');
    route::post('store',[Usercontroller::class, 'store'])->name('user.store');
    route::get('delete{id}',[Usercontroller::class, 'delete'])->name('user.delete');


});
