<?php

use App\Http\Controllers\Api\About\AboutController;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Domaine\DomaineController;
use App\Http\Controllers\Api\Donation\DonationControlleer;
use App\Http\Controllers\Api\Event\EventController;
use App\Http\Controllers\Api\Gallery\GalleryController;
use App\Http\Controllers\Api\Home\IndexController;
use App\Http\Controllers\Api\Offre\OffreController;
use App\Http\Controllers\Api\Partenaire\PartenaireController;
use App\Http\Controllers\Api\Project\ProjectController;
use App\Http\Controllers\Api\Slide\SlideController;
use App\Http\Controllers\Api\Team\TeamController;
use App\Http\Controllers\Api\Temoignage\TemoignageController;
use App\Http\Controllers\Api\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->get('/check-auth', function (Request $request) {
    return response()->json(['authenticated' => true]);
});

Route::controller(UserController::class)->group(function () {
    Route::post('/user.store', 'storeUser');
    Route::put('/user.update/{id}', 'updateUser');
    Route::delete('/user.delete/{id}', 'deleteUser');
    Route::get('/user.index', 'getUsers');
});

Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/logout', [AuthController::class, 'logout']);
    });
});

Route::middleware('auth:sanctum')->group(function () {
    Route::controller(AboutController::class)->group(function () {
        Route::get('/about.index', 'index');
        Route::post('/about.store', 'store');
        Route::post('/about.update/{id}', 'update');
        Route::post('/objective.store', 'createObjective');
        Route::put('/objective.update/{id}', 'updateObjective');
        Route::get('/objective.index', 'objectiveIndex');
        Route::delete('/objective.delete/{id}', 'destroyObjective');
        Route::get('/message.index', 'messageIndex');
        Route::delete('/message.delete/{id}', 'destroyMessage');
    });

    Route::controller(TeamController::class)->group(function () {
        Route::get('/team.index', 'team');
        Route::post('/team.store', 'storeTeam');
        Route::post('/team.update/{id}', 'updateTeam');
        Route::delete('/team.delete/{id}', 'destroyTeam');
    });

    Route::controller(GalleryController::class)->group(function () {
        Route::get('/gallery.index', 'galleryIndex');
        Route::post('/gallery.store', 'createGallery');
        Route::post('/gallery.update/{id}', 'updateGallery');
        Route::delete('/gallery.delete/{id}', 'deleteGallery');
    });

    Route::controller(DomaineController::class)->group(function () {
        Route::get('/category.index', 'indexCategories');
        Route::post('/category.store', 'storeCategorie');
        Route::put('/category.update/{id}', 'updateCategorie');
        Route::delete('/category.delete/{id}', 'deleteCategorie');
        Route::get('/domaine.index', 'indexDomaine');
        Route::post('/domaine.store', 'storeDomaine');
        Route::post('/domaine.update/{id}', 'updateDomaine');
        Route::delete('/domaine.delete/{id}', 'deleteDomaine');
    });

    Route::controller(EventController::class)->group(function () {
        Route::get('/event.index', 'getEventData');
        Route::post('/event.store', 'createEvent');
        Route::post('/event.update/{id}', 'updateEvent');
        Route::delete('/event.delete/{id}', 'deleteEvent');
    });

    Route::controller(ProjectController::class)->group(function () {
        Route::get('/project.index', 'getProjectData');
        Route::post('/project.store', 'createProject');
        Route::post('/project.update/{id}', 'updateProject');
        Route::delete('/project.delete/{id}', 'deleteProject');
    });

    Route::controller(SlideController::class)->group(function () {
        Route::get('/slide.index', 'slideIndex');
        Route::post('/slide.store', 'storeSlide');
        Route::post('/slide.update/{id}', 'updateSlide');
        Route::delete('/slide.delete/{id}', 'deleteSlide');
    });

    Route::controller(PartenaireController::class)->group(function () {
        Route::get('/partner.index', 'partenaireIndex');
        Route::post('/partner.store', 'createPartenaire');
        Route::post('/partner.update/{id}', 'updatePartenaire');
        Route::delete('/partner.delete/{id}', 'deletePartenaire');
    });

    Route::controller(TemoignageController::class)->group(function () {
        Route::get('/temoignage.index', 'getTemoignage');
        Route::post('/temoignage.store', 'storeTemoignage');
        Route::put('/temoignage.update/{id}', 'updateTemoignage');
        Route::delete('/temoignage.delete/{id}', 'deleteTemoignage');
    });

    Route::get('/count.index', [IndexController::class, 'count']);

    Route::controller(DonationControlleer::class)->group(function () {
        Route::get('/donation.index', 'indexDonation');
        Route::delete('/donation.delete/{id}', 'destroyDonate');
    });
    // Route::controller(OffreController::class)->group(function () {
    //     Route::get('/offres.index', 'indexOffres');
    //     Route::post('/offres.store', 'storeOffre');
    //     Route::post('/offres.update/{id}', 'updateOffre');
    //     Route::delete('/offres.delete/{id}', 'destroyOffre');
    // });
});
Route::controller(OffreController::class)->group(function () {
    Route::get('/offres.index', 'indexOffres');
    Route::post('/offres.store', 'storeOffre');
    Route::post('/offres.update/{id}', 'updateOffre');
    Route::delete('/offres.delete/{id}', 'destroyOffre');
});
