<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BrandController extends Controller
{
    public function index() {
        $brands = DB::select('SELECT * FROM brands');
        return view('brand', ['brands' => $brands]);
    }
}
