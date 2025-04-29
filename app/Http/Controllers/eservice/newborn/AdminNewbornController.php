<?php

namespace App\Http\Controllers\eservice\newborn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewbornFormReplies;
use App\Models\NewbornInformations;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class AdminNewbornController extends Controller
{
    public function NewbornShowData()
    {
        $forms = NewbornInformations::with(['user', 'details', 'replies'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('eservice.admin.newborn.show-data', compact('forms'));
    }

    public function NewbornAdminReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        // dd($request);

        NewbornFormReplies::create([
            'newborn_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function NewbornUpdateStatus($id)
    {
        $form = NewbornInformations::findOrFail($id);

        $form->form_status = 2;
        $form->admin_name_verifier = Auth::user()->name;
        $form->save();

        return redirect()->back()->with('success', 'คุณได้กดรับแบบฟอร์มเรียบร้อยแล้ว');
    }

    public function NewbornUserAdminShowEdit($id)
    {
        $form = NewbornInformations::with('details')->findOrFail($id);

        if ($form['details'] && $form['details']->document_option) {
            $document_option = $form['details']->document_option;
            if (is_string($document_option)) {
                $form['details']->document_option = json_decode($document_option, true);
            }
        }

        return view('eservice.admin.newborn.edit-data', compact('form'));
    }

    public function NewbornAdminExportPDF($id)
    {
        $form = NewbornInformations::with('details')->findOrFail($id);
        $pdf = Pdf::loadView('eservice.users.newborn.pdf-form', compact('form'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('แบบคำร้องขอลงทะเบียนเพื่อขอรับสิทธิเงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิด.pdf');
    }
}
