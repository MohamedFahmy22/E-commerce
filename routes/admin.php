<?php

use App\Http\Controllers\Admin\Admin_Panel_SettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'middleware'=>'auth:admin'],function (){
    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('logout',[LoginController::class,'logout'])->name('admin.logout');
    Route::get('/adminPanelSetting/index',[Admin_Panel_SettingsController::class,'index'])->name('admin.adminPanelSetting.index');
    Route::get('/adminPanelSetting/edit',[Admin_Panel_SettingsController::class,'edit'])->name('admin.adminPanelSetting.edit');
    Route::post('/adminPanelSetting/update',[Admin_Panel_SettingsController::class,'update'])->name('admin.adminPanelSetting.update');

});


Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'middleware'=>'guest:admin'],function (){
    // guest -> لم يتم تسجيل دخوله الي لوحه التحكم
    Route::get('login',[LoginController::class,'show_login_form'])->name('admin.showLogin');
    Route::post('auth',[LoginController::class,'login'])->name('admin.auth');


});
