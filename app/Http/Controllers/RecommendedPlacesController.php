<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostType;
use App\Models\PostDetail;
use App\Models\PostPhoto;
use App\Models\PersonnelAgency;
use Illuminate\Support\Facades\Storage;

class RecommendedPlacesController extends Controller
{
    public function RecommendedPlacesPage()
    {
        $postTypes = PostType::all();

        $postTypeId = $postTypes->firstWhere('type_name', 'สถานที่แนะนำ')->id;

        $postDetails = PostDetail::with('postType', 'photos', 'pdfs')
            ->where('post_type_id', $postTypeId)
            ->get();

        return view('admin.post.recommended_places.recommended_places', compact('postDetails', 'postTypes'));
    }

    public function RecommendedPlacesCreate(Request $request)
    {
        $request->validate([
            'post_type_id' => 'required|exists:post_types,id',
            'topic_name' => 'nullable|string|max:255',
            'details' => 'nullable|string|max:255',
            'title_image' => 'file|mimes:jpg,jpeg,png',
            'file_post' => 'nullable|array',
            'file_post.*' => 'file|mimes:jpg,jpeg,png|max:10240',
        ]);

        // dd($request);

        $postDetail = PostDetail::create([
            'post_type_id' => $request->post_type_id,
            'topic_name' => $request->topic_name,
            'details' => $request->details,
        ]);

        if ($request->hasFile('title_image')) {
            $file = $request->file('title_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('photo_title', $filename, 'public');

            PostPhoto::create([
                'post_detail_id' => $postDetail->id,
                'post_photo_file' => $path,
                'post_photo_status' => '1',
            ]);
        }

        if ($request->hasFile('file_post')) {
            $hasValidFile = false; // ตัวแปรตรวจสอบว่ามีไฟล์ที่ตรงเงื่อนไขหรือไม่

            foreach ($request->file('file_post') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();

                if (in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png'])) {
                    $path = $file->storeAs('photo', $filename, 'public');

                    PostPhoto::create([
                        'post_detail_id' => $postDetail->id,
                        'post_photo_file' => $path,
                        'post_photo_status' => '2',
                    ]);

                    $hasValidFile = true;
                }
            }

            if (!$hasValidFile) {
                return redirect()->back()->with('error', 'โพสถูกเพิ่มแล้ว แต่ไม่มีไฟล์รูปภาพที่ถูกต้อง!');
            }
        } else {
            return redirect()->back()->with('error', 'กรุณาอัพโหลดไฟล์รูปภาพ!');
        }

        return redirect()->back()->with('success', 'โพสถูกเพิ่มแล้ว!');
    }

    public function RecommendedPlacesDelete($id)
    {
        $postDetail = PostDetail::findOrFail($id);

        foreach ($postDetail->photos as $photo) {
            Storage::disk('public')->delete($photo->post_photo_file);
            $photo->delete();
        }

        $postDetail->delete();

        return redirect()->back()->with('success', 'ลบข้อมูลเรียบร้อยแล้ว!');
    }

    public function RecommendedPlacesUpdate(Request $request, $id)
    {
        $request->validate([
            'post_type_id' => 'required|exists:post_types,id',
            'topic_name' => 'nullable|string|max:255',
            'details' => 'nullable|string|max:255',
            'title_image' => 'nullable|file|mimes:jpg,jpeg,png',
            'file_post' => 'nullable|array',
            'file_post.*' => 'file|mimes:jpg,jpeg,png|max:10240',
        ]);

        // ค้นหาข้อมูลที่ต้องการอัปเดต
        $postDetail = PostDetail::findOrFail($id);

        // อัปเดตข้อมูลพื้นฐาน
        $postDetail->update([
            'post_type_id' => $request->post_type_id,
            'topic_name' => $request->topic_name,
            'details' => $request->details,
        ]);

        // จัดการอัปโหลดรูป Title Image
        if ($request->hasFile('title_image')) {
            // ลบรูปภาพเก่าถ้ามี
            $oldPhoto = PostPhoto::where('post_detail_id', $postDetail->id)->where('post_photo_status', '1')->first();
            if ($oldPhoto) {
                Storage::disk('public')->delete($oldPhoto->post_photo_file);
                $oldPhoto->delete();
            }

            // อัปโหลดรูปใหม่
            $file = $request->file('title_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('photo_title', $filename, 'public');

            PostPhoto::create([
                'post_detail_id' => $postDetail->id,
                'post_photo_file' => $path,
                'post_photo_status' => '1',
            ]);
        }

        // จัดการอัปโหลดรูปภาพเพิ่มเติม
        if ($request->hasFile('file_post')) {
            // ลบรูปภาพเก่าที่เป็น post_photo_status = 2
            $oldPhotos = PostPhoto::where('post_detail_id', $postDetail->id)->where('post_photo_status', '2')->get();
            foreach ($oldPhotos as $photo) {
                Storage::disk('public')->delete($photo->post_photo_file);
                $photo->delete();
            }

            // บันทึกภาพใหม่
            foreach ($request->file('file_post') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('photo', $filename, 'public');

                PostPhoto::create([
                    'post_detail_id' => $postDetail->id,
                    'post_photo_file' => $path,
                    'post_photo_status' => '2',
                ]);
            }
        }

        return redirect()->back()->with('success', 'แก้ไขโพสเรียบร้อย!');
    }

    public function CitizensClubShowData()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $citizensClub = PostDetail::with('postType', 'videos', 'photos', 'pdfs')
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'สถานที่แนะนำ');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(14);

        return view('pages.citizens_club.show_data', compact('citizensClub','personnelAgencies'));
    }

    public function CitizensClubShowDetails($id)
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $citizensClub = PostDetail::with(['postType', 'videos', 'photos', 'pdfs'])
            ->whereHas('postType', function ($query) {
                $query->where('type_name', 'สถานที่แนะนำ');
            })
            ->findOrFail($id);

        return view('pages.citizens_club.show_detail', compact('citizensClub','personnelAgencies'));
    }
}
