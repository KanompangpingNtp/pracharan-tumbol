<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\ListDetail;
use App\Models\BasicInfoType;

class AuthorityController extends Controller
{
    public function  AuthorityPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $basicInfoType = BasicInfoType::all();
        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'อำนาจหน้าที่')->id;
        $listDetail = ListDetail::with('type', 'images')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('basic_information.authority.page', compact('personnelAgencies', 'listDetail', 'basicInfoType'));
    }

    public function AuthorityShowDetails($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $listDetail = ListDetail::with('images')->findOrFail($id);

        // ส่งข้อมูลไปยังหน้า view
        return view('basic_information.authority.show_details', compact('listDetail','personnelAgencies'));
    }
}
