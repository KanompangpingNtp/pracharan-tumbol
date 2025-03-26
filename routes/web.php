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
use App\Http\Controllers\NoticeBoardController;
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
use App\Http\Controllers\performance_results\AdminOperationController;
use App\Http\Controllers\performance_results\OperationController;
use App\Http\Controllers\performance_results\AdminHRPolicyController;
use App\Http\Controllers\performance_results\HRPolicyController;
use App\Http\Controllers\performance_results\AdminHRPolicyManagementController;
use App\Http\Controllers\performance_results\HRPolicyManagementController;
use App\Http\Controllers\performance_results\AdminHRManagementDevelopmentController;
use App\Http\Controllers\performance_results\HRManagementDevelopmentController;
use App\Http\Controllers\performance_results\AdminHRResultsReportController;
use App\Http\Controllers\performance_results\HRResultsReportController;
use App\Http\Controllers\performance_results\AdminTransparencyController;
use App\Http\Controllers\performance_results\TransparencyController;
use App\Http\Controllers\performance_results\AdminFinancialStatementController;
use App\Http\Controllers\performance_results\FinancialStatementController;
use App\Http\Controllers\performance_results\AdminWorkProcedureController;
use App\Http\Controllers\performance_results\WorkProcedureController;
use App\Http\Controllers\performance_results\AdminCodeofEthicsController;
use App\Http\Controllers\performance_results\CodeofEthicsController;
use App\Http\Controllers\FeaturedVideoController;
use App\Http\Controllers\TreasuryAnnouncementController;
use App\Http\Controllers\CivilServantBookController;
use App\Http\Controllers\CitizensClubController;
use App\Http\Controllers\local_development_plan\AdminAnnualActionPlanController;
use App\Http\Controllers\local_development_plan\AnnualActionPlanController;
use App\Http\Controllers\local_development_plan\AdminManpowerPlanController;
use App\Http\Controllers\local_development_plan\ManpowerPlanController;
use App\Http\Controllers\local_development_plan\AdminOperationalPlanController;
use App\Http\Controllers\local_development_plan\OperationalPlanController;
use App\Http\Controllers\local_development_plan\AdminAntiCorruptionPlanController;
use App\Http\Controllers\local_development_plan\AntiCorruptionPlanController;
use App\Http\Controllers\local_development_plan\AdminProcurementActionPlanController;
use App\Http\Controllers\local_development_plan\ProcurementActionPlanController;
use App\Http\Controllers\local_development_plan\AdminLocalDevelopmentPlanController;
use App\Http\Controllers\local_development_plan\LocalDevelopmentPlanController;
use App\Http\Controllers\laws_regs\AdminCanonController;
use App\Http\Controllers\laws_regs\CanonController;
use App\Http\Controllers\VisitorsController;
use App\Http\Controllers\menu_for_public\ReceiveComplaintsController;
use App\Http\Controllers\menu_for_public\SatisfactionController;
use App\Http\Controllers\ITA\AdminITAController;
use App\Http\Controllers\ITA\ITAController;
use App\Http\Controllers\web_intro\AdminWebIntroController;
use App\Http\Controllers\web_intro\WebIntroController;

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
Route::get('/', [WebIntroController::class, 'WebIntroPage'])->name('WebIntroPage');
Route::get('/home', [ShowDataDetailController::class, 'HomeDataPage'])->name('HomeDataPage');
Route::get('/layout', [ShowDataDetailController::class, 'layout'])->name('layout');
Route::get('/banner', [ShowDataDetailController::class, 'banner'])->name('banner');

//ติดต่อ
Route::get('/contect', [ShowDataDetailController::class, 'contect'])->name('contect');

//วิดีทัศน์แนะนำ
Route::get('/FeaturedVideo', [FeaturedVideoController::class, 'FeaturedVideoData'])->name('FeaturedVideoData');

//ประกาศของคลัง
Route::get('/TreasuryAnnouncement/ShowData', [TreasuryAnnouncementController::class, 'TreasuryAnnouncementData'])->name('TreasuryAnnouncementData');
Route::get('/Procurement/ShowData', [ProcurementController::class, 'ProcurementShowData'])->name('ProcurementShowData');
Route::get('/Procurement/ShowDetails/{id}', [ProcurementController::class, 'ProcurementShowDetails'])->name('ProcurementShowDetails');
Route::get('/ProcurementResults/ShowData', [ProcurementResultsController::class, 'ProcurementResultsShowData'])->name('ProcurementResultsShowData');
Route::get('/ProcurementResults/ShowDetails/{id}', [ProcurementResultsController::class, 'ProcurementResultsShowDetails'])->name('ProcurementResultsShowDetails');
Route::get('/AveragePrice/ShowData', [AveragePriceController::class, 'AveragePriceShowData'])->name('AveragePriceShowData');
Route::get('/AveragePrice/ShowDetails/{id}', [AveragePriceController::class, 'AveragePriceShowDetails'])->name('AveragePriceShowDetails');
Route::get('/Revenue/ShowData', [RevenueController::class, 'RevenueShowData'])->name('RevenueShowData');
Route::get('/Revenue/ShowDetails/{id}', [RevenueController::class, 'RevenueShowDetails'])->name('RevenueShowDetails');

//แผนดำเนินการประจำปี
Route::get('/AnnualAction/page', [AnnualActionPlanController::class, 'AnnualActionPage'])->name('AnnualActionPage');
Route::get('/AnnualAction/show/details/{id}', [AnnualActionPlanController::class, 'AnnualActionDertail'])->name('AnnualActionDertail');

//แผนอัตรากำลัง
Route::get('/ManpowerPlan/page', [ManpowerPlanController::class, 'ManpowerPlanPage'])->name('ManpowerPlanPage');
Route::get('/ManpowerPlan/show/details/{id}', [ManpowerPlanController::class, 'ManpowerPlanDertail'])->name('ManpowerPlanDertail');

//แผนการดำเนินงาน
Route::get('/OperationalPlan/page', [OperationalPlanController::class, 'OperationalPlanPage'])->name('OperationalPlanPage');
Route::get('/OperationalPlan/show/details/{id}', [OperationalPlanController::class, 'OperationalPlanDertail'])->name('OperationalPlanDertail');

//แผนงานป้องกันการทุจริต
Route::get('/AntiCorruptionPlan/page', [AntiCorruptionPlanController::class, 'AntiCorruptionPlanPage'])->name('AntiCorruptionPlanPage');
Route::get('/AntiCorruptionPlan/show/details/{id}', [AntiCorruptionPlanController::class, 'AntiCorruptionPlanDertail'])->name('AntiCorruptionPlanDertail');

//แผนปฏิบัติการจัดซื้อจัดจ้าง
Route::get('/ProcurementActionPlan/page', [ProcurementActionPlanController::class, 'ProcurementActionPlanPage'])->name('ProcurementActionPlanPage');
Route::get('/ProcurementActionPlan/show/details/{id}', [ProcurementActionPlanController::class, 'ProcurementActionPlanDertail'])->name('ProcurementActionPlanDertail');

//แผนพัฒนาท้องถิ่น
Route::get('/LocalDevelopmentPlan/page', [LocalDevelopmentPlanController::class, 'LocalDevelopmentPlanPage'])->name('LocalDevelopmentPlanPage');
Route::get('/LocalDevelopmentPlan/show/details/{id}', [LocalDevelopmentPlanController::class, 'LocalDevelopmentPlanDertail'])->name('LocalDevelopmentPlanDertail');

//หนังสือข้าราชการ
Route::get('/CivilServantBook', [CivilServantBookController::class, 'CivilServantBook'])->name('CivilServantBook');
Route::get('/CivilServantBook/ShowDetails/{id}', [CivilServantBookController::class, 'CivilServantDetails'])->name('CivilServantDetails');

//กิจกรรม
Route::get('/Activity/ShowData', [ActivityController::class, 'ActivityShowData'])->name('ActivityShowData');
Route::get('/Activity/ShowDetails/{id}', [ActivityController::class, 'ActivityShowDetails'])->name('ActivityShowDetails');

//ประชาสัมพันธ์
Route::get('/PressRelease/ShowData', [PressReleaseController::class, 'PressReleaseShowData'])->name('PressReleaseShowData');
Route::get('/PressRelease/ShowDetails/{id}', [PressReleaseController::class, 'PressReleaseShowDetails'])->name('PressReleaseShowDetails');

//ชมรมผู้สูงอายุ
Route::get('/CitizensClub/ShowData', [CitizensClubController::class, 'CitizensClubShowData'])->name('CitizensClubShowData');
Route::get('/CitizensClub/ShowDetails/{id}', [CitizensClubController::class, 'CitizensClubShowDetails'])->name('CitizensClubShowDetails');

//สถานที่แนะนำ
Route::get('/RecommendedPlaces/ShowData', [RecommendedPlacesController::class, 'RecommendedPlacesShowData'])->name('RecommendedPlacesShowData');
Route::get('/RecommendedPlaces/ShowDetails/{id}', [RecommendedPlacesController::class, 'RecommendedPlacesShowDetails'])->name('RecommendedPlacesShowDetails');

//บุคลากร
Route::get('/Agency/page', [ShowDataAgencyController::class, 'PersonnelChart'])->name('PersonnelChart');
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

//นโยบายการบริหารทรัพยากรบุคคล
Route::get('/HRPolicy/page', [HRPolicyController::class, 'HRPolicyPage'])->name('HRPolicyPage');
Route::get('/HRPolicy/show/details/{id}', [HRPolicyController::class, 'HRPolicyShowDertailsPage'])->name('HRPolicyShowDertailsPage');
Route::get('/HRPolicy/show/details/results/{id}', [HRPolicyController::class, 'HRPolicyShowDertailResultsPage'])->name('HRPolicyShowDertailResultsPage');

//การดำเนินการตามนโยบายและการบริหารทรัพยากรบุคคล
Route::get('/HRPolicyManagement/page', [HRPolicyManagementController::class, 'HRPolicyManagementPage'])->name('HRPolicyManagementPage');
Route::get('/HRPolicyManagement/show/details/{id}', [HRPolicyManagementController::class, 'HRPolicyManagementShowDertailsPage'])->name('HRPolicyManagementShowDertailsPage');
Route::get('/HRPolicyManagement/show/details/results/{id}', [HRPolicyManagementController::class, 'HRPolicyManagementShowDertailResultsPage'])->name('HRPolicyManagementShowDertailResultsPage');

//หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล
Route::get('/HRManagementDevelopment/page', [HRManagementDevelopmentController::class, 'HRManagementDevelopmentPage'])->name('HRManagementDevelopmentPage');
Route::get('/HRManagementDevelopment/show/details/{id}', [HRManagementDevelopmentController::class, 'HRManagementDevelopmentShowDertailsPage'])->name('HRManagementDevelopmentShowDertailsPage');
Route::get('/HRManagementDevelopment/show/details/results/{id}', [HRManagementDevelopmentController::class, 'HRManagementDevelopmentShowDertailResultsPage'])->name('HRManagementDevelopmentShowDertailResultsPage');

//การปฏิบัติงาน
Route::get('/Operation/page', [OperationController::class, 'OperationPage'])->name('OperationPage');
Route::get('/Operation/show/details/{id}', [OperationController::class, 'OperationDertail'])->name('OperationDertail');

//มาตรการส่งเสริมความโปร่งใสและป้องกันการทุจริต
Route::get('/Transparency/page', [TransparencyController::class, 'TransparencyPage'])->name('TransparencyPage');
Route::get('/Transparency/show/details/{id}', [TransparencyController::class, 'TransparencyDertail'])->name('TransparencyDertail');

//รายงานแสดงฐานะการเงิน
Route::get('/FinancialStatement/page', [FinancialStatementController::class, 'FinancialStatementPage'])->name('FinancialStatementPage');
Route::get('/FinancialStatement/show/details/{id}', [FinancialStatementController::class, 'FinancialStatementDertail'])->name('FinancialStatementDertail');

//การลดขั้นตอนการปฏิบัติงาน
Route::get('/WorkProcedure/page', [WorkProcedureController::class, 'WorkProcedurePage'])->name('WorkProcedurePage');
Route::get('/WorkProcedure/show/details/{id}', [WorkProcedureController::class, 'WorkProcedureDertail'])->name('WorkProcedureDertail');

//ประมวลจริยธรรม
Route::get('/CodeofEthics/page', [WorkProcedureController::class, 'CodeofEthicsPage'])->name('CodeofEthicsPage');
Route::get('/CodeofEthics/show/details/{id}', [WorkProcedureController::class, 'CodeofEthicsDertail'])->name('CodeofEthicsDertail');

//รายงานผลการบริหารและพัฒนาทรัพยากรบุคคล
Route::get('/HRResultsReport/page', [HRResultsReportController::class, 'HRResultsReportPage'])->name('HRResultsReportPage');
Route::get('/HRResultsReport/show/details/{id}', [HRResultsReportController::class, 'HRResultsReportShowDertailsPage'])->name('HRResultsReportShowDertailsPage');
Route::get('/HRResultsReport/show/details/results/{id}', [HRResultsReportController::class, 'HRResultsReportShowDertailResultsPage'])->name('HRResultsReportShowDertailResultsPage');

//ป้ายประกาศ
Route::get('/NoticeBoard/ShowData', [NoticeBoardController::class, 'NoticeBoardShowData'])->name('NoticeBoardShowData');
Route::get('/NoticeBoard/ShowDetails/{id}', [NoticeBoardController::class, 'NoticeBoardShowDetails'])->name('NoticeBoardShowDetails');

//ข้อบัญญัติ
Route::get('/Canon/ShowData', [CanonController::class, 'CanonPage'])->name('CanonPage');
Route::get('/Canon/ShowDetails/{id}', [CanonController::class, 'CanonDertail'])->name('CanonDertail');

//รับเรื่องราวร้องทุกข์
Route::get('/ReceiveComplaints/form', [ReceiveComplaintsController::class, 'ReceiveComplaintsForm'])->name('ReceiveComplaintsForm');
Route::post('/ReceiveComplaints/form/create', [ReceiveComplaintsController::class, 'ReceiveComplaintsFormCreate'])->name('ReceiveComplaintsFormCreate');

//รับแจ้งร้องเรียนทุจริตประพฤติมิชอบ
Route::get('/Satisfaction/form', [SatisfactionController::class, 'SatisfactionForm'])->name('SatisfactionForm');

//ita
Route::get('/ita/page', [ITAController::class, 'itaPage'])->name('itaPage');

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

    //Operation
    Route::get('/Admin/Operation/page', [AdminOperationController::class, 'OperationAdmin'])->name('OperationAdmin');
    Route::post('/Admin/Operation/create', [AdminOperationController::class, 'OperationCreate'])->name('OperationCreate');
    Route::put('/Admin/Operation/{id}/update', [AdminOperationController::class, 'OperationUpdate'])->name('OperationUpdate');
    Route::delete('/Admin/Operation/{id}/delete', [AdminOperationController::class, 'OperationDelete'])->name('OperationDelete');
    Route::get('/Admin/Operation/show/details/{id}', [AdminOperationController::class, 'OperationShowDertails'])->name('OperationShowDertails');
    Route::post('/Admin/Operation/details/{id}/create', [AdminOperationController::class, 'OperationCreateFiles'])->name('OperationCreateFiles');

    //HRPolicy
    Route::get('/Admin/HRPolicy/page', [AdminHRPolicyController::class, 'HRPolicyAdmin'])->name('HRPolicyAdmin');
    Route::post('/Admin/HRPolicy/create', [AdminHRPolicyController::class, 'HRPolicyCreate'])->name('HRPolicyCreate');
    Route::put('/Admin/HRPolicy/{id}/update', [AdminHRPolicyController::class, 'HRPolicyUpdate'])->name('HRPolicyUpdate');
    Route::delete('/Admin/HRPolicy/{id}/delete', [AdminHRPolicyController::class, 'HRPolicyDelete'])->name('HRPolicyDelete');
    Route::get('/Admin/HRPolicy/show/details/{id}', [AdminHRPolicyController::class, 'HRPolicyShowDertails'])->name('HRPolicyShowDertails');
    Route::post('/Admin/HRPolicy/details/{id}/create', [AdminHRPolicyController::class, 'HRPolicyDertailsCreate'])->name('HRPolicyDertailsCreate');
    Route::put('/Admin/HRPolicy/details/{id}/update', [AdminHRPolicyController::class, 'HRPolicyDertailsUpdate'])->name('HRPolicyDertailsUpdate');
    Route::delete('/Admin/HRPolicy/details/{id}/delete', [AdminHRPolicyController::class, 'HRPolicyDertailsDelete'])->name('HRPolicyDertailsDelete');
    Route::get('/Admin/HRPolicy/show/details/results/{id}', [AdminHRPolicyController::class, 'HRPolicyShowDertailResults'])->name('HRPolicyShowDertailResults');
    Route::post('/Admin/HRPolicy/details/{id}/create/results', [AdminHRPolicyController::class, 'HRPolicyDertailsCreateResults'])->name('HRPolicyDertailsCreateResults');
    Route::delete('/Admin/HRPolicy/details/{id}/results/delete', [AdminHRPolicyController::class, 'HRPolicyDertailsDeleteResults'])->name('HRPolicyDertailsDeleteResults');

    //HRPolicyManagement
    Route::get('/Admin/HRPolicyManagement/page', [AdminHRPolicyManagementController::class, 'HRPolicyManagementAdmin'])->name('HRPolicyManagementAdmin');
    Route::post('/Admin/HRPolicyManagement/create', [AdminHRPolicyManagementController::class, 'HRPolicyManagementCreate'])->name('HRPolicyManagementCreate');
    Route::put('/Admin/HRPolicyManagement/{id}/update', [AdminHRPolicyManagementController::class, 'HRPolicyManagementUpdate'])->name('HRPolicyManagementUpdate');
    Route::delete('/Admin/HRPolicyManagement/{id}/delete', [AdminHRPolicyManagementController::class, 'HRPolicyManagementDelete'])->name('HRPolicyManagementDelete');
    Route::get('/Admin/HRPolicyManagement/show/details/{id}', [AdminHRPolicyManagementController::class, 'HRPolicyManagementShowDertails'])->name('HRPolicyManagementShowDertails');
    Route::post('/Admin/HRPolicyManagement/details/{id}/create', [AdminHRPolicyManagementController::class, 'HRPolicyManagementDertailsCreate'])->name('HRPolicyManagementDertailsCreate');
    Route::put('/Admin/HRPolicyManagement/details/{id}/update', [AdminHRPolicyManagementController::class, 'HRPolicyManagementDertailsUpdate'])->name('HRPolicyManagementDertailsUpdate');
    Route::delete('/Admin/HRPolicyManagement/details/{id}/delete', [AdminHRPolicyManagementController::class, 'HRPolicyManagementDertailsDelete'])->name('HRPolicyManagementDertailsDelete');
    Route::get('/Admin/HRPolicyManagement/show/details/results/{id}', [AdminHRPolicyManagementController::class, 'HRPolicyManagementShowDertailResults'])->name('HRPolicyManagementShowDertailResults');
    Route::post('/Admin/HRPolicyManagement/details/{id}/create/results', [AdminHRPolicyManagementController::class, 'HRPolicyManagementDertailsCreateResults'])->name('HRPolicyManagementDertailsCreateResults');
    Route::delete('/Admin/HRPolicyManagement/details/{id}/results/delete', [AdminHRPolicyManagementController::class, 'HRPolicyManagementDertailsDeleteResults'])->name('HRPolicyManagementDertailsDeleteResults');

    //HRManagementDevelopment
    Route::get('/Admin/HRManagementDevelopment/page', [AdminHRManagementDevelopmentController::class, 'HRManagementDevelopmentAdmin'])->name('HRManagementDevelopmentAdmin');
    Route::post('/Admin/HRManagementDevelopment/create', [AdminHRManagementDevelopmentController::class, 'HRManagementDevelopmentCreate'])->name('HRManagementDevelopmentCreate');
    Route::put('/Admin/HRManagementDevelopment/{id}/update', [AdminHRManagementDevelopmentController::class, 'HRManagementDevelopmentUpdate'])->name('HRManagementDevelopmentUpdate');
    Route::delete('/Admin/HRManagementDevelopment/{id}/delete', [AdminHRManagementDevelopmentController::class, 'HRManagementDevelopmentDelete'])->name('HRManagementDevelopmentDelete');
    Route::get('/Admin/HRManagementDevelopment/show/details/{id}', [AdminHRManagementDevelopmentController::class, 'HRManagementDevelopmentShowDertails'])->name('HRManagementDevelopmentShowDertails');
    Route::post('/Admin/HRManagementDevelopment/details/{id}/create', [AdminHRManagementDevelopmentController::class, 'HRManagementDevelopmentDertailsCreate'])->name('HRManagementDevelopmentDertailsCreate');
    Route::put('/Admin/HRManagementDevelopment/details/{id}/update', [AdminHRManagementDevelopmentController::class, 'HRManagementDevelopmentDertailsUpdate'])->name('HRManagementDevelopmentDertailsUpdate');
    Route::delete('/Admin/HRManagementDevelopment/details/{id}/delete', [AdminHRManagementDevelopmentController::class, 'HRManagementDevelopmentDertailsDelete'])->name('HRManagementDevelopmentDertailsDelete');
    Route::get('/Admin/HRManagementDevelopment/show/details/results/{id}', [AdminHRManagementDevelopmentController::class, 'HRManagementDevelopmentShowDertailResults'])->name('HRManagementDevelopmentShowDertailResults');
    Route::post('/Admin/HRManagementDevelopment/details/{id}/create/results', [AdminHRManagementDevelopmentController::class, 'HRManagementDevelopmentDertailsCreateResults'])->name('HRManagementDevelopmentDertailsCreateResults');
    Route::delete('/Admin/HRManagementDevelopment/details/{id}/results/delete', [AdminHRManagementDevelopmentController::class, 'HRManagementDevelopmentDertailsDeleteResults'])->name('HRManagementDevelopmentDertailsDeleteResults');

    //HRResultsReport
    Route::get('/Admin/HRResultsReport/page', [AdminHRResultsReportController::class, 'HRResultsReportAdmin'])->name('HRResultsReportAdmin');
    Route::post('/Admin/HRResultsReport/create', [AdminHRResultsReportController::class, 'HRResultsReportCreate'])->name('HRResultsReportCreate');
    Route::put('/Admin/HRResultsReport/{id}/update', [AdminHRResultsReportController::class, 'HRResultsReportUpdate'])->name('HRResultsReportUpdate');
    Route::delete('/Admin/HRResultsReport/{id}/delete', [AdminHRResultsReportController::class, 'HRResultsReportDelete'])->name('HRResultsReportDelete');
    Route::get('/Admin/HRResultsReport/show/details/{id}', [AdminHRResultsReportController::class, 'HRResultsReportShowDertails'])->name('HRResultsReportShowDertails');
    Route::post('/Admin/HRResultsReport/details/{id}/create', [AdminHRResultsReportController::class, 'HRResultsReportDertailsCreate'])->name('HRResultsReportDertailsCreate');
    Route::put('/Admin/HRResultsReport/details/{id}/update', [AdminHRResultsReportController::class, 'HRResultsReportDertailsUpdate'])->name('HRResultsReportDertailsUpdate');
    Route::delete('/Admin/HRResultsReport/details/{id}/delete', [AdminHRResultsReportController::class, 'HRResultsReportDertailsDelete'])->name('HRResultsReportDertailsDelete');
    Route::get('/Admin/HRResultsReport/show/details/results/{id}', [AdminHRResultsReportController::class, 'HRResultsReportShowDertailResults'])->name('HRResultsReportShowDertailResults');
    Route::post('/Admin/HRResultsReport/details/{id}/create/results', [AdminHRResultsReportController::class, 'HRResultsReportDertailsCreateResults'])->name('HRResultsReportDertailsCreateResults');
    Route::delete('/Admin/HRResultsReport/details/{id}/results/delete', [AdminHRResultsReportController::class, 'HRResultsReportDertailsDeleteResults'])->name('HRResultsReportDertailsDeleteResults');

    //Transparency
    Route::get('/Admin/Transparency/page', [AdminTransparencyController::class, 'TransparencyAdmin'])->name('TransparencyAdmin');
    Route::post('/Admin/Transparency/create', [AdminTransparencyController::class, 'TransparencyCreate'])->name('TransparencyCreate');
    Route::put('/Admin/Transparency/{id}/update', [AdminTransparencyController::class, 'TransparencyUpdate'])->name('TransparencyUpdate');
    Route::delete('/Admin/Transparency/{id}/delete', [AdminTransparencyController::class, 'TransparencyDelete'])->name('TransparencyDelete');
    Route::get('/Admin/Transparency/show/details/{id}', [AdminTransparencyController::class, 'TransparencyShowDertails'])->name('TransparencyShowDertails');
    Route::post('/Admin/Transparency/details/{id}/create', [AdminTransparencyController::class, 'TransparencyCreateFiles'])->name('TransparencyCreateFiles');
    Route::delete('/Admin/Transparency/details/{id}/delete', [AdminTransparencyController::class, 'TransparencyDertailsDelete'])->name('TransparencyDertailsDelete');

    //FinancialStatement
    Route::get('/Admin/FinancialStatement/page', [AdminFinancialStatementController::class, 'FinancialStatementAdmin'])->name('FinancialStatementAdmin');
    Route::post('/Admin/FinancialStatement/create', [AdminFinancialStatementController::class, 'FinancialStatementCreate'])->name('FinancialStatementCreate');
    Route::put('/Admin/FinancialStatement/{id}/update', [AdminFinancialStatementController::class, 'FinancialStatementUpdate'])->name('FinancialStatementUpdate');
    Route::delete('/Admin/FinancialStatement/{id}/delete', [AdminFinancialStatementController::class, 'FinancialStatementDelete'])->name('FinancialStatementDelete');
    Route::get('/Admin/FinancialStatement/show/details/{id}', [AdminFinancialStatementController::class, 'FinancialStatementShowDertails'])->name('FinancialStatementShowDertails');
    Route::post('/Admin/FinancialStatement/details/{id}/create', [AdminFinancialStatementController::class, 'FinancialStatementCreateFiles'])->name('FinancialStatementCreateFiles');
    Route::delete('/Admin/FinancialStatement/details/{id}/delete', [AdminFinancialStatementController::class, 'FinancialStatementDertailsDelete'])->name('FinancialStatementDertailsDelete');

    //WorkProcedure
    Route::get('/Admin/WorkProcedure/page', [AdminWorkProcedureController::class, 'WorkProcedureAdmin'])->name('WorkProcedureAdmin');
    Route::post('/Admin/WorkProcedure/create', [AdminWorkProcedureController::class, 'WorkProcedureCreate'])->name('WorkProcedureCreate');
    Route::put('/Admin/WorkProcedure/{id}/update', [AdminWorkProcedureController::class, 'WorkProcedureUpdate'])->name('WorkProcedureUpdate');
    Route::delete('/Admin/WorkProcedure/{id}/delete', [AdminWorkProcedureController::class, 'WorkProcedureDelete'])->name('WorkProcedureDelete');
    Route::get('/Admin/WorkProcedure/show/details/{id}', [AdminWorkProcedureController::class, 'WorkProcedureShowDertails'])->name('WorkProcedureShowDertails');
    Route::post('/Admin/WorkProcedure/details/{id}/create', [AdminWorkProcedureController::class, 'WorkProcedureCreateFiles'])->name('WorkProcedureCreateFiles');
    Route::delete('/Admin/WorkProcedure/details/{id}/delete', [AdminWorkProcedureController::class, 'WorkProcedureDertailsDelete'])->name('WorkProcedureDertailsDelete');

    //CodeofEthics
    Route::get('/Admin/CodeofEthics/page', [AdminCodeofEthicsController::class, 'CodeofEthicsAdmin'])->name('CodeofEthicsAdmin');
    Route::post('/Admin/CodeofEthics/create', [AdminCodeofEthicsController::class, 'CodeofEthicsCreate'])->name('CodeofEthicsCreate');
    Route::put('/Admin/CodeofEthics/{id}/update', [AdminCodeofEthicsController::class, 'CodeofEthicsUpdate'])->name('CodeofEthicsUpdate');
    Route::delete('/Admin/CodeofEthics/{id}/delete', [AdminCodeofEthicsController::class, 'CodeofEthicsDelete'])->name('CodeofEthicsDelete');
    Route::get('/Admin/CodeofEthics/show/details/{id}', [AdminCodeofEthicsController::class, 'CodeofEthicsShowDertails'])->name('CodeofEthicsShowDertails');
    Route::post('/Admin/CodeofEthics/details/{id}/create', [AdminCodeofEthicsController::class, 'CodeofEthicsCreateFiles'])->name('CodeofEthicsCreateFiles');
    Route::delete('/Admin/CodeofEthics/details/{id}/delete', [AdminCodeofEthicsController::class, 'CodeofEthicsDertailsDelete'])->name('CodeofEthicsDertailsDelete');

    //admin NoticeBoard
    Route::get('/Admin/NoticeBoard/page', [NoticeBoardController::class, 'NoticeBoardAdmin'])->name('NoticeBoardAdmin');
    Route::post('/Admin/NoticeBoard/create', [NoticeBoardController::class, 'NoticeBoardCreate'])->name('NoticeBoardCreate');
    Route::delete('/Admin/NoticeBoard/delete{id}', [NoticeBoardController::class, 'NoticeBoardDelete'])->name('NoticeBoardDelete');

    //CitizensClub
    Route::get('/CitizensClub/page', [CitizensClubController::class, 'CitizensClubPage'])->name('CitizensClubPage');
    Route::post('/CitizensClub/create', [CitizensClubController::class, 'CitizensClubCreate'])->name('CitizensClubCreate');
    Route::delete('/CitizensClub/delete/{id}', [CitizensClubController::class, 'CitizensClubDelete'])->name('CitizensClubDelete');
    Route::put('/CitizensClub/update/{id}', [CitizensClubController::class, 'CitizensClubUpdate'])->name('CitizensClubUpdate');

    //AnnualActionPlan
    Route::get('/Admin/AnnualActionPlan/page', [AdminAnnualActionPlanController::class, 'AnnualActionPlanAdmin'])->name('AnnualActionPlanAdmin');
    Route::post('/Admin/AnnualActionPlan/create', [AdminAnnualActionPlanController::class, 'AnnualActionPlanCreate'])->name('AnnualActionPlanCreate');
    Route::put('/Admin/AnnualActionPlan/{id}/update', [AdminAnnualActionPlanController::class, 'AnnualActionPlanUpdate'])->name('AnnualActionPlanUpdate');
    Route::delete('/Admin/AnnualActionPlan/{id}/delete', [AdminAnnualActionPlanController::class, 'AnnualActionPlanDelete'])->name('AnnualActionPlanDelete');
    Route::get('/Admin/AnnualActionPlan/show/details/{id}', [AdminAnnualActionPlanController::class, 'AnnualActionPlanShowDertails'])->name('AnnualActionPlanShowDertails');
    Route::post('/Admin/AnnualActionPlan/details/{id}/create', [AdminAnnualActionPlanController::class, 'AnnualActionPlanCreateFiles'])->name('AnnualActionPlanCreateFiles');
    Route::delete('/Admin/AnnualActionPlan/details/{id}/delete', [AdminAnnualActionPlanController::class, 'AnnualActionPlanDertailsDelete'])->name('AnnualActionPlanDertailsDelete');

    //ManpowerPlan
    Route::get('/Admin/ManpowerPlan/page', [AdminManpowerPlanController::class, 'ManpowerPlanAdmin'])->name('ManpowerPlanAdmin');
    Route::post('/Admin/ManpowerPlan/create', [AdminManpowerPlanController::class, 'ManpowerPlanCreate'])->name('ManpowerPlanCreate');
    Route::put('/Admin/ManpowerPlan/{id}/update', [AdminManpowerPlanController::class, 'ManpowerPlanUpdate'])->name('ManpowerPlanUpdate');
    Route::delete('/Admin/ManpowerPlan/{id}/delete', [AdminManpowerPlanController::class, 'ManpowerPlanDelete'])->name('ManpowerPlanDelete');
    Route::get('/Admin/ManpowerPlan/show/details/{id}', [AdminManpowerPlanController::class, 'ManpowerPlanShowDertails'])->name('ManpowerPlanShowDertails');
    Route::post('/Admin/ManpowerPlan/details/{id}/create', [AdminManpowerPlanController::class, 'ManpowerPlanCreateFiles'])->name('ManpowerPlanCreateFiles');
    Route::delete('/Admin/ManpowerPlan/details/{id}/delete', [AdminManpowerPlanController::class, 'ManpowerPlanDertailsDelete'])->name('ManpowerPlanDertailsDelete');

    //OperationalPlan
    Route::get('/Admin/OperationalPlan/page', [AdminOperationalPlanController::class, 'OperationalPlanAdmin'])->name('OperationalPlanAdmin');
    Route::post('/Admin/OperationalPlan/create', [AdminOperationalPlanController::class, 'OperationalPlanCreate'])->name('OperationalPlanCreate');
    Route::put('/Admin/OperationalPlan/{id}/update', [AdminOperationalPlanController::class, 'OperationalPlanUpdate'])->name('OperationalPlanUpdate');
    Route::delete('/Admin/OperationalPlan/{id}/delete', [AdminOperationalPlanController::class, 'OperationalPlanDelete'])->name('OperationalPlanDelete');
    Route::get('/Admin/OperationalPlan/show/details/{id}', [AdminOperationalPlanController::class, 'OperationalPlanShowDertails'])->name('OperationalPlanShowDertails');
    Route::post('/Admin/OperationalPlan/details/{id}/create', [AdminOperationalPlanController::class, 'OperationalPlanCreateFiles'])->name('OperationalPlanCreateFiles');
    Route::delete('/Admin/OperationalPlan/details/{id}/delete', [AdminOperationalPlanController::class, 'OperationalPlanDertailsDelete'])->name('OperationalPlanDertailsDelete');

    //AntiCorruptionPlan
    Route::get('/Admin/AntiCorruptionPlan/page', [AdminAntiCorruptionPlanController::class, 'AntiCorruptionPlanAdmin'])->name('AntiCorruptionPlanAdmin');
    Route::post('/Admin/AntiCorruptionPlan/create', [AdminAntiCorruptionPlanController::class, 'AntiCorruptionPlanCreate'])->name('AntiCorruptionPlanCreate');
    Route::put('/Admin/AntiCorruptionPlan/{id}/update', [AdminAntiCorruptionPlanController::class, 'AntiCorruptionPlanUpdate'])->name('AntiCorruptionPlanUpdate');
    Route::delete('/Admin/AntiCorruptionPlan/{id}/delete', [AdminAntiCorruptionPlanController::class, 'AntiCorruptionPlanDelete'])->name('AntiCorruptionPlanDelete');
    Route::get('/Admin/AntiCorruptionPlan/show/details/{id}', [AdminAntiCorruptionPlanController::class, 'AntiCorruptionPlanShowDertails'])->name('AntiCorruptionPlanShowDertails');
    Route::post('/Admin/AntiCorruptionPlan/details/{id}/create', [AdminAntiCorruptionPlanController::class, 'AntiCorruptionPlanCreateFiles'])->name('AntiCorruptionPlanCreateFiles');
    Route::delete('/Admin/AntiCorruptionPlan/details/{id}/delete', [AdminAntiCorruptionPlanController::class, 'AntiCorruptionPlanDertailsDelete'])->name('AntiCorruptionPlanDertailsDelete');

    //ProcurementAction
    Route::get('/Admin/ProcurementAction/page', [AdminProcurementActionPlanController::class, 'ProcurementActionPlanAdmin'])->name('ProcurementActionPlanAdmin');
    Route::post('/Admin/ProcurementActionPlan/create', [AdminProcurementActionPlanController::class, 'ProcurementActionPlanCreate'])->name('ProcurementActionPlanCreate');
    Route::put('/Admin/ProcurementActionPlan/{id}/update', [AdminProcurementActionPlanController::class, 'ProcurementActionPlanUpdate'])->name('ProcurementActionPlanUpdate');
    Route::delete('/Admin/ProcurementActionPlan/{id}/delete', [AdminProcurementActionPlanController::class, 'ProcurementActionPlanDelete'])->name('ProcurementActionPlanDelete');
    Route::get('/Admin/ProcurementActionPlan/show/details/{id}', [AdminProcurementActionPlanController::class, 'ProcurementActionPlanShowDertails'])->name('ProcurementActionPlanShowDertails');
    Route::post('/Admin/ProcurementActionPlan/details/{id}/create', [AdminProcurementActionPlanController::class, 'ProcurementActionPlanCreateFiles'])->name('ProcurementActionPlanCreateFiles');
    Route::delete('/Admin/ProProcurementActionPlan/details/{id}/delete', [AdminProcurementActionPlanController::class, 'ProcurementActionPlanDertailsDelete'])->name('ProcurementActionPlanDertailsDelete');

    //LocalDevelopmentPlan
    Route::get('/Admin/LocalDevelopmentPlan/page', [AdminLocalDevelopmentPlanController::class, 'LocalDevelopmentPlanAdmin'])->name('LocalDevelopmentPlanAdmin');
    Route::post('/Admin/LocalDevelopmentPlan/create', [AdminLocalDevelopmentPlanController::class, 'LocalDevelopmentPlanCreate'])->name('LocalDevelopmentPlanCreate');
    Route::put('/Admin/LocalDevelopmentPlan/{id}/update', [AdminLocalDevelopmentPlanController::class, 'LocalDevelopmentPlanUpdate'])->name('LocalDevelopmentPlanUpdate');
    Route::delete('/Admin/LocalDevelopmentPlan/{id}/delete', [AdminLocalDevelopmentPlanController::class, 'LocalDevelopmentPlanDelete'])->name('LocalDevelopmentPlanDelete');
    Route::get('/Admin/LocalDevelopmentPlan/show/details/{id}', [AdminLocalDevelopmentPlanController::class, 'LocalDevelopmentPlanShowDertails'])->name('LocalDevelopmentPlanShowDertails');
    Route::post('/Admin/LocalDevelopmentPlan/details/{id}/create', [AdminLocalDevelopmentPlanController::class, 'LocalDevelopmentPlanCreateFiles'])->name('LocalDevelopmentPlanCreateFiles');
    Route::delete('/Admin/LocalDevelopmentPlan/details/{id}/delete', [AdminLocalDevelopmentPlanController::class, 'LocalDevelopmentPlanDertailsDelete'])->name('LocalDevelopmentPlanDertailsDelete');

    //Canon
    Route::get('/Admin/Canon/page', [AdminCanonController::class, 'CanonAdmin'])->name('CanonAdmin');
    Route::post('/Admin/Canon/create', [AdminCanonController::class, 'CanonCreate'])->name('CanonCreate');
    Route::put('/Admin/Canon/{id}/update', [AdminCanonController::class, 'CanonUpdate'])->name('CanonUpdate');
    Route::delete('/Admin/Canon/{id}/delete', [AdminCanonController::class, 'CanonDelete'])->name('CanonDelete');
    Route::get('/Admin/Canon/show/details/{id}', [AdminCanonController::class, 'CanonShowDertails'])->name('CanonShowDertails');
    Route::post('/Admin/Canon/details/{id}/create', [AdminCanonController::class, 'CanonCreateFiles'])->name('CanonCreateFiles');
    Route::delete('/Admin/Canon/details/{id}/delete', [AdminCanonController::class, 'CanonDertailsDelete'])->name('CanonDertailsDelete');

    //ITA
    Route::get('/Admin/ITA/type/page', [AdminITAController::class, 'AdminITAType'])->name('AdminITAType');
    Route::post('/Admin/ITA/type/create', [AdminITAController::class, 'ITATypeCreate'])->name('ITATypeCreate');
    Route::put('/Admin/ITA/type/update/{id}', [AdminITAController::class, 'ITATypeUpdate'])->name('ITATypeUpdate');
    Route::delete('/Admin/ITA/type/delete/{id}', [AdminITAController::class, 'ITATypeDelete'])->name('ITATypeDelete');

    Route::get('/Admin/ITA/type/detail/page/{id}', [AdminITAController::class, 'AdminITA'])->name('AdminITA');
    Route::post('/Admin/ITA/create/{id}', [AdminITAController::class, 'ITACreate'])->name('ITACreate');
    Route::put('/Admin/ITA/update/{id}', [AdminITAController::class, 'ITAUpdate'])->name('ITAUpdate');
    Route::delete('/Admin/ITA/delete/{id}', [AdminITAController::class, 'ITADelete'])->name('ITADelete');
    Route::delete('iTALink/{id}', [AdminITAController::class, 'destroy'])->name('ITAlink.destroy');

    //MenuForPublic
    Route::get('/Admin/WebIntro/page', [AdminWebIntroController::class, 'AdminWebIntro'])->name('AdminWebIntro');
    Route::post('/Admin/WebIntro/create', [AdminWebIntroController::class, 'WebIntroCreate'])->name('WebIntroCreate');
    Route::delete('/Admin/WebIntro/delete/{id}', [AdminWebIntroController::class, 'WebIntroDelete'])->name('WebIntroDelete');
});

Route::get('/showLoginForm', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [AuthController::class, 'login'])->name('Login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/showRegistrationForm', [AuthController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/visitor-stats', [VisitorsController::class, 'getVisitorStats']);
