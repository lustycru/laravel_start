<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BrandController extends Controller
{
    public function index() {
        $brands = Brand::All();
        return view('brand', compact('brands'));
    }
}
