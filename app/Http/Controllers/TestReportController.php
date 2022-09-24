<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestReport;

class TestReportController extends Controller
{
    function update(Request $request)
    {
        TestReport::where("id", $request->id)->update(["result" => $request->result]);
        return back();
    }
}
