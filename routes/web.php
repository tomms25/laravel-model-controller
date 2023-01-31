<?php


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

// Qui bisogna importare il controller e la route che vogliamo utilizzare

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyController;

// Dentro la Route viene passato il nome del metodo creato in MyController

Route::get('/',[MyController::class,'home']);


