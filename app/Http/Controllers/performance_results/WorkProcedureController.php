<?php

namespace App\Http\Controllers\performance_results;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PersonnelAgency;
use App\Models\PerfSingleTopic;

class WorkProcedureController extends Controller
{
    public function WorkProcedurePage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'การลดขั้นตอนการปฏิบัติงาน')->id;
        $PerfSingleTopic = PerfSingleTopic::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('performance_results.work_procedure.page',compact('personnelAgencies','PerfSingleTopic','perfResultsType'));
    }

    public function WorkProcedureDertail($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfSingleTopic = PerfSingleTopic::with('files')->findOrFail($id);

        return view('performance_results.work_procedure.show_details', compact('PerfSingleTopic','personnelAgencies'));
    }
}
