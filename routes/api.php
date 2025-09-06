<?php

use App\Http\Controllers\Api\About\AboutController;
use App\Http\Controllers\Api\Team\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AboutController::class)->group(function(){
    Route::get('/about.index','index');
    Route::post('/about.store','store');
    Route::post('/about.update/{id}','update');
});

Route::controller(TeamController::class)->group(function(){
    Route::get('/team.index', 'team');
    Route::post('/team.store', 'storeTeam');
    Route::post('/team.update{id}', 'updateTeam');
    Route::delete('/team.delete{id}','destroyTeam');
});


