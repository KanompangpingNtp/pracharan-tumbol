<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonnelAgency;

class FeaturedVideoController extends Controller
{
    public function FeaturedVideoData ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.featured_video.show_data',compact('personnelAgencies'));
    }
}
