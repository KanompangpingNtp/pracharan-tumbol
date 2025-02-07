<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\BasicInfoDetail;
use App\Models\BasicInfoType;

class StrategyGuidelineController extends Controller
{
    public function  StrategyGuidelinePage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $basicInfoType = BasicInfoType::all();
        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'ยุทธศาสตร์และแนวทางการพัฒนา')->id;
        $basicInfoDetail = BasicInfoDetail::with('type', 'images', 'pdf')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('basic_information.strategy_guideline.page',compact('personnelAgencies','basicInfoDetail','basicInfoType'));
    }
}
