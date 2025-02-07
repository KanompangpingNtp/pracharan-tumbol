<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\ListDetail;
use App\Models\BasicInfoType;

class CommunityProductsController extends Controller
{
    public function  CommunityProductsPage()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $basicInfoType = BasicInfoType::all();
        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'ผลิตภัณฑ์ชุมชน/OTOP')->id;
        $listDetail = ListDetail::with('type', 'images')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('basic_information.community_products.page',compact('personnelAgencies','listDetail','basicInfoType'));
    }
}
