<?php

namespace App\Http\Controllers\eservice\newborn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FuneralFormReplies;
use App\Models\NewbornFormDetails;
use App\Models\NewbornFormReplies;
use App\Models\NewbornInformations;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class NewbornController extends Controller
{
    public function NewbornFormPage()
    {
        return view('eservice.users.newborn.page');
    }

    public function NewbornFormCreate(Request $request)
    {
        $NewbornInformations = NewbornInformations::create([
            'users_id' => auth()->id(),
            'form_status' => 1,
        ]);

        $NewbornFormDetails = NewbornFormDetails::create([
            'newborn_id' => $NewbornInformations->id,
            'relationship' => $request->relationship,
            'relationship_detail' => $request->relationship_detail,
            'salutation_parent' => $request->salutation_parent,
            'fullname_parent' => $request->fullname_parent,
            'idcard_parent' => $request->idcard_parent,
            'birthday_parent' => $request->birthday_parent,
            'nationality_parent' => $request->nationality_parent,
            'address_parent' => $request->address_parent,
            'village_parent' => $request->village_parent,
            'building_parent' => $request->building_parent,
            'floor' => $request->floor,
            'room' => $request->room,
            'village_name_parent' => $request->village_name_parent,
            'alley_parent' => $request->alley_parent,
            'road_parent' => $request->road_parent,
            'subdistrict_parent' => $request->subdistrict_parent,
            'district_parent' => $request->district_parent,
            'province_parent' => $request->province_parent,
            'postal_code_parent' => $request->postal_code_parent,
            'phone_house_parent' => $request->phone_house_parent,
            'phone_number_parent' => $request->phone_number_parent,
            'occupation_parent' => $request->occupation_parent,
            'occupation_detail' => $request->occupation_detail,
            'education_parent' => $request->education_parent,
            'education_detail' => $request->education_detail,
            'salutation_children' => $request->salutation_children,
            'fullname_children' => $request->fullname_children,
            'idcard_children' => $request->idcard_children,
            'birthday_children' => $request->birthday_children,
            'salutation_mother' => $request->salutation_mother,
            'fullname_mother' => $request->fullname_mother,
            'idcard_mother' => $request->idcard_mother,
            'age_mother' => $request->age_mother,
            'nationality_mother' => $request->nationality_mother,
            'birthday_mother' => $request->birthday_mother,
            'occupation_mother' => $request->occupation_mother,
            'occupation_detail_mother' => $request->occupation_detail_mother,
            'education_mother' => $request->education_mother,
            'education_detail_mother' => $request->education_detail_mother,
            'salutation_father' => $request->salutation_father,
            'fullname_father' => $request->fullname_father,
            'idcard_father' => $request->idcard_father,
            'age_father' => $request->age_father,
            'nationality_father' => $request->nationality_father,
            'birthday_father' => $request->birthday_father,
            'occupation_father' => $request->occupation_father,
            'occupation_detail_father' => $request->occupation_detail_father,
            'education_father' => $request->education_father,
            'education_detail_father' => $request->education_detail_father,
            'account' => $request->account,
            'account_name' => $request->account_name,
            'account_id' => $request->account_id,
        ]);

        return redirect()->back()->with('success', 'ฟอร์มถูกส่งเรียบร้อยแล้ว');
    }

    public function NewbornShowDetails()
    {
        $forms = NewbornInformations::with(['user', 'replies', 'details'])
            ->where('users_id', Auth::id())
            ->get();

        return view('eservice.users.newborn.account.show-detail', compact('forms'));
    }

    public function NewbornUserShowEdit($id)
    {
        $form = NewbornInformations::with('details')->findOrFail($id);

        if ($form['details'] && $form['details']->document_option) {
            $document_option = $form['details']->document_option;
            if (is_string($document_option)) {
                $form['details']->document_option = json_decode($document_option, true);
            }
        }

        return view('eservice.users.newborn.account.edit-data', compact('form'));
    }

    public function NewbornUserReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        NewbornFormReplies::create([
            'newborn_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function NewbornUserExportPDF($id)
    {
        $form = NewbornInformations::with('details')->findOrFail($id);
        $pdf = Pdf::loadView('eservice.users.newborn.pdf-form', compact('form'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('แบบคำร้องขอลงทะเบียนเพื่อขอรับสิทธิเงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิด.pdf');
    }
}
