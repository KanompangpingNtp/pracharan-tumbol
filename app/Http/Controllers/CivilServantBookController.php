<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\PostDetail;

class CivilServantBookController extends Controller
{
    public function CivilServantBook()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $LocalAdminPromotion = PostDetail::with('postType', 'pdfs')
        ->whereHas('postType', function ($query) {
            $query->where('type_name', 'กรมส่งเสริมการปกครองท้องถิ่น');
        })->orderBy('created_at', 'desc')
        ->paginate(20);

        return view('pages.civil_servant_books.show_data', compact('personnelAgencies','LocalAdminPromotion'));
    }

    public function CivilServantDetails($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $LocalAdminPromotion = PostDetail::with(['postType','pdfs'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'กรมส่งเสริมการปกครองท้องถิ่น');
            })
            ->findOrFail($id);

        return view('pages.civil_servant_books.show_detail', compact('LocalAdminPromotion','personnelAgencies'));
    }
}
