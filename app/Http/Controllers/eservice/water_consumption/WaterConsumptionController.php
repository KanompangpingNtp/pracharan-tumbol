<?php

namespace App\Http\Controllers\eservice\water_consumption;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WaterConsumption;
use App\Models\WaterConsumptionFiles;
use App\Models\WaterConsumptionReply;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class WaterConsumptionController extends Controller
{
    public function WaterConsumptionPage ()
    {
        return view('eservice.users.water_consumption.page');
    }

    public function WaterConsumptionFormCreate(Request $request)
    {
        $request->validate([
            'salutation' => 'nullable|string',
            'full_name' => 'nullable|string',
            'address' => 'nullable|string',
            'village' => 'nullable|string',
            'occupation' => 'nullable|string',
            'number_people' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'number_trips' => 'nullable|string',
            'attachments.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
        ]);

        // dd($request);

        $WaterConsumption = WaterConsumption::create([
            'users_id' => auth()->id(),
            'status' => 1,
            'salutation' => $request->salutation,
            'full_name' => $request->full_name,
            'address' => $request->house_number,
            'village' => $request->village,
            'occupation' => $request->occupation,
            'number_people' => $request->number_people,
            'phone_number' => $request->phone_number,
            'number_trips' => $request->number_trips,
        ]);

        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();

                $path = $file->storeAs('waterconsumption-files', $filename, 'public');

                WaterConsumptionFiles::create([
                    'water_consumptions_id' => $WaterConsumption->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientMimeType(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'ฟอร์มถูกส่งเรียบร้อยแล้ว');
    }

    public function WaterConsumptionShowDetails()
    {
        $forms = WaterConsumption::with(['user', 'files', 'replies'])
            ->where('users_id', Auth::id())
            ->get();

        return view('eservice.users.water_consumption.account.show-detail', compact('forms'));
    }

    public function WaterConsumptionUserExportPDF($id)
    {
        $form = WaterConsumption::find($id);

        $pdf = Pdf::loadView('eservice.users.water_consumption.pdf-form', compact('form'))->setPaper('A4', 'portrait');

        return $pdf->stream('คำร้องขอสนับสนุนน้ำเพื่ออุปโภค-บริโภค' . $form->id . '.pdf');
    }

    public function WaterConsumptionUserReply(Request $request, $formId)
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
}
