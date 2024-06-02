<?php

use App\Http\Controllers\Web\peternak\WebConfigLampController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

//Login biar kalau ketik /dashboard engga langsung ke login

// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/login',[AuthController::class, 'index'])->name('login');
Route::post('/auth/login',[AuthController::class, 'login']);
Route::post('/auth/logout',[AuthController::class, 'logout']);
Route::get('/register',[AuthController::class, 'register']);
Route::post('/auth/register',[AuthController::class, 'register_process']);

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('peternak.dashboard');
    });
});


// dashboard role peternak
// Route::get('/dashboard', function () {
//     return view('peternak.index');
// });

Route::get('/heater', function () {
    return view('peternak.heater');
});

//Web admin Lamp
Route::resource('/lamp', WebConfigLampController::class, ['parameters' => ['lamp' => 'configLamp']]);

//Admin
Route::get('/admin/user', function () {
    return view('admin.user');
});

Route::get('/admin/user/create', function () {
    return view('admin.FormUser');
});

Route::get('/admin/device', function () {
    return view('admin.device');
});

Route::get('/admin/device/create', function () {
    return view('admin.FormDevice');
});

Route::get('/admin/user/update', function () {
    return view('admin.FormUpdateUser');
});

Route::get('/admin/device/update', function () {
    return view('admin.FormUpdateDevice');
});

// Route::get('/lamp/create', function () {
//     return view('peternak.CreateLamp');
// });

// Route::get('/lamp/update', function () {
//     return view('peternak.UpdateLamp');
// });


