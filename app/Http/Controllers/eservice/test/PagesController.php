<?php

namespace App\Http\Controllers\eservice\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;

class PagesController extends Controller
{
    public function Eservice ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.eservice.page',compact('personnelAgencies'));
    }

    public function page1 ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.eservice.test.page1',compact('personnelAgencies'));
    }

    public function page2 ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.eservice.test.page2',compact('personnelAgencies'));
    }

    public function page3 ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.eservice.test.page3',compact('personnelAgencies'));
    }

    public function page4 ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.eservice.test.page4',compact('personnelAgencies'));
    }

    public function page5 ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.eservice.test.page5',compact('personnelAgencies'));
    }

    public function page6 ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.eservice.test.page6',compact('personnelAgencies'));
    }

    public function page7 ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.eservice.test.page7',compact('personnelAgencies'));
    }

    public function page8 ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.eservice.test.page8',compact('personnelAgencies'));
    }

    public function page9 ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.eservice.test.page9',compact('personnelAgencies'));
    }

    public function page10 ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.eservice.test.page10',compact('personnelAgencies'));
    }
}
