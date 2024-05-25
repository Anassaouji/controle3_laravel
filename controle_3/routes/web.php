<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\OneToOne\FormateurController;
use App\Http\Controllers\OneToOne\StagiaireController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TechnicienController;
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
    return view('welcome');
});
// hna fach ghadi ndir (confirm) ghadi 3awd itlab lia password
Route::get('/confirm', function () {
    return view('welcome');
})->middleware("password.confirm");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('books', BookController::class);
    // one to one
    Route::resource('formateurs', FormateurController::class);
    Route::resource('stagiaires', StagiaireController::class);
    // many to many
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
});

Route::resource('employe',EmployeController::class);

Route::fallback(function(){
    dd("votre chemin est incorrect !! 🛑" . Route::currentRouteName() . "n'exist pas");
});

Route::resource('tech',TechnicienController::class);

Route::get('sess',[SessionController::class,'create'])->name('sess.create');
Route::post('sess1',[SessionController::class,'stocke'])->name('sess.store');
Route::get('sess2',[SessionController::class,'recuperer']);
Route::delete('sess3',[SessionController::class,'suprimer']);

// middleware age:

Route::get('middle/{p}',function($p){
    return view('middlewar.index');
})->middleware("age");


require __DIR__.'/auth.php';





