<?php

namespace App\Http\Controllers\performance_results;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PersonnelAgency;
use App\Models\PerfSingleTopic;

class FinancialStatementController extends Controller
{
    public function FinancialStatementPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'รายงานแสดงฐานะการเงิน')->id;
        $PerfSingleTopic = PerfSingleTopic::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('performance_results.financial_statement.page',compact('personnelAgencies','PerfSingleTopic','perfResultsType'));
    }

    public function FinancialStatementDertail($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfSingleTopic = PerfSingleTopic::with('files')->findOrFail($id);

        return view('performance_results.financial_statement.show_details', compact('PerfSingleTopic','personnelAgencies'));
    }
}
