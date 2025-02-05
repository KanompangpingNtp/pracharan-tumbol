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
            })->get();

        //กิจกรรม
        $activity = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'กิจกรรม');
            })->get();

        //ประกาศจัดซื้อจัดจ้าง
        $procurement = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศจัดซื้อจัดจ้าง');
            })->get();

        //ผลจัดซื้อจัดจ้าง
        $procurementResults = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ผลจัดซื้อจัดจ้าง');
            })->get();

        //ประกาศราคากลาง
        $average = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'ประกาศราคากลาง');
            })->get();

        //งานเก็บรายได้
        $revenue = PostDetail::with('postType', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'งานเก็บรายได้');
            })->get();

        //สถานที่แนะนำ
        $building = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'สถานที่แนะนำ');
            })->get();

        //บุคคากร
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        //คณะผู้บริหาร
        $executiveStatus1 = ExecutiveBoard::with('images')->where('status', 1)->get();
        $executiveStatus2 = ExecutiveBoard::with('images')->where('status', 2)->get();
        $executiveStatus3 = ExecutiveBoard::with('images')->where('status', 3)->get();
        $executiveStatus4 = ExecutiveBoard::with('images')->where('status', 4)->get();
        $executiveStatus5 = ExecutiveBoard::with('images')->where('status', 5)->get();

        // dd( $ExecutiveBoard);

        return view('pages.home.app', compact(
            'pressRelease',
            'activity',
            'procurement',
            'procurementResults',
            'average',
            'revenue',
            'building',
            'personnelAgencies',
            'executiveStatus1',
            'executiveStatus2',
            'executiveStatus3',
            'executiveStatus4',
            'executiveStatus5',
        ));
    }

    //ประชาสัมพันธ์
    // public function PressReleaseShowDetails($id)
    // {
    //     //ข่าวประชาสัมพันธ์
    //     $pressRelease = PostDetail::with(['postType', 'videos', 'photos', 'pdfs'])
    //         ->whereHas('postType', function ($query) {
    //             $query->where('type_name', 'ข่าวประชาสัมพันธ์');
    //         })
    //         ->findOrFail($id);

    //     return view('user.press-release.detail-data.index', compact('pressRelease'));
    // }
}
