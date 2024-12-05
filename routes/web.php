<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DepartementsController;
 

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
    Route::resource('employes', EmployesController::class);//rappell toutes les  methodes 
    Route::resource('clients', ClientsController::class);//rappell toutes les  methodes 
    Route::resource('departements', DepartementsController::class);//rappell toutes les  methodes 
    Route::get('/employes/{id}/vacation', [EmployesController::class, 'vacationRequest'])->name('vacation.request');
    Route::get('/employes/{id}/certificate', [EmployesController::class, 'certificateRequest'])->name('certificate.request');

});
