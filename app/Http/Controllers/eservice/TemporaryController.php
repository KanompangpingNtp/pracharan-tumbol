<?php

namespace App\Http\Controllers\eservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;

class TemporaryController extends Controller
{
    public function EserviceUserAccount()
    {
        return view('eservice.users.page');
    }

    public function EserviceAdminAccount()
    {
        return view('eservice.admin.page');
    }

    public function Eservice ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.eservice.page',compact('personnelAgencies'));
    }
}
