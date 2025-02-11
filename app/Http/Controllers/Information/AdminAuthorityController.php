<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BasicInfoType;
use App\Models\ListDetail;
use App\Models\ListDetailImage;
use App\Models\ListDetailsPdf;
use Illuminate\Support\Facades\Storage;

class AdminAuthorityController extends Controller
{
    public function  AuthorityAdmin()
    {
        $basicInfoType = BasicInfoType::all();

        $basicInfoTypeID = $basicInfoType->firstWhere('type_name', 'อำนาจหน้าที่')->id;

        $listDetail = ListDetail::with('type', 'images')
            ->where('basic_info_type_id', $basicInfoTypeID)->get();

        return view('admin.post.authority.page', compact('listDetail', 'basicInfoType'));
    }

    public function AuthorityCreate(Request $request)
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

    public function AuthorityNameUpdate(Request $request, $id)
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

    public function AuthorityNameDelete($id)
    {
        $listDetail = ListDetail::findOrFail($id);

        $listDetail->delete();

        return redirect()->back()->with('success', 'ข้อมูลถูกลบเรียบร้อยแล้ว');
    }

    public function AuthorityShowDertails($id)
    {
        $listDetail = ListDetail::with('type', 'images','pdf')->findOrFail($id);

        return view('admin.post.authority.show_details', compact('listDetail'));
    }

    public function AuthorityDertailsCreate(Request $request, $DetailsId)
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

        if ($request->hasFile('file_post')) {
            foreach ($request->file('file_post') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();

                // กรณีของไฟล์ภาพ (jpg, jpeg, png)
                if (in_array($file->extension(), ['jpg', 'jpeg', 'png'])) {
                    $path = $file->storeAs('listdetail_image', $filename, 'public');

                    ListDetailImage::create([
                        'list_details_id' => $ListDetail->id,
                        'images_file' => $path,
                        'status' => '1',  // 2 คือสถานะสำหรับภาพ
                    ]);
                }

                if ($file->extension() == 'pdf') {
                    $path = $file->storeAs('listdetail_pdf', $filename, 'public');

                    ListDetailsPdf::create([
                        'list_details_id' => $ListDetail->id,
                        'pdf_file' => $path,
                        'status' => '1',
                    ]);
                }
            }
        }


        return redirect()->back()->with('success', 'เพิ่มข้อมูลสำเร็จ');
    }

    public function AuthorityDetailsDelete($DetailsId)
    {
        $ListDetail = ListDetail::findOrFail($DetailsId);

        $images = ListDetailImage::where('list_details_id', $ListDetail->id)->get();
        foreach ($images as $image) {
            Storage::disk('public')->delete($image->images_file);
            $image->delete();
        }

        $pdfs = ListDetailsPdf::where('list_details_id', $ListDetail->id)->get();
        foreach ($pdfs as $pdf) {
            Storage::disk('public')->delete($pdf->pdf_file);
            $pdf->delete();
        }

        $ListDetail->update([
            'details' => null,
        ]);

        return redirect()->back()->with('success', 'ลบข้อมูลสำเร็จ');
    }

}
