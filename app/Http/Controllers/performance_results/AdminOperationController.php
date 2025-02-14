<?php

namespace App\Http\Controllers\performance_results;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerfResultsType;
use App\Models\PerfSingleTopicFile;

class AdminOperationController extends Controller
{
    public function OperationAdmin()
    {
        $perfResultsType = PerfResultsType::all();

        $perfResultsTypeID = $perfResultsType->firstWhere('type_name', 'การปฏิบัติงาน')->id;

        $PerfSingleTopicFiles = PerfSingleTopicFile::where('perf_results_type_id', $perfResultsTypeID)->get();

        return view('admin.post.performance_results.operation.page', compact('PerfSingleTopicFiles', 'perfResultsType'));
    }

    public function OperationCreate(Request $request)
    {
        $request->validate([
            'perf_results_type' => 'required|exists:perf_results_types,id',
            'file_post.*' => 'file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx|max:25120',
        ]);

        // dd($request);

        if ($request->hasFile('file_post')) {
            foreach ($request->file('file_post') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('single_topicFile', $filename, 'public');

                $fileExtension = $file->getClientOriginalExtension();

                PerfSingleTopicFile::create([
                    'perf_results_type_id' => $request->perf_results_type,
                    'file_path' => $path,
                    'file_type' => $fileExtension,
                ]);
            }
        }

        return redirect()->back()->with('success', 'เพิ่มข้อมูลสำเร็จ');
    }
}
