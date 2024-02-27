<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;




Route::get('/add', function () {      
    return view('add');
})->name('add');

route::post('/addStudent',[CrudController::class,'addStudent'])->name('addStudent');

route::get('/singleStudent/{id}',[CrudController::class,'singleStudent'])->name('singleStudent');

route::get('/',[CrudController::class,'ShowStudent'])->name('home');

route::get('/delete/{id}',[CrudController::class,'deleteStudent'])->name('deleteStudent');

route::get('/updatePage/{id}',[CrudController::class,'updatePage'])->name('updatePage');

route::post('/updateStudent/{id}',[CrudController::class,'updateStudent'])->name('updateStudent');
// route::post('/adddata',[CrudController::class,'adduser'])->name('adduser');


