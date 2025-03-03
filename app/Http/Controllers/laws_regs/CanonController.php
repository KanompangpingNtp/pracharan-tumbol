<?php

namespace App\Http\Controllers\laws_regs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PersonnelAgency;
use App\Models\PerfSingleTopic;

class CanonController extends Controller
{
    public function CanonPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'ข้อบัญญัติ')->id;
        $PerfSingleTopic = PerfSingleTopic::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('laws_regs.canon.page',compact('personnelAgencies','PerfSingleTopic','perfResultsType'));
    }

    public function CanonDertail($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfSingleTopic = PerfSingleTopic::with('files')->findOrFail($id);

        return view('laws_regs.canon.show_details', compact('PerfSingleTopic','personnelAgencies'));
    }
}
