<?php

namespace App\Http\Controllers\local_development_plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PersonnelAgency;
use App\Models\PerfSingleTopic;

class ProcurementActionPlanController extends Controller
{
    public function ProcurementActionPlanPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'แผนปฏิบัติการจัดซื้อจัดจ้าง')->id;
        $PerfSingleTopic = PerfSingleTopic::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('local_development_plan.procurement_plans.page',compact('personnelAgencies','PerfSingleTopic','perfResultsType'));
    }

    public function ProcurementActionPlanDertail($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfSingleTopic = PerfSingleTopic::with('files')->findOrFail($id);

        return view('local_development_plan.procurement_plans.show_details', compact('PerfSingleTopic','personnelAgencies'));
    }
}
