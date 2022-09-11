<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Product;

class ProductController extends Controller
{
    public function show($id)
    {
        $data = []; //to be sent to the view

        $product = Product::findOrFail($id);
        $listOfSizes = array("XS", "S", "M", "L", "XL");

        $data["title"] = $product->getName();
        $data["product"] = $product;
        $data["sizes"] = $listOfSizes;
        return view('product.show')->with("data", $data);
    }
    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create product";

        return view('product.create')->with("data",$data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" => "required|gte:0"
        ]);
        // dd($request->all());
        //here goes the code to call the model and save it to the database

        return view('product.save')->with("input",$request);
    }
}
