<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExecutiveBoard;
use App\Models\ExecutiveBoardImage;
use Illuminate\Support\Facades\Storage;

class ExecutiveBoardController extends Controller
{
    public function ExecutiveBoardPage()
    {
        $ExecutiveBoard = ExecutiveBoard::with('images')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.post.executive_board.page', compact('ExecutiveBoard'));
    }

    public function ExecutiveBoardCreate(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'status' => 'required|string',
            'photo_file' => 'nullable|file|mimes:jpg,jpeg,png',
        ]);

        // dd($request);

        $ExecutiveBoard = ExecutiveBoard::create([
            'full_name' => $request->full_name,
            'position' => $request->position,
            'phone_number' => $request->phone_number,
            'status' => $request->status,
        ]);

        if ($request->hasFile('photo_file')) {
            $file = $request->file('photo_file');
            $filename = time() . '_' . $file->getClientOriginalName();

            $path = $file->storeAs('image_files', $filename, 'public');

            ExecutiveBoardImage::create([
                'executive_board_id' => $ExecutiveBoard->id,
                'photo_file' => $path,
            ]);
        }

        return redirect()->back()->with('success', 'สร้างข้อมูลคณะผู้บริหารสำเร็จ');
    }

    public function ExecutiveBoardUpdate(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'status' => 'required|integer|min:1|max:5',
            'photo_file' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $executiveBoard = ExecutiveBoard::findOrFail($id);
        $executiveBoard->update([
            'full_name' => $request->full_name,
            'position' => $request->position,
            'phone_number' => $request->phone_number,
            'status' => $request->status,
        ]);

        if ($request->has('remove_image')) {
            $executiveBoardImage = ExecutiveBoardImage::where('executive_board_id', $id)->first();
            if ($executiveBoardImage) {
                Storage::disk('public')->delete($executiveBoardImage->photo_file);
                $executiveBoardImage->delete();
            }
        }

        if ($request->hasFile('photo_file')) {
            $file = $request->file('photo_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('image_files', $filename, 'public');

            $executiveBoardImage = ExecutiveBoardImage::where('executive_board_id', $id)->first();
            if ($executiveBoardImage) {
                Storage::disk('public')->delete($executiveBoardImage->photo_file);
                $executiveBoardImage->update(['photo_file' => $path]);
            } else {
                ExecutiveBoardImage::create([
                    'executive_board_id' => $executiveBoard->id,
                    'photo_file' => $path,
                ]);
            }
        }

        return redirect()->back()->with('success', 'แก้ไขข้อมูลบุคลากรสำเร็จ');
    }


    public function ExecutiveBoardDelete($id)
    {
        $ExecutiveBoard = ExecutiveBoard::findOrFail($id);

        $ExecutiveBoardImage = ExecutiveBoardImage::where('personnel_detail_id', $id)->first();
        if ($ExecutiveBoardImage) {
            Storage::disk('public')->delete($ExecutiveBoardImage->post_photo_file);
            $ExecutiveBoardImage->delete();
        }

        $ExecutiveBoard->delete();

        return redirect()->back()->with('success', 'ข้อมูลถูกลบแล้ว');
    }
}
