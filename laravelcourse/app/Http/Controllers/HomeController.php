<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function contact()
    {
        return view('home.contact');
    }
}