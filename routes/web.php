<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->to(route('login'));
});


Route::get("/login", [Authcontroller::class, 'login'])->name('login');
Route::post('/login', [Authcontroller::class, 'loginAttempt'])->name('login.attempt');

Route::middleware(['auth'])->group(function () {

    //Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get("/dashboard", function () {
        return view('dashboard');
    });

    Route::get("/client", [ClientController::class, 'index']);
    Route::post("/client/create", [ClientController::class, 'create']);

    Route::get("/project-details/{id}", [ClientController::class, 'projectDetails']);

    Route::get("/entry-list/{id}", [ClientController::class, 'entryList']);

    Route::post("/projects/create", [ClientController::class, 'projectCreate']);

    Route::post("/entries/create", [ClientController::class, 'createEntry']);

    Route::put("/entries/update", [ClientController::class, 'updateEntry']);

    Route::get('/project/status/update/{id}', [ClientController::class, 'projectStatusUpdate']);
});