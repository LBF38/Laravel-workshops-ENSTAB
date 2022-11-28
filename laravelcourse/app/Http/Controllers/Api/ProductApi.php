<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
// use Illuminate\Routing\Controller;

class ProductApi extends Controller
{
    public function index()
    {
        return Product::all();
    }
    public function show($id)
    {
        return Product::findOrFail($id);
    }
}
