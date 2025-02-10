<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\BasicInfoPdf;
use App\Models\BasicInfoImage;
use App\Models\ListDetailImage;
use Illuminate\Support\Facades\Storage;


class AdminManagementPolicyController extends Controller
{
    public function  ManagementPolicyAdmin()
    {
        $basicInfoType = BasicInfoType::all();

        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'นโยบายการบริหาร/เจตจำนงสุจริต')->id;

        $listDetail = ListDetail::with('type', 'images')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('admin.post.management_policy.page', compact('listDetail', 'basicInfoType'));
    }

    public function ManagementPolicyCreate(Request $request)
    {
        $request->validate([
            'basic_info_type' => 'required|exists:basic_info_types,id',
            'list_details_name' => 'required|string',
        ]);

        // dd( $request);

        $ListDetail = ListDetail::create([
            'basic_info_type_id' => $request->basic_info_type,
            'list_details_name' => $request->list_details_name,
        ]);

        return redirect()->back()->with('success', 'สร้างข้อมูลสำเร็จ');
    }

    public function ManagementPolicyNameUpdate(Request $request, $id)
    {
        $request->validate([
            'list_details_name' => 'required|string',
        ]);

        $listDetail = ListDetail::findOrFail($id);

        $listDetail->update([
            'list_details_name' => $request->list_details_name,
        ]);

        return redirect()->back()->with('success', 'อัปเดตข้อมูลสำเร็จ');
    }

    public function ManagementPolicyDelete($id)
    {
        $listDetail = ListDetail::findOrFail($id);

        $listDetail->delete();

        return redirect()->back()->with('success', 'ข้อมูลถูกลบเรียบร้อยแล้ว');
    }

    public function ManagementPolicyShowDertails($id)
    {
        $listDetail = ListDetail::with('type', 'images')->findOrFail($id);

        return view('admin.post.management_policy.show_details', compact('listDetail'));
    }

    public function ManagementPolicyDertailsCreate(Request $request, $DetailsId)
    {
        $request->validate([
            'details' => 'required|string',
            'file_post' => 'nullable|array',
            'file_post.*' => 'file|mimes:jpg,jpeg,png,pdf',
        ]);

        // dd( $request);

        $ListDetail = ListDetail::findOrFail($DetailsId);
        $ListDetail->update([
            'details' => $request->details,
        ]);

         // การอัปโหลดไฟล์เพิ่มเติม
         if ($request->hasFile('file_post')) {
            foreach ($request->file('file_post') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('listdetail_image', $filename, 'public');

                ListDetailImage::create([
                    'list_details_id' => $ListDetail->id,
                    'images_file' => $path,
                    'status' => '2',
                ]);
            }
        }

        return redirect()->back()->with('success', 'เพิ่มข้อมูลสำเร็จ');
    }

    public function ManagementPolicyDetailsDelete($DetailsId)
    {
        $ListDetail = ListDetail::findOrFail($DetailsId);

        // ลบข้อมูลในตาราง ListDetailImage
        $images = ListDetailImage::where('list_details_id', $ListDetail->id)->get();
        foreach ($images as $image) {
            Storage::disk('public')->delete($image->images_file); // ลบไฟล์จาก storage
            $image->delete(); // ลบข้อมูลภาพจากฐานข้อมูล
        }

        // อัปเดตค่า details ให้เป็น null แทนการลบทั้ง record
        $ListDetail->update([
            'details' => null,
        ]);

        return redirect()->back()->with('success', 'ลบข้อมูลสำเร็จ');
    }
}
