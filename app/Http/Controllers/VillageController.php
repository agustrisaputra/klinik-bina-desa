<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function getVillage(District $district)
    {
        $villages = $district->villages()->get(['id', 'name']);

        return response()->json(['data' => $villages]);
    }
}
