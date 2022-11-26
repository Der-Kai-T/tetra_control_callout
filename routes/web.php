<?php

use App\Http\Controllers\SeverityController;
use App\Http\Controllers\OrgaGroup;
use App\Http\Controllers\OrgaGroupController;
use App\Http\Controllers\TMEController;
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
Route::get('/admin', function () {
    return view('adminlte');
});

Route::get('/home', function () {
    return view('adminlte');
});

//Severities
Route::get("/admin/severities", [SeverityController::class, 'index']);
Route::get("/admin/severity/new", [SeverityController::class, 'create']);
Route::post("/admin/severity/new", [SeverityController::class, 'store']);
Route::get("/admin/severity/{severity:id}/edit", [SeverityController::class, 'edit']);
Route::patch("/admin/severity/{severity:id}/edit", [SeverityController::class, 'update']);


//TMEs
Route::get("/admin/tmes", [TMEController::class, 'index']);
Route::get("/admin/tme/new", [TMEController::class, 'create']);
Route::post("/admin/tme/new", [TMEController::class, 'store']);
Route::get("/admin/tme/{tme:id}/edit", [TMEController::class, 'edit']);
Route::patch("/admin/tme/{tme:id}/edit", [TMEController::class, 'update']);

//OrgaGroups
Route::get("/admin/orgagroups", [OrgaGroupController::class, 'index']);
Route::get("/admin/orgagroup/new", [OrgaGroupController::class, 'create']);
Route::post("/admin/orgagroup/new", [OrgaGroupController::class, 'store']);
Route::get("/admin/orgagroup/{orgagroup:id}/edit", [OrgaGroupController::class, 'edit']);
Route::patch("/admin/orgagroup/{orgagroup:id}/edit", [OrgaGroupController::class, 'update']);

//<<=======================>>
Route::post('/darkmode/toggle', [DarkModeController::class, 'toggle'])
    ->name('darkmode.toggle');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>