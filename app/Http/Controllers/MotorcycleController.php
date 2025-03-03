<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MotorcycleController extends Controller
{
    public function index() {
        $motorcycles = DB::select('SELECT * FROM motorcycles');
        return view('motorcycle', ['motorcycles' => $motorcycles]);
    }
}
