<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExecutiveBoardController;
use App\Http\Controllers\PressReleaseController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\ProcurementResultsController;
use App\Http\Controllers\AveragePriceController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\ManagePersonnelController;
use App\Http\Controllers\ShowDataAgencyController;
use App\Http\Controllers\RecommendedPlacesController;
use App\Http\Controllers\ShowDataDetailController;
use App\Http\Controllers\LocalAdminPromotionController;
use App\Http\Controllers\Information\HistoryController;
use App\Http\Controllers\Information\AdminHistoryController;


use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/check', function () {
//     return view('pages.banner-in.app');
// });

Route::get('/', [ShowDataDetailController::class, 'HomeDataPage'])->name('HomeDataPage');
Route::get('/layout', [ShowDataDetailController::class, 'layout'])->name('layout');
Route::get('/banner', [ShowDataDetailController::class, 'banner'])->name('banner');

//บุคลากร
Route::get('/Agency/page', [ShowDataAgencyController::class, 'AgencyPage'])->name('AgencyPage');
Route::get('/agency/{id}', [ShowDataAgencyController::class, 'AgencyShow'])->name('AgencyShow');

//ข้อมูลพื้นฐาน
Route::get('/History/page', [HistoryController::class, 'HistoryPage'])->name('HistoryPage');

Route::middleware(['check.auth'])->group(function () {

    Route::get('/admin/dashbord', [AdminController::class, 'Dashbord'])->name('Dashbord');

    Route::get('/admin/executive-board', [ExecutiveBoardController::class, 'ExecutiveBoardPage'])->name('ExecutiveBoardPage');
    Route::post('/admin/executive-board/create', [ExecutiveBoardController::class, 'ExecutiveBoardCreate'])->name('ExecutiveBoardCreate');
    Route::put('/admin/executive-board/update/{id}', [ExecutiveBoardController::class, 'ExecutiveBoardUpdate'])->name('ExecutiveBoardUpdate');
    Route::delete('/admin/executive-board/delete/{id}', [ExecutiveBoardController::class, 'ExecutiveBoardDelete'])->name('ExecutiveBoardDelete');

    //admin PressRelease
    Route::get('/PressRelease/page', [PressReleaseController::class, 'PressReleaseHome'])->name('PressReleaseHome');
    Route::post('/PressRelease/create', [PressReleaseController::class, 'PressReleaseCreate'])->name('PressReleaseCreate');
    Route::delete('/PressRelease/delete{id}', [PressReleaseController::class, 'PressReleaseDelete'])->name('PressReleaseDelete');
    Route::put('/PressRelease/update/{id}', [PressReleaseController::class, 'PressReleaseUpdate'])->name('PressReleaseUpdate');
    Route::put('/PressRelease/{id}/updatefile', [PressReleaseController::class, 'updateFile'])->name('updateFile');

    //admin Activity
    Route::get('/Activity/page', [ActivityController::class, 'ActivityHome'])->name('ActivityHome');
    Route::post('/Activity/create', [ActivityController::class, 'ActivityCreate'])->name('ActivityCreate');
    Route::delete('/Activity/delete{id}', [ActivityController::class, 'ActivityDelete'])->name('ActivityDelete');
    Route::put('/Activity/update/{id}', [ActivityController::class, 'ActivityUpdate'])->name('ActivityUpdate');
    Route::put('/Activity/{id}/updatefile', [ActivityController::class, 'ActivityUpdateFile'])->name('ActivityUpdateFile');

    //admin Procurement
    Route::get('/Procurement/page', [ProcurementController::class, 'ProcurementHome'])->name('ProcurementHome');
    Route::post('/Procurement/create', [ProcurementController::class, 'ProcurementCreate'])->name('ProcurementCreate');
    Route::delete('/Procurement/delete{id}', [ProcurementController::class, 'ProcurementDelete'])->name('ProcurementDelete');
    Route::put('/procurement/update/{id}', [ProcurementController::class, 'ProcurementUpdate'])->name('ProcurementUpdate');

    //admin ProcurementResults
    Route::get('/ProcurementResults/page', [ProcurementResultsController::class, 'ProcurementResultsHome'])->name('ProcurementResultsHome');
    Route::post('/ProcurementResults/create', [ProcurementResultsController::class, 'ProcurementResultsCreate'])->name('ProcurementResultsCreate');
    Route::delete('/ProcurementResults/delete{id}', [ProcurementResultsController::class, 'ProcurementResultsDelete'])->name('ProcurementResultsDelete');
    Route::put('/ProcurementResults/update/{id}', [ProcurementResultsController::class, 'ProcurementResultsUpdate'])->name('ProcurementResultsUpdate');

    //admin AveragePrice
    Route::get('/AveragePrice/page', [AveragePriceController::class, 'AveragePriceHome'])->name('AveragePriceHome');
    Route::post('/AveragePrice/create', [AveragePriceController::class, 'AveragePriceCreate'])->name('AveragePriceCreate');
    Route::delete('/AveragePrice/delete{id}', [AveragePriceController::class, 'AveragePriceDelete'])->name('AveragePriceDelete');
    Route::put('/AveragePrice/update/{id}', [AveragePriceController::class, 'AveragePriceUpdate'])->name('AveragePriceUpdate');

    //admin Revenue
    Route::get('/Revenue/page', [RevenueController::class, 'RevenueHome'])->name('RevenueHome');
    Route::post('/Revenue/create', [RevenueController::class, 'RevenueCreate'])->name('RevenueCreate');
    Route::delete('/Revenue/delete{id}', [RevenueController::class, 'RevenueDelete'])->name('RevenueDelete');
    Route::put('/Revenue/update/{id}', [RevenueController::class, 'RevenueUpdate'])->name('RevenueUpdate');

    //admin ManagePersonnel
    Route::get('/Personnel/page', [ManagePersonnelController::class, 'ManagePersonnel'])->name('ManagePersonnel');
    Route::post('/Personnel/agency/create', [ManagePersonnelController::class, 'agencyCreate'])->name('agencyCreate');
    Route::put('/Personnel/agency/update/{id}', [ManagePersonnelController::class, 'agencyUpdate'])->name('agencyUpdate');
    Route::delete('/Personnel/agency/delete{id}', [ManagePersonnelController::class, 'agencyDelete'])->name('agencyDelete');

    Route::get('/PersonnelRankDetails/page/{id}', [ManagePersonnelController::class, 'PersonnelRankDetails'])->name('PersonnelRankDetails');
    Route::post('/Personnel/PersonnelRank/create/{id}', [ManagePersonnelController::class, 'PersonnelRankCreate'])->name('PersonnelRankCreate');
    Route::put('/Personnel/PersonnelRank/update/{id}', [ManagePersonnelController::class, 'PersonnelRankUpdate'])->name('PersonnelRankUpdate');
    Route::delete('/Personnel/PersonnelRank/delete{id}', [ManagePersonnelController::class, 'PersonnelRankDelete'])->name('PersonnelRankDelete');

    Route::get('/Personnel/PersonnelRank/PersonnelDetails/page/{id}', [ManagePersonnelController::class, 'PersonnelDetails'])->name('PersonnelDetails');
    Route::post('/Personnel/PersonnelRank/PersonnelDetails/create/{id}', [ManagePersonnelController::class, 'PersonnelDetailsCreate'])->name('PersonnelDetailsCreate');
    Route::put('/Personnel/PersonnelRank/PersonnelDetails/update/{id}', [ManagePersonnelController::class, 'PersonnelDetailsUpdate'])->name('PersonnelDetailsUpdate');
    Route::delete('/Personnel/PersonnelRank/PersonnelDetails/delete{id}', [ManagePersonnelController::class, 'PersonnelDetailsDelete'])->name('PersonnelDetailsDelete');

    //admin ManagePersonnel
    Route::get('/RecommendedPlaces/page', [RecommendedPlacesController::class, 'RecommendedPlacesPage'])->name('RecommendedPlacesPage');
    Route::post('/RecommendedPlaces/create', [RecommendedPlacesController::class, 'RecommendedPlacesCreate'])->name('RecommendedPlacesCreate');
    Route::delete('/RecommendedPlaces/delete/{id}', [RecommendedPlacesController::class, 'RecommendedPlacesDelete'])->name('RecommendedPlacesDelete');
    Route::put('/recommended-places/update/{id}', [RecommendedPlacesController::class, 'RecommendedPlacesUpdate'])->name('RecommendedPlacesUpdate');

    //admin LocalAdminPromotion
    Route::get('/LocalAdminPromotion/page', [LocalAdminPromotionController::class, 'LocalAdminPromotionPage'])->name('LocalAdminPromotionPage');
    Route::post('/LocalAdminPromotion/create', [LocalAdminPromotionController::class, 'LocalAdminPromotionCreate'])->name('LocalAdminPromotionCreate');
    Route::put('/LocalAdminPromotion/update/{id}', [LocalAdminPromotionController::class, 'LocalAdminPromotionUpdate'])->name('LocalAdminPromotionUpdate');
    Route::delete('/LocalAdminPromotion/delete/{id}', [LocalAdminPromotionController::class, 'LocalAdminPromotionDelete'])->name('LocalAdminPromotionDelete');

    Route::get('/Admin/History/page', [AdminHistoryController::class, 'HistoryAdmin'])->name('HistoryAdmin');
});

Route::get('/showLoginForm', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [AuthController::class, 'login'])->name('Login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/showRegistrationForm', [AuthController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route::get('/banner', function () {
//     return view('pages.banner-in.app');
// })->name('banner');
