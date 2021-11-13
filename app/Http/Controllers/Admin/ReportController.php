<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use DataTables;

class ReportController extends Controller
{
    public function report(Request $request)
    {
        if ($request->ajax()) {
            $data = Report::with('user')->doesntHave('division')->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    // $action = route('detail-pengguna', $row->id);
                    $actionBtn = "<a href='pengaduan-detail.php' class='btn btn-primary' title='Lihat Data'><i class='fas fa-bars'></i></a>";
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.reports.report');
    }

    public function consultation(Request $request)
    {
        if ($request->ajax()) {
            $data = Report::with('user', 'division')->whereHas('division')->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    // $action = route('detail-pengguna', $row->id);
                    $actionBtn = "<a href='pengaduan-detail.php' class='btn btn-primary' title='Lihat Data'><i class='fas fa-bars'></i></a>";
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return  view('pages.reports.consultation');
    }
}
