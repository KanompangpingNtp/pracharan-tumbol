<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\BasicInfoDetail;
use App\Models\BasicInfoType;

class GeneralInformationController extends Controller
{
    public function  GeneralInformationPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $basicInfoType = BasicInfoType::all();
        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'ข้อมูลสภาพทั่วไป')->id;
        $basicInfoDetail = BasicInfoDetail::with('type', 'images', 'pdf')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('basic_information.general_information.page',compact('personnelAgencies','basicInfoDetail','basicInfoType'));
    }
}
