<?php

namespace App\Http\Controllers\performance_results;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PersonnelAgency;
use App\Models\PerfSingleTopic;

class TransparencyController extends Controller
{
    public function TransparencyPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'มาตรการส่งเสริมความโปร่งใสและป้องกันการทุจริต')->id;
        $PerfSingleTopic = PerfSingleTopic::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('performance_results.transparency.page',compact('personnelAgencies','PerfSingleTopic','perfResultsType'));
    }

    public function TransparencyDertail($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfSingleTopic = PerfSingleTopic::with('files')->findOrFail($id);

        return view('performance_results.transparency.show_details', compact('PerfSingleTopic','personnelAgencies'));
    }
}
