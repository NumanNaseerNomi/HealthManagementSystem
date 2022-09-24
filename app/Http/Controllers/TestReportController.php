<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestReport;

class TestReportController extends Controller
{
    function update(Request $request)
    {
        // dd($request->result);
        TestReport::where("id", 1)->update(["result" => $request->result]);
    }
}
