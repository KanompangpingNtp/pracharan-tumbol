<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostDetail;
use App\Models\PersonnelAgency;
use App\Models\ExecutiveBoard;

class ShowDataDetailController extends Controller
{
    public function HomeDataPage()
    {
        //ข่าวประชาสัมพันธ์
        $pressRelease = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ข่าวประชาสัมพันธ์');
            })
            ->orderBy('date', 'desc')
            ->get();

        //กิจกรรม
        $activity = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'กิจกรรม');
            })
            ->orderBy('date', 'desc')
            ->get();

        //ประกาศจัดซื้อจัดจ้าง
        $procurement = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศจัดซื้อจัดจ้าง');
            })
            ->orderBy('date', 'desc')
            ->get();

        //ผลจัดซื้อจัดจ้าง
        $procurementResults = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ผลจัดซื้อจัดจ้าง');
            })
            ->orderBy('date', 'desc')
            ->get();

        //ประกาศราคากลาง
        $average = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศราคากลาง');
            })
            ->orderBy('date', 'desc')
            ->get();

        //งานเก็บรายได้
        $revenue = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'งานเก็บรายได้');
            })
            ->orderBy('date', 'desc')
            ->get();

        //สถานที่แนะนำ
        $building = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'สถานที่แนะนำ');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        //ชมรมผู้สูงอายุ
        $citizensClub = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ชมรมผู้สูงอายุ');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        //บุคคากร
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        //คณะผู้บริหาร
        $executiveStatus1 = ExecutiveBoard::with('images')->where('status', 1)->get();
        $executiveStatus2 = ExecutiveBoard::with('images')->where('status', 2)->get();
        $executiveStatus3 = ExecutiveBoard::with('images')->where('status', 3)->get();
        $executiveStatus4 = ExecutiveBoard::with('images')->where('status', 4)->get();
        $executiveStatus5 = ExecutiveBoard::with('images')->where('status', 5)->get();

        // dd( $ExecutiveBoard);

        $LocalAdminPromotion = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'กรมส่งเสริมการปกครองท้องถิ่น');
            })
            ->orderBy('created_at', 'desc')
            ->get();

        $noticeBoard = PostDetail::with('postType', 'photos')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ป้ายประกาศ');
            })->get();

        return view('pages.home.app', compact(
            'pressRelease',
            'activity',
            'procurement',
            'procurementResults',
            'average',
            'revenue',
            'personnelAgencies',
            'executiveStatus1',
            'executiveStatus2',
            'executiveStatus3',
            'executiveStatus4',
            'executiveStatus5',
            'LocalAdminPromotion',
            'noticeBoard',
            'citizensClub',
            'building'
        ));
    }

    public function banner()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.banner-in.app', compact('personnelAgencies'));
    }

    public function contect()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        return view('pages.contect.app', compact('personnelAgencies'));
    }
}
