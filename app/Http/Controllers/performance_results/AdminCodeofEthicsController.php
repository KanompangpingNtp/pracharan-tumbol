<?php

namespace App\Http\Controllers\performance_results;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PerfSingleTopic;
use App\Models\PerfSingleTopicFile;
use Illuminate\Support\Facades\Storage;

class AdminCodeofEthicsController extends Controller
{
    public function CodeofEthicsAdmin()
    {
        $perfResultsType = PerfResultsType::all();
        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'ประมวลจริยธรรม')->id;
        $PerfSingleTopic = PerfSingleTopic::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('admin.post.performance_results.code_ethics.page', compact('PerfSingleTopic', 'perfResultsType'));
    }

    public function CodeofEthicsCreate(Request $request)
    {
        $request->validate([
            'perf_results_type' => 'required|exists:perf_results_types,id',
            'detail_name' => 'required|string',
        ]);

        // dd($request);

        $PerfSingleTopic = PerfSingleTopic::create([
            'perf_results_type_id' => $request->perf_results_type,
            'detail_name' => $request->detail_name,
        ]);

        return redirect()->back()->with('success', 'เพิ่มข้อมูลสำเร็จ');
    }

    public function CodeofEthicsUpdate(Request $request, $id)
    {
        $request->validate([
            'detail_name' => 'required|string',
        ]);

        $PerfResultsDetail = PerfSingleTopic::findOrFail($id);

        $PerfResultsDetail->update([
            'detail_name' => $request->detail_name,
        ]);

        return redirect()->back()->with('success', 'อัปเดตข้อมูลสำเร็จ');
    }

    public function CodeofEthicsDelete($id)
    {
        $PerfSingleTopic = PerfSingleTopic::findOrFail($id);

        $PerfSingleTopic->delete();

        return redirect()->back()->with('success', 'ลบข้อมูลเรียบร้อย');
    }

    public function CodeofEthicsShowDertails($id)
    {
        $PerfSingleTopic = PerfSingleTopic::with('files')->findOrFail($id);

        return view('admin.post.performance_results.code_ethics.show_details', compact('PerfSingleTopic',));
    }

    public function CodeofEthicsCreateFiles(Request $request, $DetailsId)
    {
        $request->validate([
            'file_post.*' => 'file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx|max:25120',
        ]);

        if ($request->hasFile('file_post')) {
            foreach ($request->file('file_post') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('PerfSingleTopic_File', $filename, 'public');

                $fileExtension = $file->getClientOriginalExtension();

                PerfSingleTopicFile::create([
                    'perf_single_topic_id' => $DetailsId,
                    'file_path' => $path,
                    'file_type' => $fileExtension,
                ]);
            }
        }

        return redirect()->back()->with('success', 'เพิ่มข้อมูลสำเร็จ');
    }

    public function CodeofEthicsDertailsDelete($fileId)
    {
        $file = PerfSingleTopicFile::findOrFail($fileId);

        Storage::disk('public')->delete($file->file_path);

        $file->delete();

        return redirect()->back()->with('success', 'ลบไฟล์สำเร็จ');
    }
}
