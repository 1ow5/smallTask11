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
}
