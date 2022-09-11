<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function show($id)
    {
        $data = []; //to be sent to the view

        $listProducts = array();
        $listProducts[121] = array("name" => "Tv samsung", "price" => "1000");
        $listOfSizes = array("XS", "S", "M", "L", "XL");
        if (in_array($id,$listProducts)){
            $data["title"] = $listProducts[$id]["name"];
            $data["product"] = $listProducts[$id];
            $data["sizes"] = $listOfSizes;
            return view('product.show')->with("data", $data);
        } else {
            return redirect('index');
        }
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
            "price" => "required"
        ]);
        dd($request->all());
        //here goes the code to call the model and save it to the database
    }
}
