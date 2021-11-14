<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\EmailReportResponse;
use App\Models\Report;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Mail;

class ReportController extends Controller
{
    public function report(Request $request)
    {
        if ($request->ajax()) {
            $data = Report::with('user')
                        ->doesntHave('division')
                        ->orderBy('confirmed')
                        ->orderByDesc('created_at')
                        ->get();


            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $action = route('admin.detail-pengaduan', $row->id);
                    $actionBtn = "<a href='{$action}' class='btn btn-primary' title='Lihat Data'>Lihat Laporan</a>";
                    return $actionBtn;
                })
                ->editColumn('pelapor', function($row) {
                    return $row->pelapor;
                })
                ->editColumn('confirmed', function($row) {
                    $confirmed = $row->confirmed ? "<div class='badge badge-success'>Sudah Ditanggapi</div>" : "<div class='badge badge-warning'>Belum Ditanggapi</div>";

                    return $confirmed;
                })
                ->rawColumns(['action', 'confirmed'])
                ->make(true);
        }

        return view('pages.reports.report');
    }

    public function consultation(Request $request)
    {
        if ($request->ajax()) {
            $data = Report::with('user', 'division')
                        ->whereHas('division')
                        ->orderBy('confirmed')
                        ->orderByDesc('created_at')
                        ->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $action = route('admin.detail-konsultasi', $row->id);
                    $actionBtn = "<a href='{$action}' class='btn btn-primary' title='Lihat Data'>Lihat Laporan</a>";
                    return $actionBtn;
                })
                ->editColumn('pelapor', function($row) {
                    return $row->pelapor;
                })
                ->editColumn('confirmed', function($row) {
                    $confirmed = $row->confirmed ? "<div class='badge badge-success'>Sudah Ditanggapi</div>" : "<div class='badge badge-warning'>Belum Ditanggapi</div>";

                    return $confirmed;
                })
                ->rawColumns(['action', 'confirmed'])
                ->make(true);
        }

        return  view('pages.reports.consultation');
    }

    public function getReport(Report $report)
    {
        $report = $report->load('user.position', 'user.village');

        return view('pages.reports.detail_report', compact('report'));
    }

    public function getConsultation(Report $report)
    {
        $report = $report->load('user.position', 'user.village', 'division');

        return view('pages.reports.detail_consultation', compact('report'));
    }

    public function update(Report $report, Request $request)
    {
        $report->update(['confirmed' => true]);

        return response()->json([
            'data' => ['message' => 'Laporan sudah di tanggapi']
        ]);
    }

    public function sendEmail(Report $report, Request $request)
    {
        $email = $report->user->email;

        $data = $request->only('subject', 'body');

        Mail::to($email)->send(new EmailReportResponse($data));

        return response()->json([
            'data' => ['message' => 'Tanggapan berhasil dikirim via email']
        ]);
    }

    public function getFile(Report $report)
    {
        $file = $report->file;
        $path = storage_path('app/public/files/' . $file);

        return response()->file($path);
    }
}
