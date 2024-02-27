<?php

use App\Http\Controllers\StudentController;
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


Route::get('/add', function () {      
    return view('add');
})->name('add');

route::post('/addStudent',[StudentController::class,'addStudent'])->name('addStudent');

route::get('/singleStudent/{id}',[StudentController::class,'singleStudent'])->name('singleStudent');

route::get('/',[StudentController::class,'ShowStudent'])->name('home');

route::get('/delete/{id}',[StudentController::class,'deleteStudent'])->name('deleteStudent');

route::get('/updatePage/{id}/edit',[StudentController::class,'updatePage'])->name('updatePage');

route::post('/updateStudent/{id}/edit',[StudentController::class,'updateStudent'])->name('updateStudent');
