<?php

use App\Http\Controllers\Admin\Admin_Panel_SettingsController;
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

Route::get('/' ,function()
{
    return redirect()->route('admin.showlogin');
});

Route::get('index',[Admin_Panel_SettingsController::class,'index']);
