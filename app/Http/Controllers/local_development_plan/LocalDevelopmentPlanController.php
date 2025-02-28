<?php

namespace App\Http\Controllers\local_development_plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PersonnelAgency;
use App\Models\PerfSingleTopic;

class LocalDevelopmentPlanController extends Controller
{
    public function LocalDevelopmentPlanPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'แผนพัฒนาท้องถิ่น')->id;
        $PerfSingleTopic = PerfSingleTopic::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('local_development_plan.local_development.page',compact('personnelAgencies','PerfSingleTopic','perfResultsType'));
    }

    public function LocalDevelopmentPlanDertail($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfSingleTopic = PerfSingleTopic::with('files')->findOrFail($id);

        return view('local_development_plan.local_development.show_details', compact('PerfSingleTopic','personnelAgencies'));
    }
}
