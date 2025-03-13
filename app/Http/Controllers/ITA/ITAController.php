<?php

namespace App\Http\Controllers\ITA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\ITAType;
use App\Models\PerfResultsType;

class ITAController extends Controller
{
    public function itaPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();
        $PerfResultsMenu = PerfResultsType::all();

        $showITA = ITAType::with('itADetails.iTALinks')->get();

        return view('pages.ita.page', compact(
            'personnelAgencies',
            'PerfResultsMenu',
            'showITA',
        ));
    }
}
