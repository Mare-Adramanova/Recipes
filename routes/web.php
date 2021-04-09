<?php

use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('recipes.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/recipes', [App\Http\Controllers\RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/create', [App\Http\Controllers\RecipeController::class, 'create'])->name('recipe.create');
Route::post('/recipes', [App\Http\Controllers\RecipeController::class, 'store'])->name('recipe.store');
Route::get('/recipes/{recipe}', [App\Http\Controllers\RecipeController::class, 'show'])->name('recipe.show');
Route::delete('/recipes/{recipe}', [App\Http\Controllers\RecipeController::class, 'destroy'])->name('recipe.destroy');
