<?php

namespace App\Http\Controllers\eservice\water_consumption;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WaterConsumption;
use App\Models\WaterConsumptionFiles;
use App\Models\WaterConsumptionReply;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminWaterConsumptionController extends Controller
{
    public function WaterConsumptionAdminShowData()
    {
        $forms = WaterConsumption::with(['user', 'files', 'replies'])
        ->orderBy('created_at', 'desc')
        ->get();

        return view('eservice.admin.water_consumption.show-data', compact('forms'));
    }

    public function WaterConsumptionAdminExportPDF($id)
    {
        $form = WaterConsumption::find($id);

        $pdf = Pdf::loadView('eservice.users.water_consumption.pdf-form', compact('form'))->setPaper('A4', 'portrait');

        return $pdf->stream('คำร้องขอสนับสนุนน้ำเพื่ออุปโภค-บริโภค' . $form->id . '.pdf');
    }

    public function WaterConsumptionAdminReply(Request $request, $formId)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        WaterConsumptionReply::create([
            'water_consumptions_id' => $formId,
            'users_id' => auth()->id(),
            'reply_text' => $request->message,
            'reply_date' => now()->toDateString(),
        ]);

        return redirect()->back()->with('success', 'ตอบกลับสำเร็จแล้ว!');
    }

    public function WaterConsumptionUpdateStatus($id)
    {
        $form = WaterConsumption::findOrFail($id);

        $form->status = 2;
        $form->admin_name_verifier = Auth::user()->name;
        $form->save();

        return redirect()->back()->with('success', 'คุณได้กดรับแบบฟอร์มเรียบร้อยแล้ว');
    }
}
