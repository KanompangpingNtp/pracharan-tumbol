<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostDetail;

class TestController extends Controller
{
    public function test()
    {
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


        return view('test.loopdata', compact(
            'procurement',
            'procurementResults',
            'average',
            'revenue',
        ));
    }
}
