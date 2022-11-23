<?php

use App\Models\Severity;
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

Route::get('/', function () {
    return view('adminlte');
});

Route::get("/severities", function(){
    return view('severities', [
        'severities' => Severity::all()
    ]);
});

Route::post('/darkmode/toggle', [DarkModeController::class, 'toggle'])
    ->name('darkmode.toggle');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
