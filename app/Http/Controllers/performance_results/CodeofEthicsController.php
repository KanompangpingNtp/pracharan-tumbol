<?php

namespace App\Http\Controllers\performance_results;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PersonnelAgency;
use App\Models\PerfSingleTopic;

class CodeofEthicsController extends Controller
{
    public function CodeofEthicsPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'ประมวลจริยธรรม')->id;
        $PerfSingleTopic = PerfSingleTopic::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('performance_results.code_ethics.page',compact('personnelAgencies','PerfSingleTopic','perfResultsType'));
    }

    public function CodeofEthicsDertail($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfSingleTopic = PerfSingleTopic::with('files')->findOrFail($id);

        return view('performance_results.code_ethics.show_details', compact('PerfSingleTopic','personnelAgencies'));
    }
}
