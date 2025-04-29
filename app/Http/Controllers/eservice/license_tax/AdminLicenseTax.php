<?php

namespace App\Http\Controllers\eservice\license_tax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LicenseTaxInformations;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\LicenseTaxReplies;
use App\Models\LicenseTaxOption;

class AdminLicenseTax extends Controller
{
    public function LicenseTaxAdminPages()
    {
        $forms = LicenseTaxInformations::with(['user', 'files', 'replies'])->get();

        return view('eservice.admin.license_tax.show-data', compact('forms'));
    }

    public function LicenseTaxAdminReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        LicenseTaxReplies::create([
            'license_tax_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    // public function LicenseTaxAdminExportPDF($id)
    // {
    //     $form = LicenseTaxInformations::with('details')->find($id);

    //     $pdf = Pdf::loadView('eservice.users.license_tax.pdf-form', compact('form'))
    //         ->setPaper('A4', 'landscape');

    //     return $pdf->stream('(ภ.ป.๑) แนบแสดงรายการ ภาษีป้าย' . $form->id . '.pdf');
    // }

    public function LicenseTaxAdminExportPDF($id)
    {
        $form = LicenseTaxInformations::with('details')->find($id);

        $type1 = LicenseTaxOption::where('license_tax_id', $id)->where('type', 1)->orderBy('created_at', 'asc')->get();
        $type2 = LicenseTaxOption::where('license_tax_id', $id)->where('type', 2)->orderBy('created_at', 'asc')->get();
        $type3 = LicenseTaxOption::where('license_tax_id', $id)->where('type', 3)->orderBy('created_at', 'asc')->get();

        $pdf = Pdf::loadView('eservice.users.license_tax.pdf-form', compact('form', 'type1', 'type2', 'type3'))
            ->setPaper('A4', 'landscape');

        return $pdf->stream('(ภ.ป.๑) แนบแสดงรายการ ภาษีป้าย' . $form->id . '.pdf');
    }

    public function LicenseTaxUpdateStatus($id)
    {
        $form = LicenseTaxInformations::findOrFail($id);

        $form->form_status = 2;
        $form->admin_name_verifier = Auth::user()->name;
        $form->save();

        return redirect()->back()->with('success', 'คุณได้กดรับแบบฟอร์มเรียบร้อยแล้ว');
    }
}
