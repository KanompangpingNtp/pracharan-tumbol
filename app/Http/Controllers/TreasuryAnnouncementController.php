<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\PostDetail;

class TreasuryAnnouncementController extends Controller
{
    public function TreasuryAnnouncementData()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.treasury_announcement.show_data', compact('personnelAgencies'));
    }
}
