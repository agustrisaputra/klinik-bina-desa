<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportRequest;
use App\Models\Division;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $divisions = Division::get(['id', 'name']);

            return view('welcome', compact('divisions'));
        }

        return view('welcome');
    }

    public function storeReport(ReportRequest $request)
    {
        $user       = $request->user();
        $division   = Division::find($request->division);

        $report     = new Report($request->validated());

        $report->user()->associate($user);

        if ($request->report_type == 'tatap_muka') {
            $report->division()->associate($division);
        }

        $report->save();

        return response()->json([
            'data' => ['message' => 'Laporan anda sudah terkirim dan segera akan ditindak lanjuti']
        ]);
    }
}
