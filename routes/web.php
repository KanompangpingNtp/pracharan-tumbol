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
use App\Http\Controllers\Information\GeneralInformationController;
use App\Http\Controllers\Information\AdminGeneralInformationController;
use App\Http\Controllers\Information\AdminVisionMissionController;
use App\Http\Controllers\Information\AdminStrategyGuidelineController;
use App\Http\Controllers\Information\VisionMissionController;
use App\Http\Controllers\Information\StrategyGuidelineController;
use App\Http\Controllers\Information\AdminCommunityProductsController;
use App\Http\Controllers\Information\AdminImportantPlacesController;
use App\Http\Controllers\Information\CommunityProductsController;
use App\Http\Controllers\Information\ImportantPlacesController;
use App\Http\Controllers\Information\AdminAuthorityController;
use App\Http\Controllers\Information\AuthorityController;
use App\Http\Controllers\Information\AdminManagementPolicyController;
use App\Http\Controllers\Information\ManagementPolicyController;
use App\Http\Controllers\performance_results\AdminFinancialReportController;
use App\Http\Controllers\performance_results\FinancialReportController;
use App\Http\Controllers\performance_results\AdminPerformanceReportController;
use App\Http\Controllers\performance_results\PerformanceReportController;
use App\Http\Controllers\performance_results\AdminMonitoringEvaluationController;
use App\Http\Controllers\performance_results\MonitoringEvaluationController;
use App\Http\Controllers\performance_results\AdminAnnualBudgetController;
use App\Http\Controllers\performance_results\AnnualBudgetController;
use App\Http\Controllers\performance_results\AdminSixMonthPerformanceController;
use App\Http\Controllers\performance_results\SixMonthPerformanceController;

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
Route::get('/VisionMission/page', [VisionMissionController::class, 'VisionMissionPage'])->name('VisionMissionPage');
Route::get('/GeneralInformation/page', [GeneralInformationController::class, 'GeneralInformationPage'])->name('GeneralInformationPage');
Route::get('/StrategyGuideline/page', [StrategyGuidelineController::class, 'StrategyGuidelinePage'])->name('StrategyGuidelinePage');

Route::get('/CommunityProducts/page', [CommunityProductsController::class, 'CommunityProductsPage'])->name('CommunityProductsPage');
Route::get('/CommunityProducts/showdetails/index/{id}', [CommunityProductsController::class, 'ShowDetails'])->name('ShowDetails');

Route::get('/ImportantPlaces/page', [ImportantPlacesController::class, 'ImportantPlacesPage'])->name('ImportantPlacesPage');
Route::get('/ImportantPlaces/showdetails/index/{id}', [ImportantPlacesController::class, 'ImportantPlacesShowDetails'])->name('ImportantPlacesShowDetails');

Route::get('/Authority/page', [AuthorityController::class, 'AuthorityPage'])->name('AuthorityPage');
Route::get('/Authority/showdetails/index/{id}', [AuthorityController::class, 'AuthorityShowDetails'])->name('AuthorityShowDetails');

Route::get('/ManagementPolicy/page', [ManagementPolicyController::class, 'ManagementPolicyPage'])->name('ManagementPolicyPage');
Route::get('/ManagementPolicy/showdetails/index/{id}', [ManagementPolicyController::class, 'ManagementPolicyShowDetails'])->name('ManagementPolicyShowDetails');

//ผลงานงบการเงิน
Route::get('/FinancialReport/page', [FinancialReportController::class, 'FinancialReportPage'])->name('FinancialReportPage');
Route::get('/FinancialReport/show/details/{id}', [FinancialReportController::class, 'FinancialReportShowDertailsPage'])->name('FinancialReportShowDertailsPage');
Route::get('/FinancialReport/show/details/results/{id}', [FinancialReportController::class, 'FinancialReportShowDertailResultsPage'])->name('FinancialReportShowDertailResultsPage');

//ผลงานดำเนินการ
Route::get('/PerformanceReport/page', [PerformanceReportController::class, 'PerformanceReportPage'])->name('PerformanceReportPage');
Route::get('/PerformanceReport/show/details/{id}', [PerformanceReportController::class, 'PerformanceReportShowDertailsPage'])->name('PerformanceReportShowDertailsPage');
Route::get('/PerformanceReport/show/details/results/{id}', [PerformanceReportController::class, 'PerformanceReportShowDertailResultsPage'])->name('PerformanceReportShowDertailResultsPage');

//รายงานการติดตามและประเมิน
Route::get('/MonitoringEvaluation/page', [MonitoringEvaluationController::class, 'MonitoringEvaluationPage'])->name('MonitoringEvaluationPage');
Route::get('/MonitoringEvaluation/show/details/{id}', [MonitoringEvaluationController::class, 'MonitoringEvaluationShowDertailsPage'])->name('MonitoringEvaluationShowDertailsPage');
Route::get('/MonitoringEvaluation/show/details/results/{id}', [MonitoringEvaluationController::class, 'MonitoringEvaluationShowDertailResultsPage'])->name('MonitoringEvaluationShowDertailResultsPage');

//งบประมาณรายจ่ายประจำปี
Route::get('/AnnualBudget/page', [AnnualBudgetController::class, 'AnnualBudgetPage'])->name('AnnualBudgetPage');
Route::get('/AnnualBudget/show/details/{id}', [AnnualBudgetController::class, 'AnnualBudgetShowDertailsPage'])->name('AnnualBudgetShowDertailsPage');
Route::get('/AnnualBudget/show/details/results/{id}', [AnnualBudgetController::class, 'AnnualBudgetShowDertailResultsPage'])->name('AnnualBudgetShowDertailResultsPage');

//รายงานผลการดำเนินงานรอบ 6 เดือน
Route::get('/SixMonthPerformance/page', [SixMonthPerformanceController::class, 'SixMonthPerformancePage'])->name('SixMonthPerformancePage');
Route::get('/SixMonthPerformance/show/details/{id}', [SixMonthPerformanceController::class, 'SixMonthPerformanceShowDertailsPage'])->name('SixMonthPerformanceShowDertailsPage');
Route::get('/SixMonthPerformance/show/details/results/{id}', [SixMonthPerformanceController::class, 'SixMonthPerformanceShowDertailResultsPage'])->name('SixMonthPerformanceShowDertailResultsPage');

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

    //History
    Route::get('/Admin/History/page', [AdminHistoryController::class, 'HistoryAdmin'])->name('HistoryAdmin');
    Route::post('/Admin/History/create', [AdminHistoryController::class, 'HistoryCreate'])->name('HistoryCreate');
    Route::delete('/Admin/History/delete/{id}', [AdminHistoryController::class, 'HistoryDelete'])->name('HistoryDelete');

    //GeneralInformation
    Route::get('/Admin/GeneralInformation/page', [AdminGeneralInformationController::class, 'GeneralInformationAdmin'])->name('GeneralInformationAdmin');
    Route::post('/Admin/GeneralInformation/create', [AdminGeneralInformationController::class, 'GeneralInformationCreate'])->name('GeneralInformationCreate');
    Route::delete('/Admin/GeneralInformation/delete/{id}', [AdminGeneralInformationController::class, 'GeneralInformationDelete'])->name('GeneralInformationDelete');

    //VisionMission
    Route::get('/Admin/VisionMission/page', [AdminVisionMissionController::class, 'VisionMissionAdmin'])->name('VisionMissionAdmin');
    Route::post('/Admin/VisionMission/create', [AdminVisionMissionController::class, 'VisionMissionCreate'])->name('VisionMissionCreate');
    Route::delete('/Admin/VisionMission/delete/{id}', [AdminVisionMissionController::class, 'VisionMissionDelete'])->name('VisionMissionDelete');

    //StrategyGuideline
    Route::get('/Admin/StrategyGuideline/page', [AdminStrategyGuidelineController::class, 'StrategyGuidelineAdmin'])->name('StrategyGuidelineAdmin');
    Route::post('/Admin/StrategyGuideline/create', [AdminStrategyGuidelineController::class, 'StrategyGuidelineCreate'])->name('StrategyGuidelineCreate');
    Route::delete('/Admin/StrategyGuideline/delete/{id}', [AdminStrategyGuidelineController::class, 'StrategyGuidelineDelete'])->name('StrategyGuidelineDelete');

    //CommunityProducts
    Route::get('/Admin/CommunityProducts/page', [AdminCommunityProductsController::class, 'CommunityProductsAdmin'])->name('CommunityProductsAdmin');
    Route::post('/Admin/CommunityProducts/create/name', [AdminCommunityProductsController::class, 'CommunityProductsNameCreate'])->name('CommunityProductsNameCreate');
    Route::delete('/Admin/CommunityProducts/{id}/delete', [AdminCommunityProductsController::class, 'CommunityProductDelete'])->name('CommunityProductDelete');
    Route::post('/Admin/CommunityProducts/{id}/update', [AdminCommunityProductsController::class, 'CommunityProductsNameUpdate'])->name('CommunityProductsNameUpdate');
    Route::get('/Admin/CommunityProducts/show/details/{id}', [AdminCommunityProductsController::class, 'CommunityProductShowDertails'])->name('CommunityProductShowDertails');
    Route::post('/Admin/CommunityProducts/show/details/{id}/create', [AdminCommunityProductsController::class, 'CommunityProductDertailsCreate'])->name('CommunityProductDertailsCreate');
    Route::delete('/Admin/CommunityProducts/show/details/{id}/delete', [AdminCommunityProductsController::class, 'CommunityProductDetailsDelete'])->name('CommunityProductDetailsDelete');

    //ImportantPlaces
    Route::get('/Admin/ImportantPlaces/page', [AdminImportantPlacesController::class, 'ImportantPlacesAdmin'])->name('ImportantPlacesAdmin');
    Route::post('/Admin/ImportantPlaces/create/name', [AdminImportantPlacesController::class, 'ImportantPlacesNameCreate'])->name('ImportantPlacesNameCreate');
    Route::delete('/Admin/ImportantPlaces/{id}/delete', [AdminImportantPlacesController::class, 'ImportantPlacesDelete'])->name('ImportantPlacesDelete');
    Route::post('/Admin/ImportantPlaces/{id}/update', [AdminImportantPlacesController::class, 'ImportantPlacesNameUpdate'])->name('ImportantPlacesNameUpdate');
    Route::get('/Admin/ImportantPlaces/show/details/{id}', [AdminImportantPlacesController::class, 'ImportantPlacesShowDertails'])->name('ImportantPlacesShowDertails');
    Route::post('/Admin/ImportantPlaces/show/details/{id}/create', [AdminImportantPlacesController::class, 'ImportantPlacesDertailsCreate'])->name('ImportantPlacesDertailsCreate');
    Route::delete('/Admin/ImportantPlaces/show/details/{id}/delete', [AdminImportantPlacesController::class, 'ImportantPlacesDetailsDelete'])->name('ImportantPlacesDetailsDelete');

    //Authority
    Route::get('/Admin/Authority/page', [AdminAuthorityController::class, 'AuthorityAdmin'])->name('AuthorityAdmin');
    Route::post('/Admin/Authority/create/name', [AdminAuthorityController::class, 'AuthorityCreate'])->name('AuthorityCreate');
    Route::post('/Admin/Authority/{id}/update', [AdminAuthorityController::class, 'AuthorityNameUpdate'])->name('AuthorityNameUpdate');
    Route::delete('/Admin/Authority/{id}/delete', [AdminAuthorityController::class, 'AuthorityNameDelete'])->name('AuthorityNameDelete');
    Route::get('/Admin/Authority/show/details/{id}', [AdminAuthorityController::class, 'AuthorityShowDertails'])->name('AuthorityShowDertails');
    Route::post('/Admin/Authority/show/details/{id}/create', [AdminAuthorityController::class, 'AuthorityDertailsCreate'])->name('AuthorityDertailsCreate');
    Route::delete('/Admin/Authority/show/details/{id}/delete', [AdminAuthorityController::class, 'AuthorityDetailsDelete'])->name('AuthorityDetailsDelete');

    //ManagementPolicy
    Route::get('/Admin/ManagementPolicy/page', [AdminManagementPolicyController::class, 'ManagementPolicyAdmin'])->name('ManagementPolicyAdmin');
    Route::post('/Admin/ManagementPolicy/create/name', [AdminManagementPolicyController::class, 'ManagementPolicyCreate'])->name('ManagementPolicyCreate');
    Route::post('/Admin/ManagementPolicy/{id}/update', [AdminManagementPolicyController::class, 'ManagementPolicyNameUpdate'])->name('ManagementPolicyNameUpdate');
    Route::delete('/Admin/ManagementPolicy/{id}/delete', [AdminManagementPolicyController::class, 'ManagementPolicyDelete'])->name('ManagementPolicyDelete');
    Route::get('/Admin/ManagementPolicy/show/details/{id}', [AdminManagementPolicyController::class, 'ManagementPolicyShowDertails'])->name('ManagementPolicyShowDertails');
    Route::post('/Admin/ManagementPolicy/show/details/{id}/create', [AdminManagementPolicyController::class, 'ManagementPolicyDertailsCreate'])->name('ManagementPolicyDertailsCreate');
    Route::delete('/Admin/ManagementPolicy/show/details/{id}/delete', [AdminManagementPolicyController::class, 'ManagementPolicyDetailsDelete'])->name('ManagementPolicyDetailsDelete');

    //FinancialReport
    Route::get('/Admin/FinancialReport/page', [AdminFinancialReportController::class, 'FinancialReportAdmin'])->name('FinancialReportAdmin');
    Route::post('/Admin/FinancialReport/create', [AdminFinancialReportController::class, 'FinancialReportCreate'])->name('FinancialReportCreate');
    Route::put('/Admin/FinancialReport/{id}/update', [AdminFinancialReportController::class, 'FinancialReportUpdate'])->name('FinancialReportUpdate');
    Route::delete('/Admin/FinancialReport/{id}/delete', [AdminFinancialReportController::class, 'FinancialReportDelete'])->name('FinancialReportDelete');
    Route::get('/Admin/FinancialReport/show/details/{id}', [AdminFinancialReportController::class, 'FinancialReportShowDertails'])->name('FinancialReportShowDertails');
    Route::post('/Admin/FinancialReport/details/{id}/create', [AdminFinancialReportController::class, 'FinancialReportDertailsCreate'])->name('FinancialReportDertailsCreate');
    Route::put('/Admin/FinancialReport/details/{id}/update', [AdminFinancialReportController::class, 'FinancialReportDertailsUpdate'])->name('FinancialReportDertailsUpdate');
    Route::delete('/Admin/FinancialReport/details/{id}/delete', [AdminFinancialReportController::class, 'FinancialReportDertailsDelete'])->name('FinancialReportDertailsDelete');
    Route::get('/Admin/FinancialReport/show/details/results/{id}', [AdminFinancialReportController::class, 'FinancialReportShowDertailResults'])->name('FinancialReportShowDertailResults');
    Route::post('/Admin/FinancialReport/details/{id}/create/results', [AdminFinancialReportController::class, 'FinancialReportDertailsCreateResults'])->name('FinancialReportDertailsCreateResults');
    Route::delete('/Admin/FinancialReport/details/{id}/results/delete', [AdminFinancialReportController::class, 'FinancialReportDertailsDeleteResults'])->name('FinancialReportDertailsDeleteResults');

    //PerformanceReport
    Route::get('/Admin/PerformanceReport/page', [AdminPerformanceReportController::class, 'PerformanceReportAdmin'])->name('PerformanceReportAdmin');
    Route::post('/Admin/PerformanceReport/create', [AdminPerformanceReportController::class, 'PerformanceReportCreate'])->name('PerformanceReportCreate');
    Route::put('/Admin/PerformanceReport/{id}/update', [AdminPerformanceReportController::class, 'PerformanceReportUpdate'])->name('PerformanceReportUpdate');
    Route::delete('/Admin/PerformanceReport/{id}/delete', [AdminPerformanceReportController::class, 'PerformanceReportDelete'])->name('PerformanceReportDelete');
    Route::get('/Admin/PerformanceReport/show/details/{id}', [AdminPerformanceReportController::class, 'PerformanceReportShowDertails'])->name('PerformanceReportShowDertails');
    Route::post('/Admin/PerformanceReport/details/{id}/create', [AdminPerformanceReportController::class, 'PerformanceReportDertailsCreate'])->name('PerformanceReportDertailsCreate');
    Route::put('/Admin/PerformanceReport/details/{id}/update', [AdminPerformanceReportController::class, 'PerformanceReportDertailsUpdate'])->name('PerformanceReportDertailsUpdate');
    Route::delete('/Admin/PerformanceReport/details/{id}/delete', [AdminPerformanceReportController::class, 'PerformanceReportDertailsDelete'])->name('PerformanceReportDertailsDelete');
    Route::get('/Admin/PerformanceReport/show/details/results/{id}', [AdminPerformanceReportController::class, 'PerformanceReportShowDertailResults'])->name('PerformanceReportShowDertailResults');
    Route::post('/Admin/PerformanceReport/details/{id}/create/results', [AdminPerformanceReportController::class, 'PerformanceReportDertailsCreateResults'])->name('PerformanceReportDertailsCreateResults');
    Route::delete('/Admin/PerformanceReport/details/{id}/results/delete', [AdminPerformanceReportController::class, 'PerformanceReportDertailsDeleteResults'])->name('PerformanceReportDertailsDeleteResults');

    //MonitoringEvaluation
    Route::get('/Admin/MonitoringEvaluation/page', [AdminMonitoringEvaluationController::class, 'MonitoringEvaluationAdmin'])->name('MonitoringEvaluationAdmin');
    Route::post('/Admin/MonitoringEvaluation/create', [AdminMonitoringEvaluationController::class, 'MonitoringEvaluationCreate'])->name('MonitoringEvaluationCreate');
    Route::put('/Admin/MonitoringEvaluation/{id}/update', [AdminMonitoringEvaluationController::class, 'MonitoringEvaluationUpdate'])->name('MonitoringEvaluationUpdate');
    Route::delete('/Admin/MonitoringEvaluation/{id}/delete', [AdminMonitoringEvaluationController::class, 'MonitoringEvaluationDelete'])->name('MonitoringEvaluationDelete');
    Route::get('/Admin/MonitoringEvaluation/show/details/{id}', [AdminMonitoringEvaluationController::class, 'MonitoringEvaluationShowDertails'])->name('MonitoringEvaluationShowDertails');
    Route::post('/Admin/MonitoringEvaluation/details/{id}/create', [AdminMonitoringEvaluationController::class, 'MonitoringEvaluationDertailsCreate'])->name('MonitoringEvaluationDertailsCreate');
    Route::put('/Admin/MonitoringEvaluation/details/{id}/update', [AdminMonitoringEvaluationController::class, 'MonitoringEvaluationDertailsUpdate'])->name('MonitoringEvaluationDertailsUpdate');
    Route::delete('/Admin/MonitoringEvaluation/details/{id}/delete', [AdminMonitoringEvaluationController::class, 'MonitoringEvaluationDertailsDelete'])->name('MonitoringEvaluationDertailsDelete');
    Route::get('/Admin/MonitoringEvaluation/show/details/results/{id}', [AdminMonitoringEvaluationController::class, 'MonitoringEvaluationShowDertailResults'])->name('MonitoringEvaluationShowDertailResults');
    Route::post('/Admin/MonitoringEvaluation/details/{id}/create/results', [AdminMonitoringEvaluationController::class, 'MonitoringEvaluationDertailsCreateResults'])->name('MonitoringEvaluationDertailsCreateResults');
    Route::delete('/Admin/MonitoringEvaluation/details/{id}/results/delete', [AdminMonitoringEvaluationController::class, 'MonitoringEvaluationDertailsDeleteResults'])->name('MonitoringEvaluationDertailsDeleteResults');

    //AnnualBudget
    Route::get('/Admin/AnnualBudget/page', [AdminAnnualBudgetController::class, 'AnnualBudgetAdmin'])->name('AnnualBudgetAdmin');
    Route::post('/Admin/AnnualBudget/create', [AdminAnnualBudgetController::class, 'AnnualBudgetCreate'])->name('AnnualBudgetCreate');
    Route::put('/Admin/AnnualBudget/{id}/update', [AdminAnnualBudgetController::class, 'AnnualBudgetUpdate'])->name('AnnualBudgetUpdate');
    Route::delete('/Admin/AnnualBudget/{id}/delete', [AdminAnnualBudgetController::class, 'AnnualBudgetDelete'])->name('AnnualBudgetDelete');
    Route::get('/Admin/AnnualBudget/show/details/{id}', [AdminAnnualBudgetController::class, 'AnnualBudgetShowDertails'])->name('AnnualBudgetShowDertails');
    Route::post('/Admin/AnnualBudget/details/{id}/create', [AdminAnnualBudgetController::class, 'AnnualBudgetDertailsCreate'])->name('AnnualBudgetDertailsCreate');
    Route::put('/Admin/AnnualBudget/details/{id}/update', [AdminAnnualBudgetController::class, 'AnnualBudgetDertailsUpdate'])->name('AnnualBudgetDertailsUpdate');
    Route::delete('/Admin/AnnualBudget/details/{id}/delete', [AdminAnnualBudgetController::class, 'AnnualBudgetDertailsDelete'])->name('AnnualBudgetDertailsDelete');
    Route::get('/Admin/AnnualBudget/show/details/results/{id}', [AdminAnnualBudgetController::class, 'AnnualBudgetShowDertailResults'])->name('AnnualBudgetShowDertailResults');
    Route::post('/Admin/AnnualBudget/details/{id}/create/results', [AdminAnnualBudgetController::class, 'AnnualBudgetDertailsCreateResults'])->name('AnnualBudgetDertailsCreateResults');
    Route::delete('/Admin/AnnualBudget/details/{id}/results/delete', [AdminAnnualBudgetController::class, 'AnnualBudgetDertailsDeleteResults'])->name('AnnualBudgetDertailsDeleteResults');

    //SixMonthPerformance
    Route::get('/Admin/SixMonthPerformance/page', [AdminSixMonthPerformanceController::class, 'SixMonthPerformanceAdmin'])->name('SixMonthPerformanceAdmin');
    Route::post('/Admin/SixMonthPerformance/create', [AdminSixMonthPerformanceController::class, 'SixMonthPerformanceCreate'])->name('SixMonthPerformanceCreate');
    Route::put('/Admin/SixMonthPerformance/{id}/update', [AdminSixMonthPerformanceController::class, 'SixMonthPerformanceUpdate'])->name('SixMonthPerformanceUpdate');
    Route::delete('/Admin/SixMonthPerformance/{id}/delete', [AdminSixMonthPerformanceController::class, 'SixMonthPerformanceDelete'])->name('SixMonthPerformanceDelete');
    Route::get('/Admin/SixMonthPerformance/show/details/{id}', [AdminSixMonthPerformanceController::class, 'SixMonthPerformanceShowDertails'])->name('SixMonthPerformanceShowDertails');
    Route::post('/Admin/SixMonthPerformance/details/{id}/create', [AdminSixMonthPerformanceController::class, 'SixMonthPerformanceDertailsCreate'])->name('SixMonthPerformanceDertailsCreate');
    Route::put('/Admin/SixMonthPerformance/details/{id}/update', [AdminSixMonthPerformanceController::class, 'SixMonthPerformanceDertailsUpdate'])->name('SixMonthPerformanceDertailsUpdate');
    Route::delete('/Admin/SixMonthPerformance/details/{id}/delete', [AdminSixMonthPerformanceController::class, 'SixMonthPerformanceDertailsDelete'])->name('SixMonthPerformanceDertailsDelete');
    Route::get('/Admin/SixMonthPerformance/show/details/results/{id}', [AdminSixMonthPerformanceController::class, 'SixMonthPerformanceShowDertailResults'])->name('SixMonthPerformanceShowDertailResults');
    Route::post('/Admin/SixMonthPerformance/details/{id}/create/results', [AdminSixMonthPerformanceController::class, 'SixMonthPerformanceDertailsCreateResults'])->name('SixMonthPerformanceDertailsCreateResults');
    Route::delete('/Admin/SixMonthPerformance/details/{id}/results/delete', [AdminSixMonthPerformanceController::class, 'SixMonthPerformanceDertailsDeleteResults'])->name('SixMonthPerformanceDertailsDeleteResults');
});

Route::get('/showLoginForm', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [AuthController::class, 'login'])->name('Login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/showRegistrationForm', [AuthController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route::get('/banner', function () {
//     return view('pages.banner-in.app');
// })->name('banner');
