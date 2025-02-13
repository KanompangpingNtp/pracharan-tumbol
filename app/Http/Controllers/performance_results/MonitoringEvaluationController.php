<?php

namespace App\Http\Controllers\performance_results;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\PerfResultsDetail;
use App\Models\PerfResultsType;
use App\Models\PerfResultsMinorDetail;

class MonitoringEvaluationController extends Controller
{
    public function  MonitoringEvaluationPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'รายงานการติดตามและประเมิน')->id;
        $PerfResultsDetail = PerfResultsDetail::with('type')
            ->where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('performance_results.monitoring_evaluation.page',compact('personnelAgencies','PerfResultsDetail','perfResultsType'));
    }

    public function MonitoringEvaluationShowDertailsPage($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfResultsDetail = PerfResultsDetail::findOrFail($id);
        $PerfResultsMinorDetail = PerfResultsMinorDetail::where('perf_results_detail_id', $id)->get();

        return view('performance_results.monitoring_evaluation.show_detail', compact('PerfResultsDetail', 'PerfResultsMinorDetail','personnelAgencies'));
    }

    public function MonitoringEvaluationShowDertailResultsPage($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfResultsMinorDetail = PerfResultsMinorDetail::with('files')->findOrFail($id);

        return view('performance_results.monitoring_evaluation.show_detail_results', compact('PerfResultsMinorDetail','personnelAgencies'));
    }
}
