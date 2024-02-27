<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\API\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::post('/add-student',[StudentController::class,'addStudent']);

route::get('/single-student/{id}',[StudentController::class,'singleStudent']);

route::get('/show-student',[StudentController::class,'ShowStudent']);

route::delete('/delete-student/{id}',[StudentController::class,'deleteStudent']);

route::post('/update-student/{id}',[StudentController::class,'updateStudent']);
