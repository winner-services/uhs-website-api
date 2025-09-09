<?php

use App\Http\Controllers\website\Event\EventController;
use App\Http\Controllers\website\About\AboutController;
use App\Http\Controllers\website\Domaine\DomaineController;
use App\Http\Controllers\website\home\homeController;
use App\Http\Controllers\website\Message\MessageController;
use App\Http\Controllers\website\Project\ProjectController;
use App\Http\Controllers\website\Team\TeamController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

Route::controller(homeController::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/about-index', 'index')->name('about.index');
    Route::get('/about-details', 'details')->name('about.details');
});

Route::controller(TeamController::class)->group(function () {
    Route::get('/team-index', 'index')->name('team.index');
});

Route::controller(MessageController::class)->group(function () {
    Route::post('/message-store', 'storeMessage')->name('message.store');
});

Route::controller(DomaineController::class)->group(function () {
    Route::get('/domaine-index', 'domaineIndex')->name('domaine.index');
    Route::get('/domaine-details/{id}', 'domaineDetails')->name('domaine.details');
});

Route::controller(EventController::class)->group(function () {
    Route::get('/event.index', 'eventIndex')->name('event.index');
    Route::get('/event-details/{id}', 'eventDetails')->name('event.details');
});

Route::controller(ProjectController::class)->group(function () {
    Route::get('/project-index', 'projectIndex')->name('project.index');
});
