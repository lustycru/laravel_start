<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BrandApiController extends Controller
{
    public function index() {
        $brands = Brand::All();
        return response()->json($brands);
    }

    public function detail($id) {
        $detail = Brand::query()->find($id);
        return response()->json($detail);
    }
}
