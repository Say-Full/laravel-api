<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesApi;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get("tes", [TesApi::class, 'getData']);

// Route::get("list", [StudentController::class, 'list']); // Tidak memiliki parameter
// Route::get("list/{id}", [StudentController::class, 'getOne']); // Harus menerima nilai untuk parameter `id` dan jika tidak maka akan error
Route::get("list/{id?}", [StudentController::class, 'getOne']); // `?` untuk membuat parameter tersebut opsional

Route::post("add_student", [StudentController::class, 'add']);
