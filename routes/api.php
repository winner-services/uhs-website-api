<?php

use App\Http\Controllers\Api\About\AboutController;
use App\Http\Controllers\Api\Domaine\DomaineController;
use App\Http\Controllers\Api\Gallery\GalleryController;
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
    Route::post('/objective.store','createObjective');
    Route::get('/message.index','messageIndex');
    Route::delete('/message.delete/{id}','destroyMessage');
});

Route::controller(TeamController::class)->group(function(){
    Route::get('/team.index', 'team');
    Route::post('/team.store', 'storeTeam');
    Route::post('/team.update/{id}', 'updateTeam');
    Route::delete('/team.delete/{id}','destroyTeam');
});

Route::controller(GalleryController::class)->group(function(){
    Route::get('/gallery.index','galleryIndex');
    Route::post('/gallery.store','createGallery');
});

Route::controller(DomaineController::class)->group(function(){
    Route::get('/category.index','indexCategories');
    Route::get('/domaine.index','indexDomaine');
    Route::post('/category.store','storeCategorie');
    Route::post('/domaine.store','storeDomaine');
    Route::post('/domaine.update/{id}','updateDomaine');
    Route::delete('/domaine.delete/{id}','deleteDomaine');
});


