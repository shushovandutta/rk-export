<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/dashboard", function () {
    return view('dashboard');
});

Route::get("/client", [ClientController::class, 'index']);
Route::post("/client/create", [ClientController::class, 'create']);

Route::get("/project-details/{id}", [ClientController::class, 'projectDetails']);

Route::get("/entry-list/{id}", [ClientController::class, 'entryList']);

Route::post("/projects/create", [ClientController::class, 'projectCreate']);

Route::post("/entries/create", [ClientController::class, 'createEntry']);

Route::get('/project/status/update/{id}', [ClientController::class, 'projectStatusUpdate']);