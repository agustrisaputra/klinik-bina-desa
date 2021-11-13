<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users              = User::count();
        $reportCount        = Report::doesntHave('division')->count();
        $consultationCount  = Report::whereHas('division')->count();

        $reports        = $this->getNewReport();
        $consultations  = $this->getNewConsultation();

        return view('dashboard', compact('users','reportCount', 'consultationCount', 'reports', 'consultations'));
    }

    private function getNewReport()
    {
        return Report::with('user', 'division')
                    ->doesntHave('division')
                    ->whereConfirmed(false)
                    ->take(5)
                    ->get();
    }

    private function getNewConsultation()
    {
        return Report::with('user', 'division')
            ->whereHas('division')
            ->whereConfirmed(false)
            ->take(5)
            ->get();
    }
}
