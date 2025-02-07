<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\BasicInfoDetail;
use App\Models\BasicInfoType;

class VisionMissionController extends Controller
{
    public function  VisionMissionPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $basicInfoType = BasicInfoType::all();
        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'วิสัยทัศน์/พันธกิจ')->id;
        $basicInfoDetail = BasicInfoDetail::with('type', 'images', 'pdf')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('basic_information.vision_mission.page',compact('personnelAgencies','basicInfoDetail','basicInfoType'));
    }
}
