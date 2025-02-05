<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonnelAgency;

class ShowDataAgencyController extends Controller
{
    public function layout()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('layout.components.header', compact('personnelAgencies'));
    }

    public function AgencyShow ($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $agency = PersonnelAgency::with('ranks.details.images')->findOrFail($id);

        return view('agency.show', compact('agency','personnelAgencies'));
    }
}
