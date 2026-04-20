<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function destroy(Report $report){
        $report->delete();
        return redirect()->back();
    }
    public function store(Request $request, Report $report){
        $data = $request ->validate([
            'number' => 'required|string|max:10',
            'description' => 'required|string|max:255',
        ]);
        $report->create($data);
        return redirect()->back();
    }
}
