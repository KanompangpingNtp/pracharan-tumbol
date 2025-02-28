<?php

namespace App\Http\Controllers\local_development_plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PersonnelAgency;
use App\Models\PerfSingleTopic;

class ManpowerPlanController extends Controller
{
    public function ManpowerPlanPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'แผนอัตรากำลัง')->id;
        $PerfSingleTopic = PerfSingleTopic::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('local_development_plan.manpower_plan.page',compact('personnelAgencies','PerfSingleTopic','perfResultsType'));
    }

    public function ManpowerPlanDertail($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfSingleTopic = PerfSingleTopic::with('files')->findOrFail($id);

        return view('local_development_plan.manpower_plan.show_details', compact('PerfSingleTopic','personnelAgencies'));
    }
}
