<?php

namespace App\Http\Controllers\menu_for_public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\FormDetails;
use App\Models\FormFiles;
use App\Models\FormType;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class SatisfactionController extends Controller
{
    public function SatisfactionForm ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $formTypes = FormType::all();

        $formTypesId = $formTypes->firstWhere('type_name', 'รับแจ้งร้องเรียนทุจริตประพฤติมิชอบ')->id;

        // dd($formTypesId);

        return view('pages.menu_for_public.survey.page_form',compact('personnelAgencies','formTypes'));
    }
}
