<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BasicInfoImage;
use App\Models\BasicInfoDetail;
use App\Models\BasicInfoType;
use App\Models\BasicInfoPdf;
use Illuminate\Support\Facades\Storage;

class AdminVisionMissionController extends Controller
{
    public function  VisionMissionAdmin()
    {
        $basicInfoType = BasicInfoType::all();

        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'วิสัยทัศน์/พันธกิจ')->id;

        $basicInfoDetail = BasicInfoDetail::with('type', 'images', 'pdf')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('admin.post.vision_mission.page', compact('basicInfoDetail', 'basicInfoType'));
    }

    public function VisionMissionCreate(Request $request)
    {
        $request->validate([
            'basic_info_type' => 'required|exists:basic_info_types,id',
            'details' => 'required|string',
            'file_post' => 'nullable|array',
            'file_post.*' => 'file|mimes:jpg,jpeg,png,pdf',
        ]);

        // dd( $request);

        $basicInfoDetail = BasicInfoDetail::create([
            'basic_info_type_id' => $request->basic_info_type,
            'details' => $request->details,
        ]);

        if ($request->hasFile('file_post')) {
            foreach ($request->file('file_post') as $file) {

                $filename = time() . '_' . $file->getClientOriginalName();

                if ($file->getClientOriginalExtension() == 'pdf') {

                    $path = $file->storeAs('basicinfo_pdf', $filename, 'public');

                    BasicInfoPdf::create([
                        'basic_info_details_id' => $basicInfoDetail->id,
                        'pdf_file' => $path,
                    ]);
                } elseif (in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png'])) {

                    $path = $file->storeAs('basicinfo_images', $filename, 'public');

                    BasicInfoImage::create([
                        'basic_info_details_id' => $basicInfoDetail->id,
                        'images_file' => $path,
                    ]);
                } else {
                    return redirect()->back()->with('error', 'สร้างข้อมูลไม่สำเร็จ');
                }
            }
        }

        return redirect()->back()->with('success', 'สร้างข้อมูลสำเร็จ');
    }

    public function VisionMissionDelete($id)
    {
        $basicInfoDetail = BasicInfoDetail::findOrFail($id);

        // ลบไฟล์ PDF ที่เกี่ยวข้อง
        foreach ($basicInfoDetail->pdf as $pdf) {
            Storage::disk('public')->delete($pdf->pdf_file);
            $pdf->delete();
        }

        // ลบไฟล์รูปภาพที่เกี่ยวข้อง
        foreach ($basicInfoDetail->images as $image) {
            Storage::disk('public')->delete($image->images_file);
            $image->delete();
        }

        // ลบข้อมูลหลัก
        $basicInfoDetail->delete();

        return redirect()->back()->with('success', 'ลบข้อมูลสำเร็จ');
    }
}
