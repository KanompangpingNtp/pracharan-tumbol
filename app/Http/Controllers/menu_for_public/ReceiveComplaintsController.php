<?php

namespace App\Http\Controllers\menu_for_public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonnelAgency;
use App\Models\FormDetails;
use App\Models\FormFiles;
use App\Models\FormType;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ReceiveComplaintsController extends Controller
{
    public function ReceiveComplaintsForm ()
    {
        $personnelAgencies = PersonnelAgency::with('ranks')->get();

        $formTypes = FormType::all();

        $formTypesId = $formTypes->firstWhere('type_name', 'รับเรื่องราวร้องทุกข์')->id;

        // dd($formTypesId);

        return view('pages.menu_for_public.receive_complaints.page_form',compact('personnelAgencies','formTypes'));
    }

    public function ReceiveComplaintsFormCreate(Request $request)
    {
        $request->validate([
            'form_type_id' => 'required|exists:form_types,id',
            'full_name' => 'required|string|max:255',
            'gender' => 'nullable|string|max:10',
            'phone' => 'required|string|max:20',
            'mail' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:255',
            'complaints' => 'required|string|max:500',
            'details' => 'nullable|string',
            'files.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        // dd($request);

        $formDetail = FormDetails::create([
            'form_type_id' => $request->form_type_id,
            'users_id' => Auth::id(),
            'full_name' => $request->full_name,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'mail' => $request->mail,
            'address' => $request->address,
            'complaints' => $request->complaints,
            'details' => $request->details,
        ]);

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('Form_Files', $filename, 'public');

                FormFiles::create([
                    'form_detail_id' => $formDetail->id,
                    'files_path' => $path,
                    'files_type' => $file->getClientOriginalExtension(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'บันทึกข้อมูลสำเร็จ');
    }
}
