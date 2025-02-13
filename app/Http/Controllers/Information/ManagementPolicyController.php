<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\ListDetail;
use App\Models\BasicInfoType;

class ManagementPolicyController extends Controller
{
    public function ManagementPolicyPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $basicInfoType = BasicInfoType::all();
        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'นโยบายการบริหาร/เจตจำนงสุจริต')->id;
        $listDetail = ListDetail::with('type', 'images')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('basic_information.management_policy.page', compact('personnelAgencies', 'listDetail', 'basicInfoType'));
    }

    public function ManagementPolicyShowDetails($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $listDetail = ListDetail::with('images')->findOrFail($id);

        // ส่งข้อมูลไปยังหน้า view
        return view('basic_information.management_policy.show_details', compact('listDetail','personnelAgencies'));
    }
}
