<?php

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

Route::get('/admin', function () {
    //echo(567894589);
    return view('layouts.admin');
})->name('admin');


Route::get('/admin/general', [App\Http\Controllers\GeneralController::class, 'index'])->name('admin.generals.index');
Route::get('/admin/general/edit', [App\Http\Controllers\GeneralController::class, 'edit'])->name('admin.generals.edit');
Route::patch('/admin/general/update', [App\Http\Controllers\GeneralController::class, 'update'])->name('admin.generals.update');


Route::get('/admin/sliders', [App\Http\Controllers\SliderController::class, 'index'])->name('admin.sliders.index');
Route::get('/admin/sliders/create', [App\Http\Controllers\SliderController::class, 'create'])->name('admin.sliders.create');
Route::post('/admin/sliders', [App\Http\Controllers\SliderController::class, 'store'])->name('admin.sliders.store');
Route::get('/admin/sliders/{slider}/edit', [App\Http\Controllers\SliderController::class, 'edit'])->name('admin.sliders.edit');
Route::patch('/admin/sliders/{slider}/update', [App\Http\Controllers\SliderController::class, 'update'])->name('admin.sliders.update');
Route::delete('/admin/sliders/{slider}/destroy', [App\Http\Controllers\SliderController::class, 'destroy'])->name('admin.sliders.destroy');


Route::get('/admin/users', [App\Http\Controllers\UserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users', [App\Http\Controllers\UserController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('admin.users.edit');
Route::patch('/admin/users/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('admin.users.update');
Route::delete('/admin/users/{user}/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('admin.users.destroy');



Route::get('/', function () {

    return view('index', ['sliders' => \App\Models\Slider::all(), 'general' => \App\Models\General::findOrFail(1)]);
})->name('index');


Route::get('/about', function () {
    return view('about', ['general' => \App\Models\General::findOrFail(1)]);
})->name('about');

Route::get('/services', function () {
    return view('services', ['general' => \App\Models\General::findOrFail(1)]);
})->name('services');

Route::get('/suppliers', function () {
    return view('suppliers', ['general' => \App\Models\General::findOrFail(1)]);
})->name('suppliers');

Route::get('/contact', function () {
    return view('contact', ['general' => \App\Models\General::findOrFail(1)]);
})->name('contact');
