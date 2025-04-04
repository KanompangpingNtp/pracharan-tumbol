<?php

namespace App\Http\Controllers\performance_results;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PerfResultsDetail;
use App\Models\PerfResultsMinorDetail;
use App\Models\PerfResultsMinorFile;
use Illuminate\Support\Facades\Storage;

class AdminFinancialReportController extends Controller
{
    public function  FinancialReportAdmin()
    {
        $perfResultsType = PerfResultsType::all();

        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'รายงานงบการเงิน')->id;

        $PerfResultsDetail = PerfResultsDetail::with('type')
            ->where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('admin.post.performance_results.financial_report.page', compact('PerfResultsDetail', 'perfResultsType'));
    }

    public function FinancialReportCreate(Request $request)
    {
        $request->validate([
            'perf_results_type' => 'required|exists:perf_results_types,id',
            'detail_name' => 'required|string',
        ]);

        // dd( $request);

        $PerfResultsDetail = PerfResultsDetail::create([
            'perf_results_type_id' => $request->perf_results_type,
            'detail_name' => $request->detail_name,
        ]);

        return redirect()->back()->with('success', 'สร้างข้อมูลสำเร็จ');
    }

    public function FinancialReportUpdate(Request $request, $id)
    {
        $request->validate([
            'perf_results_type' => 'required|exists:perf_results_types,id',
            'detail_name' => 'required|string',
        ]);

        $PerfResultsDetail = PerfResultsDetail::findOrFail($id);

        $PerfResultsDetail->update([
            'perf_results_type_id' => $request->perf_results_type,
            'detail_name' => $request->detail_name,
        ]);

        return redirect()->back()->with('success', 'อัปเดตข้อมูลสำเร็จ');
    }

    public function FinancialReportDelete($id)
    {
        $financialReport = PerfResultsDetail::findOrFail($id);

        $financialReport->delete();

        return redirect()->back()->with('success', 'ลบข้อมูลเรียบร้อย');
    }

    public function FinancialReportShowDertails($id)
    {
        $PerfResultsDetail = PerfResultsDetail::findOrFail($id);
        $PerfResultsMinorDetail = PerfResultsMinorDetail::where('perf_results_detail_id', $id)->get();

        return view('admin.post.performance_results.financial_report.show_details', compact('PerfResultsDetail', 'PerfResultsMinorDetail'));
    }

    public function FinancialReportDertailsCreate(Request $request, $FinancialId)
    {
        $request->validate([
            'detail_name' => 'required|string',
        ]);

        PerfResultsMinorDetail::create([
            'perf_results_detail_id' => $FinancialId,
            'detail_name' => $request->detail_name,
        ]);

        return redirect()->back()->with('success', 'สร้างข้อมูลย่อยสำเร็จ');
    }

    public function FinancialReportDertailsUpdate(Request $request, $id)
    {
        $minorDetail = PerfResultsMinorDetail::findOrFail($id);

        $minorDetail->detail_name = $request->detail_name;
        $minorDetail->save();

        return redirect()->back()->with('success', 'อัปเดตข้อมูลย่อยเรียบร้อย');
    }

    public function FinancialReportDertailsDelete($id)
    {
        $detail = PerfResultsMinorDetail::findOrFail($id);

        $detail->delete();

        return redirect()->back()->with('success', 'ลบข้อมูลย่อยสำเร็จ');
    }


    public function FinancialReportShowDertailResults($id)
    {
        $PerfResultsMinorDetail = PerfResultsMinorDetail::with('files')->findOrFail($id);

        return view('admin.post.performance_results.financial_report.show_detail_results', compact('PerfResultsMinorDetail',));
    }

    public function FinancialReportDertailsCreateResults(Request $request, $DetailsId)
    {
        $request->validate([
            'file_post.*' => 'file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx|max:25120',
        ]);

        $PerfResultsMinorDetail = PerfResultsMinorDetail::findOrFail($DetailsId);

        if ($request->hasFile('file_post')) {
            foreach ($request->file('file_post') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('perfresults_MinorFile', $filename, 'public');

                $fileExtension = $file->getClientOriginalExtension();

                PerfResultsMinorFile::create([
                    'perf_results_minor_detail_id' => $PerfResultsMinorDetail->id,
                    'file_path' => $path,
                    'file_type' => $fileExtension,
                ]);
            }
        }

        return redirect()->back()->with('success', 'เพิ่มข้อมูลสำเร็จ');
    }

    public function FinancialReportDertailsDeleteResults($fileId)
    {
        $file = PerfResultsMinorFile::findOrFail($fileId);

        // ลบไฟล์จาก storage
        Storage::disk('public')->delete($file->file_path);

        // ลบข้อมูลจากฐานข้อมูล
        $file->delete();

        return redirect()->back()->with('success', 'ลบไฟล์สำเร็จ');
    }
}
