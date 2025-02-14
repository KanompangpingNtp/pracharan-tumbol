<?php

namespace App\Http\Controllers\performance_results;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PerfSingleTopicFile;
use App\Models\PersonnelAgency;

class OperationController extends Controller
{
    public function OperationPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();

        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'การปฏิบัติงาน')->id;

        $PerfSingleTopicFiles = PerfSingleTopicFile::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('performance_results.operation.page', compact('PerfSingleTopicFiles', 'perfResultsType','personnelAgencies'));
    }
}
