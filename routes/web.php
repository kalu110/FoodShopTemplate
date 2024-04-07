<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


 Route::get('/', [ProductController::class, 'indexFront']);

 Route::get('/shop', [ProductController::class, 'shopIndex']);
Route::get('/login', function () {
    return view('auth.login');
});






   

Route::middleware('auth')->group(function () {
     Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/categoryAdd', [ProductController::class, 'categoryAdd']);
    Route::get('/category', [ProductController::class, 'categoryIndex']);
    Route::get('/product', [ProductController::class, 'productIndex']);
    Route::post('/productAdd', [ProductController::class, 'productAdd']);
    Route::get('/deleteCategory/{id}', [ProductController::class, 'deleteCategory']);
    Route::post('/editCategory/{id}', [ProductController::class, 'editCategory']);
    Route::get('/deleteProduct/{id}', [ProductController::class, 'deleteProduct']);
    Route::post('/editProduct/{id}', [ProductController::class, 'editProduct']);
     Route::get('/tables', [ProductController::class, 'tablesIndex']);
    

    Route::get('/logout', function (){
         Auth::logout();
  return redirect('/login');
    });
     Route::get('/profileAdmin', function (){
  return view('admin.profile');
    });

      Route::get('/icons', function (){
  return view('admin.icons');
    });
   
});

require __DIR__.'/auth.php';



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
