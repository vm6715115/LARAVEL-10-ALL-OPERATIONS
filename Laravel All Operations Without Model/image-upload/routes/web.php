<?php

use App\Http\Controllers\ImageCrudController;
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

Route::get('/add', function () {      
    return view('add');
})->name('add');

route::post('/addStudent',[ImageCrudController::class,'addStudent'])->name('addStudent');

route::get('/singleStudent/{id}',[ImageCrudController::class,'singleStudent'])->name('singleStudent');

route::get('/',[ImageCrudController::class,'ShowStudent'])->name('home');

route::get('/delete/{id}',[ImageCrudController::class,'deleteStudent'])->name('deleteStudent');

route::get('/updatePage/{id}',[ImageCrudController::class,'updatePage'])->name('updatePage');

route::post('/updateStudent/{id}',[ImageCrudController::class,'updateStudent'])->name('updateStudent');
// route::post('/adddata',[CrudController::class,'adduser'])->name('adduser');



