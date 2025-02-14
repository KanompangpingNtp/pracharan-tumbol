<?php

namespace App\Http\Controllers\performance_results;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\PerfResultsDetail;
use App\Models\PerfResultsType;
use App\Models\PerfResultsMinorDetail;

class HRManagementDevelopmentController extends Controller
{
    public function  HRManagementDevelopmentPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล')->id;
        $PerfResultsDetail = PerfResultsDetail::with('type')
            ->where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('performance_results.hrmanagement_development.page',compact('personnelAgencies','PerfResultsDetail','perfResultsType'));
    }

    public function HRManagementDevelopmentShowDertailsPage($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfResultsDetail = PerfResultsDetail::findOrFail($id);
        $PerfResultsMinorDetail = PerfResultsMinorDetail::where('perf_results_detail_id', $id)->get();

        return view('performance_results.hrmanagement_development.show_detail', compact('PerfResultsDetail', 'PerfResultsMinorDetail','personnelAgencies'));
    }

    public function HRManagementDevelopmentShowDertailResultsPage($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $PerfResultsMinorDetail = PerfResultsMinorDetail::with('files')->findOrFail($id);

        return view('performance_results.hrmanagement_development.show_detail_results', compact('PerfResultsMinorDetail','personnelAgencies'));
    }

}
