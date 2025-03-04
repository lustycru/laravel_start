<?php

namespace App\Http\Controllers;

use App\Models\Motorcycle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MotorcycleController extends Controller
{
    public function index() {
        $motorcycles = Motorcycle::all();
        return view('motorcycle', compact('motorcycles'));
    }

    public function detail($id) {
        $detail = Motorcycle::query()->find($id);
        return view('detail', compact('detail'));
    }
}
