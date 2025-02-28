<?php

namespace App\Http\Controllers\local_development_plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PersonnelAgency;
use App\Models\PerfSingleTopic;

class AntiCorruptionPlanController extends Controller
{
    public function AntiCorruptionPlanPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'แผนงานป้องกันการทุจริต')->id;
        $PerfSingleTopic = PerfSingleTopic::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('local_development_plan.anti_corruption_plans.page',compact('personnelAgencies','PerfSingleTopic','perfResultsType'));
    }

    public function AntiCorruptionPlanDertail($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfSingleTopic = PerfSingleTopic::with('files')->findOrFail($id);

        return view('local_development_plan.anti_corruption_plans.show_details', compact('PerfSingleTopic','personnelAgencies'));
    }
}
