<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::with('village', 'position')->get();

            return DataTables::of($data)
                ->addIndexColumn()
                // ->addColumn('action', function($row){
                //     $action = route('detail-pengguna', $row->id);
                //     $actionBtn = "<a href='{$action}' class='btn btn-primary' title='Lihat Data'><i class='fas fa-bars'></i></a>";
                //     return $actionBtn;
                // })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.pengguna.main');
    }
}
