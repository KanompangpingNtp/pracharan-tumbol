<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonnelAgency;

class PersonnelAgencyController extends Controller
{
    //
    public function show($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $agency = PersonnelAgency::with('ranks.details.images')->findOrFail($id);

        return view('agency.show', compact('agency','personnelAgencies'));
    }
}
