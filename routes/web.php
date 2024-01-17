<?php

use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\deviceController;
use App\Http\Controllers\Admin\infoController;
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Device;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('public.index');
});

Route::get('/dashboard', function () {
    $userCount = User::count();
    $categoryCount = Category::count();
    $deviceCount = Device::count();
    return view('dashboard',compact(['userCount','categoryCount','deviceCount']));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('admin/user', userController::class)->except('show');
    Route::resource('admin/category', categoryController::class)->except('show');
    Route::resource('admin/device', deviceController::class)->except('show');
    Route::resource('admin/info', infoController::class)->only(['index','edit','update']);




    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile', [ProfileController::class, 'updateImage'])->name('profile.updateImage');

});

require __DIR__.'/auth.php';
