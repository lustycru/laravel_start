<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Motorcycle;

class MotorcycleApiController extends Controller
{
    public function index() {
        $motorcycles = Motorcycle::all();
        return response()->json($motorcycles);
    }

    public function detail($id) {
        $detail = Motorcycle::query()->find($id);
        return response()->json($detail);
    }
}
